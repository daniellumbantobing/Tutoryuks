<?php
require "function/functions.php";
	buatkelas($_POST['matkul'], $_POST['prodi'], $_POST['angkatan'], $_POST['tanggal'], $_POST['waktu_mulai'], $_POST['waktu_selesai'], $_POST['expired']);
	header('location: ../listkelas.php');
?>