<div class="cont_expert">
	<a href="<?php the_permalink(); ?>">
		<span class="cont_expert-thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				echo get_img_theme($image_url[0], 270, 410); ?>" alt="<?php the_title(); ?>"></span>
		<span class="cont_expert-info">
			<span class="cont_expert-author"></span>
			<span class="cont_expert-title"><?php the_title(); ?></span>
		</span>
	</a>
</div>