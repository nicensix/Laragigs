<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

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

// All Listings
Route::get('/', [ListingController::class,'index']);

// Show create Form
Route::get('/listings/create', [ListingController::class,'create'])
->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class,'store'])
->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', 
[ListingController::class, 'edit']) ->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class,
'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class,
'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class,'manage'])
->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class,'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class,'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
