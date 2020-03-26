<?php

use Illuminate\Support\Facades\Route;


Route::match(['get', 'post'], '/', ['as' => 'index', 'uses' => 'backend\IndexController@index']);
