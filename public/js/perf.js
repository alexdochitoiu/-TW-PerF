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

    $('#select_add_announce').on('click', function () {

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


    //MAP Scripts
    //
    // Holds the Polygon feature

    //Bularga - Tigani (layer)
    var polyFeature1 = new ol.Feature({
        geometry: new ol.geom.Polygon([
            [
                [27.59240, 47.14743],
                [27.60695, 47.13709],
                [27.62231, 47.14500],
                [27.59459, 47.14906]
            ]
        ])
    });
    var style1 = new ol.style.Style({
        //I don't know how to get the color of your kml to fill each room
        //fill: new ol.style.Fill({ color: '#000' }),
        stroke: new ol.style.Stroke({ color: '#000' }),
        fill: new ol.style.Fill({ color: 'rgba(0, 0, 0, 0.20)' })
    });
    polyFeature1.setStyle(style1);
    polyFeature1.getGeometry().transform('EPSG:4326', 'EPSG:3857');

    // Layer 2 Frumoasa (Aer curat - verde)
    var polyFeature2 = new ol.Feature({
        geometry: new ol.geom.Polygon([
            [
                [27.60585, 47.13734],
                [27.57272, 47.13407],
                [27.57457, 47.10958],
                [27.63534, 47.11215]
            ]
        ])
    });
    var style2 = new ol.style.Style({
        //I don't know how to get the color of your kml to fill each room
        //fill: new ol.style.Fill({ color: '#000' }),
        stroke: new ol.style.Stroke({ color: '#0F5E01' }),
        fill: new ol.style.Fill({ color: 'rgba(26, 153, 3, 0.20)' })
    });
    polyFeature2.setStyle(style2);
    polyFeature2.getGeometry().transform('EPSG:4326', 'EPSG:3857');

    //Layer 3
    var polyFeature3 = new ol.Feature({
        geometry: new ol.geom.Polygon([
            [
                [27.58021, 47.16931],
                [27.56995, 47.18328],
                [27.55807, 47.17932],
                [27.56867, 47.17156]
            ]
        ])
    });
    var style3 = new ol.style.Style({
        //I don't know how to get the color of your kml to fill each room
        //fill: new ol.style.Fill({ color: '#000' }),
        stroke: new ol.style.Stroke({ color: '#be0000' }),
        fill: new ol.style.Fill({ color: 'rgba(179, 0, 0, 0.20)' })
    });
    polyFeature3.setStyle(style3);
    polyFeature3.getGeometry().transform('EPSG:4326', 'EPSG:3857');

//A vector layer to hold the features
    var vectorLayer = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: [polyFeature1, polyFeature2, polyFeature3]
        })
    });

    var layer = new ol.layer.Tile({
        source: new ol.source.OSM()
    });

    var defaultLoc = ol.proj.transform([47.1584549, 27.601441799999975], 'EPSG:4326', 'EPSG:3857');

    var view = new ol.View({
        center: defaultLoc,
        zoom: 16
    });

    var map = new ol.Map({
        target: 'map',
        layers: [layer, vectorLayer],
        view: view,
        controls: ol.control.defaults().extend([
            new ol.control.FullScreen()
        ]),
    });

    // create an Overlay using the div with id location.
    var marker = new ol.Overlay({
        element: document.getElementById('location'),
        positioning: 'center-center',
        stopEvent: false
    });

    // add it to the map
    map.addOverlay(marker);
    // create a Geolocation object setup to track the position of the device
    var geolocation = new ol.Geolocation({
        tracking: true
    });

    // bind the projection to the view so that positions are reported in the
    // projection of the view
    geolocation.bindTo('projection', view);

    // bind the marker's position to the geolocation object, the marker will
    // move automatically when the GeoLocation API provides position updates
    marker.bindTo('position', geolocation);
    // when the GeoLocation API provides a position update, center the view
    // on the new position
    geolocation.on('change:position', function() {
        var p = geolocation.getPosition();
        console.log(p[0] + ' : ' + p[1]);
        view.setCenter([parseFloat(p[0]), parseFloat(p[1])]);
    });

};