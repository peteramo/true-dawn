<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Main\DashboardController;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Admin\Pages\PagesController;
use App\Http\Controllers\Admin\Menu\MenuController;
use App\Http\Controllers\Admin\Overall\OverallController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Account\AccountController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Footer\FooterController;

Route::get('/logout',[LoginController::class,'logOut'])->middleware('auth')->name('auth.logout');

Route::middleware('guest')->group(function (){
    Route::get('/login',[LoginController::class,'index'])->name('auth.login');
    Route::post('/login',[LoginController::class,'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/',[DashboardController::class,'index'])->name('main.dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');

        Route::get('/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/store', [UsersController::class, 'store'])->name('users.store');

        Route::get('/edit/{user}', [UsersController::class, 'edit'])->name('users.edit');
        Route::patch('/update/{user}', [UsersController::class, 'update'])->name('users.update');

        Route::delete('/delete/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
    });

    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'viewMenus'])->name('menus.index');
        Route::post('/createMen/item', [MenuController::class, 'createMenu'])->name('menus.create');
        Route::get('/editMen/item/{id}', [MenuController::class, 'editMenuItem'])->name('menus.edit');
        Route::patch('/updateMen/item/{id}', [MenuController::class, 'updateMenuItem'])->name('menus.update');
        Route::delete('/deleteMen/item/{id}', [MenuController::class, 'deleteMenuItem'])->name('menus.destroy');
    });

    Route::prefix('overall')->group(function () {
        Route::get('/', [OverallController::class, 'returnInfo'])->name('overall.info');
        Route::post('/info/update', [OverallController::class, 'updateInfo'])->name('overall.info.update');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingController::class, 'returnInfo'])->name('settings.info');
        Route::post('/info/update', [SettingController::class, 'updateInfo'])->name('settings.info.update');
    });

    Route::prefix('accounts')->group(function () {
        Route::get('/', [AccountController::class, 'returnInfo'])->name('account.info');
        Route::post('/info/update', [AccountController::class, 'updateInfo'])->name('account.info.update');
        Route::post('/change/pass/update', [AccountController::class, 'changePass'])->name('account.change.pass');
    });

    Route::prefix('footer')->group(function () {
        Route::get('/', [FooterController::class, 'returnInfo'])->name('footer.info');
        Route::post('/info/update', [FooterController::class, 'updateInfo'])->name('footer.info.update');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'returnInfo'])->name('profile.info');
    });

    Route::get('/mark-as-read/{id}',[AdminController::class,'markAsRead'])->name('markAsRead');
    Route::post('/upload/new/image/add/upload-image',[AdminController::class,'uploadImage']);
    Route::post('/update/new/meta/data/update-data/updateMetaData/{id}', [PagesController::class, 'updateMetaData'])->name('pages.updateMetaData');
});


