<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('websitePages.guest');
})->name('guest');

/*=========================================================================================
    Auth route
==========================================================================================*/

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');


/*=========================================================================================
    pages route
==========================================================================================*/

Route::get('/todo', function(){
    return view('websitePages.ToDo');
})->name('todo');

Route::get('/dashboardAnalytics', function(){
    return view('dashboard.Analytics');
})->name('dashboardAnalytics');

Route::get('/email', function(){
    return view('websitePages.emailPage');
})->name('email');


Route::get('/chat', function(){
    return view('websitePages.chat');
})->name('chat');

Route::get('/calender', function(){
    return view('websitePages.calender');
})->name('calender');

Route::get('/accountSettings', function(){
    return view('websitePages.accountSettings');
})->name('accountSettings');

Route::get('/fileManager', function(){
    return view('websitePages.fileManager');
})->name('fileManager');

