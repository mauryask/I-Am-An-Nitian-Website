function clicked(cmt_id)
{
    var id = $('html').attr('id');
    var reply =  $('#reply').val().trim();
    var comment_id = cmt_id;


   if(reply != '')
    {
        
            $.ajax({
                url:'reply_server.php',
                type:"post",
                data: {post_id : id, comment_id : comment_id, reply : reply},
                success: function(data)
                {
                    alert(data);
                    $("#reply_form").trigger("reset");
                }
            })  

   }
    else
    {
        alert('please write a reply');
    }

   

}