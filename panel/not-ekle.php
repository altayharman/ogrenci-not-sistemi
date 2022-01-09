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

$tr1 = $_POST['turkce_1']; 
$tr2 = $_POST['turkce_2']; 
$mat1 = $_POST['matematik_1']; 
$mat2 = $_POST['matematik_2']; 

$sql = "UPDATE notlar set turkce_1 = $tr1, turkce_2 = $tr2, matematik_1 = $mat1, matematik_2 = $mat2";

if (mysqli_query($con, $sql)) {
    header("Location: /panel/index.php");
} else {
    echo "<script>alert('Notlar Eklenemedi');</script>";
}
mysqli_close($con);


?>