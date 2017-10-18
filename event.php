<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/icon.jpg"/>
	<title>Innovation Lab | Event</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/blog.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,600,700,800,900" rel="stylesheet">
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css'>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<style>
		.attachment-full.size-full.wp-post-image{
			width:100%;
			height:auto;
		}
	</style>
</head>
<body>
	<header class="main_h">
		<div class="row">
			<div class="row-bar">
				<div class="mobile-toggle"></div>
				<div class="logo">
					<a href="../index.php">
						<img src="../assets/logo_png/ICIL_logo_blue.png">
					</a>
				</div>
			</div>
			<nav>
				<ul>
					<a href="../index.php"><li>Home</li></a>
					<a href="../about.html"><li>About</li></a>
<!--TEMP HIDE		<a href="../blog.php"><li>Blog</li></a>-->
					<li onclick="open_nav()"> PROGRAMS <i class="fa fa-caret-down" aria-hidden="true"></i>
						<div class="drop_down_nav" >
							<ul >
								<a href="../adults.php"><li>ADULT</li></a>
								<a href="../youth.php"><li>YOUTH</li></a>
								<a href="../immigrant.php"><li>IMMIGRANT</li></a>
								<a href="../business.php"><li>BUSINESS</li></a>
							</ul>
						</div>
						<ul class="mobile-drop-down-nav">
							<a href="../adults.php"><li class="linea">ADULT</li></a>
							<a href="../youth.php"><li class="linea">YOUTH</li></a>
							<a href="../immigrant.php"><li class="linea">IMMIGRANT</li></a>
							<a href="../business.php"><li class="linea">BUSINESS</li></a>
						</ul>
					</li>
					<a href="../contact.html"><li>Contact</li></a>
				</ul>
			</nav>
		</div>
	</header>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="../index.php">Home</a>
		  <a href="../about.html">About</a>
<!--	  <a href="../blog.php">Blog</a> TEMP HIDE-->
		  <a href="#">Programs</a>
		  <a href="../contact.html">Contact</a>
		</div>
		<?php require('wordpress/wp-blog-header.php'); ?>
		<?php
		$end = end(explode('/', $_SERVER[REQUEST_URI]));
		print_r($end);
		$the_query = new WP_Query( array( 'post_type' => 'tribe_events') ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
		<?php
		//print_r($the_query);
		//print_r($the_query -> posts);
		foreach( $the_query -> posts as $k => $v){
			if($end == $v -> post_name ){
			//print_r ($v);
			//print_r ($v -> post_name);
				$event_id = $v -> ID;
				if ( ! defined( 'ABSPATH' ) ) {
					die( '-1' );
					echo 'this died!';
				}
			$events_label_singular = tribe_get_event_label_singular();
			$events_label_plural = tribe_get_event_label_plural();
			//$event_id = $v -> ID;
			print_r($event_id);?>
		<div class="hero" style="background-image:url(<?php echo tribe_event_featured_image( $event_id, 'full', false, false ); ?>);"></div>
		<div class="intro-container2"><h1><?php echo $v -> post_title; ?></h1></div>
		<div id="main">
			<div id="content">
				<div class="meh" style="width:100%;">
					<div class="tribe-events-schedule tribe-clearfix">
						<?php echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
						<h3 style="    padding-left: 5px;"><?php echo tribe_get_address ( $event_id ); echo ', '.tribe_get_region ( $event_id ); ?></h3>
						<?php if ( tribe_get_cost() ) : ?>
						<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
						<?php endif; ?>
					</div>
					<div><p><br><?php echo $v -> post_content ?></p></div>
				</div>
			</div>
		<div id="calender">
		<h1>Save this Event</h1>
		<br>
		<br>
		<div id="calender-container">
				<p><a href="<?php echo tribe_get_gcal_link($event_id);?>" target="_blank">Add to Google Calendar</a></p>
				<p><?php echo tribe_get_map_link_html( $event_id ); ?></p>
				<div><?php print_r(tribe_get_embedded_map( $event_id )); ?></div>
		</div>
		<?php
				}
			}
		?>
		<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
<!--	<iframe src="http://localhost:8888/wordpress/events/" style="width:100%; height:100vh;"></iframe>-->
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
			<p>"Industry City is an innovation ecosystem that serves to benefit its tentants and the wider community. Its 35 acres is located on the waterfront in Sunset Park, Brooklyn."<br>
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
<script src="../assets/js/js.js"></script>
</body>
</html>