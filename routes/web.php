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
    return view('welcome');
});



Route::group(['prefix'=>'auth'],function (){
    Route::get('login', [
       'uses' => 'AdminControllerWithRepos@ask',
        'as' => 'admin.ask'
    ]);
    Route::post('login', [
        'uses' => 'AdminControllerWithRepos@signin',
        'as' => 'admin.signin'
    ]);
    Route::post('test', [
        'uses' => 'AdminControllerWithRepos@test',
        'as' => 'admin.test'
    ]);
    Route::get('logout', [
        'uses' => 'AdminControllerWithRepos@signout',
        'as' => 'admin.signout'
    ]);

});


Route::group(['prefix'=>'admin', 'middleware' => ['admin.auth']], function (){
    Route::get('homepage', [
        'uses' => 'AdminControllerWithRepos@homepage',
        'as' => 'admin.homepage'
    ]);
    Route::get('admin', [
        'uses' => 'AdminControllerWithRepos@adminindex',
        'as' => 'admin.adminindex'
    ]);
    Route::get('show/{username}', [
        'uses' => 'AdminControllerWithRepos@showadmin',
        'as' => 'admin.showadmin'
    ]);
    Route::get('updateadmin/{username}', [
        'uses' => 'AdminControllerWithRepos@editadmin',
        'as' => 'admin.editadmin'
    ]);
    Route::post('updateadmin/{username}', [
        'uses' => 'AdminControllerWithRepos@updateadmin',
        'as' => 'admin.updateadmin'
    ]);


    Route::get('customer', [
        'uses' => 'AdminControllerWithRepos@customerindex',
        'as' => 'admin.customerindex'
    ]);
    Route::get('showcustomer/{id}',[
        'uses' => 'AdminControllerWithRepos@showcustomer',
        'as' => 'admin.showcustomer'
    ]);
    Route::get('updatecustomer/{id}',[
        'uses' => 'AdminControllerWithRepos@editcustomer',
        'as' => 'admin.editcustomer'
    ]);
    Route::post('updatecustomer/{id}',[
        'uses' => 'AdminControllerWithRepos@updatecustomer',
        'as' => 'admin.updatecustomer'
    ]);


    Route::get('',[
        'uses'=>'AdminControllerWithRepos@adminindex',
        'as' => 'admin.adminindex'
    ]);
    Route::get('collection',[
        'uses' => 'AdminControllerWithRepos@collectionindex',
        'as' => 'admin.collectionindex'
    ]);
    Route::get('showcolection/{id}',[
        'uses'=>'AdminControllerWithRepos@showcollection',
        'as' => 'admin.showcollection'
    ]);
    Route::get('createcollection',[
        'uses'=>'AdminControllerWithRepos@createcollection',
        'as' => 'admin.createcollection'
    ]);
    Route::post('createcollection',[
        'uses'=>'AdminControllerWithRepos@storecollection',
        'as' => 'admin.storecollection'
    ]);
    Route::get('updatecollection/{id}',[
        'uses'=>'AdminControllerWithRepos@editcollection',
        'as' => 'admin.editcollection'
    ]);
    Route::post('updatecollection/{id}',[
        'uses'=>'AdminControllerWithRepos@updatecollection',
        'as' => 'admin.updatecollection'
    ]);
    Route::get('deletecollection/{id}',[
        'uses'=>'AdminControllerWithRepos@confirmcollection',
        'as' => 'admin.confirmcollection'
    ]);
    Route::post('deletecollection/{id}',[
        'uses'=>'AdminControllerWithRepos@deletecollection',
        'as' => 'admin.deletecollection'
    ]);


    Route::get('stylist', [
        'uses' => 'AdminControllerWithRepos@stylistindex',
        'as' => 'admin.stylistindex'
    ]);
    Route::get('showstylist/{id}',[
        'uses'=>'AdminControllerWithRepos@showstylist',
        'as' => 'admin.showstylist'
    ]);
    Route::get('createstylist',[
        'uses' => 'AdminControllerWithRepos@createstylist',
        'as' => 'admin.createstylist'
    ]);
    Route::post('createstylist',[
        'uses' => 'AdminControllerWithRepos@storestylist',
        'as' => 'admin.storestylist'
    ]);
    Route::get('updatestylist/{id}',[
        'uses' => 'AdminControllerWithRepos@editstylist',
        'as' => 'admin.editstylist'
    ]);
    Route::post('updatesylist/{id}',[
        'uses' => 'AdminControllerWithRepos@updatestylist',
        'as' => 'admin.updatestylist'
    ]);
    Route::get('deletestylist/{id}', [
        'uses' => 'AdminControllerWithRepos@confirmstylist',
        'as' => 'admin.confirmstylist'
    ]);
    Route::post('deletestylist/{id}',[
        'uses' => 'AdminControllerWithRepos@deletestylist',
        'as' => 'admin.deletestylist'
    ]);


    Route::get('product', [
        'uses' => 'AdminControllerWithRepos@productindex',
        'as' => 'admin.productindex'
    ]);
    Route::get('showproduct/{id}', [
        'uses' => 'AdminControllerWithRepos@showproduct',
        'as' => 'admin.showproduct'
    ]);
    Route::get('createproduct', [
        'uses' => 'AdminControllerWithRepos@createproduct',
        'as' => 'admin.createproduct'
    ]);
    Route::post('createproduct', [
        'uses' => 'AdminControllerWithRepos@storeproduct',
        'as' => 'admin.storeproduct'
    ]);
    Route::get('updateproduct/{id}', [
        'uses' => 'AdminControllerWithRepos@editproduct',
        'as' => 'admin.editproduct'
    ]);
    Route::post('updateproduct/{id}', [
        'uses' => 'AdminControllerWithRepos@updateproduct',
        'as' => 'admin.updateproduct'
    ]);
    Route::get('deleteproduct/{id}', [
        'uses' => 'AdminControllerWithRepos@confirmproduct',
        'as' => 'admin.confirmproduct'
    ]);
    Route::post('deleteproduct/{id}', [
        'uses' => 'AdminControllerWithRepos@deleteproduct',
        'as' => 'admin.deleteproduct'
    ]);
});


Route::group(['prefix' => 'viewC1'], function (){
    Route::get('index', [
       'uses' => 'ViewC1ControllerWithRepos@index',
       'as' => 'viewC1.index'
    ]);

    Route::get('shop', [
        'uses' => 'ViewC1ControllerWithRepos@shop',
        'as' => 'viewC1.shop'
    ]);

    Route::get('detail', [
        'uses' => 'ViewC1ControllerWithRepos@detail',
        'as' => 'viewC1.detail'
    ]);

    Route::get('cart', [
        'uses' => 'ViewC1ControllerWithRepos@cart',
        'as' => 'viewC1.cart'
    ]);

    Route::get('checkout', [
        'uses' => 'ViewC1ControllerWithRepos@checkout',
        'as' => 'viewC1.checkout'
    ]);


});
