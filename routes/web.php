<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('index', ['as' => 'index', 'uses' => 'DefaultController@index']);

/**
 *  CADASTRO GERAL MUNICIPAL (CGM)
 */
Route::group(['prefix' => 'pessoaFisica', 'as' => 'pessoaFisica.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'PessoaFisicaController@index']);
    Route::get('create', ['as' => 'create', 'uses' => 'PessoaFisicaController@create']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'PessoaFisicaController@grid']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PessoaFisicaController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'PessoaFisicaController@update']);
    Route::post('store', ['as' => 'store', 'uses' => 'PessoaFisicaController@store']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PessoaFisicaController@destroy']);
    //cidade>bairro
    Route::post('findBairro', ['as' => 'findBairro', 'uses' => 'PessoaFisicaController@findBairro']);
    //estado>cidade
    Route::post('findCidade', ['as' => 'findCidade', 'uses' => 'PessoaFisicaController@findCidade']);
});

Route::group(['prefix' => 'pessoaJuridica', 'as' => 'pessoaJuridica.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'PessoaJuridicaController@index']);
    Route::get('create', ['as' => 'create', 'uses' => 'PessoaJuridicaController@create']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'PessoaJuridicaController@grid']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PessoaJuridicaController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'PessoaJuridicaController@update']);
    Route::post('store', ['as' => 'store', 'uses' => 'PessoaJuridicaController@store']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PessoaJuridicaController@destroy']);
    //cidade>bairro
    Route::post('findBairro', ['as' => 'findBairro', 'uses' => 'PessoaJuridicaController@findBairro']);
    //estado>cidade
    Route::post('findCidade', ['as' => 'findCidade', 'uses' => 'PessoaJuridicaController@findCidade']);
});
/**
 *  CADASTRO GERAL MUNICIPAL (CGM)
 */

Route::group(['prefix' => 'disciplina', 'as' => 'disciplina.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'DisciplinasController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'DisciplinasController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'DisciplinasController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'DisciplinasController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'DisciplinasController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'DisciplinasController@update']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'DisciplinasController@destroy']);
});

Route::group(['prefix' => 'servidor', 'as' => 'servidor.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'ServidorController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'ServidorController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'ServidorController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'ServidorController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'ServidorController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'ServidorController@update']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'DisciplinasController@destroy']);
});

Route::group(['prefix' => 'curso', 'as' => 'curso.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'CursosController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'CursosController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'CursosController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'CursosController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CursosController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'CursosController@update']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CursosController@destroy']);
});

Route::group(['prefix' => 'curriculo', 'as' => 'curriculo.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'CurriculosController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'CurriculosController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'CurriculosController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'CurriculosController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CurriculosController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'CurriculosController@update']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CurriculosController@destroy']);
});

Route::group(['prefix' => 'cargo', 'as' => 'cargo.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'CargosController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'CargosController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'CargosController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'CargosController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CargosController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'CargosController@update']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CargosController@destroy']);
});

Route::group(['prefix' => 'serie', 'as' => 'serie.'], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'SeriesController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'SeriesController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'SeriesController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'SeriesController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'SeriesController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'SeriesController@update']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'SeriesController@destroy']);
});

/*Route::get('index', ['as' => 'index', 'uses' => 'OperadorController@index']);
    Route::get('grid', ['as' => 'grid', 'uses' => 'OperadorController@grid']);
    Route::get('create', ['as' => 'create', 'uses' => 'OperadorController@create']);
    Route::post('store', ['as' => 'store', 'uses' => 'OperadorController@store']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'OperadorController@edit']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'OperadorController@update']);*/

