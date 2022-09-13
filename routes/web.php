<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


// Route::get('/home', function () {
//     return view('home');
// });

//Route::get('/post/{id}', [PostController::class, 'index']);

Route::get('/post/{id}/{name}', [PostController::class, 'show_post']);
Route::get('/contact', [PostController::class, 'contact']);

Route::get('/home', [PostController::class, 'home']);


Route::get('/insert',function () {

    DB::insert('insert into posts(title, body) values(?,?)',['PHP with Laravel','Laravel is the best thing that has happened to PHP']);

});

Route::get('/read',function () {

    $results = DB::select('select * from posts where id =?',[2]);

    return var_dump($results);

    // foreach($results as $post){
    //     return $post->title;
    // }

});


Route::get('/update',function () {

    $update = DB::update('update posts set title = "Update title" where id=?',[2]);
    return $update;
});

Route::get('/delete',function () {

    $delete = DB::delete('delete from posts where id=?',[2]);
    return $delete;
});