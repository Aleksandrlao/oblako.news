<div class="cont_item">
	<a href="<?php the_permalink(); ?>" class="cont_item-thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
			echo get_img_theme($image_url[0], 800, 500); ?>" alt="<?php the_title(); ?>"></a>
	<div class="cont_item-info">
		<div class="cont_item-tag"><?php $categories = get_the_category($post_id);
			if($categories){
				foreach($categories as $category) {	echo '<a href="'. get_category_link($category->term_id) . '">#' . $category->cat_name . '</a>';	}
			} ?></div>
		<div class="cont_item-title__over"><a href="<?php the_permalink(); ?>" class="cont_item-title"><?php the_title(); ?></a></div>
		<time class="cont_item-date"><?php echo dateToRussian(the_time('d F Y, G:i') ); ?></time>
	</div>
</div>