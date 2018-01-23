$(document).ready(function(){

	$('#action').val('insert buku');

	loadData();

	function loadData() {

		var action = 'load buku';

		$.ajax({
			url:'../model/Model.php',//link action
			method:'post',//method
			data:{action:action},//data send
			success:function(data){ //if success
				$('#table-responsive').html(data);
			}
		});
	}

	/*-----------------------------Bagian Halaman Buku-----------------------------------------*/

	// Memasukan data ke database
	$('#book-form').on('submit', function(event){
		event.preventDefault();
		var judul = $('#judul').val();
		var isbn = $('#isbn').val();
		var penulis = $('#penulis').val();
		var penerbit = $('#penerbit').val();
		var tahun = $('#tahun').val();
		var stok = $('#stok').val();
		var harga_pokok = $('#harga_pokok').val();
		var harga_jual = $('#harga_jual').val();
		var ppn = $('#ppn').val();
		var diskon = $('#diskon').val();

		if (judul, isbn, penerbit, penulis, tahun, stok, harga_pokok, harga_jual, ppn == '') {
			alert("Tolong Lengkapi Field yang Kosong");
			return false;
		} else{
			$.ajax({
				url:'../model/Model.php',
				method:'POST',
				data: new FormData(this),
				contentType:false,
				processData:false,
				success:function(data){
					$('#book-form')[0].reset();
					loadData();
					$('#action').val('insert buku');
					$('#btn_submit_book').val('Simpan');
					$('#modal').css('display', 'none');
				}
			});
		}

	});

	// Update data dan view single
	$(document).on('click', '.update', function(){
		var buku_id = $(this).attr('id');
		var action = 'single buku';

		$.ajax({
			url:'../model/Model.php',
			method:'POST',
			data:{buku_id:buku_id, action:action},
			dataType:'json',
			success:function(data){
				$('#modal').css('display', 'block');
				$('#judul').val(data.judul);
				$('#isbn').val(data.isbn);
				$('#penulis').val(data.penulis);
				$('#penerbit').val(data.penerbit);
				$('#tahun').val(data.tahun);
				$('#stok').val(data.stok);
				$('#harga_pokok').val(data.harga_pokok);
				$('#harga_jual').val(data.harga_jual);
				$('#ppn').val(data.ppn);
				$('#diskon').val(data.diskon);
				$('#action').val('update buku');
				$('#buku_id').val(buku_id);
			}
		});
	});

	//Hapus data
	$(document).on('click', '.delete', function() {
		var buku_id = $(this).attr('id');
		var action = 'delete buku';

		$.ajax({
			url:'../model/Model.php',
			method:'post',
			data:{buku_id:buku_id, action:action},
			success:function(data) {
				loadData();
			}
		});
	});

	/*-----------------------------Bagian Halaman Distributor-----------------------------------------*/


});