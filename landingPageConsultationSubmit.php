<?php

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 
$servername = "localhost";
$username = "u482708547_asesa_soft";
$password = "YZbJ^z3]5kT";
$dbname = "u482708547_asesa_soft";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$firstName = filter_var($_POST["txtLandingPageFirstName"], FILTER_SANITIZE_STRING);
$lastName = filter_var($_POST["txtLandingPageLastName"], FILTER_SANITIZE_STRING);
$contactNo = filter_var($_POST["txtLandingPageContactNo"], FILTER_VALIDATE_INT);
$email = filter_var($_POST["txtLandingPageEmailId"], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST["txtLandingPageMsg"], FILTER_SANITIZE_STRING);
 
$firstName = test_input($firstName);
$lastName = test_input($lastName);
$contactNo = test_input($contactNo);
$email = test_input($email);
$message = test_input($message);
$dt_created = date('Y-m-d h:i:s');
  
if(!empty($firstName) && !empty($lastName) && !empty($contactNo) && !empty($email)){ 
    $sql = "INSERT INTO landingPageConsultation (customer_first_name,customer_last_name,customer_mobile, customer_email,customer_message,dt_created)
    VALUES ('".$firstName."','".$lastName."','".$contactNo."','".$email."','".$message."','".$dt_created."')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "success";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>