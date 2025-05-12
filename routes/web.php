<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/o-fundacji', [FundController::class, 'about'])->name('fund.about');
Route::get('/statut-fundacji', [FundController::class, 'charter'])->name('fund.charter');
Route::get('/zarzad-fundacji', [FundController::class, 'executive'])->name('fund.executive');
Route::get('/cele-i-zasady-dzialania', [FundController::class, 'objectives'])->name('fund.objectives');
Route::get('/dzialalnosc-gospodarcza', [FundController::class, 'business'])->name('fund.business');
Route::get('/sprawozdania', [ReportController::class, 'index'])->name('report.index');

Route::get('/posts/{title}', [PostController::class, 'show'])->name('post.show');

Route::get('/projekty', [ProjectController::class, 'index'])->name('project.index');
// Route::get('/posts/{title}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/aktualnosci', [FeedController::class, 'index'])->name('feed.index');
// Route::get('/posts/{title}', [FeedController::class, 'show'])->name('feed.show');

Route::get('/praktyki', [InternshipController::class, 'index'])->name('internship.index');
Route::get('/praktyki-{name}', [InternshipController::class, 'showByName'])->name('internship.details');

Route::get('/galeria', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/kontakt', [ContactController::class, 'index'])->name('contact.index');

Route::get('/opinie', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/opinie', [FeedbackController::class, 'store'])->name('feedback.store');
