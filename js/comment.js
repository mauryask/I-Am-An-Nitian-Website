/*================ Code for comment insertion =================*/

$(document).ready(function()  
{
 
    var post_id = $('html').attr('id');

$('#comment_btn').click(function(){

var comment_content = $('#comment_content').val().trim();

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
              
                    $.post('get_comment.php', {post_id : post_id}, function(data, status){  
    
                            $('.comments').html(data);            
    
                       });
        
              
                $.post('comment_number.php', {post_id : post_id}, function(data, status)
                    {
                    $('#ncmt').text(data);
                    $('#cmt_color').addClass('fas');
                    if(data == 0)
                    {
                        $('#cmt_color').removeClass('fas');
                    }
                    });  
            }
                 
            $("form").trigger("reset"); //to clear the form fieled after submission
        }
    
    });
}
});


/*Loading comments when page loaded is loaded*/
  $.post('get_comment.php', {post_id : post_id}, function(data, status){
   $('.comments').html(data);
  })

// loading number of comments when page loaded
  $.post('comment_number.php', {post_id : post_id}, function(data, status)
  {
  $('#ncmt').text(data);
  $('#cmt_color').addClass('fas');
  if(data == 0)
  {
      $('#cmt_color').removeClass('fas');
  }
  }); 


 
});


