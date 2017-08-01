<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => __('General', 'fw'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => __('Disable Title Bar', 'doyle'),
						'desc' => __('Turn on to disable title bar in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', '{domain}'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', '{domain}'),
						),
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Space', 'doyle'),
						'desc' => __('Turn on to disable space between footer and content in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', '{domain}'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', '{domain}'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => __('Header', 'fw'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Header Layout', '{domain}'),
						'desc'  => __('Select a header layout in current page', '{domain}'),
						'choices' => array(
							'default' => __('Default', '{domain}'),
							'1' => __('Header 1', '{domain}'),
							'2' => __('Header 2', '{domain}'),
							'3' => __('Header 3', '{domain}'),
							'4' => __('Header 4', '{domain}'),
							'5' => __('Header 5', '{domain}')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'doyle'),
						'desc' => __('Turn on to disable header full width (100%) in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', '{domain}'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', '{domain}'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top', 'doyle'),
						'desc' => __('Turn on to disable header top in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', '{domain}'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', '{domain}'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo', '{domain}'),
						'desc'  => __('Select image to change the logo in current page.', '{domain}'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', '{domain}'),
						'desc'  => __('Controls the height of the logo in current page. EX: 50', '{domain}')
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => __('Disable Header Sticky', 'doyle'),
						'desc' => __('Turn on to disable header stick in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', '{domain}'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', '{domain}'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Stick', '{domain}'),
						'desc'  => __('Select image to change the logo stick in current page.', '{domain}'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', '{domain}'),
						'desc'  => __('Controls the height of the logo stick in current page. EX: 40', '{domain}')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top Mobile', 'doyle'),
						'desc' => __('Turn on to disable header top mobile in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', '{domain}'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', '{domain}'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Mobile', '{domain}'),
						'desc'  => __('Select image to change the logo mobile in current page.', '{domain}'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', '{domain}'),
						'desc'  => __('Controls the height of the logo mobile in current page. EX: 30', '{domain}')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => __('Title Bar', 'fw'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Title Bar Layout', '{domain}'),
						'desc'  => __('Select a title bar layout in current page', '{domain}'),
						'choices' => array(
							'default' => __('Default', '{domain}'),
							'1' => __('Title Bar 1', '{domain}'),
							'2' => __('Title Bar 2', '{domain}')
						)
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => __('Footer', 'fw'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Footer Layout', '{domain}'),
						'desc'  => __('Select a footer layout in current page', '{domain}'),
						'choices' => array(
							'default' => __('Default', '{domain}'),
							'1' => __('Footer 1', '{domain}'),
							'2' => __('Footer 2', '{domain}')
						)
					),
				),
			),
		),
	),
	
);