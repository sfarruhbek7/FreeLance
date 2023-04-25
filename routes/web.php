<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard0');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::get('/',[\App\Http\Controllers\PublicController::class,'index'])->name('Home');

Route::get('/Profile/dashboard',[\App\Http\Controllers\PrivateController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Profile/billing',[\App\Http\Controllers\PrivateController::class,'billing'])->middleware(['auth', 'verified'])->name('billing');

Route::get('/Profile/receive',[\App\Http\Controllers\PrivateController::class,'receive'])->middleware(['auth', 'verified'])->name('receive');

Route::get('/Profile/send',[\App\Http\Controllers\PrivateController::class,'send'])->middleware(['auth', 'verified'])->name('send');

Route::get('/Profile/messenger',[\App\Http\Controllers\PrivateController::class,'messenger'])->middleware(['auth', 'verified'])->name('messenger');

Route::get('/Profile/profile',[\App\Http\Controllers\PrivateController::class,'profile'])->middleware(['auth', 'verified'])->name('profile');

Route::resource('/Users',\App\Http\Controllers\UserController::class)->middleware(['auth']);

Route::resource('/RegisterStage',\App\Http\Controllers\RegisterStageController::class)->middleware(['auth']);

Route::resource('/History',\App\Http\Controllers\HistoryController::class)->middleware(['auth']);

Route::post("/orderinfos",[\App\Http\Controllers\PrivateController::class,'orderinfos']);

Route::post("/videofile",[\App\Http\Controllers\PrivateController::class,'videofile'])->middleware(['auth'])->name('videofile');
Route::post("/referencefile",[\App\Http\Controllers\PrivateController::class,'referencefile'])->middleware(['auth'])->name('referencefile');
