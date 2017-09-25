<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'doyle' ),
				'desc' => esc_html__( 'Please select menu type', 'doyle' ),
				'value' => '',
				'choices' => array(
					'default' => __('Default', 'doyle'),
					'sidebar' => __('Sidebar', 'doyle'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'doyle' ),
					'desc' => esc_html__( 'Please select sitebar', 'doyle' ),
					'value' => '',
					'choices' => doyle_get_sidebars(),
				),
			),
		),
	),
	
);
