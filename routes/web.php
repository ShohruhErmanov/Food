<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\TestimonialAddController;
use App\Http\Controllers\Admin\RestoranVideoController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/menu', [MainController::class, 'menu'])->name('menu');
Route::get('/booking', [MainController::class, 'booking'])->name('booking');
Route::get('/our-team', [MainController::class, 'team'])->name('team');
Route::get('/testimonial', [MainController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::resource('/testimonial_add', TestimonialAddController::class);


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

    Route::resource('about', AboutController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('team', TeamController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('videos', RestoranVideoController::class);

});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
