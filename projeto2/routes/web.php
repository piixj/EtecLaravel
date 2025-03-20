<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');function () {
    return view('welcome');
};
