<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function() {     
	Route::get('/', 'cms\CmsController@index');
});

Route::group(['prefix' => '/'], function() {
	Route::get('/', 'site\SiteController@index');
});

