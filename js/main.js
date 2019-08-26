
      /*==============   Navigation Bar Animation   =============*/

      var check= window.matchMedia('(max-width:721px)').matches

      if (check == false)
      {
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("f").style.top = "0";
        }

         else 
        {
          document.getElementById("f").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
        }
      }
       
        
       //sticky navigation bar
if( check == false)
{
  $(window).on('scroll',function(){

    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
  
  if($(window).scrollTop())
  {
  $('header').addClass('black');
  }
  else 
  {
  $('header').removeClass('black');
  }
  
  });
}

       
        /*==============  Back To Top Button   =============*/

        const backToTop = document.querySelector('#back-to-top');
window.addEventListener('scroll',scrollFunction);
function scrollFunction()
{

if(window.pageYOffset>300)
{
  if(!backToTop.classList.contains('btnEntrance'))
  {
    backToTop.classList.remove('btnExit');
    backToTop.classList.add('btnEntrance');
    backToTop.style.display='block';
  }
}
else
{
  if(backToTop.classList.contains('btnEntrance'))
  {
    backToTop.classList.remove('btnEntrance');
    backToTop.classList.add('btnExit');
    setTimeout(function(){
      backToTop.style.display='none';
    },250);
  }
}
}
backToTop.addEventListener('click',backTop);
function backTop()
{
window.scrollTo(0,0);
}

 
function loadme()
{
   var loaderx=document.getElementById('loader');
loaderx.style.display='none';
}


/*============  Login Signup Popups ===========*/
function cancel()
{
  TweenMax.to('.signup',0.5,{scaleY: 0});
}
function show_log()
 {
  TweenMax.to('.login',0.5,{scaleY: 1});
 }
function cancel_log()
{
  TweenMax.to('.login',0.5,{scaleY: 0});
}

function show_signup()
{

  TweenLite.to('.signup',0.5, { scaleY: 1});
}

 /*==================== Menu toggle =========================*/

 var myIndex = 0;
 carousel();
 
 function carousel() {
   
     var i;
     var x = document.getElementsByClassName("slidex");
     
     for (i = 0; i < x.length ; i++) 
     {
        x[i].style.display = "none"; 
       showCaption();
       
     }
     myIndex++;
    
     if (myIndex > x.length) {
        myIndex = 1;
         }  
         else
         {
           hideCaption();
         }
       
     x[myIndex-1].style.display = "block"; 
     setTimeout(carousel,2000);
       }
       
 
   function showCaption()
   {
     TweenMax.to('#caption',0.5,{scaleX: 1});
   }
 
   function hideCaption()
   {
     TweenMax.to('#caption',0.5,{scaleX: 0});
   }
 