<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopDetails;
use App\Http\Controllers\WifiPassword;
use App\Http\Controllers\Stock;
use App\Http\Controllers\StoreNumber;
//AdminPanel


//laptop
Route::get('/laptopdetails', [LaptopDetails::class, 'index'])->name('laptopdetails.index');
Route::post('/laptopdetails', [LaptopDetails::class, 'store'])->name('laptopdetails.store');
Route::get('/laptopdetails/edit/{row}', [LaptopDetails::class, 'edit'])->name('laptopdetails.edit');
Route::post('/laptopdetails/update/{row}', [LaptopDetails::class, 'update'])->name('laptopdetails.update');
Route::get('/laptopdetails/toggle/{row}', [LaptopDetails::class, 'toggleStatus'])->name('laptopdetails.toggleStatus');
Route::get('/addlaptopdetails', [LaptopDetails::class, 'storedata'])->name('storedata.index');


//wifipassword
Route::get('/wifipassword', [WifiPassword::class, 'index'])->name('wifipassword.index');
Route::post('/wifipassword', [WifiPassword::class, 'store'])->name('wifipassword.store');
Route::get('/wifipassword/edit/{row}', [WifiPassword::class, 'edit'])->name('wifipassword.edit');
Route::post('/wifipassword/update/{row}', [WifiPassword::class, 'update'])->name('wifipassword.update');
Route::get('/wifipassword/toggle/{row}', [WifiPassword::class, 'toggleStatus'])->name('wifipassword.toggleStatus');
Route::get('/addwifipassword', [WifiPassword::class, 'storedata'])->name('storedata.index');

//Stock
Route::get('/stock', [Stock::class, 'index'])->name('stock.index');
Route::post('/stock', [Stock::class, 'store'])->name('stock.store');
Route::get('/stock/edit/{row}', [Stock::class, 'edit'])->name('stock.edit');
Route::post('/stock/update/{row}', [Stock::class, 'update'])->name('stock.update');
Route::get('/stock/toggle/{row}', [Stock::class, 'toggleStatus'])->name('stock.toggleStatus');
Route::get('/addstock', [Stock::class, 'storedata'])->name('storedata.index');

//StoreNumber
Route::get('/storenumber', [StoreNumber::class, 'index'])->name('storenumber.index');
Route::post('/storenumber', [StoreNumber::class, 'store'])->name('storenumber.store');
Route::get('/storenumber/edit/{row}', [StoreNumber::class, 'edit'])->name('storenumber.edit');
Route::post('/storenumber/update/{row}', [StoreNumber::class, 'update'])->name('storenumber.update');
Route::get('/storenumber/toggle/{row}', [StoreNumber::class, 'toggleStatus'])->name('storenumber.toggleStatus');
Route::get('/addstorenumber', [StoreNumber::class, 'storedata'])->name('storedata.index');


//HomePage
Route::get('/admin', function () {
    return view('admin.index');
});
