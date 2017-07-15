<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'team_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'team-meta' => array(
				'title' => __('Meta Fields', 'fw'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => __('Position', '{domain}'),
						'desc'  => __('Please, enter position of member.', '{domain}'),
					),
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => __('Email', '{domain}'),
						'desc'  => __('Please, enter email of member.', '{domain}'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => __('Phone', '{domain}'),
						'desc'  => __('Please, enter phone number of member.', '{domain}'),
					),
					
				),
			),
			'team-social' => array(
				'title' => __('Social', 'fw'),
				'type' => 'tab',
				'options' => array(
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							)
						),
						'label' => __('Social', '{domain}'),
						'desc'  => __('Please configs social of member', '{domain}'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', '{domain}'),
								'desc'  => __('Please, enter title of social item.', '{domain}'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Icon', '{domain}'),
								'desc'  => __('Please, enter icon of social item.', '{domain}'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Url(Link)', '{domain}'),
								'desc'  => __('Please, enter link of social item.', '{domain}'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', '{domain}'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);