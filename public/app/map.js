angular.module("App", ['ngResource'])

.controller('mapController',function($scope, $resource) {


	// ===================================
	// Create angular js resources   
	// ===================================
	var Trip   = $resource('/api/trips/:id');
	var Coord  = $resource('/api/coords/:id');
	
	$scope.trips  = Trip.query();
	$scope.coords = Coord.query();


	function initMap() {

		var data = [];

		// make coordinates into a readable format
		for (var i = 0; i < $scope.coords.length; i++) {
			data.push({
				'lat': parseFloat($scope.coords[i].lat),
				'lng': parseFloat($scope.coords[i].lng)
			});
		};

		var map = new google.maps.Map(document.getElementById('map'), {
	    	zoom: 15,
	    	center: data[0],
	    	mapTypeId: google.maps.MapTypeId.ROAD
	  	});

		var path = new google.maps.Polyline({
			path: data,
		    geodesic: true,
		    strokeColor: '#000',
		    strokeOpacity: 0.8,
		    strokeWeight: 3
		});

		path.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initMap);
});