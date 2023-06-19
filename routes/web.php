<?php


use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\dutyRosterController;

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Models\Inventory;
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

//inventory route
Route::get('/inventory', [InventoryController::class,'index'])->name('inventory.inventoryList')->middleware('auth');
Route::get('/inventory/create', [InventoryController::class,'create'])->name('inventory.inventoryAdd');
Route::post('/inventory', [InventoryController::class,'store'])->name('inventory.store');
Route::get('/inventory/{inventory}/edit', [InventoryController::class,'edit'])->name('inventory.inventoryEdit');
Route::put('/inventory/{inventory}', [InventoryController::class,'update'])->name('inventory.update');
Route::delete('/inventory/{inventory}', [InventoryController::class,'destroy'])->name('inventory.destroy');

//sales report route
Route::get('/salesreport', [SalesReportController::class,'index'])->name('Generate Sales Report.reportList')->middleware('auth');
Route::get('/salesreport/create', [SalesReportController::class,'create'])->name('Generate Sales Report.reportAdd');
Route::post('/salesreport', [SalesReportController::class,'store'])->name('salesreport.store');
Route::get('/salesreport/{Sales_ID}', [SalesReportController::class,'edit'])->name('salesreport.edit');
Route::put('/salesreport/{Sales_ID}', [SalesReportController::class,'update'])->name('Generate Sales Report.reportUpdate');
Route::delete('/salesreport/{Sales_ID}', [SalesReportController::class,'destroy'])->name('salesreport.destroy');

//duty roster route
Route::get('/dutyRoster', [dutyRosterController::class,'index'])->name('Manage Duty Roster.Schedule')->middleware('auth');
Route::get('/dutyRoster/create', [dutyRosterController::class,'create'])->name('schedule.slotAdd');
Route::post('/dutyRoster', [dutyRosterController::class,'store'])->name('schedule.store');
Route::put('/dutyRoster/{id}', [dutyRosterController::class,'edit'])->name('Manage Duty Roster.slotUpdate');
Route::delete('/dutyRoster/{id}', [dutyRosterController::class,'destroy'])->name('Manage Duty Roster.destroy');

//payment route
Route::get('/payments', [PaymentController::class,'index'])->name('Manage Payment Activities.paymentList')->middleware('auth');
Route::get('/payments/create', [PaymentController::class,'create'])->name('Manage Payment Activities.paymentAdd');
Route::post('/payments', [PaymentController::class,'store'])->name('payment.store');
Route::get('/payments/{Payment_ID}', [PaymentController::class,'edit'])->name('payment.edit');
Route::put('/payments/{Payment_ID}', [PaymentController::class,'update'])->name('Manage Payment Activities.paymentUpdate');
Route::delete('/payments/{Payment_ID}', [PaymentController::class,'destroy'])->name('payment.destroy');

//members
Route::get('/members', [ProfileController::class,'index'])->name('profile.membersList')->middleware('auth');
//Latihan
/*
Route::get('/todos', [TodoController::class,'index'])->name('todos.index')->middleware('auth');
Route::get('/todos/create', [TodoController::class,'create'])->name('todos.create');
Route::post('/todos', [TodoController::class,'store'])->name('todos.store');
Route::get('/todos/{todo}/edit', [TodoController::class,'edit'])->name('todos.edit');
Route::put('/todos/{todo}', [TodoController::class,'update'])->name('todos.update');
Route::delete('/todos/{todo}', [TodoController::class,'destroy'])->name('todos.destroy');
*/



require __DIR__.'/auth.php';
