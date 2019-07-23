<!--
* I AM AN NITIAN 
* v1.0
* May 17 2019
* Developer: Shubham Maurya
* National Institute Of Technology Srinagar J&K India 190006
* GitHub: https://github.com/pnstech
* LinkedIn: https://www.linkedin.com/in/cyberthreatatnit/
-->

<?php
include_once('connection.php');
session_start(); //starting session start
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<title>I Am An Nitian | Home</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<!--  Disabling double tap to zoom in mobile version -->
<meta name="viewport" content= "width=device-width, user-scalable=no">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link rel="icon" href="images/imnitian.png">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/popup.css" type="text/css" rel="stylesheet">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="css/story.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style></style>
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

<div class="wrapper">
 <!--================ Scroll Indicator ======================-->
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>   

  <header id="f" style="background:rgba(0,0,0,01);">
<div class="logo">
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li class="logo_txt"><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;" >I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="homex" >Home</a></li>
<li><a href="team.html" class="homex">Our team</a></li>
<li><a href="more-news.php" class="homex" >News</a></li>
<li><a href="index.php#about" class="homex" id="about_nav">About Us</a></li>
<li><a class="sub-menu" style="width:115px;" id="exam">Exams <i class="fas fa-caret-square-down"></i></a>
<ul>
<li style="width:115px;"><a href="#">Jee</a></li>
<li style="width:115px;"><a href="#">Gate</a></li>
<li style="width:115px;"><a href="#">Neet</a></li>
<li style="width:115px;"><a href="#">Camt</a></li>
<li style="width:115px;"><a href="#">Gre</a></li>
</ul>
</li>
<li>
<button onclick="search()" style="text-transform: uppercase;letter-spacing: 0.8px; font-weight: bold;" id="searching">Search <i class="fas fa-search"></i></button>
</li>
<li><a class="homex" style="cursor:pointer; width:150px;text-align:center;margin-left:-1rem;" id="user">
<?php
  if(isset($_SESSION['name'])&& !empty($_SESSION['name']))
  {
    echo $_SESSION['name'];
  }
  else
  {
    echo 'User';
  }
?>
&nbsp <i class="fas fa-user-graduate"></i></a>
<ul style="margin-left:-1rem;">
<!-- Hide and Show login and php buttons -->

<?php
if( isset($_SESSION['user_type']) && !empty($_SESSION['user_type']))
{
  if($_SESSION['user_type'] == 1)
  {
    echo '<li><a href="edit_news.php" class="homex">Admin</a></li>';
  }
}
?>

<?php if( isset($_SESSION['name']) && !empty($_SESSION['name']))
{
?>
<li><a style="cursor:pointer;"  href="logout.php" >Logout</a></li>
<?php }else{ ?>
<li><a style="cursor:pointer;"  onclick="show_log()" id="login_nav">Login</a></li>
<li><a style="cursor:pointer;"  onclick="show_signup()" id="register_nav">Register</a></li>
<?php } ?>

</ul>
</li>
</ul>
</nav>
<!--================ Mobile Version Menu ====================-->
<div class="menu-toggle">
<i class="fas fa-bars"></i>
</div>
<img src="images/cutk.png" class="cut_nav" style="display:none;">

<!--================ Search Box ====================-->
<div class="search-popup" id="searchx" style="display:none;">
    <div><input type="text"  placeholder="Search"><button><i class="fas fa-search"></i></button></div>
  </div>

</header>

<div clas="wrapper">


<div class="story">
    <p data-aos="fade-up" data-aos-duration="800">SuCcess Stories</p>
    <div class="str_line" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"></div>
</div>

<!--====================================-->



<!--================== left img==================-->
<div class="story_fst" > 

<div class="str_img" > <img src="images/kafeel.png" style="border-color:#41b3a3" ></div>

<!--================== main section that contains text start =================-->

<div class="str_txt" style="background:#41b3a3"   data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">

