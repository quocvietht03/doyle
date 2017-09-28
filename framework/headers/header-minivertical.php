<?php 
	global $doyle_options;
	
?>
<header id="bt_header" class="bt-header bt-header-minivertical">
	
	<div class="bt-header-desktop">
		
		<div class="bt-mini-bar">
			<div class="bt-menu-toggle">
				<div class="bt-menu-toggle-content"></div>
			</div>
			<div class="bt-mini-sidebar">
				<?php
					if(isset($doyle_options['hminivertical_content_mini_element'])&&$doyle_options['hminivertical_content_bottom_element']){
						echo '<div class="bt-menu-content-mini">';
							foreach($doyle_options['hminivertical_content_mini_element'] as $sidebar_id){
								dynamic_sidebar( $sidebar_id );
							}
						echo '</div>'; 
					}
				?>
			</div>
		</div>
		
		<div class="bt-header-inner">
			<div class="bt-logo">
				<?php
					$logo = isset($doyle_options['hminivertical_logo']['url'])?$doyle_options['hminivertical_logo']['url']:'';
					
					$logo_height = (isset($doyle_options['hminivertical_logo_height'])&&$doyle_options['hminivertical_logo_height'])?$doyle_options['hminivertical_logo_height']:'40';
					
					doyle_logo($logo, $logo_height); 
				?>
			</div>
			
			<div class="bt-vertical-menu-wrap">
				<?php
					$menu_assign = isset($doyle_options['hminivertical_menu_assign'])&&($doyle_options['hminivertical_menu_assign'] != 'auto')?$doyle_options['hminivertical_menu_assign']:'';
					doyle_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
				?>
			</div>
			
			<div class="bt-sidebar">
				<?php
					if(isset($doyle_options['hminivertical_content_bottom_element'])&&$doyle_options['hminivertical_content_bottom_element']){
						echo '<div class="bt-menu-content-right">';
							foreach($doyle_options['hminivertical_content_bottom_element'] as $sidebar_id){
								dynamic_sidebar( $sidebar_id );
							}
						echo '</div>'; 
					}
				?>
			</div>
			
		</div>
	</div>
	
	<div class="bt-header-mobile">
		<div class="bt-subheader bt-bottom">
			<div class="bt-subheader-inner container">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo_mobile = isset($doyle_options['hminivertical_logo_mobile']['url'])?$doyle_options['hminivertical_logo_mobile']['url']:'';
							if(isset($page_options['logo_mobile']['url'])&&$page_options['logo_mobile']['url']){
								$logo_mobile = $page_options['logo_mobile']['url'];
							}
							
							$logo_mobile_height = isset($doyle_options['hminivertical_logo_mobile_height'])?$doyle_options['hminivertical_logo_mobile_height']:'30';
							if(isset($page_options['logo_mobile_height'])&&$page_options['logo_mobile_height']){
								$logo_mobile_height = $page_options['logo_mobile_height'];
							}
							
							doyle_logo($logo_mobile, $logo_mobile_height); 
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($doyle_options['hminivertical_content_mini_element'])&&$doyle_options['hminivertical_content_mini_element']){
								echo '<div class="bt-menu-content-right">';
									foreach($doyle_options['hminivertical_content_mini_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							}
						?>
						<div class="bt-menu-toggle">
							<div class="bt-menu-toggle-content"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bt-menu-mobile-wrap">
			<div class="container">
				<?php doyle_nav_menu($menu_assign, 'mobile_navigation', 'bt-menu-mobile'); ?>
			</div>
		</div>
	</div>
	
</header>