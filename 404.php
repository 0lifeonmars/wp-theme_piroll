<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package piroll
 */
get_header();
?>
<main>
	<?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', '404' );

            endwhile;
            the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', '404' );
        endif;
    ?>
</main>
<?php
get_footer();
