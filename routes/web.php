<?php


Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index',
]);

Route::post('/newsletter', [
	'as' => 'newsletter.create',
	'uses' => 'NewsletterController@create',
]);

