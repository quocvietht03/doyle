<!-- Start Header -->
<?php 
	global $doyle_options;
	$class_header = 'bt-header-v3';
	if(isset($doyle_options['fixed_main_menu_v3']) && $doyle_options['fixed_main_menu_v3']) {
		$class_header .= ' bt-header-fixed';
	}
	$disable_stick_menu = get_post_meta(get_the_ID(),'doyle_disable_stick_menu',true);
	if($disable_stick_menu != 'on') {
		if(isset($doyle_options['stick_main_menu_v3']) && $doyle_options['stick_main_menu_v3']) {
			$class_header .= ' bt-header-stick';
		}
	}
?>
<header>
	<div id="doyle_header" class="<?php echo esc_attr($class_header); ?>"><!-- bt-header-stick/bt-header-fixed -->
		<!-- Start Header Top -->
		<div class="bt-header-top">
			<div class="container">
				<div class="row">
					<?php if (is_active_sidebar("doyle-header-top-v3-left")) { ?>
						<div class="bearsicon_tx bears-p1">
							<?php 
								dynamic_sidebar("doyle-header-top-v3-left");
							?>
						</div>
					<?php } ?> 
					
					<div class="bt-col-logo bears-p2">
						<div class="bt-logo">
							<a href="<?php echo esc_url(home_url()); ?>">
								<?php doyle_logo(); ?>
							</a>
						</div>
						<div id="bt-hamburger" class="bt-hamburger visible-xs visible-sm"><span></span></div>
					</div>

					<?php if (is_active_sidebar("doyle-header-top-v3-right")) { ?>
						<div class="bearsicon_tx bears-p3">
							<?php 
								dynamic_sidebar("doyle-header-top-v3-right");
							?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		<!-- Start Header Menu -->
		<div class="bt-header-menu">
			<div class="container bt-header-relative-style">
				<div class="row">
					<div class="bt-header-clear-relative-style col-md-10 bt-col-menu <?php if (is_active_sidebar("doyle-menu-right-sidebar-2")) echo esc_attr('has-menu-right-sidebar'); ?>">
						<?php
							$attr = array(
								'container_class' => 'bt-menu-list hidden-xs hidden-sm ',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							);
							/* Select menu dynamic */
							$menu_slug = get_post_meta(get_the_ID(),'doyle_menu',true);
							if($menu_slug != '' && $menu_slug != 'global') {
								$attr['menu'] = $menu_slug;
							}
							/* Select menu position */
							$menu_class = get_post_meta(get_the_ID(),'doyle_menu_positon',true);
							$attr['menu_class'] = 'text-right';
							if($menu_class != '' && $menu_class != 'global') {
								$attr['menu_class'] = $menu_class;
							}
							/* Select theme location */
							$menu_locations = get_nav_menu_locations();
							if (!empty($menu_locations['main_navigation'])) {
								$attr['theme_location'] = 'main_navigation';
							}
							wp_nav_menu( $attr );
						?>
					</div>
					<?php if (is_active_sidebar("doyle-header-top-request-right")){ ?>
						<div class="col-md-2 button-request">
							<div class="free-bt">
							<?php dynamic_sidebar("doyle-header-top-request-right"); ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- End Header Menu -->
	</div>
</header>
<div class="bt-menu-canvas-overlay"></div>
<div class="bt-menu-canvas">
	<?php dynamic_sidebar("doyle-menu-canvas-sidebar"); ?>
</div>
<!-- End Header -->
