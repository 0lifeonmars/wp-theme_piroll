jQuery(document).ready(function($){
    const slider = $('.numberboxes');
    const on__active = (e) => e.addClass('active');
    const off__active = (e) => e.removeClass('active');

    slider.slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        pauseOnHover: true,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 3, dots: true } },
            { breakpoint: 768, settings: { slidesToShow: 2, dots: true } },
            { breakpoint: 500, settings: { slidesToShow: 1, dots: true } },
        ]
    });

    $('.serviceboxes').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        pauseOnHover: true,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 3, dots: true } },
            { breakpoint: 768, settings: { slidesToShow: 2, dots: true } },
            { breakpoint: 500, settings: { slidesToShow: 1, dots: true } },
        ]
    });

    $('.testimonialboxes').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        pauseOnHover: true,
    });

    $('.clientboxes').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        pauseOnHover: true,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 4, dots: true } },
            { breakpoint: 768, settings: { slidesToShow: 3, dots: true } },
            { breakpoint: 500, settings: { slidesToShow: 2, dots: true } },
        ]
    });

    const videobox = $('.videobox');
    const videobox_play = $('.videobox__btn');
    const videobox_iframe = $('.videobox iframe');
    const change__src = (a, b) => { a.attr('src', b); };

    videobox_play.on('click', () => {
        let videobox_src = videobox_iframe.attr('src');
        let src_autoplay = videobox_src + '?autoplay=1';
        if(!videobox.hasClass('active')) {
            //videobox_iframe.attr('src', src_autoplay);
            change__src(videobox_iframe, src_autoplay);
            on__active(videobox);
        }
    });
});