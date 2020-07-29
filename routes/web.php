<?php
use App\Post;
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
Auth::routes();


Route::group(['middleware'=>'auth'],function(){
    Route::get('/home',[
        'uses'=>'HomeController@index',
        'as'=>'home'
    ]);
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    

    
     // --------------------------------------categories-----------------------------------------

     Route::get('/category/create',[
        'uses'=>'CategoriesController@create',
        'as'=>'category.create'
    ]);

    Route::get('/categories',[
        'uses'=>'CategoriesController@index',
        'as'=>'categories'
    ]);

    Route::post('/category/store',[
        'uses'=>'CategoriesController@store',
        'as'=>'category.store'
    ]);

    Route::get('/category/edit/{id}',[
        'uses'=>'CategoriesController@edit',
        'as'=>'category.edit'
    ]);
    
    Route::post('/category/update/{id}',[
        'uses'=>'CategoriesController@update',
        'as'=>'category.update'
    ]);

    Route::get('/category/delete/{id}',[
        'uses'=>'CategoriesController@destroy',
        'as'=>'category.delete'
    ]);


    // ------------------------------ users -------------------------------------
    Route::get('/users',[
        'uses'=>'UsersController@index',
        'as'=>'users'
    ]);
    Route::get('/user/create',[
        'uses'=>'UsersController@create',
        'as'=>'user.create'
    ]);
    Route::post('/user/store',[
        'uses'=>'UsersController@store',
        'as'=>'user.store'
    ]);
    Route::get('/profile/edit',[
        'uses'=>'ProfilesController@edit',
        'as'=>'profile.edit'
    ]);
    
    Route::post('/profile/update',[
        'uses'=>'ProfilesController@update',
        'as'=>'admin.profile.update'
    ]);
    Route::get('/user/delete/{id}',[
        'uses'=>'UsersController@destroy',
        'as'=>'user.delete'
    ]);
});


Route::group(['prefix'=>'agency','middleware'=>'auth'],function(){
    Route::get('/edit/profile',[
        'uses'=>'ProfilesController@index',
        'as'=>'edit.profile'
    ]);
    Route::post('/profile/update',[
        'uses'=>'ProfilesController@update_agency',
        'as'=>'agency.profile.update'
    ]);
    
    // ------------------------------------locals--------------------------------------

    Route::get('/local/create',[
        'uses'=>'LocalesController@create',
        'as'=>'local.create'
    ]);
    
    Route::post('/local/store',[
        'uses'=>'LocalesController@store',
        'as'=>'local.store'
    ]);
    Route::get('/locals',[
        'uses'=>'LocalesController@index',
        'as'=>'locals'
    ]);
    Route::get('/local/edit/{id}',[
        'uses'=>'LocalesController@edit',
        'as'=>'local.edit'
    ]);
    Route::post('/local/update/{id}',[
        'uses'=>'LocalesController@update',
        'as'=>'local.update'
    ]);
});