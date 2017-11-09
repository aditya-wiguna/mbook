// $(document).ready(function(){

// 	$('#dashboard').click(function(){
// 		$.ajax({
// 			url:'dashboard.php',
// 			method:'get',
// 			success:function(data){
// 				$('main').html(data);
// 				$('.side-nav ul li:nth-child(2)').addClass('active');
// 			}
// 		});
// 	});

// 	$('#book').click(function(){
// 		$.ajax({
// 			url:'book.php',
// 			method:'get',
// 			success:function(data){
// 				$('main').html(data);
// 				$('.side-nav ul li:nth-child(2)').removeClass('active');
// 				$('.side-nav ul li:nth-child(3)').addClass('active');
// 				window.history.pushState(null, null, 'book.php');
// 			}
// 		})
// 	});

// });