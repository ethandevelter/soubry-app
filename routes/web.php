<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*------ MAIN VIEWS------*/
Route::get('/', function () {return view('welcome');});
Route::get('/opruiming', function () {return view('opruiming');});
Route::get('/opruiming-inboedel', function () {return view('inboedel');});
Route::get('/opruiming-na-overlijden', function () {return view('overlijden');});
Route::get('/opruiming-woning', function () {return view('woning');});
Route::get('/opruiming-tuin', function () {return view('tuin');});
Route::get('/faq', function () {return view('faq');});
Route::get('/verhuizingen', function () {return view('verhuizingen');});
Route::get('/overige-diensten', function () {return view('overige');});
Route::get('/contact', function () {return view('contact');});
Route::get('/data', function () {return view('data');});
Route::get('/privacy-policy', function () {return view('privacy-policy');});
Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
