
      /*==============   Navigation Bar Animation   =============*/

        //menu toggle ==> i dont know mhwta this shit is
        $(document).ready(function(){
        $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
        })
        })
    
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
        
        //sticky navigation bar
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

 /*====================  Preloader  =========================*/
 
function loadme()
{
   var loaderx=document.getElementById('loader');
loaderx.style.display='none';
}