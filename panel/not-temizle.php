<?php

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "not_sistemi";
 
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

session_start();

if(!isset($_SESSION["login"]))
{

header("Location: /login.php");
 
} 

$ogrenci = $_SESSION['ogrenci_no']; 


$sql = "INSERT INTO notlar (turkce_1, turkce_2, matematik_1, matematik_2) VALUES ('0', '0', '0', '0')";

if (mysqli_query($con, $sql)) {
    header("Location: /panel/index.php");
} else {
    echo "<script>alert('Notlar Temizlenemedi');</script>";
}
mysqli_close($con);


?>