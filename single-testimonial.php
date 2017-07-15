<?php get_header(); ?>
<?php
global $doyle_options;
$doyle_show_page_title = isset($doyle_options['doyle_post_show_page_title']) ? $doyle_options['doyle_post_show_page_title'] : 1;
$doyle_show_page_breadcrumb = isset($doyle_options['doyle_post_show_page_breadcrumb']) ? $doyle_options['doyle_post_show_page_breadcrumb'] : 1;
doyle_title_bar($doyle_show_page_title, $doyle_show_page_breadcrumb);
$doyle_post_show_post_nav = (int) isset($doyle_options['doyle_post_show_post_nav']) ?  $doyle_options['doyle_post_show_post_nav']: 1;
$doyle_post_show_post_author = (int) isset($doyle_options['doyle_post_show_post_author']) ? $doyle_options['doyle_post_show_post_author'] : 1;
$doyle_post_show_post_comment = (int) isset($doyle_options['doyle_post_show_post_comment']) ?  $doyle_options['doyle_post_show_post_comment']: 1;
?>
	<div class="main-content bt-team-article">
		<article <?php post_class(); ?>>
			<div class="container">
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6">
							<div class="bt-thumb"><?php the_post_thumbnail('full'); ?></div>
						</div>
						<div class="col-md-6">
							<div class="bt-header">
								<h2 class="bt-title"><?php the_title(); ?></h2>
								<div class="bt-position"><?php echo get_post_meta(get_the_ID(),'doyle_testimonial_position',true); ?></div>
								<?php if($doyle_post_show_post_nav ) doyle_post_nav(); ?>
							</div>
							<div class="bt-content"><?php the_content(); ?></div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</article>
	</div>
<?php get_footer(); ?>