<?php

require_once "header.php";
require_once "proses/function/functions.php";
?>

	<div class="col-md-8">
        <?php
            $tanggal = date('Y-m-d');
        ?>
            <div class="card mt-5">
                <div class="card-header text-center">
                    Polling Tutor - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">
                <a href="pollingExpired.php" class="btn btn-primary ml-2">Lihat Polling Expired</a>

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
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <?php
                        	$polling = showPolling($_SESSION['prodi'], $_SESSION['angkatan']); $count=0;
                        	while ($dataPolling = mysqli_fetch_array($polling, MYSQLI_ASSOC)) {
                                if (strtotime($tanggal) >= strtotime($dataPolling['expired'])) {
                                    updateExpiredPolling($dataPolling['id']);
                                }
                                if($dataPolling['status_expired'] == 0){


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
                                <td><a href="proses/recordPolling.php?idm=<?=$_SESSION['id']?>&idp=<?=$dataPolling['id']?>&stat=1"> Setuju </a> |<a href="proses/recordPolling.php?idm=<?=$_SESSION['id']?>&idp=<?=$dataPolling['id']?>&stat=0"> Tidak </a></td>
 
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