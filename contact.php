<?php
include 'connect.php';

if(isset($_POST["submit"])){

try {
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO contacts (name,email, subject, message)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";
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
