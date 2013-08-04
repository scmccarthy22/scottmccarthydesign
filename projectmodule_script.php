		<script type="text/javascript">
		
			$(document).ready(function(){
		
				$('.projectthumb.<?php echo ($post->ID); ?>').mouseenter(function(){
					$('.projectthumb.<?php echo ($post->ID); ?> .imagecontainer').fadeIn(200);
				});

		
				$('.projectthumb.<?php echo ($post->ID); ?>').mouseleave(function(){
					$('.projectthumb.<?php echo ($post->ID); ?> .imagecontainer').fadeOut(100);
				});
			});
		</script>