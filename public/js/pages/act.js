$(function(){
    $('#recentActCarousel').on('slide.bs.carousel', function (e) {
        // do something…
        // console.log($('.j_act_info p').eq(e.to))
        $('.j_act_info p').removeClass('active').eq(e.to).addClass('active')
    })
})