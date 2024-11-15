<?php
/**
 * Template part for displaying 404 error
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section class="page404 d_flex align_items-center w_100 py_xxl" data-bg-color="grey-tint-08">
	<div class="row mx_auto w_100 h_100 d_flex flow_wrap justify_content-center align_items-center gap_xxl" data-txt-align="center" data-txt-weight="400">
		<div class="page404__col d_flex justify_content-center align_items-center w_100">
			<svg xmlns="http://www.w3.org/2000/svg" class="page404__thumbnail d_block w_100 fill_primary" viewBox="0 0 16 16">
  				<path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9s-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12m-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4s1.2-.036 1.725-.098m4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257z"/>
			</svg>
		</div>
		<div class="page404__col d_flex flex_column gap_lg w_100">
			<h2 class="h6 d_block w_100" data-txt-weight="700" data-txt-transform="uppercase">error 404</h2>
			<h3 class="title_xxs page404__subtitle d_block w_100" data-txt-line="md" data-txt-weight="600" data-txt-transform="uppercase">sorry, page not found</h3>
			<p class="text_xl d_block w_100" data-txt-line="md" data-txt-weight="500">The page you requested could not be found</p>
			<div class="d_flex flow_wrap justify_content-center align_items-center gap_xl w_100">
				<a href="<?= get_home_url();?>" class="btn btn_primary btn_lg d_block w_fit">go back home</a>
				<a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="btn btn_black btn_lg d_block w_fit">view our work</a>
			</div>
		</div>
	</div>
</section>