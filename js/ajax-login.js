$(document).ready(function(){

	$('#login').click(function(){
		
		var email = $('#email').val().trim();
		var pass = $('#pass').val().trim();
		var check = $("input[name=user]:checked").val(); //getting the value of selected radio button

		$.ajax({
		url:'login.php',
		type:'post',
		data: { email:email,pass:pass,check:check},
		success: function(response)
		{
		   if(response == 1)
		   {	
			 fun();	
			  
			   setTimeout(function(){ 
			   
			   location.reload(true); 
			  			   
				 },1800);
	
		   }
		   else
		   {
			   $('#message').html(response);
				setTimeout(function(){
					$('#message').fadeOut();	
				},1400);

				$('#message').fadeIn();
		   }

		}
	   
	});
	
	 });
	 
	 });
	 

	 function fun()
	 {
		Swal.fire({
				  position: 'center',
				  type: 'success',
				  title: 'Login Successful',
				  showConfirmButton: false,
				  timer:1600
			}); 
			$(".swal2-modal").css({width: '20rem'});
			$(".swal2-modal").css('background-color', 'rgba(253,253,253,1)');
	 }