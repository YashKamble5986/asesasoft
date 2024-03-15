<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mailer/vendor/autoload.php';
 
$servername = "127.0.0.1";
$username = "u482708547_asesa_soft";
$password = "YZbJ^z3]5kT";
$dbname = "u482708547_asesa_soft";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/* Code for new enquiry start*/
$sql = "SELECT * FROM enquiry WHERE is_mail_send=0";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    $mail = new PHPMailer(true);
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
    $mail->Host       = "smtpout.secureserver.net"; 
    $mail->Username   = 'info@asesasoft.com';                      
    $mail->Password   = '10xgrowth@2022'; 
    $mail->isHTML(true); 
    $mail->setFrom('info@asesasoft.com', 'New Enquiry');
    $mail->addAddress('pravinbhosale.5935@gmail.com');  
    $mail->addCC('miyogeshsalavi@gmail.com');
    $mail->addCC('gaurav@asesasoft.com');
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
/* Code for new enquiry end*/


/* Code for new consultation start*/
$sqlConsultation = "SELECT * FROM consultation WHERE is_mail_send=0";
$resultConsultation = mysqli_query($conn, $sqlConsultation);

if (mysqli_num_rows($resultConsultation) > 0) {
    $mail1 = new PHPMailer(true);
    $mail1->SMTPAuth   = TRUE;
    $mail1->SMTPSecure = "ssl";
    $mail1->Port       = 465;
    $mail1->Host       = "smtpout.secureserver.net"; 
    $mail1->Username   = 'info@asesasoft.com';                      
    $mail1->Password   = '10xgrowth@2022'; 
    $mail1->isHTML(true); 
    $mail1->setFrom('info@asesasoft.com', 'New Enquiry');
    $mail1->addAddress('pravinbhosale.5935@gmail.com');  
    $mail1->addCC('miyogeshsalavi@gmail.com');
    $mail1->addCC('gaurav@asesasoft.com');
    while($row = mysqli_fetch_assoc($resultConsultation)) {
        $mail1->Subject = 'New Enquiry For Consultation ('.$row['customer_first_name'].' '.$row['customer_last_name'].')';
        $mail1->Body    = "<html><head><title>New Enquiry</title></head><body><table><tr  style='border:1px solid black;'><th style='border:1px solid black;'>First name</th><th style='border:1px solid black;'>Last name</th><th style='border:1px solid black;'>Contact No</th><th style='border:1px solid black;'>Email</th><th style='border:1px solid black;'>Message</th></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>".$row['customer_first_name']."</td><td style='border:1px solid black;'>".$row['customer_last_name']."</td><td  style='border:1px solid black;'>".$row['customer_mobile']."</td><td style='border:1px solid black;'>".$row['customer_email']."</td><td style='border:1px solid black;'>".$row['customer_message']."</td></tr></table></body></html>"; 
        if (!$mail1->send()) {
            echo "Mailer Error: " . $mail1->ErrorInfo;
        } else {
            $sqlUpdateConsultation = "UPDATE consultation SET is_mail_send=1 WHERE id=".$row['id'];
            mysqli_query($conn, $sqlUpdateConsultation);
        } 
  }
}
/* Code for new consultation end*/

/* Code for new digital consultation start*/
$sqldigitalConsultation = "SELECT * FROM landingPageConsultation WHERE is_mail_send=0";
$resultdigitalConsultation = mysqli_query($conn, $sqldigitalConsultation);

if (mysqli_num_rows($resultdigitalConsultation) > 0) {
    $mail2 = new PHPMailer(true);
    $mail2->SMTPAuth   = TRUE;
    $mail2->SMTPSecure = "ssl";
    $mail2->Port       = 465;
    $mail2->Host       = "smtpout.secureserver.net"; 
    $mail2->Username   = 'info@asesasoft.com';                      
    $mail2->Password   = '10xgrowth@2022'; 
    $mail2->isHTML(true); 
    $mail2->setFrom('info@asesasoft.com', 'New Enquiry');
    $mail2->addAddress('pravinbhosale.5935@gmail.com');  
    $mail2->addCC('miyogeshsalavi@gmail.com');
    $mail2->addCC('gaurav@asesasoft.com');
    while($row = mysqli_fetch_assoc($resultdigitalConsultation)) {
        $mail2->Subject = 'Digital Marketing Enquiry ('.$row['customer_first_name'].' '.$row['customer_last_name'].')';
        $mail2->Body    = "<html><head><title>New Enquiry</title></head><body><table><tr  style='border:1px solid black;'><th style='border:1px solid black;'>First name</th><th style='border:1px solid black;'>Last name</th><th style='border:1px solid black;'>Contact No</th><th style='border:1px solid black;'>Email</th><th style='border:1px solid black;'>Message</th></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>".$row['customer_first_name']."</td><td style='border:1px solid black;'>".$row['customer_last_name']."</td><td  style='border:1px solid black;'>".$row['customer_mobile']."</td><td style='border:1px solid black;'>".$row['customer_email']."</td><td style='border:1px solid black;'>".$row['customer_message']."</td></tr></table></body></html>"; 
        if (!$mail2->send()) {
            echo "Mailer Error: " . $mail2->ErrorInfo;
        } else {
            $sqlUpdatedigitalConsultation = "UPDATE landingPageConsultation SET is_mail_send=1 WHERE id=".$row['id'];
            mysqli_query($conn, $sqlUpdatedigitalConsultation);
        } 
  }
}
/* Code for new digital consultation end*/

?>