<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_item_padding' => array(
		'label' => __('Menu Item Padding', 'doyle'),
		'desc' => __('Please enter number with px or % for menu item level 1 padding (default: 0px 10px)', 'doyle'),
		'type' => 'short-text',
		'value' => '0px 10px'
	),
	'sub_menu_padding' => array(
		'label' => __('Sub Menu Padding', 'doyle'),
		'desc' => __('Please enter number with px or % for sub menu padding (default: 0px)', 'doyle'),
		'type' => 'short-text',
		'value' => '0px'
	),
	'sub_menu_align' => array(
		'label' => __('Position', 'doyle'),
		'desc' => __('Select the sub menu display position', 'doyle'),
		'type' => 'radio',
		'value' => 'menu-align-left',
		'choices' => array(
			'menu-align-left' => __('Left', 'doyle'),
			'menu-align-right' => __('Right', 'doyle'),
		),
		'inline' => true,
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => __('Badge', 'doyle'),
				'left-choice' => array(
					'value' => 'no',
					'label' => __('No', 'doyle'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __('Yes', 'doyle'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => __('Text', 'doyle'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => __('Background Color', 'doyle'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => __('Color', 'doyle'),
						),
					),
				),
			),
		),
	),
);