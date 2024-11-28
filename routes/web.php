<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [testController::class, 'index']);

route::post('/create', [testController::class, 'store'])->name('create');

route::get('/display', [testController::class, 'show_edit']);

route::get('/edit/{id}', [testController::class, 'show']);

route::put('/update/{id}', [testController::class, 'update'])->name('update');

route::delete('/delete/{id}', [testController::class, 'destroy'])->name('delete');
