<?php
// Include database connection
session_start();
require   '../inc/conifg.php';
header('Content-Type: Application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get POST data
    $email = $_POST['email'];
    $pass = $_POST['password'];


    // Validate input
    if (empty($email) || empty($pass)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.', 'data'=> $pass]);
        exit;
    }
  

    try {
        // Prepare SQL statement
        $stmt = $pdo->prepare("SELECT `u_firstName`, `u_password`, `u_email`, `u_phone`, `u_status` FROM `cbt_user` WHERE `u_email` = :email");
        $stmt->execute([':email' => $email]);

        // Fetch user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($pass, $user['u_password'])) {

            if ($user['u_status'] == 0) {
                echo json_encode(['status' => 'error', 'message' => 'Your account is inactive.']);
                exit;
            }
            // Successful login
            //session start
               $_SESSION['user_id'] = $user['u_email'];

 
            echo json_encode(['status' => 'success', 'message' => 'Login successful.', 'data' => $user]);
        } else {
            // Invalid credentials
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>