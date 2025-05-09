<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
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

// پنل مدیریت
Route::prefix('admin')->name('admin.')->group(function () {
    // ورود ادمین
    Route::get('/login', [AdminController::class, 'loginForm'])->name('login')->middleware('guest:admin');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout')->middleware('auth:admin');

    // داشبورد مدیریت
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth:admin');

    // مدیریت ویدیوها
    Route::resource('/videos', VideoController::class)->middleware('auth:admin')->names([
        'index' => 'admin.videos.index',   // مسیر مدیریتی
        'create' => 'admin.videos.create',
        'store' => 'admin.videos.store',
        'edit' => 'admin.videos.edit',
        'update' => 'admin.videos.update',
        'destroy' => 'admin.videos.destroy',
    ]);
    Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
        // سایر مسیرهای مدیریت
        Route::resource('musics', MusicController::class)->names([
            'index' => 'musics.index',
            'create' => 'musics.create',
            'store' => 'musics.store',
            'edit' => 'musics.edit',
            'update' => 'musics.update',
            'destroy' => 'musics.destroy',
        ]);
    });
    
    // مدیریت آموزش‌ها
    Route::resource('/educations', EducationController::class)->middleware('auth:admin')->names([
        'index' => 'admin.educations.index',
        'create' => 'admin.educations.create',
        'store' => 'admin.educations.store',
        'edit' => 'admin.educations.edit',
        'update' => 'admin.educations.update',
        'destroy' => 'admin.educations.destroy',
    ]);

    // مدیریت بیوگرافی‌ها
    Route::resource('/biography', BiographyController::class)->middleware('auth:admin')->names([
        'index' => 'admin.biography.index',
        'edit' => 'admin.biography.edit',
        'update' => 'admin.biography.update',
    ]);

    // مدیریت پیام‌های تماس
    Route::resource('/contacts', ContactInfoController::class)->middleware('auth:admin')->names([
        'index' => 'admin.contacts.index',
        'show' => 'admin.contacts.show',
        'destroy' => 'admin.contacts.destroy',
    ]);
});





