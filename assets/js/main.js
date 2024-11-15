jQuery(document).ready(function($){
    const html_tag = $('html, body');
    const header = $('.header');
    const header__toggler = $('.header__toggler');
    const nav = $('.nav');
    const wsp = $('.whatsapp');
    const footer = $('.footer');
    const backtop = $('.backtop');
    const search__form = $('#footer-search');
    const search__input = $('.searchbox__input');
    const search__error = $('.searchbox__error');

    const on__none = (e) => e.addClass('d_none');
    const off__none = (e) => e.removeClass('d_none');
    const on__fixed = (e) => e.addClass('fixed');
    const off__fixed = (e) => e.removeClass('fixed');
    const on__active = (e) => e.addClass('active');
    const off__active = (e) => e.removeClass('active');
    
    /* SCROLL HEADER */
    $(window).on('scroll', (e) => {
        let scrollpos = window.scrollY;
        let bottomset = window.scrollY + window.innerHeight;
        var footer_top = (footer.offset().top + 16);
        if (scrollpos >= 5) { on__fixed(header); on__fixed(nav); on__active(backtop); }
        else { off__fixed(header); off__fixed(nav); off__active(backtop); }
        if( bottomset > footer_top ) { off__active(wsp); }
        else { on__active(wsp); }
    });

    header__toggler.on('click', (e) => {
        if(!header__toggler.hasClass('active')) { on__active(header__toggler); on__active(nav); }
        else { off__active(header__toggler); off__active(nav); }
    });

    nav.on('click', (e) => {
        if(nav.hasClass('active')) { off__active(header__toggler); off__active(nav); }
    });

    backtop.on('click', (e) => { html_tag.animate({scrollTop: 0}); });

    search__form.on('submit', (e) => {
        let target = $(e.target).serialize().split('s=');
        let length = target[1].length;
        if( length >= 1 ) { return true; } 
        else { off__none(search__error);  return false;  }
    });

    search__input.on('keyup', (e) => {
        let val = $(e.target).val().length;
        if ( val >= 1 && !search__error.hasClass('d_none') ) { on__none(search__error); }
        if ( val < 1 ) { off__none(search__error); }
    });
});