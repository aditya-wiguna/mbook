$(document).ready(function(){

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

});