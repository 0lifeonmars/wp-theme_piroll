<?php
/**
 * Template part for About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
$page_thumbnail = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
$page_btn = get_field('contact_btn');
?>
<section id="header" class="pageheader d_block w_100 <?php if($page_thumbnail) { echo 'bg_img bg_center'; }?>" <?php if($page_thumbnail) { echo 'style="background-image: url('.$page_thumbnail.');"'; } else { echo 'data-bg-color="grey-tint-08"'; } ?>>
    <div class="pageheader__container d_flex align_items-center py_xxl w_100 h_100" <?php if($page_thumbnail) { echo 'data-bg-trans="black-60"'; } ?>>
        <div class="row d_flex flex_column align_items-center mx_auto w_100" <?php if($page_thumbnail) { echo 'data-txt-color="white" '; } else { echo 'data-txt-color="black" '; } ?>data-txt-align="center">
            <div class="titlebox d_flex flex_column gap_md w_100" data-txt-weight="400">
                <h2 class="titlebox__title title_md d_block mx_auto w_fit" data-txt-weight="700">UI/UX & Graphic Designer</h2>
                <p class="titlebox__text text_lg d_block mx_auto w_100" data-txt-line="md">I am a Graphic & Web Designer based in New York, specializing in User Interface Design and Development.</p>
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

<section id="about" class="position_relative d_block w_100" data-bg-color="grey-tint-09" data-txt-align="left">
    <div class="row d_flex flow_wrap justify_content-center align_items-center gap_xxl mx_auto w_100">
        <div class="about__col about__thumbnail d_block mx_auto w_100">
            <picture class="max_100 w_100 h_100">
                <img src="<?= the_field('about_thumbnail'); ?>" class="d_block max_100 w_100 h_auto object_cover" width="608" height="509" loading="lazy" alt="">
            </picture>
        </div>
        
        <div class="about__col about__content d_flex flex_column gap_xxl w_100" data-txt-color="black" data-txt-weight="400" data-about-type="col">
            <h2 class="title_sm d_block w_100" data-txt-weight="600" data-txt-transform="capitalize"><?= the_field('about_title'); ?></h2>
                        
            <div class="text_sm d_flex flex_column gap_sm w_100" data-txt-line="md"><?= the_field('about_text'); ?></div>

            <picture class="about__sign max_100 w_100">
                <img src="<?= the_field('about_sign'); ?>" class="d_block max_100 w_100 h_auto object_cover" width="192" height="49" loading="lazy" alt="">
            </picture>
        </div>
    </div>
</section>

<section id="contact" class="section d_block w_100" data-bg-color="white">
    <div class="row d_flex flex_column gap_xxl mx_auto w_100" data-txt-align="center">
        <h2 class="title_sm d_block mx_auto w_100" data-txt-weight="600"><?= the_field('contact_title'); ?></h2>
        <p class="text_sm d_block mx_auto w_100" data-txt-line="md"><?= the_field('contact_text'); ?></p>
        
        <?php if($page_btn === 'si') { ?>
            <a href="<?= the_field('contact_btn_link'); ?>" class="btn btn_primary btn_sm d_block w_fit mx_auto border_none"><?= the_field('contact_btn_text'); ?></a>
        <?php } ?>    
    </div>
</section>