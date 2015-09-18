<?php  

Class tripController {

	public function readTrips(){
		$params = json_decode(file_get_contents('php://input'),true);
		$trips = new Trip_Collection();
		$trips->order_by('id');
		$trips->get();
		header('Content-Type: application/json');
		echo ($trips);
	}

	public function createTrip(){
		$trip = new Trip();
		$trip->user_id  = 1;
		$trip->save();
		header('Content-Type: application/json');
		echo ($trip);
	}
	
}