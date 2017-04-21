
$(window).on('scroll', function () {

    if ($(window).scrollTop() >= 300) {
        $('.header-desktop-normal').addClass('position-fixed');

    }
    else {
        $('.header-desktop-normal').removeClass('position-fixed');

    }
});

$('.toggle-mobile-menu').on("click",function() {
    $(".mobile-menu-container").stop(true, false).slideToggle(400);
    $(this).toggleClass('active');
});



