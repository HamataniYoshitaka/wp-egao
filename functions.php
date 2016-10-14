<?
// アイキャッチ画像をON
add_theme_support('post-thumbnails');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => '診療日カレンダー',
        'id' => 'calendar1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
    return 70;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');

// 標準のjQueryの読み込みを止める
if (!is_admin()) {
    add_action('wp_print_scripts','my_deregister_script',100);
    function my_deregister_script() {
        wp_deregister_script('jquery');
    }
}
?>
