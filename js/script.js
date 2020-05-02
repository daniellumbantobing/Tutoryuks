$(function(){
	$('.tombolTambahData').on('click', function(){
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
	});



	$('.tampilModalUbah').on('click', function(){
		
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost:8080/proyekpsw/public/mahasiswa/ubah');
		const id = $(this).data('id');
			// console.log(id);
		$.ajax({
			url: 'http://localhost:8080/phpmvc/public/Mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#id').val(data.id);
				$('#prodi').val(data.prodi);
				$('#username').val(data.username);
				$('#password').val(data.password);
				$('#role').val(data.role);
			}
		});
		
	});


});
//ketika dokumen telah siap, jalankan fungsi dialam nya
// gantikan method ready