<div class="cont_video">
	<a href="<?php the_permalink(); ?>">
		<span class="cont_video-thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				echo get_img_theme($image_url[0], 800, 500); ?>" alt="<?php the_title(); ?>"></span>
		<span class="cont_video-title"><?php the_title(); ?></span>
	</a>
</div>