<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\CertificateController;
/*
|--------------------------------------------------------------------------
| PORTFOLIO
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index'])
    ->name('portfolio.index');


/*
|--------------------------------------------------------------------------
| ADMIN AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');


    /*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('admin.dashboard');

// Admin Profile
Route::get('/admin/profile', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('admin.profile');

Route::get('/admin/profile/edit', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.profile.edit');

Route::put('/admin/profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('admin.profile.update');

    Route::get('/admin/home', [HomeController::class, 'index'])
    ->name('admin.home');

Route::get('/admin/home/edit', [HomeController::class, 'edit'])
    ->name('admin.home.edit');

Route::put('/admin/home', [HomeController::class, 'update'])
    ->name('admin.home.update');

    // ABOUT
Route::get('/admin/about', [AboutController::class, 'index'])
    ->name('admin.about');

Route::get('/admin/about/edit', [AboutController::class, 'edit'])
    ->name('admin.about.edit');

Route::put('/admin/about', [AboutController::class, 'update'])
    ->name('admin.about.update');

    Route::get('/admin/skills', [SkillController::class, 'index'])
    ->name('admin.skills');

Route::get('/admin/skills/create', [SkillController::class, 'create'])
    ->name('admin.skills.create');

Route::post('/admin/skills', [SkillController::class, 'store'])
    ->name('admin.skills.store');

Route::get('/admin/skills/{skill}/edit', [SkillController::class, 'edit'])
    ->name('admin.skills.edit');

Route::put('/admin/skills/{skill}', [SkillController::class, 'update'])
    ->name('admin.skills.update');

Route::delete('/admin/skills/{skill}', [SkillController::class, 'destroy'])
    ->name('admin.skills.destroy');

    Route::get('/admin/projects', [ProjectController::class, 'index'])
    ->name('admin.projects');

Route::get('/admin/projects/create', [ProjectController::class, 'create'])
    ->name('admin.projects.create');

Route::post('/admin/projects', [ProjectController::class, 'store'])
    ->name('admin.projects.store');

Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])
    ->name('admin.projects.edit');

Route::put('/admin/projects/{project}', [ProjectController::class, 'update'])
    ->name('admin.projects.update');

Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])
    ->name('admin.projects.destroy');

    Route::get('/admin/experience', [ExperienceController::class, 'index'])
    ->name('admin.experience');

Route::get('/admin/experience/create', [ExperienceController::class, 'create'])
    ->name('admin.experience.create');

Route::post('/admin/experience', [ExperienceController::class, 'store'])
    ->name('admin.experience.store');

Route::get('/admin/experience/{experience}/edit', [ExperienceController::class, 'edit'])
    ->name('admin.experience.edit');

Route::put('/admin/experience/{experience}', [ExperienceController::class, 'update'])
    ->name('admin.experience.update');

Route::delete('/admin/experience/{experience}', [ExperienceController::class, 'destroy'])
    ->name('admin.experience.destroy');

    Route::get('/admin/education', [EducationController::class, 'index'])
    ->name('admin.education');

Route::get('/admin/education/create', [EducationController::class, 'create'])
    ->name('admin.education.create');

Route::post('/admin/education', [EducationController::class, 'store'])
    ->name('admin.education.store');

Route::get('/admin/education/{education}/edit', [EducationController::class, 'edit'])
    ->name('admin.education.edit');

Route::put('/admin/education/{education}', [EducationController::class, 'update'])
    ->name('admin.education.update');

Route::delete('/admin/education/{education}', [EducationController::class, 'destroy'])
    ->name('admin.education.destroy');

    Route::get('/admin/certificates', [CertificateController::class, 'index'])
    ->name('admin.certificates');

Route::get('/admin/certificates/create', [CertificateController::class, 'create'])
    ->name('admin.certificates.create');

Route::post('/admin/certificates', [CertificateController::class, 'store'])
    ->name('admin.certificates.store');

Route::get('/admin/certificates/{certificate}/edit', [CertificateController::class, 'edit'])
    ->name('admin.certificates.edit');

Route::put('/admin/certificates/{certificate}', [CertificateController::class, 'update'])
    ->name('admin.certificates.update');

Route::delete('/admin/certificates/{certificate}', [CertificateController::class, 'destroy'])
    ->name('admin.certificates.destroy');