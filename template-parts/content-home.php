<?php
/**
 * Template part for Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section id="home" class="d_block w_100 bg_img bg_center"  data-bg-color="white" style="background-image: url('<?= get_field('home_back'); ?>');">
    <div class="row mx_auto w_100 h_100 d_flex justify_content-end align_items-center">
        <div class="home__col d_flex flex_column justify_content-center gap_xxl w_100 h_100">
            
            <h2 class="title_xl d_block w_100" data-txt-weight="600"><?= get_field('home_title'); ?></h2>

            <p class="text_md d_block w_100" data-txt-line="md"><?= get_field('home_text'); ?></p>
            <?php $home__btn = get_field('home_btn'); if($home__btn === 'si')  { ?>
                <a href="<?= get_field('home_btn_link'); ?>" class="btn btn_md btn_primary d_block w_fit"><?= get_field('home_btn_text'); ?></a>
            <?php } ?>
        </div>
    </div>
</section>

<section id="about" class="section d_block w_100 bg_img bg_center" data-bg-color="white">
    <div class="row d_flex flex_column gap_xxl w_100 mx_auto">
        <div class="titlebox d_flex flex_column gap_md w_100" data-txt-color="black" data-txt-weight="400" data-txt-align="center">
            <h2 class="titlebox__title title_sm d_block mx_auto w_fit" data-txt-weight="600"><?= get_field('about_title');?></h2>
            <p class="titlebox__text text_md d_block mx_auto w_100" data-txt-line="md"><?= get_field('about_text');?></p>
        </div>

        <picture class="d_block mx_auto">
            <img src="<?= get_field('about_sign');?>" class="d_block mx_auto" width="223" height="57" loading="lazy" alt="">
        </picture>
    </div>
</section>

<section id="skills" class="section d_flex align_items-center w_100 bg_img" data-bg-color="grey-tint-09" style="background-image: url('<?= get_field('skills_back') ?>');">
    <div class="row w_100 d_flex flex_column mx_auto">
        <div class="home_col d_flex flex_column gap_xxl w_100">
            <div class="titlebox d_flex flex_column gap_md w_100" data-txt-color="black" data-txt-weight="400">
                <h2 class="title_sm d_block w_100" data-txt-weight="600"><?= get_field('skills_title') ?></h2>
            </div>

            <div class="skillboxes w_100 d_flex flex_column gap_xxl">
                <?php if( have_rows('skills_repeat') ): while( have_rows('skills_repeat') ) : the_row(); ?>
                    <div class="skillbox d_flex flex_column gap_xxs w_100">
                        <div class="skillbox__data d_flex align_items-center gap_xxl w_fit" data-txt-color="black" data-txt-weight="700" data-txt-transform="uppercase">
                            <p class="text_sm d_block w_fit"><?= get_sub_field('skill_title'); ?></p>
                            <p class="text_sm d_block w_fit"><?= get_sub_field('skill_percent'); ?>%</p>
                        </div>

                        <div class="skillbox__percent w_100" data-bg-color="grey-tint-06">
                            <span class="skillbox__bar d_block h_100" style="width: <?= get_sub_field('skill_percent'); ?>%;" data-bg-color="primary"></span>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <p class="text_md d_block w_100" data-txt-align="center">No hay contenido que mostrar.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="numbers" class="section d_block w_100" data-txt-color="white" data-bg-color="primary">
    <div class="row w_100 mx_auto">
        <div class="numberboxes d_flex flex_column gap_md max_100 w_100" data-slick-dots="white">
            <?php if( have_rows('numbers_repeat') ): while( have_rows('numbers_repeat') ) : the_row(); ?>
            <div class="numberbox d_flex align_items-center gap_sm w_100" data-bg-color="primary-shade-01">
                <picture class="numberbox__thumbnail d_block w_100">
                    <img src="<?= get_sub_field('number_thumbnail'); ?>" class="d_block object_cover" width="50" height="50" loading="lazy" alt="">
                </picture>

                <div class="numberbox__data d_flex flex_column gap_xxs w_100" data-txt-weight="600" data-txt-transform="uppercase">
                    <h3 class="text_xl d_block w_fit"><?= get_sub_field('number_total'); ?></h3>
                    <p class="text_xs d_block w_fit"><?= get_sub_field('number_title'); ?></p>
                </div>
            </div>
            <?php endwhile; else : ?>
                <p class="text_md d_block w_100" data-txt-align="center">No hay contenido que mostrar.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="work" class="d_block w_100" data-bg-color="white">
    <div class="workboxes d_flex flow_wrap justify_content-center max_100 w_100" data-bg-color="grey-tint-07">
        <?php
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = 8; // -1 shows all posts
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DES',
                'paged' => $paged,
                'posts_per_page' => $post_per_page
            );             
            $wp_query = new WP_Query($args);
            if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <figure class="workbox position_relative d_block w_100 zindex_1 overflow_hidden">
            <picture class="workbox__thumbnail d_block w_100">
                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="d_block max_100 w_100 h_100 object_cover" width="317" height="279" loading="lazy" alt="">
            </picture>

            <figcaption class="workbox__caption position_absolute right_0 d_flex justify_content-center align_items-center zindex_2 w_100 h_100" data-bg-trans="black-80">
                <a href="<?= the_permalink(); ?>" class="worbox__link d_flex justify_content-center align_items-center radius_100" data-txt-decoration="none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_white" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/></svg>
                    <span class="friendly_anchortext d_block">leer más</span>
                </a>
            </figcaption>
        </figure>
        <?php endwhile; else : ?>
        <p class="d_block w_100 text_md m_0 p_0" data-txt-align="center">no hay contenido que mostrar</p>
        <?php 
            endif;
            wp_reset_query();
            $wp_query = $temp;
        ?> 
    </div>

    <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="work__btn d_block w_100" data-txt-color="grey-shade-07" data-txt-weight="700" data-bg-color="grey-tint-06" data-txt-align="center" data-txt-transform="uppercase" data-txt-decoration="none">load more work</a>
</section>

<section id="process" class="section d_block w_100" data-bg-color="white">
    <div class="row d_flex flex_column gap_lg w_100 mx_auto">
        <div class="titlebox d_flex flex_column gap_md w_100" data-txt-color="black" data-txt-weight="400" data-txt-align="center">
            <h2 class="titlebox__title title_sm d_block mx_auto w_fit" data-txt-weight="600"><?= get_field('process_title') ?></h2>
            <p class="titlebox__text text_md d_block mx_auto w_100" data-txt-line="md"><?= get_field('process_text') ?></p>
        </div>

        <div class="videobox d_block mx_auto w_100 position_relative overflow_hidden">
            <iframe src="https://www.youtube.com/embed/<?= get_field('process_video'); ?>" class="videobox__iframe d_block w_100 h_100" allow="autoplay" allowfullscreen=""></iframe>
            <div class="videobox__thumbnail position_absolute bottom_0 left_0 d_flex justify_content-center align_items-center w_100 h_100 bg_img bg_center zindex_1" style="background-image: url('<?= get_field('process_thumbnail');?>');">
                <button class="videobox__btn d_flex justify_content-center align_items-center radius_100 border_none" data-bg-color="primary" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_white" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/></svg>
                    <span class="friendly_anchortext">reproducir vídeo</span>
                </button>
            </div>        
        </div>
    </div>
</section>

<section id="services" class="section d_block w_100" data-bg-color="grey-tint-08">
    <div class="row w_100 mx_auto">
        <div class="serviceboxes flex_column gap_md max_100 w_100 home_carousel" data-slick-dots="grey">
            <?php if( have_rows('services_repeat') ): while( have_rows('services_repeat') ) : the_row(); ?>
                <div class="servicebox d_flex flex_column align_items-center gap_xs w_100" data-txt-color="grey-shade-05" data-txt-weight="500" data-txt-align="center" data-bg-color="grey-tint-09">
                    <picture class="servicebox__thumbnail d_block mx_auto w_100">
                        <img src="<?= get_sub_field('service_thumbnail'); ?>" class="d_block w_100 max_100 h_auto object_cover" width="49" height="49" loading="lazy" alt="">
                    </picture>

                    <h3 class="text_md d_block w_100" data-txt-weight="700" data-txt-transform="uppercase"><?= get_sub_field('service_title'); ?></h3>

                    <p class="text_xs d_block w_100" data-txt-line="sm"><?= get_sub_field('service_text'); ?></p>
                </div>
            <?php endwhile; else : ?>
                <p class="text_md d_block w_100" data-txt-align="center">No hay contenido que mostrar.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="testimonials" class="section d_flex justify_content-center align_items-center w_100" data-txt-color="white" data-bg-color="primary">
    <div class="row w_100 mx_auto">
        <div class="testimonialboxes d_flex flex_column justify_content-center gap_lg max_100 w_100">
            <?php if( have_rows('testimonials_repeat') ): while( have_rows('testimonials_repeat') ) : the_row(); ?>    
                <blockquote class="testimonialbox d_flex flex_column align_items-center gap_md" data-txt-weight="500" data-txt-align="center">
                    <p class="testimonialbox__text text_xxl d_block w_100" data-txt-line="md"><?= get_sub_field('testimonial_text'); ?></p>
                    <cite class="testimonialbox__name text_sm d_block w_100" data-txt-weight="700" data-txt-transform="uppercase"><?= get_sub_field('testimonial_author'); ?></cite>
                </blockquote>
            <?php endwhile; else : ?>
                <p class="text_md d_block w_100" data-txt-align="center">No hay contenido que mostrar.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="clients" class="py_lg d_block w_100" data-bg-color="white">
    <div class="row w_100 mx_auto">
        <div class="clientboxes d_flex flex_column justify_content-center gap_lg max_100 w_100" data-slick-dots="black">
            <?php if( have_rows('clients_repeat') ): while( have_rows('clients_repeat') ) : the_row(); ?>
            <div class="clientbox">
                <picture class="clientbox__thumbnail d_block w_100 mx_auto">
                    <img src="<?= get_sub_field('client_logo'); ?>" class="max_100 w_100 object_cover" width="129" height="99" loading="lazy" alt="">
                </picture>
            </div>
            <?php endwhile; else : ?>
                <p class="text_md d_block w_100" data-txt-align="center">No hay contenido que mostrar.</p>
            <?php endif; ?>
        </div>  
    </div>
</section>

<section id="contact" class="section d_block w_100" data-bg-color="grey-tint-08">
    <div class="row d_flex flex_column gap_xxl w_100 mx_auto">
        <div class="titlebox d_flex flex_column gap_md w_100" data-txt-color="black" data-txt-weight="400" data-txt-align="center">
            <h2 class="titlebox__title title_sm d_block mx_auto w_fit" data-txt-weight="600">Need a Project?</h2>
            <p class="titlebox__text text_md d_block mx_auto w_100" data-txt-line="md">Let us know what you're looking for in an agency. We'll take a look and see if this could be the start of something beautiful.</p>
        </div>

        <div class="contact__container d_block mx_auto w_100">
            <?= do_shortcode( '[contact-form-7 id="023e3e8" title="Contact Form"]' ); ?>
        </div>
    </div>
</section>