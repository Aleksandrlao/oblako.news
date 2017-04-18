<?php get_header(); ?>

<div class="m_box cont_calendar">
	<div class="m_inb cont_calendar-tabs">
		<div class="cont_calendar-top">
			<div class="cont_head cont_calendar-head"><?php single_term_title(); ?></div>
		</div>
		<div class="cont_calendar-bottom cont_calendar-tabs__content active">
			<div class="cont_calendar-nav">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/events/">Все</a></li>
					<li><a href="<?php bloginfo('url'); ?>/events-cat/teatry/">Театры</a></li>
					<li><a href="<?php bloginfo('url'); ?>/events-cat/kontserty/">Концерты</a></li>
					<li><a href="<?php bloginfo('url'); ?>/events-cat/kino/">Кино</a></li>
				</ul>
			</div>
			<div class="cont_calendar-list">
			<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			$args = array( 
				'posts_per_page' => -1, 
				'post_type' => 'events',
				'tax_query' => array(
					array(
						'taxonomy' => 'events-cat',
						'field' => 'slug',
						'terms' => $term->slug
					)
				),
				'orderby' => 'meta_value_num', 
				'order' => 'ASC', 
				'meta_key' => 'wpcf-events-date', 
				'post_status' => 'publish' ); 
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-event.php')) {require(TEMPLATEPATH.'/loop-event.php');}; ?>
			<?php } } else {
			echo '<div class="cont_calendar-not">'.get_the_date($i.'-m-Y').' - в этот день нет событий</div>';
			} wp_reset_postdata(); ?>
			</div>
		</div>
		
	</div>
</div>

<div id="app"></div>


<div class="m_box cont_photoreport">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_head cont_photoreport-head">ФОТОРЕПОРТАЖ</div>
			<div class="cont_photoreport-main">
			<?php $args = array( 'posts_per_page' => 1, 'cat' => '54', 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = true;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
			<div class="cont_photoreport-list">
			<?php $args = array( 'posts_per_page' => 3, 'offset' => 1, 'cat' => '54', 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = false;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_photoreport-sidebox">
				<script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>
				<!-- VK Widget -->
				<div id="vk_groups"></div>
				<script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 3, width: "420"}, -201409775);
				</script>
			</div>
			<div class="cont_photoreport-sidebox">
				<div class="fb-page" data-href="https://www.facebook.com/www.adme.ru" data-tabs="timeline" data-width="420" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/www.adme.ru" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/www.adme.ru">AdMe.ru</a></blockquote></div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>