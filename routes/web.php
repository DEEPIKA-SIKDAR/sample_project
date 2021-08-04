<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});

Route::post('/user-register',[AuthController::class, 'createNewUser']);
Route::post('/check-login',[AuthController::class,'checkLoginCredential']);
Route::get('/logout',[Authcontroller::class,'logout']);
Route::get('/image',[Authcontroller::class,'image']);
// Route::get('/succe',[Authcontroller::class,'successlogin']);
Route::get('/dashboard',[Authcontroller::class,'dashboard']);
Route::get('/image-upload',[Authcontroller::class, 'imageUpload'])->name('image.upload');
Route::post('/image-upload', [Authcontroller::class,'imageUploadPost'])->name('image.upload.post');



