<?php
// Page
Redux::setSection( $opt_name, array(
	'title'            => __( 'Page', 'redux-framework-demo' ),
	'id'               => 'bt_page',
	'icon'             => 'el el-bookmark-empty',
	'fields'           => array(
		array(
			'id'       => 'page_comment',
			'type'     => 'switch',
			'title'    => __( 'Enable Page Comment', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to enable page comment.', 'redux-framework-demo' ),
			'default'  => true,
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'slider',
			'title'         => __( 'Sidebar Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
	)
) );
