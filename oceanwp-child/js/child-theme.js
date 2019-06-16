jQuery( function($) {

    $(document).ready(function() {

        // 로그인, 회원가입
        $('.topbar-content a').removeAttr('target');
        $('.oceanwp-login').addClass('lrm-login');


        // 인라인 CSS 제거
        $('.entry-content *').removeAttr('style');

        // topbar 소셜 아이콘 변경
        $('.oceanwp-github > a').attr( 'title', 'Medium' );


        // 먹폴 픽방 탭    
        if( $('.category-166').length > 0 ) {
            var current_path = decodeURI(window.location.pathname);

            var $tabs = $('.tab-btn-wrap > .tab-btn');

            if( current_path.indexOf('축구') > -1 ) {
                $tabs.eq(1).addClass('active');
            }
            else if( current_path.indexOf('야구') > -1 ) {
                $tabs.eq(2).addClass('active');
            }
            else if( current_path.indexOf('농구') > -1 ) {
                $tabs.eq(3).addClass('active');
            }
            else if( current_path.indexOf('배구') > -1 ) {
                $tabs.eq(4).addClass('active');
            }
            else if( current_path.indexOf('하키') > -1 ) {
                $tabs.eq(5).addClass('active');
            }
            else {
                $tabs.eq(0).addClass('active');
            }
        }


        // 고객센터
        $('#elementor-tab-content-2271 textarea').attr( 'rows', '22' );


        // 스포츠 중계
        $('.menu-item-19036 > .menu-link').attr( 'href', 'http://www.mt-police.com/livescore/스포츠중계-해외축구중계-mlb중계-nba중계/' );

        // 구글 검색
        $('#searchform, .header-searchform').attr( 'action', siteInfo.url + '/search_gcse/' );
        $('#s, .header-searchform > input').attr( 'name', 'q' );


        // 외부링크
        // $('a').not('#you > a, .topbar-content a, .lrm-user-modal a, #top-bar-social a').each(function(index) {
        //     var $this = $(this);

        //     var old_url = $this.attr('href');
        //     var first_char = old_url.charAt(0);

        //     if( old_url.indexOf( siteInfo.url ) < 0 && first_char !== '/' && first_char !== '#' && first_char !== '?' ) {
        //         $this.attr( 'rel', 'nofollow').attr( 'target', '_blank' );
        //     }
        // });
        

        // 모바일 메뉴 추가
        $(document).on( 'click', '.mobile-menu', function(e) {
            e.preventDefault();
            
            var $sidr_container = $('#sidr');
            var $add_menu_container = $('#mobile-add-menu');

            if( $sidr_container.length > 0 && $add_menu_container.length == 0 ) {
                if( siteInfo.is_logged_in ) {
                    $sidr_container.append( '<div id="mobile-add-menu" class="mobile-add-menu">텔레그램: MTPOLICE2019 | <a href="https://www.mt-police.com/wp-login.php?action=logout">로그아웃</a></div>' );
                }
                else {
                    $sidr_container.append( '<div id="mobile-add-menu" class="mobile-add-menu">텔레그램: MTPOLICE2019 | <a href="https://www.mt-police.com/로그인/">로그인</a> | <a href="https://www.mt-police.com/회원가입/">회원가입</a></div>' );
                }                
            }
        });

    });// ready
});