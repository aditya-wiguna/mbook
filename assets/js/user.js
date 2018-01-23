$(document).ready(function(){

	$('#action').val('insert user');

	loadData();

	function loadData(){
		$.ajax({
			method:'get',
			url:'../controller/user.php',
			dataType:'html',
			success:function(data){
				$('#table-responsive').html(data);
			}
		});
	}


	/*-----------------------------Hapus User-------------------------*/
	$(document).on('click', '.delete', function(){
		var id = $(this).attr('id');
		var action = 'delete user';

		$.ajax({
			url:'../model/Model.php',
			method:'post',
			data:{id:id, action:action},
			success:function(data){
				loadData();
			}
		});
	});

	$(document).on('click', '.update', function(){
		var id = $(this).attr('id');
		var action = "single user";
		console.log(id);

		$.ajax({
			url:'../model/Model.php',
			method:'post',
			data:{id:id, action:action},
			dataType:'json',
			success:function(data){
				$('#modal').css('display', 'block');
				$('#username').val(data.username);
				$('#password').val(data.password);
				$('#akses').val(data.akses);
				$('#nama').val(data.nama);
				$('#alamat').val(data.alamat);
				$('#telepon').val(data.telepon);
				$('#action').val('update user');
				$('#kasir_username').val(id);
				$('#username').attr('disabled', 'disabled');
			}
		});
	});

	$('#user-form').on('submit', function(event){
		event.preventDefault();

		var username = $('#username').val();
		var password = $('#password').val();
		var akses = $('#akses').val();
		var nama = $('#nama').val();
		var alamat = $('#alamat').val();
		var telepon = $('#telepon').val();

		if(username.length >= 16){
			alert("username maks 16 karakter");
			return false;
		} else{
			$.ajax({
				method:'post',
				url:'../model/Model.php',
				data: new FormData(this),
				contentType:false,
				processData:false,
				success:function(data){
					$('#user-form')[0].reset();
					loadData();
					$('#modal').css('display', 'none');
				}
			});
		}
	});

});