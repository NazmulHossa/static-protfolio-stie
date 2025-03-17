<?php





use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Home page route
Route::get('/', [SiteController::class, 'homePage'])->name('home');

// About page route
Route::get('/about', [SiteController::class, 'aboutPage'])->name('about');

// Services page route
Route::get('/services', [SiteController::class, 'servicesPage'])->name('services');

// Portfolio page route
Route::get('/portfolio', [SiteController::class, 'portfolioPage'])->name('portfolio');

// Contact page route
Route::get('/contact', [SiteController::class, 'contactPage'])->name('contact');
