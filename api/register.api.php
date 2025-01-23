<?php
header('Content-Type: application/json');
require '../inc/conifg.php';
 if ($_SERVER['REQUEST_METHOD'] === "POST") {
    

// Get POST data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$user_type = $_POST['user_type'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate input
if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($phone) || empty($state) || empty($user_type) || empty($password) || empty($confirm_password)) {
    echo json_encode(array("status" => "error", "message" => "All fields are required."));
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array("status" => "error", "message" => "Invalid email format."));
    exit();
}

if ($password !== $confirm_password) {
    echo json_encode(array("status" => "error", "message" => "Passwords do not match."));
    exit();
}
// Check if user already exists
$sql = "SELECT * FROM cbt_user WHERE u_userName = :username OR u_email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username, 'email' => $email]);

if ($stmt->rowCount() > 0) {
    echo json_encode(array("status" => "error", "message" => "User already exists."));
    exit();
}

// Insert new user
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO cbt_user (u_firstName, u_lastName, u_userName, u_password, u_email, u_phone, u_state, u_type) VALUES (:first_name, :last_name, :username, :hashed_password, :email, :phone, :state, :user_type)";
$stmt = $pdo->prepare($sql);
$params = [
    'first_name' => $first_name,
    'last_name' => $last_name,
    'username' => $username,
    'hashed_password' => $hashed_password,
    'email' => $email,
    'phone' => $phone,
    'state' => $state,
    'user_type' => $user_type
];

if ($stmt->execute($params)) {
    echo json_encode(array("status" => "success", "message" => "User registered successfully."));
} else {
    echo json_encode(array("status" => "error", "message" => "Error: " . $stmt->errorInfo()[2]));
}

 }else{
    echo json_encode(array("error"=> "Method not allowed"));
 }
?>