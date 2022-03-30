<?php

use App\Book;
use Illuminate\Support\Facades\Route;


Route::get('/books', function () {


  $x = \App\User::find(1);
  // echo $x->name." ".$x->surname;
  echo $x->full_name;




  // \App\Book::create(['name'=>'donuz fermasi','autherid'=>1]);
  // $x = \App\Book::find(1);
  // $firstName = $x->name;
  // echo $firstName;



  // $x = \App\Auther::find(1)->book;
  // $x = \App\Auther::find(1)->bookbuy;
  // foreach($x as $key => $value){
  //   echo $value['code']."<br>";
  // }
  // dd($x);
  // foreach($x as $key=>$value){
  //  echo $value['name']."<br>";
  // }










  // $book = \App\Book::updateOrCreate(
  //   ['name'=>'Kataloniya3'],
  //   ['autherid'=>7]
  // );



  // $book = App\Book::firstOrNew(['name'=>'Kataloniya1'],['autherid'=>4]);
  // dd($book);

  // $x = \App\Auther::find(1)->book->name;
  // dd($x);

  // $x = \App\Book::find(1)->auther->name;
  // dd($x);



  // $book = \App\Book::firstOrCreate(['name'=>'Heyvaistan2'],['autherid'=>1]);
  // dd($book);




  //  $x =  \App\Book::where('id','=',2)->delete();
  // //  dd($x);
  // if($x){
  //   echo "delete success";


  // }else{
  //   echo "something wrong";
  // }


  // \App\Book::where('id','=',4)->delete();

  // $book = App\Book::find(1);
  // $book ->delete();


  // App\Book::where("id","=",1)->update(['autherid'=>4]);
  // $book =  App\Book::find(1);
  // $book->autherid = 2;
  // $book->save();


  // \App\Book::create(['name' => 'Kataloniyaya mehebbetle', 'autherid' => 1]);

  // $book = new App\Book();
  // $book->name = "Donuz ferması ";
  // $book->autherid=1;
  // $book->save();



  // $x = \App\Book::where('autherid',"=",1)->get();
  // $x = \App\Book::orderBy('name',"desc")->get();

  // dd($x);
  // foreach($x as $key => $value){
  //   echo $value["name"]."<br>";
  // }


});




Route::get('/dbtest', function () {
  Illuminate\Support\Facades\DB::table('users')->orderBy('id')->chunk(3, function ($users) {
    echo '<div class="row" style="border:1px solid red; padding:10px;">';
    foreach ($users as $user) {
      echo '<div class="col-md-4">' . $user->name . '</div>';
    }
    echo '</div>';
    // dd($users);
  });
});

Route::get('/users', function () {
  // echo 'user lists';


  // $users = \Illuminate\Support\Facades\DB::table('users')->select(['id','name'])->get();
  // $users = \Illuminate\Support\Facades\DB::table('users')->where('id','=',1)->exists();
  // $users = \Illuminate\Support\Facades\DB::table('users')->max('age');
  // $users = \Illuminate\Support\Facades\DB::table('users')->sum('age');
  // $users = \Illuminate\Support\Facades\DB::table('users')->avg('age');
  // $users = \Illuminate\Support\Facades\DB::table('users')->min('age');
  // $users = \Illuminate\Support\Facades\DB::table('users')->get();
  // $users = \Illuminate\Support\Facades\DB::table('users')->first();
  // $users = \Illuminate\Support\Facades\DB::table('users')->first();
  // $users = \Illuminate\Support\Facades\DB::table('users')->where('id','=',1)->get();
  // $users = \Illuminate\Support\Facades\DB::table('users')->pluck('surname');
  // echo $users->name;
  // dd($users);
  // foreach ($users as $key => $value) {
  //   echo $value->id."=>".$value->name."<br>";
  // }




  // $users = \Illuminate\Support\Facades\DB::table('users')->insert([
  //   ['name'=>'Elsad','surname'=>'Aliyev','age'=>22],
  //   ['name'=>'Fezo','surname'=>'Jhon','age'=>32]
  // ]);
  // $users = \Illuminate\Support\Facades\DB::table('users')
  // ->orWhere('id','=',1)
  // ->orWhere('id','=',4)
  // ->get();

  // $users = \Illuminate\Support\Facades\DB::table('users')
  // ->whereIn('id',[1,4])
  // ->whereNotIn('id',[1,4])
  // ->groupBy('age')
  // ->having('age','>',20)
  // ->inRandomOrder()
  // ->limit(1)
  // ->orderBy('id','desc')
  // ->having('age','>',20)
  // ->truncate();
  // ->get();
  // $users = \Illuminate\Support\Facades\DB::table('users')->where('id','=','5')->delete();
  // $users = \Illuminate\Support\Facades\DB::table('users')->where('id','=','5')->update(['age'=>20]);
  // $users = \Illuminate\Support\Facades\DB::table('users')->insert(
  //   ['name'=>'Elsad','surname'=>'Aliyev','age'=>22]
  // );

  // dd($users);

  echo "Hello";
});

Route::group(['namespace' => 'front'], function () {
  Route::get('/', 'indexController@index')->name('index');
});

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/', 'indexController@index')->name('index');
  Route::group(['namespace' => 'user', 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/add', 'indexController@adduser')->name('add');
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