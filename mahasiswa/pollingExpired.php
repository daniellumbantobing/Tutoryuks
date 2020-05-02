<?php

require_once "header.php";
require_once "proses/function/functions.php";
?>

	<div class="col-md-8">

            <div class="card mt-5">
                <div class="card-header text-center">
                    Polling Expired - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">
                <a href="polling.php" class="btn btn-primary ml-2">Kembali</a>

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Tanggal Expired</th>
                                <th>Pilihan Saya</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        	$polling = showPolling($_SESSION['prodi'], $_SESSION['angkatan']); $count=0;
                        	while ($dataPolling = mysqli_fetch_array($polling, MYSQLI_ASSOC)) {
                                if($dataPolling['status_expired'] == 1){


                        ?>
                        <tbody>

                            <tr>
                                <td><a href=""><?=$dataPolling['matkul']?></td></a>
                                <td><?=$dataPolling['prodi']?></td>
                                <td><?=$dataPolling['angkatan']?></td>
                                <td><?=$dataPolling['expired']?></td>
                                <td>
                                	<?php
                                		if(cekPolling($_SESSION['id'], $dataPolling['id']) == 0){
                                			echo "Belum dipilih";
                                		}
                                		else {
                                			if(ambilStatusPolling($_SESSION['id'], $dataPolling['id']) == 0){
                                				echo "Tidak Setuju";
                                			} 
                                			else {
                                				echo "Setuju";
                                			}
                                		}
                                	?>

                                </td>
                                <td>
                                <?php if($dataPolling['status_expired'] == 1){
                                    echo "Expired";
                                } 
                                ?></td>
 
                            </tr>
                        </tbody>
                        <?php
                        	$count++;
                    	}
                        }
                        ?>
	<tbody>
                            	
	Banyak Polling : <?=$count?><br/>

 
 

                        </tbody>
                    </table>
                </div>
            </div>
        </div>						
	  				

	  				</div>
	</div>






<?php
require_once "footer.php";
?>