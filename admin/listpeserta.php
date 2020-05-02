<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>


	  				 <div class="col-sm-3" style="background-color: green;">
                            <div style="margin-top: 130px;font-size: 20px;margin-left: 90px;">
                                    <a href="peserta.php" style="color: white;">Daftar</a>
                                </div>
                            <div style="margin-top :30px;font-size: 20px;margin-left: 90px;">
                                    <a href="listpeserta.php" style="color: white;">List Peserta</a>
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
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                       
                            </tr>
                        </thead>
                        <?php
                        	$mahasiswa = getMahasiswa(); $count=0;
                        	while ($data = mysqli_fetch_array($mahasiswa, MYSQLI_ASSOC)) {
                        		
                        	
                        ?>
                        <tbody>

                            <tr>
                                <td><?=++$count?></td>
                            	<td><?=$data['NIM']?></td>
                                <td><?=$data['nama']?></td>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                            </tr>
                        </tbody>
                        <?php
							}
                        ?>

    <tbody>
                            	
	Banyak Mahasiswa : <?=$count?> <br/>
	

                        </tbody>
                    </table>
                </div>
            </div>
        </div>						
	  				

	  				</div>


<?php
require_once "footer.php";

?>