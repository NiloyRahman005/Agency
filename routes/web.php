<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/',[FontendController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.layouts.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ADMIN ROUTES
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    //Logo
    Route::get('/logo', [\App\Http\Controllers\Admin\HomePageController::class, 'logo'])->name('logo');
    Route::post('/logoStore', [\App\Http\Controllers\Admin\HomePageController::class, 'logoStore'])->name('logoStore');
    //Top-Section-Title
    Route::get('/sectionTitle', [\App\Http\Controllers\Admin\HomePageController::class,'sectionTitle'])->name('sectionTitle');
    Route::post('/secSubTitlePost', [\App\Http\Controllers\Admin\HomePageController::class,'secSubTitlePost'])->name('secSubTitlePost');
    Route::post('/secTitlePost', [\App\Http\Controllers\Admin\HomePageController::class,'secTitlePost'])->name('secTitlePost');
    //Video
    Route::get('/Video',[\App\Http\Controllers\Admin\HomePageController::class,'Video'])->name('Video');
    Route::post('/videoStore',[\App\Http\Controllers\Admin\HomePageController::class,'videoStore'])->name('videoStore');
    //Content
    Route::get('/content',[\App\Http\Controllers\Admin\HomePageController::class,'content'])->name('content');
    Route::post('/contentPost',[\App\Http\Controllers\Admin\HomePageController::class,'contentPost'])->name('contentPost');






    



  });


require __DIR__.'/auth.php';
