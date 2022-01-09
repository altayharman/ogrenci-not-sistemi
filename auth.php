<?php

session_start();

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "not_sistemi";
 
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if ( mysqli_connect_errno() ) {
	exit("Bağlantı hatası.");
}

$ogrenci = $_POST['ogrenci_no'];  
$sifre = $_POST['ogrenci_sifre'];   
      
$sql = "select * from ogrenci where ogrenci_no = '$ogrenci' and ogrenci_sifre = '$sifre' ";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  


if($count == 1){  
    $_SESSION["login"] = "True"; 
    $_SESSION["ogrenci_no"] = $ogrenci; 
    header("Location: /panel/index.php");
}  
else{    
    header("Location: /alogin.php");
}  

?>  