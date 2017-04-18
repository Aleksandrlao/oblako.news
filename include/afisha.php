<div class="m_box cont_calendar">
	<div class="m_inb cont_calendar-tabs">
		<div class="cont_calendar-top">
			<div class="cont_head cont_calendar-head">КАЛЕНДАРЬ МЕРОПРИЯТИЙ</div>
			<div class="cont_calendar-date">
				<ul class="cont_calendar-tabs__caption">
				<?php $today = date('d');
					$month = 31;
					for($i = 1; $i <= $month; $i++) {
					if( $i == $today ) {
						echo '<li class="active"><span>'.$i.'</span></li>';
					} else {
						echo '<li><span>'.$i.'</span></li>';
					}
				} ?>
				</ul>
			</div>
		</div>
		<?php for($i = 1; $i <= $month; $i++) { ?>
		<div class="cont_calendar-bottom cont_calendar-tabs__content<?php if( $i == $today ) { echo ' active'; } ?>">
			<div class="cont_calendar-nav">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/events/" class="active">Все</a></li>
					<li><a href="<?php bloginfo('url'); ?>/events-cat/teatry/">Театры</a></li>
					<li><a href="<?php bloginfo('url'); ?>/events-cat/kontserty/">Концерты</a></li>
					<li><a href="<?php bloginfo('url'); ?>/events-cat/kino/">Кино</a></li>
				</ul>
			</div>
			<div class="cont_calendar-list">
			<?php $filter_date = strtotime(get_the_date($i.'-m-Y')); echo $filter_date;  echo date('d.m.Y', $filter_date);
			$args = array( 'posts_per_page' => 4, 'post_type' => 'events', 
				'meta_key' => 'wpcf-events-date', 'meta_value' => $filter_date, 'post_status' => 'publish' ); 
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
				<?php if (file_exists(TEMPLATEPATH.'/loop-event.php')) {require(TEMPLATEPATH.'/loop-event.php');}; ?>
			<?php } } else {
			echo '<div class="cont_calendar-not">'.get_the_date($i.'-m-Y').' - в этот день нет событий</div>';
			} wp_reset_postdata(); ?>
			</div>
		</div>
		<?php } ?>
		

		
	</div>
</div>

<div id="app"></div>