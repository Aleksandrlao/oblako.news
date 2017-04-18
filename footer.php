<div class="m_box cont_bottom">
	<div class="m_inb">
		<div class="cont_box">
			<?php $banner_footerleft = apply_filters('the_content', get_post_meta($post->ID, 'wpcf-banner-footerleft', 1) );
			if( $banner_footerleft ) { ?>
			<div class="cont_bottom-ads"><?php echo $banner_footerleft; ?></div>
			<?php } ?>
			<div class="cont_bottom-subscrube">
				<div class="cont_bottom-subshead">Подпишитесь и получайте <span>подборки лучших статей</span></div>
				<div class="cont_bottom-subsform">
					<form action="">
						<input type="text" name="subsc" placeholder="Введите ваш E-mail">
						<input type="submit" value="Подписаться">
					</form>
				</div>
			</div>
		</div>
		<div class="cont_side">
			<?php $banner_footerright = apply_filters('the_content', get_post_meta($post->ID, 'wpcf-banner-footerright', 1) );
			if( $banner_footerright ) { ?>
			<div class="cont_bottom-sidebox"><?php echo $banner_footerright; ?></div>
			<?php } ?>
		</div>
	</div>
</div>

<footer class="m_box footer">
	<div class="m_box footer_top">
		<div class="m_inb">
			<a href="<?php bloginfo('url'); ?>/" class="footer_logo">Облако</a>
			<div class="footer_copy">2016 - 2017 - Облако. <span>Новости Воронежа и региона</span></div>
			<div class="footer_discleimer"></div>
		</div>
	</div>
	<div class="m_box footer_bottom">
		<div class="m_inb">
			<div class="footer_mobile">Мобильная версия</div>
			<div class="footer_reg">Сетевое издание «Облако» зарегистрировано в Федеральной службе по надзору в сфере связи, информационных технологий и массовых коммуникаций 28.02.2017 г. <br>Свидетельство о регистрации ЭЛ № ФС 77 - 68819</div>
			<a href="http://i-vanka.ru" class="footer_made"></a>
		</div>
	</div>
</footer><!-- .footer -->

<div class="cont_uptop goto" data-scroll="header"></div>

<div class="m_nav">
	<?php wp_nav_menu('menu_class=header_menu&theme_location=head_nav&container=false'); ?>
</div>
<div class="m_nav-close"></div>


<div class="m_hide"></div>

<?php wp_footer(); /* ?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/salvattore.min.js"></script> <?php */?>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>

</body>
</html>