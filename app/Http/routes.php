<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
// ROUTES FOR ADMIN
Route::group(['prefix' => 'admin'], function() {     
	
	Route::get('/', 'cms\CmsController@index');
	
	Route::group(['prefix' => 'evento'], function() {     
		Route::get('/', 'cms\EventoController@index');
		Route::get('/cadastrar', 'cms\EventoController@create');
		Route::get('/edit/{id}', 'cms\EventoController@edit');
		Route::post('/salvar', 'cms\EventoController@edit');
		Route::post('/excluir', 'cms\EventoController@edit');
	});

	Route::group(['prefix' => 'palestra'], function() {     
		Route::get('/', 'cms\PalestraController@index');
		Route::get('/cadastrar', 'cms\PalestraController@create');
		Route::get('/edit/{id}', 'cms\PalestraController@edit');
		Route::post('/salvar', 'cms\PalestraController@edit');
		Route::post('/excluir', 'cms\PalestraController@edit');
	});

	Route::group(['prefix' => 'palestrante'], function() {     
		Route::get('/', 'cms\PalestranteController@index');
		Route::get('/cadastrar', 'cms\PalestranteController@create');
		Route::get('/edit/{id}', 'cms\PalestranteController@edit');
		Route::post('/salvar', 'cms\PalestranteController@edit');
		Route::post('/excluir', 'cms\PalestranteController@edit');
	});

	Route::group(['prefix' => 'sala'], function() {     
		Route::get('/', 'cms\SalaController@index');
		Route::get('/cadastrar', 'cms\SalaController@create');
		Route::get('/edit/{id}', 'cms\SalaController@edit');
		Route::post('/salvar', 'cms\SalaController@edit');
		Route::post('/excluir', 'cms\SalaController@edit');
	});

	Route::group(['prefix' => 'aluno'], function() {     
		Route::get('/', 'cms\AlunoController@index');
		Route::get('/cadastrar', 'cms\AlunoController@create');
		Route::get('/edit/{id}', 'cms\AlunoController@edit');
		Route::post('/salvar', 'cms\AlunoController@edit');
		Route::post('/excluir', 'cms\AlunoController@edit');
	});

	Route::group(['prefix' => 'equipe'], function() {     
		Route::get('/', 'cms\EquipeController@index');
		Route::get('/cadastrar', 'cms\EquipeController@create');
		Route::get('/edit/{id}', 'cms\EquipeController@edit');
		Route::post('/salvar', 'cms\EquipeController@edit');
		Route::post('/excluir', 'cms\EquipeController@edit');
	});
});

// ROUTES FOR SITE
Route::group(['prefix' => '/'], function() {
	Route::get('/', 'site\SiteController@index');
});

