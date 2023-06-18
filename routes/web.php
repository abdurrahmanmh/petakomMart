<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesReportController;
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
Route::get('/salesreport', [SalesReportController::class,'index'])->name('Generate Sales Report.reportList')->middleware('auth');
Route::get('/salesreport/create', [SalesReportController::class,'create'])->name('Generate Sales Report.reportAdd');
Route::post('/salesreport', [SalesReportController::class,'store'])->name('salesreport.store');
Route::get('/salesreport/{salesreport}/edit', [SalesReportController::class,'edit'])->name('Generate Sales Report.reportUpdate');
Route::put('/salesreport/{salesreport}', [SalesReportController::class,'update'])->name('salesreport.edit');
Route::delete('/salesreport/{Sales_ID}', [SalesReportController::class,'destroy'])->name('salesreport.destroy');

require __DIR__.'/auth.php';
