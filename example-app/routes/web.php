<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::get("/",[MainController::class,'page'])->name('page');
Route::view('/sort','sort')->name('sort');


Route::middleware("auth")->group(function (){
    Route::view("/crud","auth.crud.index")->name("crud");
    Route::controller(\App\Http\Controllers\MainController::class)->group(function (){
        Route::get("/crud", [MainController::class, 'index'])->name('crud.index');
        Route::get("/create", [MainController::class, 'create'])->name('main.create');
        Route::post("/store", [MainController::class, 'store'])->name('main.store');
        Route::delete("destroy/{id}",[MainController::class,'destroy'])->name('main.destroy');
    });

    Route::controller(\App\Http\Controllers\TameController::class)->group(function (){
        Route::get('/our-tame/index','index')->name('our-tame.index');
        Route::get('/our-tame/create','create')->name('our-tame.create');
        Route::get('/our-tame/show/{id}','show')->name('our-tame.show');
        Route::post('/our-tame/store','store')->name('our-tame.store');

        Route::get('/our-tame/edit/{id}', 'edit')->name('our-tame.edit');
        Route::put('/our-tame/edit/{id}', 'update')->name('our-tame.update');

        Route::delete('/our-tame/destroy{id}','destroy')->name('our-tame.destroy');
    });

    Route::controller(\App\Http\Controllers\ConnectionController::class)->group(function (){
        Route::get('/connection/index','index')->name('connection.index');
        Route::get('/connection/create','create')->name('connection.create');
        Route::get('/connection/show/{id}','show')->name('connection.show');
        Route::post('/connection/store','store')->name('connection.store');

        Route::get('/connection/edit/{id}', 'edit')->name('connection.edit');
        Route::put('/connection/edit/{id}', 'update')->name('connection.update');

        Route::delete('/connection/destroy{id}','destroy')->name('connection.destroy');
    });

    Route::controller(\App\Http\Controllers\ProjectController::class)->group(function (){
        Route::get('/project/index','index')->name('project.index');
        Route::get('/project/create','create')->name('project.create');
        Route::get('/project/show/{id}','show')->name('project.show');
        Route::post('/project/store','store')->name('project.store');

        Route::get('/project/edit/{id}', 'edit')->name('project.edit');
        Route::put('/project/edit/{id}', 'update')->name('project.update');

        Route::delete('/project/destroy{id}','destroy')->name('project.destroy');
    });

    Route::post('/products/upload-image', [\App\Http\Controllers\MainController::class, 'uploadImage'])->name('upload.image');
    Route::post('/products/upload-image', [\App\Http\Controllers\TameController::class, 'uploadImage'])->name('upload.image');
});


Route::get("/login",[\App\Http\Controllers\AuthController::class,"login"])->name("login");
Route::post("/login",[\App\Http\Controllers\AuthController::class,"LoginPost"])->name("login.post");
Route::get("/register",[\App\Http\Controllers\AuthController::class,"register"])->name("register");
Route::post("/register",[\App\Http\Controllers\AuthController::class,"RegisterPost"])->name("register.post");
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
