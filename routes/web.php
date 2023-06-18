<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Models\Payment;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/payments', [PaymentController::class,'index'])->name('Manage Payment Activities.paymentList')->middleware('auth');
Route::get('/payments/create', [PaymentController::class,'create'])->name('Manage Payment Activities.paymentAdd');
Route::post('/payments', [PaymentController::class,'store'])->name('payment.store');
Route::get('/payments/{Payment_ID}', [PaymentController::class,'edit'])->name('payment.edit');
Route::put('/payments/{Payment_ID}', [PaymentController::class,'update'])->name('Manage Payment Activities.paymentUpdate');
Route::delete('/payments/{Payment_ID}', [PaymentController::class,'destroy'])->name('payment.destroy');
require __DIR__.'/auth.php';

