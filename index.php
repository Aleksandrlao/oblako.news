<?php get_header(); ?>

<div class="m_box cont_start">
	<div class="m_inb">
		<div class="cont_start-main">
		<?php $args = array( 'posts_per_page' => 1, 'post_type' => 'post', 'post_status' => 'publish', 'cat' => '-6, -54, -55, -10',
				'meta_key' => 'wpcf-fixed-news', 'meta_value' => '1', 'meta_compare' => '=' ); 
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
			<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
		<?php } } else {
		// Постов не найдено
		} wp_reset_postdata(); ?>
		</div>
		<div class="cont_start-list">
		<?php $args = array( 'posts_per_page' => 3, 'post_type' => 'post', 'post_status' => 'publish', 'cat' => '-6, -54, -55, -10',
				 'meta_key' => 'wpcf-fixed-news', 'meta_value' => '1', 'meta_compare' => '=', 'offset' => 1 ); 
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
			<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
		<?php } } else {
		// Постов не найдено
		} wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<div class="m_box cont_excl">
	<div class="m_inb">
		<div class="cont_excl-head cont_head">ЭКСКЛЮЗИВ</div>
		<div class="cont_excl-list">
		<?php $args = array( 'posts_per_page' => 3, 'cat' => 10, 'post_status' => 'publish' ); 
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
			<?php if (file_exists(TEMPLATEPATH.'/loop.php')) {require(TEMPLATEPATH.'/loop.php');}; ?>
		<?php } } else {
		// Постов не найдено
		} wp_reset_postdata(); ?>
		</div>
	</div>
</div>


<?php if (file_exists(TEMPLATEPATH.'/include/last-news.php')) {require(TEMPLATEPATH.'/include/last-news.php');}; ?>

<?php $banner_main = apply_filters('the_content', get_post_meta($post->ID, 'wpcf-banner-main', 1) );
if( $banner_main ) { ?>
<div class="m_box cont_adsmain">
	<div class="m_inb"><?php echo $banner_main; ?></div>
</div>
<?php } ?>

<div class="m_box cont_mainbot">
	<div class="m_inb">
		<div class="cont_box">
			<div class="cont_videoobzori">
				<div class="cont_head cont_mainbot-head">ВИДЕООБЗОРЫ</div>
				<div class="cont_mainbot-list">
				<?php $args = array( 'posts_per_page' => 3, 'cat' => '55', 'post_status' => 'publish' ); 
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
					<?php if (file_exists(TEMPLATEPATH.'/loop-video.php')) {require(TEMPLATEPATH.'/loop-video.php');}; ?>
				<?php } } else {
				// Постов не найдено
				} wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="cont_head cont_mainbot-head">МНЕНИЯ ЭКСПЕРТОВ</div>
			<div class="cont_mainbot-list">
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
			<div class="cont_mainbot-infograf">
				<a href="http://oblako.news/infografika/" class="cont_mainbot-infografhead">Инфографика</a>
			<?php $args = array( 'posts_per_page' => 1, 'post_type' => 'infografika', 'post_status' => 'publish' ); 
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
			<?php $banner_infogr = apply_filters('the_content', get_post_meta($post->ID, 'wpcf-banner-infogr', 1) );
			if( $banner_infogr ) { ?>
			<div class="cont_mainbot-ads"><?php echo $banner_infogr; ?></div>
			<?php } ?>
		</div>
	</div>
</div>


<?php if (file_exists(TEMPLATEPATH.'/include/afisha.php')) {require(TEMPLATEPATH.'/include/afisha.php');}; ?>


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