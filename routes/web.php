<?php

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
Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');
Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::group(['prefix'=>'admin'], function() {
    Route::group(['prefix'=>'user'], function() {
        Route::get('/', 'UserController@getList');
        Route::get('/list', 'UserController@getList');
        
        Route::get('/create', 'UserController@getCreate');
        Route::post('/create', 'UserController@postCreate');
        
        Route::get('/edit/{id}', 'UserController@edit');
        Route::post('/edit/{id}', 'UserController@update');
        
        Route::get('/delete/{id}', 'UserController@delete');
    });

    Route::group(['prefix'=>'discount'], function() {
        Route::get('/', 'DiscountController@getList');
        Route::get('/list', 'DiscountController@getList');

        Route::get('/create', 'DiscountController@getCreate');
        Route::post('/create', 'DiscountController@postCreate');

        Route::get('/edit/{id}', 'DiscountController@edit');
        Route::post('/edit/{id}', 'DiscountController@update');

        Route::get('/delete/{id}', 'DiscountController@delete');
    });

    Route::group(['prefix'=>'product'], function() {
        Route::get('/', 'ProductController@getList');
        Route::get('/list', 'ProductController@getList');

        Route::get('/create', 'ProductController@getCreate');
        Route::post('/create', 'ProductController@postCreate');

        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/edit/{id}', 'ProductController@update');

        Route::get('/delete/{id}', 'ProductController@delete');

        Route::group(['prefix'=>'{productID}/product_status'], function () {
            Route::get('/', 'Product_statusController@getList');
            Route::get('/list', 'Product_statusController@getList');

            Route::get('/create', 'Product_statusController@getCreate');
            Route::post('/create', 'Product_statusController@postCreate');

            Route::get('/edit/{id}', 'Product_statusController@edit');
            Route::post('/edit/{id}', 'Product_statusController@update');

            Route::get('/delete/{id}', 'Product_statusController@delete');

        });

        Route::group(['prefix'=>'{productID}/product_image'], function () {
            Route::get('/', 'Product_imageController@getList');
            Route::get('/list', 'Product_imageController@getList');

            Route::get('/create', 'Product_imageController@getCreate');
            Route::post('/create', 'Product_imageController@postCreate');

            Route::get('/edit/{id}', 'Product_imageController@edit');
            Route::post('/edit/{id}', 'Product_imageController@update');

            Route::get('/delete/{id}', 'Product_imageController@delete');

        });
    });

    Route::group(['prefix'=>'category'], function() {
        Route::get('/', 'CategoryController@getList');
        Route::get('/list', 'CategoryController@getList');

        Route::get('/create', 'CategoryController@getCreate');
        Route::post('/create', 'CategoryController@postCreate');

        Route::get('/edit/{id}', 'CategoryController@edit');
        Route::post('/edit/{id}', 'CategoryController@update');

        Route::get('/delete/{id}', 'CategoryController@delete');
    });

    Route::group(['prefix'=>'product_status'], function() {
        Route::get('/', 'Product_statusController@getAllStatus');

    });
});


Route::get('/home/', 'PageController@home');
Route::get('/product/{id}', 'PageController@productDetail');
Route::get('/ajax/quan/{id}', 'AjaxController@getQuantity');
Route::get('/ajax/quan_max/{id}', 'AjaxController@getQuantityMax');
