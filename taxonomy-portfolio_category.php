<?php get_header(); ?>
<?php
global $doyle_options;
$doyle_show_page_title = isset($doyle_options['doyle_post_show_page_title']) ? $doyle_options['doyle_post_show_page_title'] : 1;
$doyle_show_page_breadcrumb = isset($doyle_options['doyle_post_show_page_breadcrumb']) ? $doyle_options['doyle_post_show_page_breadcrumb'] : 1;
doyle_title_bar($doyle_show_page_title, $doyle_show_page_breadcrumb);
$readmore_text = (int) isset($doyle_options['doyle_blog_post_readmore_text']) ? $doyle_options['doyle_blog_post_readmore_text'] : 'VIEW DETAIL';
?>
	<div class="main-content bt-blog-list">
		<div class="container">
			<div class="row">
				<?php
				$doyle_blog_layout = isset($doyle_options['doyle_blog_layout']) ? $doyle_options['doyle_blog_layout'] : '2cr';
				$cl_sb_left = isset($doyle_options['doyle_blog_left_sidebar_col']) ? $doyle_options['doyle_blog_left_sidebar_col'] : 'col-xs-12 col-sm-12 col-md-3 col-lg-3';
				$cl_content = isset($doyle_options['doyle_blog_content_col']) ? $doyle_options['doyle_blog_content_col'] : 'col-xs-12 col-sm-12 col-md-9';
				$cl_sb_right = isset($doyle_options['doyle_blog_right_siedebar_col']) ? $doyle_options['doyle_blog_right_siedebar_col'] : 'col-xs-12 col-sm-12 col-md-3 col-lg-3';
				?>
				<!-- Start Left Sidebar -->
				<?php if ( $doyle_blog_layout == '2cl' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_left) ?> sidebar-left">
						<?php if (is_active_sidebar('doyle-left-sidebar')) { dynamic_sidebar('doyle-left-sidebar'); } else { dynamic_sidebar('doyle-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Left Sidebar -->
				<!-- Start Content -->
				<div class="<?php echo esc_attr($cl_content) ?> content">
					<?php
					if( have_posts() ) {
						while ( have_posts() ) : the_post();
							?>
							<article <?php post_class(); ?>>
								<div class="bt-post-item">
									<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="bt-media <?php echo get_post_format(); ?>">
										<?php
											$media_output = '';
											if (has_post_thumbnail()) {
												$media_output = '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_ID(), "full").'</a>';
											}
											echo $media_output;
										?>
									</div>
									<ul class="bt-meta">
										<li class="bt-author"><?php echo get_avatar( get_the_author_meta( 'ID' ), 35 ); echo __('by ', 'doyle').get_the_author(); ?></li>
										<li class="bt-public"><?php echo '<i class="fa fa-clock-o"></i> '.get_the_date('M d, Y'); ?></li>
										<li><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comments-o"></i> 0', '<i class="fa fa-comments-o"></i> 1', '<i class="fa fa-comments-o"></i> %' ); ?></a></li>
										<li><?php the_terms( get_the_ID(), 'portfolio_category', 'Category: ', ', ' ); ?></li>
									</ul>
									<div class="bt-excerpt"><?php the_excerpt(); ?></div>
									<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo $readmore_text; ?></a>
								</div>
							</article>
							<?php
						endwhile;
						
						doyle_paging_nav();
					}else{
						get_template_part( 'framework/templates/entry', 'none');
					}
					?>
				</div>
				<!-- End Content -->
				<!-- Start Right Sidebar -->
				<?php if ( $doyle_blog_layout == '2cr' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_right) ?> sidebar-right">
						<?php if (is_active_sidebar('doyle-right-sidebar')) { dynamic_sidebar('doyle-right-sidebar'); } else { dynamic_sidebar('doyle-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Right Sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>