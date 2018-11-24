<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*
        Route::get('/users', 'UsersController@index')->name('users.index');
        Route::get('/users/{user}', 'UsersController@show')->name('users.show');
        Route::get('/users/create', 'UsersController@create')->name('users.create');
        Route::post('/users', 'UsersController@store')->name('users.store');
        Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
        Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
        Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
    */
    public function index()
    {
        return 'I\'m index';
    }
    public function show(Request $request, $param1)
    {
        var_dump($request->input());
        echo $param1;
        return 'I\'m show';
    }
    public function create()
    {
        return 'I\'m create';
    }
    public function store()
    {
        return 'I\'m store';
    }
    public function edit(Request $request,$param1)
    {
        var_dump($request->input());
        echo $param1;
        return 'I\'m edit';
    }
    public function update()
    {
        return 'I\'m update';
    }
    public function destroy()
    {
        return 'I\'m destroy';
    }
}