<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.jpg" />
	<title>Innovation Lab | Blog</title>
	<link rel="stylesheet" type="text/css" href="assets/css/blog.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css'>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108254204-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-108254204-1');
    </script>
</head>
<body>
	<header class="main_h">
		<div class="row">
			<div class="row-bar">
				<div class="mobile-toggle"></div>
				<div class="logo">
					<a href="index.php"><img src="assets/logo_png/ICIL_logo_blue.png"></a>
				</div>
			</div>
			<nav>
				<ul>
					<a href="index.php"><li>Home</li></a>
					<a href="about.html"><li>About</li></a>
					<a href="blog.php"><li>Blog</li></a>
					<li onclick="open_nav()">PROGRAMS <i class="fa fa-caret-down" aria-hidden="true"></i>
						<div class="drop_down_nav">
							<ul>
								<a href="adults.php"><li>ADULT</li></a>
								<a href="youth.php"><li>YOUTH</li></a>
								<a href="immigrant.php"><li>IMMIGRANT</li></a>
								<a href="business.php"><li>BUSINESS</li></a>
							</ul>
						</div>
						<ul class="mobile-drop-down-nav">
							<a href="adults.php"><li class="linea">ADULT</li>
							</a>
							<a href="youth.php"><li class="linea">YOUTH</li></a>
							<a href="immigrant.php"><li class="linea">IMMIGRANT</li></a>
							<a href="business.php"><li class="linea">BUSINESS</li></a>
						</ul>
					</li>
					<a href="contact.html">
						<li>Contact</li>
					</a>
				</ul>
			</nav>
		</div>
	</header>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php">Home</a>
		<a href="about.html">About</a>
		<a href="blog.php">Blog</a>
		<a href="#">Programs</a>
		<a href="contact.html">Contact</a>
	</div>
	<div class="hero"></div>
	<div class="intro-container2">
		<h1>BLOG</h1>
	</div>
	<?php require('wordpress/wp-blog-header.php'); ?>
	<?php $the_query = new WP_Query( array( 'posts_per_page' => 4, 'paged' => $paged, ) ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<div id="main">
		<div id="content">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="meh">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo '<div style="background: url('. $url.'); background-size:cover; height:200px;"></div>';
                //echo the_post_thumbnail('medium');?>
				<h2><a href="post.php/<?php echo($post->post_name) ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt();?>
					<a href="post.php/<?php echo($post->post_name) ?>">Read More</a></p>
			</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
			<div id="calender">
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
			<!---end calender -->
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
			<span class="left">ABOUT:</span><br>
			<div style="clear:both;"></div>
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
		function open_nav() {
			if (window.matchMedia("(max-width: 600px)").matches)
				$('.mobile-drop-down-nav').toggle();
			else
				$('.drop_down_nav').toggle();
		}
	</script>
	<script src="assets/js/js.js"></script>
</body>
</html>