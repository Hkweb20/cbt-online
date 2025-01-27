<?php
// Database configuration
require '../inc/conifg.php';

// Read incoming JSON data
$data = json_decode(file_get_contents('php://input'), true);

// Validate and sanitize inputs
$errors = [];

// Validate basic fields
if (empty($data['type'])) $errors[] = 'Type is required';
if (empty($data['fullName'])) $errors[] = 'Full name is required';
if (empty($data['profileCode'])) $errors[] = 'Profile code is required';
if (empty($data['jambYear']) || !is_numeric($data['jambYear'])) $errors[] = 'JAMB year is required and must be numeric';
if (empty($data['additionalInfo'])) $errors[] = 'Additional information is required';

// Validate subjects
if (empty($data['subjects']) || !is_array($data['subjects'])) {
    $errors[] = 'Subjects must be provided';
} else {
    foreach ($data['subjects'] as $index => $subject) {
        if (empty($subject['subject'])) $errors[] = "Subject name is required for entry #$index";
        if (empty($subject['grade'])) $errors[] = "Grade is required for entry #$index";
        if (empty($subject['year']) || !is_numeric($subject['year'])) $errors[] = "Year is required and must be numeric for entry #$index";
        if (empty($subject['examNumber'])) $errors[] = "Exam number is required for entry #$index";
        if (empty($subject['examType'])) $errors[] = "Exam type is required for entry #$index";
    }
}

// Validate file inputs (if required)
if (empty($data['firstSittingFile'])) $errors[] = 'First sitting file is required';
if (isset($data['secondSittingFile']) && empty($data['secondSittingFile'])) {
    $errors[] = 'Second sitting file is required if second sitting is checked';
}

// If there are errors, return them
if (!empty($errors)) {
    echo json_encode(['status' => 'error', 'errors' => $errors]);
    exit;
}

try {
    // Begin transaction
    $pdo->beginTransaction();

    // Insert main data into `students` table
    $stmt = $pdo->prepare("
        INSERT INTO students (type, full_name, profile_code, jamb_year, additional_info, first_sitting_file, second_sitting_file)
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
        INSERT INTO subjects (student_id, subject_name, grade, year, exam_number, exam_type)
        VALUES (:studentId, :subjectName, :grade, :year, :examNumber, :examType)
    ");
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
