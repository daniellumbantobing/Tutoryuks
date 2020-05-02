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
	function daftar($nim, $nama, $prodi, $username, $password, $role, $gbr,$angkatan)
	{
		$sql = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$prodi', '$username', '$password', '$role', '$gbr','','$angkatan')";
		exeQuery($sql);
	}
	function getMahasiswa(){
		$sql = "SELECT  * FROM mahasiswa WHERE role = 'mahasiswa' ORDER BY angkatan, nim" ;
		$mahasiswa = exeQuery($sql);

		return $mahasiswa;
	}
	function buatpolling($matkul, $tanggal, $prodi, $angkatan)
	{
		$dateTimeNow = date ("Y-m-d H:m:s"); 
		$sql = "INSERT INTO polling VALUES('', '$dateTimeNow', '$tanggal', '$matkul', '$prodi', '$angkatan', '')";
		exeQuery($sql);
	}

	function getAllPolling()
	{
		$sql = "SELECT * from polling";
		$polling = exeQuery($sql);

		return $polling;
	}

	function getOnePolling($id){
		$sql = "SELECT * FROM polling where id = '$id'";
		$polling = exeQuery($sql);

		return $polling;
	}

	function getPesertaPolling($idp){
		$sql = "SELECT  m.nama AS nama, m.NIM AS nim, m.prodi AS prodi, m.angkatan AS angkatan, p.status AS status 
			FROM polling_mahasiswa p 
			INNER JOIN mahasiswa m 
			ON m.id=p.mahasiswa_id 
			WHERE p.polling_id = '$idp'";
		$hasil = exeQuery($sql);

		return $hasil;
	}

	function getOneMatkul($id)
	{
		$sql = "SELECT * from polling where id='$id'";
		$hasil = exeQuery($sql);
		$data = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
		$kirim = $data['matkul'];

		return $kirim;
	}


	function buatkelas($matkul, $prodi, $angkatan, $tanggal, $waktu_mulai, $waktu_selesai, $expired)
	{
		$dateTimeNow = date ("Y-m-d H:m:s"); 
		$sql = "INSERT INTO kelas VALUES('', '$matkul', '$prodi', '$tanggal', '', '$waktu_mulai', '$waktu_selesai', '$expired', '$angkatan', '','$dateTimeNow', '')";
		exeQuery($sql);
	}

	function getAllKelas()
	{
		$sql = "SELECT * from kelas";
		$polling = exeQuery($sql);

		return $polling;
	}

	function getPesertaKelas($idk){
		$sql = "SELECT  m.nama AS nama, m.NIM AS nim, m.prodi AS prodi, m.angkatan AS angkatan, k.role AS role, k.status as status
			FROM kelas_mahasiswa k 
			INNER JOIN mahasiswa m 
			ON m.id=k.mahasiswa_id 
			WHERE k.kelas_id = '$idk' ORDER BY m.NIM";
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

	function getOneKelas($id)
	{
		$sql = "SELECT * from kelas WHERE id='$id'";
		$query = exeQuery($sql);
		$hasil = mysqli_fetch_array($query, MYSQLI_ASSOC);

		return $hasil;
	}

	function buattutor($idk, $ruangan, $tanggal, $waktu_mulai, $waktu_selesai)
	{
		$dateTimeNow = date ("Y-m-d H:m:s"); 
		$sql = "INSERT INTO tutor VALUES('', '$idk', '$dateTimeNow')";
		exeQuery($sql);
		$sql = "UPDATE kelas SET tanggal='$tanggal', ruangan = '$ruangan' , waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai', last_updated='$dateTimeNow', status_tutor=1 WHERE id='$idk'";
		exeQuery($sql);;
	}

	function getKelasStat($id)
	{
		$sql = "SELECT status_tutor from kelas where id='$id' ";
		$query = exeQuery($sql);
		$hasil = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$kirim = $hasil['status_tutor'];
		return $kirim;
	}

	function updateExpiredPolling($id)
	{
		$sql = "UPDATE polling SET status_expired=1 where id=$id";
		exeQuery($sql);
	}
?>