/*================ Code for comment insertion =================*/

$(document).ready(function()
{
 
$('#comment_btn').click(function(){

var comment_content = $('#comment_content').val().trim();
var post_id = $('html').attr('id');


if(comment_content != '')
{
    $.ajax({
        url:'comment_server.php',
        type:'post',
        data:{post_id : post_id, comment: comment_content},
        success: function(response)
        {
            /*on success full insertion of comments get the same coment without refreshing the page*/

            if(response == 2)
            {
                alertPopup(); // if user is not logged in 
            }
            else if(response == 1)
            {
                    adminPop();  // if admin try to like or comment
            }
            else
            {
                setTimeout(function(){
                    $.post('get_comment.php', {post_id : post_id}, function(data, status){  
    
                            $('.comments').html(data);            
    
                       });
        
                },1000);
            }

                  
            $("form").trigger("reset"); //to clear the form fieled after submission
        }
    
    });
}
});


/*Loading comments when page loaded is loaded*/

  var id = $('html').attr('id');
  $.post('get_comment.php', {post_id : id}, function(data, status){
   $('.comments').html(data);
  })
 
});


