<?php
class doyle_News_Slider_Widget extends doyle_Widget {
	function __construct() {
		parent::__construct(
			'doyle_news_slider', // Base ID
			__('News slider', 'doyle'), // Name
			array('description' => __('Display a slider of your posts on your site.', 'doyle'),) // Args
        );
		
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => __( 'News Slider', 'doyle' ),
				'label' => __( 'Title', 'doyle' )
			),
			'category' => array(
				'type'   => 'doyle_taxonomy',
				'std'    => '',
				'label'  => __( 'Categories', 'doyle' ),
			),
			'posts_per_page' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 2,
				'max'   => '',
				'std'   => 3,
				'label' => __( 'Number of slider to show', 'doyle' )
			),
			'orderby' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => __( 'Order by', 'doyle' ),
				'options' => array(
					'none'   => __( 'None', 'doyle' ),
					'comment_count'  => __( 'Comment Count', 'doyle' ),
					'title'  => __( 'Title', 'doyle' ),
					'date'   => __( 'Date', 'doyle' ),
					'ID'  => __( 'ID', 'doyle' ),
				)
			),
			'order' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => __( 'Order', 'doyle' ),
				'options' => array(
					'none'  => __( 'None', 'doyle' ),
					'asc'  => __( 'ASC', 'doyle' ),
					'desc' => __( 'DESC', 'doyle' ),
				)
			),
			'el_class'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Extra Class', 'doyle' )
			)
		);
		add_action('admin_enqueue_scripts', array($this, 'widget_scripts'));
	}
        
	function widget_scripts() {
		wp_enqueue_script('widget_scripts', get_template_directory_uri() . '/framework/widgets/widgets.js');
	}

	function widget( $args, $instance ) {

		ob_start();
		global $post;
		extract( $args );
                
		$title                  = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$category               = isset($instance['category'])? $instance['category'] : '';
		$posts_per_page         = absint( $instance['posts_per_page'] );
		$orderby                = sanitize_title( $instance['orderby'] );
		$order                  = sanitize_title( $instance['order'] );
		$el_class               = sanitize_title( $instance['el_class'] );
                
		echo ''.$before_widget;

		if ( $title )
				echo ''.$before_title . $title . $after_title;
		
		$query_args = array(
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'post',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$category = array();
			foreach ((array) $cats as $cat) :
			$category[] = trim($cat);
			endforeach;
			$query_args['tax_query'] = array(
									array(
										'taxonomy' => 'category',
										'field' => 'id',
										'terms' => $category
									)
							);
		}
		
		$wp_query = new WP_Query($query_args);                
		
		if ($wp_query->have_posts()){
			?>
			<div class="bt-news-slider">
				<div class="owl-carousel" data-col_lg="1" data-col_md="1" data-col_sm="1" data-col_xs="1" data-item_space="30" data-loop="true" data-autoplay="false" data-smartspeed="700" data-nav="false" data-dots="true">
					<?php while ($wp_query->have_posts()){ $wp_query->the_post(); ?>
						<article <?php post_class(); ?>>
							<?php 
							/* get thumbnail */
								if( has_post_thumbnail() ){
									$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
									echo '<a href="'.get_the_permalink().'"><div class="bt-thumb" style="background: url('.esc_url($thumbnail_data[0]).') no-repeat center center / cover, #333"></div></a>';
								}
							?>
							<h6 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
							<ul class="bt-meta">
								<li><?php _e('By ', 'doyle'); echo get_the_author(); ?></li>
								<li><?php echo get_the_date('M d, Y'); ?></li>
								<li><?php the_terms( get_the_ID(), 'category', __('in ', 'doyle'), ', ' ); ?></li>
							</ul>
							<div class="bt-excerpt"><?php echo doyle_custom_excerpt(21, '.'); ?></div>
						</article>
					<?php } ?>
				</div>
			</div>
		<?php 
		}
		
		wp_reset_postdata();

		echo ''.$after_widget;
                
		$content = ob_get_clean();

		echo ''.$content;
		
	}
}
/* Class doyle_News_Slider_Widget */
function doyle_News_Slider_Widget() {
    register_widget('doyle_news_slider_widget');
}

add_action('widgets_init', 'doyle_news_slider_widget');
