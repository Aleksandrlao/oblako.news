<?php /*
Template name: Все новости
*/get_header(); ?>

<div class="m_box cont_lastnews">
	<div class="m_inb">
		<div class="cont_box cont_lastnews-tabs">
			<h1><?php the_title(); ?></h1>
			<div class="cont_lastnews-view">
				<div class="cont_lastnews-list">
				<?php $args = array( 'posts_per_page' => -1, 'post_type' => 'post', 'post_status' => 'publish' ); 
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
					<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
				<?php } } else {
				// Постов не найдено
				} wp_reset_postdata(); ?>
				</div>
			</div>			
		</div>
		<div class="cont_side">
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
</div>

<?php get_footer(); ?>