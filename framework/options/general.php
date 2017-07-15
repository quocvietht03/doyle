<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => __( 'General', 'redux-framework-demo' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => __('Site Layout', 'redux-framework-demo'),
			'subtitle' => __('Control the site layout.', 'redux-framework-demo'),
			'options' => array(
				'wide' => __('Wide', 'redux-framework-demo'), 
				'boxed' => __('Boxed', 'redux-framework-demo'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => __( 'Site Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Control the overall site width.', 'redux-framework-demo' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => __( 'Boxed Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background color of the boxed.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => __( 'Boxed Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the space top and bottom of boxed.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => __( 'Body Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the body.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => __( 'Mobile Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width to enable mobile.', 'redux-framework-demo' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => __( 'Smoth Scroll', 'redux-framework-demo' ),
			'subtitle' => __( 'Use smoth scroll.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => __( 'Back To Top', 'redux-framework-demo' ),
			'subtitle' => __( 'Control button back to top.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => __( 'Back To Top Style', 'redux-framework-demo' ),
			'subtitle' => __( 'Select style button back to top.', 'redux-framework-demo' ),
			'options'  => array(
				'square' => __( 'Square', 'redux-framework-demo' ),
				'rounded' => __( 'Rounded', 'redux-framework-demo' ),
				'circle' => __( 'Circle', 'redux-framework-demo' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => __( 'Site Loading', 'redux-framework-demo' ),
			'subtitle' => __( 'Control animation before site load complete.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => __( 'Spinner Style', 'redux-framework-demo' ),
			'subtitle' => __( 'Select style spinner.', 'redux-framework-demo' ),
			'options'  => array(
				'spinner0' => __( 'Default', 'redux-framework-demo' ),
				'spinner1' => __( 'Style 1', 'redux-framework-demo' ),
				'spinner2' => __( 'Style 2', 'redux-framework-demo' ),
				'spinner3' => __( 'Style 3', 'redux-framework-demo' ),
				'spinner4' => __( 'Style 4', 'redux-framework-demo' ),
				'spinner5' => __( 'Style 5', 'redux-framework-demo' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => __( 'Site Loading Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of site loading.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#00ABC9',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		array(
			'id'       => 'page_comment',
			'type'     => 'switch',
			'title'    => __( 'Enable Page Comment', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable page comment.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'slider',
			'title'         => __( 'Sidebar Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
	)
) );
