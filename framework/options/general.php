<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => __( 'General', 'doyle' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => __( 'Enable Less Design', 'doyle' ),
			'subtitle' => __( 'Enable less design to generate css over time...', 'doyle' ),
			'default'  => true,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => __('Site Layout', 'doyle'),
			'subtitle' => __('Control the site layout.', 'doyle'),
			'options' => array(
				'wide' => __('Wide', 'doyle'), 
				'boxed' => __('Boxed', 'doyle'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => __( 'Site Width', 'doyle' ),
			'subtitle'      => __( 'Control the overall site width.', 'doyle' ),
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
			'title'    => __( 'Boxed Background', 'doyle' ),
			'subtitle' => __( 'Control the background color of the boxed.', 'doyle' ),
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
			'title'    => __( 'Boxed Space', 'doyle' ),
			'subtitle' => __( 'Control the space top and bottom of boxed.', 'doyle' ),
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
			'title'    => __( 'Body Background', 'doyle' ),
			'subtitle' => __( 'Control the background of the body.', 'doyle' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => __( 'Mobile Width', 'doyle' ),
			'subtitle'      => __( 'Controls the width to enable mobile.', 'doyle' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => __( 'Smoth Scroll', 'doyle' ),
			'subtitle' => __( 'Use smoth scroll.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => __( 'Back To Top', 'doyle' ),
			'subtitle' => __( 'Control button back to top.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => __( 'Back To Top Style', 'doyle' ),
			'subtitle' => __( 'Select style button back to top.', 'doyle' ),
			'options'  => array(
				'square' => __( 'Square', 'doyle' ),
				'rounded' => __( 'Rounded', 'doyle' ),
				'circle' => __( 'Circle', 'doyle' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => __( 'Site Loading', 'doyle' ),
			'subtitle' => __( 'Control animation before site load complete.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => __( 'Spinner Style', 'doyle' ),
			'subtitle' => __( 'Select style spinner.', 'doyle' ),
			'options'  => array(
				'spinner0' => __( 'Default', 'doyle' ),
				'spinner1' => __( 'Style 1', 'doyle' ),
				'spinner2' => __( 'Style 2', 'doyle' ),
				'spinner3' => __( 'Style 3', 'doyle' ),
				'spinner4' => __( 'Style 4', 'doyle' ),
				'spinner5' => __( 'Style 5', 'doyle' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => __( 'Site Loading Background', 'doyle' ),
			'subtitle' => __( 'Control the background of site loading.', 'doyle' ),
			'default'  => array(
				'background-color' => '#0a6edd',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		
	)
) );
