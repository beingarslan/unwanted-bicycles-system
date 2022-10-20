<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(
    [
        'prefix' => 'users',
        'as' => 'users.',
    ],
    function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/list', [UserController::class, 'list'])->name('list');
    }
);
