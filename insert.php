<?php
include 'connect.php';


$submission_id = $_POST['submission_id']; 
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$amout = $_POST['amount'];
$duration = $_POST['duration'];
$comment = $_POST['comment'];

$phonenumber = $_POST['phonenumber13'][0] ."-". $_POST['phonenumber13'][1];

$sql = "INSERT INTO users (firstname, lastname, phone,email,amout,duration,comment)

?>