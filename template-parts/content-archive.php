<?php
/**
 * Template part for Archive Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<figure class="workbox position_relative w_100 zindex_1 overflow_hidden">
    <picture class="workbox__thumbnail d_block w_100">
        <img src="<?= wp_get_attachment_url(get_post_thumbnail_id( $post->ID )); ?>" class="d_block max_100 w_100 h_100 object_cover" width="317" height="279" loading="lazy" alt="">
    </picture>

    <figcaption class="workbox__caption position_absolute right_0 d_flex justify_content-center align_items-center zindex_2 w_100 h_100" data-bg-trans="primary-80">
        <a href="<?= the_permalink(); ?>" class="worbox__link d_flex justify_content-center align_items-center radius_100" data-txt-decoration="none">
            <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_white" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/></svg>
            <span class="friendly_anchortext d_block">leer más</span>
        </a>
    </figcaption>
</figure>