<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tutoryuks');
	global $conn;
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}


	function exeQuery($query){
		global $conn;
		$stat = mysqli_query($conn, $query);

		return $stat;
	}

	function closeConn()
	{
		global $conn;
		$stat = mysqli_close($conn);
		return $stat;
	}

	function showPolling($prodi, $angkatan)
	{
		$sql = "SELECT * FROM polling WHERE prodi='$prodi' AND angkatan='$angkatan'";
		$hasil = exeQuery($sql);

		return $hasil;
	}

	function cekPolling($idm, $idp){
		$sql = "SELECT * FROM polling_mahasiswa WHERE polling_id='$idp' AND mahasiswa_id = '$idm'";
		$hasil = exeQuery($sql);
		$count = mysqli_num_rows($hasil);
		return $count;
	}

	function recordPollingMhs($idm, $idp, $stat){
		$sql = "INSERT INTO polling_mahasiswa VALUES('$idp', '$idm', '$stat')";
		$hasil = exeQuery($sql);
		return $hasil;
	}

	function ubahPollingMhs($idm, $idp, $stat){
		$sql = "UPDATE polling_mahasiswa SET status = '$stat' WHERE polling_id = '$idp' AND mahasiswa_id = '$idm'";
		$hasil = exeQuery($sql);
	}

	function ambilStatusPolling($idm, $idp){
		$sql = "SELECT * FROM polling_mahasiswa WHERE mahasiswa_id='$idm' AND polling_id='$idp'";
		$hasil = exeQuery($sql);
		$kirim = NULL;
		while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) $kirim = $data['status'];
		
		return $kirim;
	}

	function showKelas($prodi, $angkatan)
	{
		$sql = "SELECT * FROM kelas WHERE prodi='$prodi' AND angkatan='$angkatan'";
		$hasil = exeQuery($sql);

		return $hasil;
	}

	function cekKelas($idm, $idk){
		$sql = "SELECT * FROM kelas_mahasiswa WHERE kelas_id='$idk' AND mahasiswa_id = '$idm'";
		$hasil = exeQuery($sql);
		$count = mysqli_num_rows($hasil);
		return $count;
	}

	function ubahKelasMhs($idm, $idk, $stat){
		$sql = "UPDATE kelas_mahasiswa SET status = '$stat' WHERE kelas_id = '$idk' AND mahasiswa_id = '$idm'";
		$hasil = exeQuery($sql);
	}

	function recordKelasMhs($idm, $idk, $stat, $role)
	{
		$sql = "INSERT INTO kelas_mahasiswa VALUES('$idk', '$idm', '$stat', '$role')";
		$hasil = exeQuery($sql);
		return $hasil;
	}

	function ambilStatusKelas($idm, $idk){
		$sql = "SELECT * FROM kelas_mahasiswa WHERE mahasiswa_id='$idm' AND kelas_id='$idk'";
		$hasil = exeQuery($sql);
		$kirim = NULL;
		while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) $kirim = $data['status'];
		
		return $kirim;
	}

	function showKelasSenior($prodi, $angkatan)
	{
		$sql = "SELECT * FROM kelas WHERE prodi='$prodi' AND angkatan>'$angkatan'";
		$hasil = exeQuery($sql);

		return $hasil;
	}

	function getKelasStat($id)
	{
		$sql = "SELECT status_tutor from kelas where id='$id' ";
		$query = exeQuery($sql);
		$hasil = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$kirim = $hasil['status_tutor'];
		return $kirim;
	}

	function getTutor($id)
	{
		$sql = "SELECT k.id as id, k.matkul AS matkul, k.tanggal AS tanggal, k.waktu_mulai AS mulai, k.waktu_selesai AS selesai, k.ruangan AS ruangan, m.role AS role, k.status_tutor as status
 			FROM kelas_mahasiswa m 
 			INNER JOIN kelas k 
 			ON k.id=m.kelas_id 
 			WHERE m.mahasiswa_id=$id AND m.status=1";
 		$query = exeQuery($sql);

 		return $query;
	}

	function getPesertaKelas($idk)
	{
		$sql = "SELECT  m.nama AS nama, m.NIM AS nim, m.prodi AS prodi, m.angkatan AS angkatan, k.role AS role, k.status as status
			FROM kelas_mahasiswa k 
			INNER JOIN mahasiswa m 
			ON m.id=k.mahasiswa_id 
			WHERE k.kelas_id = '$idk'";
		$hasil = exeQuery($sql);

		return $hasil;
	}

	function getOneMatkulKelas($id)
	{
		$sql = "SELECT * from kelas where id='$id'";
		$hasil = exeQuery($sql);
		$data = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
		$kirim = $data['matkul'];

		return $kirim;
	}

	function updateExpiredPolling($id){
		$sql = "UPDATE polling SET status_expired=1 where id=$id";
		exeQuery($sql);
	}

	function getJumlahPeserta($id){
		$sql = "SELECT * from kelas_mahasiswa WHERE kelas_id = $id";
		$kelas = exeQuery($sql);
		$count = 0;
		while($data = mysqli_fetch_array($kelas, MYSQLI_ASSOC)){
			if($data['kelas_id'] == $id && $data['role'] == 'Peserta' && $data['status'] == 1){
				$count++;
			}
		}
		

		return $count;
	}