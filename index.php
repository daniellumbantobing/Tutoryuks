<?php
require_once "templates/header.php";
?>
<?php
	if(!isset($_SESSION['role'])){
		header('location: login.php');
	}
	if(isset($_SESSION['role'])){
		if($_SESSION['role'] == "admin"){
			header('location: admin/index.php');
		}
	}
	if(isset($_SESSION['role'])){
		if($_SESSION['role'] == "mahasiswa"){
			header('location: mahasiswa/index.php');
		}
	}

	if(isset($_SESSION['nama'])){

?>
	<div class="tab">
    	<a href="/logout.php"><center><h4>LOGOUT</h4></center></a>
	</div>
<?php
	}
?>
</div>
<!-- akhir tab menu -->


<?php
require_once "templates/footer.php";
?>