<?php

# 1. Logic

if(Input::posted()){

	$user = new User();
	$user->name  	= $_POST['name'];
	$user->email  	= $_POST['email'];	
	$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$user->save();

	echo $user->username;
	Auth::log_in($user->id);
	URL::redirect('home');
}


# 3. Load Views / Redirects

include VIEWS.'header.php';
include VIEWS.'register.php';

