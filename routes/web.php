<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/', \App\Http\Livewire\Comments::class)->name('home');
    Route::get('/profile', \App\Http\Livewire\Profile::class)->name('profile');
    Route::get('/change_password', \App\Http\Livewire\Changepwd::class)->name('change.password');
});
Route::group(['middleware'=> 'guest'], function(){
    Route::get('/login', \App\Http\Livewire\Login::class)->name('login');
    Route::get('/register', \App\Http\Livewire\Register::class)->name('register');
});



