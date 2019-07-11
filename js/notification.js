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