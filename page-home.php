<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<section class="splash clearfix" id="homesplash">
	<?php include (TEMPLATEPATH . '/sitenav.php'); ?>

	<h1>
		<img class="homelogo" src="<?php bloginfo('template_directory'); ?>/bg_images/bigtext.png" alt="Scott McCarthy Design"/>
	</h1>
		
	<div id="brandlabel" class="clearfix">
		<div id="brandcontainer" class="clearfix">
			<div id="brandimage">
				<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo_sm.png" alt="Scott McCarthy circle logo"/>
			</div>
			<div id="brandtag">
				<p id="media_large">Art Direction, Design &amp; Dev</p>
				<p id="media_small">Art Direction,</br>Design &amp; Dev</p>
				<p class="whatido">Web&nbsp;&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;&nbsp;Mobile&nbsp;&nbsp;&nbsp;&nbsp;Identity</p>
			</div>
		</div><!--brandcontainer-->	
	</div><!--bradlabel-->
		
	<div class="homenav">
		<ul>
			<li class="contact"><a class="scroll" href="#contact">Contact</a></li>
			<li class="about"><a class="scroll" href="#about">About</a></li>
			<li class="favs"><a href="/favorites">Favorites</a></li>
			<li id="workscroll"><a class="scroll" href="#work">Work</a></li>

		</ul>	
	</div>
</section><!--#homesplash-->
 
<div class="slideup clearfix">
	<div class="edge"></div> 
	<div class="contentcontainer tophalf"> 
	
		<?php
		$custom_query = new WP_Query('p=631');
		while($custom_query->have_posts()) : $custom_query->the_post();
		echo get_the_content();
		endwhile;
		wp_reset_postdata();
		?>
		
		<section class="featproject" id="work">
			<header>
				<h4><span>&nbsp;&nbsp;&nbsp;Featured Project&nbsp;&nbsp;&nbsp;</span></h4>
			</header>
			<img class="spacer" src="<?php bloginfo('template_directory'); ?>/images/spacer.png" alt="spacer image"/>

			<div class="absolute_container absoluteon">
				<img class="feat_grass" src="<?php bloginfo('template_directory'); ?>/images/feat_peoplegrass3.png" alt="grass"/>
				<img class="feat_phones" src="<?php bloginfo('template_directory'); ?>/images/feat_phones.png" alt="grass"/>
				<a href="http://www.spd.org" target="_blank">	
					<img class="feat_medallion" src="<?php bloginfo('template_directory'); ?>/images/feat_medallion.png" alt="award medallion"/>
				</a>
				<div class="featproject_link">
					<img class="feat_logo" src="http://www.scottmccarthydesign.com/wp-content/icons/icon_explore.png" alt="Explore DC Logo"/>
					<a class="learnmore" href="http://www.scottmccarthydesign.com/explore-dc/">Learn More</a>
				</div>

			</div>
		</section>
		
	
		<section class="selectedwork">
			<header>
				<h4><span>&nbsp;&nbsp;&nbsp;Recent Projects&nbsp;&nbsp;&nbsp;</span></h4>
			</header>
	
			<ul class="projectlist clearfix">
			
			<?php $args = array(
              'order'            => 'ASC',
              'cat'            => '9',
              'post__not_in'   => array(92, 9),
              ); ?>
			
			<?php $project_query = new WP_Query( $args ); ?>
			<?php while ($project_query->have_posts()) : $project_query->the_post(); ?>
				<li class="projectthumb li_<?php echo ($post->ID); ?>">
					<a href="<?php the_permalink() ?>">
						<div class="description">						
							<img src="<?php echo get_post_meta($post->ID, 'icon', true); ?>" alt="icon for Post #<?php the_ID(); ?>" />
							<h3><?php echo get_post_meta($post->ID, 'projecttitle', true); ?></h3>
							<p>
								<?php echo get_post_meta($post->ID, 'description', true); ?>
							</p>
						</div>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
		</section>
	</div><!--contentcontainer-->
	<div class="edgebottom"></div> 
</div><!--slideup-->

	
<section id="statement">
	<div id="mission">
		<img src="<?php bloginfo('template_directory'); ?>/bg_images/ontime2.png" alt="always on time and on budget"/>
	</div>
</section>
	
<div id="about" class="slideup bottomslideup clearfix">
	<div class="edge"></div> 
	<div class="contentcontainer">
		
		<section class="about clearfix">
			<header>
				<h4><span>&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;</span></h4>
			</header>
			
			<img class="illo" src="<?php bloginfo('template_directory'); ?>/images/scott_illo.png" alt="illustration of Scott"/>
			<?php 
			$custom_query = new WP_Query('p=134');
			while($custom_query->have_posts()) : $custom_query->the_post();
			echo get_the_content();
			endwhile;
			wp_reset_postdata();
			?>
		</section>
		<div id="contact"></div><!--target for internal contact links-->

		<section class="contactform clearfix">
			<header>
				<h4><span>&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;</span></h4>
			</header>
			
			<div id="postcard" class="clearfix">
				<div class="pcardborder"></div>
				<div class="absolute_container absoluteon">
					<img class="postlabel" src="<?php bloginfo('template_directory'); ?>/images/post_label.png" alt="post card label"/>
					<img class="stampsection" src="<?php bloginfo('template_directory'); ?>/images/stamp1.jpg" alt="stamp section"/>
					<img class="stamp" src="<?php bloginfo('template_directory'); ?>/images/stamp.png" alt="stamp"/>
				</div>				
				<?php include (TEMPLATEPATH . '/contact.php'); ?>
				<div class="pcardborder bottomalign"></div>
			</div><!--postcard-->
		</section>
		
		<section class="feedback clearfix">
			<header>
				<h4><span>&nbsp;&nbsp;&nbsp;Client Feedback&nbsp;&nbsp;&nbsp;</span></h4>
			</header>
			<?php 
			$custom_query = new WP_Query('tag=testimonial');
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="testimonials clearfix">
				<p><?php echo get_the_content(); ?></p>
				<div class="headshotcontainer">
					<img src="<?php echo get_post_meta($post->ID, 'headshot', true); ?>" alt="headshot"/>
				</div>
				<p class="attribution">
					<?php echo get_post_meta($post->ID, 'attribution', true); ?>
				</p>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</p>	
		</section>

	</div><!--.contentcontainer-->
</div><!--.slideup-->

<script>
$(window).scroll(function() {
    if ( $(this).width() > 1024 ) {
        $("#homesplash").toggle( $(this).scrollTop() <= 600 );
    }
});
</script>
	
<?php get_footer(); ?>

