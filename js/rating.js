
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
                    if(data == 2)
                   {
                       alertPopup(); // if user is not logged in 
                   }
                   else if(data == 1)
                   {
                           adminPop();  // if admin try to like or comment
                   }
                                                 
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
                   if(data == 2)
                   {
                       alertPopup(); // if user is not logged in 
                   }
                   else if(data == 1)
                   {
                           adminPop();  // if admin try to like or comment
                   }
                }
                
            });
    
        });
      
       }); //end of ready function
    
    
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
    
    // if admin will try to like or comment

    function adminPop()
    {
        Swal.fire({
            title: 'Hello Admin',
            type: 'info',
            html:
                'you need to login as user to like or comment',
                showCloseButton:false,
                showCancelButton: false,
                focusConfirm: false,
          });
    }