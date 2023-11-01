<?php
/**
 * Template part for About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section id="page_title" class="d_block w_100 bg_img" data-bg-img="about" style="background-image: url('<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="d_block w_100" data-bg-trans="black-01">
        <div class="row d_flex flex_column align_items-center mx_auto w_100" data-txt-color="white" data-txt-align="center">
            <h2 class="section__title d_block mx_auto w_100" data-txt-weight="600"><?= the_field('page_title'); ?></h2>
            <p class="section__txt d_block mx_auto w_100"><?= the_field('page_text'); ?></p>
        </div>
    </div>
</section>

<section id="statistics" class="section" data-bg-color="primary">
    <div class="row d_flex flow_wrap justify_content-center align_items-center mx_auto w_100">
    <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = -1; // -1 shows all posts
        $args = array(
            'post_type' => 'statistic',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );                
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
        <figure class="statisticsbox d_flex justify_content-center align_items-center w_100" data-bg-color="primary-shade-01">
            <picture class="d_block w_100 h_100">
                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="d_block max_100 w_100 h_100 object_cover" alt="">
            </picture>
            

            <figcaption class="statisticsbox__content d_flex flex_column w_100" data-txt-color="white">
                <h2 class="statisticsbox__number d_block w_100" data-txt-weight="600"><?= get_the_excerpt(); ?></h2>
                <p class="statisticsbox__txt d_block w_100" data-txt-weight="500" data-txt-transform="uppercase"><?= get_the_title(); ?></p>
            </figcaption>
        </figure>
    <?php endwhile; else : ?>
        <p>no hay contenido que mostrar</p>
    <?php 
        endif;
        wp_reset_query();
        $wp_query = $temp;
    ?>    
    </div>
</section>

<section class="position_relative d_block w_100" data-bg-color="grey-tint-09">
    <div class="row d_flex flow_wrap justify_content-center align_items-center mx_auto w_100">
        <div class="about__thumbnail w_100" data-about-type="col">
            <picture class="position_relative  max_100 w_100 h_100">
                <img src="<?= the_field('about_thumbnail'); ?>" class="d_block max_100 w_100 object_cover" alt="">
            </picture>
        </div>
        
        <div class="about__container d_flex flex_column w_100" data-about-type="col">
            <h2 class="section__title d_block w_100" data-txt-weight="600" data-txt-transform="capitalize"><?= the_field('about_title'); ?></h2>
                        
            <div class="about__content d_flex flex_column w_100" data-txt-color="black" data-txt-weight="400" data-txt-align="left">
                <p><?= the_field('about_text'); ?></p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" class="about__signature d_block mx_auto w_100 fill_black" version="1.1" viewBox="0.00 0.00 223.00 57.00"><path d="   M 72.71 38.74   Q 70.58 37.77 69.75 37.88   Q 65.17 38.48 60.82 37.20   Q 60.34 37.06 59.90 37.29   L 59.20 37.66   Q 58.46 38.06 58.72 37.26   L 58.83 36.95   Q 58.97 36.51 58.66 36.17   L 56.00 33.27   A 0.67 0.67 0.0 0 1 56.87 32.27   L 59.45 34.09   A 0.89 0.89 0.0 0 0 60.67 33.89   Q 65.94 26.80 72.82 21.24   Q 72.93 21.15 72.93 21.01   Q 72.93 20.86 72.93 20.71   A 0.24 0.23 -11.8 0 0 72.60 20.50   Q 65.75 23.41 58.82 26.21   Q 56.73 27.06 53.62 29.16   C 49.14 32.19 38.30 36.06 34.06 31.95   C 31.97 29.94 33.45 27.95 34.20 25.95   Q 34.34 25.57 33.98 25.75   L 1.83 41.71   A 0.48 0.48 0.0 0 1 1.22 41.00   L 1.64 40.39   A 0.46 0.41 3.4 0 1 1.83 40.24   Q 17.50 33.14 32.65 25.01   Q 35.03 23.73 37.05 21.53   Q 49.27 8.21 65.92 0.43   A 1.39 1.39 0.0 0 1 67.67 2.45   Q 66.33 4.48 63.96 6.21   Q 46.96 18.59 39.88 22.12   Q 34.76 24.68 34.45 29.68   Q 34.42 30.19 34.70 30.62   C 37.57 35.03 48.42 31.14 51.81 29.12   A 0.33 0.33 0.0 0 0 51.53 28.53   C 48.21 29.75 39.57 32.22 37.62 27.92   A 2.14 2.14 0.0 0 1 38.73 25.06   C 43.17 23.18 52.63 20.86 55.62 25.81   Q 55.91 26.29 56.42 26.05   Q 64.67 22.21 73.30 19.58   Q 75.39 18.94 77.08 17.47   Q 85.48 10.14 95.21 6.52   Q 98.71 5.22 100.79 8.04   A 1.01 1.01 0.0 0 1 100.91 9.03   Q 99.46 12.57 95.86 16.35   Q 90.47 22.03 84.98 24.35   A 1.77 1.75 -83.7 0 0 84.19 24.99   Q 79.10 32.44 71.14 36.63   Q 70.47 36.98 71.20 37.16   Q 76.77 38.45 82.00 37.49   Q 89.22 36.16 93.97 35.53   Q 94.48 35.47 94.47 34.96   C 94.29 22.74 104.14 7.10 116.38 3.80   C 123.41 1.90 125.88 7.29 122.77 13.01   Q 121.15 16.00 116.68 20.43   Q 109.06 27.96 100.16 34.05   A 0.35 0.35 0.0 0 0 100.31 34.68   Q 100.72 34.73 101.33 34.50   Q 104.45 33.28 107.73 32.51   A 1.40 1.35 49.5 0 1 108.65 32.60   C 112.14 34.19 116.14 31.41 118.36 34.13   Q 118.67 34.51 119.15 34.49   C 123.61 34.35 126.24 34.72 128.94 30.49   A 0.62 0.62 0.0 0 0 128.83 29.69   C 126.23 27.41 125.25 22.22 130.03 21.99   A 1.20 1.19 66.1 0 1 130.95 22.35   Q 134.02 25.52 131.13 29.17   A 0.88 0.87 -54.5 0 0 131.34 30.45   Q 135.26 32.94 140.00 31.57   Q 141.61 31.10 141.43 32.46   A 0.69 0.68 3.8 0 1 140.75 33.05   Q 136.15 33.03 132.45 35.89   Q 132.24 36.05 132.26 36.22   Q 132.27 36.35 132.37 36.45   A 0.11 0.11 0.0 0 0 132.51 36.47   L 136.70 34.00   A 0.71 0.71 0.0 0 1 137.45 35.21   Q 136.57 35.78 135.50 35.87   A 0.63 0.63 0.0 0 0 134.93 36.38   Q 134.74 37.31 135.75 37.35   Q 143.00 37.61 149.97 35.71   C 151.79 35.21 153.42 35.28 155.24 35.24   A 0.54 0.53 7.5 0 1 155.77 35.92   Q 155.41 37.17 154.21 37.65   A 0.12 0.12 0.0 0 0 154.27 37.88   L 171.51 35.00   A 0.73 0.73 0.0 0 1 171.94 36.38   L 170.25 37.16   A 0.67 0.67 0.0 0 0 170.48 38.44   C 180.83 39.35 192.23 38.77 198.50 38.27   Q 210.44 37.31 222.41 37.55   Q 222.88 37.56 222.76 38.01   Q 222.72 38.14 222.69 38.28   Q 222.63 38.48 222.43 38.48   C 214.68 38.52 207.73 38.67 199.29 39.27   Q 184.10 40.34 171.01 39.83   Q 168.05 39.72 168.40 37.05   Q 168.47 36.47 167.91 36.60   Q 159.75 38.48 151.41 39.06   A 0.78 0.77 32.0 0 1 151.06 37.57   L 152.47 37.00   Q 152.98 36.80 152.52 36.48   Q 152.30 36.34 151.99 36.42   C 147.81 37.60 138.51 39.89 133.85 37.48   Q 133.42 37.26 132.95 37.36   L 130.23 37.96   A 0.76 0.76 0.0 0 1 129.65 36.58   L 134.48 33.40   A 0.40 0.40 0.0 0 0 134.28 32.67   Q 132.20 32.57 130.62 31.23   Q 130.11 30.79 129.70 31.33   Q 126.57 35.42 122.00 37.76   A 0.90 0.90 0.0 0 1 120.70 36.85   L 120.77 36.27   Q 120.84 35.68 120.24 35.65   Q 116.53 35.48 113.30 37.32   A 0.41 0.41 0.0 0 1 112.88 36.61   L 116.24 34.48   A 0.57 0.57 0.0 0 0 115.71 33.48   Q 112.34 34.96 108.78 33.98   A 0.81 0.79 -60.7 0 0 107.96 34.22   C 106.33 36.03 104.20 38.96 101.42 37.86   A 0.73 0.73 0.0 0 1 100.98 36.99   L 101.27 35.95   Q 101.49 35.11 100.65 35.34   L 96.56 36.44   Q 95.95 36.60 96.12 37.21   Q 97.44 41.96 100.95 45.29   Q 101.59 45.89 100.79 46.01   A 0.40 0.32 50.7 0 1 100.59 45.97   Q 95.71 43.13 90.45 41.53   C 87.83 40.74 87.18 42.34 85.19 43.33   Q 70.61 50.53 54.93 54.84   Q 44.01 57.84 34.75 56.44   C 32.69 56.14 29.14 53.47 29.89 50.87   C 30.86 47.53 36.95 45.05 40.02 44.37   Q 56.16 40.78 72.67 39.00   Q 73.17 38.95 72.71 38.74   Z   M 39.56 21.66   L 67.19 2.37   A 0.12 0.12 0.0 0 0 67.22 2.21   L 67.18 2.14   A 15.38 2.30 -34.9 0 0 53.25 9.06   L 50.64 10.87   A 15.38 2.30 -34.9 0 0 39.34 21.56   L 39.39 21.63   A 0.12 0.12 0.0 0 0 39.56 21.66   Z   M 105.72 11.86   C 99.52 18.23 95.65 25.87 95.45 34.95   A 0.53 0.53 0.0 0 0 96.26 35.41   Q 107.76 28.08 117.39 18.18   C 119.72 15.78 125.36 8.44 121.66 5.29   C 117.61 1.84 108.45 9.05 105.72 11.86   Z   M 78.06 20.09   A 1.19 1.19 0.0 0 1 78.28 21.86   Q 71.93 29.08 63.98 34.42   Q 62.16 35.65 64.30 36.14   C 66.01 36.54 68.01 36.98 69.82 36.07   Q 77.95 32.02 83.18 24.51   Q 83.45 24.13 83.38 23.66   Q 82.79 19.44 86.75 17.73   A 0.55 0.55 0.0 0 1 87.51 18.24   Q 87.52 20.11 86.18 21.48   A 0.60 0.60 0.0 0 0 86.92 22.41   Q 94.72 17.67 99.26 9.80   A 1.59 1.59 0.0 0 0 98.16 7.44   C 92.79 6.49 81.21 15.24 77.33 18.85   Q 76.87 19.28 77.39 19.63   L 78.06 20.09   Z   M 86.05 20.00   Q 86.16 19.80 86.38 19.64   A 0.18 0.18 0.0 0 0 86.18 19.34   Q 84.54 20.25 84.24 21.99   A 0.44 0.43 -29.3 0 0 85.07 22.22   L 85.77 20.50   Q 85.80 20.44 86.05 20.00   Z   M 76.42 19.40   L 60.53 34.32   A 0.02 0.02 0.0 0 0 60.53 34.35   L 60.53 34.35   A 4.03 2.09 -43.2 0 0 64.90 33.12   L 74.95 23.69   A 4.03 2.09 -43.2 0 0 76.46 19.40   L 76.45 19.40   A 0.02 0.02 0.0 0 0 76.42 19.40   Z   M 129.28 28.74   A 0.72 0.72 0.0 0 0 130.56 28.55   L 131.56 25.31   A 0.72 0.72 0.0 0 0 131.38 24.58   L 129.92 23.13   A 0.72 0.72 0.0 0 0 128.83 23.22   L 127.44 25.15   A 0.72 0.72 0.0 0 0 127.43 25.97   L 129.28 28.74   Z   M 54.2627 25.7497   A 7.84 2.41 -6.3 0 0 46.2055 24.2146   A 7.84 2.41 -6.3 0 0 38.6773 27.4703   A 7.84 2.41 -6.3 0 0 46.7345 29.0054   A 7.84 2.41 -6.3 0 0 54.2627 25.7497   Z   M 106.3782 34.0209   A 2.79 0.65 -37.0 0 0 103.7588 35.1809   A 2.79 0.65 -37.0 0 0 101.9218 37.3791   A 2.79 0.65 -37.0 0 0 104.5412 36.2191   A 2.79 0.65 -37.0 0 0 106.3782 34.0209   Z   M 93.60 37.20   A 0.32 0.32 0.0 0 0 93.38 36.61   L 83.50 38.30   A 0.32 0.32 0.0 0 0 83.49 38.93   L 88.76 40.06   A 0.32 0.32 0.0 0 0 89.00 40.02   L 93.60 37.20   Z   M 90.75 40.09   A 0.31 0.31 0.0 0 0 90.82 40.65   L 96.60 42.47   A 0.31 0.31 0.0 0 0 96.97 42.05   L 95.09 37.94   A 0.31 0.31 0.0 0 0 94.65 37.80   L 90.75 40.09   Z   M 55.31 53.86   Q 71.49 49.13 86.80 41.39   A 0.39 0.39 0.0 0 0 86.76 40.67   C 82.47 39.06 78.97 38.97 74.09 39.63   Q 57.75 41.84 41.59 44.98   Q 36.77 45.91 32.34 49.33   C 28.18 52.55 33.72 55.56 36.49 55.78   Q 46.10 56.55 55.31 53.86   Z"/><ellipse cx="0.00" cy="0.00" transform="translate(79.49,34.55) rotate(-32.4)" rx="3.40" ry="0.64"/><ellipse cx="0.00" cy="0.00" transform="translate(48.71,34.72) rotate(-44.9)" rx="2.64" ry="0.66"/></svg>
        </div>
    </div>
</section>

<section id="about_project" class="section d_block w_100" data-bg-color="white">
    <div class="row d_flex flex_column mx_auto w_100" data-txt-align="center">
        <h2 class="section__title d_block mx_auto w_100" data-txt-weight="600"><?= the_field('project_title'); ?></h2>
        <p class="section__txt d_block mx_auto w_100"><?= the_field('project_text'); ?></p>
        <a href="<?= the_field('project_btn_link'); ?>" class="btn mx_auto d_block" data-bg-color="primary" data-txt-color="white" data-txt-weight="600" data-txt-transform="uppercase" data-txt-decoration="none"><?= the_field('project_btn_text'); ?></a>
    </div>
</section>