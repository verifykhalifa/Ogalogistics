<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/dashboard', function () {
//   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


//Customer Dashboard Routes
Route::get('/dashboard', "App\Http\Controllers\dashcontroller@dashboard")->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile', "App\Http\Controllers\dashcontroller@profile")->middleware(['auth', 'verified'])->name('profile');
Route::get('/history', "App\Http\Controllers\dashcontroller@history")->middleware(['auth', 'verified'])->name('history');
Route::get('/address', "App\Http\Controllers\dashcontroller@address")->middleware(['auth', 'verified'])->name('address');


//Admin Dashboard Routes
Route::get('/admindashboard', "App\Http\Controllers\admincontroller@admindashboard")->name('admindashboard');

//Driver Dashboard Routes
Route::get('/driverdash', "App\Http\Controllers\drivercontroller@driverdash")->name('driverdash');

//Partner Dashboard Routes
Route::get('/partnerdash', "App\Http\Controllers\partnercontroller@partnerdash")->name('partnerdash');



require __DIR__.'/auth.php';
