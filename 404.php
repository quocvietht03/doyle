<?php
/*
Template Name: 404 Template
*/
?>
<?php get_header(); ?>
	<div class="main-content">
		<div class="bt-error404-wrap">
			<div class="bt-thumb">
				<img src="<?php echo get_template_directory_uri().'/assets/images/404.jpg'; ?>" alt="Error 404"/>
			</div>
			<div class="bt-content">
				<h1>Woops, looks like<br class="hidden-xs">this page doesn't exist</h1>
				<p>You could either go back or go to homepage</p>
				<div class="bt-actions">
					<a href="#" class="bt-support hvr-float-shadow">Visit Support Center</a>
					<a href="#"  class="bt-contact hvr-float-shadow">Contact Now</a>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>