<?php
// Footer
Redux::setSection( $opt_name, array(
	'title'            => __( 'Footer', 'redux-framework-demo' ),
	'id'               => 'bt_footer',
	'customizer_width' => '400px',
	'icon'             => 'el el-website',
	'fields'           => array(
		array(
			'id'       => 'footer_layout',
			'type'     => 'image_select',
			'title'    => __( 'Footer Layout', 'redux-framework-demo' ),
			'subtitle' => __( 'Select a footer layout default. Foreach pages, you can change the layout by page option', 'redux-framework-demo' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 1',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v1.jpg'
				),
				'2' => array(
					'alt' => 'Footer layout 2',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v1.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => __( 'Footer Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top margin the footer.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer')
		),
		
		array(
			'id'    => 'f1_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Footer Top Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for footer top.', 'redux-framework-demo' ),
			'required' 		=> array('footer_layout' , '=', '1')
		),
		array(
			'id'       => 'f1_footer_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Footer Top', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable footer top.', 'redux-framework-demo' ),
			'default'  => false,
			'required' 		=> array('footer_layout' , '=', '1')
		),
		array(
			'id'            => 'f1_footer_top_columns',
			'type'          => 'slider',
			'title'         => __( 'Footer Top Columns', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the columns number of the footer top.', 'redux-framework-demo' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Footer Top Content Column 1', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the footer top column 1.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Footer Top Content Column 2', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the footer top column 2.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Footer Top Content Column 3', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the footer top column 2.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Footer Top Content Column 4', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the footer top column 4.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f1_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => __( 'Enable Footer Top Columns Class', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable footer top columns class.', 'redux-framework-demo' ),
			'default'  => false,
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => __('Footer Top Column 1 Class', 'redux-framework-demo'),
			'subtitle' => __('Controls the column width with bootstrap class and extra class of footer top column 1', 'redux-framework-demo'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => __('Footer Top Column 2 Class', 'redux-framework-demo'),
			'subtitle' => __('Controls the column width with bootstrap class and extra class of footer top column 2', 'redux-framework-demo'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1'),
				array('f1_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => __('Footer Top Column 3 Class', 'redux-framework-demo'),
			'subtitle' => __('Controls the column width with bootstrap class and extra class of footer top column 3', 'redux-framework-demo'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1'),
				array('f1_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => __('Footer Top Column 4 Class', 'redux-framework-demo'),
			'subtitle' => __('Controls the column width with bootstrap class and extra class of footer top column 4', 'redux-framework-demo'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1'),
				array('f1_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f1_footer_top_bg',
			'type'     => 'background',
			'title'    => __( 'Footer Top Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the footer top.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
			'output'    => array('.bt-footer-v1 .bt-footer-top'),
		),
		array(
			'id'       => 'f1_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => __( 'Footer Top Overlay Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the overlay color of the footer top.', 'redux-framework-demo' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
			'output'   => array( '.bt-footer-v1 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f1_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Footer Top Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom padding the footer top.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-bottom' => '30px'
			),
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
			'output'    => array('.bt-footer-v1 .bt-footer-top')
		),
		array(
			'id'       => 'f1_footer_top_font',
			'type'     => 'typography',
			'title'    => __( 'Footer Top Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography footer top.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
			'output'    => array('.bt-footer-v1 .bt-footer-top')
		),
		array(
			'id'       => 'f1_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Footer Top Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the link color of footer top.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#00ABC9',
			),
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
			'output'   => array('.bt-footer-v1 .bt-footer-top a')
		),
		array(
			'id'       => 'f1_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => __( 'Footer Top Widget Titile Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography footer top widget title.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '1.6px'
			),
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_top' , '=', '1')
			),
			'output'    => array('.bt-footer-v1 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f1_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Footer Bottom Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for footer bottom.', 'redux-framework-demo' ),
			'required' 		=> array('footer_layout' , '=', '1')
		),
		array(
			'id'            => 'f1_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => __( 'Footer Bottom Columns', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the columns number of the footer bottom.', 'redux-framework-demo' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label',
			'required' 		=> array('footer_layout' , '=', '1')
		),
		array(
			'id'       => 'f1_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Footer Bottom Content Column 1', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the footer bottom column 1.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('footer_layout' , '=', '1')
		),
		array(
			'id'       => 'f1_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Footer Bottom Content Column 2', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the footer bottom column 2.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => __( 'Enable Footer Bottom Columns Class', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable footer bottom columns class.', 'redux-framework-demo' ),
			'default'  => false,
			'required' 		=> array('footer_layout' , '=', '1')
		),
		array(
			'id'       => 'f1_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => __('Footer Bottom Column 1 Class', 'redux-framework-demo'),
			'subtitle' => __('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'redux-framework-demo'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_bottom_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f1_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => __('Footer Bottom Column 2 Class', 'redux-framework-demo'),
			'subtitle' => __('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'redux-framework-demo'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('footer_layout' , '=', '1'),
				array('f1_footer_bottom_columns_class' , '=', '1'),
				array('f1_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Footer Bottom Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the footer bottom.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'required' 		=> array('footer_layout' , '=', '1'),
			'output'    => array('.bt-footer-v1 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f1_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Footer Bottom Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom padding the footer bottom.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-bottom' => '10px'
			),
			'required' 		=> array('footer_layout' , '=', '1'),
			'output'    => array('.bt-footer-v1 .bt-footer-bottom')
		),
		array(
			'id'       => 'f1_footer_bottom_font',
			'type'     => 'typography',
			'title'    => __( 'Footer Bottom Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography footer bottom.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('footer_layout' , '=', '1'),
			'output'    => array('.bt-footer-v1 .bt-footer-bottom')
		),
		array(
			'id'       => 'f1_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Footer Bottom Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the link color of footer bottom.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#00ABC9',
			),
			'required' 		=> array('footer_layout' , '=', '1'),
			'output'   => array('.bt-footer-v1 .bt-footer-bottom a')
		),
		
	)
) );
