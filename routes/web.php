<?php

use Illuminate\Support\Facades\Route;

Route::get('/users',function(){
    // echo 'user lists';
    // $users = \Illuminate\Support\Facades\DB::table('users')->get();
    // $users = \Illuminate\Support\Facades\DB::table('users')->first();
    // $users = \Illuminate\Support\Facades\DB::table('users')->first();
    // $users = \Illuminate\Support\Facades\DB::table('users')->where('id','=',1)->get();
    $users = \Illuminate\Support\Facades\DB::table('users')->pluck('surname');
    // echo $users->name;
    dd($users);
    // foreach ($users as $key => $value) {
    //   echo $value->id."=>".$value->name."<br>";
    // }

});

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