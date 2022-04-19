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

    Route::get('admin', [
        'uses' => 'App\Http\Controllers\eprojectController@admin',
        'as' => 'admin.home'

    ]);
//category
    Route::get('admin_index_category', [
        'uses' => 'App\Http\Controllers\eprojectController@index_category',
        'as' => 'admin.index.category'

    ]);
    Route::get('/phpinfo', function() {
        return phpinfo();
    });

    Route::get('detail/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@show_category',
        'as' => 'admin.detail.category'

    ]);


    Route::get('delete/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@confirm_category',
        'as' => 'admin.delete.confirm.category'

    ]);
    Route::post('delete/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@delete_category',
        'as' => 'admin.delete.category'

    ]);

    Route::get('update/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_category',
        'as' => 'admin.edit.category'
    ]);

    Route::post('update/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_category',
        'as' => 'admin.update.category'
    ]);


    Route::get('new_category_form', [
        'uses' => 'App\Http\Controllers\eprojectController@form_category',
        'as' => 'admin.create.category'

    ]);

    Route::post('new_category_form', [
        'uses' => 'App\Http\Controllers\eprojectController@store_category',
        'as' => 'admin.store.category'

    ]);


    //product

    Route::get('admin_index_product', [
        'uses' => 'App\Http\Controllers\eprojectController@index_product',
        'as' => 'admin.index.product'

    ]);

    Route::get('detail_product/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@show_product',
        'as' => 'admin.detail.product'

    ]);


    Route::get('delete_product/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@confirm_product',
        'as' => 'admin.delete.confirm.product'

    ]);
    Route::post('delete_product/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@delete_product',
        'as' => 'admin.delete.product'

    ]);

    Route::get('update_product/{id}/{categoryid}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_product',
        'as' => 'admin.edit.product'
    ]);

    Route::post('update_product/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_product',
        'as' => 'admin.update.product'
    ]);


    Route::get('new_product_form', [
        'uses' => 'App\Http\Controllers\eprojectController@form_product',
        'as' => 'admin.create.product'

    ]);

    Route::post('new_product_form', [
        'uses' => 'App\Http\Controllers\eprojectController@store_product',
        'as' => 'admin.store.product'

    ]);


//    service
/////
///
///
///


    Route::get('admin_index_service', [
        'uses' => 'App\Http\Controllers\eprojectController@index_service',
        'as' => 'admin.index.service'

    ]);

    Route::get('detail_service/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@show_service',
        'as' => 'admin.detail.service'

    ]);


    Route::get('delete_service/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@confirm_service',
        'as' => 'admin.delete.confirm.service'

    ]);
    Route::post('delete_service/{id}', [
        'uses' => 'App\Http\Controllers\eprojectController@delete_service',
        'as' => 'admin.delete.service'

    ]);

    Route::get('update_service/{id}/{categoryid}',[
        'uses' => 'App\Http\Controllers\eprojectController@edit_service',
        'as' => 'admin.edit.service'
    ]);

    Route::post('update_service/{id}',[
        'uses' => 'App\Http\Controllers\eprojectController@update_service',
        'as' => 'admin.update.service'
    ]);


    Route::get('new_service_form', [
        'uses' => 'App\Http\Controllers\eprojectController@form_service',
        'as' => 'admin.create.service'

    ]);

    Route::post('new_service_form', [
        'uses' => 'App\Http\Controllers\eprojectController@store_service',
        'as' => 'admin.store.service'

    ]);

});
