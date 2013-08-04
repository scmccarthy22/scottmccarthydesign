<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
	
	<!-- Force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  
	<!-- Adaptive Images Script -->	 <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>

	  
	<!-- jquery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.0.min.js"><\/script>')</script>
	
	<!-- typekit -->
	<script type="text/javascript" src="//use.typekit.net/wza0kzs.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
		
	<!-- scripts -->
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/fittext.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/easing.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.content-panel-switcher.js" type="text/javascript"></script>	
	
	<script type='text/javascript'>
		jQuery(document).ready(function($) {
	
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 700);
		});
		});
	</script>	
	<script type="text/javascript">
		$(document).ready(function() {		
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<script type='text/javascript'>
		$(document).ready(function() {
		jcps.fader(300, '#switcher-panel');
		});
	</script>  
	
	
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="stickyfooterouter">
<div id="stickyfooterinner" class="clearfix">
<div id="wrap">	
