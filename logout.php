<?php
session_start();
if(!isset($_SESSION['nama'])){
	header('location: index.php');
}
unset($_SESSION['nama']);
unset($_SESSION['role']);
unset($_SESSION['prodi']);
header('location: index.php');


?>