<div class="detail" style="width:27rem;">
<p class="name"> Ankur Agraval </p>
<p class="exam"> Mechanical Engineering NIT Raipur</p>
<p class="exam">AIR-65 GATE 2019</p>
</div>

<div class="intv">
<p>
Hi friends,</p>
<p>
I want to share my success story with you all. 
I hope some of you may get motivated after reading my struggle.
I was in my 4th semester and I knew I wanted a GOVT job
(Cliched Indian) but anyway my aim was pretty clear to me.
 Now at the starting of my 5th semester (July 16) after
returning from vacations I joined a coaching in Raipur itself. 
I started sincerely reading the subjects which were going on in Coaching.
I did not study in my previous 4 semesters for knowledge and only 
few days before end semester exams so that I can maintain a decent pointer.
 So in coaching I kind of started from the beginning of every subject. 
</p>
<p>
 Anyway this continued for like 5th and 6th semester.
  Life was mundane, only the dates were changing and days remain the same. 
  Only study and study and study.
</p>
<p>
Now 7th semester started and campus placements knocked at the door of NIT Raipur.
 I belong to a lower middle class family and GATE exam is like gambling or a T-20 cricket match. 
 If it’s not your day then no matter how much you have practiced or how much of a prodigy you are,
  it just wouldn’t matter. So keeping this in mind, I sat for campus placements.

I knew this was only a formality as I was very confident that I will crack GATE in my first attempt itself.
 So without wasting any precious time I appeared for IT companies in which Mechanical people were allowed. 
 There were two reason for taking this step—

i) As soon as I get placed, I can focus on my GATE 
studies and there will be comfort knowing that I have a backup to support my family.

ii) I chose IT company over Core companies although having 9.2 CGPA
 (yeah those last days studies for pointer worked quite well :D) 
 because in IT companies there will be no physical work and 
 so I will be able to save energy for studying for next year GATE.

I got placed in an IT company in OCTOBER 11 and that was a relief because 
I had four tension free months ahead of me for GATE 18.

7th semester exam ended and I went home for last two months before GATE and this is when all hell broke down on me. In just 10 days I had a minor surgery of my leg, I was diagnosed with Kidney stones(3), I started suffering from Sciatica(kind of back pain) and last but not the least urine Infection (4 times in next 40 days).

But even suffering from all these I couldn’t give up because so much hard work I have already poured in for this noble cause that backing off was just not an option. So I continued studying in pain. Those were very very bad days for me. I didn’t have time for consulting doctors after travelling to any nearby city( as I live in a small town). I settled with temporary treatment. I started taking full length tests in January 2018. I joined Made easy and Ace academy test series. So 25 tests for next 25 days. I scored really well in tests and my rank was always under 100. Top 10 in 8 tests. That boosted my confidence and I tried to be focused.

The D-day came and I got nervous in the exam, My urine problem kicked in during the exam and heavy back pain started during the examination. I was feeling helpless like I was seeing my dreams slipping away from my hands and I couldn’t do anything. I knew every question I was solving I was doing some mistakes but so much was going on I just wanted it to be finished. When I came out of Examination hall, I knew exactly that I have made my next 1 year very very harder, probably my whole life but I gave my 200% what else a human can do than to try.

I went in depression, I felt like my world has ended. In the meanwhile I cleared BARC written exam. College ended I went home and I started preparing for BARC interview. I really did not feel like preparing for interview as I was still in mourning and the preparation was just nominal.

When I came back from Interview(which obviously did not went well) I realized that’s it and there were 2 moths left for my joining (Camus Placed). I went into preparation mode and in 2 months I completed 8 subjects out of 10.

I joined the job and everyday I approximately got 4–5 hours of study beside sleeping(6 hours). It was a very hard time for me. I felt that I did not belong there in IT sector but I had my aim clear. It was like lose a war win a battle situation. I knew this job is only an income source nothing else. I had this fire inside me to avenge my failure of previous year. Only thing I could think of is planning and plotting my studies and how to execute it. I knew what went wrong in my last year’s exam and so I took all three CBT’s ( 2 from made easy and 1 from ACE) so that I can work on my nervousness.

