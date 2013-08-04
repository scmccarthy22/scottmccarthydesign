<?php
/*
Template Name: feed
*/
?>

<?php get_header(); ?>

<!--Begin Loop-->
		<?php $feed = new WP_Query( array( 
			'post_type' => 'feedposts',
			) 
		); ?>
		<ul class="news">
			<?php if ( $feed->have_posts()) : while ( $feed->have_posts()) : $feed->the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_title (); ?></a>
				<?php the_content (); ?>
<a href="<?php the_syndication_permalink(); ?>"><?php the_syndication_source(); ?></a>.</p>

				</li>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</ul>
<!--End Loop-->



	
<?php get_footer(); ?>
