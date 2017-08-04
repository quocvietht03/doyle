<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => __( 'Archive Blog', 'redux-framework-demo' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
		array(
			'id'       => 'blog_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'blog_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Full Width Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right padding the content area display.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('blog_fullwidth' , '=', '1'),
			'output'    => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'            => 'blog_sidebar_width',
			'type'          => 'slider',
			'title'         => __( 'Sidebar Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'blog_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.category .bt-titlebar, .tag .bt-titlebar, .search .bt-titlebar'),
		),
		array(
			'id'    => 'blog_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Post Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change the post on the blog page or archive pages.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'post_title',
			'type'     => 'switch',
			'title'    => __( 'Post Title', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to display the post title.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'post_title_font',
			'type'     => 'typography',
			'title'    => __( 'Post Title Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography post title.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_title_color',
			'type'     => 'link_color',
			'title'    => __( 'Post Title Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color post title.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title a, .tag .bt-post-item .bt-title a, .search .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'post_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Title Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post title.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_featured',
			'type'     => 'switch',
			'title'    => __( 'Featured Image / Video', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the image / video.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'post_image_size',
			'type'     => 'text',
			'title'    => __( 'Image Size', 'redux-framework-demo' ),
			'subtitle' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'redux-framework-demo' ),
			'default'  => 'full',
			'required' 		=> array('post_featured' , '=', '1')
		),
		array(
			'id'       => 'post_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Featured Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post featured.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_featured' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-media, .tag .bt-post-item .bt-media, .search .bt-post-item .bt-media')
		),
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'post_meta_font',
			'type'     => 'typography',
			'title'    => __( 'Post Meta Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography post meta.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li, .tag .bt-post-item .bt-meta > li, .search .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'post_meta_color',
			'type'     => 'link_color',
			'title'    => __( 'Post Meta Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color post meta.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li a, .tag .bt-post-item .bt-meta > li a, .search .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'post_meta_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Meta Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post meta.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'post_meta_author',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Author', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_author_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Author Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'redux-framework-demo' ),
			'default'  => 'By:',
			'required' 		=> array('post_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Date', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'redux-framework-demo' ),
			'default'  => 'Date:',
			'required' 		=> array('post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date_format',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Format', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'redux-framework-demo' ),
			'default'  => 'M d, Y',
			'required' 		=> array('post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Comment', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field comment.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Comment Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field comment. Leave empty to use "Comment:" label.', 'redux-framework-demo' ),
			'default'  => 'Comment:',
			'required' 		=> array('post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comments_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Comments Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field comment. Leave empty to use "Comments:" label.', 'redux-framework-demo' ),
			'default'  => 'Comments:',
			'required' 		=> array('post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Category', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field category.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Category Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'redux-framework-demo' ),
			'default'  => 'Category:',
			'required' 		=> array('post_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt',
			'type'     => 'switch',
			'title'    => __( 'Post Excerpt', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the excerpt.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'post_excerpt_length',
			'type'     => 'text',
			'title'    => __( 'Post Excerpt Length', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'redux-framework-demo' ),
			'default'  => '55',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_more',
			'type'     => 'text',
			'title'    => __( 'Post Excerpt More', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'redux-framework-demo' ),
			'default'  => '[...]',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Excerpt Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post excerpt.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('post_excerpt' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-excerpt, .tag .bt-post-item .bt-excerpt, .search .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'post_readmore',
			'type'     => 'switch',
			'title'    => __( 'Read More button', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the read more button.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'post_readmore_font',
			'type'     => 'typography',
			'title'    => __( 'Post Read More Button Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography post read more button.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_readmore' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-readmore, .tag .bt-post-item .bt-readmore, .search .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'post_readmore_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Category Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'redux-framework-demo' ),
			'default'  => 'Read More',
			'required' 		=> array('post_readmore' , '=', '1'),
		),
		array(
			'id'       => 'blog_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.category .bt-post-item, .tag .bt-post-item, .search .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Single Post', 'redux-framework-demo' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'post_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'post_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Full Width Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the left/right padding the content area display.', 'redux-framework-demo' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('post_fullwidth' , '=', '1'),
			'output'    => array('.single-post .bt-main-content')
		),
		array(
			'id'            => 'post_sidebar_width',
			'type'          => 'slider',
			'title'         => __( 'Sidebar Width', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'post_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.single-post .bt-titlebar'),
		),
		array(
			'id'       => 'single_post_navigation',
			'type'     => 'switch',
			'title'    => __( 'Post Navigation', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the post navigation.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_navigation_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Navigation Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post navigation.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_post_navigation' , '=', '1'),
			'output'   => array('.single-post .bt-blog-article-nav')
		),
		array(
			'id'       => 'single_author',
			'type'     => 'switch',
			'title'    => __( 'Author', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the author.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_author_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Author Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the author.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_author' , '=', '1'),
			'output'   => array('.single-post .bt-about-author')
		),
		array(
			'id'       => 'single_comment',
			'type'     => 'switch',
			'title'    => __( 'Comment', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the comment.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_comment_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Comment Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the comment.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_comment' , '=', '1'),
			'output'   => array('.single-post .bt-comment-wrapper')
		),
		array(
			'id'    => 'single_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Post Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change the post on the blog page or archive pages.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'single_post_title',
			'type'     => 'switch',
			'title'    => __( 'Post Title', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to display the post title.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_title_font',
			'type'     => 'typography',
			'title'    => __( 'Post Title Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography post title.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Title Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post title.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_featured',
			'type'     => 'switch',
			'title'    => __( 'Featured Image / Video', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the image / video.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_image_size',
			'type'     => 'text',
			'title'    => __( 'Image Size', 'redux-framework-demo' ),
			'subtitle' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'redux-framework-demo' ),
			'default'  => 'full',
			'required' 		=> array('single_post_featured' , '=', '1')
		),
		array(
			'id'       => 'single_post_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Featured Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post featured.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_featured' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-media')
		),
		array(
			'id'       => 'single_post_meta',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_meta_font',
			'type'     => 'typography',
			'title'    => __( 'Post Meta Typography', 'redux-framework-demo' ),
			'subtitle' => __( 'These settings control the typography post meta.', 'redux-framework-demo' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'single_post_meta_color',
			'type'     => 'link_color',
			'title'    => __( 'Post Meta Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color post meta.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'single_post_meta_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Meta Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post meta.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'single_post_meta_author',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Author', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_author_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Author Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'redux-framework-demo' ),
			'default'  => 'By:',
			'required' 		=> array('single_post_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Date', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'redux-framework-demo' ),
			'default'  => 'Date:',
			'required' 		=> array('single_post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date_format',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Format', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'redux-framework-demo' ),
			'default'  => 'M d, Y',
			'required' 		=> array('single_post_meta_date' , '=', '1'),
		),
		
		array(
			'id'       => 'single_post_meta_comment',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Comment', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field comment.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comment_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Comment Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field comment. Leave empty to use "Comment:" label.', 'redux-framework-demo' ),
			'default'  => 'Comment:',
			'required' 		=> array('single_post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comments_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Comments Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field comment. Leave empty to use "Comments:" label.', 'redux-framework-demo' ),
			'default'  => 'Comments:',
			'required' 		=> array('single_post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Category', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field category.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Category Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'redux-framework-demo' ),
			'default'  => 'Category:',
			'required' 		=> array('single_post_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'single_post_content',
			'type'     => 'switch',
			'title'    => __( 'Post Content', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the content.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Content Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post excerpt.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_content' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-content')
		),
		array(
			'id'       => 'single_post_tag',
			'type'     => 'switch',
			'title'    => __( 'Post Tags', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the tags.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_share',
			'type'     => 'switch',
			'title'    => __( 'Post Shares', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the share.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Post Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the post.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-post .bt-post-item')
		),
		
	)
) );
