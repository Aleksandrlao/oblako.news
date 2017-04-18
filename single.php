<?php get_header(); ?>

<div class="m_box cont_single">
	<div class="m_inb">
		<div class="cont_box">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="cont_single-data">
				<div class="cont_single-date"><?php echo get_the_date('d.m.Y'); ?></div>
				<div class="cont_single-popul">
					<div class="cont_single-views"><?php echo 100 + get_post_meta ($post->ID,'views',true); ?></div>
					<div class="cont_single-commnum"><?php comments_number('0', '1', '%'); ?></div>
				</div>
			</div>
			<div class="cont_txt">
				<?php the_content(); ?>
			</div>
			<div class="cont_single-soc">
				<div class="cont_single-sochead">ПОДЕЛИТЬСЯ</div>
				<div class="cont_single-socbody">
					<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="//yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
				</div>
			</div>
		<?php endwhile; else : endif; ?>
			<div class="cont_single-ads"><a href="#"><img src="http://oblako.alao-web.ru/wp-content/uploads/2017/02/single-ads.jpg" alt="ads"></a></div>

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

<div class="m_box cont_singlebg cont_singlevideo">
	<div class="m_inb">
		<div class="cont_head">ВИДЕООБЗОРЫ</div>
		<div class="cont_box">
			<div class="cont_mainbot-list cont_singlevideo-list">
			<?php $args = array( 'posts_per_page' => 3, 'cat' => '55', 'post_status' => 'publish' ); 
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
			<?php $args = array( 'posts_per_page' => 6, 'post_status' => 'publish' ); 
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

<div class="m_box cont_singlebg cont_singleexpert">
	<div class="m_inb">
		<div class="cont_head">МНЕНИЯ ЭКСПЕРТОВ</div>
		<div class="cont_box">
			<div class="cont_mainbot-list cont_singleexpert-list">
			<?php $args = array( 'posts_per_page' => 3, 'cat' => 6, 'post_status' => 'publish' ); 
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
			<?php $args = array( 'posts_per_page' => 6, 'offset' => 6, 'post_status' => 'publish' ); 
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


<?php get_footer(); ?>