Finally I took GATE 2019 and this time the luck was in my favor and life finally decided to reward me with the gift I have deserved a year ago. As soon as I came out of exam hall, I felt it in my bones that I did it :)

This was my experience in very brief. I cannot explain what Pain I have gone through to get this pleasure in stark sentences.

Anyway the gist is if you have confidence in yourself then you must continue. Either with positive attitude or negative that doesn’t matter, only thing matters is that you continue the same everyday a little better smiling or crying your choice.

Best Of luck.
Thank you all for helping me get here.

- Ankur agarwal
NIT RAIPUR
(2014-18 Batch)

Public & Media Relations Cell, NIT Raipur
</p>
</div>

</div>


</div>



<!--================== right side img==================-->

<div class="story_fst" >
	
<div class="str_txtk" style="background:#99738e" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">

<div class="detailk" style="background:#BFD641;width:25rem;">

<p class="namek">Abhisek Sinha</p>
<p class="examk" >Mechanical Engineering NIT Patna</p>
<p class="examk" >AIR-23 GATE 2019</p>

</div>

<div class="intv">
<p>
Failures are the pillars of success’, and the story of Vijay
 Wardhan justifies every word of this phrase. 
 Vijay Vardhan who secured 104th rank in UPSC
  Civil Services exam in 2018 failed in more than
   35 exams before hitting the bull’s eye. This is a s
   tory for all those who have failed in an examination. It took him 5 attempts to finally clear the UPSC Civil Services examination and some 30 odd other government examinations.

Vijay’s journey started in 2013 when he came
 to Delhi after completing his engineering in 
 electronics and communication from Hisar, his hometown.
  He came to Delhi to prepare for UPSC Civil Services exam. 
  It took him 6 years and numerous failed attempts to ultimately suc
  ceed in life. In these many years, Vijay appeared for more than 35 gov
  ernment exams which he was unable to crack.

In 2014, for the first time, Vijay attempted fo
r UPSC Civil Services exam in which he failed. In 2015
 he again attempted for the exam and cleared the preli
 minary exam but was unable to qualify UPSC Civil Services
  Main exam. In the following years, 2016 and 2017 he attem
  pted for the exam but could not clear it. Determined more
   than even, he tried again in 2018 and this time he carrie
   d it through. From clearing the UPSC Prelims to mains and
    then the interview, Vijay Wardhan kept clearing hurdle a
    fter hurdle. The end result, he was victorios and secure
    d 104th rank in the UPSC CIvil Services 2018.


But it was not only the UPSC Civil Services exami
nations. He attempted a total of 35 examinations but 
remained unsuccessful. Vijay appeared for various Grade
 A and Grade B government exams. The list included UP PCS, 
 Haryana PCS, Punjab PCS, SSC CGL, LIC, NABARD, ISRO, Haryana Excise
 Inspector, RRB NTPC, RBI Grade B. In most of these
  exams he cleared the prelims but was unable to 
  crack the main exam or interview. At times it so happened
   that he even failed in the medical exam or in the document verification process.

The list of failures may crack any person and force
 them to give up on their dreams. But Vijay epitomised the 
 am in site, Vijay continued to strife for his dreams and 
 on April 5 his hard work and dedication paid off. Vijay War
 dhan not only cracked the examination, he also secured 104th
  rank. Vijay Wardhan has opted for Indian Police Services.

Vijay’s story is a story of courage, determination and neve
r say die attitude. In today’s world, with high competition,
 it is stories like these that show the beacon to the many who give
  up after failing. He truly epitomizes that failiures are the first steps to success.

Source of Information : The Khiladi Returns.
</p>
</div>
</div>
<div class="str_imgk"> 
<img src="images/varun.png"  style="border-color:#99738e" ></div>
</div>


<!--================== left img==================-->
<div class="story_fst" > 

<div class="str_img" > <img src="images/varun.png" style="border-color:#41b3a3" ></div>

