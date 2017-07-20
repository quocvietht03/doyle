<?php
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$quote_text = isset($post_options['quote_text'])?$post_options['quote_text']:'';
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<h3 class="bt-title"><?php the_title(); ?></h3>
		<div class="bt-media <?php echo esc_attr($format); ?>">
			<?php
				if($quote_text){
					echo '<blockquote>'.$quote_text.'</blockquote>';
				}else{
					if(has_post_thumbnail()) the_post_thumbnail('full');
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
