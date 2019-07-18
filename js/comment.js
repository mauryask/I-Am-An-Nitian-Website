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
        success: function(data)
        {
            alert(data);
    
    
            $("form").trigger("reset"); //to clear the form fieled after submission
        }
    
    });
}
else
{
    alert('please fil all the fields');
}


});
 
});