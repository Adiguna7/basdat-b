<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if($_SESSION['level'] == "admin" || $_SESSION['level'] == "pasien"){

//session terdaftar, saatnya logout
session_unset();
session_destroy();
echo "Berhasil Logout";
header("Refresh: 3, url= loginpage.php");
}
else{

//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
header("location: loginpage.php?pesan=gagal");
}
?>