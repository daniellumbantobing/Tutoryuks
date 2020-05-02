<?php
require_once "header.php";
include_once "proses/function/functions.php";
?>

<div class="col-md-10">
	<div class="container">
            <div class="card mt-1">
                <div class="card-header text-center">
                    Daftar Tutor - <a href="#" target="_blank">Tutor Yuks</a>
                </div>
                <div class="card-body">

                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <label></label>
                                <th>#</th>
                                <th>Mata Kuliah</th>
                                <th>Prodi (Angkatan)</th>
                                <th>Ruangan</th>
                                <th>Waktu</th>
                                <th>Daftar hadir</th>
                            </tr>
                        </thead>
                        <?php
                        $tutor = getAllKelas(); $count=0;
                        while ($data = mysqli_fetch_array($tutor, MYSQLI_ASSOC)) {
                        	if($data['status_tutor'] == 1){
                        ?>
                        <tbody> 

                            <tr>
                                <td><?=++$count?></td>
                                <td><a href="detailTutor.php?id=<?=$data['id']?>"><?=$data['matkul']?></a></td>
                                <td><?=$data['prodi']?> (<?=$data['angkatan']?>)</td>
                                <td><?=$data['ruangan']?></td>
                                <td><?=$data['tanggal']?> <br/> <?=$data['waktu_mulai']?> - <?=$data['waktu_selesai']?></td>
                                <td> <a href="absensi_kelas.php?id=<?=$data['id']?>" target="_blank" class="btn btn-success ml-2">cetak daftar hadir</a> </td>
                                    
                            </tr>
                        </tbody>
                        <?php
                        	}
                        }
                        ?>
                       
    <tbody>
                            	
	Jumlah Tutor : <?=$count?><br/>

                        </tbody>
                        <tbody>
                            
                        </tbody>
                    </table>



                </div>
            </div>
        </div>						
	  				
	

</div>
<script>
        function print_data() {
        window.open("absensi_kelas.php","_blank");
            }       

    </script>    


<?php
require_once "footer.php";

?>
