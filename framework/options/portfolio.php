<?php
// Portfolio
Redux::setSection( $opt_name, array(
	'title'            => __( 'Portfolio', 'redux-framework-demo' ),
	'id'               => 'bt_portfolio',
	'icon'             => 'el el-folder-open',
	'fields'           => array(
		array(
			'id'       => 'portfolio_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'portfolio_fullwidth_space',
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
			'required' 		=> array('portfolio_fullwidth' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'            => 'portfolio_sidebar_width',
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
			'id'       => 'portfolio_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.tax-fw-portfolio-category .bt-titlebar'),
		),
		array(
			'id'    => 'portfolio_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Post Settings', 'redux-framework-demo' ),
			'desc'  => __( 'This is the options you can change the post on the portfolio page.', 'redux-framework-demo' )
		),
		array(
			'id'       => 'portfolio_title',
			'type'     => 'switch',
			'title'    => __( 'Post Title', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to display the post title.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_title_font',
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
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_title_color',
			'type'     => 'link_color',
			'title'    => __( 'Post Title Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color post title.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'portfolio_title_sapce',
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
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_featured',
			'type'     => 'switch',
			'title'    => __( 'Featured Image / Video', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the image / video.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_image_size',
			'type'     => 'text',
			'title'    => __( 'Image Size', 'redux-framework-demo' ),
			'subtitle' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'redux-framework-demo' ),
			'default'  => 'full',
			'required' 		=> array('portfolio_featured' , '=', '1')
		),
		array(
			'id'       => 'portfolio_featured_sapce',
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
			'required' 		=> array('portfolio_featured' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-media')
		),
		array(
			'id'       => 'portfolio_meta',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_meta_font',
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
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'portfolio_meta_color',
			'type'     => 'link_color',
			'title'    => __( 'Post Meta Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color post meta.', 'redux-framework-demo' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'portfolio_meta_sapce',
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
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'portfolio_meta_author',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Author', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_author_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Author Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'redux-framework-demo' ),
			'default'  => 'By:',
			'required' 		=> array('portfolio_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Date', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'redux-framework-demo' ),
			'default'  => 'Date:',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_format',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Format', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'redux-framework-demo' ),
			'default'  => 'M d, Y',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Category', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the meta field category.', 'redux-framework-demo' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Category Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'redux-framework-demo' ),
			'default'  => 'Category:',
			'required' 		=> array('portfolio_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt',
			'type'     => 'switch',
			'title'    => __( 'Post Excerpt', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the excerpt.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_excerpt_length',
			'type'     => 'text',
			'title'    => __( 'Post Excerpt Length', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'redux-framework-demo' ),
			'default'  => '55',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_more',
			'type'     => 'text',
			'title'    => __( 'Post Excerpt More', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'redux-framework-demo' ),
			'default'  => '[...]',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_sapce',
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
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'portfolio_readmore',
			'type'     => 'switch',
			'title'    => __( 'Read More button', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the read more button.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_readmore_font',
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
			'required' 		=> array('portfolio_readmore' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'portfolio_readmore_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Category Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'redux-framework-demo' ),
			'default'  => 'Read More',
			'required' 		=> array('portfolio_readmore' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_article_space',
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
			'output'    => array('.tax-fw-portfolio-category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Single Portfolio', 'redux-framework-demo' ),
	'id'               => 'bt_single_portolio',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_portolio_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'redux-framework-demo' ),
			'default'  => false
		),
		array(
			'id'       => 'single_portolio_fullwidth_space',
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
			'required' 		=> array('single_portolio_fullwidth' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'            => 'single_portolio_sidebar_width',
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
			'id'       => 'single_portolio_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the background of the title bar.', 'redux-framework-demo' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.single-fw-portfolio .bt-titlebar'),
		),
		array(
			'id'       => 'single_portolio_space',
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
			'output'    => array('.single-fw-portfolio .fw-portfolio')
		),
		array(
			'id'       => 'single_portfolio_related_post',
			'type'     => 'switch',
			'title'    => __( 'Related Post', 'redux-framework-demo' ),
			'subtitle' => __( 'Turn on to show the related post.', 'redux-framework-demo' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portfolio_related_post_label',
			'type'     => 'text',
			'title'    => __( 'Related Post Label', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter label of the related post. Leave empty to use "Portfolio Related" label.', 'redux-framework-demo' ),
			'default'  => 'Portfolio Related',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_post_count',
			'type'     => 'text',
			'title'    => __( 'Related Post Count', 'redux-framework-demo' ),
			'subtitle' => __( 'Please, Enter post count of the related post. Leave empty to use "3" for post count.', 'redux-framework-demo' ),
			'default'  => '3',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'            => 'single_portfolio_related_post_per_row',
			'type'          => 'slider',
			'title'         => __( 'Related Post Per Row', 'redux-framework-demo' ),
			'subtitle'      => __( 'Controls the post per row of the related post.', 'redux-framework-demo' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => __( 'Related Post Space', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the bottom margin the related post.', 'redux-framework-demo' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .bt-related')
		),
	)
) );
