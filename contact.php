<!DOCTYPE html>
<html>
	<head>        
		<meta charset="utf-8" />
				<!-- SEO Page Description -->
    	<meta name="author" content="Iulian Andriescu" />
    	<meta name="description" content="Homework for Web Design Course" />
    	<meta name="keywords" content="web design, 960gs html, html, html5, css, css3, 960gs css" />
                <!-- HTML5 RESET-->
        <link type="text/css" rel="stylesheet" href="css/html5reset-1.6.1.css" />
				<!-- 960 GRID SYSTEM -->
        <link type="text/css" rel="stylesheet" media="all" href="css/960_12_col.css" />
		<link type="text/css" rel="stylesheet" media="all" href="css/responsive.css" />
				<!-- Cascade Style Sheet -->
        <link type="text/css" rel="stylesheet" media="all" href="css/global-styles.css" />   
		<link type="text/css" rel="stylesheet" media="all" href="css/contact.css" />   
				<!-- To help browsers older than IE9 interpret HTML5 -->
        <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<script> 	
			$(document).ready(function(){
			   $("header").load("header.html"); 
			   $("header").load("header.html", function(){ 
					$("ul#mainMenu li:nth-of-type(5)").addClass("active-button");  			   
			   });
			   $("footer").load("footer.html"); 
			}); 
		</script> 
 
		<title>
		Web Design Homework - HTML-CSS - Contact Page
		</title>
	</head>
	<body>
		<div id="page-content" class="container_12">
			<header class="container_12"> 
			</header>
			<main id="main-content" class="container_12">	
				<div class="container_12 inner-banner">
					<div class="grid_5 alpha">
						<h1>Contact Us</h1>
					</div>
					<div class="grid_7 omega">
						<span class="slogan">Thank you for stopping by. How may we help you?</span>
					</div>
				</div>
				
				<div class="container_12">
					<div id="contact-us" class="grid_9 alpha">
						<form id="ContactForm" action="">
							<label>Name</label><br /><br />
							<input id="name" name="name" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
							<span class="error" style="display:none;"></span>
								<br /><br />
							<label>Email</label><br /><br />
							<input id="email" name="email" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
							<span class="error" style="display:none;"></span>
								<br /><br />
							<label>Subject</label><br /><br />
							<input id="subject" name="subject" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
								<br /><br />
							<label>Your message <span>(300 characters allowed)</span></label><br /><br />
							<textarea id="message" name="message" class="inplaceError" cols="6" rows="5" autocomplete="off"></textarea>
							<span class="error" style="display:none;"></span>
								<br /><br />

							<input id="send" type="button" value="Submit"/>
							<span id="loader" class="loader" style="display:none;"></span>
							<span id="success_message" class="success"></span>

							<input id="newcontact" name="newcontact" type="hidden" value="1"></input>
						</form>
					</div>
					<aside id="sidebar" class="grid_3 omega">
						<div class="cont">
							<h3>Company Info</h3>
							<p class="contact">
								123 Street Name<br />
								City: 12345<br />
								Country: Romania
							</p>
						</div>
						<div class="cont">
							<h3>Contact Details</h3>
							<p class="contact">
								contact@mail.com<br />
								Website: www.Business.com<br />
								Phone: +40.123.456.789
							</p>
						</div>
						<div class="cont">
							<h3>Connect with Us</h3>
							<ul class="soc">
								<li><a href="http://www.linkedin.com"><img src="images/in-logo.png"></a></li>
								<li><a href="http://www.twitter.com"><img src="images/tw-logo.png"></a></li>
								<li><a href="http://www.facebook.com"><img src="images/fb-logo.png"></a></li>
							</ul>
						</div>
					</aside>
				</div>
			</main>	
			<footer class="container_12"> 
			</footer>
		</div>
	</body>
</html>