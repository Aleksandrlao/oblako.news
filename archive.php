<?php get_header();
$cat_ID = get_queried_object_id(); // id category ?>

<div class="m_box cont_single">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_photoreport-main">
			<?php $args = array( 'posts_per_page' => 1, 'cat' => $cat_ID, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = true;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
			<div class="cont_photoreport-list cont_singlephorep-list">
			<?php $args = array( 'posts_per_page' => 3, 'offset' => 1, 'cat' => $cat_ID, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = false;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_single-sidehead">СЕЙЧАС ЧИТАЮТ</div>
			<div class="cont_single-sidelist">
			<?php $args = array( 'posts_per_page' => 5, 'post_status' => 'publish' ); 
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

<div class="m_box cont_adsmain">
	<div class="m_inb">
		<a href="#"><img src="http://oblako.alao-web.ru/wp-content/uploads/2017/02/bg-adsmain.jpg" alt="ads"></a>
	</div>
</div>

<div class="m_box cont_single">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_photoreport-list cont_singlephorep-list">
			<?php $args = array( 'posts_per_page' => 6, 'offset' => 4, 'cat' => $cat_ID, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = false;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_single-sidelist">
			<?php $args = array( 'posts_per_page' => 5, 'offset' => 5, 'post_status' => 'publish' ); 
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

<div class="m_box cont_singlebg cont_singlevideo">
	<div class="m_inb">
		<div class="cont_head">ВИДЕООБЗОРЫ</div>
		<div class="cont_box">
			<div class="cont_mainbot-list cont_singlevideo-list">
			<?php $args = array( 'posts_per_page' => 3, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-video.php')) {require(TEMPLATEPATH.'/loop-video.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<a href="#"><img src="http://oblako.alao-web.ru/wp-content/uploads/2017/02/zara.jpg" alt="zara"></a>
		</div>
	</div>
</div>


<div class="m_box cont_singlephorep">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_photoreport-list cont_singlephorep-list">
			<?php $args = array( 'posts_per_page' => 6, 'offset' => 7,'cat' => $cat_ID, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = false;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_single-sidelist">
			<?php $args = array( 'posts_per_page' => 5, 'offset' => 10, 'post_status' => 'publish' ); 
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

<div class="m_box cont_singlebg cont_singleexpert">
	<div class="m_inb">
		<div class="cont_head">МНЕНИЯ ЭКСПЕРТОВ</div>
		<div class="cont_box">
			<div class="cont_mainbot-list cont_singleexpert-list">
			<?php $args = array( 'posts_per_page' => 3, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-expert.php')) {require(TEMPLATEPATH.'/loop-expert.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_bottom-sidebox"><a href="#"><img src="http://oblako.alao-web.ru/wp-content/uploads/2017/02/report-ads.jpg" alt="ads"></a></div>
		</div>
	</div>
</div>

<div class="m_box cont_singlephorep">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_photoreport-list cont_singlephorep-list">
			<?php $args = array( 'posts_per_page' => 6, 'offset' => 13, 'cat' => $cat_ID, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args ); $first_photoreport = false;
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-photoreport.php')) {require(TEMPLATEPATH.'/loop-photoreport.php');}; ?>
			<?php } } else {
			// Постов не найдено
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="cont_side">
			<div class="cont_single-sidelist">
			<?php $args = array( 'posts_per_page' => 5, 'offset' => 15, 'post_status' => 'publish' ); 
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