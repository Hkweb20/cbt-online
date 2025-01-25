<?php
// Database configuration
require '../inc/conifg.php';
header('Content-Type: application/json');

// Read incoming form data (including files)
$data = $_POST;

// Initialize file upload handling
$errors = [];

// Validate basic fields
if (empty($data['type'])) $errors[] = 'Type is required';
if (empty($data['fullName'])) $errors[] = 'Full name is required';
if (empty($data['profileCode'])) $errors[] = 'Profile code is required';
if (empty($data['jambYear']) || !is_numeric($data['jambYear'])) $errors[] = 'JAMB year is required and must be numeric';
if (empty($data['additionalInfo'])) $errors[] = 'Additional information is required';

if (empty($data['subjects']) || !is_array($data['subjects'])) {
    $errors[] = 'Subjects must be provided';
} else {
    foreach ($data['subjects'] as $index => $subjectJson) {
        // Decode each subject JSON string into an array
        $subject = json_decode($subjectJson, true);

        // Now validate the fields inside the decoded subject
        if (empty($subject['subject'])) $errors[] = "Subject name is required for entry #$index";
        if (empty($subject['grade'])) $errors[] = "Grade is required for entry #$index";
        if (empty($subject['year']) || !is_numeric($subject['year'])) $errors[] = "Year is required and must be numeric for entry #$index";
        if (empty($subject['examNumber'])) $errors[] = "Exam number is required for entry #$index";
        if (empty($subject['examType'])) $errors[] = "Exam type is required for entry #$index";
    }
}

// File upload validation
$allowedFileTypes = ['image/png', 'image/jpeg', 'image/jpg'];
$maxFileSize = 3 * 1024 * 1024; // 3MB

// Validate first sitting file
if (isset($_FILES['firstSittingFile']) && $_FILES['firstSittingFile']['error'] === UPLOAD_ERR_OK) {
    $firstSittingFile = $_FILES['firstSittingFile'];
    // Check file type
    if (!in_array($firstSittingFile['type'], $allowedFileTypes)) {
        $errors[] = 'First sitting file must be PNG, JPG, or JPEG.';
    }
    // Check file size
    if ($firstSittingFile['size'] > $maxFileSize) {
        $errors[] = 'First sitting file size cannot exceed 3MB.';
    }
    // Move file to the uploads folder
    if (empty($errors)) {
        $firstSittingFilePath = 'uploads/' . basename($firstSittingFile['name']);
        move_uploaded_file($firstSittingFile['tmp_name'], $firstSittingFilePath);
        $data['firstSittingFile'] = $firstSittingFilePath;
    }
} else {
    $errors[] = 'First sitting file is required.';
}

// Validate second sitting file (if available)
if (isset($_FILES['secondSittingFile']) && $_FILES['secondSittingFile']['error'] === UPLOAD_ERR_OK) {
    $secondSittingFile = $_FILES['secondSittingFile'];
    // Check file type
    if (!in_array($secondSittingFile['type'], $allowedFileTypes)) {
        $errors[] = 'Second sitting file must be PNG, JPG, or JPEG.';
    }
    // Check file size
    if ($secondSittingFile['size'] > $maxFileSize) {
        $errors[] = 'Second sitting file size cannot exceed 3MB.';
    }
    // Move file to the uploads folder
    if (empty($errors)) {
        $secondSittingFilePath = 'uploads/' . basename($secondSittingFile['name']);
        move_uploaded_file($secondSittingFile['tmp_name'], $secondSittingFilePath);
        $data['secondSittingFile'] = $secondSittingFilePath;
    }
}

// If there are errors, return them
if (!empty($errors)) {
    echo json_encode(['status' => 'error', 'message' => $errors]);
    exit;
}

try {
    // Begin transaction
    $pdo->beginTransaction();

    // Insert main data into `students` table
    $stmt = $pdo->prepare("
        INSERT INTO jamb_olevelstudents (type, full_name, profile_code, jamb_year, additional_info, first_sitting_file, second_sitting_file)
        VALUES (:type, :fullName, :profileCode, :jambYear, :additionalInfo, :firstSittingFile, :secondSittingFile)
    ");
    $stmt->execute([
        ':type' => $data['type'],
        ':fullName' => $data['fullName'],
        ':profileCode' => $data['profileCode'],
        ':jambYear' => $data['jambYear'],
        ':additionalInfo' => $data['additionalInfo'],
        ':firstSittingFile' => $data['firstSittingFile'],
        ':secondSittingFile' => $data['secondSittingFile'] ?? null,
    ]);

    // Get the last inserted student ID
    $studentId = $pdo->lastInsertId();

    // Insert subjects into `subjects` table
    $stmt = $pdo->prepare("
        INSERT INTO jamb_olevelsubjects (student_id, subject_name, grade, year, exam_number, exam_type)
        VALUES (:studentId, :subjectName, :grade, :year, :examNumber, :examType)
    ");

    // Decode subjects if they are properly received as a stringified JSON
    if (isset($data['subjects']) && is_string($data['subjects'])) {
        $decodedSubjects = json_decode($data['subjects'], true);

        if (json_last_error() === JSON_ERROR_NONE && is_array($decodedSubjects)) {
            $data['subjects'] = $decodedSubjects;
        } else {
            $errors[] = "Subjects data is invalid";
        }
    } else {
        $errors[] = "Subjects must be provided as JSON";
    }

    if (empty($errors)) {
        foreach ($data['subjects'] as $subject) {
            $stmt->execute([
                ':studentId' => $studentId,
                ':subjectName' => $subject['subject'],
                ':grade' => $subject['grade'],
                ':year' => $subject['year'],
                ':examNumber' => $subject['examNumber'],
                ':examType' => $subject['examType'],
            ]);
        }
    }

    // Commit transaction
    $pdo->commit();

    // Respond with success
    echo json_encode(['status' => 'success', 'message' => 'Data submitted successfully']);
} catch (Exception $e) {
    // Rollback transaction on error
    $pdo->rollBack();
    echo json_encode(['status' => 'error', 'message' => 'Failed to save data: ' . $e->getMessage()]);
}
?>