<!--================== main section that contains text start =================-->

<div class="str_txt" style="background:#41b3a3"   data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">

<div class="detail">
<p class="name"> Ansar Shaikh</p>
<p class="exam">AIR-361 UPSC 2016</p>
</div>

<div class="intv">
<p>
Ansar Shaikh is the first graduate in his family, certainly the first civil servant and one of India’s youngest IAS officers.

The Maharashtra lad made headlines after he cracked the competitive Union Public Service Commission exam in his maiden attempt at the tender age of 21 and secured an All-India Rank of 361 in 2016.

If you’ve ever heard his speeches, you’d know the odds he fought to reinstate his family’s faith in the power of education. His father, a rickshaw driver in the drought-hit village of Shelgaon in Jalna district of Marathwada, struggled with alcohol addiction. He married thrice. Ansar’s mother, who worked as a farm hand, is his second wife.

Ansar grew up observing the social menaces of domestic violence and child marriage at close quarters. His sisters were married off as young as 15, and his brother dropped out of class six to work at his uncle’s garage

And even though he was two years younger than Ansar, Ansar considers him bigger than himself in ways more than one. Why? You’ll know as his story unfolds.

While one would have thought that the pressure at home would eventually make Ansar drop out, he didn’t.

“My relatives would walk up to my parents and ask them why there was a need for me to study. When I was in class four, my parents approached my teacher and said that they wanted me to drop out, but my teacher was persistent. He told them, ‘Your son is a bright student, invest in his education. You will not regret it. He will turn your lives around.’ For my uneducated parents, a teacher saying that was a big deal,” he says, in one of his speeches.

And so, his parents decided to give education and Ansar a chance. He proved his merit when he scored an exceptional 91 per cent in his Class 12 boards.

He jokes about the struggles of studying in a Zilla Parishad School, saying, “I loved chicken growing up, but of course, it was a luxury in a home where a square meal was difficult to put together. Once in a while, we’d spot worms in our mid-day meals. So vegetarian food would automatically turn non-vegetarian,” he laughs.

Having studied until class 12 in Marathi-medium, the move to pursue a Bachelor’s Degree in Political Science at Pune’s renowned Fergusson College was a difficult decision. While his father would keep sending small amounts from his savings to help him survive in the city, his brother would deposit his entire monthly salary of Rs 6,000 in Ansar’s account to fund his academic dreams.

When he first entered Fergusson College in 2012, all he had was a pair of chappals and two pairs of clothes, that he would wear alternatively. The fact that he came from a vernacular medium school and wasn’t fluent in English also created an inferiority complex. But Ansar wasn’t one to give up.

It was during his first year that his teachers exposed him to UPSC. By then, alongside his regular academics, he approached Unique Academy’s Tukaram Jadhav and requested him for admission to the course.

The big question, though, was how he would arrange the UPSC coaching fee which was to the tune of Rs 70,000.

He recalls, “I spoke to Jadhav sir and told him of the background I came from. He was gracious enough to accept me into the course and agreed to give me a 50% concession because he believed I had a spark. When I entered the class, most students who came there were in their late 20s and 30s, who had given two to three attempts. I was the only 19-year-old. I would often get intimidated and found it difficult to interact. I would sit in the back and crane my neck.”

But as the course continued, Ansar started becoming curious and began interacting with others. He says that the spirit of inquiry is essential to a UPSC aspirant.

“I was often mocked when I would ask silly questions. But I never really stopped asking questions. There were days when I would survive on vada pav and didn’t have the money to buy preparatory material. So I would borrow it from my friends and photocopy it. I pushed myself very hard. I would study for 13 hours a day because I knew that I couldn’t afford failure. I wouldn’t have the resources to give a second attempt,” he says.

He heaved a sigh of relief when he cleared the prelims, but the mains and interview were still to go. While he was preparing for his mains, his sister’s husband died of alcohol overdose. And suddenly, the responsibility of comforting the family had fallen upon his shoulders, since his father and brother were both working.

