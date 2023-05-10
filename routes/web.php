<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'superadmin'], function () {
    Route::get('/dashboard/superadmin', [AdminController::class, 'index'])->name('super.admin')->middleware('admin');
    Route::get('/user/approved/{id}', [AdminController::class, 'user_approved'])->name('user.approved');
    Route::get('/user/approved/reject/{id}', [AdminController::class, 'approval_reject'])->name('user.approved.reject');
// });




Auth::routes();
