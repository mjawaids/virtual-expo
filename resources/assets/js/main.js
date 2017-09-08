var app = angular.module('virtualExpo', []);

app.service('Map', function($q) {
    
    this.init = function() {
        var options = {
            center: new google.maps.LatLng(24.9015813, 67.0736155),
            zoom: 11,
            disableDefaultUI: true    
        }
        this.map = new google.maps.Map(
            document.getElementById("map"), options
        );
        this.places = new google.maps.places.PlacesService(this.map);
    }
    
    this.addMarker = function(pos) {
        this.marker = new google.maps.Marker({
            map: this.map,
            position: pos,
            animation: google.maps.Animation.DROP
        });
        // this.map.setCenter(pos);

        return this.marker;
    }
    
});

app.controller('ExpoController', function($scope, $http, Map) {

    /**
     * Returns the current date
     */
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
        
        return today;
    }

    /**
     * Parses the current URL and returns the current segment
     */
    getUrlSegment = function() {
        var i1 = window.location.pathname.indexOf('/') + 1;
        var i2 = window.location.pathname.lastIndexOf('/');
        var len = i2-i1;
        if(i2 == 0)
            len = window.location.pathname.length;
    
        return window.location.pathname.substr(i1, len);
    }

    /**
     * Get the Event ID from URL
     */
    getEventId = function() {
        return window.location.pathname.substr(
                window.location.pathname.lastIndexOf('/') + 1);
    }

    /**
     * Add marker on the map and listen for click events
     */
    addMarkerOnMap = function(pos, event) {
        var marker = Map.addMarker(pos);
        marker.addListener('click', function() {
            $scope.$apply(function(){
                $scope.selectedEvent = event;
            });
        });
    }

    /**
     * Get events data
     */
    getEvents = function(action) {
        var url = '/events/' + action; //$scope.action;
        
        // request to get all the events
        $http.get(url).then(
            function(events) {
                $scope.events = events.data;

                // add event markers to the map
                angular.forEach($scope.events, function(event) {
                    pos = { 
                        lat: parseFloat(event.location.latitude), 
                        lng: parseFloat(event.location.longitude) 
                    };

                    // add marker on map and listen for click event
                    addMarkerOnMap(pos, event);
                });
            }
        );
    }

    /**
     * Get the stands data for an event
     */
    getStands = function(eventid) {
        $http.get('/events/' + eventid).then(
            function(stands) {
                $scope.stands = stands.data;
            }
        );
    }

    /******************************************************************************** */

    // The event selected on map
    $scope.selectedEvent = null;
    
    // get action based on current segment
    $scope.action = getUrlSegment();
    
    if($scope.action == "" || $scope.action == "current" || $scope.action == "expired") {
        // initialize map
        Map.init();
        
        // get all the events and add marker on the map
        getEvents($scope.action);
    }
    else if($scope.action == 'event') {
        // get all the stands for an event
        getStands( getEventId() );
    }
});
