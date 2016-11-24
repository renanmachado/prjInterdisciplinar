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
		Route::get('/editar/{id}', 'cms\EventoController@edit');
		Route::post('/salvar', 'cms\EventoController@save');
		Route::post('/excluir', 'cms\EventoController@destroy');
	});

	Route::group(['prefix' => 'minha-conta'], function() {     
		Route::get('/', 'cms\UsuarioController@index');
		Route::post('/salvar', 'cms\UsuarioController@save');
	});

	Route::group(['prefix' => 'palestra'], function() {     
		Route::get('/', 'cms\PalestraController@index');
		Route::get('/cadastrar', 'cms\PalestraController@create');
		Route::get('/editar/{id}', 'cms\PalestraController@edit');
		Route::post('/salvar', 'cms\PalestraController@save');
		Route::post('/excluir', 'cms\PalestraController@destroy');
	});

	Route::group(['prefix' => 'palestrante'], function() {     
		Route::get('/', 'cms\PalestranteController@index');
		Route::get('/cadastrar', 'cms\PalestranteController@create');
		Route::get('/editar/{id}', 'cms\PalestranteController@edit');
		Route::post('/salvar', 'cms\PalestranteController@save');
		Route::post('/excluir', 'cms\PalestranteController@destroy');
	});

	Route::group(['prefix' => 'sala'], function() {     
		Route::get('/', 'cms\SalaController@index');
		Route::get('/cadastrar', 'cms\SalaController@create');
		Route::get('/editar/{id}', 'cms\SalaController@edit');
		Route::post('/salvar', 'cms\SalaController@save');
		Route::post('/excluir', 'cms\SalaController@destroy');
	});

	Route::group(['prefix' => 'aluno'], function() {     
		Route::get('/', 'cms\AlunoController@index');
		Route::get('/cadastrar', 'cms\AlunoController@create');
		Route::get('/editar/{id}', 'cms\AlunoController@edit');
		Route::post('/salvar', 'cms\AlunoController@save');
		Route::post('/excluir', 'cms\AlunoController@destroy');
	});

	Route::group(['prefix' => 'equipe'], function() {     
		Route::get('/', 'cms\EquipeController@index');
		Route::get('/cadastrar', 'cms\EquipeController@create');
		Route::get('/editar/{id}', 'cms\EquipeController@edit');
		Route::post('/salvar', 'cms\EquipeController@save');
		Route::post('/excluir', 'cms\EquipeController@destroy');
	});

	Route::group(['prefix' => 'recurso'], function() {     
		Route::get('/', 'cms\RecursoController@index');
		Route::get('/cadastrar', 'cms\RecursoController@create');
		Route::get('/editar/{id}', 'cms\RecursoController@edit');
		Route::post('/salvar', 'cms\RecursoController@save');
		Route::post('/excluir', 'cms\RecursoController@destroy');
	});


	// For login
	Route::get('login', 'Auth\AuthController@showLoginForm');
	Route::post('login', 'Auth\AuthController@login');
	Route::get('sair', 'Auth\AuthController@logout');

	// Registration Routes...
	Route::get('registrar', 'Auth\AuthController@showRegistrationForm');
	Route::post('registrar', 'Auth\AuthController@register');

	// Password Reset Routes...
	Route::get('senha/resetar/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('senha/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('senha/resetar', 'Auth\PasswordController@reset');	

});

// ROUTES FOR SITE
Route::group(['prefix' => '/'], function() {
	Route::get('/', 'site\SiteController@index');
});

//Route::get('/home', 'HomeController@index');
