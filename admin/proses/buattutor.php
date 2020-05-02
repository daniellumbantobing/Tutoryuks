<?php
require "function/functions.php";
// echo $_POST['id'] . $_POST['ruangan'] . $_POST['tanggal']. $_POST['waktu_mulai'].  $_POST['waktu_selesai'];
buattutor($_POST['id'], $_POST['ruangan'], $_POST['tanggal'], $_POST['waktu_mulai'], $_POST['waktu_selesai']);
header('location: ../tutor.php');
?>