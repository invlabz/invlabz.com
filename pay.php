<?php
require('config.php');
include ("connection.php");
require('razorpay-php/Razorpay.php');
if(!isset($_SESSION)) 
     { 
         session_start(); 
     }
use Razorpay\Api\Api;


$fname = $_POST['fname'];

$email = $_POST['email'];

$pwd = $_POST['pwd'];

$phone = $_POST['phone'];

$pname = $_POST['pname'];

$pphone = $_POST['pphone'];

$college_name = $_POST['college_name'];

$plan = $_POST['plan'];

$check = "SELECT * FROM users WHERE email='$email'";

$check_run = mysqli_query($connection,$check);

$num = mysqli_num_rows($check_run);

if ($num > 0) {

   echo "You have already Registered please login";
}

else
{

    if($plan == 'basic')
    {
  
        $insertquery = "INSERT INTO `users` (`fname`, `email`, `pwd`, `phone`, `pname`, `pphone`, `college`, `plan`) VALUES ('$fname', '$email', '$pwd', '$phone', '$pname', '$pphone', '$college_name', '$plan')";
        $run = mysqli_query($connection,$insertquery);
        echo "Thanks for Register with us As a basic plan";
    }
    
    else
    {
    
        $api = new Api($keyId, $keySecret);
        $orderData = [
            'receipt'         => 3456,
            'amount'          => $_POST['amount']*100 ,
            'currency'        => $_POST['currency'],
            'payment_capture' => 1
        ];
        
        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];
        $_SESSION['razorpay_order_id'] = $razorpayOrderId;
        $displayAmount = $amount = $orderData['amount'];

        $insertquery = "INSERT INTO `users` (`fname`, `email`, `pwd`, `phone`, `pname`, `pphone`, `college`, `plan`) VALUES ('$fname', '$email', '$pwd', '$phone', '$pname', '$pphone', '$college_name', '$plan')";

        $run = mysqli_query($connection,$insertquery);
    
        $data = [
            "key"               => $keyId,
            "amount"            => $amount,
            "name"              => $_POST['fname'],
            "email"             => $_POST['email'],
            "image"             => "",
            "mobile"           => $_POST['pphone'],
            "notes"             => [
            "merchant_order_id" => "12312321",
            ],
            "theme"             => [
            "color"             => "#F37254"
            ],
            "order_id"          => $razorpayOrderId,
        ];
        
        
        $json = json_encode($data);
        
        require("manual.php");
    
    
    }
    
    
    
}





?>