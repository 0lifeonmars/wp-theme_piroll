jQuery(document).ready(function($){
    var footer_col_one = $('[data-footer-nav="1"]');
    var footer_col_two = $('[data-footer-nav="2"]');
    var footer_col_three = $('[data-footer-nav="3"]');
    var footer_col_contact = $('[data-footer-nav="contact"]');
    var header_nav_home = $('[data-header-type=home] .header__nav');
    var header_nav_page = $('[data-header-type="page"] .header__nav');
    var nav_home = $('[data-nav-type="home"] ul');
    var nav_page = $('[data-nav-type="page"] ul');

    /* API <HEADER> & <NAV> || HOME PAGE NAVIGATION */
    $.getJSON("http://localhost/wp_piroll/wp-json/menus/v1/menus/3", function(data){
        const header_items  = data.items;
        for(var i in header_items) {
            let header_item_home = `<li><a href="${header_items[i].url}" data-txt-color="black" data-txt-weight="700" data-txt-transform="uppercase" data-txt-decoration="none">${header_items[i].title}</a></li> `;
            let nav_item_home = `<li class="d_block w_100"><a href="${header_items[i].url}" class="nav__link d_block w_100" data-txt-color="white" data-txt-weight="700" data-txt-transform="uppercase" data-txt-decoration="none">${header_items[i].title}</a></li> `;
            header_nav_home.append(header_item_home);
            nav_home.append(nav_item_home);
        }
    });

    /* API <HEADER> & <NAV> || OTHER PAGES NAVIGATION */
    $.getJSON("http://localhost/wp_piroll/wp-json/menus/v1/menus/8", function(data){
        const header_items  = data.items;
        for(var i in header_items) {
            let header_item_page = `<li><a href="${header_items[i].url}" data-txt-color="black" data-txt-weight="700" data-txt-transform="uppercase" data-txt-decoration="none">${header_items[i].title}</a></li> `;
            let nav_item_page = `<li class="d_block w_100"><a href="${header_items[i].url}" class="nav__link d_block w_100" data-txt-color="white" data-txt-weight="700" data-txt-transform="uppercase" data-txt-decoration="none">${header_items[i].title}</a></li> `;
            header_nav_page.append(header_item_page);
            nav_page.append(nav_item_page);
        }
    });

    /* FOOTER <UL> CONTACT */
    $.getJSON("http://localhost/wp_piroll/wp-json/menus/v1/menus/7", function(data){ 
        const footer_items = data.items;
        for(var i in footer_items) {
            let links_col = `<li><a href="${footer_items[i].url}" target="_blank" class="d_block" data-txt-color="white" data-txt-weight="500">${ footer_items[i].title }</a></li>`;
            footer_col_contact.append(links_col);
        }
    });

    /* FOOTER <UL> COL 1 */
    $.getJSON("http://localhost/wp_piroll/wp-json/menus/v1/menus/5", function(data){ 
        const footer_items = data.items;
        for(var i in footer_items) {
            let links_col = `<li><a href="${footer_items[i].url}" class="d_block" data-txt-color="white" data-txt-weight="500" data-txt-transform="capitalize">${ footer_items[i].title }</a></li>`;
            footer_col_one.append(links_col);
        }
    });

    /* FOOTER <UL> COL 2 */
    $.getJSON("http://localhost/wp_piroll/wp-json/menus/v1/menus/6", function(data){
        const footer_items = data.items;
        for(var i in footer_items) {
            let links_col = `<li><a href="${footer_items[i].url}" class="d_block" data-txt-color="white" data-txt-weight="500" data-txt-transform="capitalize">${ footer_items[i].title }</a></li>`;
            footer_col_two.append(links_col);
        }
    });
    
    /* FOOTER <UL> COL 3 */
    $.getJSON("http://localhost/wp_piroll/wp-json/menus/v1/menus/4", function(data){ 
        const footer_items = data.items;    
        for(var i in footer_items) {
            let links_col = `<li><a href="${footer_items[i].url}" target="_blank" class="d_block" data-txt-color="white" data-txt-weight="500" data-txt-transform="capitalize">${ footer_items[i].title }</a></li>`;
            footer_col_three.append(links_col);
        }
    });

    /* ARCHIVE URL */
    $.getJSON("http://localhost/wp_piroll/wp-json/wp/v2/pages/170", function(data){ 
        var archive_url = data.acf.archive_page_url;
        $(".archive__btn").attr("href", archive_url);
    });
});