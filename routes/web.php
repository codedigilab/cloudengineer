<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopDetails;
use App\Http\Controllers\WifiPassword;
use App\Http\Controllers\Stock;
use App\Http\Controllers\StoreNumber;
use App\Http\Controllers\Camera;
use App\Http\Controllers\Internet;
use App\Http\Controllers\Solution;
use App\Http\Controllers\Pos;
use App\Http\Controllers\StoreProblem;


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
Route::get('/transfer', [Stock::class, 'transfer'])->name('stock.transfer');
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

//Camera
Route::get('/camera', [Camera::class, 'index'])->name('camera.index');
Route::post('/camera', [Camera::class, 'store'])->name('camera.store');
Route::get('/camera/edit/{row}', [Camera::class, 'edit'])->name('camera.edit');
Route::post('/camera/update/{row}', [Camera::class, 'update'])->name('camera.update');
Route::get('/camera/toggle/{row}', [Camera::class, 'toggleStatus'])->name('camera.toggleStatus');
Route::get('/addcamera', [Camera::class, 'storedata'])->name('storedata.index');

//Internet
Route::get('/internet', [Internet::class, 'index'])->name('internet.index');
Route::post('/internet', [Internet::class, 'store'])->name('internet.store');
Route::get('/internet/edit/{row}', [Internet::class, 'edit'])->name('internet.edit');
Route::post('/internet/update/{row}', [Internet::class, 'update'])->name('internet.update');
Route::get('/internet/toggle/{row}', [Internet::class, 'toggleStatus'])->name('internet.toggleStatus');
Route::get('/addinternet', [Internet::class, 'storedata'])->name('storedata.index');

//Solution
Route::get('/solution', [Solution::class, 'index'])->name('solution.index');
Route::post('/solution', [Solution::class, 'store'])->name('solution.store');
Route::get('/solution/edit/{row}', [Solution::class, 'edit'])->name('solution.edit');
Route::post('/solution/update/{row}', [Solution::class, 'update'])->name('solution.update');
Route::get('/solution/toggle/{row}', [Solution::class, 'toggleStatus'])->name('solution.toggleStatus');
Route::get('/addsolution', [Solution::class, 'storedata'])->name('storedata.index');


//POS
Route::get('/pos', [Pos::class, 'index'])->name('pos.index');
Route::post('/pos', [Pos::class, 'store'])->name('pos.store');
Route::get('/pos/edit/{row}', [Pos::class, 'edit'])->name('pos.edit');
Route::post('/pos/update/{row}', [Pos::class, 'update'])->name('pos.update');
Route::get('/pos/toggle/{row}', [Pos::class, 'toggleStatus'])->name('pos.toggleStatus');
Route::get('/addpos', [Pos::class, 'storedata'])->name('storedata.index');

//StoreProblem
Route::get('/storeproblem', [StoreProblem::class, 'index'])->name('storeproblem.index');
Route::post('/storeproblem', [StoreProblem::class, 'store'])->name('storeproblem.store');
Route::get('/storeproblem/edit/{row}', [StoreProblem::class, 'edit'])->name('storeproblem.edit');
Route::post('/storeproblem/update/{row}', [StoreProblem::class, 'update'])->name('storeproblem.update');
Route::get('/storeproblem/toggle/{row}', [StoreProblem::class, 'toggleStatus'])->name('storeproblem.toggleStatus');
Route::get('/addstoreproblem', [StoreProblem::class, 'storedata'])->name('storedata.index');

//HomePage
Route::get('/admin', function () {
    return view('admin.index')->name('admin.index');;
});

//HomePage

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/offering', function () {
    return view('offering');
});