<?php  
$amountPaid = $data['data']['amount']; 
$deduction = ($amountPaid * 1.8) / 100; // Calculate 1.8% of the amount
$amountPaid -= $deduction; // Deduct 1.8%
$amountPaid = round($amountPaid, 2); // Ensure 2 decimal places
 echo "Amount Paid: ". $amountPaid; // Output the amount paid after deduction

// You can store this amount paid in your database or use it as needed.
?>