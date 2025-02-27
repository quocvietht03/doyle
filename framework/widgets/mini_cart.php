<?php

class doyle_Widget_Mini_Cart extends WC_Widget {
	
	function __construct() {
		$this->widget_cssclass    = 'woocommerce doyle_widget_mini_cart';
		$this->widget_description = esc_html__( "Display the user's Cart in the sidebar.", 'doyle' );
		$this->widget_id          = 'doyle_widget_mini_cart';
		$this->widget_name        = esc_html__( 'Mini Cart', 'doyle' );
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => esc_html__( 'Cart', 'doyle' ),
				'label' => esc_html__( 'Title', 'doyle' )
			),
			'hide_if_empty' => array(
				'type'  => 'checkbox',
				'std'   => 0,
				'label' => esc_html__( 'Hide if cart is empty', 'doyle' )
			)
		);

		parent::__construct();
	}
	
	function widget( $args, $instance ) {
		$wg_class = 'widget bt-mini-cart';
		$hide_if_empty = empty( $instance['hide_if_empty'] ) ? 0 : 1;
		if ( $hide_if_empty ) {
			$wg_class .= ' hide_cart_widget_if_empty';
		}

		ob_start();
			woocommerce_mini_cart();
		$mini_cart_content = ob_get_clean();

		echo '<div class="'.esc_attr($wg_class).'">'
		
				.'<a class="bt-toggle-btn" title="'.esc_attr($instance['title']).'" href="#"><i class="fa fa-shopping-cart"></i><span class="cart_total" >' . WC()->cart->get_cart_contents_count() . '</span></a>'
				
				.'<div class="bt-cart-content"><h3 class="bt-title">'.__('My Shopping Cart', 'doyle').'</h3><div class="widget_shopping_cart_content">' . $mini_cart_content . '</div></div>'
				
			.'</div>';
		
	}
}
add_filter('add_to_cart_fragments', 'woocommerce_icon_add_to_cart_fragment');
if(!function_exists('woocommerce_icon_add_to_cart_fragment')){
	function woocommerce_icon_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
		ob_start();
		?>
		<span class="cart_total"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
		<?php
		$fragments['span.cart_total'] = ob_get_clean();
		return $fragments;
	}
}

/**
 * Class doyle_Widget_Mini_Cart
 */
function register_doyle_widget_mini_cart() {
    register_widget('doyle_Widget_Mini_Cart');
}
add_action('widgets_init', 'register_doyle_widget_mini_cart');
