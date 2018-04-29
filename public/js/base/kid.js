$(function () {
    new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        keyboard: true,
        autoplay:true
    });

    new Swiper('.tc-intro-container', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        autoplay:true
    });
})