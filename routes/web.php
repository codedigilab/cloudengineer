<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopDetails;
use App\Http\Controllers\WifiPassword;


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

//HomePage
Route::get('/admin', function () {
    return view('admin.index');
});
