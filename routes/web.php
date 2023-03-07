<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\UpcomingEventsController;

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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('services',[HomeController::class,'services'])->name('services');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('terms',[HomeController::class,'terms'])->name('terms');
Route::get('privacy',[HomeController::class,'privacy'])->name('privacy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('slider',SliderController::class);
    Route::resource('team',TeamMemberController::class);
    Route::resource('ourservices',ServicesController::class);
    Route::resource('upcomingevents',UpcomingEventsController::class);
    Route::resource('client',ClientController::class);
    Route::get('client/list', [StudentController::class, 'getClients'])->name('clients.list');
});

require __DIR__.'/auth.php';
