<?php get_header(); ?>

<div class="m_box cont_mainbot archive_infografika">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_mainbot-infograf">
				<h1 class="cont_mainbot-infografhead">Инфографика</h1>
			<?php $args = array( 'posts_per_page' => -1, 'post_type' => 'infografika', 'post_status' => 'publish' ); 
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<div class="cont_mainbot-infografview"><a href="<?php the_permalink(); ?>">
					<img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
							echo get_img_theme($image_url[0], 420, 300); ?>" alt="<?php the_title(); ?>">
				</a></div>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_mainbot-ads"><a href="#"><img src="http://oblako.alao-web.ru/wp-content/uploads/2017/02/bg-dopads.jpg" alt="ads"></a></div>

			<div class="cont_single-sidehead">СЕЙЧАС ЧИТАЮТ</div>
			<div class="cont_single-sidelist">
			<?php $args = array( 'posts_per_page' => 15, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-sidelist.php')) {require(TEMPLATEPATH.'/loop-sidelist.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>