var map;
var adaugaAnunt = document.getElementById('adaugaAnunt');

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

		var clientPos = new google.maps.LatLng(latVal, lngVal);
		createMap(clientPos);
		console.log(clientPos);
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
			//createLayers();
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

	//Create mark List(cu imobilele din BD)
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
    		console.log(lat);
    		console.log(lng);
    		var latLng = new google.maps.LatLng(lat, lng);
    		icn = 'images/google-map/terenuri-marker.png';
    		name = "Noul dumneavoastra anunt.";
    		createMarker(latLng, icn, name);
    		
    		//console.log("Lat=" + lat + "; Lng=" + lng);
		});
	}

	function popupInfoMarker(marker) {
		var contentString = 'Informatii Imobil';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    }

    function createLayers() {
    	layer = [
    		{lat: 47.151726, lng: 27.587914},
    		{lat: 47.152726, lng: 27.588914},
    		{lat: 47.152726, lng: 27.587914},
    		{lat: 47.151726, lng: 27.586914}
 		];
 		map.data.add({geometry: new google.maps.Data.Polygon([
			layer
		])});
    }

    function getAll() {
    	$.get("api/anunturi", function(anunturi) {
    		console.log(anunturi);
    		for (var i = 0; i < anunturi.length; i++) {
    			var latLng = new google.maps.LatLng(anunturi[i].latitudine, anunturi[i].longitudine);
    			if(anunturi[i].tipImobil == 0)
    				var icn = 'images/google-map/terenuri-marker.png';
    			else
    				if(anunturi[i].tipImobil == 1)
    					var icn = 'images/google-map/birouri-marker.png';
    				else
    					var icn = 'images/google-map/locuinte-marker.png';
    			var name = anunturi[i].titlu;

    			createMarker(latLng, icn, name); 
    		}
    	});
    }
});