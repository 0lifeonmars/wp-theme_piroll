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
$wsp_active = get_field('wsp_active', 'option');
$wsp_target = get_field('wsp_target', 'option');
$wsp_link = get_field('wsp_link', 'option');
$post_type = 'post';
?>
<footer class="footer d_block w_100 section" data-txt-color="white" data-bg-color="black">
    <?php if($wsp_active === 'si') {  ?>
            <a href="<?= $wsp_link; ?>" class="whatsapp position_fixed d_flex justify_content-center align_items-center radius_100 zindex_3 active" data-bg-color="primary-shade-05"<?php if($wsp_target === 'si'){ echo ' target="_blank"'; }?> data-txt-decoration="none">
                <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_fit fill_white" viewBox="0 0 16 16"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/></svg>
                <span class="friendly_anchortext">whatsapp</span>
            </a>
    <?php } ?>
    
    <?php if (!is_page_template('home-page.php')) { ?>
        <button class="backtop position_fixed d_flex justify_content-center align_items-center radius_100 border_none w_100 zindex_3" data-bg-color="primary-shade-05" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_white" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5m-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5"/></svg>
            <span class="friendly_anchortext">volver a arriba</span>
        </button>
    <?php } ?>
    
    <div class="row d_flex flow_wrap gap_xxl mx_auto w_100">
        <div class="footer__disclaimer d_flex flex_column gap_sm mx_auto w_100" data-footer-type="col">
            <h2 class="d_block w_100"><?= the_field('footer_title', 'option'); ?></h2>
            <p class="d_block w_100"><?= the_field('footer_disclaimer', 'option'); ?> - © <?= date("Y"); ?> </p>
        </div>

        <div class="footer__menu d_flex mx_auto w_100" data-footer-type="col">
            <div class="footer__col d_flex flex_column gap_xl w_100">
                <?php if(have_posts() || is_404()) { ?>
                    <form id="footer-search" class="searchbox position_relative d_flex flow_wrap align_items-center w_100" role="search" method="get" action="<?php echo home_url('/'); ?>">
                        <input class="searchbox__input d_block w_100 border_none" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Search something..." data-bg-color="white">
                        <button class="searchbox__btn btn_primary d_flex justify_content-center align_items-center w_100 border_none p_0" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_white" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                            <span class="friendly_anchortext">buscar</span>
                        </button>
                        <span class="searchbox__error text_xxs d_none w_100" data-txt-color="red" data-txt-weight="600" data-txt-align="left">*Please enter your search</span>
                    </form>
                <?php } ?>

                <ul class="d_flex flex_column gap_sm">
                    <li><a href="mailto:<?= the_field('contact_email', 'option'); ?>" class="d_block w_fit text_xs" data-txt-color="white" data-txt-decoration="none"><?= the_field('contact_email', 'option'); ?></a></li>
                    <li><a href="tel:+<?= the_field('contact_phone', 'option'); ?>" class="d_block w_fit text_xs" data-txt-color="white" data-txt-decoration="none">+<?= the_field('contact_phone', 'option'); ?></a></li>
                </ul>
            </div>

            <div class="footer__nav d_flex flow_wrap w_fit">
                <div class="d_flex flow_wrap gap_xxl w_fit"> 
                    <?php
                        wp_nav_menu(array(
                            'menu'				=> 'footer-nav-01',
                            'menu_class'		=> 'd_flex flex_column gap_sm w_100',
                            'container_class'	=> 'd_block w_fit'
                        ));
                    ?>
                    
                    <?php
                        wp_nav_menu(array(
                            'menu'				=> 'footer-nav-02',
                            'menu_class'		=> 'd_flex flex_column gap_sm w_100',
                            'container_class'	=> 'd_block w_fit'
                        ));
                    ?>
                </div>

                <div class="d_flex w_fit">
                    <?php
                        wp_nav_menu(array(
                            'menu'				=> 'footer-social',
                            'menu_class'		=> 'd_flex flex_column gap_sm w_100',
                            'container_class'	=> 'd_block w_fit'
                        ));
                    ?>
                </div>                
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
