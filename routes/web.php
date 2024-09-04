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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () { 
    return 'Hello World'; 
 }); 

 Route::get('/world', function () { 
    return 'World'; 
 }); 

 Route::get('/selamat', function () { 
    return 'Selamat Datang'; 
 }); 

 Route::get('/about', function () { 
    return 'NIM : 2241760117 Nama : Irel';
 }); 

 Route::get('/user/{irel}', function ($irel) { 
    return 'Nama saya '.$irel;
 }); 
 
 Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
 }); 


 Route::get('/articles/{id}', function ($idAr) { 
    return 'Halaman Artikel dengan ID '.$idAr;
 }); 
 
 Route::get('/user/{name?}', function ($name='irel') { 
    return 'Nama saya '.$name;
 }); 

 