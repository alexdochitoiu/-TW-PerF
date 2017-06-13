//Verificare pentru pos actuala sau afisare harta
$('#select_marker_method').on('change', function () {

    if ($("#select_marker_method").val() == "posActuala") {
        $('#mapSelected').addClass('display-search');
        getLocation();
    }
    else {
        $('#mapSelected').removeClass('display-search');
    }
});

//Get geolocation for adauga anunt
  function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(sendGeolocation);
    } else {
        alert("Avem nevoie de locatia dumneavoastra pentru a localiza coordonatele imobilului pe care doriti sa-l vindeti.");
    }
  }

  //Trimitem coordonatele catre id-urile din HTMl
  function sendGeolocation(position) {
    document.getElementById('longitudine').value = position.coords.longitude;
    document.getElementById('latitudine').value = position.coords.latitude;
  }


//Harta + layere + geolocation + markere pentru imobile
var map;
var adaugaAnunt = document.getElementById('adaugaAnunt');
var posActuala = document.getElementById('posActuala');


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
    		document.getElementById('longitudine').value = lng;
        document.getElementById('latitudine').value = lat;
    		//console.log("Lat=" + lat + "; Lng=" + lng);
		});
	}

	function popupInfoMarker(marker, anunt) {
		$.get("/api/anunturi/" + anunt.id, function(imobil) {
			var locuinta;
			var zona;
			locuinta = imobil.localitate;
			zona = imobil.zona;

      if(anunt.tipTranzactie == "Inchiriere") {
        anunt.tipTranzactie = "Inchiriat";
      }
		
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

      //smog layer
       for(var i = 1; i < 19; i++) {
         var url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=smog&has_geo=1&extras=geo&per_page=500&page=" + i;
         extractCoordsFromFlickr(url, "smog");
         if(i <= 2) {
           url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=fum&has_geo=1&extras=geo&per_page=500&page=" + i;
           extractCoordsFromFlickr(url, "smog");
         }
       }

      //traffic layer
      for(var i = 1; i < 392; i++) {
        var url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=traffic&has_geo=1&extras=geo&per_page=500&page=" + i;
        extractCoordsFromFlickr(url, "traffic");
        if(i < 30) {
          url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=crowded&has_geo=1&extras=geo&per_page=500&page=" + i;
          extractCoordsFromFlickr(url, "traffic");
        }
        if(i < 8) {
          url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=trafic&has_geo=1&extras=geo&per_page=500&page=" + i;
          extractCoordsFromFlickr(url, "traffic");
        }
      }

      //fresh air
      for(var i = 1; i < 501; i++) {
        var url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=fresh+air&has_geo=1&extras=geo&per_page=500&page=" + i;
        extractCoordsFromFlickr(url, "freshAir");
        if(i < 5) {
          url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c58d15a58b51ccec41c7f192cda47279&tags=fresh+air&has_geo=1&extras=geo&per_page=500&page=" + i;
          extractCoordsFromFlickr(url, "freshAir");
        }
      }
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


  function extractCoordsFromFlickr(url, type) {
      $.getJSON(url + "&format=json&jsoncallback=?", function(data){
        for(var i = 0; i < data.photos.photo.length;i++) {
           if(data.photos.photo[i].latitude < 48.201245706978675 && data.photos.photo[i].latitude > 43.615398506450646) {
             if(data.photos.photo[i].longitude > 20.260986294597387 && data.photos.photo[i].longitude < 29.742187466472387) {
              var centerPosLayer = new google.maps.LatLng(data.photos.photo[i].latitude, data.photos.photo[i].longitude);
              createLayer(centerPosLayer, type);
             }
           }
        }
      });
  }


  function createLayer(centerPosLayer, type) {
      if(type == "smog") {
        var colorLayer = '#000000';
        var opacityLayer = 0.06;
      }
      else {
        if(type == "traffic") {
          var colorLayer = '#FF0000';
          var opacityLayer = 0.05;
        }
        else {
          if(type == "freshAir") {
            var colorLayer = '#00e600';
            var opacityLayer = 0.01;
          }
        }
      }
      
      var circleLayer = new google.maps.Circle({
                strokeColor: colorLayer,
                strokeOpacity: opacityLayer,
                strokeWeight: 2,
                fillColor: colorLayer,
                fillOpacity: opacityLayer,
                map: map,
                center: centerPosLayer,
                radius: 1000
            });
  }
});