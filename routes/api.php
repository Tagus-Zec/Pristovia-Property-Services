<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| API Forms Protection
|--------------------------------------------------------------------------
*/

Route::middleware('throttle:3,1')->group(function () {

    // Quote Form
    Route::post('/api/quote', [QuoteController::class, 'store'])
        ->name('quote.store');

});

Route::middleware('throttle:2,1')->group(function () {

    // Review Form
    Route::post('/api/review', [ReviewController::class, 'store'])
        ->name('review.store');

});