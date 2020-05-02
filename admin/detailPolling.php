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
 <div class="container">
            <div class="card mt-1">
                <div class="card-header text-center">
                    Detail Polling - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        $peserta = getPesertaPolling($_GET['id']); $count_setuju = 0; $count_tidak =0; 
                            while ($data = mysqli_fetch_array($peserta, MYSQLI_ASSOC)) {
                        ?>
                        <tbody>

                            <tr>
                                <td><?=$data['nama']?></td>
                                <td><?=$data['nim']?></td>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                                <td><?php 
                                    if ($data['status'] == 1) {
                                        echo "Setuju";
                                        $count_setuju++;
                                    }
                                    else {
                                        echo "Tidak Setuju";
                                        $count_tidak++;
                                    }
                                ?>
                                    
                                </td>
                            </tr>
                        </tbody>
                        <?php
                        }
                        ?>
    <tbody>
                            	
	ID Polling : <?= $_GET['id']?> <br/>
	Mata Kuliah : <?=getOneMatkul($_GET['id'])?> <br/>
	Jumlah Setuju : <?=$count_setuju?><br/>
    Jumlah Tidak Setuju : <?=$count_tidak?><br/>
 

                        </tbody>
                    </table>
                </div>
            </div>
        </div>						
	  				

	  				</div>


<?php
require_once "footer.php";

?>