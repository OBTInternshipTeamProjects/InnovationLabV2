<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.jpg"/>
		<title>Innovation Lab</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/script.js"></script>
		<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css'>
	</head>
	<body>
		<header class="main_h">
			<div class="row">
				<div class="row-bar">
					<div class="mobile-toggle"></div>
					<div class="logo">
						<a href="index.php">
							<img src="assets/logo_png/ICIL_logo_blue.png">
						</a>
					</div>
				</div>
				<!--navigation-->
				<nav>
					<ul>
						<a href="index.php"><li>Home</li></a>
						<a href="about.html"><li>About</li></a>
        <!--TEMP HIDE	<a href="blog.php"><li>Blog</li></a>-->
						<li onclick="open_nav()"> PROGRAMS <i class="fa fa-caret-down" aria-hidden="true"></i>
							<div class="drop_down_nav" >
								<ul >
									<a href="adults.php"><li>ADULT</li></a>
									<a href="youth.php"><li>YOUTH</li></a>
									<a href="immigrant.php"><li>IMMIGRANT</li></a>
									<a href="business.php"><li>BUSINESS</li></a>
								</ul>
							</div>
							<ul class="mobile-drop-down-nav">
								<a href="adults.php"><li class="linea">ADULT</li></a>
								<a href="youth.php"><li class="linea">YOUTH</li></a>
								<a href="immigrant.php"><li class="linea">IMMIGRANT</li></a>
								<a href="business.php"><li class="linea">BUSINESS</li></a>
							</ul>
						</li>
						<a href="contact.html"><li>Contact</li></a>
					</ul>
				</nav>
			</div>
		</header>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">Home</a>
		  <a href="about.html">About</a>
<!--	  <a href="blog.php">Blog</a> TEMP HIDE-->
		  <a href="#">Programs</a>
		  <a href="contact.html">Contact</a>
		</div>
		<div class="image-container">
			<div class="arrow-container">
				<a href="#intro" id="intro" class="hide-on-palm arrow-down">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-down fa-stack-1x"></i>
					</span>
				</a>
			</div>
		</div>
		<div class="intro-contanier">
			<h1 class ="intro-text">INNOVATION LAB @ INDUSTRY CITY</h1>
			<div class="text-contanier">
				<p>A match made in Sunset Park. Our Innovation Lab trains a quailty workforce of local community residents, and integrates them into surrounding businesses.</p><br> <p style="font-size: 26px;"><a href="about.html">Learn More</a></p>
			</div>
		</div>
		<div class="row-contanier" id="next">
			<div class="row-item">
				<a href="adults.php"><img src="assets/images/adult.png" alt="" width="100%" height="100%" class="alignnone size-medium wp-image-176" /></a>
				<div class="word1">Adult <br>Programs</div>
				<!--<div class="overlay">
						<div class="text">Adult Programs</div>
					</div>-->
			</div>
			<div class="row-item">
				<a href="youth.php"><img src="assets/images/code.png" alt="" width="100%" height="100%" class="alignnone size-medium wp-image-191" /></a>
				<div class="word2">Youth <br>Programs</div>
				<!--<div class="overlay">
						<div class="text">Youth Programs</div>
					</div>-->
			</div>
			<div class="row-item">
				<a href="immigrant.php"><img class="alignnone size-medium wp-image-179" src="assets/images/flag.png" alt="" width="100%" height="100%" /></a>
				<div class="word3">Immigration <br>Programs</div>
				<!--<div class="overlay">
						<div class="text">Immigration Services</div>
					</div>-->
			</div>
			<div class="row-item">
				<a href="business.php"><img src="assets/images/simplebrief.png" alt="" width="100%" height="100%" class="alignnone size-medium wp-image-178" /></a>
				<div class="word4">Business Programs</div>
					<!--<div class="overlay">
						<div class="text">Workshops</div>
					</div>-->
			</div>
		</div>
		<div class="contanier-two">
			<div class="contanier-icons">
				<iframe id="video" src="https://player.vimeo.com/video/216242569" width="90%" height="450" frameborder="0" align="middle" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="contanier-events">
				<h1>Upcoming Events</h1>
				<br>
				<br>
				<div id="calender-container">
					<?php require('wordpress/wp-blog-header.php'); ?>
				<?php
				$the_query2 = new WP_Query( array( 'post_type' => 'tribe_events', 'paged' => $paged, ) ); 
				//print_r($the_query2);
				if ( $the_query2->have_posts() ) : ?>
				<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
				<?php 
				$date=date_create($post->EventStartDate);
				?>
					<div class="info">
						<div class="grey-box">
							<p><?php echo date_format($date, 'D');?><br>
							<?php echo date_format($date, 'j');?><br>
							<?php echo date_format($date, 'M');?></p>
						</div>
						<h1 class="title">
							<a href="event.php/<?php echo($post->post_name) ?>">
								<?php the_title();?>
							</a>
						</h1>
						<br style="clear:both"><br>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="partners">
			<h1>Innovation lab is a partner of the following organizations</h1>
			<div class="images-contanter">
				<a href="https://industrycity.com/"><img src="assets/images/ic.png" alt="" class="alignnone size-full wp-image-131" /></a>
				<a href="http://obtjobs.org/home/"><img src="assets/images/obt.png" alt="" class="alignnone size-full wp-image-194" /></a>
				<a href="http://www.citytech.cuny.edu/" ><img src="assets/images/citytech.png" alt="" class="alignnone size-full wp-image-130" /></a><br>
				<a href="http://sco.org/programs/center-for-family-life/"><img src="assets/images/sunset.png" alt="" class="alignnone size-full wp-image-135" /></a>
				<a href="http://www.sbidc.org/"><img src="assets/images/sbid.png" alt="" class="alignnone size-full wp-image-134" /></a>
				<a href="http://www.sunsetspark.org/"><img src="assets/images/sunset-spark-logo-square-purple-bg.png" alt="" class="alignnone size-full wp-image-132" /></a>
			</div>
		</div>
	<footer>
	 	<div class="left-footer">
			<div class="left-container">
				<a href="https://goo.gl/maps/MJFr6GU7ikv"><p><i class="fa fa-map-marker" aria-hidden="true"></i> 87 35th 2nd floor Brooklyn, NY 11232</a><br>
				<a href="tel:+17188018970"><i class="fa fa-mobile" aria-hidden="true"></i> (718) 801-8970</a><br>
				<a href="mailto:innovationlab@industrycity.com?" target="_top"><i class="fa fa-envelope" aria-hidden="true" style="color: black;"></i><span class="in-email"> innovationlab@industrycity.com</span></p></a>
			</div>
		</div>
		<div class="right-footer">
			<span class="left">ABOUT:</span>
			<br><div style="clear:both;"></div>
			<p>"Industry City is an innovation ecosystem that serves to benefit its tentants and the wider community. Its 35 acres is located on the waterfront in Sunset Park, Brooklyn."
			<br>			
			<div class="icons">
				<a href="https://www.facebook.com/IndustryCityBK/" target="_blank"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://twitter.com/industrycity?lang=en" target="_blank"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a> 
				<a href="https://www.instagram.com/industrycity/?hl=en" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
			</div>
		</div> 
	</footer>
	<div class="disclaimer">
		<b><p>THIS WEBSITE IS DESIGNED BY STUDENTS FROM INNOVATION LAB AT INDUSTRY CITY.</p></b>
	</div>
 <script type="text/javascript">
	function open_nav(){
				if(window.matchMedia( "(max-width: 600px)" ).matches)
					$('.mobile-drop-down-nav').toggle();
				else
					$('.drop_down_nav').toggle();
			}
</script>
</body>
</html>