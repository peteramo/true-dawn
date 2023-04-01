<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Pages\PagesController;
use App\Http\Controllers\Admin\Pages\ServicesAdminController;
use App\Http\Controllers\Admin\Pages\AboutusAdminController;
use App\Http\Controllers\Admin\Pages\ContactusAdminController;
use App\Http\Controllers\Admin\Pages\HomepageAdminController;
use App\Http\Controllers\Admin\Pages\ProjectsAdminController;

Route::prefix('pages')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('pages.index');

    Route::get('/create', [PagesController::class, 'create'])->name('pages.create');
    Route::post('/store', [PagesController::class, 'store'])->name('pages.store');

    Route::get('/edit/{page}', [PagesController::class, 'edit'])->name('pages.edit');
    Route::patch('/update/{page}', [PagesController::class, 'update'])->name('pages.update');

    Route::get('/view/{page}', [PagesController::class, 'view'])->name('pages.view');

    Route::delete('/delete/{page}', [PagesController::class, 'destroy'])->name('pages.destroy');

    Route::prefix('services')->group(function () {
        Route::get('/', [ServicesAdminController::class, 'viewService'])->name('pages.services.view');
        Route::post('/updateService', [ServicesAdminController::class, 'updateService'])->name('pages.services.update');
    });

    Route::prefix('aboutus')->group(function () {
        Route::get('/', [AboutusAdminController::class, 'viewAbout'])->name('pages.aboutus.view');
        Route::post('/updateAbout', [AboutusAdminController::class, 'updateAbout'])->name('pages.aboutus.update');
    });

    Route::prefix('contactus')->group(function () {
        Route::get('/', [ContactusAdminController::class, 'returnInfo'])->name('pages.contactus.return');
        Route::post('/update/info', [ContactusAdminController::class, 'updateInfo'])->name('pages.contactus.update');
    });

    Route::prefix('homepage')->group(function () {
        Route::post('/updateHero/{id}', [HomepageAdminController::class, 'updateHero'])->name('pages.home.updateHero');
    });

    Route::prefix('projects')->group(function () {
        Route::post('/createPro', [ProjectsAdminController::class, 'createPro'])->name('pages.projects.create');
        Route::get('/editPro/{id}', [ProjectsAdminController::class, 'editPro'])->name('pages.projects.edit');
        Route::patch('/updatePro/{id}', [ProjectsAdminController::class, 'updatePro'])->name('pages.projects.update');
        Route::delete('/deletePro/{id}', [ProjectsAdminController::class, 'deletePro'])->name('pages.projects.destroy');
    });
});
