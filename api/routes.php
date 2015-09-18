<?php # Restful API


// ======= USER ROUTES ==============
Route::get('/users'		, 'userController->readUsers');
Route::post('/users'	, 'userController->createUser');



// ======= TRIP ROUTES ==============
Route::get('/trips'		, 'tripController->readTrips');
Route::post('/trips'	, 'tripController->createTrip');


// ======= COORD ROUTES ==============
Route::get('/coords'	, 'coordController->readCoords');
Route::post('/coords'	, 'coordController->createCoord');

Route::fallback(VIEWS.'404.php');



