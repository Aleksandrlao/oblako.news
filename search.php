<?php get_header(); ?>

<div class="m_box cont_lastnews">
	<div class="m_inb">
		<div class="cont_box cont_lastnews-tabs">
			<h1 class="cont_head">Результат поиска: </h1>
			<div class="cont_lastnews-view">
				<div class="cont_lastnews-list">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
				<?php endwhile; else : endif; ?>
				</div>

			</div>			
		</div>
		<div class="cont_side">
			<?php $banner_lastnews = apply_filters('the_content', get_post_meta($post->ID, 'wpcf-banner-last-news', 1) );
			if( $banner_lastnews ) { ?>
			<div class="cont_lastnews-sidebox"><?php echo $banner_lastnews; ?></div>
			<?php } ?>
			<div class="cont_lastnews-sidebox">
				<div class="cont_head cont_lastnews-sidehead">Лента</div>
				<div class="cont_lastnews-sidelist">
				<?php $args = array( 'posts_per_page' => 15, 'post_status' => 'publish' ); 
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
					<div class="cont_lastnews-sideitem">
						<a href="#" class="cont_lastnews-sidetitle"><?php the_title(); ?></a>
						<div class="cont_lastnews-sidedate"><?php echo get_the_date('d/m/Y'); ?></div>
					</div>
				<?php } } else {
				// Постов не найдено
				} wp_reset_postdata(); ?>
				</div>
				<div class="cont_lastnews-sideallnews"><a href="http://oblako.news/all-news/">Все новости</a></div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>