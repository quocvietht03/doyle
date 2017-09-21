<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<?php do_action('doyle_add_content_before_header'); ?>
	<div id="bt-main">
		<?php 
			global $doyle_options;
			$container_class = (isset($doyle_options['honepage1_fullwidth'])&&$doyle_options['honepage1_fullwidth'])?'fullwidth':'container';
		?>
		<header id="bt_header" class="bt-header-vertical bt-header-verticalv1">
				
			<div class="bt-header-inner">
				<div class="bt-logo">
					<?php
						$logo = isset($doyle_options['honepage1_logo']['url'])?$doyle_options['honepage1_logo']['url']:'';
						
						$logo_height = (isset($doyle_options['honepage1_logo_height'])&&$doyle_options['honepage1_logo_height'])?$doyle_options['honepage1_logo_height']:'40';
						
						doyle_logo($logo, $logo_height); 
					?>
				</div>
				
				<div class="bt-vertical-menu-wrap">
					menu
					<?php
						//$menu_assign = isset($doyle_options['honepage1_menu_assign'])&&($doyle_options['honepage1_menu_assign'] != 'auto')?$doyle_options['honepage1_menu_assign']:'';
						//doyle_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
					?>
				</div>
				
				<div class="bt-sidebar">
					<?php
						echo 'sidebar';
						/* if(isset($doyle_options['honepage1_content_right_element'])&&$doyle_options['honepage1_content_right_element']&&isset($doyle_options['honepage1_content_right_element'])&&$doyle_options['honepage1_content_right_element']){
							echo '<div class="bt-menu-content-right">';
								foreach($doyle_options['honepage1_content_right_element'] as $sidebar_id){
									dynamic_sidebar( $sidebar_id );
								}
							echo '</div>'; 
						}*/
					?>
				</div>
				
			</div>
				
		</header>