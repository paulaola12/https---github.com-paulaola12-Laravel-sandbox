<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\userController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [testController::class, 'index']);

route::post('/create', [testController::class, 'store'])->name('create');

route::get('/display', [testController::class, 'show_edit']);

route::get('/edit/{id}', [testController::class, 'show']);

route::put('/update/{id}', [testController::class, 'update'])->name('update');

route::delete('/delete/{id}', [testController::class, 'destroy'])->name('delete');

// User Controlller Details 

route::get('/registeration', [userController::class, 'create']);
route::post('/create', [userController::class, 'store'])->name('create');
route::get('/login', [userController::class, 'login'])->name('logina');
route::post('/login_into', [userController::class, 'login_into'])->name('login');
route::post('/logout', [userController::class, 'logout'])->name('logout');
