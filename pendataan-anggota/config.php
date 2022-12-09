<?php
//File PHP berikut berfungsi untuk mengkoneksikan halaman web dengan database mysql
  $host="localhost"; //Nama host. Secara default kita tulis saja "localhost" (karena pakai XAMPP)
  $user="baliapji_admin"; //Username. Secara default kita tulis saja "root" (karena pakai XAMPP)
  $password="baliapjii2022"; //Password. Secara default kita tulis saja dengan nilai kosong
  $database="baliapji_db"; //Nama database yang akan kita gunakan
  $link=mysqli_connect($host,$user,$password,$database) or die(mysqli_error());
?>