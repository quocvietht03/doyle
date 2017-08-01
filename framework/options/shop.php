<?php
// Shop
Redux::setSection( $opt_name, array(
	'title'            => __( 'shop', 'redux-framework-demo' ),
	'id'               => 'bt_shop',
	'icon'             => 'el el-shopping-cart',
	'fields'           => array(
		array(
			'id'       => 'shop_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'shop_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Full Width Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right padding the content area display.', 'redux-framework-demo' ),
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
			'title'         => __( 'Sidebar Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'shop_top_bar',
			'type'     => 'switch',
			'title'    => __( 'Enable Top Bar', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the top bar on the top.', 'redux-framework-demo' ),
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
			'title'    => __( 'Top Bar Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the top bar.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('shop_top_bar' , '=', '1'),
			'output'   => array('.woocommerce .top-bar')
		),
		array(
			'id'            => 'shop_product_per_page',
			'type'          => 'slider',
			'title'         => __( 'Product Per Page', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the number of product on the page.', 'redux-framework-demo' ),
			'default'       => 10,
			'min'           => 1,
			'step'          => 1,
			'max'           => 20,
			'display_value' => 'text'
		),
		array(
			'id'            => 'shop_product_per_row',
			'type'          => 'slider',
			'title'         => __( 'Product Per Row', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the number of product on the row.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 2,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text'
		),
		array(
			'id'       => 'shop_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.post-type-archive-product .bt-titlebar, .tax-product .bt-titlebar'),
		),
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => __( 'Single Product', 'redux-framework-demo' ),
	'id'               => 'bt_product',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'product_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'product_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Full Width Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right padding the content area display.', 'redux-framework-demo' ),
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
			'title'         => __( 'Sidebar Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'product_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.single-product .bt-titlebar'),
		),
	)
) );
