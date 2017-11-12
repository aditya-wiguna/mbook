$(document).ready(function(){

	$('#action').val('insert distributor');

	loadData();

	function loadData(){
		$.ajax({
			type:'get',
			url:'../controller/distributor.php',
			dataType:'html',
			success:function(respon){
				$('#table-responsive').html(respon);
			}
		});
	}

	/*---------------------Insert Form----------------------*/
	$('#distributor-form').on('submit', function(event){
		event.preventDefault();
		//Deklarasi Field
		var nama = $('#nama').val();
		var alamat = $('#alamat').val();
		var telephone = $('#telephone').val();
		//Situasi form kosong
		if (nama == '' || alamat == '' || telephone == '') {
			alert('Tolong Lengkapi Field yang kosong');
			if (telephone.length() > 14) {
				alert('Maksimal nomor telephone adalah 14 karaktter');
				return false;
			}
			return false;
		} else{
			$.ajax({
				method:'post',
				url:'../model/Model.php',
				data: new FormData(this),
				contentType:false,
				processData:false,
				success:function(data){
					$('#distributor-form')[0].reset();
					loadData();
					$('#modal').css('display', 'none');
				}
			});
		}
	});

	/*---------------------Show single data for update----------------------*/
	$(document).on('click', '.update', function(){
		var id = $(this).attr('id');
		var action = 'single distributor';

		$.ajax({
			url:'../model/Model.php',
			method:'post',
			data:{id:id, action:action},
			dataType:'json',
			success:function(data){
				$('#modal').css('display', 'block');
				$('#nama').val(data.nama);
				$('#alamat').val(data.alamat);
				$('#telephone').val(data.telephone);
				$('#action').val('update distributor');
				$('#distributor_id').val(id);
			}
		});
	});

	$(document).on('click', '.delete', function(){
		var id = $(this).attr('id');
		var action = 'delete distributor';

		$.ajax({
			url:'../model/Model.php',
			method:'post',
			data:{id:id, action:action},
			success:function(data){
				loadData();
			}
		});
	});

});