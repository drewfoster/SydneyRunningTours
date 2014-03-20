var sydney = new google.maps.LatLng(-33.868705, 151.206787);

var styles = [
        {"featureType":"water",
          "elementType":"geometry",
          "stylers":[
            {"visibility":"on"},
            {"color":"#f8fde2"}
          ]},
        {"featureType":"landscape.man_made",
          "elementType":"geometry.fill",
          "stylers":[
            {"color":"#b7ca65"}
          ]},
        {"featureType":"landscape.natural",
          "elementType":"geometry.fill",
          "stylers":[
            {"color":"#ddf674"}
          ]},  
        {"featureType":"poi",
          "elementType":"geometry.fill",
          "stylers":[
            {"color":"#769E72"}
          ]},
        {"featureType":"poi",
          "elementType":"labels.text.fill",
          "stylers":[
            {"color":"#7B8758"}
          ]},
          {"featureType":"poi",
          "elementType":"labels.text.stroke",
          "stylers":[
          {"color":"#EBF4A4"}
          ]},
          {"featureType":"poi.park",
          "elementType":"geometry",
          "stylers":[
          // {"visibility":"simplified"},
          {"color":"#8dab68"}
          ]},
          {"featureType":"road",
          "elementType":"geometry.fill",
          "stylers":[
          {"visibility":"simplified"},
          {"color":"#f2e83d"}
          ]},
          {"featureType":"road",
          "elementType":"labels.text.fill",
          "stylers":[
          {"color":"#5B5B3F"}
          ]},
          {"featureType":"road",
          "elementType":"labels.text.stroke",
          "stylers":[
          {"color":"#ABCE83"}
          ]},
          {"featureType":"road",
          "elementType":"labels.icon",
          "stylers":[
          {"visibility":"off"}
          ]},
          {"featureType":"road.local",
          "elementType":"geometry",
          "stylers":[
          {"color":"#A4C67D"}
          ]},
          {"featureType":"road.arterial",
          "elementType":"geometry",
          "stylers":[
          {"color":"#9BBF72"}
          ]},
          {"featureType":"road.highway",
          "elementType":"geometry",
          "stylers":[
          {"color":"#f2e83d"}
          ]},
          {"featureType":"transit",
          "stylers":[
          {"visibility":"off"}
          ]},
          {"featureType":"administrative",
          "elementType":"geometry.stroke",
          "stylers":[
          {"visibility":"on"},
          {"color":"#87ae79"}
          ]},
          {"featureType":"administrative",
          "elementType":"geometry.fill",
          "stylers":[
          {"color":"#7f2200"},
          {"visibility":"off"}
          ]},
          {"featureType":"administrative",
          "elementType":"labels.text.stroke",
          "stylers":[
          {"color":"#ffffff"},
          {"visibility":"on"},
          {"weight":4.1}
          ]},
          {"featureType":"administrative",
          "elementType":"labels.text.fill",
          "stylers":[
          {"color":"#495421"}
          ]},
          {"featureType":"administrative.neighborhood",
          "elementType":"labels",
          "stylers":[
          {"visibility":"off"}
          ]}
          ];

var map;

function initialize() {
  var mapOptions = {
    zoom: 10,
    center: sydney,
    scrollwheel: false,
    mapTypeControlOptions: {
    mapTypeIds: ['Styled']
    },
    mapTypeId: 'Styled'
    };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

  var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });

  map.mapTypes.set('Styled', styledMapType);

  

}

var infowindow = new google.maps.InfoWindow();

function bindInfoWindow(marker, map, infowindow, strDescription) {
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });
  }

var runNumber = 0;

function dropRun() {
  var length = runRoutes.length;
  for (var i = 0; i < length; i++) {
    setTimeout(function() {
      addRunMarker(map, runRoutes[runNumber]);
    }, i * 200);
  }
}

var PoINumber = 0;

function dropPoi() {
  var length = PoI.length;
  for (var i = 0; i < length; i++) {
    setTimeout(function() {
      addPoIMarker(map, PoI[PoINumber]);
    }, i * 200);
  }
}

function addRunMarker(map, locations) {
    
    var image = {url: 'http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/03/srt-marker.png'};
    var runStart = locations;
    var infoTitle = runStart.title;
    var myLatLng = new google.maps.LatLng(runStart.lat, runStart.lng);
    var desc = "<h6 style='font-size: 18px; margin: 10px 0;'>" + infoTitle + "</h6><p>" + runStart.description + "</p>";
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        title: infoTitle,
        });
    google.maps.event.addListener(marker,'click', (function(marker, desc, infowindow){ 
        return function() {
           infowindow.setContent(desc);
           infowindow.open(map, marker);
        };
    })(marker,desc,infowindow)); 

    runNumber++;
}

function addPoIMarker(map, locations) {
    
    var image = {url: 'http://localhost/WPSydneyRunningTours/wp-content/uploads/2014/03/srt-marker.png'};
    var poiLoc = locations;
    var infoTitle = poiLoc.title;
    var myLatLng = new google.maps.LatLng(poiLoc.lat, poiLoc.lng);
    var desc = "<h6 style='font-size: 18px; margin: 10px 0;'>" + infoTitle + "</h6><p>" + poiLoc.description + "</p>";
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        title: infoTitle,
        });
    google.maps.event.addListener(marker,'click', (function(marker, desc, infowindow){ 
        return function() {
           infowindow.setContent(desc);
           infowindow.open(map, marker);
        };
    })(marker,desc,infowindow)); 

    PoINumber++;
}

