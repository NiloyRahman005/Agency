<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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

    //Banner
    Route::get('/banner',[\App\Http\Controllers\Admin\HomePageController::class,'banner'])->name('banner');
    Route::post('/bannerPost',[\App\Http\Controllers\Admin\HomePageController::class,'bannerPost'])->name('bannerPost');


    //Second Section 
    Route::get('/secondSectionCards',[\App\Http\Controllers\Admin\HomePageController::class,'secondSectionCards'])->name('secondSectionCards');
    Route::post('/secondSectionCardsInsert',[\App\Http\Controllers\Admin\HomePageController::class,'secondSectionCardsInsert'])->name('secondSectionCardsInsert');
    Route::post('/sectondSecUpdate',[\App\Http\Controllers\Admin\HomePageController::class,'sectondSecUpdate'])->name('sectondSecUpdate');
    Route::get('/sectondSecdelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'sectondSecdelete'])->name('sectondSecdelete');


    //Forth Section
    Route::get('/ourServices',[\App\Http\Controllers\Admin\HomePageController::class,'ourServices'])->name('ourServices');
    Route::post('/postContent',[\App\Http\Controllers\Admin\HomePageController::class,'postContent'])->name('postContent');
    Route::post('/postContentUpdate',[\App\Http\Controllers\Admin\HomePageController::class,'postContentUpdate'])->name('postContentUpdate');
    Route::get('/postContentdelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'postContentdelete'])->name('postContentdelete');
    Route::get('/serviceContentAdd/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'serviceContentAdd'])->name('serviceContentAdd');
    Route::post('/serviceBasedFeaturePost',[\App\Http\Controllers\Admin\HomePageController::class,'serviceBasedFeaturePost'])->name('serviceBasedFeaturePost');
     Route::post('/featuresEdit',[\App\Http\Controllers\Admin\HomePageController::class,'featuresEdit'])->name('featuresEdit');
     Route::get('/featuresDelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'featuresDelete'])->name('featuresDelete');

    Route::get('/taskStory',[\App\Http\Controllers\Admin\HomePageController::class,'taskStory'])->name('taskStory');
    Route::post('/taskStoryPost',[\App\Http\Controllers\Admin\HomePageController::class,'taskStoryPost'])->name('taskStoryPost');


     

     
    
    

   
   
    //Brand
    Route::get('/brands',[\App\Http\Controllers\Admin\HomePageController::class,'brands'])->name('brands');
    Route::post('/brandPost',[\App\Http\Controllers\Admin\HomePageController::class,'brandPost'])->name('brandPost');
    Route::post('/brandEdit',[\App\Http\Controllers\Admin\HomePageController::class,'brandEdit'])->name('brandEdit');
    Route::get('/brandDelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'brandDelete'])->name('brandDelete');

    //ourService


    
    //Blog
    Route::get('/blog',[\App\Http\Controllers\Admin\HomePageController::class,'blog'])->name('blog');
    Route::post('/postBlog',[\App\Http\Controllers\Admin\HomePageController::class,'postBlog'])->name('postBlog');
    Route::get('/blogList',[\App\Http\Controllers\Admin\HomePageController::class,'blogList'])->name('blogList');


    //
    // Route::get('/blogEdit/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'blogEdit'])->name('blogEdit');
    Route::get('/blogsEdit/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'blogsEdit'])->name('blogsEdit');
    
    Route::post('/blogEditPost',[\App\Http\Controllers\Admin\HomePageController::class,'blogEditPost'])->name('blogEditPost');

    Route::get('/contactUs',[\App\Http\Controllers\Admin\HomePageController::class,'contactUsList'])->name('contactUsList');
    Route::get('/contactListDelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'contactListDelete'])->name('contactListDelete');

    Route::get('/socialLink',[\App\Http\Controllers\Admin\HomePageController::class,'socialLink'])->name('socialLink');
    Route::post('/socialLinkPost',[\App\Http\Controllers\Admin\HomePageController::class,'socialLinkPost'])->name('socialLinkPost');
    
    Route::get('/SocialLinkDelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'SocialLinkDelete'])->name('SocialLinkDelete');

    Route::get('/globalOperations',[\App\Http\Controllers\Admin\HomePageController::class,'globalOperations'])->name('globalOperations');

    Route::post('/globalOperationStore',[\App\Http\Controllers\Admin\HomePageController::class,'globalOperationStore'])->name('globalOperationStore');

    Route::get('/globalOpearationDelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'globalOperationDelete'])->name('globalOpearationDelete');

    Route::get('/teamMember',[\App\Http\Controllers\Admin\HomePageController::class,'teamMember'])->name('teamMember');

    Route::post('/teamMemberPost',[\App\Http\Controllers\Admin\HomePageController::class,'teamMemberPost'])->name('teamMemberPost');
    Route::get('/teamMemberDelete/{id}',[\App\Http\Controllers\Admin\HomePageController::class,'teamMemberDelete'])->name('teamMemberDelete');


    
  


  


   


    


    






    



  });


require __DIR__.'/auth.php';
