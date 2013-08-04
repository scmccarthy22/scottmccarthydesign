<?php
/*
Template Name: Template: about
*/
?>

<?php get_header(); ?>
<div class="contentcontainer clearfix"> 

	<div class="aboutleft">
		<img class="illo" src="<?php bloginfo('template_directory'); ?>/images/scott_illo.png" alt="illustration of Scott"/>	
	</div>
	

	<div class="aboutright">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">					

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		</div>	
		
		<?php endwhile; endif; ?>
		

</div><!--#contentcontainer-->
<?php get_footer(); ?>
