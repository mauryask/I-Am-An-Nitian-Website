
$(document).ready(function(){

    var post_id = $('html').attr('id');

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
                   else
                   {
                    $('#x').load('get_likes.php', {id : post_id});
                    $.post('posetive_rating_state.php', {post_id: post_id}, function(data, status){   
                        if(data == 1)
                        {
                         $('.like-btn').addClass('fas');
                         $('.dislike-btn').removeClass('fas');
                        }
                        else if(data == 0)
                        {
                         $('.like-btn').removeClass('fas');
                         $('.like-btn').addClass('far');
                        }
                       });
                   }                             
              }
                
            });
            
        });
        

// getting likes when page loaded
        $('#x').load('get_likes.php', {id : post_id});
        $.post('posetive_rating_state.php', {post_id: post_id}, function(data, status){   
            if(data == 1)
            {
             $('.like-btn').addClass('fas');
             $('.dislike-btn').removeClass('fas');
            }
            else if(data == 0)
            {
             $('.like-btn').removeClass('fas');
             $('.like-btn').addClass('far');
            }
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