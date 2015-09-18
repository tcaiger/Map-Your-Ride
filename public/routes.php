<?php

// Public pages
Route::get('/'			, VIEWS.'landing.php');
Route::get('/register'	, CONTROLLERS.'register.php');
Route::post('/register'	, CONTROLLERS.'register.php');
Route::get('/signin'	, CONTROLLERS.'signin.php');
Route::post('/signin'	, CONTROLLERS.'signin.php');
Route::get('/signout'	, CONTROLLERS.'signout.php');

// Signed in pages
Route::get('/home'		, VIEWS.'home.php');
Route::get('/record'	, VIEWS.'record.php');
Route::get('/maps'		, VIEWS.'maps.php');
Route::get('/data'		, VIEWS.'data.php');

// Fallback
Route::fallback(VIEWS.'404.php');
