<?php

include_once "proses/function/functions.php";
?>

                <div class="card-body">

                    <!-- <a href="/jemaat/tambah" class="btn btn-primary">Input Jemaat Baru</a> -->

                    <table class="table table-bordered table-hover table-striped" border="2">
                        <thead>
                            <tr>
                                <label></label>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                                <th>Tanda tangan</th>
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
                                <td></td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        }
                        ?>
    <tbody>
    <?php 
        $kelas = getOneKelas($_GET['id']);
     ?>
    Mata Kuliah :  <?=getOneMatkulKelas($_GET['id'])?> <br/>
    Prodi : <?= $kelas['prodi'] ?> <br/>
    Angkatan : <?= $kelas['angkatan'] ?> <br/>
    Waktu : <?= $kelas['tanggal'] ?> <br/>
    Ruangan : <?= $kelas['ruangan'] ?> <br/>
    <B> Daftar Peserta </B> <br/> <br/>
    
                        </tbody>
                        <tbody>
                            
                        </tbody>
                    </table>
Jumlah Peserta : <?=$countPeserta?> <br/>
<br/>
<br/>
<h4>Sitoluama, <?=date('d M Y')?></h4>
<br/> 
<h5>(..................................................)</h5>
<h5>Pengajar</h5>
<script>
        window.load = print_data();
        function print_data(){
            window.print();
        }
    </script>
