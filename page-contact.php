<?php
/*
Template Name: Template: contact
*/
?>

<?php get_header(); ?>
<div class="contentcontainer clearfix"> 

	<section class="nopad">

	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
						
			<div class="entry">

				<?php the_content(); ?>
					
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<div id="map">
			<img id="mapsizing" src="<?php bloginfo('template_directory'); ?>/images/map_sizing.png" alt="map sizing image"/>
			<div class="absolute_container">
				<div id="label"><span>Washington, D.C.</span></div>
			</div>
		</div>
		
	</section>
		
	<?php endwhile; endif; ?>
	<?php include (TEMPLATEPATH . '/contact.php'); ?>
		
</div><!--#contentcontainer-->
<?php get_footer(); ?>
