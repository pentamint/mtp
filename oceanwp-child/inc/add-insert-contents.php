<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


/* --------------------------------------
 * single post > 목록 보기, 하단 문구
** --------------------------------------*/
function rk_add_list_btn() {
    if( is_singular('post') ) {

        global $post;
        $category = get_the_category( $post->ID );
        //$cat_name = $category[0]->cat_name;
        $list_btn = '<div class="cat-list-btn"><a href="' . get_category_link($category[0]->term_id) . '">목록 보기</a></div>';

        echo $list_btn;
    }
}
add_filter( 'ocean_social_share', 'rk_add_list_btn' );


function add_single_footer_content() {   

    if( ! is_singular('post') ) return;

    if( in_category( array( 25, 166 ) ) ) { // 먹튀사이트, 먹폴 픽방 => 스포츠분석
        $post = get_post(15531);

        echo '<aside class="single-footer-content">' . wpautop($post->post_content) . '</aside>';
    }
    elseif( in_category( '26' ) ) { // 신규사이트
        $post = get_post(15534);

        echo '<aside class="single-footer-content">' . wpautop($post->post_content) . '</aside>';
    }
}
add_filter( 'ocean_social_share', 'add_single_footer_content', 11 );


/* -------------------------------------------------------------
 * 본문
** ------------------------------------------------------------- */
function modify_post_contents( $text ) {

    $replace = array(
        '<h1'   =>  '<p',
        '</h1'  =>  '</p'
    );
    $text = str_replace( array_keys($replace), $replace, $text );

    // 인라인 css 제거
    //$text = str_replace( ' style="', ' data-style="', $text);

    return $text;
}
//add_filter( 'the_content', 'modify_post_contents' );


/* --------------------------------------
 * 스포츠분석 (먹폴 픽방) > 태그 분류
** --------------------------------------*/
function rk_add_rewrite_rules() {

    add_rewrite_rule( '^cat/([^/]+)/tag/([^/]+)/page/([0-9]{1,})/?', 'index.php?cat=$matches[1]&tag=$matches[2]&paged=$matches[3]', 'top' );

    add_rewrite_rule( '^cat/([^/]+)/tag/([^/]+)', 'index.php?cat=$matches[1]&tag=$matches[2]', 'top' );

}
add_action( 'init', 'rk_add_rewrite_rules' );


/* -------------------------------------------------------------
 * 카테고리를 게시판 형식으로 표현
 * https://www.mt-police.com/wp-content/uploads/2018/10/banner_category.mp4
 * <a href="http://bamtokitv.com/" target="_blank" title="밤토끼 티비 바로가기">
        <video width="847" height="120" autoplay muted loop>
            <source src="https://www.mt-police.com/wp-content/uploads/2018/12/tv-streaming.mp4" type="video/mp4">
            사용하는 웹브라우저가 동영상을 지원하지 않습니다.
        </video>
    </a>
** ------------------------------------------------------------- */
function add_like_bbs_head() {
    if( ! is_category() ) return;

    if( is_category( 29 ) ) { // 안전검증업체 => 안전놀이터
?>
<div class="banner_category">
    <a href="https://www.mt-police.com/필독-★인증업체-계약종료-긴급안내★/" title="먹튀폴리스 인증업체 계약종료 안내"><img src="https://www.mt-police.com/wp-content/uploads/2019/03/gumzeung-compressor.gif" alt="먹튀폴리스 안전놀이터"></a>
</div>
<?php
    }
    elseif( is_category( '먹튀사이트' ) ) {
?>
<div class="banner_category">
    <a href="https://www.mt-police.com/먹튀폴리스-먹튀-제보-방법-위로금-지급-규정-안내-필/" title="먹튀폴리스 먹튀 제보 방법 안내"><img src="https://www.mt-police.com/wp-content/uploads/2019/01/notice-contact-optimize.gif" alt="먹튀폴리스 공지"></a>
</div>
<?php
    }
    else {
?>
<div class="banner_category">
    <a href="http://www.mt-police.com/livescore/스포츠중계-해외축구중계-mlb중계-nba중계/" title="스포츠 중계방송 라이브 보기"><img width="847" height="120" src="https://www.mt-police.com/wp-content/uploads/2018/12/m-banner-compress.gif" alt="스포츠 중계방송 라이브" class="alignnone wp-image-14560" /></a>
</div>
<?php
    }
    if( is_category( '공지사항' ) || is_category( '스포츠분석' ) ) { // 먹폴 픽방 => 스포츠분석
        if( is_category( '스포츠분석' ) ) {
            echo '<ul class="tab-btn-wrap">
                    <li class="tab-btn"><a href="https://www.mt-police.com/토토사이트-스포츠분석/">All</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/축구/">축구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/야구/">야구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/농구/">농구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/배구/">배구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/하키/">하키</a></li>
                </ul>';
        }
?>
<ul class="bbs_head">
    <li class="bbs_title bbs_li">제목</li>
    <li class="bbs_author bbs_li">작성자</li>
    <li class="bbs_date bbs_li">작성일</li>
</ul>
<?php
    }
}
add_action( 'ocean_before_content_inner', 'add_like_bbs_head', 11 );


/*------------------------------------------
 * 공지, 먹폴 팍방 카테고리 > 출력 갯수 조정
**------------------------------------------ */
function rk_change_posts_per_page( $query ) {
	if ( is_category( '공지사항' ) || is_category( 166 ) ) { // 먹폴 픽방 => 스포츠분석
        $query->set( 'posts_per_page', 20 );
        return;
    }
}
add_action( 'pre_get_posts', 'rk_change_posts_per_page', 1 );

function rk_sidebar_remove_action() {
    remove_action( 'pre_get_posts', 'rk_change_posts_per_page', 1 );
}
add_action( 'dynamic_sidebar_before', 'rk_sidebar_remove_action' );

function rk_sidebar_add_action() {
    add_action( 'pre_get_posts', 'rk_change_posts_per_page', 1 );
}
add_action( 'dynamic_sidebar_after', 'rk_sidebar_add_action' );


/* -------------------------------------------------------------
 * 푸터 > 네비게이션
** ------------------------------------------------------------- */
function add_footer_navi() {
    if( !is_front_page() ) {
?>
<nav class="footer-navi" role="navigation">
    <?php wp_nav_menu( array( 'menu' => 'Main nav' ) ); ?>
</nav>
<?php
    }
}
add_action( 'ocean_before_footer', 'add_footer_navi' );


/* -------------------------------------------------------------
 * 라이브스코어 > livescore/스포츠중계-해외축구중계-mlb중계-nba중계 (먹폴티비)
** ------------------------------------------------------------- */
function add_footer_tv_assets() {
    if( is_page(14020) ) {
?>
<script async id="ccScript" data-ifr="player" src="http://ext.crowncast.net/js"></script>
<?php
    }
}
//add_action( 'wp_footer', 'add_footer_tv_assets' );


function add_cors_http_header() {
    if( is_page( 14020 ) ) { // tv
        // header('Cache-Control: no-cache, no-store, must-revalidate');
        // header('Pragma: no-cache');
        // header('Expires: 0');
        // header( 'Access-Control-Allow-Origin: *' );

        wp_die( 'test' );
    }
}
//add_action( 'send_headers', 'add_cors_http_header' ); // send_headers