		<?php doyle_Footer() ?>
	</div><!-- #wrap -->
	<?php if (is_active_sidebar('doyle-newsletter-sidebar')) { ?>
		<div id ="doyle_newsletter_global"class="bt-newsletter-global">
			<div class="bt-newsletter">
				<a class="bt-close" href="#">X</a>
				<?php dynamic_sidebar('doyle-newsletter-sidebar'); ?>
			</div>
		</div>
	<?php } ?>
	<?php
		global $doyle_options;
		if(isset($doyle_options["style_selector"])&&$doyle_options["style_selector"]) {
			require_once get_template_directory().'/box-style.php';
		}
	?>
	<?php wp_footer(); ?>
</body>