<?php
/*
Template Name: No Container Template
*/
?>
<?php get_header(); ?>
<?php
global $doyle_options;
$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();
$page_titlebar = isset($page_options['page_titlebar'])&&$page_options['page_titlebar']?$page_options['page_titlebar']:'';

if(!$page_titlebar){
	doyle_titlebar();
}
?>
	<div class="bt-main-content">
		<div class="row">
			<div class="bt-content col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
