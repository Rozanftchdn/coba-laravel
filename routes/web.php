<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControler;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "home",
        'active' => "home"

    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        'active' => "about",
        "name"=>"Romad Rozan",
        "email"=>"ahmdrzan@gmail.com",
        "image"=>"img.jpg"
    ]);
});

Route::get('/posts', [ PostControler::class, 'index']);

//halaman single
Route::get('posts/{post:slug}', [PostControler::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "categories",
        'Categories' => Category::all()
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login') ->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index'); 
})->middleware('auth');  

Route::resource('/dashboard/posts', DashboardPostController::class) ->middleware('auth');