“But even in the difficult time, my sister who had lost her husband, as strong as she was, told me to return to Pune and prepare for the mains.”

The results came out, and he had cleared them yet again.

Read more: People’s Officer of Mizoram: This Doctor-Turned-IAS Officer’s Transfer Sparked a Public Protest

He still remembers his interview round with a panel where a retired IAS officer asked him about Muslim youth joining radical organisations. While he was impressed by the answers Ansar gave, at one point in the interview -they asked him if he belonged to the Shia sect or the Sunni sect. Ansar was quick to quip, “I am an Indian Muslim.”

He scored 199 out of 275, which is a remarkable achievement as far as scoring in an IAS interview round goes.

In his message to IAS aspirants, Ansar says, “If you think your competition is with other lakhs of aspirants who give the exam, you are mistaken. Your only competition is you. So get rid of all of your pessimistic thoughts and success will come your way.

Please remember, poverty and success have no correlation. All you need is hard work and determination. What background you come from, doesn’t matter. Marks might not define your intelligence. But for some, it is their only way to pull themselves out of the abyss of poverty. It is not easy and requires rigorous hard work to arrive at those grades and shouldn’t be disregarded.”
Credit - TBI.
</p>
</div>

</div>

</div>





<!--================== right side img==================-->

<div class="story_fst" >
	
<div class="str_txtk" style="background:#99738e" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">

<div class="detailk" style="background:#BFD641;width:25rem;">

<p class="namek">Vijay Wardhan</p>
<p class="examk" >AIR-104 UPSC Civil</p>

</div>

<div class="intv">
<p>
My name is Abhishek Kumar Sinha. I got AIR 23 in Mechanical Engg. with 88.29 marks. Currently I am in my final year of NIT PATNA and I have prepared through self study and with standard books. well I have tried to write it in story so you would better relate it. my story is not very inspiring. this post is specifically for self study students who are preparing through standard books. There are a lot of queries regarding students like how to make notes, give test series. I will try my best to address this.

Disclaimer : If you dont have any knowledge about your subjects then you need atmost 1.5 years for it.

here it starts : I have started my preparation from 4 semester. In this time whatever was being taught in college I just solve previous year question from it that's it. During summer years I have started making notes for subjects from standard books ( I will tell you afterwards that it was not helpful). Also, I want to add. be very attentive see videos of chandresh mahajan sir, ankit Goyal sir They are enough for you to guide. I have continued this process of making notes and solving previous year upto 5 semester. From six semester, i have two tasks, to study what is in sixth semester gate and revise previous subjects. this process is not so straightforward, I remember that while preparing fluid mechanics from sk som I end up completing 90% of civil fluid mechanics syllabus😁. But since I have time I get hold of it.

Now came most important part. I have fixed a deadline that whatever happens on 1 june 2018 I will start my first test. at that I was doing my training at HAL bangalore. I have purchased ace test series and give first topic wise test and I got 12 out of 20 and in next it improved to 11. I understand something is missing search the net and I found I have to make short notes. so I just write the important formulas, concepts. it is hardly 30 pages for all subjects at that time. I just revise it and give the test still my marks are more or less same. In manufacturing limits and tolerance I got 3/25 !.see this process is of many ups and down but you need to enjoy it and having self study you will see some questions are new and some questions you dont know the concepts. I note it and keep updating my short notes. By the time I completed the subject test my short note change to 100 page. Now I move to made east ( the most awaited test series) the questions are tough but i have covered the concepts (ace) i just need to practise good questions but questions are becoming irrelevant test by test. then came chandresh mahajan sir video on how to choose test series and I joined exergic in end september. Questions are really good and conceptual although some printing mistakes but you will not find such quality anywhere. Now in october I started doing full length test starting made easy 😁 seeing the questions I was blanked.I just start the test and finish it and solve its questions but its questions are good. I continued this procedure of giving notes, updating short notes. In all this process I dont see my original notes and For gaining some concepts I directly go to NPTEL. Never ever think about rank and in the words of chandresh mahajan sir the purpose of test series is to solve questions.

