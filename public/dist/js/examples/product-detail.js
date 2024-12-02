$(function () {

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav',
        rtl: $('body').hasClass('rtl') ? true : false,
    });

    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        centerPadding: '60px',
        focusOnSelect: true,
        rtl: $('body').hasClass('rtl') ? true : false,
    });


});
