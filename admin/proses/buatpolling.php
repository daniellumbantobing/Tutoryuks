<?php
require "function/functions.php";
	buatpolling($_POST['matkul'], $_POST['expired'], $_POST['prodi'], $_POST['angkatan']);
	header('location: ../listpolling.php');
?>