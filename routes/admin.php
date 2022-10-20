<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(
    [
        'prefix' => 'users',
        'as' => 'users.',
        'middleware' => ['auth', 'role:admin']
    ],
    function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/list', [UserController::class, 'list'])->name('list');
        Route::get('/view/{id}', [UserController::class, 'show'])->name('show');
        Route::post('/remove', [UserController::class, 'remove'])->name('remove');
    }
);
