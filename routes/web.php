<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'front'],function(){
    Route::get('/','indexController@index')->name('index');
});

Route::group(['namespace'=>'admin','prefix'=>'admin', 'as'=>'admin.'],function(){
        Route::get('/','indexController@index')->name('index');
      Route::group(['namespace'=>'user','prefix'=>'user','as'=>'user.'],function(){
        Route::get('/add','indexController@adduser')->name('add');
      });
});













// Example Data


// Route::get('/admin',function(){
//     echo 'Admin Panel';
// });


// Route::get('/',function(){
//     echo 'Home Page';
// });


// Route::get('/test/{name?}/{surname?}', 'testController@index', );
// Route::get('/test/add', 'testController@add');

// Route::get('/test', 'testController@index');
// Route::get('/test/add', 'testController@add');

// Route::get('/{name?}',function($name = null){
//     echo $name;
// });

// Route::get('/{name}',function($name){
//     echo $name;
// });

// Route::match(['get','post'],'/',function(){
//     return "Home Page";
// });