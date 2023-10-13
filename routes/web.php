<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\CategoryProjectController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/form_review', [HomeController::class, 'form_review'])->name('form_review');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/detail_project/{id}', [ProjectsController::class, 'detail_project'])->name('detail_project');
Route::get('/experiences', [ExperiencesController::class, 'index'])->name('experiences');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/packet', [packetController::class, 'index'])->name('packet');

Route::middleware(['auth', 'verified'])->group(function () {
    //Dashboard
    Route::get('/dashboard', [DashboardController::Class, 'index'])->name('dashboard');

    //Projects
    Route::get('/project_admin', [ProjectsController::class, 'project_admin_index'])->name('project_admin');
    Route::get('/project_admin_add', [ProjectsController::class, 'project_admin_add'])->name('project_admin_add');
    Route::post('/project_admin_add', [ProjectsController::class, 'project_admin_store'])->name('project-admin-store');
    Route::get('/project_admin_edit/{id}', [ProjectsController::class, 'project_admin_edit'])->name('project_admin_edit');
    Route::post('/project_admin_edit/{id}', [ProjectsController::class, 'project_admin_update'])->name('project-admin-update');
    Route::get('/project_admin_delete/{id}', [ProjectsController::class, 'project_admin_delete'])->name('project_admin_delete');

    //CategoryProject
    Route::get('/category_project_admin', [CategoryProjectController::class, 'index'])->name('category_project_admin');
    Route::get('/category_project_admin_add', [CategoryProjectController::class, 'add'])->name('category_project_admin_add');
    Route::post('/category_project_admin_store', [CategoryProjectController::class, 'store'])->name('category-project-store');
    Route::get('/category_project_edit/{id}', [CategoryProjectController::class, 'edit'])->name('category_project_edit');
    Route::post('/category_project_edit/{id}', [CategoryProjectController::class, 'update'])->name('category-project-update');
    Route::get('/category_admin_delete/{id}', [CategoryProjectController::class, 'delete'])->name('category-project-delete');

    //Experiences
    Route::get('/experience_admin', [ExperiencesController::class, 'experience_admin_index'])->name('experience_admin');
    Route::get('/experience_admin_add', [ExperiencesController::class, 'experience_admin_add'])->name('experience_admin_add');
    Route::post('/experience_admin_add', [ExperiencesController::class, 'experience_admin_store'])->name('experience-admin-store');
    Route::get('/experience_admin_edit/{id}', [ExperiencesController::class, 'experience_admin_edit'])->name('experience_admin_edit');
    Route::post('/experience_admin_edit/{id}', [ExperiencesController::class, 'experience_admin_update'])->name('experience-admin-update');
    Route::get('/experience_admin_delete/{id}', [ExperiencesController::class, 'experience_admin_delete'])->name('experience_admin_delete');
    Route::get('/download_cv', [ExperiencesController::class, 'download_cv'])->name('download_cv');

    //Review
    Route::get('/review_admin', [ReviewsController::class, 'index'])->name('review_admin');
    Route::get('/review_edit/{id}', [ReviewsController::class, 'edit'])->name('review_edit');
    Route::post('/review_update/{id}', [ReviewsController::class, 'update'])->name('review_update');
    Route::get('/review_delete/{id}', [ReviewsController::class, 'destroy'])->name('review_delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
