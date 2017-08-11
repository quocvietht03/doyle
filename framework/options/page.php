<?php
// Page
Redux::setSection( $opt_name, array(
	'title'            => __( 'Page', 'doyle' ),
	'id'               => 'bt_page',
	'icon'             => 'el el-bookmark-empty',
	'fields'           => array(
		array(
			'id'       => 'page_comment',
			'type'     => 'switch',
			'title'    => __( 'Enable Page Comment', 'doyle' ),
			'subtitle' => __( 'Turn on to enable page comment.', 'doyle' ),
			'default'  => true,
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'slider',
			'title'         => __( 'Sidebar Width', 'doyle' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
	)
) );
