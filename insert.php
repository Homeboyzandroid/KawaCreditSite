
<?php
include 'connect.php';

if(isset($_POST["submit"])){

try {
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO users (firstname,lastname, nationalid, krapin,phone, email, dob, gender, address, amout, duration, paymentf)
VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["national"]."','".$_POST["kpin"]."',
	'".$_POST["phone"]."','".$_POST["email"]."','".$_POST["dob"]."','".$_POST["gender"]."','".$_POST["address"]."',
	'".$_POST["amount"]."','".$_POST["duration"]."','".$_POST["payf"]."')";
if ($dbh->query($sql)) {
header("Location: http://localhost/~homeboyz/kawacreditsite/?<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>");
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}


}
?>



