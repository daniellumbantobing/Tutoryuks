<?php
require_once "function/functions.php";
	$stat = $_GET['stat'];
	$idm = $_GET['idm'];
	$idp = $_GET['idp'];

	if (cekPolling($idm, $idp) == 0){
		recordPollingMhs($idm, $idp, $stat);
	}
	else {
		echo "Ada";
		ubahPollingMhs($idm, $idp, $stat);
	}
		header('location: ../polling.php');

?>