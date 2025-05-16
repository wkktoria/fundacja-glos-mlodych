<?php

use App\Http\Controllers\AdminController;
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
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index']);

Route::get('/o-fundacji', [FundController::class, 'about'])->name('fund.about');
Route::get('/statut-fundacji', [FundController::class, 'charter'])->name('fund.charter');
Route::get('/zarzad-fundacji', [FundController::class, 'executive'])->name('fund.executive');
Route::get('/cele-i-zasady-dzialania', [FundController::class, 'objectives'])->name('fund.objectives');
Route::get('/dzialalnosc-gospodarcza', [FundController::class, 'business'])->name('fund.business');
Route::get('/sprawozdania', [ReportController::class, 'index'])->name('report.index');

Route::get('/posts/{title}', [PostController::class, 'show'])->name('post.show');

Route::get('/projekty', [ProjectController::class, 'index'])->name('project.index');

Route::get('/aktualnosci', [FeedController::class, 'index'])->name('feed.index');

Route::get('/praktyki', [InternshipController::class, 'index'])->name('internship.index');
Route::get('/praktyki-{name}', [InternshipController::class, 'showByName'])->name('internship.details');

Route::get('/galeria', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/kontakt', [ContactController::class, 'index'])->name('contact.index');
Route::post('/kontakt', [ContactController::class, 'store'])->name('contact.store');

Route::get('/opinie', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/opinie', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/posts/all', [PostController::class, 'all'])->name('admin.posts.all');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::delete('/admin/posts/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
    Route::get('/admin/posts/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/admin/posts/{id}', [PostController::class, 'update'])->name('admin.posts.update');

    Route::get('/admin/internships/all', [InternshipController::class, 'all'])->name('admin.internships.all');
    Route::get('/admin/internships/create', [InternshipController::class, 'create'])->name('admin.internships.create');
    Route::post('/admin/internships', [InternshipController::class, 'store'])->name('admin.internships.store');
    Route::delete('/admin/internships/{id}', [InternshipController::class, 'destroy'])->name('admin.internships.destroy');
    Route::get('/admin/internship/{id}/edit', [InternshipController::class, 'edit'])->name('admin.internships.edit');
    Route::put('/admin/internship/{id}', [InternshipController::class, 'update'])->name('admin.internships.update');

    Route::get('/admin/wiadomosci', [ContactController::class, 'all'])->name('admin.messages.all');
});
