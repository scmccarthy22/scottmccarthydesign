<?php get_header(); ?>

<section class="splash clearfix">
<?php include (TEMPLATEPATH . '/inc/sitenav.php'); ?>	

	<div class="splashmaxwidth">	
		<div class="monitor">
	
			<?php if (get_post_meta($post->ID, "monitor", true)) { ?>
				<img src="http://www.scottmccarthydesign.com/wp-content/themes/scottmccarthydesign/images/monitor.png" alt="Apple cinema display"/>
				<?php } else { ?>
			<?php } ?>
	
		
			<div class="absolute_container
				<?php if ( in_category( '11' ) ) { ?>
				absoluteon
				<?php } else { ?>
			<?php } ?>">
			
		
				<img src="
				<?php // The WordPress Loop - customized with query_posts
				  global $query_string; // grab the global query information
				  $posts = query_posts($query_string.'&cat=-9');
				  if (have_posts()) : while (have_posts()) : the_post();
				  echo get_post_meta($post->ID, 'screenshot', true);
				  endwhile; else:
				  endif;
				  wp_reset_query(); // reset the query
				  ?>"
				alt="Feature Image for Post #<?php the_ID(); ?>" 
				/>
				
				<?php if (get_post_meta($post->ID, "award", true)) { ?>
					<a id="spd" href="http://www.spd.org" target="_blank">
						<img class="award" src="<?php bloginfo('template_directory'); ?>/images/feat_medallion.png" alt="award medallion"/>
					</a>
					<?php } else { ?>
				<?php } ?>
				
			</div><!--absolutecontainer-->
		</div><!--monitor-->
	
		<h2> 
			<?php // The WordPress Loop - customized with query_posts
			global $query_string; // grab the global query information
			$posts = query_posts($query_string.'&cat=-9');
			if (have_posts()) : while (have_posts()) : the_post();
			the_title();
			endwhile; else:
			endif;
			wp_reset_query(); // reset the query
			?>	
		</h2>
		
		<h3> 
			<?php // The WordPress Loop - customized with query_posts
			global $query_string; // grab the global query information
			$posts = query_posts($query_string.'&cat=-9');
			if (have_posts()) : while (have_posts()) : the_post();
			echo get_post_meta($post->ID, 'description', true);
			endwhile; else:
			endif;
			wp_reset_query(); // reset the query
			?>	
		</h3>
		
		<p>
		<?php // The WordPress Loop - customized with query_posts
			global $query_string; // grab the global query information
			$posts = query_posts($query_string.'&cat=-9');
			if (have_posts()) : while (have_posts()) : the_post();
			echo get_post_meta($post->ID, 'project-intro', true);
			endwhile; else:
			endif;
			wp_reset_query(); // reset the query
		?>
		</p>
		<a class="learnmore scroll" href="#more">Learn More</a>
		
		<?php if (get_post_meta($post->ID, "url", true)) { ?>
			<a class="visitsite" href="
			<?php // The WordPress Loop - customized with query_posts
				global $query_string; // grab the global query information
				$posts = query_posts($query_string.'&cat=-9');
				if (have_posts()) : while (have_posts()) : the_post();
				echo get_post_meta($post->ID, 'url', true);
				endwhile; else:
				endif;
				wp_reset_query(); // reset the query
			?>
			" target="_blank">Visit Site</a>
			<?php } else { ?>
		<?php } ?>

	</div> <!--.splashmaxwidth-->
</section><!--splash-->
 
<div class="slideup clearfix">
	<div class="edge" id="work"></div> 
	<div class="contentcontainer" id="more">
	
		<a class="scroll" href="#work"><img class="medallion" src="<?php bloginfo('template_directory'); ?>/images/medallion.png" alt="learn more"/></a>
		
		<header>
			<h4>
				<span>&nbsp;&nbsp;&nbsp;
				<?php // The WordPress Loop - customized with query_posts
				  global $query_string; // grab the global query information
				  $posts = query_posts($query_string.'&cat=-9');
				  if (have_posts()) : while (have_posts()) : the_post();
				  echo get_post_meta($post->ID, 'contentheader', true);
				  endwhile; else:
				  endif;
				  wp_reset_query(); // reset the query
				  ?>
				  &nbsp;&nbsp;&nbsp;
				</span>
			</h4>
		</header>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">		
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<?php edit_post_link('Edit this entry'); ?>
		</div>	
		<?php endwhile; endif; ?>
	
		<?php if (get_post_meta($post->ID, "type", true)) { ?>
		<header>
			<h4>Type</h4>
		</header>
		<section class="type">
			<div class="gridleft">
				<img src="
				<?php // The WordPress Loop - customized with query_posts
				global $query_string; // grab the global query information
				$posts = query_posts($query_string.'&cat=-9');
				if (have_posts()) : while (have_posts()) : the_post();
				echo get_post_meta($post->ID, 'typephoto', true);
				endwhile; else:
				endif;
			 	wp_reset_query(); // reset the query
			 	?> " class="sixty" alt="typography"
			 	/>
			</div>
			<p class="seventyright">
				<?php // The WordPress Loop - customized with query_posts
				global $query_string; // grab the global query information
				$posts = query_posts($query_string.'&cat=-9');
				if (have_posts()) : while (have_posts()) : the_post();
				echo get_post_meta($post->ID, 'typedescription', true);
				endwhile; else:
				endif;
			 	wp_reset_query(); // reset the query
			 	?>
			</p>
		</section>		
		<?php } else { ?>
		<?php } ?>
	

		<div class="previouspost">	
			<?php previous_post_link('%link', 'Previous Project&nbsp;&nbsp;&nbsp;<span><</span>', false, $excluded_categories = '7'); ?>
		</div>
		<div class="nextpost">
			<?php next_post_link('%link', '<span>></span>&nbsp;&nbsp;&nbsp;Next Project', false, $excluded_categories = '7'); ?>	
		</div>
	</div><!--.contentcontainer-->
</div><!--.slideup-->	

<?php get_footer(); ?>