<?php
/*
Template Name: favorites
*/
?>

<?php get_header(); ?>
<section class="splash clearfix">
<?php include (TEMPLATEPATH . '/sitenav.php'); ?>	

	<img class="favhead" src="<?php bloginfo('template_directory'); ?>/images/myfavorite.png" alt="My Favorite"/>


</section><!--splash-->
 
<div class="slideup clearfix">
	<div class="edge" id="work"></div> 
	<div class="contentcontainer" id="more">

		<div class="nav_buttons"> 
			<a id="sites" class="switcher">50 Design Shops</a> 
			<a id="illustrators" class="switcher">50 Illustrators</a> 
			<a id="foundries" class="switcher">25 Type Sources</a>  
		</div> 
		


<div id="switcher-panel"></div>

<div id="sites-content" class="switcher-content show">
	<?php $sites = new WP_Query( array( 
			'post_type' => 'favorite',
			'p' => '1018'
			) 
		); ?>
		<?php if ( $sites->have_posts()) : while ( $sites->have_posts()) : $sites->the_post(); ?>
		<?php the_content (); ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
</div>

<div id="illustrators-content" class="switcher-content">
	<?php $sites = new WP_Query( array( 
			'post_type' => 'favorite',
			'p' => '1019'
			) 
		); ?>
		<?php if ( $sites->have_posts()) : while ( $sites->have_posts()) : $sites->the_post(); ?>
		<?php the_content (); ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
</div>

<div id="foundries-content" class="switcher-content">
	<?php $sites = new WP_Query( array( 
			'post_type' => 'favorite',
			'p' => '1020'
			) 
		); ?>
		<?php if ( $sites->have_posts()) : while ( $sites->have_posts()) : $sites->the_post(); ?>
		<?php the_content (); ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
</div>

<div style="height:3em;clear:both;"></div>


</div><!--.contentcontainer-->
</div><!--.background-->

<script type="text/javascript">
$(document).ready(function() {
    myInit()
})

function myInit() {
        $('.nav_buttons a#sites').addClass('active')
    $('.nav_buttons a').click(function() {
        $('.nav_buttons a').removeClass('active')
        $(this).addClass('active')
    })
}
</script>

<?php get_footer(); ?>

