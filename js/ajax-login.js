$(document).ready(function(){
	$('#login').click(function(){
		
		var email = $('#email').val().trim();
		var pass = $('#pass').val().trim();
		
		$.ajax({
		url:'login.php',
		type:'post',
		data: { email:email,pass:pass},
		success: function(response)
		{
		   if(response == 1)
		   {	
			   fun();	
			  
			   setTimeout(function(){ 
			   
			   window.location = "index.php";
			   
				 },1800);
	
		   }
		   else
		   {
			   $('#message')/*.fadeIn()*/.html(response);
	
			  /* setTimeout(function(){
					$('#message').fadeOut(5000);
			   });*/
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
				  timer: 1600
			}); 
	 }