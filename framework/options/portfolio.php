<?php
// Portfolio
Redux::setSection( $opt_name, array(
	'title'            => __( 'Portfolio', 'doyle' ),
	'id'               => 'bt_portfolio',
	'icon'             => 'el el-folder-open',
	'fields'           => array(
		array(
			'id'       => 'portfolio_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'portfolio_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Full Width Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right padding the content area display.', 'doyle' ),
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
			'title'         => __( 'Sidebar Width', 'doyle' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'portfolio_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'doyle' ),
			'subtitle' => __( 'Control the background of the title bar.', 'doyle' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.tax-fw-portfolio-category .bt-titlebar'),
		),
		array(
			'id'    => 'portfolio_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'Post Settings', 'doyle' ),
			'desc'  => __( 'This is the options you can change the post on the portfolio page.', 'doyle' )
		),
		array(
			'id'       => 'portfolio_title',
			'type'     => 'switch',
			'title'    => __( 'Post Title', 'doyle' ),
			'subtitle' => __( 'Turn on to display the post title.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_title_font',
			'type'     => 'typography',
			'title'    => __( 'Post Title Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography post title.', 'doyle' ),
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
			'title'    => __( 'Post Title Color', 'doyle' ),
			'subtitle' => __( 'Controls the color post title.', 'doyle' ),
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
			'title'    => __( 'Post Title Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the post title.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_featured',
			'type'     => 'switch',
			'title'    => __( 'Featured Image / Video', 'doyle' ),
			'subtitle' => __( 'Turn on to show the image / video.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_image_size',
			'type'     => 'text',
			'title'    => __( 'Image Size', 'doyle' ),
			'subtitle' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'doyle' ),
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
			'title'    => __( 'Post Featured Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the post featured.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_featured' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-media')
		),
		array(
			'id'       => 'portfolio_meta',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field', 'doyle' ),
			'subtitle' => __( 'Turn on to show the meta field.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_meta_font',
			'type'     => 'typography',
			'title'    => __( 'Post Meta Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography post meta.', 'doyle' ),
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
			'title'    => __( 'Post Meta Color', 'doyle' ),
			'subtitle' => __( 'Controls the color post meta.', 'doyle' ),
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
			'title'    => __( 'Post Meta Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the post meta.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'portfolio_meta_author',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Author', 'doyle' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_author_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Author Label', 'doyle' ),
			'subtitle' => __( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'doyle' ),
			'default'  => 'By:',
			'required' 		=> array('portfolio_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Date', 'doyle' ),
			'subtitle' => __( 'Turn on to show the meta field author.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Label', 'doyle' ),
			'subtitle' => __( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'doyle' ),
			'default'  => 'Date:',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_format',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Date Format', 'doyle' ),
			'subtitle' => __( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'doyle' ),
			'default'  => 'M d, Y',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category',
			'type'     => 'switch',
			'title'    => __( 'Post Meta Field Category', 'doyle' ),
			'subtitle' => __( 'Turn on to show the meta field category.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category_label',
			'type'     => 'text',
			'title'    => __( 'Post Meta Field Category Label', 'doyle' ),
			'subtitle' => __( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'doyle' ),
			'default'  => 'Category:',
			'required' 		=> array('portfolio_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt',
			'type'     => 'switch',
			'title'    => __( 'Post Excerpt', 'doyle' ),
			'subtitle' => __( 'Turn on to show the excerpt.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_excerpt_length',
			'type'     => 'text',
			'title'    => __( 'Post Excerpt Length', 'doyle' ),
			'subtitle' => __( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'doyle' ),
			'default'  => '55',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_more',
			'type'     => 'text',
			'title'    => __( 'Post Excerpt More', 'doyle' ),
			'subtitle' => __( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'doyle' ),
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
			'title'    => __( 'Post Excerpt Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the post excerpt.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'portfolio_readmore',
			'type'     => 'switch',
			'title'    => __( 'Read More button', 'doyle' ),
			'subtitle' => __( 'Turn on to show the read more button.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_readmore_font',
			'type'     => 'typography',
			'title'    => __( 'Post Read More Button Typography', 'doyle' ),
			'subtitle' => __( 'These settings control the typography post read more button.', 'doyle' ),
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
			'title'    => __( 'Post Meta Field Category Label', 'doyle' ),
			'subtitle' => __( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'doyle' ),
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
			'title'    => __( 'Post Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the post.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.tax-fw-portfolio-category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => __( 'Single Portfolio', 'doyle' ),
	'id'               => 'bt_single_portolio',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_portolio_fullwidth',
			'type'     => 'switch',
			'title'    => __( 'Full Width (100%)', 'doyle' ),
			'subtitle' => __( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'single_portolio_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => __( 'Full Width Space', 'doyle' ),
			'subtitle' => __( 'Control the left/right padding the content area display.', 'doyle' ),
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
			'title'         => __( 'Sidebar Width', 'doyle' ),
			'subtitle'      => __( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'single_portolio_titlebar_bg',
			'type'     => 'background',
			'title'    => __( 'Title Bar Background', 'doyle' ),
			'subtitle' => __( 'Control the background of the title bar.', 'doyle' ),
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
			'title'    => __( 'Post Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the post.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .fw-portfolio')
		),
		array(
			'id'       => 'single_portfolio_related_post',
			'type'     => 'switch',
			'title'    => __( 'Related Post', 'doyle' ),
			'subtitle' => __( 'Turn on to show the related post.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portfolio_related_post_label',
			'type'     => 'text',
			'title'    => __( 'Related Post Label', 'doyle' ),
			'subtitle' => __( 'Please, Enter label of the related post. Leave empty to use "Portfolio Related" label.', 'doyle' ),
			'default'  => 'Portfolio Related',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_post_count',
			'type'     => 'text',
			'title'    => __( 'Related Post Count', 'doyle' ),
			'subtitle' => __( 'Please, Enter post count of the related post. Leave empty to use "3" for post count.', 'doyle' ),
			'default'  => '3',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'            => 'single_portfolio_related_post_per_row',
			'type'          => 'slider',
			'title'         => __( 'Related Post Per Row', 'doyle' ),
			'subtitle'      => __( 'Controls the post per row of the related post.', 'doyle' ),
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
			'title'    => __( 'Related Post Space', 'doyle' ),
			'subtitle' => __( 'Control the bottom margin the related post.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .bt-related')
		),
	)
) );
