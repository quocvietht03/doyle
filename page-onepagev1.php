<?php
/*
Template Name: One Page V1 Template
*/
?>
<?php get_header('onepagev1'); ?>
	<div class="bt-main-content">
		<div class="row">
			
			<div class="bt-content col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
			
		</div>
	</div>
<?php get_footer('onepagev1'); ?>
