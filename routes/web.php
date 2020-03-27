<?php

use Illuminate\Support\Facades\Route;

//backend
Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'backend\IndexController@index']);
Route::match(['get', 'post'], 'sliderlist', ['as' => 'sliderlist', 'uses' => 'backend\SliderController@sliderlist']);
Route::match(['get', 'post'], 'addslider', ['as' => 'addslider', 'uses' => 'backend\SliderController@addslider']);



//frontend
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\IndexController@index']);
