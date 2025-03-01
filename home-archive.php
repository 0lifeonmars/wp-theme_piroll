<?php 
/**
 * Template Name: Archive Page
 */
get_header();
?>
<main class="main">
    <?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'archive' );

            endwhile;
            the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
        endif;
    ?>
</main>
<?php
get_footer();