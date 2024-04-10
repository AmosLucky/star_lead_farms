<?php

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
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});
// Route::get('/products', function () {
//     return view('pages.products');
// });
Route::get('/contact', function () {
    return view('pages.contact');
});



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/packages', [App\Http\Controllers\DashboardController::class, 'packages'])->name('dashboard.packages');
Route::get('/payment/{id}', [App\Http\Controllers\DashboardController::class, 'payment'])->name('dashboard.payment');

Route::post('/success_payment', [App\Http\Controllers\UserController::class, 'successPayment'])->name('success_payment');

Route::get('/transactions', [App\Http\Controllers\TransactionsController::class, 'index'])->name('dashboard.transactions');

Route::get('/account', [App\Http\Controllers\UserController::class, 'index'])->name('dashboard.index');

Route::post('/updateprofile', [App\Http\Controllers\UserController::class, 'updateprofile'])->name('dashboard.updateprofile');
Route::post('/updatepassword', [App\Http\Controllers\UserController::class, 'updatepassword'])->name('dashboard.updatepassword');









Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

