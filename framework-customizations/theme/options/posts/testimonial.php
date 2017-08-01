<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'testimonial_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'testimonial-meta' => array(
				'title' => __('Meta Fields', 'fw'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => __('Position', '{domain}'),
						'desc'  => __('Please, enter position of testimonial.', '{domain}'),
					),
					
				),
			),
			
		)
	)
	
);