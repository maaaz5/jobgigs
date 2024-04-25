<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;


//All Listings
Route::get('/', [ListingController::class, 'index']);



//show create form
Route::get('/listings/create', [ListingController::class, 'create']);



// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);


// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);




// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);