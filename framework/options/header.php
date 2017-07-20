<?php
// Header
Redux::setSection( $opt_name, array(
	'title'            => __( 'Header', 'redux-framework-demo' ),
	'id'               => 'bt_header',
	'icon'             => 'el el-credit-card',
	'fields'           => array(
		array(
			'id'       => 'header_layout',
			'type'     => 'image_select',
			'title'    => __( 'Header Layout', 'redux-framework-demo' ),
			'subtitle' => __( 'Select a header layout default. Foreach pages, you can change the layout by page option', 'redux-framework-demo' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 1',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				),
				'2' => array(
					'alt' => 'Header layout 2',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v2.jpg'
				),
				'3' => array(
					'alt' => 'Header layout 3',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				),
				'4' => array(
					'alt' => 'Header layout 4',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				),
				'5' => array(
					'alt' => 'Header layout 5',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				),
				'6' => array(
					'alt' => 'Header layout 6',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				)
			),
			'default'  => '1'
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header Style 01', 'redux-framework-demo' ),
	'id'               => 'bt_header_style1',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_1',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'redux-framework-demo' ),
			'subtitle' => __( 'This is the options you can change for header style 01', 'redux-framework-demo' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 1',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h1_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'    => 'h1_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Desktop Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for header desktop.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'h1_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable header top.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Left', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header top left.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Center', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header top center.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Right', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header top right.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Top Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header top.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h1_header_top_bg',
			'type'     => 'background',
			'title'    => __( 'Header Top Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header top.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h1_header_top_font',
			'type'     => 'typography',
			'title'    => __( 'Header Top Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography header top.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#EAEAEA',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h1_header_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Top Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the link color of header top.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FAFAFA',
				'hover'   => '#00ABC9',
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h1_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Bottom Absolute', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable header bottom absolute.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Bottom Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header bottom.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h1_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Bottom Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header bottom.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h1_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo', 'redux-framework-demo' ),
			'subtitle' => __( 'Upload the logo of header', 'redux-framework-demo' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
		),
		array(
			'id'            => 'h1_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'redux-framework-demo' ),
			'default'       => 50,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h1_menu_align',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align', 'redux-framework-demo' ),
			'subtitle' => __( 'Control align of menu.', 'redux-framework-demo' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h1_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the menu.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h1_menu_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu first level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu first level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Sub Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu sub level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h1_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Sub Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu sub level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h1_menu_content_right',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Content Right', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable content right of menu.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'h1_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Content Right Element', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in content right of menu.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h1_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Content Right Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the content right of menu.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h1_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-menu-content-right')
		),
		array(
			'id'       => 'h1_menu_canvas',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Canvas', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable menu canvas.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Canvas Button color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
			),
			'required' 		=> array('h1_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h1_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Canvas Button Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the menu canvas.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h1_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h1_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Stick Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for header stick.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'h1_header_stick',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Sticky', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable sticky header.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_stick_bg',
			'type'     => 'background',
			'title'    => __( 'Header Stick Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header stick.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-stick'),
		),
		array(
			'id'       => 'h1_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Stick Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header stick.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-stick'),
		),
		array(
			'id'       => 'h1_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Upload the logo of header stick.', 'redux-framework-demo' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h1_logo_stick_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Stick Height', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the height of the logo stick.', 'redux-framework-demo' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h1_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h1_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the menu stick.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h1_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu first level of the header stick.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '1.6px'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu first level of the header stick.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'    => 'h1_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Mobile Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for header mobile.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'h1_mobile_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top Mobile', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Mobile Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header mobile.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h1_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => __( 'Toggle Menu Button', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
			),
		),
		array(
			'id'       => 'h1_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Mobile', 'redux-framework-demo' ),
			'subtitle' => __( 'Upload the logo of header mobile', 'redux-framework-demo' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h1_logo_mobile_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Mobile Height', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the height of the logo mobile.', 'redux-framework-demo' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h1_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Header Mobile Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom margin the logo mobile.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h1_mobile_menu_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Mobile Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of menu mobile.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h1_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile First Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu mobile first level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile First Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu mobile first level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile Sub Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu mobile sub level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile Sub Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu mobile sub level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header Style 02', 'redux-framework-demo' ),
	'id'               => 'bt_header_style2',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_2',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'redux-framework-demo' ),
			'subtitle' => __( 'This is the options you can change for header style 01', 'redux-framework-demo' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 2',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v2.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h2_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'    => 'h2_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Desktop Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for header desktop.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'h2_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable header top.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Left', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header top left.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Center', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header top center.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Right', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header top right.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Top Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header top.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'   	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top, .bt-header-v2 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h2_header_top_bg',
			'type'     => 'background',
			'title'    => __( 'Header Top Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header top.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top, .bt-header-v2 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h2_header_top_font',
			'type'     => 'typography',
			'title'    => __( 'Header Top Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography header top.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#EAEAEA',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h2_header_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Top Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the link color of header top.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FAFAFA',
				'hover'   => '#00ABC9',
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h2_header_middle_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Middle Content Left', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header middle left.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'h2_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo', 'redux-framework-demo' ),
			'subtitle' => __( 'Upload the logo of header', 'redux-framework-demo' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h2_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'redux-framework-demo' ),
			'default'       => 50,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h2_header_middle_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Middle Content Right', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in the header middle right.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'h2_header_middle_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Middle Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header middle.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '15px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '15px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-middle')
		),
		array(
			'id'       => 'h2_header_middle_bg',
			'type'     => 'background',
			'title'    => __( 'Header Middle Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header middle.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#f8f8f8',
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-middle'),
		),
		array(
			'id'       => 'h2_header_middle_font',
			'type'     => 'typography',
			'title'    => __( 'Header Middle Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography header middle.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#454545',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-middle')
		),
		array(
			'id'       => 'h2_header_middle_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Middle Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the link color of header middle.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#454545',
				'hover'   => '#00ABC9',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-middle a')
		),
		array(
			'id'       => 'h2_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Bottom Absolute', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable header bottom absolute.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Bottom Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header bottom.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h2_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Bottom Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header bottom.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h2_menu_align',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align', 'redux-framework-demo' ),
			'subtitle' => __( 'Control align of menu.', 'redux-framework-demo' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'left'
		),
		array(
			'id'       => 'h2_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the menu.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h2_menu_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu first level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu first level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Sub Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu sub level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h2_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Sub Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu sub level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		
		array(
			'id'       => 'h2_menu_content_right',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Content Right', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable content right of menu.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Content Right Element', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in content right of menu.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h2_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Content Right Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the content right of menu.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h2_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-menu-content-right')
		),
		array(
			'id'       => 'h2_menu_canvas',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Canvas', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable menu canvas.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'h2_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Canvas Button color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
			),
			'required' 		=> array('h2_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h2_menu_canvas_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Canvas Button Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the menu canvas.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h2_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h2_menu_after_content_auto',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu After Content Auto', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to menu content right and menu canvas align after menu.', 'redux-framework-demo' ),
			'default'  => false,
			'required' 		=> array('header_layout' , '=', '2')
		),
		array(
			'id'    => 'h2_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Stick Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for header stick.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'h2_header_stick',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Sticky', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable sticky header.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_stick_bg',
			'type'     => 'background',
			'title'    => __( 'Header Stick Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header stick.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-stick'),
		),
		array(
			'id'       => 'h2_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Stick Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the padding the header stick.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-stick'),
		),
		array(
			'id'       => 'h2_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Upload the logo of header stick.', 'redux-framework-demo' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h2_logo_stick_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Stick Height', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the height of the logo stick.', 'redux-framework-demo' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h2_header_stick' , '=', '1'),
		),
		
		array(
			'id'       => 'h2_menu_align_stick',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Control align of menu stick.', 'redux-framework-demo' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right',
			'required' 		=> array('h2_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h2_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right margin the menu stick.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h2_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu first level of the header stick.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '1.6px'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color Stick', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu first level of the header stick.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'    => 'h2_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Mobile Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change for header mobile.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'h2_mobile_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top Mobile', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Mobile Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of header mobile.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h2_mobile_header_bottom_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Header Mobile Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom padding the header mobile.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-bottom' => '10px'
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-bottom')
		),
		array(
			'id'       => 'h2_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => __( 'Toggle Menu Button', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
			),
		),
		array(
			'id'       => 'h2_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Mobile', 'redux-framework-demo' ),
			'subtitle' => __( 'Upload the logo of header mobile', 'redux-framework-demo' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h2_logo_mobile_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Mobile Height', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the height of the logo mobile.', 'redux-framework-demo' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h2_mobile_menu_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Mobile Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of menu mobile.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h2_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile First Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu mobile first level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile First Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu mobile first level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile Sub Level Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography menu mobile sub level.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile Sub Level Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color menu mobile sub level.', 'redux-framework-demo' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
				'active'  => '#00ABC9',
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Menu Canvas', 'redux-framework-demo' ),
	'id'               => 'bt_menu_canvas',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'menu_canvas_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Canvas Content Element', 'redux-framework-demo'), 
			'subtitle' => __('Controls the content that displays in menu canvas.', 'redux-framework-demo'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_menu_canvas' , '=', '1')
		),
		array(
			'id'       => 'menu_canvas_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Canvas Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of menu canvas.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#00ABC9',
			),
			'output'    => array('#bt_menu_canvas'),
		),
		array(
			'id'       => 'menu_canvas_sidebar_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Canvas Sidebar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control background color of menu canvas sidebar.', 'redux-framework-demo' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('#bt_menu_canvas .bt-menu-canvas'),
		),
		
	)
) );

