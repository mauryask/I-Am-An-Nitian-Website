var redirect_to_cax = false; //creating a global variable

$(document).ready(function(){

	$('#login').click(function(){

		$('#login').text("Login"); //by default set text to login
		
		var email = $('#email').val().trim();
		var pass = $('#pass').val().trim();
		var check = $("input[name=user]:checked").val(); //getting the value of selected radio button

		$.ajax({
		url:'login.php',
		type:'post',
		data: { email:email,pass:pass,check:check},
		success: function(response)
		{

			$('#login').text("please wait..");
			
		   if(response == 1)
		   {	
			 fun();	
			  
			   setTimeout(function(){ 
			   
			   location.reload(true); //reloading the current page
			   			   
				 },1800);

				 redirect_to_cax = true;
			  
		   }
		   else
		   {
			   $('#message').html(response);
				setTimeout(function(){
					$('#message').fadeOut();	
				},1400);

				$('#message').fadeIn();
				//enabling the button again
				$('#login').text("Login");

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