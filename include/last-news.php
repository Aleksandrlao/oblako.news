<div class="m_box cont_lastnews">
	<div class="m_inb">
		<div class="cont_box cont_lastnews-tabs">
			<div class="cont_lastnews-top">
				<div class="cont_lastnews-head cont_head">ПОСЛЕДНИЕ НОВОСТИ</div>
				<nav class="cont_lastnews-nav">
					<ul class="cont_lastnews-tabs__caption">
						<li class="active"><span>ВСЕ НОВОСТИ</span></li>
						<li><span>ПОЛИТИКА</span></li>
						<li><span>ОБЩЕСТВО</span></li>
						<li><span>ПРОИСШЕСТВИЯ</span></li>
						<li><span>КУЛЬТУРА</span></li>
						<li><span>СПОРТ</span></li>
					</ul>
				</nav>
			</div>
			<div class="cont_lastnews-tabs__content active">
				<div class="cont_lastnews-view">
					<div class="cont_lastnews-row">
					<?php $args = array( 'posts_per_page' => 2, 'post_status' => 'publish' ); 
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
					<?php } } else {
					// Постов не найдено
					} wp_reset_postdata(); ?>
					</div>
					<div class="cont_lastnews-list">
					<?php $args = array( 'posts_per_page' => 6, 'offset' => 2, 'post_status' => 'publish' ); 
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
					<?php } } else {
					// Постов не найдено
					} wp_reset_postdata(); ?>
					</div>
				</div>
			</div>

			<?php  $catID_list = ['3', '5', '7', '4', '9'];
			foreach ($catID_list as $catID) { ?>
			<div class="cont_lastnews-tabs__content">
				<div class="cont_lastnews-view">
					<div class="cont_lastnews-row">
					<?php $args = array( 'posts_per_page' => 2, 'cat' => $catID, 'post_status' => 'publish' ); 
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
					<?php } } else {
					// Постов не найдено
					} wp_reset_postdata(); ?>
					</div>
					<div class="cont_lastnews-list">
					<?php $args = array( 'posts_per_page' => 6, 'offset' => 2, 'cat' => $catID, 'post_status' => 'publish' ); 
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
					<?php } } else {
					// Постов не найдено
					} wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
		<div class="cont_side">
			<?php $banner_lastnews = apply_filters('the_content', get_post_meta($post->ID, 'wpcf-banner-last-news', 1) );
			if( $banner_lastnews ) { ?>
			<div class="cont_lastnews-sidebox"><?php echo $banner_lastnews; ?></div>
			<?php } ?>
			<div class="cont_lastnews-sidebox">
				<div class="cont_head cont_lastnews-sidehead">Лента</div>
				<div class="cont_lastnews-sidelist">
				<?php $args = array( 'posts_per_page' => 7, 'post_status' => 'publish' ); 
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
				<div class="cont_lastnews-sideallnews"><a href="http://oblako.news/allnews/">Все новости</a></div>
			</div>
		</div>
	</div>
</div>