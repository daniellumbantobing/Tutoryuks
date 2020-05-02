<?php
  session_start();
  // require_once "function/config.php";
  // if(!isset($_SESSION['role'])){
  //   header('location: ../prosedural/login.php');
  // }
?>
<!DOCTYPE html>
<html>  
<head>
	<title>TutorYuks</title>
  <link rel="stylesheet" href="../prosedural/css/style.css">
	<link rel="stylesheet" href="../prosedural/css/bootstrap.css">
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
            <?php
              if (!isset($_SESSION['nama'])) {
            ?>
            <div class="tab">
              <a href="login.php"><center><h4>LOGIN</h4></center></a>
            </div>
            <?php
            }
            ?>
          