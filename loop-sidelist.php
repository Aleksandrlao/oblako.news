<div class="cont_single-sideitem">
	<div class="cont_single-sidetag"><?php $categories = get_the_category($post_id);
			if($categories){
				foreach($categories as $category) {	echo '<a href="'. get_category_link($category->term_id) . '">#' . $category->cat_name . '</a>';	}
			} ?></div>
	<a href="<?php the_permalink(); ?>" class="cont_single-sidetitle"><?php the_title(); ?></a>
	<div class="cont_single-sidedate"><?php echo get_the_date('d.m.Y'); ?></div>
</div>