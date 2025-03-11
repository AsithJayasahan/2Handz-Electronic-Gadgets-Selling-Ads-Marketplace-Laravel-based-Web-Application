<?php

use App\Models\Add;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    $ads = Add::orderBy('created_at', 'desc')->take(5)->get();
    return view('welcome',compact('ads'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard', [AddController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard', [Admincontroller::class, 'index'])->name('dashboard');

});



// Advertisement routes
Route::get('Post-Add', [AddController::class, 'PostAdd'])->name('Post-Add');
Route::post('post-insert', [AddController::class, 'insert'])->name('post-insert');
Route::get('all-ads', [AddController::class, 'AllAds'])->name('all-ads');
Route::get('view/{id}', [AddController::class, 'Adview']);
Route::get('Addview/{id}', [AddController::class, 'view'])->name('Addview/{id}');

// Search and category routes
Route::get('/search', [AddController::class, 'search'])->name('search');
Route::get('/smartphones', [AddController::class, 'FIndPhones'])->name('smartphones');
Route::get('/computers', [AddController::class, 'FIndComputers'])->name('computers');
Route::get('/digitalcameras', [AddController::class, 'FIndCameras'])->name('digitalCameras');
Route::get('/smartwatches', [AddController::class, 'FIndWatches'])->name('smartwatches');
Route::get('/tablets', [AddController::class, 'FIndTablets'])->name('tablets');
Route::get('/ComputerAccessories', [AddController::class, 'FIndComputerAccessories'])->name('ComputerAccessories');
Route::get('/MobileAccessories', [AddController::class, 'FIndMobileAccessories'])->name('MobileAccessories');

// Additional routes
Route::get('details', [Controller::class, 'details'])->name('details');

Route::get('/showUsers',[Admincontroller::class,'showUsers']);
Route::get('/showAds',[Admincontroller::class,'showAds']);
Route::get('/postAds',[Admincontroller::class,'postAds']);

Route::delete('/ads/{id}', [AddController::class, 'destroy'])->name('ads.destroy');

Route::get('/ads/{id}/edit', [AddController::class, 'edit'])->name('ads.edit');
Route::post('/ads/{id}/update', [AddController::class, 'update'])->name('ads.update');

Route::get('/profile',[AddController::class,'UserProfile'])->name('userProfile');



Route::get('/about',[HomeController::class,'About'])->name('About');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/message/contact',[HomeController::class,'SendMessage'])->name('SendMessage');
Route::get('/messages',[AdminController::class,'showMessage'])->name('showMessage');


Route::get('/latest-ads', [AddController::class, 'latestAds']);

Route::get('/{location}', [AddController::class, 'FindAdsByLocation'])->name('FindAdsByLocation');

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

