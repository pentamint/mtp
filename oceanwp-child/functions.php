<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


/* -------------------------------------------------------------
 * 자식 테마 Assets
** ------------------------------------------------------------- */ 
function child_theme_css() {
    //wp_enqueue_style( 'child-css', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ) );
    wp_enqueue_style( 'child-css', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), filemtime( get_stylesheet_directory() . '/style.css' ) );

    wp_enqueue_script( 'child-js', get_stylesheet_directory_uri() . '/js/child-theme.js', array('jquery'), filemtime( get_stylesheet_directory() . '/js/child-theme.js' ), true );
    wp_localize_script('child-js', 'siteInfo', array(
            'url' => get_site_url(),
            'is_logged_in' => is_user_logged_in()
        )
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_css', 20 );

// 에디터 스타일
add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.css' );


/* -------------------------------------------------------------
 * include
** ------------------------------------------------------------- */
require_once get_stylesheet_directory() . '/inc/template-tags.php';

require_once get_stylesheet_directory() . '/inc/add-insert-contents.php';

//require_once get_stylesheet_directory() . '/inc/mt-finder.php';


/* ----------------------------------------------------------
 * dns_prefetch
 * ---------------------------------------------------------- */
function rk_dns_prefetch() {
    echo '<link rel="dns-prefetch" href="//www.google-analytics.com" />';

    if( is_front_page() ) {
        echo '<link rel="preload" href="' . home_url() . '/wp-content/uploads/2019/02/main_render_fs-2-compressor.jpg" as="image" />';
	}
}
add_action( 'wp_head', 'rk_dns_prefetch', 0 );


/* ----------------------------------------------------------
 * SEO > meta 태그 삽입
 * ---------------------------------------------------------- */
function rk_add_site_meta_tag() {
?>
<meta name="author" content="먹튀폴리스" />
<meta name="keywords" content="먹튀,먹튀폴리스,먹튀 폴리스,먹폴,먹튀사이트 검증 업체,먹튀 검증,안전놀이터,스포츠토토,사설토토" />
<?php
}
add_action( 'wp_head', 'rk_add_site_meta_tag' );


/* ----------------------------------------------------------
 * KBoard > 이벤트 공지
 * ---------------------------------------------------------- */
function rk_change_heading_tag( $heading ) {
    if( is_page(13929) ) {
        $heading = 'h2';
    }
    return $heading;
}
add_filter( 'ocean_page_header_heading', 'rk_change_heading_tag' );


/* ----------------------------------------------------------
 * Contact Form 7
 * ---------------------------------------------------------- */
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function rk_load_contact_assets() {
    if( is_page('service-center') && function_exists('wpcf7_enqueue_styles') ) {
        wpcf7_enqueue_styles();
        wpcf7_enqueue_scripts();
    }
}
add_action( 'template_redirect', 'rk_load_contact_assets' );


function example_wp_mail_from( $original_email_address ) { 
    return 'wordpress@mt-police.com'; 
}
add_filter( 'wp_mail_from', 'example_wp_mail_from' );


/*--------------------------------------
 * 로그인 로고 변경
 *--------------------------------------*/
function change_login_logo() {
	?>
    <style type="text/css">
        body {
            /*background-color: #222 !important;*/
            background: url(/wp-content/uploads/2018/05/bg_all.jpg) no-repeat !important;
        }
        #nav, #backtoblog {
            color: #ccc !important;
            background-color: #000;
            padding: 5px 10px !important;
            font-size: 1.1em !important;
        }
        #nav a, #backtoblog a {
            color: #eee !important;
        }
        #nav a:first-child {
            color: #8bc5e0 !important;
        }
        .login form {
            background: #eae9e3 !important;
        }
		body.login div#login h1 a {
			background-image: url(/wp-content/uploads/2017/10/logo.png);
			background-size: auto;
			width: 200px;
		}
	</style>
<?php
}
add_action( 'login_enqueue_scripts', 'change_login_logo' );


/*--------------------------------------
 * 번역 - 로그인 화면
 *--------------------------------------*/
function rk_retranslation( $translated ) {
    if( !is_admin() ) {
        $translated = str_replace( '사용자명 또는 이메일 주소', '아이디 또는 이메일 주소', $translated );
        $translated = str_replace( '암호를 분실하셨나요?', '비밀번호 찾기', $translated );
        return $translated;
    }
    return $translated;
}
add_filter( 'gettext', 'rk_retranslation' );


/*--------------------------------------
* wp-login.php
*--------------------------------------*/
function rk_login_url() { return home_url(); }
add_filter('login_headerurl', 'rk_login_url');

function rk_login_title() { return get_option('blogname'); }
add_filter('login_headertitle', 'rk_login_title');