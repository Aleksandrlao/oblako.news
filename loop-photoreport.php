<div class="cont_phorep">
<?php if( $first_photoreport ) { ?>
	<a href="<?php the_permalink(); ?>">
		<span class="cont_phorep-thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				echo get_img_theme($image_url[0], 440, 340); ?>" alt="<?php the_title(); ?>"></span>
	</a>
	<div class="cont_phorep-info">
		<a href="<?php the_permalink(); ?>" class="cont_phorep-title"><?php the_title(); ?></a>
		<div class="cont_phorep-date"><?php echo get_the_date('d.m.Y'); ?></div>
		<div class="cont_phorep-txt"><?php global $more; $more = 0; echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></div>
		<div class="cont_phorep-more"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
	</div>
<?php } else { ?>
	<a href="<?php the_permalink(); ?>">
		<span class="cont_phorep-thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				echo get_img_theme($image_url[0], 300, 210); ?>" alt="<?php the_title(); ?>"></span>
		<span class="cont_phorep-title"><?php the_title(); ?></span>
	</a>
	<div class="cont_phorep-date"><?php echo get_the_date('d.m.Y'); ?></div>
<?php } ?>
</div>