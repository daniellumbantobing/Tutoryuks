<?php
require_once "header.php";

?>

	  				<div class="col-sm-3" style="background-color: green;">
	  						<div style="margin-top: 130px;font-size: 20px;margin-left: 90px;">
	  								<a href="kelas.php" style="color: white;">Buka Enrolment Kelas</a>
								</div>
	  						<div style="margin-top :30px;font-size: 20px;margin-left: 90px;">
	  								<a href="listkelas.php" style="color: white;">Lihat Kelas</a>
	  							</div>
	  							
	  						
	  				</div>
	  				<div class="col-sm-7" style="background-color: #4879EA;">
	  					<h2>Buat Kelas</h2>

						<div class="container">
						  <form action="proses/buatkelas.php" method="POST" style="margin-top: 30px;">
						    <div class="a">
						      <div class="col-25">
						        <label for="matkul">Matakuliah :</label>
						      </div>
						      <div class="col-75">
						        <input type="text" id="matkul" name="matkul" placeholder="">
						      </div>
						  </div>
						   <div class="a">
						      <div class="col-25">
						        <label for="prodi">Prodi :</label>
						      </div>
						      <div class="col-75 mt-3">
						        <select name="prodi">
						        	<option>D3 TI</option>
						        	<option>D4 TI</option>
						        </select>
						        
						      </div>
						  </div>
						  <div class="a">
						      <div class="col-25">
						        <label for="Angkatan">Angkatan :</label>
						      </div>
						      <div class="col-75 mt-3">
						        <select name="angkatan">
						        	<option>2016</option>
						        	<option>2017</option>
						        	<option>2018</option>
						        	<option>2019</option>
						        </select>
						        
						      </div>
						  </div>
						  	<div class="a">
						      <div class="col-25">
						        <label for="tanggal">Tanggal Tutor :</label>
						      </div>
						      <div class="col-75">
						        <input  type="date" id="tanggal" name="tanggal" placeholder="Tanggal Tutor">
						      </div>
						  </div>
						  	<div class="a">
						      <div class="col-25">
						        <label for="waktu_mulai">Waktu Mulai :</label>
						      </div>
						      <div class="col-75">
						        <input  type="time" id="waktu_mulai" name="waktu_mulai" placeholder="Waktu Mulai">
						      </div>
						  </div>
						  	<div class="a">
						      <div class="col-25">
						        <label for="waktu_selesai">Waktu Selesai :</label>
						      </div>
						      <div class="col-75">
						        <input  type="time" id="waktu_selesai" name="waktu_selesai" placeholder="Waktu Mulai">
						      </div>
						  </div>
						  <div class="a">
						      <div class="col-25">
						        <label for="expired">Expired :</label>
						      </div>
						      <div class="col-75">
						        <input  type="date" id="expired" name="expired" placeholder="Tanggal">
						      </div>
						  </div>

     					
     						<input type="submit" name="bukakelas" value="Buka Kelas">
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
