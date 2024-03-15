<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mailer/vendor/autoload.php';

$servername = "localhost";
$username = "u482708547_asesa_soft";
$password = "YZbJ^z3]5kT";
$dbname = "u482708547_asesa_soft";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM enquiry WHERE is_mail_send=0";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $mail = new PHPMailer(true);
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
    $mail->Host       = "asesasoft.com"; 
    $mail->Username   = 'noreply@asesasoft.com';                      
    $mail->Password   = 'AI~f-#,WDO)v'; 
    $mail->isHTML(true); 
    $mail->setFrom('noreply@asesasoft.com', 'New Enquiry');
    $mail->addAddress('pravinbhosale.5935@gmail.com');  
    $mail->addCC('miyogeshsalavi@gmail.com');
    $mail->addBCC('digvijaybachate@gmail.com');
    while($row = mysqli_fetch_assoc($result)) {
        $mail->Subject = 'New Enquiry ('.$row['customer_first_name'].' '.$row['customer_last_name'].')';
        $mail->Body    = "<html><head><title>New Enquiry</title></head><body><table><tr  style='border:1px solid black;'><th style='border:1px solid black;'>First name</th><th style='border:1px solid black;'>Last name</th><th style='border:1px solid black;'>Contact No</th><th style='border:1px solid black;'>Email</th><th style='border:1px solid black;'>Message</th></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>".$row['customer_first_name']."</td><td style='border:1px solid black;'>".$row['customer_last_name']."</td><td  style='border:1px solid black;'>".$row['customer_mobile']."</td><td style='border:1px solid black;'>".$row['customer_email']."</td><td style='border:1px solid black;'>".$row['customer_message']."</td></tr></table></body></html>"; 
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $sqlUpdate = "UPDATE enquiry SET is_mail_send=1 WHERE id=".$row['id'];
            mysqli_query($conn, $sqlUpdate);
        } 
  }
}

?>