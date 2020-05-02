<?php
	session_start();
	require_once "function/config.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$sql = "SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'" ;
	$data = mysqli_query($con, $sql);
	$hasil = mysqli_fetch_assoc($data);
	if ($hasil > 0) {
		$_SESSION['id'] = $hasil['id'];
		$_SESSION['nama'] = $hasil['nama'];
		$_SESSION['role'] = $hasil['role'];
		$_SESSION['prodi'] = $hasil['prodi'];
		$_SESSION['angkatan'] = $hasil ['angkatan'];
		header('location: index.php');
	}
	else {
		echo "tidak";
	}

	mysqli_close($con);
?>