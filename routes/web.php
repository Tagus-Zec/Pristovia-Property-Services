<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [GalleryController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/get-quote', function () {
    return view('pages.quote');
})->name('quote.page');

/*
|--------------------------------------------------------------------------
| admin Pages
|--------------------------------------------------------------------------
*/

Route::get('/admin/quotes', [QuoteController::class, 'index'])
    ->name('admin.quotes.index');
/*
|--------------------------------------------------------------------------
| Services Pages
|--------------------------------------------------------------------------
*/

Route::prefix('services')->group(function () {

    Route::get('/post-construction-cleaning', [ServiceController::class, 'postConstruction'])
        ->name('service.post-construction');

    Route::get('/commercial-cleaning', [ServiceController::class, 'commercial'])
        ->name('service.commercial');

    Route::get('/pressure-washing', [ServiceController::class, 'pressureWashing'])
        ->name('service.pressure-washing');

    Route::get('/property-maintenance', [ServiceController::class, 'propertyMaintenance'])
        ->name('service.property-maintenance');

    Route::get('/window-cleaning', [ServiceController::class, 'windowCleaning'])
        ->name('service.window-cleaning');

    Route::get('/residential-cleaning', [ServiceController::class, 'residentialCleaning'])
        ->name('service.residential');
});

/*
|--------------------------------------------------------------------------
| API & Forms
|--------------------------------------------------------------------------
*/

Route::middleware('throttle:3,1')->group(function () {

    Route::post('/api/quote', [QuoteController::class, 'store'])
        ->name('quote.store');

});

Route::middleware('throttle:2,1')->group(function () {

    Route::post('/api/review', [GalleryController::class, 'storeReview'])
        ->name('review.store');

});

/*
|--------------------------------------------------------------------------
| Language Switcher
|--------------------------------------------------------------------------
*/

Route::get('lang/{locale}', function ($locale) {

    $locale = in_array($locale, ['en', 'fr'])
        ? $locale
        : config('app.locale');

    $referer = request()->headers->get('referer', route('home'));

    $parts = parse_url($referer);

    parse_str($parts['query'] ?? '', $query);

    $query['lang'] = $locale;

    $queryString = http_build_query($query);

    $redirectUrl =
        (isset($parts['scheme']) ? $parts['scheme'] . '://' : '') .
        ($parts['host'] ?? request()->getHost()) .
        (isset($parts['port']) ? ':' . $parts['port'] : '') .
        ($parts['path'] ?? '/') .
        ($queryString ? '?' . $queryString : '') .
        (isset($parts['fragment']) ? '#' . $parts['fragment'] : '');

    return redirect($redirectUrl);

})->name('lang.switch');