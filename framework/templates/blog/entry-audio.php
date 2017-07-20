<?php
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$audio_type = isset($post_options['audio_type']['type'])?$post_options['audio_type']['type']:'';
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<h3 class="bt-title"><?php the_title(); ?></h3>
		<div class="bt-media <?php echo esc_attr($format); ?>">
			<?php
				if($audio_type == 'html5') {
					$audio_format = isset($post_options['audio_type']['html5']['format'])?$post_options['audio_type']['html5']['format']:'';
					$audio_src = isset($post_options['audio_type']['html5']['src'])?$post_options['audio_type']['html5']['src']:'';
					if($audio_src){
						echo '<audio controls>
								<source src="'.esc_url($audio_src).'" type="'.esc_attr($audio_format).'">
							</audio>';
					}else{
						if(has_post_thumbnail()) the_post_thumbnail('full');
					}
				} else {
					$audio_embed = isset($post_options['audio_type']['embed']['iframe'])?$post_options['audio_type']['embed']['iframe']:'';
					if($audio_embed){
						echo '<div class="bt-soundcluond">'.$audio_embed.'</div>';
					}else{
						if(has_post_thumbnail()) the_post_thumbnail('full');
					}
				}
			?>
		</div>
		<ul class="bt-meta">
			<li class="bt-author"><?php echo '<span>'.esc_html__('By: ', 'doyle').'</span>'.get_the_author(); ?></li>
			<li class="bt-public"><?php echo '<span>'.esc_html__('Date: ', 'doyle').'</span>'.get_the_date('M d, Y'); ?></li>
			<li><?php comments_number( '<span>Comment: </span> 0', '<span>Comment: </span> 1', '<span>Comments: </span> %' ); ?></li>
			<li><?php the_terms( get_the_ID(), 'category', '<span>Category: </span>', ', ' ); ?></li>
		</ul>
		<div class="bt-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<a class="bt-readmore" href="<?php the_permalink(); ?>">Read More</a>
	</div>
</article>
