jQuery(document).ready(function($){
    const slider = $('.numberboxes');
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
});