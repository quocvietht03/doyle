<?php 
	global $doyle_options;
	
?>
<div class="bt-menu-toggle"></div>
<header id="bt_header" class="bt-header-vertical bt-header-verticalv1">
	
	<div class="bt-header-inner">
		<div class="bt-logo">
			<?php
				$logo = isset($doyle_options['hvertical1_logo']['url'])?$doyle_options['hvertical1_logo']['url']:'';
				
				$logo_height = (isset($doyle_options['hvertical1_logo_height'])&&$doyle_options['hvertical1_logo_height'])?$doyle_options['hvertical1_logo_height']:'40';
				
				doyle_logo($logo, $logo_height); 
			?>
		</div>
		
		<div class="bt-vertical-menu-wrap">
			<?php
				$menu_assign = isset($doyle_options['hvertical1_menu_assign'])&&($doyle_options['hvertical1_menu_assign'] != 'auto')?$doyle_options['hvertical1_menu_assign']:'';
				doyle_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
			?>
		</div>
		
		<div class="bt-sidebar">
			<?php
				if(isset($doyle_options['hvertical1_content_bottom_element'])&&$doyle_options['hvertical1_content_bottom_element']&&isset($doyle_options['hvertical1_content_bottom_element'])&&$doyle_options['hvertical1_content_bottom_element']){
					echo '<div class="bt-menu-content-right">';
						foreach($doyle_options['hvertical1_content_bottom_element'] as $sidebar_id){
							dynamic_sidebar( $sidebar_id );
						}
					echo '</div>'; 
				}
			?>
		</div>
		
	</div>
		
</header>