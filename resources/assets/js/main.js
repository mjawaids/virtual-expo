var app = angular.module('virtualExpo', []);

// app.service('Map', function($q) {
    
//     $scope.init = function() {
//         var options = {
//             center: new google.maps.LatLng(24.9015813, 67.0736155),
//             zoom: 11,
//             disableDefaultUI: true    
//         }
//         $scope.map = new google.maps.Map(
//             document.getElementById("map"), options
//         );
//         $scope.places = new google.maps.places.PlacesService($scope.map);
//     }
    
//     $scope.addMarker = function(pos) {
//         $scope.marker = new google.maps.Marker({
//             map: $scope.map,
//             position: pos,
//             animation: google.maps.Animation.DROP
//         });
//         // $scope.map.setCenter(pos);

//         // $scope.marker.addListener('click', function(e) {
//         //     console.log(e.latLng.lat() + ' - ' + e.latLng.lng());
//         // });

//         return $scope.marker;
//     }
    
// });

app.controller('ExpoController', function($scope, $http) {

    $scope.init = function() {
        var options = {
            center: new google.maps.LatLng(24.9015813, 67.0736155),
            zoom: 11,
            disableDefaultUI: true    
        }
        $scope.map = new google.maps.Map(
            document.getElementById("map"), options
        );
        $scope.places = new google.maps.places.PlacesService($scope.map);
    }
    
    $scope.addMarker = function(pos) {
        $scope.marker = new google.maps.Marker({
            map: $scope.map,
            position: pos,
            animation: google.maps.Animation.DROP
        });
        // $scope.map.setCenter(pos);

        return $scope.marker;
    }

    $scope.today = function() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        
        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        } 
        today = yyyy + '-' + mm + '-' + dd;
        console.log(today);
        return today;
    }

    $scope.selectedEvent = null;

    // parse url
    var i1 = window.location.pathname.indexOf('/') + 1;
    var i2 = window.location.pathname.lastIndexOf('/');
    var len = i2-i1;
    if(i2 == 0)
        len = window.location.pathname.length;

    $scope.action = window.location.pathname.substr(i1, len);
    
    if($scope.action == "" || $scope.action == "current" || $scope.action == "expired") {
        // initialize map
        $scope.init();
        
        // var url = '/' + ($scope.action == "") ? 'events' : $scope.action;
        var url = '/events/' + $scope.action;
    
        // request to display all the events
        $http.get(url).then(
            function(events) {
                $scope.events = events.data;

                // add event markers to the map
                angular.forEach($scope.events, function(event) {
                    pos = { 
                        lat: parseFloat(event.location.latitude), 
                        lng: parseFloat(event.location.longitude) 
                    };

                    var marker = $scope.addMarker(pos);
                    marker.addListener('click', function() {
                        $scope.$apply(function(){
                            $scope.selectedEvent = event;
                        });
                    });
                });
            }
        );
    }
    else if($scope.action == 'event') {
        // request to display all the stands for an event
        var eventid = window.location.pathname.substr(i2 + 1);

        $http.get('/events/' + eventid).then(
            function(stands) {
                $scope.stands = stands.data;
            }
        );
    }
});
