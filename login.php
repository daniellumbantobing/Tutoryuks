<?php
require_once "templates/header.php";
if (isset($_SESSION['nama'])) {
	header('location: index.php');
}
?>
	<!-- awal login -->
</div>
<center>

	<div class="col-sm-5" style="background-color: #4879EA;"> 
		<h2>Login Form </h2>
		<form  method="post" action="login_process.php">
		  <div class="imgcontainer">
		    <img src="images/user.png" alt="Avatar" class="avatar">
		  </div>
		  <div class="container">
		    <label><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" id="username" name="username" required>
		    <label><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="password" required>
		    <button type="submit" id="login" name="login">Masuk</button>
		    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
		  </div>

		  <div class="container" style="background-color:#f1f1f1">

		  </div>
		</form>
	</div>
</center>
	  				<!-- akhir login -->
<?php
require_once "templates/footer.php";
?>