
$(document).ready(function(){

    $('#register').click(function(){

        var name = $('#name').val().trim();
        var user_email = $('#user_email').val().trim();
        var phone = $('#phone').val().trim();
        var clg  =  $('#clg').val().trim();
        var state = $('#state').val().trim();
        var user_pass = $('#user_pass').val().trim();
        var cnf_pass = $('#cnf_pass').val().trim();
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
                    
                      location.reload(true);

			             },2000);

                     }
                     else
                     {
                       // for mobile version error meassages
                       
                       if (window.matchMedia('(max-width:991px)').matches)
                       {
                       $('#msgy').html(response);

                       setTimeout(function()
                       {
                       $('#msgy').fadeOut();
                       },1400);

                       $('#msgy').fadeIn();


                       }
                       else
                       {
                        $('#msgx').html(response);

                        setTimeout(function()
                        {
                        $('#msgx').fadeOut();
                        },1400);
                        $('#msgx').fadeIn();
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
			  title: 'Signup Successful',
			  showConfirmButton: false,
			  timer:1800
          }) 
         $(".swal2-modal").css({width: '20rem'});
         $(".swal2-modal").css('background-color', 'rgba(253,253,253,1)');
}
