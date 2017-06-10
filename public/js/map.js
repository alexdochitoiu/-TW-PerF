var map;

$(document).ready(function() {

	var marker;
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
		getCoordsAfterClick();
        createMarkList(clientPos, "school");
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
   					console.log(latLng);
       				createMarker(latLng, icn, name);
     			}
  			}
		}
	}

	//Coords after click(pentru "adauga anunt")
	function getCoordsAfterClick() {
		google.maps.event.addListener(map, "click", function(event) {
    		//console.log(marker);
    		marker.setMap(null);
    		var lat = event.latLng.lat();
    		var lng = event.latLng.lng();
    		
    		var latLng = new google.maps.LatLng(lat, lng);
    		icn = 'http://agbs.in/img/1387903479_Map-Marker-Marker-Outside-Chartreuse.png';
    		name = "Noul dumneavoastra anunt.";
    		createMarker(latLng, icn, name);
    		
    		console.log("Lat=" + lat + "; Lng=" + lng);
		});
	}

});