<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseRecordController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ClientController::class)->prefix('client')->name('client.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/active','activeClient')->name('active');
     Route::get('/inactive','inactiveClient')->name('inactive');
});

Route::controller(CaseRecordController::class)->prefix('caseRecord')->name('caseRecord.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/active','activeCases')->name('active');
    Route::get('/closed','closeCases')->name('closed');
});

Route::controller(PaymentController::class)->prefix('payment')->name('payment.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/cases','casesPayment')->name('cases');
    Route::get('/invoice','invocie')->name('invoice');
    Route::get('/invoice-print','invoicePrint')->name('invoicePrint');
});

require __DIR__.'/auth.php';
