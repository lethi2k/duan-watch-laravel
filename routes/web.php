<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('font-end.index');
});
Route::get('hello','HomeController@index');
Route::group(['prefix' => 'giao-dien'], function () {
    Route::get('sanpham', function () {
        return view('font-end.sanpham');
    });
    Route::get('ctsp', function () {
        return view('font-end.chitietsp');
    });
    Route::get('cat', function () {
        return view('font-end.giohang');
    });
    Route::get('block', function () {
        return view('font-end.block');
    });
    Route::get('ctbl', function () {
        return view('font-end.chitietblock');
    });
    Route::get('gt', function () {
        return view('font-end.gioithieu');
    });
    Route::get('thanhtoan', function () {
        return view('font-end.thanhtoan');
    });
    Route::get('sosanh', function () {
        return view('font-end.sosanh');
    });
    Route::get('dangnhap', function () {
        return view('font-end.dangnhap');
    });
    Route::get('dangki', function () {
        return view('font-end.dangki');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('index', function () {
        return view('back-end.index');
    });
    Route::group(['prefix' => 'trademark'], function () {
        Route::get('index','CategoryProduct@index');
        Route::get('add','CategoryProduct@create');
        Route::post('save-add','CategoryProduct@store');
        Route::get('edit/{id}','CategoryProduct@edit');
        Route::post('update/{id}','CategoryProduct@update');
        Route::get('delete/{id}','CategoryProduct@destroy');
        Route::post('check-name','CategoryProduct@checkname');
        Route::get('search','CategoryProduct@search');
    });
    Route::group(['prefix' => 'category-product'], function () {
        Route::get('index','CateProduct@index');
        Route::get('add','CateProduct@create');
        Route::post('save-add','CateProduct@store');
        Route::get('edit/{id}','CateProduct@edit');
        Route::post('update/{id}','CateProduct@update');
        Route::get('delete/{id}','CateProduct@destroy');
        Route::post('check-name','CateProduct@checkname');
        Route::get('search','CateProduct@search');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('index','Product@index');
        Route::get('add','Product@create');
        Route::post('save-add','Product@store');
        Route::get('edit/{id}','Product@edit');
        Route::post('update/{id}','Product@update');
        Route::get('delete/{id}','Product@destroy');
        Route::post('check-name','Product@checkname');
        Route::get('search','Product@search');
    });
    Route::group(['prefix' => 'category-blog'], function () {
        Route::get('index','CategoryBlog@index');
        Route::get('add','CategoryBlog@create');
        Route::post('save-add','CategoryBlog@store');
        Route::get('edit/{id}','CategoryBlog@edit');
        Route::post('update/{id}','CategoryBlog@update');
        Route::get('delete/{id}','CategoryBlog@destroy');
        Route::post('check-name','CategoryBlog@checkname');
        Route::get('search','CategoryBlog@search');
    });
    Route::group(['prefix' => 'blog'], function () {
        Route::get('index','Blog@index');
        Route::get('add','Blog@create');
        Route::post('save-add','Blog@store');
        Route::get('edit/{id}','Blog@edit');
        Route::post('update/{id}','Blog@update');
        Route::get('delete/{id}','Blog@destroy');
        Route::post('check-name','Blog@checkname');
        Route::get('search','Blog@search');
    });
    Route::group(['prefix' => 'slider'], function () {
        Route::get('index','Slider@index');
        Route::get('add','Slider@create');
        Route::post('save-add','Slider@store');
        Route::get('edit/{id}','Slider@edit');
        Route::post('update/{id}','Slider@update');
        Route::get('delete/{id}','Slider@destroy');
        Route::post('check-name','Slider@checkname');
        Route::get('search','Slider@search');
    });
    Route::group(['prefix' => 'advertisement'], function () {
        Route::get('index','Advertisement@index');
        Route::get('add','Advertisement@create');
        Route::post('save-add','Advertisement@store');
        Route::get('edit/{id}','Advertisement@edit');
        Route::post('update/{id}','Advertisement@update');
        Route::get('delete/{id}','Advertisement@destroy');
        Route::post('check-name','Advertisement@checkname');
        Route::get('search','Advertisement@search');
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::get('index','Comment@index');
        Route::get('add','Comment@create');
        Route::post('save-add','Comment@store');
        Route::get('edit/{id}','Comment@edit');
        Route::post('update/{id}','Comment@update');
        Route::get('delete/{id}','Comment@destroy');
        Route::post('check-name','Comment@checkname');
        Route::get('search','Comment@search');
    });
    Route::group(['prefix' => 'member'], function () {
        Route::get('index','Users@index');
        Route::get('add','Users@create');
        Route::post('save-add','Users@store');
        Route::get('edit/{id}','Users@edit');
        Route::post('update/{id}','Users@update');
        Route::get('delete/{id}','Users@destroy');
        Route::post('check-name','Users@checkname');
        Route::get('search','Users@search');
    });
    Route::group(['prefix' => 'company'], function () {
        Route::get('index','Company@index');
        Route::get('add','Company@create');
        Route::post('save-add','Company@store');
        Route::get('edit/{id}','Company@edit');
        Route::post('update/{id}','Company@update');
        Route::get('delete/{id}','Company@destroy');
        Route::post('check-name','Company@checkname');
        Route::get('search','Company@search');
    });

});
