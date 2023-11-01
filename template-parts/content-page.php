<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */

?>
<section id="page_title" class="d_block w_100 bg_img" data-bg-img="about" style="background-image: url('<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="d_block w_100" data-bg-trans="black-01">
        <div class="row d_flex flex_column align_items-center mx_auto w_100" data-txt-color="white" data-txt-align="center">
            <h2 class="section__title d_block mx_auto w_100" data-txt-weight="600"><?= the_title(); ?></h2>
			<div class="pagedata d_flex flow_wrap justify_content-center align_items-center w_100">
				<div class="pagedata__author d_flex align_items-center">
					<svg xmlns="http://www.w3.org/2000/svg" class="d_block fill_white" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg>
					<span><?= get_the_author(); ?></span>
				</div>
				
				<div class="pagedata__date d_flex align_items-center">
					<svg xmlns="http://www.w3.org/2000/svg" class="d_block fill_white" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/><path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/></svg>
					<span><?= get_the_date('m.d.Y'); ?></span>
				</div>
			</div>

		</div>
    </div>
</section>

<section class="section" data-bg-color="white">
	<div class="row d_flex flex_column align_items-center mx_auto w_100">
		<div class="page__content d_flex flex_column w_100" data-txt-weight="400" data-txt-color="black">
			<?= the_content();?>
		</div>
	</div>
</section>

