angular.module("App", ['ngResource'])

.controller('appController',function($scope, $resource) {

	// ==============================
	// Check Geolocation Compatibility 
	// ==============================
	if(navigator.geolocation){
		console.log('geolocation is supported');
	} else {
		console.log('geolocation is not supported');
	}


	// ===================================
	// Create angular js resources   
	// ===================================
	var Trip   = $resource('/api/trips/:id');
	var Coord  = $resource('/api/coords/:id');
	
	$scope.trips  = Trip.query();
	$scope.coords = Coord.query();

	// Display for start & stop buttons
	$scope.viz = true;

	// Display for start & stop buttons
	$scope.currentPos = {
		latitude: 0,
		longitude: 0,
		accuracy: 0
	};

	// ==============================
	// ===== Record a Trip ==========
	// ==============================
	var watchId = null;
	$scope.recordTrip = function (){

		// Updated display for start & stop buttons
		$scope.viz = false;

		// Configure the geolocation options
		var options = {
		  enableHighAccuracy: false,
		  timeout: 5000,
		  maximumAge: 5000
		};

		// 1. Create a new trip in the database
		var trip = new Trip();
		trip.$save(function(trip){

		});

		// var lastSaved = Date.now();

		// 2a. Set up recording of position
		function success(position){

			// Update current position
			$scope.currentPos = position.coords;
			console.log(moment().format('YYYY-MM-DD HH:mm:ss'));

			// Load the coordinates into the model
			var coord = new Coord();
			coord.trip_id = trip.id;
			coord.lat  = position.coords.latitude;
			coord.lng = position.coords.longitude;
			coord.accuracy = position.coords.accuracy;
			coord.time = moment().format('YYYY-MM-DD HH:mm:ss');

			// If the accuracy is less than 30m & it's been at least 5s since last saved, save to the database
			if ( position.coords.accuracy < 10 ) {
				// Save coordinate to database
				coord.$save(function(){
					$scope.coords.push(coord);
					// lastSaved = Date.now();
				});
			};
		}

		// 2b. Set up error messages
		function error(err) {
  			console.warn('ERROR(' + err.code + '): ' + err.message);
		}

		// 3. Start watching the users position
		WatchId = navigator.geolocation.watchPosition(success, error, options);
	};


	// ==============================
	// ===== End The Trip  Recording
	// ==============================
	$scope.endTrip = function() {
		$scope.viz = true;
		if (watchId) {
			navigator.geolocation.clearWatch(watchId);
			watchId = null;
		}
	};
	
});




