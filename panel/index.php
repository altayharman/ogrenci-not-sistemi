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

?>

<link rel="icon" href="/logo.ico" type="image/x-icon" />
<title>MEÜ | Öğrenci Paneli</title>

<center><form action="not-ekle.php" method="POST">
        <div>
        <label><span>Türkçe 1.Sınav</span></label>
        <input autocomplete="turkce_1" type="text" name="turkce_1" class="form__input" required>
        </div>
        <br>
        <div>
        <label><span>Türkçe 2.Sınav</span></label>
        <input autocomplete="turkce_2" type="text" name="turkce_2" class="form__input" required>
        </div>
        <br>
        <div>
        <label><span>Matematik 1.Sınav</span></label>
        <input autocomplete="matematik_1" type="text" name="matematik_1" class="form__input" required>
        </div>
        <br>
        <div>
        <label><span>Matematik 2.Sınav</span></label>
        <input autocomplete="matematik_2" type="text" name="matematik_2" class="form__input" required>
        </div>
        <br>
        <div>
        <input type="submit" value="Notları Ekle">
      </div>
</form>
<form action="not-temizle.php" method="POST">
        <input type="submit" value="Notları Temizle">
      </div>
</form>
<form action="not-listele.php" method="POST">
        <div>
        <label><span>Türkçe 1.Sınav : 
        <?php 
        $baglanti = new mysqli("localhost", "root", "", "not_sistemi");
        $baglanti->set_charset("utf8");
        $sorgu = $baglanti->query("SELECT turkce_1 FROM notlar");
        $cikti = $sorgu->fetch_array();
        echo $cikti["turkce_1"];
        $sorgu->close();
        $baglanti->close();        
        ?>
        </span></label>
        </div>
        <br>
        <div>
        <label><span>Türkçe 2.Sınav : 
        <?php 
        $baglanti = new mysqli("localhost", "root", "", "not_sistemi");
        $baglanti->set_charset("utf8");
        $sorgu = $baglanti->query("SELECT turkce_2 FROM notlar");
        $cikti = $sorgu->fetch_array();
        echo $cikti["turkce_2"];
        $sorgu->close();
        $baglanti->close();        
        ?>
        </span></label>
        </div>
        <br>
        <div>
        <label><span>Matematik 1.Sınav : 
        <?php 
        $baglanti = new mysqli("localhost", "root", "", "not_sistemi");
        $baglanti->set_charset("utf8");
        $sorgu = $baglanti->query("SELECT matematik_1 FROM notlar");
        $cikti = $sorgu->fetch_array();
        echo $cikti["matematik_1"];
        $sorgu->close();
        $baglanti->close();        
        ?>
        </span></label>
        </div>
        <br>
        <div>
        <label><span>Matematik 2.Sınav : 
        <?php 
        $baglanti = new mysqli("localhost", "root", "", "not_sistemi");
        $baglanti->set_charset("utf8");
        $sorgu = $baglanti->query("SELECT matematik_2 FROM notlar");
        $cikti = $sorgu->fetch_array();
        echo $cikti["matematik_2"];
        $sorgu->close();
        $baglanti->close();        
        ?>
        </span></label>
        </div>
        <br>
        <div>
      </div>
</form>
<br>
<a href="cikis.php">Çıkış Yap</a>
</center>