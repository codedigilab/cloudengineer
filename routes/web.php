<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopDetails;


//AdminPanel


//laptop
Route::get('/laptopdetails', [LaptopDetails::class, 'index'])->name('laptopdetails.index');
Route::post('/laptopdetails', [LaptopDetails::class, 'store'])->name('laptopdetails.store');
Route::get('/laptopdetails/edit/{row}', [LaptopDetails::class, 'edit'])->name('laptopdetails.edit');
Route::post('/laptopdetails/update/{row}', [LaptopDetails::class, 'update'])->name('laptopdetails.update');
Route::get('/laptopdetails/toggle/{row}', [LaptopDetails::class, 'toggleStatus'])->name('laptopdetails.toggleStatus');


//HomePage
Route::get('/', function () {
    return view('welcome');
});
