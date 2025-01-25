<?php
require 'conifg.php'; 
$user_id = $_SESSION['user_id'];

$getUser = "SELECT * FROM cbt_user WHERE u_email = :user_email";
  $stmt =$pdo->prepare($getUser);
  $stmt->execute([':user_email' => $user_id]);
 $user = $stmt->fetch(PDO::FETCH_ASSOC);

  $GetPrice = $pdo->prepare("SELECT * FROM services_price");
  $GetPrice->execute();
  $prices = $GetPrice->fetch(PDO::FETCH_ASSOC);
