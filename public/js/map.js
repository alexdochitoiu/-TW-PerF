var map;
var adaugaAnunt = document.getElementById('adaugaAnunt');
var tipImobil = "all";


$(document).ready(function() {

	var marker;
	var layer;
	//Apelam prima data geoLocation pentru a afla coordonatele clientului
	geoLocationInit();

	//Find Geolocation
	function geoLocationInit() {
		if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(success, fail);
		}
		else {
			alert("Geolocation fail.");
		}
	}

	function success(position) {
		//console.log(position);
		var latVal = position.coords.latitude;
		var lngVal = position.coords.longitude;
		//console.log(lngVal, latVal);
		var clientPos = new google.maps.LatLng(latVal, lngVal);
		createMap(clientPos);
		//console.log(clientPos);
		var marker= new google.maps.Marker({
        	position: clientPos,
    		map: map,
    		title: "Locatia Dumneavoastra."
        });
	}

	function fail() {
		alert("Avem nevoie de locatia dumneavoastra pentru a va arata imobilele din jurul dumneavoastra.");
		//default Coords
		var defaultPos = new google.maps.LatLng(47.151726, 27.587914);
		createMap(defaultPos);	
	}

	//Create Map
	function createMap(clientPos) {
		map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 16,
        	center: clientPos,
        });

        if(adaugaAnunt)
			getCoordsAfterClick();
		else {
			//createMarkList(clientPos, "school");
			createLayers();
			getAll();
		}
	}

	//Create marker
	function createMarker(latLng, icn, name) {
		var newMarker = new google.maps.Marker({
    			position: latLng,
    			map: map,
    			icon: icn,
    			title: name
  			});
		marker = newMarker;
		if(adaugaAnunt == null)
			popupInfoMarker(marker);
	}

	//Create marker pentru anunt
	function createMarkerForAnunt(latLng, icn, name, anunt) {
		var newMarker = new google.maps.Marker({
    			position: latLng,
    			map: map,
    			icon: icn,
    			title: name
  			});
		marker = newMarker;
		if(adaugaAnunt == null)
			popupInfoMarker(marker, anunt);
	}

	//Create mark List(O lista de markere de acelasi tip)
	function createMarkList(clientPos, type) {
		var request = {
    		location: clientPos,
    		radius: '4000000',
    		types: [type]
  		};

		service = new google.maps.places.PlacesService(map);
		service.nearbySearch(request, callback);

		function callback(results, status) {
			//console.log(results);
   			if (status == google.maps.places.PlacesServiceStatus.OK) {
     			for (var i = 0; i < results.length; i++) {
       				var place = results[i];

   					latLng = place.geometry.location;
   					icn = 'http://agbs.in/img/1387903479_Map-Marker-Marker-Outside-Chartreuse.png';
   					name = place.name;
   					//console.log(latLng);
       				createMarker(latLng, icn, name);
       				marker = null;
     			}
  			}
		}
	}

	//Coords after click(pentru "adauga anunt")
	function getCoordsAfterClick() {
		google.maps.event.addListener(map, "click", function(event) {
    		//console.log(marker);
    		if(marker != null)
    			marker.setMap(null);
    		var lat = event.latLng.lat();
    		var lng = event.latLng.lng();

    		var latLng = new google.maps.LatLng(lat, lng);
    		icn = 'images/google-map/terenuri-marker.png';
    		name = "Noul dumneavoastra anunt.";
    		createMarker(latLng, icn, name);
    		
    		console.log("Lat=" + lat + "; Lng=" + lng);
		});
	}

	function popupInfoMarker(marker, anunt) {
		$.get("/api/anunturi/" + anunt.id, function(imobil) {
			var locuinta;
			var zona;
			locuinta = imobil.localitate;
			zona = imobil.zona;
		
			var contentString = '<h4><a href="/anunturi/' + anunt.id + '">' + anunt.titlu + '</a></h4>' + 
				'<h6><b> de ' + anunt.tipTranzactie + '</b></h6>' +
				'<h6><b>Pret:</b> ' + anunt.pret + '</h6>' +
				'<h6><b>Localitate:</b> ' + locuinta + '</h6>' +
				'<h6><b>Zona:</b> ' + zona + '</h6>';

	        var infowindow = new google.maps.InfoWindow({
	          content: contentString
	        });

	        marker.addListener('click', function() {
	          infowindow.open(map, marker);
	        });
        });
    }

    function createLayers() {
    	//TrafficLayer
		var trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);

        //layer
        var layerCoords = [
          {lat: 47.14167495211281, lng: 27.60015606880188},
          {lat: 47.146555376804145, lng: 27.61065101636632},
          {lat: 47.14286591116594, lng: 27.636340141034452},
          {lat: 47.143216188120405, lng: 27.65367794141639},
          {lat: 47.141108653146105, lng: 27.659870624574978},
          {lat: 47.13715315163723, lng: 27.606934547457058}
        ];

        var layer = new google.maps.Polygon({
        	paths: layerCoords,
        	strokeColor: "#000000",
        	strokeOpacity: 0.3,
        	fillColor: "#000000",
        	fillOpacity: 0.3
        })

        layer.setMap(map);

        //layer
		var layerCoords = [
          {lat: 47.19317705096081, lng: 27.547737118438818},
          {lat: 47.18635265579396, lng: 27.54413223476149},
          {lat: 47.178343077436566, lng: 27.55110168378451},
          {lat: 47.179407784808774, lng: 27.55384826581576},
          {lat: 47.18626223840244, lng: 27.557946682500187},
          {lat: 47.19276877671284, lng: 27.554346086690202}
        ];

        var layer = new google.maps.Polygon({
        	paths: layerCoords,
        	strokeColor: "#009900",
        	strokeOpacity: 0.3,
        	fillColor: "#009900",
        	fillOpacity: 0.3
        })

        layer.setMap(map);

        //layer
		var layerCoords = [
          {lat: 47.16525563746856, lng: 27.60733794537373},
          {lat: 47.15031463294404, lng: 27.578498834045604},
          {lat: 47.199090809524066, lng: 27.5546379131265},
          {lat: 47.18905918011078, lng: 27.587425225647166}
        ];

        var layer = new google.maps.Polygon({
        	paths: layerCoords,
        	strokeColor: "#990000",
        	strokeOpacity: 0.3,
        	fillColor: "#990000",
        	fillOpacity: 0.3
        })

        layer.setMap(map);
    }

    function getAll() {
    	$.get("../api/anunturi", function(anunturi) {
    		//console.log(anunturi);
    		for (var i = 0; i < anunturi.length; i++) {
    			var latLng = new google.maps.LatLng(anunturi[i].latitudine, anunturi[i].longitudine);
    			if(anunturi[i].tipImobil == 0)
    				var icn = '../images/google-map/terenuri-marker.png';
    			else
    				if(anunturi[i].tipImobil == 1)
    					var icn = '../images/google-map/birouri-marker.png';
    				else
    					var icn = '../images/google-map/locuinte-marker.png';
    			var name = anunturi[i].titlu;

    			createMarkerForAnunt(latLng, icn, name, anunturi[i]); 
    		}
    	});
    }
});