<?php
// Shop
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'shop', 'doyle' ),
	'id'               => 'bt_shop',
	'icon'             => 'el el-shopping-cart',
	'fields'           => array(
		array(
			'id'       => 'shop_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'shop_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'doyle' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('shop_fullwidth' , '=', '1'),
			'output'    => array('.woocommerce-page .bt-main-content .fullwidth')
		),
		array(
			'id'            => 'shop_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'shop_top_bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Top Bar', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the top bar on the top.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'shop_top_bar_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Top Bar Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the top bar.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('shop_top_bar' , '=', '1'),
			'output'   => array('.woocommerce .top-bar')
		),
		array(
			'id'            => 'shop_product_per_page',
			'type'          => 'slider',
			'title'         => esc_html__( 'Product Per Page', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the number of product on the page.', 'doyle' ),
			'default'       => 10,
			'min'           => 1,
			'step'          => 1,
			'max'           => 20,
			'display_value' => 'text'
		),
		array(
			'id'            => 'shop_product_per_row',
			'type'          => 'slider',
			'title'         => esc_html__( 'Product Per Row', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the number of product on the row.', 'doyle' ),
			'default'       => 3,
			'min'           => 2,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text'
		),
		array(
			'id'       => 'shop_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'doyle' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.post-type-archive-product .bt-titlebar-inner .bt-titlebar, .tax-product .bt-titlebar-inner .bt-titlebar'),
		),
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Product', 'doyle' ),
	'id'               => 'bt_product',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'product_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'product_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'doyle' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('product_fullwidth' , '=', '1'),
			'output'    => array('.single-product .bt-main-content')
		),
		array(
			'id'            => 'product_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'product_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'doyle' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.single-product .bt-titlebar-inner .bt-titlebar'),
		),
	)
) );
