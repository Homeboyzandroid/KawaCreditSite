
<?php
if(isset($_POST["submit"])){

$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=kawacredit", $username, $password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO users (firstname, lastname, phone,amout,duration,comments)
VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["phone"]."',
		'".$_POST["email"]."','".$_POST["amount"]."','".$_POST["duration"]."')";
if ($dbh->query($sql)) {
header("Location: http://localhost/~homeboyz/kawacreditsite/?message=Loan application sent Successfully'");}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
	
//echo $e->getMessage();
}

}
?>



