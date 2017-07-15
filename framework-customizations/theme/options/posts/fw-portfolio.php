<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => __('Layout Settings', 'fw'),
				'type' => 'tab',
				'options' => array(
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Layout', '{domain}'),
						'desc'  => __('Select a layout of project', '{domain}'),
						'choices' => array(
							'default' => __('Default(Image Left)', '{domain}'),
							'layout1' => __('Layout 1(Image Top)', '{domain}'),
							'layout2' => __('Layout 2(Image Bottom)', '{domain}')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Select Gallery Columns', '{domain}'),
						'desc'  => __('Select gallery columns of project', '{domain}'),
						'choices' => array(
							'col-md-12' => __('1 Column', '{domain}'),
							'col-md-6' => __('2 Columns', '{domain}'),
							'col-md-4' => __('3 Columns', '{domain}'),
							'col-md-3' => __('4 Columns', '{domain}')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => __('Gallery Space', '{domain}'),
						'desc'  => __('Please, enter gallery space of project.', '{domain}'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => __('Meta Fields', 'fw'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infor',
						'label' => __('Info Title', '{domain}'),
						'desc'  => __('Please, enter info title of project.', '{domain}'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2017'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => __('Info Option', '{domain}'),
						'desc'  => __('Please configs info option of project', '{domain}'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', '{domain}'),
								'desc'  => __('Please, enter title of project item.', '{domain}'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Value', '{domain}'),
								'desc'  => __('Please, enter value of project item.', '{domain}'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', '{domain}'),
						'sortable' => true,
					)
					
				),
			),
			'portfolio-social' => array(
				'title' => __('Social', 'fw'),
				'type' => 'tab',
				'options' => array(
					'social-title' =>  array( 
						'type' => 'text',
						'value' => 'Share',
						'label' => __('Social Title', '{domain}'),
						'desc'  => __('Please, enter social title of project.', '{domain}'),
					),
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
								'title' => 'Pinterest',
								'icon' => 'fa fa-pinterest',
								'link' => '#'
							),
							array(
								'title' => 'Behance',
								'icon' => 'fa fa-behance',
								'link' => '#'
							),
							array(
								'title' => 'Instagram',
								'icon' => 'fa fa-instagram',
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