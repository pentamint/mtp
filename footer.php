<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MTP
 */
?>

</div><!-- #content -->
 
<div id="top-footer" class="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="top-footer-nav col-md-9">
				<?php
					wp_nav_menu( array(
						'menu'           	=> '',
						'theme_location'    => 'top-footer',
						'depth'             => 2,
						'container'         => '',
						'container_class'   => 'dropdown dropdown-toggle',
						'container_id'      => 'top-footer-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</div>
			<div class="top-footer-social-links col-md-3">
				<?php
					if (is_active_sidebar('top-footer-widget-1')) {
						dynamic_sidebar('top-footer-widget-1');
					}
				?>
			</div>
		</div>
	</div>
</div>

<div id="main-footer" class="footer-wrapper">
	<div class="container">
		<div class="top-info-wrapper row">
			<div class="footer-logo col-md-3">
				<img src="https://www.staging1.mt-police.com/wp-content/uploads/2017/10/logo.png" data-src="https://www.staging1.mt-police.com/wp-content/uploads/2017/10/logo.png" alt="먹튀폴리스 로고" class="footer-logo ls-is-cached lazyloaded">
			</div>
			<div class="footer-company-info col-md-9">
				<p>South Korea, Seoul, Gangnam-gu, Irwon 1(il)-dong  |  사업자정보 : (주)먹튀폴리스 사업자번호 : 847-12-00924</p>
				<p>대표이사 안지만 | HP : 010-2157-5969 E-mail : mukpolice54@gmail.com</p>
			</div>
		</div>
		<footer id="footer-sidebar" class="row widget-area">
			<div id="footer-sidebar1" class="col-md-4">
				<?php
				if (is_active_sidebar('footer-sidebar-1')) {
					dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
			<div id="footer-sidebar2" class="col-md-4">
				<?php
				if (is_active_sidebar('footer-sidebar-2')) {
					dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div id="footer-sidebar3" class="col-md-4">
				<?php
				if (is_active_sidebar('footer-sidebar-3')) {
					dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
			<div id="footer-sidebar4">
				<?php
				if (is_active_sidebar('footer-sidebar-4')) {
					dynamic_sidebar('footer-sidebar-4');
				}
				?>
			</div>
		</footer>
	</div><!-- .container -->
</div><!-- .footer-wrapper -->

<div id="bottom-footer" class="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						© Since 2012 | <a href="https://www.staging1.mt-police.com/" title="먹튀폴리스 HOME 으로">먹튀폴리스</a> All Rights Reserved
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .colophon-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>