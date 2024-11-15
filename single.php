<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package piroll
 */

get_header();
?>
<main class="d_block w_100">
	<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'get_post_type()' );
		endwhile;
	?>
</main><!-- #main -->

<script>
(function($){
	$('.databox__link').click(function(event){
		event.preventDefault();
        //popup 
        var width  = 650,
        height = 650,
        left   = ($(window).width()  - width)  / 2,
        top    = 0,
        opts   = 'status=1' +
        ',width='  + width  +
        ',height=' + height +
        ',top='    + top    +
        ',left='   + left;
        window.open($(this).attr("href"), 'share', opts); 
	});
})(jQuery);
</script>
<?php
get_footer();