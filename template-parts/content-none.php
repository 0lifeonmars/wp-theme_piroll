<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section class="page404" data-bg-color="grey-tint-06">
	<div class="row mx_auto w_100 h_100 d_flex flex_column justify_content-center align_items-center" data-txt-align="center" data-txt-weight="400">
		<h2 class="page404__title d_block w_100" data-txt-weight="700" data-txt-transform="uppercase">error 404</h2>
		<h3 class="page404__subtitle d_block w_100" data-txt-weight="600" data-txt-transform="uppercase">sorry, page not found</h3>
		<p class="page404__text d_block w_100" data-txt-weight="500">The page you requested could not be found</p>
		<a href="<?= get_home_url();?>" class="btn d_block" data-bg-color="primary" data-txt-color="white" data-txt-weight="600" data-txt-transform="uppercase" data-txt-decoration="none">go back home</a>
	</div>
</section>
