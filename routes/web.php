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
Route::get('/', 'HomeController@index');
Route::get('admin/dangnhap', 'Users@getLoginAdmin');
Route::post('admin/dangnhap', 'Users@postLoginAdmin');
Route::get('admin/dangxuat', 'Users@logoutAdmin');
Route::get('test', 'HomeController@test');

Route::group(['prefix' => 'giao-dien'], function () {
    Route::get('sanpham', 'HomeController@sanpham');
    Route::get('ctsp/{id}', 'HomeController@chitietsanpham');
    Route::get('search', 'HomeController@searchSanPham');
    Route::post('add-comment-product/{id}', 'HomeController@addcommentproduct')->middleware('LoginBase');
    // Route::get('cat', 'HomeController@giohang');
    Route::get('block/{id}','HomeController@blog');
    Route::get('block','HomeController@showbv');
    Route::get('ctbl/{id}', 'HomeController@ctbl');
    Route::post('save-add/{id}', 'HomeController@addcommentbl')->middleware('LoginBase');
    Route::get('gt', 'HomeController@gioithieu');
    Route::get('thanhtoan', 'HomeController@thanhtoan')->middleware('LoginBase');
    Route::get('sosanh', 'HomeController@sosanh');
    Route::get('dangnhap', 'HomeController@dangnhap');
    Route::post('dangnhap', 'HomeController@postdangnhap');
    Route::get('dangxuat', 'HomeController@logoutdangnhap');
    Route::get('dangki', 'HomeController@dangki');
    Route::post('dangki', 'HomeController@adduser');
    Route::get('laymk', 'HomeController@getResetPassworld');
    Route::post('laymk', 'HomeController@postResetPassworld');
    Route::get('pass/reset', 'HomeController@getChanePassworld')->name('user.reset_password.get');
    Route::post('pass/reset', 'HomeController@postChanePassworld')->name('user.reset_password.post');

    // Route::get('sendmail', 'HomeController@sendmail');

    Route::get('lienhe', 'HomeController@lienhe');
    Route::get('addorder', 'HomeController@addorder');
    Route::get('deletecart', 'HomeController@deletecart');
    Route::post('lienhe', 'HomeController@postfeedback')->middleware('LoginBase');
    Route::get('addcart/{id}', 'HomeController@addcart')->middleware('LoginBase');
    Route::get('showcart', 'HomeController@showcart')->name('giaodien.showcart')->middleware('LoginBase');
    Route::get('removecart/{id}', 'HomeController@removecart')->name('giaodien.removecart')->middleware('LoginBase');
    Route::get('updatecart/{id}', 'HomeController@updatecart')->name('giaodien.updatecart')->middleware('LoginBase');
    Route::get('viewproduct/{id}','HomeController@shownhanhsp');
});

Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function () {
    
    Route::get('index','HomeAdmin@index');
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
        Route::get('chitiet/{id}','Product@show');
        Route::post('save-add','Product@store');
        Route::get('edit/{id}','Product@edit');
        Route::post('update/{id}','Product@update');
        Route::get('delete/{id}','Product@destroy');
        Route::get('deleteimg/{id}','Product@deleteimg');
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
        Route::get('chitiet/{id}','Blog@show');
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
    Route::group(['prefix' => 'commentbl'], function () {
        Route::get('index','CommentBlogController@index');
        Route::get('add','CommentBlogController@create');
        Route::post('save-add','CommentBlogController@store');
        Route::get('edit/{id}','CommentBlogController@edit');
        Route::post('update/{id}','CommentBlogController@update');
        Route::get('delete/{id}','CommentBlogController@destroy');
        Route::post('check-name','CommentBlogController@checkname');
        Route::get('search','CommentBlogController@search');
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
    Route::group(['prefix' => 'donhang'], function () {
        Route::get('index','OrderController@index');
        Route::get('edit/{id}','OrderController@edit');

        Route::get('export','OrderController@exportFile');
        
        Route::post('update/{id}','OrderController@update');
        Route::get('delete/{id}','OrderController@destroy');
        Route::post('check-name','OrderController@checkname');
        Route::get('search','OrderController@search');
    });

    Route::group(['prefix' => 'hoadon'], function () {
        Route::get('index/{id}','OrderController@show');
        Route::get('delete/{id}','BillController@destroy');
        Route::post('check-name','BillController@checkname');
        Route::get('search','BillController@search');
    });

    Route::group(['prefix' => 'phanhoi'], function () {
        Route::get('index','ContactController@index');
        Route::get('delete/{id}','ContactController@destroy');
        Route::post('check-name','ContactController@checkname');
        Route::get('search','ContactController@search');
    });

});
