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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');










Route::prefix('/admin')->namespace('Admin')->group(function(){

    //All Admin Route Here
    Route::match(['get', 'post'],'/', 'AdminController@adminlogin')->name('admin.login');
    Route::group(['middleware'=>['admin']], function(){
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('/logout', 'AdminController@logout')->name('admin.logout');

                //All Category Here
        Route::get('/add-main-category', 'CategoryController@addmain')->name('add.main');
        Route::post('/store-main-category', 'CategoryController@storemain')->name('store.main');
        Route::get('/view-main-category', 'CategoryController@viewmain')->name('view.main');
        Route::get('/edit-main-category', 'CategoryController@editmain')->name('edit.main');
        Route::post('/update-main-category', 'CategoryController@updatemain')->name('update.main');
        Route::get('/delete-main-category', 'CategoryController@deletemain')->name('delete.main');


        Route::get('/add-sub-category', 'CategoryController@addsub')->name('add.sub');
        Route::post('/store-sub-category', 'CategoryController@storesub')->name('store.sub');
        Route::get('/view-sub-category', 'CategoryController@viewsub')->name('view.sub');
        Route::get('/edit-sub-category', 'CategoryController@editsub')->name('edit.sub');
        Route::post('/update-sub-category', 'CategoryController@updatesub')->name('update.sub');
        Route::get('/delete-sub-category', 'CategoryController@deletesub')->name('view.sub');

         Route::get('/add-subsub-category', 'CategoryController@addsubsub')->name('add.subsub');
        Route::post('/store-subsub-category', 'CategoryController@storesubsub')->name('store.subsub');
        Route::get('/view-subsub-category', 'CategoryController@viewsubsub')->name('view.subsub');
        Route::get('/edit-subsub-category', 'CategoryController@editsubsub')->name('edit.subsub');
        Route::post('/update-subsub-category', 'CategoryController@updatesubsub')->name('update.subsub');
        Route::get('/delete-subsub-category', 'CategoryController@deletesubsub')->name('view.subsub');
        
    });

});