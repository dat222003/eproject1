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

Route::group(['prefix' => 'eproject'], function (){
//    Route::get('home', [
//        'uses' => 'App\Http\Controllers\eprojectController@index',
//        'as' => 'eproject1.home_page'
//
//    ]);

    Route::get('admin_home', [
        'uses' => 'App\Http\Controllers\eprojectController@admin',
        'as' => 'admin.home'

    ])->middleware('auth');



    Route::get('home', [
        'uses' => 'App\Http\Controllers\eprojectController@home',
        'as' => 'home'

    ]);


//admin
    Route::get('admin', [
        'uses' => 'App\Http\Controllers\eprojectController@admin_login',
        'as' => 'admin.pre_login'

    ])->middleware('loggedin');

    Route::post('admin', [
        'uses' => 'App\Http\Controllers\eprojectController@login',
        'as' => 'login'

    ])->middleware('loggedin');

    Route::get('admin_logout', [
        'uses' => 'App\Http\Controllers\eprojectController@logout',
        'as' => 'admin.logout'

    ])->middleware('auth');

//    Route::get('admin_index_account', [
//        'uses' => 'App\Http\Controllers\eprojectController@index_admin',
//        'as' => 'admin.index.admin'
//
//    ])->$this->middleware('auth);

    Route::get('detail_admin/{username}', [
        'uses' => 'App\Http\Controllers\eprojectController@index_admin',
        'as' => 'admin.detail.admin'

    ])->middleware('auth');

    Route::get('update/admin/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_admin',
        'as' => 'admin.edit.admin'
    ])->middleware('auth');

    Route::post('update/admin/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_admin',
        'as' => 'admin.update.admin'
    ])->middleware('auth');



//category
    Route::get('admin_index_category', [
        'uses' => 'App\Http\Controllers\eprojectController@index_category',
        'as' => 'admin.index.category'

    ])->middleware('auth');

    Route::get('/phpinfo', function() {
        return phpinfo();
    });

    Route::get('detail/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@show_category',
        'as' => 'admin.detail.category'

    ])->middleware('auth');


    Route::get('delete/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@confirm_category',
        'as' => 'admin.delete.confirm.category'

    ])->middleware('auth');
    Route::post('delete/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@delete_category',
        'as' => 'admin.delete.category'

    ])->middleware('auth');

    Route::get('update/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_category',
        'as' => 'admin.edit.category'
    ])->middleware('auth');

    Route::post('update/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_category',
        'as' => 'admin.update.category'
    ])->middleware('auth');


    Route::get('new_category_form', [
        'uses' => 'App\Http\Controllers\eprojectController@form_category',
        'as' => 'admin.create.category'

    ])->middleware('auth');

    Route::post('new_category_form', [
        'uses' => 'App\Http\Controllers\eprojectController@store_category',
        'as' => 'admin.store.category'

    ])->middleware('auth');


    //product

    Route::get('admin_index_product', [
        'uses' => 'App\Http\Controllers\eprojectController@index_product',
        'as' => 'admin.index.product'

    ])->middleware('auth');

    Route::get('detail_product/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@show_product',
        'as' => 'admin.detail.product'

    ])->middleware('auth');


    Route::get('delete_product/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@confirm_product',
        'as' => 'admin.delete.confirm.product'

    ])->middleware('auth');
    Route::post('delete_product/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@delete_product',
        'as' => 'admin.delete.product'

    ])->middleware('auth');

    Route::get('update_product/{id}/{categoryid}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_product',
        'as' => 'admin.edit.product'
    ])->middleware('auth');

    Route::post('update_product/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_product',
        'as' => 'admin.update.product'
    ])->middleware('auth');


    Route::get('new_product_form', [
        'uses' => 'App\Http\Controllers\eprojectController@form_product',
        'as' => 'admin.create.product'

    ])->middleware('auth');

    Route::post('new_product_form', [
        'uses' => 'App\Http\Controllers\eprojectController@store_product',
        'as' => 'admin.store.product'

    ])->middleware('auth');


//    service
/////
///
///
///


    Route::get('admin_index_service', [
        'uses' => 'App\Http\Controllers\eprojectController@index_service',
        'as' => 'admin.index.service'

    ])->middleware('auth');

    Route::get('detail_service/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@show_service',
        'as' => 'admin.detail.service'

    ])->middleware('auth');


    Route::get('delete_service/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@confirm_service',
        'as' => 'admin.delete.confirm.service'

    ])->middleware('auth');
    Route::post('delete_service/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@delete_service',
        'as' => 'admin.delete.service'

    ])->middleware('auth');

    Route::get('update_service/{id}/{categoryid}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_service',
        'as' => 'admin.edit.service'
    ])->middleware('auth');

    Route::post('update_service/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_service',
        'as' => 'admin.update.service'
    ])->middleware('auth');


    Route::get('new_service_form', [
        'uses' => 'App\Http\Controllers\eprojectController@form_service',
        'as' => 'admin.create.service'

    ])->middleware('auth');

    Route::post('new_service_form', [
        'uses' => 'App\Http\Controllers\eprojectController@store_service',
        'as' => 'admin.store.service'

    ])->middleware('auth');

});
