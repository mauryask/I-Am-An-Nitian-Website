$(document).ready(function(){

    //dealing with like button
    
        $('.like-btn').click(function(){
            var id =  $(this).attr('id');
            var action = 'like';
            $.ajax({
                url:'rating_server.php',
                type:'post',
                data: {id:id, action:action},
              success:function(data)
                {
                    if(data == 1)
                    {
                        alertPopup();
                    }
                        /*document.getElementById(data).classList.add('fa-thumbs-up');
                        document.getElementById(data).classList.remove('fa-thumbs-down');    
                        */                           
              }
                
            });
            
        });
        
    
     //dealing with dislike button   
    
        $('.dislike-btn').click(function(){

            var id =  $(this).attr('id');
            var action = 'dislike';
            
            $.ajax({
                url:'rating_server.php',
                type:'post',
                data: {id:id, action:action},
                success:function(data)
                {
                   if(data == 1)
                   {
                       alertPopup();
                   }
                }
                
            });
    
        });
      
       }); // end of ready function
    
    
/*==================   Alert if user is not logged in   =================*/
    function alertPopup()
    {
        Swal.fire({
            title: '<strong>You Are Not Logged In</strong>',
            type: 'info',
            html:
              'press ok to login',
            showCloseButton:false,
            showCancelButton: false,
            focusConfirm: false,
          }).then(function()
          {
              show_log();
          })
    }
    
