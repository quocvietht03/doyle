<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => __( 'Blog', 'redux-framework-demo' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
	
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => __( 'Post', 'redux-framework-demo' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
	
	)
) );