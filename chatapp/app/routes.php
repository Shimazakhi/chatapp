<?php

	Route::get('login','ChatController@login');

	Route::get('logout', 'SessionsController@destroy');
	Route::get('test-socket', 'ChatController@testSocket');

	Route::resource('sessions', 'SessionsController');

	Route::resource('user','UsersController');

	Route::controller('commands','CommandsController');

	Route::group(array('before' => 'auth'), function()
	{
		Route::get('/{id}','ChatController@showChannel');
		Route::get('/private/{id}','ChatController@showPrivate');
		Route::get('show-profile/{id}','ChatController@showProfile');

		Route::resource('/','ChatController');


		if (mb_strimwidth(Input::get('message'), 0, 1) == '/') {
		Route::post('send-message', array('uses' => 'CommandsController@anyRouting'));
		}
		else {
		Route::post('send-message', array( 'uses' => 'ChatController@sendMessage' ) );
		}

	});




