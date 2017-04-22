
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



var openPhotoSwipe = function() {
    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = [
        {
            src: 'images/house/img1.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img2.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img3.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img4.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img5.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img6.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img7.jpeg',
            w: 960,
            h: 640
        },
        {
            src: 'images/house/img8.jpeg',
            w: 960,
            h: 640
        }
    ];

    // define options (if needed)
    var options = {
        // history & focus options are disabled on CodePen
        history: false,
        focus: false,

        showAnimationDuration: 0,
        hideAnimationDuration: 0

    };

    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};

document.getElementById('imgGallery').onclick = openPhotoSwipe;


var map = new ol.Map({
    target: 'map',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: [0, 0],
        zoom: 2
    })
});