<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ToolsController;
use Illuminate\Support\Facades\DB;

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

$stas = DB::table('pages')->where('pag_static',1)->get();

Route::get('/',[FrontendController::class,'index'])->name('home');

foreach($stas as $sta){
    Route::get('/'.$sta->pag_uri,[FrontendController::class,'staticPages'])->name($sta->pag_uri);
}

Route::get('/projects',[FrontendController::class,'projects'])->name('projects');

Route::get('/contactus',[FrontendController::class,'contactus'])->name('contactus');

Route::get('/seeCustomPicture', [ToolsController::class, 'seeCustomPicture'])->name('go.seeCustomPicture');

Route::get('/seeHeroBackground', [ToolsController::class, 'seeHeroBackground'])->name('go.seeHeroBackground');
