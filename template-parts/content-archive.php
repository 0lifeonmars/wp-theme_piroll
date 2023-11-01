<?php
/**
 * Template part for Archive Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section id="page_title" data-bg-color="grey-tint-08">
    <div class="row d_flex flex_column align_items-center mx_auto w_100" data-txt-color="black" data-txt-align="center">
        <h2 class="section__title d_block mx_auto w_100" data-txt-weight="600"><?= the_field('archive_page_title');?></h2>
        <p class="section__txt d_block mx_auto w_100"><?= the_field('archive_page_text');?></p>
    </div>
</section>

<section id="products" data-bg-color="white">
    <div class="products__category d_grid w_100 archive__grid">
    <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = -1; // -1 shows all posts
        $args = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );             
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
        <div class="productbox position_relative w_100 overflow_hidden">
            <picture class="d_block max_100 w_100 h_100">
                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="d_block max_100 w_100 object_cover" alt="">
            </picture>

            <div class="productbox__content position_absolute d_flex justify_content-center align_items-center w_100 h_100" data-bg-trans="black-01">
                <a href="<?= the_permalink(); ?>" class="d_flex justify_content-center align_items-center radius_100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d_block fill_white" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>
                </a>
            </div>
        </div>
    <?php endwhile; else : ?>
        <p>no hay contenido que mostrar</p>
    <?php 
        endif;
        wp_reset_query();
        $wp_query = $temp;
    ?>    
    </div>

    <a href="#" class="archive__load d_block w_100" data-txt-color="white" data-txt-weight="600" data-txt-align="center" data-txt-transform="uppercase" data-bg-color="grey-tint-02" data-txt-decoration="none">show more works</a>
</section>