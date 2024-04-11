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
Route::get('/referrallink', [App\Http\Controllers\UserController::class, 'referrallink'])->name('dashboard.referrallink');
Route::get('/support', [App\Http\Controllers\UserController::class, 'support'])->name('dashboard.support');



Route::get('/referral', [App\Http\Controllers\UserController::class, 'referral'])->name('dashboard.referral');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/account', [App\Http\Controllers\UserController::class, 'index'])->name('admin.transactions');
Route::get('/admin/referrallink', [App\Http\Controllers\UserController::class, 'referrallink'])->name('dashboard.referrallink');



Route::get('/admin/transactions', [App\Http\Controllers\AdminController::class, 'transactions'])->name('admin.transactions');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');













Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

