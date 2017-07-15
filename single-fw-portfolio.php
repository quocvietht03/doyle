<?php get_header(); ?>
<?php
global $doyle_options;
$sidebar_width = (int) isset($doyle_options['sidebar_width']) ?  $doyle_options['sidebar_width']: 3;

$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';

$sidebar_class = 'col-md-'.$sidebar_width;
if($sidebar_position == 'left' || $sidebar_position == 'right'){
		$content_width = 12 - $sidebar_width;
		$content_class = 'col-md-'.$content_width;
	
}elseif($sidebar_position == 'left_right'){
	$content_width = 12 - 2*$sidebar_width;
	$content_class = 'col-md-'.$content_width;
}else{
	$content_class = 'col-md-12';
}

doyle_titlebar();
?>
	<div class="bt-main-content">
		<div class="container">
			<div class="row">
				<!-- Start Left Sidebar -->
				<?php if($sidebar_position == 'left' || $sidebar_position == 'left_right'){ ?>
					<div class="bt-sidebar bt-left-sidebar <?php echo esc_attr($sidebar_class); ?>">
						<?php echo get_sidebar('left'); ?>
					</div>
				<?php } ?>
				<!-- End Left Sidebar -->
				<!-- Start Content -->
				<div class="bt-content <?php echo esc_attr($content_class); ?>">
					<?php
					while ( have_posts() ) : the_post();
						$portfolio_options = function_exists('fw_get_db_post_option')?fw_get_db_post_option(get_the_ID(), 'portfolio_options'):array();
						$layout = isset($portfolio_options['layout'])?$portfolio_options['layout']:'default';
						get_template_part( 'framework/templates/portfolio/single/'.$layout);
					endwhile;
					?>
					<div class="bt-related">
						<?php
							$taxterms = wp_get_object_terms( get_the_ID(), 'fw-portfolio-category', array('fields' => 'ids') );
							
							$args = array(
							'post_type' => 'fw-portfolio',
							'post_status' => 'publish',
							'posts_per_page' => 3,
							'tax_query' => array(
								array(
									'taxonomy' => 'fw-portfolio-category',
									'field' => 'id',
									'terms' => $taxterms
								)
							),
							'post__not_in' => array (get_the_ID()),
							);
							$related_items = new WP_Query( $args );
							// loop over query
							if ($related_items->have_posts()) :
							?>
								<h3 class="bt-title"><?php esc_html_e('Portfolio Related', 'doyle'); ?></h3>
								<div class="row">
									<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
										<div class="col-md-4">
											<div class="bt-item">
												<?php
													if( has_post_thumbnail() ):
														$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
														$thumbnail = $thumbnail_data[0];
													else:
														$thumbnail = '';
													endif;
													$style = 'background: url('.$thumbnail.') no-repeat center center / cover, #333; height: 280px;';
												?>
												<div class="bt-thumb" style="<?php echo esc_attr($style); ?>"></div>
												<div class="bt-overlay">
													<div class="bt-content">
														<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
														<div class="bt-term"><?php the_terms(get_the_ID(), 'fw-portfolio-category', '' , ', ' ); ?></div>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							<?php
							endif;
							wp_reset_postdata();
						?>
					</div>
				</div>
				<!-- End Content -->
				<!-- Start Right Sidebar -->
				<?php if($sidebar_position == 'right' || $sidebar_position == 'left_right'){ ?>
					<div class="bt-sidebar bt-right-sidebar <?php echo esc_attr($sidebar_class); ?>">
						<?php echo get_sidebar('right'); ?>
					</div>
				<?php } ?>
				<!-- End Right Sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>
