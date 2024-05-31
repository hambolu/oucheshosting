<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainsController;
use App\Http\Controllers\AdminController;

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

Route::get('/',function(){
    return view('auth.login');
});
// Route::get('/about', [FrontendController::class, 'about_page']);
// Route::get('/services', [FrontendController::class, 'service_page']);
// Route::get('/blog', [FrontendController::class, 'blog_page']);
Route::get('search', [DomainsController::class, 'search'])->name('search');
 Route::get('/order', [DomainsController::class, 'index'])->name('index');
Route::get('/clients',[AdminController::class, 'allClients'])->name('allClients');

// Route::get('/contact', [FrontendController::class, 'contact_page']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
