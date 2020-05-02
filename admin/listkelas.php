<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>


	  				<div class="col-sm-3" style="background-color: green;">
	  						<div style="margin-top: 130px;font-size: 20px;margin-left: 90px;">
	  								<a href="kelas.php" style="color: white;">Buka Enrolment Kelas</a>
								</div>
	  						<div style="margin-top :30px;font-size: 20px;margin-left: 90px;">
	  								<a href="listkelas.php" style="color: white;">Lihat Kelas</a>
	  							</div>
	  							
	  						
	  				</div>

	  				<div class="col-sm-7">
	  				<br/>
 <div class="container">
            <div class="card mt-1">
                <div class="card-header text-center">
                    Daftar Enrollment Kelas - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            	<th>#</th>
                                <th>Mata Kuliah</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Tanggal Tutor</th>
                                <th>Waktu</th>
                       
                            </tr>
                        </thead>
                        <?php
                        	$kelas = getAllKelas(); $count=0;
                        	while ($data = mysqli_fetch_array($kelas, MYSQLI_ASSOC)) {
                        		
                        	
                        ?>
                        <tbody>

                            <tr>
                                <td><?=++$count?></td>
                            	<td><a href="detailKelas.php?id=<?=$data['id']?>"> <?=$data['matkul']?></a></td>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                                <td><?=$data['tanggal']?></td>
                                <td><?=$data['waktu_mulai']?> - <?=$data['waktu_selesai']?></td>
                            </tr>
                        </tbody>
                        <?php
							}
                        ?>

    <tbody>
                            	
	Banyak Kelas : <?=$count?> <br/>
	

                        </tbody>
                    </table>
                </div>
            </div>
        </div>						
	  				

	  				</div>


<?php
require_once "footer.php";

?>