<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piroll
 */
?>
<section class="pagenone d_block w_100" data-bg-color="white">
	<div class="row mx_auto w_100 h_100 d_flex flex_column justify_content-center align_items-center gap_lg" data-txt-align="center" data-txt-weight="400">
		<h2 class="title_lg d_block w_100" data-txt-weight="700" data-txt-transform="uppercase">¡no results found!</h2>
		<p class="text_xl d_block w_100" data-txt-weight="500">we are sorry, we did not find anything</p>

		<div class="pagenone__search d_flex flex_column gap_xxs mx_auto w_100" data-bg-color="grey-tint-07">
			<form id="footer-search" class="searchbox position_relative d_flex flow_wrap align_items-center w_100" role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input class="searchbox__input d_block w_100 border_none" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Search something..." data-bg-color="white">
                <button class="searchbox__btn btn_primary d_flex justify_content-center align_items-center w_100 border_none p_0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_white" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                    <span class="friendly_anchortext">buscar</span>
                </button>
				<span class="searchbox__error text_xxs d_none w_100" data-txt-color="red" data-txt-weight="600" data-txt-align="left">*Please enter your search</span>
            </form>
		</div>

		<div class="pagenone__action d_flex flow_wrap justify_content-center align_items-center gap_xl w_100">
			<a href="<?= get_home_url();?>" class="btn btn_primary btn_lg d_block w_fit">go back home</a>
			<a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="btn btn_black btn_lg d_block w_fit">view our work</a>
		</div>
	</div>
</section>
