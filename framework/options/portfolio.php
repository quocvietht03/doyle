<?php
// Portfolio
Redux::setSection( $opt_name, array(
	'title'            => __( 'Portfolio', 'redux-framework-demo' ),
	'id'               => 'bt_portfolio',
	'icon'             => 'el el-folder-open',
	'fields'           => array(
		array(
			'id'       => 'portfolio_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'portfolio_fullwidth_space',
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
			'required' 		=> array('portfolio_fullwidth' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'            => 'portfolio_sidebar_width',
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
			'id'       => 'portfolio_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.tax-fw-portfolio-category .bt-titlebar'),
		),
	)
) );
