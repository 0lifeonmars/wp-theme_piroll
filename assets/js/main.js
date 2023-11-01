jQuery(document).ready(function($){
    let scrollpos = window.scrollY;
    var scrollChange = 5;
    var body = $('body');
    var header = $('.header');
    var header__toggler = $('.header__toggler');
    var nav = $('.nav');
    var nav__close = $('.nav__close, .nav ul');
    var nav__container = $('.nav__container');
    var work_btn = $('.work__btn');
    var work_iframe = $('.work__iframe');
    var work_play = $('.work__play');

    const on__fixed = (e) => e.addClass("fixed");
    const off__fixed = (e) => e.removeClass("fixed");
    const on__none = (e) => e.addClass("d_none");
    const off__none = (e) => e.removeClass("d_none");
    const on__flex = (e) => e.addClass("d_flex");
    const on__active = (e) => e.addClass("active");
    const off__active = (e) => e.removeClass("active");
    const on__overflowHidden = (e) => e.addClass("overflow_hidden");
    const off__overflowHidden = (e) => e.removeClass("overflow_hidden");
    const on__slideInLeft = (e) => e.addClass("animation__slideInLeft");
    const off__slideInLeft = (e) => e.removeClass("animation__slideInLeft");
    const on__slideOutLeft = (e) => e.addClass("animation__slideOutLeft");
    const off__slideOutLeft = (e) => e.removeClass("animation__slideOutLeft");
    
    /* SCROLL HEADER */
    $(window).on('scroll', (e) => {
        scrollpos = window.scrollY;
        if (scrollpos >= scrollChange) { on__fixed(header); }
        else { off__fixed(header); }
    });

    /* DESLIZAR MENu MOBILE */
    header__toggler.on('click', (e) => {
        if(nav.hasClass('d_none')) {
            off__none(nav); on__flex(nav);
            on__active(header__toggler);
            on__slideInLeft(nav); on__slideInLeft(nav__container);
            on__overflowHidden(body);
        }

        else if(nav.hasClass('animation__slideOutLeft')) {
            on__active(header__toggler);
            off__slideOutLeft(nav); off__slideOutLeft(nav__container);
            on__slideInLeft(nav); on__slideInLeft(nav__container);
            on__overflowHidden(body);
        }
        else { e.preventDefault(); }
    });

    /* CERRAR NAV AL HACER CLICK EN LINKS */
    nav__close.on('click', (e) => {
        if(nav.hasClass('animation__slideInLeft')) {
            off__active(header__toggler);
            off__slideInLeft(nav); off__slideInLeft(nav__container);
            on__slideOutLeft(nav); on__slideOutLeft(nav__container);
            off__overflowHidden(body);
        }
        else { e.preventDefault(); }
    });

    /* REPRODUCIR VIDEO DE YOUTUBE SECCION WORK */
    work_btn.on('click', (e) => {
        let autoplay_status = String(work_iframe.attr('src'));
        const autplay_true = '?autoplay=1';
        work_play.addClass("d_none");
        work_iframe.attr('src', autoplay_status + autplay_true);
    });

    /* SLIDER TESTIMONIOS */
    $('.testimonials__carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true,
        arrows: false,
        infinite: true,
    });

    /* SLIDER CLIENTES */
    $('.clients__carousel').slick( {
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true, 
        autoplaySpeed: 2500,
        dots: false,
        arrows: false,
        infinite: false,
        draggable: false,
        responsive: [
            { breakpoint: 1025, settings: { slidesToShow: 4, autoplay: true, infinite: true } },
            { breakpoint: 769, settings: { slidesToShow: 3, autoplay: true, infinite: true } },
            { breakpoint: 536, settings: { slidesToShow: 2, autoplay: true, infinite: true } },
            { breakpoint: 351, settings: { slidesToShow: 1, autoplay: true, infinite: true } }
        ]
    });

    $('.sharepostbox').appendTo('.singlebox__data');

    var grid__initial_boxes = 5;
    const tag_productbox = $('.archive__grid .productbox');
    const tag_morebtn = $('.archive__load');
    const total_archiveboxes = tag_productbox.length;
    const total_moreboxes = 2;
    tag_productbox.css({'display':'none'});
    tag_productbox.slice(0, grid__initial_boxes).css({'display':'block'});
    tag_morebtn.on('click', (e) => {
        e.preventDefault();
        tag_productbox.slice(0, grid__initial_boxes + total_moreboxes).fadeIn(800);;
        grid__initial_boxes = grid__initial_boxes + total_moreboxes;
        if(grid__initial_boxes >= total_archiveboxes) { e.preventDefault(); tag_morebtn.fadeOut(500); } 
    });
});