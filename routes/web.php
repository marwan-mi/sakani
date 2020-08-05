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
    Route::get('/payment',[
        'uses'=>'HomeController@pay',
        'as'=>'pay'
    ]);
    
    // ------------------------------------locals--------------------------------------

    Route::get('/local/create',[
        'uses'=>'LocalsController@create',
        'as'=>'local.create'
    ]);
    
    Route::post('/local/store',[
        'uses'=>'LocalsController@store',
        'as'=>'local.store'
    ]);
    Route::post('/local/mainpic',[
        'uses'=>'ImagesController@main',
        'as'=>'main'
    ]);
    Route::get('/locals',[
        'uses'=>'LocalsController@index',
        'as'=>'locals'
    ]);
    Route::get('/local/edit/{id}',[
        'uses'=>'LocalsController@edit',
        'as'=>'local.edit'
    ]);
    Route::post('/local/update/{id}',[
        'uses'=>'LocalsController@update',
        'as'=>'local.update'
    ]);
    Route::get('/local/delete/{id}',[
        'uses'=>'LocalsController@destroy',
        'as'=>'local.delete'
    ]);
    Route::get('/locals/trashed',[
        'uses'=>'LocalsController@trash',
        'as'=>'locals.trashed'
    ]);
    Route::get('/local/restore/{id}',[
        'uses'=>'LocalsController@restore',
        'as'=>'local.restore'
    ]);
    Route::get('/local/deletep/{id}',[
        'uses'=>'LocalsController@deletep',
        'as'=>'local.deletep'
    ]);
});