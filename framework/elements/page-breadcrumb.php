<?php
class WPBakeryShortCode_bt_page_breadcrumb extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'align' => 'left',
			'home_text' => 'Home',
			'delimiter' => '-',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'css' => ''
			
		), $atts));
		
		$content = wpb_js_remove_wpautop($content, true);
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-page-breadcrumb-element',
			$align,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		ob_start();
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<?php doyle_page_breadcrumb($home_text, $delimiter); ?>
			</div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => __('Page Breadcrumb', 'doyle'),
	'base' => 'bt_page_breadcrumb',
	'category' => __('BT Elements', 'doyle'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Align', 'doyle'),
			'param_name' => 'align',
			'value' => array(
				'Left' => 'text-left',
				'Center' => 'text-center',
				'Right' => 'text-right',
			),
			'description' => __('Select text align in this elment.', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Home Text', 'doyle'),
			'param_name' => 'home_text',
			'value' => 'Home',
			'description' => __('Please, enter home text in this element.', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Delimiter', 'doyle'),
			'param_name' => 'delimiter',
			'value' => '-',
			'description' => __('Please, enter delimiter in this element.', 'doyle')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Element ID', 'doyle'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => __( 'Enter element ID (Note: make sure it is unique and valid).', 'doyle' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Extra Class', 'doyle'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'doyle' )
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'doyle' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'doyle' ),
		)
	)
));
