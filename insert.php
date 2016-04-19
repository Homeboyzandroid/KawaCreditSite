<?php
include 'connect.php';

if (@$_POST["submit"] <> "") {

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$amount =$_POST['amount'];
$duration = $_POST['duration'];
//$comment = $_POST['comment'];
 
// attempt insert query execution
$sql = "INSERT INTO users (firstname, lastname, phone,email,amount,duration)
 VALUES ('$first_name', '$last_name','phone',$email_address','amount','duration')";
if(mysqli_query($conn,$sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

?>
