<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('about');
})->name('aboutpage');

Route::get('/post', function(){

    return view('post');
});

//Directly view source
// Route::view('/post','post');


// if id is necessary
//Defing the type of parameter of url
// Route::get('/post/{id}', function(string $value ){

//     return '<h1>Post Id : '.$value.'';
// })->whereIn('id',[7,9,8,'movie']);



//If id is not necessary
// Route::get('/post/{id?}', function(string $value = null){

//     if($value){
//         return '<h1>Post Id : '.$value.'';
//     }
//     else{
//         return '<h1>No Post id found';
//     }
// });


//Giving the particular name to the url of the route

// Route::get('/about-us', function(){

//     return view('about');
// })->name('aboutpage');


//Using Prefexix to not to give again the again name .of xyz page caategories

// Route::prefix('/page')->group(function(){

//     Route::get('/shoes', function(){

//         return view('shoes');
//     });
//     Route::get('/dress', function(){

//         return view('dress');
//     })->name('dress');


// });

//It will redirect it to the updated page

// Route::redirect('/hello','/about-us',301);

// last number tells that perment or temporaily


//It will redirect to default 
// Route::fallback(function(){

//     return "<h2>Page Not found";
// });

Route::get('/', function(){

    return view('welcome');
});

Route::get('/test' , function(){
    return view('test');
});