P.S.- In ACE Full length during last phase my average marks was 78. In exergic , I didn't get good marks but learned the most in this. and In made easy I am telling you.

In the end The most Important thing enjoy the process, make your own strategy ( Just start and things began to fall in line trust me it will) and find your strength and you will get score better than me. believe me you will

- Abhishek Kumar Sinha
AIR 23 
Mechanical 
NIT PATNA

NIT PATNA Family Student Activity Center, NITP
</p>
</div>
</div>
<div class="str_imgk"> 
<img src="images/ubaid.png"  style="border-color:#99738e" ></div>
</div>





<!--============== Signup Popup ==================-->
<div class="signup" id="sign">
<div class="sign-card">
 <div class="sign-img">
  <div class="links">
    <p class="p1">Quick Links</p>
    <div class="msgx" ><p id="msgx" ></p></div>
    <ul>
     <a href="#"> <li>Colleges</li></a>
     <a href="#"> <li>Exams</li></a>
     <a href="#"> <li>Cutoff</li></a>
     <a href="#"> <li>News</li></a>
     <a href="#"> <li>Events</li></a>
     <a href="#"> <li>Important Dates</li></a>
      </ul>
    <p class="p2"><a href="#">privacy policy</a></p>
  </div>
 </div>
 <div class="sign-form">
   <img class="cancel" onclick="cancel()" src="images/cut.png">
    <p class="mainh">Register Here</p>
    <div class="msgx"  id="msgk"><p id="msgy"></p></div>
   <div>
     <form method="post" autocomplete="off">
   <input autocomplete="off" type="text"  name="name"  id="name" placeholder="Name"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <input   autocomplete="off"  type="text" name="user_email" id="user_email"  placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <input  type="text"  name="phone" id="phone" placeholder="Mobile Number"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <select name="clg" id="clg"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
      <option>Select College</option>
      <option>National Institute Of technology Srinagar</option> 
      <option>National Institute Of technology Srinagar Silchar</option>
      <option>National Institute Of technology Srinagar Trichy</option>
      <option>Motilal Nehru Institute Of Technology Allahabad</option>
      <option>Malviya Natioanl Institute Of Technology Jaipur</option>
      <option>Other</option>
      </select>
      <select name="state" id="state"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <option>Select Your State</option>
          <option>Uttar Pradesh</option>
          <option>Jammu and Kashmir</option>
          <option>Rajsthan</option>
          <option>Tamilnadu</option>
          <option>Uttrakhand</option>
          <option>Bihar</option>
          </select>
          <input  autocomplete="off" name="user_pass" id="user_pass" type="password" placeholder="Password"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <input autocomplete="off" type="password"  id="cnf_pass" name="cnf_pass" placeholder="Confirm Password" onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <button name="register" id="register" type="button"   class="register">Register</button>
        </form>
         <p> <a onclick="show_log();cancel();">already a member? login</a></p>
  </div>
 </div>
</div>
</div>
<!--=============== Login Popup =================-->
<div class="login" id="log" >
<div class="log-card">
    <img class="cancel-log"  src="images/cut.png" onclick="cancel_log()">
<div>
<div class="log-msg"  ><p id="message"><p></div>
  <form  method="post" autocomplete="off">
  <input  id="email" type="text" autocomplete="off" placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
  <input autocomplete="off"  id="pass" type="password" placeholder="Password"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
<div class="select" id="select">
  <input type="radio" name="user" id="user" value="1" checked>&nbsp <label class="lab1">User</label>
  <input type="radio" name="user" id="admin" value="2">&nbsp <label>Admin</label>
 </div>
  <button type="button"  name="login" id="login">Login</button>
</form>
  <p class="signx"><a onclick="show_signup();cancel_log();">new member? register</a></p>
