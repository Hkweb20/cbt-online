<?php 
//include"inc/wallet_balance.php"; 
include "inc/conifg.php";
require './inc/bil_details.php';
//include"inc/bonus.php";
//include"inc/account_details.php";
$email = $_SESSION['user_id'];
// Assuming you have already created a PDO instance $pdo
$sql = "SELECT u_reserve, u_firstName, u_lastName, u_email, u_phone FROM cbt_user WHERE u_email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

// Fetch the result
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$bil_account = $row['u_reserve'];
$First_Name = $row['u_firstName'];
$Last_Name = $row['u_lastName'];
$phone_number = $row['u_phone'];
$Email = $row['u_email'];

  
   if ($bil_account=='') {
         
    $customer_email = $Email;
    $firstname = $First_Name;
    $lastname = $Last_Name;
    $customer_phone_number = $phone_number;  //$_SESSION['phone_number'];
    $reference = "BIL" . rand(0,6000);
    // API endpoint
    $url = "https://api.billstack.co/v2/thirdparty/generateVirtualAccount/"; // Replace with the actual API URL
    
    // Headers
    $headers = [
        "Authorization: Bearer $apiSecret",
        "Content-Type: application/json",
    ];
 
    // Request body
    $respondate = [
        "email" => $customer_email,
        "firstName" => $firstname,
        "lastName" => $lastname,
        "reference" => $reference,
        "phone" => $customer_phone_number,
        "bank" => "9PSB", // Bank codes as an array
    ];
    
    // Initialize cURL session
    $ch = curl_init($url);
    
    // Configure cURL options
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($respondate));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    

$response = curl_exec($ch);
  echo $response;
// Log the raw response
file_put_contents("bilres.txt", $response);

$data = json_decode($response, true);

if (isset($data['status']) && $data['status'] === true) {
  

      // Assuming you have already created a PDO instance $pdo
$sql_update = "UPDATE cbt_user SET u_reserve = :response WHERE u_email = :email";
$stmt = $pdo->prepare($sql_update);

if ($stmt) {
    // Bind parameters as strings
    $stmt->bindParam(':response', $response, PDO::PARAM_STR);
    $stmt->bindParam(':email', $Email, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Successfully updated
    } else {
        // Log SQL error
        file_put_contents("update_error.txt", implode(", ", $stmt->errorInfo()));
    }
} else {
    // Log SQL prepare error
    file_put_contents("prepare_error.txt", implode(", ", $pdo->errorInfo()));
}

}

  


    }
 ?> 
 