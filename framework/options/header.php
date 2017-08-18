<?php
// Header
Redux::setSection( $opt_name, array(
	'title'            => __( 'Header', 'doyle' ),
	'id'               => 'bt_header',
	'icon'             => 'el el-credit-card',
	'fields'           => array(
		array(
			'id'       => 'header_layout',
			'type'     => 'image_select',
			'title'    => __( 'Header Layout', 'doyle' ),
			'subtitle' => __( 'Select a header layout default. Foreach pages, you can change the layout by page option', 'doyle' ),
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
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v3.jpg'
				),
				'4' => array(
					'alt' => 'Header layout onpage',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-onepage.jpg'
				)
			),
			'default'  => '1'
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header Style 01', 'doyle' ),
	'id'               => 'bt_header_style1',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_1',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'doyle' ),
			'subtitle' => __( 'This is the options you can change for header style 01', 'doyle' ),
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
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'    => 'h1_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Desktop Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header desktop.', 'doyle' )
		),
		array(
			'id'       => 'h1_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Left', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top left.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Center', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top center.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Right', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top right.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Top Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header top.', 'doyle' ),
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
			'title'    => __( 'Header Top Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header top.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#00c282',
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h1_header_top_font',
			'type'     => 'typography',
			'title'    => __( 'Header Top Font', 'doyle' ),
			'subtitle' => __( 'These settings control the typography header top.', 'doyle' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h1_header_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Top Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the link color of header top.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h1_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Bottom Absolute', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header bottom absolute.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Bottom Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header bottom.', 'doyle' ),
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
			'title'    => __( 'Header Bottom Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header bottom.', 'doyle' ),
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
			'title'    => __( 'Logo', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
		),
		array(
			'id'            => 'h1_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'doyle' ),
			'default'       => 50,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h1_menu_assign',
			'type'     => 'select',
			'title'    => __( 'Menu Assign', 'doyle' ),
			'subtitle' => __( 'Select menu assing of header.', 'doyle' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h1_menu_align',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align', 'doyle' ),
			'subtitle' => __( 'Control align of menu.', 'doyle' ),
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
			'title'    => __( 'Menu Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h1_menu_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v1 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h1_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v1 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v1 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h1_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h1_menu_content_right',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Content Right', 'doyle' ),
			'subtitle' => __( 'Turn on to enable content right of menu.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'h1_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Content Right Element', 'doyle'), 
			'subtitle' => __('Controls the content that displays in content right of menu.', 'doyle'),
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
			'title'    => __( 'Menu Content Right Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the content right of menu.', 'doyle' ),
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
			'title'    => __( 'Enable Menu Canvas', 'doyle' ),
			'subtitle' => __( 'Turn on to enable menu canvas.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Canvas Button color', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
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
			'title'    => __( 'Menu Canvas Button Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu canvas.', 'doyle' ),
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
			'title' => __( 'Header Stick Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header stick.', 'doyle' )
		),
		array(
			'id'       => 'h1_header_stick',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Sticky', 'doyle' ),
			'subtitle' => __( 'Turn on to enable sticky header.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_stick_bg',
			'type'     => 'background',
			'title'    => __( 'Header Stick Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header stick.', 'doyle' ),
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
			'title'    => __( 'Header Stick Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header stick.', 'doyle' ),
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
			'title'    => __( 'Logo Stick', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header stick.', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h1_logo_stick_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Stick Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo stick.', 'doyle' ),
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
			'title'    => __( 'Menu Space Stick', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu stick.', 'doyle' ),
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
			'title'    => __( 'Menu First Level Typography Stick', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level of the header stick.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color Stick', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level of the header stick.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v1 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h1_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Mobile Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header mobile.', 'doyle' )
		),
		array(
			'id'       => 'h1_mobile_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top Mobile', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header mobile.', 'doyle' ),
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
			'title'    => __( 'Toggle Menu Button', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
		),
		array(
			'id'       => 'h1_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Mobile', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header mobile', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h1_logo_mobile_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Mobile Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo mobile.', 'doyle' ),
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
			'title'    => __( 'Header Mobile Space', 'doyle' ),
			'subtitle' => __( 'Control the top/bottom margin the logo mobile.', 'doyle' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h1_mobile_menu_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of menu mobile.', 'doyle' ),
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
			'title'    => __( 'Menu Mobile First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile first level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header Style 02', 'doyle' ),
	'id'               => 'bt_header_style2',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_2',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'doyle' ),
			'subtitle' => __( 'This is the options you can change for header style 02', 'doyle' ),
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
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'    => 'h2_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Desktop Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header desktop.', 'doyle' )
		),
		array(
			'id'       => 'h2_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Left', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top left.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Center', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top center.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Right', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top right.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Top Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header top.', 'doyle' ),
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
			'title'    => __( 'Header Top Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header top.', 'doyle' ),
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
			'title'    => __( 'Header Top Font', 'doyle' ),
			'subtitle' => __( 'These settings control the typography header top.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#EAEAEA',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h2_header_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Top Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the link color of header top.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FAFAFA',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h2_header_middle_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Middle Content Left', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header middle left.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'h2_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h2_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'doyle' ),
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
			'title'    => __('Header Middle Content Right', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header middle right.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'h2_header_middle_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Middle Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header middle.', 'doyle' ),
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
			'title'    => __( 'Header Middle Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header middle.', 'doyle' ),
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
			'title'    => __( 'Header Middle Font', 'doyle' ),
			'subtitle' => __( 'These settings control the typography header middle.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-middle')
		),
		array(
			'id'       => 'h2_header_middle_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Middle Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the link color of header middle.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-middle a')
		),
		array(
			'id'       => 'h2_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Bottom Absolute', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header bottom absolute.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Bottom Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header bottom.', 'doyle' ),
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
			'title'    => __( 'Header Bottom Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header bottom.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h2_menu_assign',
			'type'     => 'select',
			'title'    => __( 'Menu Assign', 'doyle' ),
			'subtitle' => __( 'Select menu assing of header.', 'doyle' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h2_menu_align',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align', 'doyle' ),
			'subtitle' => __( 'Control align of menu.', 'doyle' ),
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
			'title'    => __( 'Menu Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h2_menu_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v2 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h2_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v2 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v2 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h2_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		
		array(
			'id'       => 'h2_menu_content_right',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Content Right', 'doyle' ),
			'subtitle' => __( 'Turn on to enable content right of menu.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Content Right Element', 'doyle'), 
			'subtitle' => __('Controls the content that displays in content right of menu.', 'doyle'),
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
			'title'    => __( 'Menu Content Right Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the content right of menu.', 'doyle' ),
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
			'title'    => __( 'Enable Menu Canvas', 'doyle' ),
			'subtitle' => __( 'Turn on to enable menu canvas.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'h2_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Canvas Button color', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
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
			'title'    => __( 'Menu Canvas Button Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu canvas.', 'doyle' ),
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
			'title'    => __( 'Enable Menu After Content Auto', 'doyle' ),
			'subtitle' => __( 'Turn on to menu content right and menu canvas align after menu.', 'doyle' ),
			'default'  => false,
			'required' 		=> array('header_layout' , '=', '2')
		),
		array(
			'id'    => 'h2_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Stick Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header stick.', 'doyle' )
		),
		array(
			'id'       => 'h2_header_stick',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Sticky', 'doyle' ),
			'subtitle' => __( 'Turn on to enable sticky header.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_stick_bg',
			'type'     => 'background',
			'title'    => __( 'Header Stick Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header stick.', 'doyle' ),
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
			'title'    => __( 'Header Stick Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header stick.', 'doyle' ),
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
			'title'    => __( 'Logo Stick', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header stick.', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h2_logo_stick_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Stick Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo stick.', 'doyle' ),
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
			'title'    => __( 'Menu Align Stick', 'doyle' ),
			'subtitle' => __( 'Control align of menu stick.', 'doyle' ),
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
			'title'    => __( 'Menu Space Stick', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu stick.', 'doyle' ),
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
			'title'    => __( 'Menu First Level Typography Stick', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level of the header stick.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color Stick', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level of the header stick.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v2 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h2_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Mobile Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header mobile.', 'doyle' )
		),
		array(
			'id'       => 'h2_mobile_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top Mobile', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header mobile.', 'doyle' ),
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
			'title'    => __( 'Header Mobile Space', 'doyle' ),
			'subtitle' => __( 'Control the top/bottom padding the header mobile.', 'doyle' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-bottom' => '10px'
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-bottom')
		),
		array(
			'id'       => 'h2_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => __( 'Toggle Menu Button', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
		),
		array(
			'id'       => 'h2_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Mobile', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header mobile', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h2_logo_mobile_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Mobile Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo mobile.', 'doyle' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h2_mobile_menu_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of menu mobile.', 'doyle' ),
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
			'title'    => __( 'Menu Mobile First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile first level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header Style 03', 'doyle' ),
	'id'               => 'bt_header_style3',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_3',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'doyle' ),
			'subtitle' => __( 'This is the options you can change for header style 03', 'doyle' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 3',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v3.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h3_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'    => 'h3_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Desktop Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header desktop.', 'doyle' )
		),
		array(
			'id'       => 'h3_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Left', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top left.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h3_header_top' , '=', '1')
		),
		array(
			'id'       => 'h3_header_top_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Center', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top center.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h3_header_top' , '=', '1')
		),
		array(
			'id'       => 'h3_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Right', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top right.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h3_header_top' , '=', '1')
		),
		array(
			'id'       => 'h3_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Top Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header top.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'   	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-top, .bt-header-v3 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h3_header_top_bg',
			'type'     => 'background',
			'title'    => __( 'Header Top Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header top.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-top, .bt-header-v3 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h3_header_top_font',
			'type'     => 'typography',
			'title'    => __( 'Header Top Font', 'doyle' ),
			'subtitle' => __( 'These settings control the typography header top.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#EAEAEA',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h3_header_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Top Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the link color of header top.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FAFAFA',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h3_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h3_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'doyle' ),
			'default'       => 50,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h3_header_middle_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Middle Content Center', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header middle center.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'h3_header_middle_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Middle Content Right', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header middle right.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'h3_header_middle_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Middle Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header middle.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '15px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '15px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-middle')
		),
		array(
			'id'       => 'h3_header_middle_bg',
			'type'     => 'background',
			'title'    => __( 'Header Middle Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header middle.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#f8f8f8',
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-middle'),
		),
		array(
			'id'       => 'h3_header_middle_font',
			'type'     => 'typography',
			'title'    => __( 'Header Middle Font', 'doyle' ),
			'subtitle' => __( 'These settings control the typography header middle.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-middle')
		),
		array(
			'id'       => 'h3_header_middle_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Middle Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the link color of header middle.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-middle a')
		),
		array(
			'id'       => 'h3_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Bottom Absolute', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header bottom absolute.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Bottom Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header bottom.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h3_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Bottom Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header bottom.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h3_menu_assign',
			'type'     => 'select',
			'title'    => __( 'Menu Assign', 'doyle' ),
			'subtitle' => __( 'Select menu assing of header.', 'doyle' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h3_menu_align',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align', 'doyle' ),
			'subtitle' => __( 'Control align of menu.', 'doyle' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'left'
		),
		array(
			'id'       => 'h3_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h3_menu_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v3 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h3_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v3 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v3 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h3_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		
		array(
			'id'       => 'h3_menu_content_right',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Content Right', 'doyle' ),
			'subtitle' => __( 'Turn on to enable content right of menu.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Content Right Element', 'doyle'), 
			'subtitle' => __('Controls the content that displays in content right of menu.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h3_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h3_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Content Right Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the content right of menu.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h3_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-menu-content-right')
		),
		array(
			'id'       => 'h3_menu_canvas',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Canvas', 'doyle' ),
			'subtitle' => __( 'Turn on to enable menu canvas.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'h3_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Canvas Button color', 'doyle' ),
			'subtitle' => __( 'Controls the color button toggle menu canvas.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('h3_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h3_menu_canvas_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Canvas Button Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu canvas.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h3_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h3_menu_after_content_auto',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu After Content Auto', 'doyle' ),
			'subtitle' => __( 'Turn on to menu content right and menu canvas align after menu.', 'doyle' ),
			'default'  => false,
			'required' 		=> array('header_layout' , '=', '2')
		),
		array(
			'id'    => 'h3_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Stick Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header stick.', 'doyle' )
		),
		array(
			'id'       => 'h3_header_stick',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Sticky', 'doyle' ),
			'subtitle' => __( 'Turn on to enable sticky header.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_header_stick_bg',
			'type'     => 'background',
			'title'    => __( 'Header Stick Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header stick.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-stick'),
		),
		array(
			'id'       => 'h3_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Stick Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header stick.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-stick'),
		),
		array(
			'id'       => 'h3_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Stick', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header stick.', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h3_logo_stick_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Stick Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo stick.', 'doyle' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h3_header_stick' , '=', '1'),
		),
		
		array(
			'id'       => 'h3_menu_align_stick',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align Stick', 'doyle' ),
			'subtitle' => __( 'Control align of menu stick.', 'doyle' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right',
			'required' 		=> array('h3_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h3_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space Stick', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu stick.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h3_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography Stick', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level of the header stick.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color Stick', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level of the header stick.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v3 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h3_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Mobile Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header mobile.', 'doyle' )
		),
		array(
			'id'       => 'h3_mobile_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top Mobile', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header mobile.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v3 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h3_mobile_header_bottom_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Header Mobile Space', 'doyle' ),
			'subtitle' => __( 'Control the top/bottom padding the header mobile.', 'doyle' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-bottom' => '10px'
			),
			'output'    => array('.bt-header-v3 .bt-header-mobile .bt-bottom')
		),
		array(
			'id'       => 'h3_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => __( 'Toggle Menu Button', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
		),
		array(
			'id'       => 'h3_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Mobile', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header mobile', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'h3_logo_mobile_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Mobile Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo mobile.', 'doyle' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h3_mobile_menu_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of menu mobile.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h3_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile first level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h3_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header One Page', 'doyle' ),
	'id'               => 'bt_header_onepage',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_1',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'doyle' ),
			'subtitle' => __( 'This is the options you can change for header one page.', 'doyle' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout onepage',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-onepage.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'honepage_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'    => 'honepage_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Desktop Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header desktop.', 'doyle' )
		),
		array(
			'id'       => 'honepage_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'honepage_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Left', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top left.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('honepage_header_top' , '=', '1')
		),
		array(
			'id'       => 'honepage_header_top_center',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Center', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top center.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('honepage_header_top' , '=', '1')
		),
		array(
			'id'       => 'honepage_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Top Content Right', 'doyle'), 
			'subtitle' => __('Controls the content that displays in the header top right.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('honepage_header_top' , '=', '1')
		),
		array(
			'id'       => 'honepage_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Top Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header top.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('honepage_header_top' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-header-desktop .bt-top, .bt-header-onepage .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'honepage_header_top_bg',
			'type'     => 'background',
			'title'    => __( 'Header Top Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header top.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#00c282',
			),
			'required' 		=> array('honepage_header_top' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-header-desktop .bt-top, .bt-header-onepage .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'honepage_header_top_font',
			'type'     => 'typography',
			'title'    => __( 'Header Top Font', 'doyle' ),
			'subtitle' => __( 'These settings control the typography header top.', 'doyle' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('honepage_header_top' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'honepage_header_top_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Header Top Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the link color of header top.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('honepage_header_top' , '=', '1'),
			'output'   => array('.bt-header-onepage .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'honepage_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Bottom Absolute', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header bottom absolute.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'honepage_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Bottom Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header bottom.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-onepage .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'honepage_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Bottom Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header bottom.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-onepage .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'honepage_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
		),
		array(
			'id'            => 'honepage_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'doyle' ),
			'default'       => 50,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'honepage_menu_assign',
			'type'     => 'select',
			'title'    => __( 'Menu Assign', 'doyle' ),
			'subtitle' => __( 'Select menu assing of header.', 'doyle' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'honepage_menu_align',
			'type'     => 'button_set',
			'title'    => __( 'Menu Align', 'doyle' ),
			'subtitle' => __( 'Control align of menu.', 'doyle' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'honepage_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-onepage .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'honepage_menu_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'honepage_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-onepage .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'honepage_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-onepage .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-onepage .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-onepage .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'honepage_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'honepage_menu_content_right',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Content Right', 'doyle' ),
			'subtitle' => __( 'Turn on to enable content right of menu.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'honepage_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Content Right Element', 'doyle'), 
			'subtitle' => __('Controls the content that displays in content right of menu.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('honepage_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'honepage_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Content Right Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the content right of menu.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('honepage_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-menu-content-right')
		),
		array(
			'id'       => 'honepage_menu_canvas',
			'type'     => 'switch',
			'title'    => __( 'Enable Menu Canvas', 'doyle' ),
			'subtitle' => __( 'Turn on to enable menu canvas.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'honepage_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Canvas Button color', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('honepage_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'honepage_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => __( 'Menu Canvas Button Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu canvas.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('honepage_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'honepage_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Stick Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header stick.', 'doyle' )
		),
		array(
			'id'       => 'honepage_header_stick',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Sticky', 'doyle' ),
			'subtitle' => __( 'Turn on to enable sticky header.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'honepage_header_stick_bg',
			'type'     => 'background',
			'title'    => __( 'Header Stick Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header stick.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('honepage_header_stick' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-header-stick'),
		),
		array(
			'id'       => 'honepage_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Stick Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header stick.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('honepage_header_stick' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-header-stick'),
		),
		array(
			'id'       => 'honepage_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Stick', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header stick.', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
			'required' 		=> array('honepage_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'honepage_logo_stick_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Stick Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo stick.', 'doyle' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('honepage_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'honepage_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Menu Space Stick', 'doyle' ),
			'subtitle' => __( 'Control the left/right margin the menu stick.', 'doyle' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('honepage_header_stick' , '=', '1'),
			'output'    => array('.bt-header-onepage .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'honepage_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => __( 'Menu First Level Typography Stick', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu first level of the header stick.', 'doyle' ),
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
				'letter-spacing' => '0'
			),
			'required' 		=> array('honepage_header_stick' , '=', '1'),
			'output'   => array('.bt-header-onepage .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'honepage_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => __( 'Menu First Level Color Stick', 'doyle' ),
			'subtitle' => __( 'Controls the color menu first level of the header stick.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'required' 		=> array('honepage_header_stick' , '=', '1'),
			'output'   => array('.bt-header-onepage .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-onepage .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'honepage_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Header Mobile Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change for header mobile.', 'doyle' )
		),
		array(
			'id'       => 'honepage_mobile_header_top',
			'type'     => 'switch',
			'title'    => __( 'Enable Header Top Mobile', 'doyle' ),
			'subtitle' => __( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'honepage_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => __( 'Header Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header mobile.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-onepage .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'honepage_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => __( 'Toggle Menu Button', 'doyle' ),
			'subtitle' => __( 'Controls the color toggle menu button of the header mobile.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
		),
		array(
			'id'       => 'honepage_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo Mobile', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header mobile', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			)
		),
		array(
			'id'            => 'honepage_logo_mobile_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Mobile Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo mobile.', 'doyle' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'honepage_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Header Mobile Space', 'doyle' ),
			'subtitle' => __( 'Control the top/bottom margin the logo mobile.', 'doyle' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-onepage .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'honepage_mobile_menu_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Mobile Background', 'doyle' ),
			'subtitle' => __( 'Control background color of menu mobile.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'honepage_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile First Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile first level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-transform'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'honepage_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile First Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile first level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'honepage_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => __( 'Menu Mobile Sub Level Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography menu mobile sub level.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'honepage_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => __( 'Menu Mobile Sub Level Color', 'doyle' ),
			'subtitle' => __( 'Controls the color menu mobile sub level.', 'doyle' ),
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
				'active'  => '#0a6edd',
			),
			'output'   => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Header One Page Scroll', 'doyle' ),
	'id'               => 'bt_header_onepage_scroll',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_onepagescroll',
			'type'     => 'image_select',
			'title'    => __( 'Layout Selected', 'doyle' ),
			'subtitle' => __( 'This is the options you can change for header one page style', 'doyle' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout one page',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-onepage-v1.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'honepage1_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'honepage1_bg',
			'type'     => 'background',
			'title'    => __( 'Header Background', 'doyle' ),
			'subtitle' => __( 'Control background color of header.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => 'transparent',
			),
			'output'    => array('.bt-header-onepagev1 .bt-header-inner'),
		),
		array(
			'id'       => 'honepage1_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => __( 'Header Padding Space', 'doyle' ),
			'subtitle' => __( 'Control the padding the header.', 'doyle' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-onepagev1 .bt-header-inner')
		),
		array(
			'id'       => 'honepage1_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Logo', 'doyle' ),
			'subtitle' => __( 'Upload the logo of header', 'doyle' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v1.png' 
			),
		),
		array(
			'id'            => 'honepage1_logo_height',
			'type'          => 'slider',
			'title'         => __( 'Logo Height', 'doyle' ),
			'subtitle'      => __( 'Controls the height of the logo.', 'doyle' ),
			'default'       => 50,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'honepage1_menu_assign',
			'type'     => 'select',
			'title'    => __( 'Menu Assign', 'doyle' ),
			'subtitle' => __( 'Select menu assing of header.', 'doyle' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'honepage1_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Header Content Right Element', 'doyle'), 
			'subtitle' => __('Controls the content that displays in content right of header.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
		),
		
		
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => __( 'Menu Canvas', 'doyle' ),
	'id'               => 'bt_menu_canvas',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'menu_canvas_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => __('Menu Canvas Content Element', 'doyle'), 
			'subtitle' => __('Controls the content that displays in menu canvas.', 'doyle'),
			'options'  => doyle_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_menu_canvas' , '=', '1')
		),
		array(
			'id'       => 'menu_canvas_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Canvas Background', 'doyle' ),
			'subtitle' => __( 'Control background color of menu canvas.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#0a6edd',
			),
			'output'    => array('#bt_menu_canvas'),
		),
		array(
			'id'       => 'menu_canvas_sidebar_bg',
			'type'     => 'background',
			'title'    => __( 'Menu Canvas Sidebar Background', 'doyle' ),
			'subtitle' => __( 'Control background color of menu canvas sidebar.', 'doyle' ),
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

