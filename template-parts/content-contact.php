<?php
/**
 * Template part for Content Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section id="contact_page" class="section" data-bg-color="grey-tint-08">
    <div class="row d_flex flow_wrap justify_content-center mx_auto w_100">
        <div class="contact__data d_flex flex_column w_100">
            <h2 class="section__title d_block w_100" data-txt-weight="600"><?= the_field('contact_title');?></h2>
            <div class="singlebox__content d_flex flex_column" data-txt-color="black" data-txt-weight="400" data-txt-align="left">
                <p><?= the_field('contact_text');?></p>
            </div>

            <div class="singlebox__data d_flex flex_column w_100">
                <div class="databox d_flex align_items-center w_100" data-txt-weight="400">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Address:</strong>
                    <span class="databox__text d_block w_100"><?= the_field('contact_address');?></span>
                </div>    

                <div class="databox d_flex align_items-center w_100">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Phone:</strong>
                    <a href="telto:+<?= the_field('contact_phone');?>" class="databox__text  d_block w_100" data-txt-color="black" data-txt-decoration="none">+<?= the_field('contact_phone');?></a>
                </div>

                <div class="databox d_flex align_items-center w_100">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Email:</strong>
                    <a href="mailto:<?= the_field('contact_email');?>" class="databox__text  d_block w_100" data-txt-color="black" data-txt-decoration="none"><?= the_field('contact_email');?></a>
                </div>

                <div class="databox d_flex align_items-center w_100">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Fax:</strong>
                    <span class="databox__text  d_block w_100">+<?= the_field('contact_fax');?></span>
                </div>
            </div>    
        </div>
                    
        <div class="contact__container w_100">
            <?= the_content(); ?>
        </div>
    </div>
</section>

<section id="contact_map" data-bg-color="grey-tint-08">
    <div class="row mx_auto w_100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.740487067911!2d-118.32845092377991!3d34.10178801511169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf3903aaafc3%3A0x5d8af2534742eba0!2sFrolic%20Room!5e0!3m2!1ses-419!2scl!4v1698375276115!5m2!1ses-419!2scl" class="d_block max_100 w_100"></iframe>
    </div>
</section>