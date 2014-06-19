<?php session_start() ?>

<!DOCTYPE html>
<!--Design by Henry Millison, based on CSS from frederikk.co and other sources on internet-->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<head>
  <title>Henry Millison</title>
  
   
  <!-- Mobil optimazation -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="./js/main.js" type="text/javascript"></script>

  <link rel="stylesheet" href="./css/grid_responsive.css" type="text/css" media="all">

  <!--[if lt IE 9 ]><link rel="stylesheet" href="./css/720_grid.css" type="text/css"><![endif]-->
</head>

<body>


<div class="row">
  <div id="site_wrapper">
      <div class="col_100_menu">
        <div class="menu">
          <div class="left_align">
            <div class="social_media">
              <a href="/henrymillison_resume.pdf" target="_blank"><img src="./images/resume.png" title="See My Resume" alt="resume" width="20"></a>
              <a href="http://www.linkedin.com/in/hmillison/" target="_blank"><img src="./images/linkedin_2.png" title="LinkedIn Profile" alt="linkedin" width="15"></a>
              <a href="https://github.com/hmillison/" target="_blank"><img src="./images/github.png" title="GitHub" alt="github" width="15"></a>

            </div>
          </div>
          
        </div>
      </div>

      <div class="col_100">
      <div id = "top">
            <a href="#display" onclick="javascript:unhide('more');"><img class="expandOpen" src="./images/topcirc.png" alt="Picture" width="140"></a>
      <br>  
      </div>
              <h3 style="color: white; ">Henry Millison</h3>
              <br />
              <br />

      </div>

    
<div id ='cssmenu'>
<ul>
    <li>
    <a href="#display" title="More About Me" onclick="javascript:unhide('AboutMe'); "><span><strong>About</strong></span></a>
    </li>
    <li>             
    <a href="#display" onclick="javascript:unhide('Work');"><span><strong>Experience</strong></span></a>
    </li>
     <li>             
    <a href="#display" onclick="javascript:unhide('Portfolio');"><span><strong>Portfolio</strong></span></a>
    </li>
    <li>             
    <a href="#display" onclick="javascript:unhide('Contact');"><span><strong>Contact</strong></span></a>
    </li>
</ul>
</div>
<div class = "main">
<div id="intro"></div>
<div id="more" class="hidden">      
        <br />
        <br />
        <br />
        <br />
    </div>
<div id="AboutMe" class="unhidden">
<p>I am studying Informatics at the University of Michigan. This interdisciplinary major between the 
Department of Statistics, Engineering and School of Information brings together human computer interaction,
big data analysis and software development. <br /><br />
Through my studies and work experience, I cultivated my programming skills together with an understanding
of how users interpret and understand what I create.<br /><br />
I aspire to design and develop things that change people's lives in a positive way, whether it is
a simple app that makes a mundane task easier or developing complex systems that completely revolutionize
the way we use technology. 
</p>
</div>
<div id="Portfolio" class="unhidden">
<p>The portfolio section is coming soon...</p>
</div>
<div id="Work" class="hidden">
<div class="intern1">
<div class="col_100">
<h4>Summer 2014: Lead Software Development Intern, Seat Side Service</h4><br />
Redesign of POS system for Vendors<br />Designing and Developing Customer Analytics <br />Managing a team of three other developers<br />
HTML/CSS, SQL, PHP, Javascript (JQuery/AJAX)
</div>
</div>
<div class="intern2">
<div class="col_100">
<h4>Summer 2013: Intern, SCDM </h4><br />
Project Management between Developers in Armenia and Executives in Germany<br />
</div>
</div>
<div class="intern3">
<div class="col_100">
<h4>Summer 2012: Web Production Intern, Social Media Link</h4><br />
Web Design, Email Marketing, Database Management<br />
HTML/CSS, SQL, PHP<br />
Photoshop, ColdFusion, Dreamweaver, Visio, Google Analytics, Vertical Response
</div>
</div>
<div class="intern4">
<div class="col_100">
<h4>Selected Coursework:</h4><br />
SI 364, Fall 2014 - Building Interactive Applications - HTML5, PHP, MySQL<br />
SI 320, Fall 2014 - Graphic Design - Photoshop, Design Principles<br />
SI 663, Fall 2014 - Entrepreneurship in the Information Industry - Business Development<br />
SI 301, Winter 2014 - Models of Social Information Processing - Python, Twitter API, Graph Theory, Game Theory<br />
SI 422, Winter 2014 - Evaluations of Systems & Services -  Usability tests of software, conducted user research, UX principles<br />
EECS 280, Winter 2013 - Programming and Data Structures - C++<br />
SI 339, Fall 2012 - Design of Complex Websites - HTML/CSS, Python, AJAX, Google App Engine<br />
EECS 183, Winter 2012 - Elementary Programming Concepts - C++<br />
</div>
</div>
</div>

<div id="Contact" class="hidden">
<div id="contact-form" class="clearfix">
    <h1>Get In Touch!</h1>

    <h2>If you have any inquiries or just want to say hello</h2>
    <fieldset id="contact_form">
    <div id="result"></div>
       <label for="name">Name: <span class="required">*</span></label>
		<input type="text" id="name" name="name"  placeholder="John Doe" required="required" autofocus="autofocus" />
 
		<label for="email">Email Address: <span class="required">*</span></label>
		<input type="email" id="email" name="email"  placeholder="johndoe@example.com" required="required" />
 
		<label for="telephone">Telephone: </label>
		<input type="tel" id="phone" name="phone" />
 
		<label for="message">Message: <span class="required">*</span></label>
		<textarea id="message" name="message" placeholder="Your message must have greater than 10 characters" required="required" data-minlength="10"></textarea>
 		<label>
		<button id="submit_button">Send Away</button>
		</label>

    </fieldset>
</div>
</div>
</div>
</div>
</div>

      

        <br>
        <br>
        <br>
        <br>

    


 
</body></html>