<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/del',function () {

    $delete = DB::delete('delete from posts where id=?',[2]);
    return $delete;
});


// Route::get('/find',function () {
//     $posts= Post::all();
//     foreach($posts as $post){
//         return $post->title;
//     }
// });

Route::get('/find',function () {
    $post= Post::find(2);
    return $post->title;
});


Route::get('/findwhere',function () {
    $post= Post::where('id',2)->orderBy('id','desc')->take(1)->get();
    return $post;
});

Route::get('/findmore',function () {
    //$post= Post::findOrFail(2);
    // $post= Post::where('id',[0,50])->findOrFail();
    return $post;
});

Route::get('/basicinsert',function () {
    $post= new Post;
    //$post= Post::find(2);
    $post->title = 'New Eloquent title insert';
    $post->body = 'Wow eloquent is really cool';
    $post->save();
});

Route::get('/create',function () {
    Post::create(['title'=>'the create method','body'=>'WOW I\'am learning']);
});


Route::get('/update',function(){
    Post::where('id',2)->where('is_admin',0)->update(['title'=>'NEW PHP TITLE','body'=>'I love this']);
});


Route::get('/delete',function(){
    // $post = Post::find(2);
    // $post->delete();
    Post::destroy([7,8]);
    //Post::where('is_admin',0)->delete();
});

Route::get('/softdelete',function(){
    Post::find(10)->delete();
});


Route::get('/readsoftdelete',function(){
    // $post=Post::find(3);
    // return $post;

    // $post=Post::withTrashed()->where('is_admin',0)->get();
    // return $post;

    $post=Post::onlyTrashed()->where('is_admin',0)->get();
    return $post;

});


Route::get('/restore',function(){

    Post::withTrashed()->where('is_admin',0)->restore();

});

Route::get('/forcedelete',function(){

    Post::onlyTrashed()->where('is_admin',0)->forcedelete();

});