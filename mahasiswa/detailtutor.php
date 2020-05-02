<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>
                    <div class="col-sm-10">
                    <br/>
 <div class="container">
            <div class="card mt-1">
                <div class="card-header text-center">
                    Detail Tutor - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div>
                    <br>
                    <a href="index.php" class="btn btn-primary ml-2">Kembali</a>
                </div>
                <div class="card-body">

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->

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
         
                </div>
            </div>
        </div>                      
                    

                    </div>


<?php
require_once "footer.php";

?>