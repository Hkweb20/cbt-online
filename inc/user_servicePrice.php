<?php
require 'conifg.php'; 
$user_id = $_SESSION['user_id'];

$getUser = "SELECT * FROM cbt_user WHERE u_email = :user_email";
  $stmt =$pdo->prepare($getUser);
  $stmt->execute([':user_email' => $user_id]);
 $user = $stmt->fetch(PDO::FETCH_ASSOC);
 $data = json_decode($user['u_reserve'], true); // Decoding JSON data into an array
 $bankAccounts = $data['data']['account'][0]  ?? '';
 $accountNumber = $bankAccounts['account_number'] ?? '';
 $accountName = $bankAccounts['account_name']  ?? '';
 $bankName = $bankAccounts['bank_name'] ?? '';

  $GetPrice = $pdo->prepare("SELECT * FROM services_price");
  $GetPrice->execute();
  $prices = $GetPrice->fetch(PDO::FETCH_ASSOC);
