<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PricePackageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/join', function () { return view('join'); });

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    // Profile Route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Event Route
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');;
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');;
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');;
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');;

    Route::get('/events/{event}/register/{price_package}', [EventController::class, 'register'])->name('events.register');
    Route::get('/events/{event}/unregister/{price_package}', [EventController::class, 'unregister'])->name('events.unregister');

    // Transaction Route
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
    Route::get('/transactions/{transaction}/confirm', [TransactionController::class, 'confirm'])->name('transactions.confirm');

    // Price Packages Route
    Route::get('/events/{event}/pricepackages/create', [PricePackageController::class, 'create'])->name('pricepackage.create');
    Route::post('/events/{event}/pricepackages', [PricePackageController::class, 'store'])->name('pricepackage.store');
    Route::delete('/events/{event}/pricepackages/{price_package}', [PricePackageController::class, 'destroy'])->name('pricepackages.destroy');;


    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');;
    Route::get('/users', [UserController::class, 'index'])->name('users.index');;
});

require __DIR__.'/auth.php';
