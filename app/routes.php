<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'logged'), function()
{
    /************
     * Usuarios *
     ************/

    Route::get('users', array('as' => 'users', 'uses' => 'UserController@all'));

    Route::get('createUser', array('as' => 'createUser', 'uses' => 'UserController@create'));
    Route::post('createUser', array('as' => 'createUser', 'uses' => 'UserController@processCreate'));

    Route::get('editUser/{id}', array('as' => 'editUser', 'uses' => 'UserController@edit'))->where('id', '[0-9]+');
    Route::post('editUser/{id}', array('as' => 'editUser', 'uses' => 'UserController@processEdit'))->where('id', '[0-9]+');

    Route::get('detailUser/{id}', array('as' => 'detailUser', 'uses' => 'UserController@detail'))->where('id', '[0-9]+');

    Route::get('deleteUser/{id}', array('as' => 'deleteUser', 'uses' => 'UserController@delete'))->where('id', '[0-9]+');

    /**********
     * Discos *
     **********/

    Route::get('albums', array('as' => 'albums', 'uses' => 'AlbumController@all'));

    Route::post('albumSearch/', array('as' => 'albumSearch', 'uses' => 'AlbumController@search'));
});

Route::get('/', array('as' => 'home', 'uses' => 'AppController@home'));

Route::get('login', array('as' => 'login', 'uses' => 'AppController@login'));
Route::post('login', array('as' => 'login', 'uses' => 'AppController@processLogin'));

Route::get('logout', array('as' => 'logout', 'uses' => 'AppController@logout'));

Route::post('changeLang', array('as' => 'changeLang', 'uses' => 'AppController@changeLang'));