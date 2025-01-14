<?php
/**
 * Template part for Content Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section class="contactbox d_block w_100">
    <div class="row d_flex flow_wrap justify_content-center gap_xl mx_auto w_100">
        <div class="contactbox__aside d_flex flex_column gap_xxl w_100">
            <div class="d_flex flex_column w_100">
                <button data-contactbox-open="#contact" class="contactbox__btn text_sm d_flex align_items-center w_100 bg_trans active" data-txt-color="black" data-txt-weight="600" data-txt-transform="uppercase" type="button">contact us</button>
                <button data-contactbox-open="#work" class="contactbox__btn text_sm d_flex align_items-center w_100 bg_trans" data-txt-color="black" data-txt-weight="600" data-txt-transform="uppercase" type="button">work with us</button>
            </div>   
        </div>

        <div class="contactbox__select d_block w_100">
            <div class="input position_relative d_flex w_100">&nbsp;
                <select type="text" class="position_absolute top_0 left_0 d_block w_100 h_100 border_none bg_none zindex_2" data-txt-weight="700" data-txt-transform="uppercase">
                    <option value="#contact">contact us</option>
                    <option value="#work">work with us</option>
                </select>
                
                <svg xmlns="http://www.w3.org/2000/svg" class="d_block position_absolute fill_black zindex_1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/></svg>
            </div>
        </div>
           
        <div class="contactbox__content w_100">
            <div id="contact" class="contactbox__tab d_block w_100 active">
                <div class="contactbox__form d_flex flex_column gap_md w_100">
                    <h3 class="d_block w_100 title_xs" data-txt-color="black" data-txt-weight="700" data-txt-transform="uppercase" data-txt-align="center">contact us</h3>
                    <?= do_shortcode( '[contact-form-7 id="023e3e8" title="Contact Form"]' ); ?>
                </div>
            </div>

            <div id="work" class="contactbox__tab d_none w_100">
                <div class="contactbox__form d_flex flex_column gap_md w_100">
                    <h3 class="d_block w_100 title_xs" data-txt-color="black" data-txt-weight="700" data-txt-transform="uppercase" data-txt-align="center">work with us</h3>
                    <?= do_shortcode( '[contact-form-7 id="ad0c3bb" title="Work Form"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact__map d_block w_100">
    <div class="row d_flex flow_wrap align_items-start gap_xl mx_auto w_100">
        <div class="contact__info d_flex flex_column gap_md w_100">
            <h2 class="title_xxs d_block w_100" data-txt-weight="700"><?= the_field('contact_title'); ?></h2>
            
            <p class="d_block text_xs w_100" data-txt-line="lg"><?= the_field('contact_text'); ?></p>
        
            <div class="text_xxs d_flex flex_column gap_md w_100" data-txt-color="black">
                <div class="d_flex flex_row gap_sm">
                    <span class="d_block w_fit" data-txt-weight="600">Adress:</span>
                    <adress><?= the_field('contact_adress', 'option'); ?></adress>
                </div>

                <div class="d_flex flex_row gap_sm">
                    <span class="d_block w_fit" data-txt-weight="600">Phone:</span>
                    <a href="tel:+<?= the_field('contact_phone', 'option'); ?>" data-txt-color="black" data-txt-decoration="none">+<?= the_field('contact_phone', 'option'); ?></a>
                </div>

                <div class="d_flex flex_row gap_sm">
                    <span class="d_block w_fit" data-txt-weight="600">Email:</span>
                    <a href="mailto:<?= the_field('contact_email', 'option'); ?>" data-txt-color="black" data-txt-decoration="none"><?= the_field('contact_email', 'option'); ?></a>
                </div>

                <div class="d_flex flex_row gap_sm">
                    <span class="d_block w_fit" data-txt-weight="600">Fax:</span>
                    <a href="tel:+<?= the_field('contact_fax', 'option'); ?>" data-txt-color="black" data-txt-decoration="none">+<?= the_field('contact_fax', 'option'); ?></a>
                </div>
            </div>
        </div>    
    
        <div class="contact__iframe d_block w_100">
            <?= the_field('contact_map'); ?>
        </div>
    </div>
</section>