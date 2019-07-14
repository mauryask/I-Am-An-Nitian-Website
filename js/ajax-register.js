
$(document).ready(function(){

    $('#register').click(function(){

        var name = $('#name').val().trim();
        var user_email = $('#user_email').val().trim();
        var phone = $('#phone').val().trim();
        var clg  =  $('#clg').val().trim();
        var state = $('#state').val().trim();
        var user_pass = $('#user_pass').val().trim();
        var cnf_pass = $('#cnf_pass').val().trim();
        var x = window.matchMedia("(max-width: 721px)");
              $.ajax({
                 url:'register.php',
                 type: 'post',
                 data : 
                     {
                     name:name,
                     user_email:user_email,
                     phone:phone,
                     clg: clg,
                     state: state,
                     user_pass: user_pass,
                     cnf_pass: cnf_pass
                     },
                  success: function(response)
                  {
                     if(response == 1)
                     {
                         funx();

                         setTimeout(function(){
		                 window.location = "index.php";
			             },2000);

                     }
                     else
                     {
                       
                       if (window.matchMedia('(max-width:721px)').matches)
                       {
                       $('#msgy').html(response);
                       }
                       else
                       {
                        $('#msgx').html(response);
                       }
                     }
                  }
                })
             
})

})

function funx()
{
        Swal.fire({
			  position: 'center',
			  type: 'success',
			  title: 'Registration Successful',
			  showConfirmButton: false,
			  timer: 1800
          }) 
}
