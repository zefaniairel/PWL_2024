<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',  function () { 
//     return 'Hello World'; 
//  }); 

 Route::get('/hello', [WelcomeController::class, 'hello']);

 Route::get('/world', function () { 
    return 'World'; 
 }); 

 Route::get('/selamat', function () { 
    return 'Selamat Datang'; 
 }); 

//  Route::get('/about', function () { 
//     return 'NIM : 2241760117 Nama : Irel';
//  }); 

 Route::get('/about', [PageController::class, 'Nama: Irel Nim: 2241760117']);

 Route::get('/user/{irel}', function ($irel) { 
    return 'Nama saya '.$irel;
 }); 
 
 Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
 }); 


//  Route::get('/articles/{id}', function ($idAr) { 
//     return 'Halaman Artikel dengan ID '.$idAr;
//  }); 

 Route::get('/articles', [PageController::class, 'Halaman Artikel dengan Id{id}']);
 
 Route::get('/user/{name?}', function ($name='irel') { 
    return 'Nama saya '.$name;
 }); 

// Prak 2 No 7
Route::get('/', [HomeController::class, '__invoke']);
Route::get('/about', [AboutController::class, '__invoke']);
Route::get('/articles/{id?}', [ArticleController::class, '__invoke']);

// Prak 2 No 9
Route::resource('photos', PhotoController::class);

// Prak 2 No 11
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 
 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
]);

// Prak 3 No 2
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Irelll']); 
// });
Route::get('/greeting', [WelcomeController::class, 'greeting']); 