<?php

require_once "header.php";
require_once "proses/function/functions.php";
?>

	<div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Enrollment Kelas - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->
                    <br/>
                    <br/>

                    <!-- 
                        Tabel Untuk Mahasiswa  Sebagai Peserta 
                    -->
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Waktu</th>
                                <th>Peserta</th>
                                <th>Status</th>
                                <th>Enrollment</th>
                            </tr>
                        </thead> 
                        <?php
                        	$kelas = showKelas($_SESSION['prodi'], $_SESSION['angkatan']); 
                            global $jlh;
                            $jlh=0;
                        	while ($data = mysqli_fetch_array($kelas, MYSQLI_ASSOC)) {
                                $jlh++;

                        ?>
                        <tbody>

                            <tr>
                                <td><a href=""><?=$data['matkul']?></td></a>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                                <td><?=$data['tanggal']?> <br/> <?=$data['waktu_mulai']?> - <?=$data['waktu_selesai']?></td>
                                <td>
                                    <?php 
                                        global $count;
                                        $count = getJumlahPeserta($data['id']);
                                        echo $count;
                                    ?>
                                        
                                </td>
                                <td>
                                	<?php
                                	$stat = 0;

                                		if(cekKelas($_SESSION['id'], $data['id']) == 0){
                                			echo "Belum Enroll";
                                		}
                                		else {
                                			if(ambilStatusKelas($_SESSION['id'], $data['id']) == 0){
                                				echo "Tidak Enroll";
                                			} 
                                			else {
                                				$stat = 1; 
                                				echo "Enroll";
                                			}
                                		}
                                	?>
                                </td>
                                <td>
                                	<?php
                                    $enroll_stat = getKelasStat($data['id']);
                                    if($count == 30){
                                        echo "<button type='button' class='btn btn-secondary' disabled>Sudah Penuh</button>";
                                    }
                                    if($enroll_stat == 1){
                                    ?>
                                    <button type="button" class="btn btn-secondary" disablsed>Ditutup</button>
                                    <?php
                                    }

                                    else{


                                	if($stat == 1){

                                	?>
                                	<a href="proses/recordEnroll.php?idm=<?=$_SESSION['id']?>&idk=<?=$data['id']?>&stat=0&role=Peserta"> <button type="button" class="btn btn-warning">Unenroll Me</button></a>
                                	<?php
                                	}

                                	else {
                                	?>
                                	<a href="proses/recordEnroll.php?idm=<?=$_SESSION['id']?>&idk=<?=$data['id']?>&stat=1&role=Peserta">
                                	<button type="button" class="btn btn-success">Enroll Me</button>
                              		</a>
                              		<?php
                              		 }
                                    }
                              		 ?>
                                </td>
 
                            </tr>
                        </tbody>
                        <?php
                        	
                    	}
                        ?>
	<tbody>
                            	
	Banyak Kelas (sebagai Peserta) : <?=$jlh?><br/>

 
 

                        </tbody>
                    </table>

                    <!-- 
                    Tabel Untuk Mahasiswa Senior Enroll Sebagai Tutor
                     -->
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Waktu</th>
                                <th>Status</th>
                                <th>Enrollment</th>
                            </tr>
                        </thead>
                        <?php
                            $kelas = showKelasSenior($_SESSION['prodi'], $_SESSION['angkatan']); $jlh=0;
                            while ($data = mysqli_fetch_array($kelas, MYSQLI_ASSOC)) {

                        ?>
                        <tbody>

                            <tr>
                                <td><a href=""><?=$data['matkul']?></td></a>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                                <td><?=$data['tanggal']?> <br/> <?=$data['waktu_mulai']?> - <?=$data['waktu_selesai']?></td>
                                <td>
                                    <?php
                                    $stat = 0;
                                        if(cekKelas($_SESSION['id'], $data['id']) == 0){
                                            echo "Belum Enroll";
                                        }
                                        else {
                                            if(ambilStatusKelas($_SESSION['id'], $data['id']) == 0){
                                                echo "Tidak Enroll";
                                            } 
                                            else {
                                                $stat = 1; 
                                                echo "Enroll";
                                            }
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $enroll_stat = getKelasStat($data['id']);
                                    if($enroll_stat == 1){

                                    ?>
                                    <button type="button" class="btn btn-secondary" disabled>Ditutup</button>
                                    <?php
                                    }
                                    else{
                                    if($stat == 1){

                                    ?>
                                    <a href="proses/recordEnroll.php?idm=<?=$_SESSION['id']?>&idk=<?=$data['id']?>&stat=0&role=Pengajar"> <button type="button" class="btn btn-warning">Unenroll Me</button></a>
                                    <?php
                                    }

                                    else {
                                    ?>
                                    <a href="proses/recordEnroll.php?idm=<?=$_SESSION['id']?>&idk=<?=$data['id']?>&stat=1&role=Pengajar">
                                    <button type="button" class="btn btn-success">Enroll Me</button>
                                    </a>
                                    <?php
                                     }
                                     }
                                     ?>
                                </td>
 
                            </tr>
                        </tbody>
                        <?php
                            $jlh++;
                        }
                        ?>
    <tbody>
                                
    Banyak Kelas (Sebagai Tutor) : <?=$jlh?><br/>

 
 

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