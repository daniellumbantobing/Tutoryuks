<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>


	  				<div class="col-sm-3" style="background-color: green;">
	  						<div style="margin-top: 130px;font-size: 20px;margin-left: 90px;">
	  								<a href="polling.php" style="color: white;">Buat Polling</a>
								</div>
	  						<div style="margin-top :30px;font-size: 20px;margin-left: 90px;">
	  								<a href="listpolling.php" style="color: white;">Hasil Polling</a>
	  							</div>
	  							
	  						
	  				</div>

	  				<div class="col-sm-6">
	  				<br/>
	  				<a href="pollingexpired.php" class="btn btn-warning ml-1 mb-4">Lihat Polling Expired</a>
	  				<br/>
						<table class="table table-bordered" style="background-color: white;">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Mata Kuliah</th>
						      <th scope="col">Tanggal Pembuatan</th>
						      <th scope="col">Expired</th>
						      <th scope="col">Status</th>
						    </tr>
						  </thead>
						  <?php
						  	$polling = getAllPolling(); $i=1;
						  	$tanggal = strtotime(date('Y-m-d'));
						  	while($dataPolling = mysqli_fetch_array($polling, MYSQLI_ASSOC)){
						  		if($dataPolling['status_expired'] == 1){


						  	
						  ?>
						  <tbody>
						    <tr>
						      <th scope="row"><?=$i++?></th>
						      <td><a href="detailPolling.php?id=<?=$dataPolling['id']?>"><?= $dataPolling['matkul']?></td></a>
						      <td><?= $dataPolling['tanggal_pembuatan']?></td>
						      <td><?= $dataPolling['expired']?></td>
						      <td>Expired</td>
						    </tr>
						  </tbody>
						  <?php
							}
							}
						  ?>

						</table>

	  				</div>


<?php
require_once "footer.php";

?>