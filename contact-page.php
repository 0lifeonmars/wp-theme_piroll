<?php 
/**
 * Template Name: Contact Page
 */
get_header();
?>
<main class="main d_flex flex_column gap_xxl w_100 py_xxl" data-bg-color="grey-tint-08">
    <?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'contact' );
            endwhile;

            else :
                get_template_part( 'template-parts/content', 'none' );
        endif;
    ?>
</main>
<?php
get_footer();