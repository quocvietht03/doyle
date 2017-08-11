<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => __( 'Colors', 'doyle' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => __( 'Main Color', 'doyle' ),
			'subtitle' => __( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'doyle' ),
			'default'  => '#0a6edd',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => __( 'Secondary Color', 'doyle' ),
			'subtitle' => __( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'doyle' ),
			'default'  => '#00c282',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'link_color',
			'title'    => __( 'Link Color', 'doyle' ),
			'subtitle' => __( 'Controls the color of all text links.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'output'   => array('a, .bt-link-color')
		),
		
	)
) );
