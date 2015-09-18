<?php  

Class coordController {

	public function readCoords(){
		$params = json_decode(file_get_contents('php://input'),true);
		$coords = new Coords_Collection();
		$coords->order_by('id');
		// $coords->where('trip_id', '61');
		$coords->get();
		header('Content-Type: application/json');
		echo ($coords);
	}

	public function createCoord(){
		$coord = new Coord();
		$coord->trip_id   = Input::get('trip_id');
		$coord->lat  = Input::get('lat');
		$coord->lng = Input::get('lng');
		$coord->accuracy = Input::get('accuracy');
		$coord->time = Input::get('time');
		$coord->save();
		header('Content-Type: application/json');
		echo $coord;
	}
	
}