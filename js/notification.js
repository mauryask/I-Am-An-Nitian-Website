/* ===================   Get total Number of notifications   ==================== */

function get_noti_num() 
{
    setInterval(function(){
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("count").innerHTML = this.responseText;  
      }
     };
     xhttp.open("GET", "get_not.php", true);
     xhttp.send();
    
    },1000);
    }
    get_noti_num();

 /* ===================   Notification popup show hide ==================== */
    var action=1;
    function show()
    {
        if(action == 1)
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200)
             {
              document.getElementById("notify-popup").innerHTML = this.responseText;
             }
            };
            xhttp.open("GET", "notification.php", true);
            xhttp.send();



            document.getElementById('notify-popup').style.display='block';
            action=0;
        }
        else
        {
            document.getElementById('notify-popup').style.display='none';
            action=1;
        }
    }