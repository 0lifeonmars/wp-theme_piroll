<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
$img_id = get_post_thumbnail_id(get_the_ID());
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$prev_post = get_adjacent_post(false, '', true);
$next_post = get_adjacent_post(false, '', false);
if(!empty($prev_post)) { $prev_link = get_permalink($prev_post->ID); }
if(!empty($next_post)) { $next_link = get_permalink($next_post->ID); }
?>
<section class="singlebox w_100" data-bg-color="grey-tint-08">
    <div class="row d_flex flow_wrap align_items-start gap_xl mx_auto w_100">
        <div class="singlebox__col d_flex flex_column gap_md w_100 py_lg" data-singlebox-type="content">
            <h2 class="title_xs d_block w_100" data-txt-weight="600"><?= get_the_title() ;?></h2>
            
            <div class="singlebox__content text_xs d_flex flex_column gap_md" data-txt-line="md" data-txt-color="black" data-txt-weight="400" data-txt-align="left">
				<?= the_content() ;?>
            </div>

            <div class="singlebox__data position_relative d_flex flex_column gap_md w_100">
                <div class="databox d_flex align_items-center gap_xs w_100 text_xxs" data-txt-weight="400">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Client:</strong>
                    <span class="databox__text d_block w_100">Emma Morris</span>
                </div>

                <div class="databox d_flex align_items-center gap_xs w_100 text_xxs">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Date:</strong>
                    <span class="databox__text  d_block w_100"><?php echo get_the_date('m.d.Y'); ?></span>
                </div>

                <div class="databox d_flex align_items-center gap_xs w_100 text_xxs">
                    <strong class="databox__title d_block w_100" data-txt-weight="600">Author:</strong>
                    <span class="databox__text d_flex align_items-center w_100"><?= get_the_author();?></span>
                </div>
            </div>
        </div>
                    
        <div class="singlebox__col d_flex justify_content-center w_100 h_100">
            <picture class="singlebox__thumbnail d_block w_100 mx_auto">
                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="d_block max_100 w_100 h_auto object_cover object_center" width="600" height="600" loading="lazy" alt="<?= $alt_text; ?>">
            </picture>
        </div>
    </div>
</section>

<section class="singlepag d_block w_100 text_xs py_md" data-txt-weight="600" data-txt-transform="uppercase">
    <div class="row d_flex flow_wrap justify_content-center align_items-center gap_xs mx_auto w_100">
        <div class="singlepag__arrow d_flex justify_content-start align_items-center w_100">
            <?php if(!empty($prev_post)) { ?>
                <a href="<?= $prev_link; ?>" class="single__prev d_flex align_items-center" data-txt-color="black"  data-txt-decoration="none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_black" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
                    <span>previous project</span>
                </a>
            <?php } ?>
        </div>
        
        <div class="singlepag__archive d_flex justify_content-center align_items-center w_100">
            <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="pagination__btn archive__btn d_block" data-txt-color="black" data-txt-decoration="none">
                <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_black" viewBox="0 0 16 16"><path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/></svg>
            </a>
        </div>
        
        <div class="singlepag__arrow d_flex justify_content-end align_items-center w_100">
            <?php if(!empty($next_post)) { ?>
                <a href="<?= $next_link; ?>" class="pagination__btn single__next d_flex align_items-center" data-txt-color="black" data-txt-decoration="none">
                    <span>next project</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_black" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/></svg>
                </a>
            <?php } ?>
        </div>
    </div>
</section>