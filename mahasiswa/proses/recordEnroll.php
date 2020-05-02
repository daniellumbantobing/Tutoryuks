<?php
require_once "function/functions.php";
	$stat = $_GET['stat'];
	$idm = $_GET['idm']; 
	$idk = $_GET['idk'];
	$role = $_GET['role'];

	if (cekKelas($idm, $idk) == 0){
		recordKelasMhs($idm, $idk, $stat, $role);
	}
	else {
		ubahKelasMhs($idm, $idk, $stat, $role);
	}
		header('location: ../kelas.php');

?>