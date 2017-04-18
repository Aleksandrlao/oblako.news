<?php remove_action('wp_head', 'wp_generator');

// добавление скриптов
function enqueue_scripts() {
	/** REGISTER jQuery **/
//	wp_register_script( 'jquery-google', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// Длина цитаты
function custom_excerpt_length() {
     $length = 50;
     return $length;
}
 add_filter('excerpt_length', 'custom_excerpt_length');
 

// Добавление превью на страницу категорий
 if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
 
 // Регистрация меню
function register_my_menus(){
 	register_nav_menus( array( 'head_nav' => 'Меню в Шапке' ) );
} add_action( 'init', 'register_my_menus' );
    

// Добавляю сайдбары
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Сайдбар слева',
	'before_widget' => '<div class="s_box">',
	'after_widget' => '</div>',
	'before_title' => '<div class="s_head">',
	'after_title' => '</div>',
));

add_filter( 'post_thumbnail_html', 'remove_width_and_height_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_and_height_attribute', 10 );
function remove_width_and_height_attribute( $html ) {
   return preg_replace( '/(height|width)="\d*"\s/', "", $html );
}

// Обрезание картинки
function get_img_theme($url, $width, $height){
    $img_name=explode('/', $url);
    $file_url= '/wp-content/uploads/'.$img_name[count($img_name)-3].'/'.$img_name[count($img_name)-2].'/';
    $file_name=explode('.', $img_name[count($img_name)-1]);
    $file_name=$file_name[0].'-'.$width.'x'.$height.'.'.$file_name[1];
    if(file_exists($file_url.$file_name))
        return $file_url.$file_name;
    else{
        $image = wp_get_image_editor(ABSPATH.$file_url.$img_name[count($img_name)-1]);
        if ( ! is_wp_error($image)){
            $image->resize($width, $height, true );
            $image->save(ABSPATH.$file_url.$file_name);
            $blogurl = get_bloginfo('url');
            return $blogurl.$file_url.$file_name;
        }
    }
}


function galleryStartPage() {
    global $post;
    return '<div class="cont_photo-slider">';
}
add_shortcode("gallery-start", "galleryStartPage");

function galleryFinishPage() {
    global $post;
    return '</div>';
}
add_shortcode("gallery-finish", "galleryFinishPage");



/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews() {

/* ------------ Настройки -------------- */
$meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
$who_count      = 1;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

global $user_ID, $post;
    if(is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id,$meta_key, true);
        $should_count = false;
        switch( (int)$who_count ) {
            case 0: $should_count = true;
                break;
            case 1:
                if( (int)$user_ID == 0 )
                    $should_count = true;
                break;
            case 2:
                if( (int)$user_ID > 0 )
                    $should_count = true;
                break;
        }
        if( (int)$exclude_bots==1 && $should_count ){
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
                $should_count = false;
        }

        if($should_count)
            if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}



function dateToRussian($date) {
    $month = array("january"=>"января", "february"=>"февраля", "march"=>"марта", "april"=>"апреля", "may"=>"мая", "june"=>"июня", "july"=>"июля", "august"=>"августа", "september"=>"сентября", "october"=>"октября", "november"=>"ноября", "december"=>"декабря");
    $days = array("monday"=>"Понедельник", "tuesday"=>"Вторник", "wednesday"=>"Среда", "thursday"=>"Четверг", "friday"=>"Пятница", "saturday"=>"Суббота", "sunday"=>"Воскресенье");
    return str_replace(array_merge(array_keys($month), array_keys($days)), array_merge($month, $days), strtolower($date));
}





