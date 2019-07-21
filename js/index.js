/*
** Author: Shubham Maurya
** I AM AN NITIAN
*/



/*============  Logo Slider ===========*/  
$('.owl-carousel').owlCarousel({ 
  loop:true,
  margin:10,
 autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false,
         dots:false
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:5,
          nav:false,
          loop:true
      }
  }
});


/*============  Display Feedback Box ===========*/
function  fun1()
    {
      TweenMax.to('.popup',0.5,{scaleX: 1});
    }


/*============  Feedback Box Hide ===========*/   
    function fun2(){
      TweenMax.to('.popup',0.5,{scaleX: 0});
    }


/*============  Screen Preloader ===========*/

var loaderx=document.getElementById('loader');
function loadme()
{
loaderx.style.display='none';
//for logo
TweenMax.from('.logo',1.5,{opacity:0,scale:0, ease:Bounce.easeOut});
//for social icons
TweenMax.staggerFrom('.svg',0.4,{opacity:0,y:100, delay:0.5},0.2/* This is duratio9n for social widgets*/);
}

/*=============  Back To top Button ==============*/
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


/*Login signup popups methods removed from here*/


/*============ Navbar Animation ===========*/
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
document.getElementById('searchx').style.display='none';
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
  document.getElementById("f").style.top = "0";
} else {
  document.getElementById("f").style.top = "-100px";
}
prevScrollpos = currentScrollPos;
}

/*============ Hide Show Search Box ===========*/

var action=1;
function search()
{
if(action==1)
{
document.getElementById('searchx').style.display='block';
action=2;
}
else
{
document.getElementById('searchx').style.display='none';
action=1;
}
}

/*============  Auto Text Typer  ===========*/

//dynamic text
var typed = new Typed('.text', {
strings: ["NITIAN","ENGINEER"],
typeSpeed: 120,
backSpeed: 120,
loop: true
});

/*============  Sticky Nav Bar ===========*/
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

})


/*============  Auto Slide Images ===========*/
var myIndex = 0;
carousel();
function carousel() {
  var x = document.getElementsByClassName("mySlides");
  var i;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block"; 
  setTimeout(carousel, 3000); 
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





