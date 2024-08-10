<?php

use App\Http\Controllers\Admin\PortfolioHomeController;
use App\Http\Controllers\Admin\PortfolioProjectsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
Route::get('/dashboard', [PortfolioHomeController::class, 'index'])->name('dashboard.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/projects', [PortfolioProjectsController::class, 'index'])->name('projects.index');

});



//guest
Route::get('/', [portfolioController::class, 'home'])->name('portfolio.home');
Route::get('/about', [portfolioController::class, 'about'])->name('portfolio.about');
Route::get('/projects', [portfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/contact', [portfolioController::class, 'contact'])->name('portfolio.contact');







require __DIR__.'/auth.php';

