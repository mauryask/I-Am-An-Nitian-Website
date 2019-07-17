$(document).ready(function(){

    //dealing with like button
    
        $('.like-btn').click(function(){
            var id =  $(this).attr('id');
            var action = 'like';
            $.ajax({
                url:'rating_server.php',
                type:'post',
                data: {id:id, action:action}
               /* success:function(data)
                {
                    
                        document.getElementById(data).classList.add('fa-thumbs-up');
                        document.getElementById(data).classList.remove('fa-thumbs-down');    
                        */                           
          /*  }*/
                
            });
            
        });
        
    
     //dealing with dislike button   
    
        $('.dislike-btn').click(function(){
            var id =  $(this).attr('id');
            var action = 'dislike';
            
            $.ajax({
                url:'rating_server.php',
                type:'post',
                data: {id:id, action:action}
                /*,
                success:function(data)
                {
                   alert(data);
                }*/
                
            });
    
        });
      
       }); // end of ready function
    
    
    