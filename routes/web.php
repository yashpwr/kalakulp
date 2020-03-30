<?php

use Illuminate\Support\Facades\Route;

//backend
Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'backend\IndexController@index']);

Route::match(['get', 'post'], 'sliderlist', ['as' => 'sliderlist', 'uses' => 'backend\SliderController@sliderlist']);
Route::match(['get', 'post'], 'addslider', ['as' => 'addslider', 'uses' => 'backend\SliderController@addslider']);
Route::match(['get', 'post'], 'updateslider/{id}', ['as' => 'updateslider', 'uses' => 'backend\SliderController@updateslider']);
Route::match(['get', 'post'], 'slider-datatable-ajaxAction', ['as' => 'slider-datatable-ajaxAction', 'uses' => 'backend\SliderController@datatableajaxAction']);

Route::match(['get', 'post'], 'categorylist', ['as' => 'categorylist', 'uses' => 'backend\CategoryController@categorylist']);
Route::match(['get', 'post'], 'addcategory', ['as' => 'addcategory', 'uses' => 'backend\CategoryController@addcategory']);
Route::match(['get', 'post'], 'updatecategory/{id}', ['as' => 'updatecategory', 'uses' => 'backend\CategoryController@updatecategory']);
Route::match(['get', 'post'], 'category-datatable-ajaxAction', ['as' => 'category-datatable-ajaxAction', 'uses' => 'backend\CategoryController@datatableajaxAction']);

Route::match(['get', 'post'], 'FabricList', ['as' => 'FabricList', 'uses' => 'backend\FabricController@FabricList']);
Route::match(['get', 'post'], 'addfabric', ['as' => 'addfabric', 'uses' => 'backend\FabricController@addfabric']);
Route::match(['get', 'post'], 'updateFabric/{id}', ['as' => 'updateFabric', 'uses' => 'backend\FabricController@updateFabric']);
Route::match(['get', 'post'], 'fabric-datatable-ajaxAction', ['as' => 'fabric-datatable-ajaxAction', 'uses' => 'backend\FabricController@datatableajaxAction']);

//frontend
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\IndexController@index']);
