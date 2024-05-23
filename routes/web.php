<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;

Route::get('/time', [AllController::class,'index'])->name('index');
Route::get('/time/create', [AllController::class,'create'])->name('create');
Route::post('/time/store', [AllController::class,'store'])->name('store');
Route::get('/time/{time}/edit', [AllController::class, 'edit'])->name('edit');
Route::put('time/{time}/update', [AllController::class,'update'])->name('update');
Route::delete('/time/{time}/delete', [AllController::class,'delete'])->name('delete');

Route::get('/welcome', [AllController::class, 'welcome']);

Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');

Route::get('/student', function () {
    return view('student.student');
})->name('student');

Route::get('/facilitator', function () {
    return view('facilitator.facilitator');
})->name('facilitator');