</div>
</div>
</div>
 <!--============== Footer Section ==================-->
  <footer>
    <div class="datay">
              
      <div><p class="y">Colleges</p>
        <div class="linex" id="lx"></div>
      <p><a href="#">IIT</a></p>
      <p><a href="#">NIT</a></p>
      <p><a href="#">IIIT</a></p>
      <p><a href="#">AIIMS</a></p>
      </div>
      <div>
          <p class="y">Exams</p>
          <div class="linex" id="ly"></div>
            <p><a href="#">Jee Advance</a></p>
            <p><a href="#">Jee Mains</a></p>
            <p><a href="#">Gate</a></p>
            <p><a href="#">Neet</a></p>  
          </div>
      <div><p class="y">Cutoff</p>
        <div class="linex" id="lz"></div>
        <p><a href="#">IITs </a></p>
        <p><a href="#">NITs</a></p>
        <p><a href="#">IIITs</a></p>
        <p><a href="#">AIIMS</a></p></div>
      <div><p class="y">Links</p>
        <div class="linex" id="la"></div>
        <p><a href="#">College Reviews</a></p>
        <p><a href="#">College Ranking</a></p>
        <p><a href="#">About Us</a></p>
        <p><a href="#">News</a></p></div>
        
    </div>
  <div class="datad">
  <p class="x">Feel Free To Contact Us</p>
  <p id="cont">iamannitian@gmail.com &nbsp &nbsp| &nbsp +91-9055667606 &nbsp | &nbsp  +91-9055667606</p>
 <span id="respo_contact">
 <P>iamannitian@gmail.com</p> 
 <P>+91-9055667606</p> 
 <P>+91-9055667606</p> 
   </span>
</div>
<!--============== Bottom Container =====================-->
 <div class="container">
<p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
2019 &nbsp| &nbsp I AM AN NITIAN <span id="developer">&nbsp | &nbsp DESIGNED AND DEVELOPED BY SHUBHAM MAURYA &nbsp|&nbsp NIT SRINAGAR</span></p>
<p id="and_copy" class="copyright">Developed by Shubham Maurya</p>
</div>
</footer>
</div>
</body>
</html>
<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>

<!--==================  Local Js Files  ==================-->
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({ disable: 'mobile' }); //disabling the animations in mobile version
</script>



<script>

 /*==================== Menu toggle =========================*/
 $(document).ready(function(){

if (window.matchMedia('(max-width:721px)').matches)
{

$('.cut_nav').click(function(){
  $(this).css('display','none');
  $('.menu-toggle').css('display','block');
  TweenMax.to('.active',0.5,{scaleX: 0});
  $('nav').css('z-index', '1');
  $('.logo').css('marginLeft', '0px');
  $('.logo').css('marginTop', '0px');
  $('.logo_txt').css('marginTop', '0px');
  setTimeout(function(){
  
    $('header').css('background', 'black');
  
  },200)

})

$(window).scroll(function(){
$('header').css('background', 'black');
})



$('.menu-toggle').click(function(){
  $(this).css('display','none');
  $('.cut_nav').css('display','block');

  $('nav').css('z-index', '4');

  $('header').css('background', 'transparent');
  $('.cut_nav').css('background','black');
  TweenMax.to('.active',0.4,{scaleX: 1});

  setTimeout(function(){
    $('.logo').css('marginLeft', '62px');
    $('.logo').css('marginTop', '18px');
    $('.logo_txt').css('marginTop', '10px');
  },200);

  setTimeout(function(){
    $('nav').css('z-index', '-1');
  },350);
 
})



$('#login_nav').click(function()
{
$('.logo').css('marginLeft', '0px');
$('.logo').css('marginTop', '0px');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
$('header').css('background', 'black');
$('.logo_txt').css('marginTop', '0px');
})

$('#register_nav').click(function(){
$('.logo').css('marginLeft', '0px');
$('.logo').css('marginTop', '0px');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
$('header').css('background', 'black');
$('.logo_txt').css('marginTop', '0px');
})

$('#about_nav').click(function()
{
$('.logo').css('marginLeft', '0px');
$('.logo').css('marginTop', '0px');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
})

}

})
</script>