<?php
  session_start();
  // require_once "function/config.php";
  if(!isset($_SESSION['role'])){
  header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html>  
<head>
	<title>ADMIN</title>
  <link rel="stylesheet" href="..//css/style.css">
	<link rel="stylesheet" href="..//css/bootstrap.css">
</head>
<body>
  <div class="container-fluid">
    <!-- header -->
    <div class="header">
        <div class="p-2 bg">Tutor Yuks! Usergroup: <?php if(isset($_SESSION['role'])) echo $_SESSION['role']; else echo "tamu"?> </div>
    </div>
    <!-- akhir header -->
  <!-- Isi dan Menu Bar-->
    <div class="content"> 
      <div class="container-fluid">
        <div class="row" style="background-color: #4879EA;">
          <div class="menubar" style="">
            <div class="tab">
              <a href="index.php"><center><h4>HOME</h4></center></a>
            </div>

            <div class="tab">
              <a href="peserta.php"><center><h4>PESERTA</h4></center></a>
            </div>
            <div class="tab">
              <a href="polling.php"><center><h4>POLLING</h4></center></a>
            </div>
            <div class="tab">
              <a href="kelas.php"><center><h4>ENROLLKELAS</h4></center></a>
            </div>
            <div class="tab">
              <a href="tutor.php"><center><h4>TUTOR</h4></center></a>
            </div>
            <div class="tab">
              <a href="../logout.php"><center><h4>LOGOUT</h4></center></a>
            </div>
          </div>
            