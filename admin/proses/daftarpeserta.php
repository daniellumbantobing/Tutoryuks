<?php
require "function/functions.php";
	daftar($_POST['nim'], $_POST['nama'], $_POST['prodi'], $_POST['username'], $_POST['password'], $_POST['role'], $_POST['gbr'],
	$_POST['angkatan']);
	 header('location: ../listpeserta.php');
?>