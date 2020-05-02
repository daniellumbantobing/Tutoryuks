<?php
require_once "header.php";
require_once "proses/function/functions.php";
?>

<div class="col-md-10">
    <?php    
    ?>
	<h1>Selamat Datang <?=$_SESSION['nama'] ?></h1>
	 <div class="card mt-5">
                <div class="card-header text-center">
                    Daftar Tutor - <a href="#" target="_blank"><?=$_SESSION['nama']?></a>
                </div>
                <div class="card-body">

                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Tanggal</th>
                                <th>Mulai</th>
                                <th>Berakhir</th>
                                <th>Ruangan</th>
                                <th>Peran</th>
                            </tr>
                        </thead>
                        <?php
                        	$tutor = getTutor($_SESSION['id']); $count=0;
                        	while ($data = mysqli_fetch_array($tutor, MYSQLI_ASSOC)) {
                                if ($data['status'] == 1) {
                                    
                                
                        ?>
                        <tbody> 

                            <tr>
                                <td><a href="detailtutor.php?id=<?=$data['id']?>"><?=$data['matkul']?></td></a>
                                <td><?=$data['tanggal']?></td>
                                <td><?=$data['mulai']?></td>
                                <td><?=$data['selesai']?></td>
                                <td><?=$data['ruangan']?></td>
                                <td><?=$data['role']?></td>

                            </tr>
                        </tbody>
                        <?php
                        	$count++;
                    	}
                        }
                        ?>
	<tbody>
                            	
	Banyak Tutor yang Diikuti : <?=$count?><br/>

 
 

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