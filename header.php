<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/i/favicon.png">
	<?php wp_head(); ?>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header class="m_box header" id="header">
	<div class="m_box header_top">
		<div class="m_inb">
			<div class="header_weatdate">
				<time class="header_date"></time>
				<!--div class="header_weather">/ погода 
				
				+5</div-->
			</div>
			<a href="<?php bloginfo('url'); ?>/predlozhit-novost/" class="header_addnews">предложить новость</a>
		</div>
	</div>
	<div class="m_box header_middle">
		<div class="m_inb">
			<a href="<?php bloginfo('url'); ?>/" class="header_logo"></a>
			<div class="header_social">
				<ul>
					<li class="fb"><a href="https://www.facebook.com/profile.php?id=100014620054550"></a></li>
					<li class="tw"><a href="https://twitter.com/Oblako36"></a></li>
					<li class="vk"><a href="https://vk.com/film_vrn"></a></li>
					<!--li class="yt"><a href="#"></a></li-->
					<li class="ok"><a href="https://ok.ru/profile/560280133371"></a></li>
					<li class="in"><a href="https://www.instagram.com/oblako.vrn/"></a></li>
				</ul>
			</div>
			<div class="header_exch">
			<?php $url = "http://www.cbr.ru/scripts/XML_daily.asp"; // URL, XML документ, всегда содержит актуальные данные
				$curs = array(); // массив с данными
				 
				// функция полчуния даты из спарсенного XML
				function get_timestamp($date)
				 {
				     list($d, $m, $y) = explode('.', $date);
				     return mktime(0, 0, 0, $m, $d, $y);
				 }
				 
				 
				if(!$xml=simplexml_load_file($url)) die('Ошибка загрузки XML'); // загружаем полученный документ в дерево XML
				$curs['date']=get_timestamp($xml->attributes()->Date); // получаем текущую дату
				 
				foreach($xml->Valute as $m){ // перебор всех значений
				   // для примера будем получать значения курсов лишь для двух валют USD и EUR
				   if($m->CharCode=="USD" || $m->CharCode=="EUR"){
				    $curs[(string)$m->CharCode]=(float)str_replace(",", ".", (string)$m->Value); // запись значений в массив
				   }
				  }
				 
				//print_r($curs); ?>
				<div class="header_exch-doll"><?php echo $curs[USD]; ?></div>
				<div class="header_exch-euro"><?php echo $curs[EUR]; ?></div>
			</div>
		</div>
	</div>
	<div class="m_box header_bottom">
		<div class="m_inb">
			<nav class="header_nav">
				<div class="header_nav-btn">Меню <span></span></div>
				<?php wp_nav_menu('menu_class=header_menu&theme_location=head_nav&container=false'); ?>
				<div class="header_nav-more">Еще...</div>
			</nav>
			<a href="<?php bloginfo('url'); ?>/" class="header_livetv">Прямой эфир</a>
			<div class="header_search-btn"></div>
		</div>
	</div>
	
	<div class="m_box header_search">
		<div class="header_search-close"></div>
		<div class="m_inb">
			<div class="header_search-box">
				<form class="header_search-form" action="/">
					<input id="s" class="header_search-input" name="s" type="text" placeholder="">
					<input type="submit" value="">
				</form>
			</div><!-- /search -->
			<div class="header_search-suggestion">
				<div class="header_search-tags">Метки:</div>
				<div class="header_search-list"></div>
			</div>
		</div>
	</div>
</header><!-- .header-->

<div class="header_nav-hide"><?php wp_nav_menu('menu_class=header_menu&theme_location=head_nav&container=false'); ?></div>