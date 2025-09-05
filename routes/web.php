<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/cc', function() {
    // Running Artisan commands to clear and optimize cache
 
    Artisan::call('route:cache');
  
    
    // Return a response to confirm that cache has been cleared and optimized
    return response()->json([
        'status' => 'success',
        'message' => 'Cache cleared and optimized successfully!',
    ]);
});
Route::get('/',[FontendController::class,'index'])->name('index');

Route::get('/ourServiceDetails/{name}',[FontendController::class,'ourServiceDetails'])->name('ourServiceDetails');
Route::get('/Ta-ask-Story',[FontendController::class,'Ta_ask_Story'])->name('Ta-ask-Story');
Route::get('/blog',[FontendController::class,'blog'])->name('blog');
Route::get('/blog/details/{slug}',[FontendController::class,'blogDetails'])->name('blogDetails');
Route::get('/contact-us',[FontendController::class,'contactUs'])->name('contactUs');
Route::post('/contactUs',[FontendController::class,'contactUsPost'])->name('contactUsPost');









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
    Route::get('/logo', [\App\Http\Controllers\Admin\HomepageController::class, 'logo'])->name('logo');
    Route::post('/logoStore', [\App\Http\Controllers\Admin\HomepageController::class, 'logoStore'])->name('logoStore');
    //Top-Section-Title
    Route::get('/sectionTitle', [\App\Http\Controllers\Admin\HomepageController::class,'sectionTitle'])->name('sectionTitle');
    Route::post('/secSubTitlePost', [\App\Http\Controllers\Admin\HomepageController::class,'secSubTitlePost'])->name('secSubTitlePost');
    Route::post('/secTitlePost', [\App\Http\Controllers\Admin\HomepageController::class,'secTitlePost'])->name('secTitlePost');
    //Video
    Route::get('/Video',[\App\Http\Controllers\Admin\HomepageController::class,'Video'])->name('Video');
    Route::post('/videoStore',[\App\Http\Controllers\Admin\HomepageController::class,'videoStore'])->name('videoStore');
    //Content
    Route::get('/content',[\App\Http\Controllers\Admin\HomepageController::class,'content'])->name('content');
    Route::post('/contentPost',[\App\Http\Controllers\Admin\HomepageController::class,'contentPost'])->name('contentPost');

    //Banner
    Route::get('/banner',[\App\Http\Controllers\Admin\HomepageController::class,'banner'])->name('banner');
    Route::post('/bannerPost',[\App\Http\Controllers\Admin\HomepageController::class,'bannerPost'])->name('bannerPost');


    //Second Section 
    Route::get('/secondSectionCards',[\App\Http\Controllers\Admin\HomepageController::class,'secondSectionCards'])->name('secondSectionCards');
    Route::post('/secondSectionCardsInsert',[\App\Http\Controllers\Admin\HomepageController::class,'secondSectionCardsInsert'])->name('secondSectionCardsInsert');
    Route::post('/sectondSecUpdate',[\App\Http\Controllers\Admin\HomepageController::class,'sectondSecUpdate'])->name('sectondSecUpdate');
    Route::get('/sectondSecdelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'sectondSecdelete'])->name('sectondSecdelete');


    //Forth Section
    Route::get('/ourServices',[\App\Http\Controllers\Admin\HomepageController::class,'ourServices'])->name('ourServices');
    Route::post('/postContent',[\App\Http\Controllers\Admin\HomepageController::class,'postContent'])->name('postContent');
    Route::post('/postContentUpdate',[\App\Http\Controllers\Admin\HomepageController::class,'postContentUpdate'])->name('postContentUpdate');
    Route::get('/postContentdelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'postContentdelete'])->name('postContentdelete');
    Route::get('/serviceContentAdd/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'serviceContentAdd'])->name('serviceContentAdd');
    Route::post('/serviceBasedFeaturePost',[\App\Http\Controllers\Admin\HomepageController::class,'serviceBasedFeaturePost'])->name('serviceBasedFeaturePost');
     Route::post('/featuresEdit',[\App\Http\Controllers\Admin\HomepageController::class,'featuresEdit'])->name('featuresEdit');
     Route::get('/featuresDelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'featuresDelete'])->name('featuresDelete');

    Route::get('/taskStory',[\App\Http\Controllers\Admin\HomepageController::class,'taskStory'])->name('taskStory');
    Route::post('/taskStoryPost',[\App\Http\Controllers\Admin\HomepageController::class,'taskStoryPost'])->name('taskStoryPost');

    //Brand
    Route::get('/brands',[\App\Http\Controllers\Admin\HomepageController::class,'brands'])->name('brands');
    Route::post('/brandPost',[\App\Http\Controllers\Admin\HomepageController::class,'brandPost'])->name('brandPost');
    Route::post('/brandEdit',[\App\Http\Controllers\Admin\HomepageController::class,'brandEdit'])->name('brandEdit');
    Route::get('/brandDelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'brandDelete'])->name('brandDelete');

    //ourService


    
    //Blog
    Route::get('/blog',[\App\Http\Controllers\Admin\HomepageController::class,'blog'])->name('blog');
    Route::post('/postBlog',[\App\Http\Controllers\Admin\HomepageController::class,'postBlog'])->name('postBlog');
    Route::get('/blogList',[\App\Http\Controllers\Admin\HomepageController::class,'blogList'])->name('blogList');


    //
    // Route::get('/blogEdit/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'blogEdit'])->name('blogEdit');
    Route::get('/blogsEdit/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'blogsEdit'])->name('blogsEdit');
    
    Route::post('/blogEditPost',[\App\Http\Controllers\Admin\HomepageController::class,'blogEditPost'])->name('blogEditPost');

    Route::get('/contactUs',[\App\Http\Controllers\Admin\HomepageController::class,'contactUsList'])->name('contactUsList');
    Route::get('/contactListDelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'contactListDelete'])->name('contactListDelete');

    Route::get('/socialLink',[\App\Http\Controllers\Admin\HomepageController::class,'socialLink'])->name('socialLink');
    Route::post('/socialLinkPost',[\App\Http\Controllers\Admin\HomepageController::class,'socialLinkPost'])->name('socialLinkPost');
    
    Route::get('/SocialLinkDelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'SocialLinkDelete'])->name('SocialLinkDelete');

    Route::get('/globalOperations',[\App\Http\Controllers\Admin\HomepageController::class,'globalOperations'])->name('globalOperations');

    Route::post('/globalOperationStore',[\App\Http\Controllers\Admin\HomepageController::class,'globalOperationStore'])->name('globalOperationStore');

    Route::get('/globalOpearationDelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'globalOperationDelete'])->name('globalOpearationDelete');

    Route::get('/teamMember',[\App\Http\Controllers\Admin\HomepageController::class,'teamMember'])->name('teamMember');

    Route::post('/teamMemberPost',[\App\Http\Controllers\Admin\HomepageController::class,'teamMemberPost'])->name('teamMemberPost');
    Route::get('/teamMemberDelete/{id}',[\App\Http\Controllers\Admin\HomepageController::class,'teamMemberDelete'])->name('teamMemberDelete');


    
  


  


   


    


    






    



  });


require __DIR__.'/auth.php';
