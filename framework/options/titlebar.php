<?php
// Title Bar
Redux::setSection( $opt_name, array(
	'title'            => __( 'Title Bar', 'redux-framework-demo' ),
	'id'               => 'bt_titlebar',
	'icon'             => 'el el-map-marker',
	'fields'           => array(
		array(
			'id'       => 'titlebar_layout',
			'type'     => 'image_select',
			'title'    => __( 'Title Bar Layout', 'redux-framework-demo' ),
			'subtitle' => __( 'Select a title bar layout default. Foreach pages, you can change the layout by page option', 'redux-framework-demo' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Title Bar layout 1',
					'img' => get_template_directory_uri() . '/assets/images/titlebars/titlebar-v1.jpg'
				),
				'2' => array(
					'alt' => 'Title Bar layout 2',
					'img' => get_template_directory_uri() . '/assets/images/titlebars/titlebar-v2.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-titlebar'),
		),
		array(
			'id'       => 'titlebar_overlay',
			'type'     => 'color_rgba',
			'title'    => __( 'Title Bar Overlay Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the overlay color of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'output'   => array( '.bt-titlebar .bt-overlay' ),
		),
		array(
			'id'       => 'titlebar_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Title Bar Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom padding the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    => '45px',
				'padding-bottom' => '45px'
			),
			'output'    => array('.bt-titlebar')
		),
		array(
			'id'       => 'titlebar_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'	   => false,
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Title Bar Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '90px'
			),
			'output'    => array('.bt-titlebar')
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => __( 'Page Title', 'redux-framework-demo' ),
	'id'               => 'bt_titlebar_pagetitle',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'titlebar_page_title_font',
			'type'     => 'typography',
			'title'    => __( 'Page Title Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography page title.', 'redux-framework-demo' ),
			'font-family'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '24px',
				'font-weight' => '700',
				'line-height' => '30px',
				'letter-spacing' => '1.6px'
			),
			'output'    => array('.bt-titlebar .bt-page-title h2')
		),
		array(
			'id'       => 'titlebar_page_title_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Page Title Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom padding the page title.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    => '5px',
				'padding-bottom' => '5px'
			),
			'output'    => array('.bt-titlebar .bt-page-title')
		),
		array(
			'id'       => 'titlebar_page_title_before',
			'type'     => 'switch',
			'title'    => __( 'Enable Page Title Before', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable page title before content.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'=>'titlebar_page_title_before_content',
			'type' => 'textarea',
			'title' => __('Page Title Before Content', 'redux-framework-demo'), 
			'subtitle' => __('Please enter custom text before page title(Alow some html tags: br, em, strong, span)', 'redux-framework-demo'),
			'validate' => 'html_custom',
			'default' => '',
			'allowed_html' => array(
				'span' => array(
					'class' => array(),
					'style' => array()
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
			'required' 		=> array('titlebar_page_title_before' , '=', '1')
		),
		array(
			'id'       => 'titlebar_page_title_before_content_font',
			'type'     => 'typography',
			'title'    => __( 'Page Title Before Content Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography page title before content.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('titlebar_page_title_before' , '=', '1'),
			'output'    => array('.bt-titlebar .bt-page-title .bt-before')
		),
		array(
			'id'       => 'titlebar_page_title_after',
			'type'     => 'switch',
			'title'    => __( 'Enable Page Title After', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable page title after content.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'=>'titlebar_page_title_after_content',
			'type' => 'textarea',
			'title' => __('Page Title After Content', 'redux-framework-demo'), 
			'subtitle' => __('Please enter custom text after page title(Alow some html tags: br, em, strong, span)', 'redux-framework-demo'),
			'validate' => 'html_custom',
			'default' => '',
			'allowed_html' => array(
				'span' => array(
					'class' => array(),
					'style' => array()
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
			'required' 		=> array('titlebar_page_title_after' , '=', '1')
		),
		array(
			'id'       => 'titlebar_page_title_after_content_font',
			'type'     => 'typography',
			'title'    => __( 'Page Title After Content Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography page title after content.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('titlebar_page_title_before' , '=', '1'),
			'output'    => array('.bt-titlebar .bt-page-title .bt-after')
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => __( 'Breacrumb', 'redux-framework-demo' ),
	'id'               => 'bt_titlebar_breadcrumb',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'titlebar_breadcrumb_font',
			'type'     => 'typography',
			'title'    => __( 'Breadcrumb Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography breadcrumb.', 'redux-framework-demo' ),
			'font-family'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '14px',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'output'    => array('.bt-titlebar .bt-breadcrumb .bt-path')
		),
		array(
			'id'       => 'titlebar_breadcrumb_link_color',
			'type'     => 'link_color',
			'title'    => __( 'Breadcrumb Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the link color of breadcrumb.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#00ABC9',
			),
			'output'   => array('.bt-titlebar .bt-breadcrumb .bt-path a')
		),
		array(
			'id'       => 'titlebar_breadcrumb_home_text',
			'type'     => 'text',
			'title'    => __('Breadcrumb Home Text', 'redux-framework-demo'),
			'subtitle' => __('Controls the home text of breadcrumb(Alow some html tags: br, em, strong, span)', 'redux-framework-demo'),
			'allowed_html' => array(
				'span' => array(
					'class' => array(),
					'style' => array()
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
			'default'  => 'Home'
		),
		array(
			'id'       => 'titlebar_breadcrumb_delimiter',
			'type'     => 'text',
			'title'    => __('Breadcrumb Delimiter', 'redux-framework-demo'),
			'subtitle' => __('Controls the delimiter of breadcrumb(Alow some html tags: br, em, strong, span)', 'redux-framework-demo'),
			'allowed_html' => array(
				'span' => array(
					'class' => array(),
					'style' => array()
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
			'default'  => '-'
		),
		array(
			'id'       => 'titlebar_breadcrumb_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => __( 'Breadcrumb Padding Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the top/bottom padding the breadcrumb.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-top'    => '5px',
				'padding-bottom' => '5px'
			),
			'output'    => array('.bt-titlebar .bt-breadcrumb')
		),
		array(
			'id'       => 'titlebar_breadcrumb_before',
			'type'     => 'switch',
			'title'    => __( 'Enable Breacrumb Before', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable breadcrumb before content.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'=>'titlebar_breadcrumb_before_content',
			'type' => 'textarea',
			'title' => __('Breadcrumb Before Content', 'redux-framework-demo'), 
			'subtitle' => __('Please enter custom text before breadcrumb(Alow some html tags: br, em, strong, span)', 'redux-framework-demo'),
			'validate' => 'html_custom',
			'default' => '',
			'allowed_html' => array(
				'span' => array(
					'class' => array(),
					'style' => array()
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
			'required' 		=> array('titlebar_breadcrumb_before' , '=', '1')
		),
		array(
			'id'       => 'titlebar_breadcrumb_before_content_font',
			'type'     => 'typography',
			'title'    => __( 'Breadcrumb Before Content Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography breadcrumb before content.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('titlebar_breadcrumb_before' , '=', '1'),
			'output'    => array('.bt-titlebar .bt-breadcrumb .bt-before')
		),
		array(
			'id'       => 'titlebar_breadcrumb_after',
			'type'     => 'switch',
			'title'    => __( 'Enable Breadcrumb After', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable breadcrumb after content.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'=>'titlebar_breadcrumb_after_content',
			'type' => 'textarea',
			'title' => __('Breadcrumb After Content', 'redux-framework-demo'), 
			'subtitle' => __('Please enter custom text after breadcrumb(Alow some html tags: br, em, strong, span)', 'redux-framework-demo'),
			'validate' => 'html_custom',
			'default' => '',
			'allowed_html' => array(
				'span' => array(
					'class' => array(),
					'style' => array()
				),
				'br' => array(),
				'em' => array(),
				'strong' => array()
			),
			'required' 		=> array('titlebar_breadcrumb_after' , '=', '1')
		),
		array(
			'id'       => 'titlebar_breadcrumb_after_content_font',
			'type'     => 'typography',
			'title'    => __( 'Breadcrumb After Content Font', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography breadcrumb after content.', 'redux-framework-demo' ),
			'font-family'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '1px'
			),
			'required' 		=> array('titlebar_breadcrumb_before' , '=', '1'),
			'output'    => array('.bt-titlebar .bt-breadcrumb .bt-after')
		),
	)
) );