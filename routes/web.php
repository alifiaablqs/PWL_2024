<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/world', function () { 
    return 'World';
});

Route::get('/welcome', function () { 
    return 'Selamat Datang';
});

Route::get('/about', function () { 
    return 'Nama: Dyalifia Balqis Susanto <br>NIM: 2241760085 ';
});

Route::get('/user/fia', function ($name = 'Dyalifia Balqis Susanto') { 
    return 'Nama Saya: ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/articles/{post}/comments/{comment}', function ($commentId) {
    return 'Halaman Artikel ini '."dengan ID ".$commentId;
    });
        
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
    });


use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);
    
Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Dyalifia Balqis Susanto']);
    });

Route::get('/greeting', function () {        
    return view('blog.hello', ['name' => 'Dyalifia Balqis Susanto']);
    });
        
    
        
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


