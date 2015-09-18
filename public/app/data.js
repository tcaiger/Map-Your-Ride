angular.module("App", ['ngResource'])

.controller('dataController',function($scope, $resource) {

	// ===================================
	// Create angular js resources   
	// ===================================
	var Trip   = $resource('/api/trips/:id');
	var Coord  = $resource('/api/coords/:id');
	
	$scope.trips  = Trip.query();
	$scope.coords = Coord.query();

	
})

.filter('myDateFormat', function myDateFormat($filter){
	return function(text){
		var  tempdate = new Date(text.replace(/-/g,"/"));
		return $filter('date')(tempdate, "HH:mm.ss a EEEE");
	}
});