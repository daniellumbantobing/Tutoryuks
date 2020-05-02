<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>


                    <div class="col-sm-3" style="background-color: green;">
                            <div style="margin-top: 130px;font-size: 20px;margin-left: 90px;">
                                    <a href="kelas.php" style="color: white;">Buka Enrolment Kelas</a>
                                </div>
                            <div style="margin-top :30px;font-size: 20px;margin-left: 90px;">
                                    <a href="listkelas.php"style="color: white;">Lihat Kelas</a>
                                </div>
	  						
	  				</div>

	  				<div class="col-sm-7">
	  				<br/>
 <div class="container">
            <div class="card mt-1">
                <div class="card-header text-center">
                    Detail Enrollment - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <label></label>
                                <th>#</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        $peserta = getPesertaKelas($_GET['id']); global $countPeserta; $countPeserta=0;
                            while ($data = mysqli_fetch_array($peserta, MYSQLI_ASSOC)) {
                                if($data['status'] == 1 && $data['role'] == 'Peserta'){


                        ?>
                        <tbody>

                            <tr>
                                <td><?=++$countPeserta?></td>
                                <td><?=$data['nama']?></td>
                                <td><?=$data['nim']?></td>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                                <td><?=$data['role']?></td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        }
                        ?>
    <tbody>
                            	
	ID Enrollment : <?= $_GET['id'] ?> <br/>
	Mata Kuliah :  <?=getOneMatkulKelas($_GET['id'])?> <br/>
    <B> Daftar Peserta </B> <br/>
	Jumlah Peserta : <?=$countPeserta?> <br/>

                        </tbody>
                        <tbody>
                            
                        </tbody>
                    </table>

<!--
 Table Untuk Pengajar
 -->
 <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <label></label>
                                <th>#</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        $peserta = getPesertaKelas($_GET['id']); global $countPengajar; $countPengajar = 0;;
                            while ($data = mysqli_fetch_array($peserta, MYSQLI_ASSOC)) {
                                if($data['status'] == 1 && $data['role'] == 'Pengajar'){


                        ?>
                        <tbody>

                            <tr>
                                <td><?=++$countPengajar?></td>
                                <td><?=$data['nama']?></td>
                                <td><?=$data['nim']?></td>
                                <td><?=$data['prodi']?></td>
                                <td><?=$data['angkatan']?></td>
                                <td><?=$data['role']?></td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        }
                        ?>
    <tbody>
                                
    <B>Daftar Pengajar</B> <br>
   Jumlah Pengajar : <?=$countPengajar?> <br/>
 

                        </tbody>
                        <tbody>
                            
                        </tbody>
                    </table>
            <?php
            $stat = getKelasStat($_GET['id']);
            if ($stat == 1) {
            ?>
            <button type="button" class="btn btn-secondary" disabled>Tutor Sudah Dibuat</button>
            <?php    
            }
            else {
           

                if($countPengajar>0 && $countPeserta >= 5){

            ?>
                <a href="bukatutor.php?id=<?=$_GET['id']?>"><button type="button" class="btn btn-success">Buat Tutor</button></a>
            <?php
            }
            else if($countPengajar == 0 || $countPeserta < 5){

            ?>
            <button type="button" class="btn btn-warning">Syarat membuka tutor belum terpenuhi</button>
            <?php
             }

        }
            ?>
                </div>
            </div>
        </div>						
	  				

	  				</div>


<?php
require_once "footer.php";

?>