window.onload = function(){

    $(window).on('scroll', function () {

        if ($(window).scrollTop() >= 150) {
            $('.header-desktop-normal').addClass('position-fixed');

        }
        else {
            $('.header-desktop-normal').removeClass('position-fixed');

        }
    });

    $('.toggle-mobile-menu').on("click", function () {
        $(".mobile-menu-container").stop(true, false).slideToggle(400);
        $(this).toggleClass('active');
    });

    $('.add_image').on("click", function () {

        var img = document.createElement("img");

        img.src = "image.png";
        var src = document.getElementById("x");

        src.appendChild(img);
    });

    $('#select_add_announce').on('change', function () {

        if ($("#select_add_announce").val() == "locuinta") {

            $('#DivLocuintaID').removeClass('display-search');

        }
        else {
            $('#DivLocuintaID').addClass('display-search');
        }
        if ($("#select_add_announce").val() == "birou") {

            $('#DivBirouID').removeClass('display-search');
        }
        else {
            $('#DivBirouID').addClass('display-search');
        }

        if ($("#select_add_announce").val() == "teren") {

            $('#DivTerenID').removeClass('display-search');
        }
        else {
            $('#DivTerenID').addClass('display-search');
        }
    });

    function help() {
        $('.help_1').on('click', function () {

            $('#ce_este_perf').removeClass('display-search');
            $('#securitate').addClass('display-search');
            $('#ce_pot_vinde').addClass('display-search');
            $('#termeni_si_conditii').addClass('display-search');
            $(".help_1").addClass('display-help');
            $(".help_3").removeClass('display-help');
            $(".help_2").removeClass('display-help');
            $(".help_4").removeClass('display-help');
        });
        $('.help_2').on('click', function () {
            $('#ce_pot_vinde').removeClass('display-search');
            $('#securitate').addClass('display-search');
            $('#ce_este_perf').addClass('display-search');
            $('#termeni_si_conditii').addClass('display-search');
            $(".help_2").addClass('display-help');
            $(".help_1").removeClass('display-help');
            $(".help_3").removeClass('display-help');
            $(".help_4").removeClass('display-help');
        });
        $('.help_3').on('click', function () {
            $('#securitate').removeClass('display-search');
            $('#ce_este_perf').addClass('display-search');
            $('#ce_pot_vinde').addClass('display-search');
            $('#termeni_si_conditii').addClass('display-search');
            $(".help_3").addClass('display-help');
            $(".help_1").removeClass('display-help');
            $(".help_2").removeClass('display-help');
            $(".help_4").removeClass('display-help');
        });
        $('.help_4').on('click', function () {
            $('#termeni_si_conditii').removeClass('display-search');
            $('#ce_este_perf').addClass('display-search');
            $('#ce_pot_vinde').addClass('display-search');
            $('#securitate').addClass('display-search');
            $(".help_4").addClass('display-help');
            $(".help_1").removeClass('display-help');
            $(".help_2").removeClass('display-help');
            $(".help_3").removeClass('display-help');

        });
    }
    help();

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
    $('#imgGallery').on('click', openPhotoSwipe);

//facebook

$('#facebook').on('click',function () {

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '304310343354233',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

});
};