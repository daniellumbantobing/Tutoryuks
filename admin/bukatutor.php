<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>
				<div class="col-sm-7" style="background-color: #4879EA;">
					<?php
					$kelas = getOneKelas($_GET['id']);

					?>
	  					<h2 style="background-color: white;">Buat Tutor</h2>
						<div class="container">
						 <form action="proses/buattutor.php" method="POST" style="margin-top: 30px;">
						 	<input type="text" name="id" value="<?= $_GET['id']?>" hidden>
						    <div class="a">
						      <div class="col-25">
						        <label for="matkul">Matakuliah : </label>
						      </div>
						      <div class="col-75">
						         <input type="text" id="matkul" name="matkul" value="<?=$kelas['matkul']?>" disabled>
						      </div>
						  </div>
						   <div class="a">
						    <div class="a">
						      <div class="col-25">
						        <label for="prodi">Prodi : </label>
						      </div>
						      <div class="col-75">
						         <input type="text" id="prodi" name="prodi" value="<?=$kelas['prodi']?>"disabled>
						      </div>
						  </div>
						    <div class="a">
						    <div class="col-25">
						        <label for="angkatan">Angkatan : </label>
						      </div>
						      <div class="col-75">
						         <input type="text" id="angkatan" name="angkatan" value="<?=$kelas['angkatan']?>"disabled>
						      </div>
						  </div>
						  	<div class="a">
						      <div class="col-25">
						        <label for="tanggal">Tanggal Tutor :</label>
						      </div>
						      <div class="col-75">
						        <input  type="date" id="tanggal" name="tanggal" placeholder="Tanggal Tutor"  value="<?=$kelas['tanggal']?>">
						      </div>
						  </div>
						  	<div class="a">
						      <div class="col-25">
						        <label for="waktu_mulai">Waktu Mulai :</label>
						      </div>
						      <div class="col-75">
						        <input  type="time" id="waktu_mulai" name="waktu_mulai" placeholder="Waktu Mulai"  value="<?=$kelas['waktu_mulai']?>">
						      </div>
						  </div>
						  	<div class="a">
						      <div class="col-25">
						        <label for="waktu_selesai">Waktu Selesai :</label>
						      </div>
						      <div class="col-75">
						        <input  type="time" id="waktu_selesai" name="waktu_selesai" placeholder="Waktu Mulai"  value="<?=$kelas['waktu_selesai']?>">
						      </div>
						  </div>
						  <div class="a">
						      <div class="col-25">
						        <label for="ruangan">Ruangan :</label>
						      </div>
						      <div class="col-75">
						        <input  type="text" id="ruangan" name="ruangan" placeholder="Ruangan..">
						      </div>
						  </div>

     					
     						<input type="submit" name="bukakelas" value="Buka Tutor">
    						</form>
							</div>

	  				</div>
				</div>

			</div>


		</div>
		<!-- akhir isi -->

		<!--Footer-->
		<div class="footer">
  			<div class="p-2 bg">TutorYuks Copyright @2019</div>
		</div>
		<!--akhir footer-->
	</div>


<style>

input[type=text],[type=date],[type=time]{
    	
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 10px 10px 10px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 356px;
    margin-top: 30px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
   padding: 20px;		
    width: 600px;
    margin-top: 40px;
}

.col-25 {
    float: left;
    width: 20%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 80%;
    margin-top: 6px;
}

.a:after {
    content: "";
    display: table;
    clear: both;
}
input[type=text]{
	width: 330px;
}

h2{
	margin-left: 130px;
	margin-top: 30px;
}
</style>
</body>
</html>
