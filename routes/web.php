<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\admin\MusicController as AdminMusicController; 
use App\Http\Controllers\EducationController;
use App\Http\Controllers\BiographyController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\AdminController;

// صفحات عمومی سایت
Route::get('/', function () {
    return view('home'); // صفحه اصلی
})->name('home');

Route::get('/biography', [BiographyController::class, 'index'])->name('biography.index');
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/educations', [EducationController::class, 'index'])->name('educations.index');
Route::get('/contact', [ContactInfoController::class, 'contactForm'])->name('contact.form');
Route::post('/contact', [ContactInfoController::class, 'storeContact'])->name('contact.store');
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fa'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login')->middleware('guest:admin');
//     Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
//     Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth:admin');
// });

// پنل مدیریت
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    Route::resource('musics', AdminMusicController::class); // موزیک‌ها
    Route::resource('videos', VideoController::class); // ویدیوها
    Route::resource('educations', EducationController::class); // آموزش‌ها
    Route::resource('biography', BiographyController::class); // بیوگرافی
    Route::resource('contacts', ContactInfoController::class); // اطلاعات تماس
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/login', [AdminController::class, 'loginForm'])->name('login')->middleware('guest:admin');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});





