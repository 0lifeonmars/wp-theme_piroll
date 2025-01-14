<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
$page_thumbnail = get_the_post_thumbnail_url(get_option('page_for_posts'));
if ( is_search() ) {
	global $wp_query;
	$search_totals = $wp_query->found_posts; 
}
get_header();
?>
<main>
	<section class="pageheader d_block w_100 <?php if($page_thumbnail) { echo 'bg_img bg_center'; } ?>" <?php if($page_thumbnail) { echo 'style="background-image: url('.$page_thumbnail.');"'; } else { echo 'data-bg-color="grey-tint-08"'; } ?>>
		<div class="pageheader__container d_flex align_items-center py_xxl w_100" <?php if($page_thumbnail) { echo 'data-bg-trans="black-60"'; } ?>>
			<div class="row d_flex flex_column align_items-center mx_auto w_100" <?php if($page_thumbnail) { echo 'data-txt-color="white" '; } else { echo 'data-txt-color="black" '; } ?>data-txt-align="center">
				<div class="titlebox d_flex flex_column gap_md w_100" data-txt-weight="400">
					<?php if ( is_home() && !is_front_page() && !is_category() ) {  
						$blog_page_id = get_option('page_for_posts');
						if ($blog_page_id) {
							$acf_title = get_field('work_title', $blog_page_id);
							$acf_subtitle = get_field('work_text', $blog_page_id);
						}
					?>		
						<h2 class="titlebox__title title_md d_block mx_auto w_fit" data-txt-weight="700"><?= $acf_title; ?></h2>
						<p class="titlebox__text text_lg d_block mx_auto w_100" data-txt-line="md"><?= $acf_subtitle; ?></p>
					<?php } else if ( is_search() ) {  ?>
						<h2 class="titlebox__title title_sm d_block mx_auto w_fit" data-txt-weight="700">" <?= get_search_query();?> "</h2>
						<?php if( $search_totals >= 1 ) { ?><p class="titlebox__text text_lg d_block mx_auto w_100" data-txt-line="md"><strong data-txt-weight="600"><?= $search_totals; ?></strong> results found</p><?php } ?>
					<?php } else if( is_category() ) {  ?>
						<h2 class="titlebox__title title_md d_block mx_auto w_fit" data-txt-weight="700" data-txt-transform="uppercase"><?= single_cat_title('' , true );?></h2>
					<?php } else {  ?>
						<h2 class="titlebox__title title_md d_block mx_auto w_fit" data-txt-weight="700" data-txt-transform="uppercase">archivo de posts</h2>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<?php
		if ( have_posts() ) :
			echo '<section class="d_flex flow_wrap justify_content-start align_items-start w_100 max_100">';
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'archive' );
			endwhile;
			echo '<button type="button" class="work__btn d_none w_100 border_none" data-txt-color="grey-shade-07" data-txt-weight="700" data-bg-color="grey-tint-06" data-txt-align="center" data-txt-transform="uppercase" data-txt-decoration="none">load more work</button>';
			echo '</section>';
			
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main><!-- #main -->
<?php
get_footer();
