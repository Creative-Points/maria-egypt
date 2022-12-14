<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/tour', function(){
//     return view('tour');
// });

Route::controller(FrontController::class)->name('front.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/tours', 'tours')->name('tours');
    Route::post('/tours-orders/{place:slug}', 'order')->name('order');
    Route::get('/tours/{place:slug}', 'tour')->name('tour');
    Route::get('/about', 'about')->name('about');
    Route::get('/Privacy-Policy', 'privacy')->name('privacy');
    Route::get('/contact-us', 'contact')->name('contact');
});

Route::middleware(['auth', 'role:user'])->controller(UserController::class)->name('user.')->group(function(){
    Route::get('/home', 'profile')->name('home');
    Route::post('/tours-order/{place:slug}', 'order')->name('order');
});

Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->name('admin.')->group(function(){
    Route::get('/', function(){
        return view('admin.home');
    })->name('home');
    Route::controller(CityController::class)->name('city.')->prefix('cities')->group(function(){
        Route::get('/', 'index')->name('manage');
        Route::get('/add-new', 'create')->name('create');
        Route::post('/add-new', 'store')->name('store');
        Route::get('/{city:id}/edit', 'edit')->name('edit');
        Route::put('/{city:id}/edit', 'update')->name('update');
        Route::get('/{city:id}/view', 'show')->name('view');
        Route::get('/{city:id}/active', 'active')->name('active');
        Route::get('/{city:id}/unactive', 'unactive')->name('unactive');
        Route::delete('/{city:id}/delete', 'destroy')->name('delete');
    });

    Route::controller(PlaceController::class)->name('place.')->prefix('places')->group(function(){
        Route::get('/', 'index')->name('manage');
        Route::get('/add-new', 'create')->name('create');
        Route::post('/add-new', 'store')->name('store');
        Route::get('/{place:id}/edit', 'edit')->name('edit');
        Route::put('/{place:id}/edit', 'update')->name('update');
        Route::get('/{place:id}/view', 'show')->name('view');
        Route::get('/{place:id}/active', 'active')->name('active');
        Route::get('/{place:id}/unactive', 'unactive')->name('unactive');
        Route::delete('/{place:id}/delete', 'destroy')->name('delete');

        // itinerary
        Route::get('/{place:slug}/add-itinerary', 'addItin')->name('addItin');
        Route::post('/{place:slug}/add-itinerary', 'storeItin')->name('storeItin');
        Route::get('/{place:slug}/itinerary/{itinerary}/edit', 'editItin')->name('editItin');
        Route::put('/{place:slug}/itinerary/{itin}/update', 'updateItin')->name('updateItin');
        Route::delete('itin//{itin}/delete', 'deleteItin')->name('deleteItin');
    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
