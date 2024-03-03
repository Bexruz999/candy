<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'prefix' => \App\Services\Localization\LocalizationService::locale(),
        'middleware' => 'setLocale'
    ],
    function () {
        Route::get('/',                 [PageController::class, 'index'])->name('home');
        Route::get('/about',            [PageController::class, 'about'])->name('about');
        Route::get('/products',         [ProductController::class, 'products'])->name('products');
        Route::get('/product/{slug}',   [ProductController::class, 'productSingle'])->name('products-single');
        Route::get('/partners',         [PageController::class, 'partners'])->name('partners');
        Route::get('/vacancy',          [VacancyController::class, 'vacancy'])->name('vacancy');
        Route::get('/vacancies',        [VacancyController::class, 'vacancies'])->name('vacancies');
        Route::get('/contact',          [PageController::class, 'contact'])->name('contact');
        Route::get('/news',             [EventController::class, 'index'])->name('news');
        Route::get('/new/{slug}',       [EventController::class, 'single'])->name('news-single');
        Route::get('/lang/{lang}',      [PageController::class, 'lang'])->name('lang');
        Route::post('/form',            [PageController::class, 'form'])->name('form');
        Route::post('/vacancy',         [PageController::class, 'vacancy'])->name('vacancy');
    }
);
