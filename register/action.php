<?php 
include '../server/db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$idno = $_POST['idno'];
$email = $_POST['email'];
$password = $_POST['psw'];


$sql = "INSERT INTO `accounts`(`firstName`, `lastName`, `userName`, `email`, `idNumber`, `password`) 
        VALUES ('$fname','$lname','$uname','$email','$idno','$password')";

$conn->query($sql)

?>