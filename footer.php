<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piroll
 */

?>
<footer class="footer" data-bg-color="black">
    <div class="row d_flex flow_wrap justify-content-center mx_auto w_100">
        <div class="footer__col d_flex flex_column mx_auto w_100" data-footer-col="1">
        <?php dynamic_sidebar( 'footer_widget_disclaimer' ); ?>
        </div>

        <div class="footer__col d_flex mx_auto w_100" data-footer-col="2">
        	<div class="footer__contact">
            	<ul class="d_flex flex_column" data-footer-nav="contact"></ul>
            </div>

            <div class="footer__nav d_flex flow_wrap">
                <ul class="d_flex flex_column" data-footer-nav="1"></ul>
                <ul class="d_flex flex_column" data-footer-nav="2"></ul>
                <ul class="d_flex flex_column" data-footer-nav="3"></ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
