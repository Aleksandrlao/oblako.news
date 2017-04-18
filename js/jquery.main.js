jQuery(document).ready(function($) {

// date
	function nowDate() {

		Data = new Date();
		Month = Data.getMonth();
		Day = Data.getDate();
		 
		switch (Month) {
			case 0: fMonth="января"; break;
			case 1: fMonth="февраля"; break;
			case 2: fMonth="марта"; break;
			case 3: fMonth="апреля"; break;
			case 4: fMonth="мае"; break;
			case 5: fMonth="июня"; break;
			case 6: fMonth="июля"; break;
			case 7: fMonth="августа"; break;
			case 8: fMonth="сентября"; break;
			case 9: fMonth="октября"; break;
			case 10: fMonth="ноября"; break;
			case 11: fMonth="декабря"; break;
		}

		Hour = Data.getHours();
		Minutes = (Data.getMinutes()<10?'0':'') + Data.getMinutes();

		return Hour+":"+Minutes+" "+Day+" "+fMonth;

	}

	$('.header_date').text( nowDate() );


// scroll to
	$("body").on('click', '.goto', function(e){
		var fixed_offset = 20;
		var scrollTo = $(this).data('scroll');
		if( $(this).hasClass('side-goto') ) {
			$('.container, .c_side-menu').removeClass('open-sidebar');
			$('.h_nav').removeClass('active');
		}
		$('html,body').stop().animate({ scrollTop: $('#'+scrollTo).offset().top - fixed_offset }, 1000);
		e.preventDefault();
	});


// slide to top
	var goUp = function(){
		var $goUp = $('.cont_uptop');
		var show = function(){
			var scrollTop = $(window).scrollTop() + $(window).height();
			if ( scrollTop > 1600){
				$goUp.addClass('visible');
			}else{
				$goUp.removeClass('visible');
			}
		}
		show();

		$(window).on('scroll', function(){
		  show();
		}); 
	};
	goUp();


// header nav
	$('.header_nav li.menu-item-has-children').on('hover', function(event) {
		event.preventDefault();
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		$('.m_hide').addClass('active');
	});
	$('.m_hide').on('hover', function(event) {
		event.preventDefault();
		$(this).removeClass('active');
		$('.header_nav li').removeClass('active');
	});


	$('.header_nav-more').on('click', function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$('.header_nav-hide').toggleClass('active');
	});

	$('.header_nav-btn').on('click', function(event) {
		event.preventDefault();
		$('.m_nav, .m_hide').addClass('nav-active');
	});
	$('.m_hide, .m_nav-close').on('click', function(event) {
		event.preventDefault();
		$(this).removeClass('nav-active');
		$('.m_nav').removeClass('nav-active');
	});
	$('.m_nav li.menu-item-has-children > a').one("click", function(event){
		event.preventDefault();
		$(this).parents('li').siblings().children('ul.sub-menu').removeClass('sub-active');
		$(this).siblings('ul.sub-menu').addClass('sub-active');
	});


// search
	$('.header_search-btn').on('click', function(event) {
		event.preventDefault();
		$('.header_search, .m_hide').toggleClass('active-search');
	});
	$('.m_hide, .header_search-close').on('click', function(event) {
		event.preventDefault();
		$('.header_search, .m_hide').removeClass('active-search');
	});

// afisha tabs
/*	$('.cont_calendar-date li').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active').siblings('li').removeClass('active');
	}); */
	$('ul.cont_calendar-tabs__caption').each(function() {
		$(this).find('li').each(function(i) {
			$(this).click(function(){
				$(this).addClass('active').siblings().removeClass('active')
					.closest('div.cont_calendar-tabs').find('div.cont_calendar-tabs__content').removeClass('active').eq(i).addClass('active');
			});
		});
	});


// last news tabs
	$('ul.cont_lastnews-tabs__caption').each(function() {
		$(this).find('li').each(function(i) {
			$(this).click(function(){
				$(this).addClass('active').siblings().removeClass('active')
					.closest('div.cont_lastnews-tabs').find('div.cont_lastnews-tabs__content').removeClass('active').eq(i).addClass('active');
			});
		});
	});


// social share btn
	$('.cont_single-sochead').on('click', function(event) {
		$('.cont_single-socbody').toggleClass('active');
	});


// photoreport slider
	$('.cont_photo-slider').slick({
		dots: true, arrows: true, infinite: true, speed: 1200, fade: true, cssEase: 'linear', slidesToShow: 1, slidesToScroll: 1, 
		autoplay: true, autoplaySpeed: 3000, adaptiveHeight: true
	});



});

