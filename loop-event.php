<div class="cont_event">
	<?php $terms = wp_get_post_terms( $post->ID, 'events-cat');
	foreach ($terms as $term) {
	    echo '<a href="'.get_term_link($term->slug, 'events-cat').'" class="cont_event-tag">'.$term->name.'</a>';
	} ?>
	<a href="<?php the_permalink(); ?>"  class="cont_event-link">
		<span class="cont_event-thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				echo get_img_theme($image_url[0], 260, 160); ?>" alt="<?php the_title(); ?>"></span>
		<span class="cont_event-title"><?php the_title(); ?></span>
	</a>
	<div class="cont_event-info"><?php 
		$event_date = get_post_meta($post->ID, 'wpcf-events-date', 1); echo date('d.m.Y', $event_date); ?> - <?php 
		echo get_post_meta($post->ID, 'wpcf-events-time', 1); ?></div>
	<a href="<?php the_permalink(); ?>" class="cont_event-more">подробнее</a>
</div>