<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

// کنترلرهای عمومی سایت
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\BiographyController;
use App\Http\Controllers\ContactInfoController;

// کنترلرهای بخش مدیریت
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\MusicController as AdminMusicController;
use App\Http\Controllers\admin\VideoController as AdminVideoController;
use App\Http\Controllers\admin\EducationController as AdminEducationController;
use App\Http\Controllers\admin\BiographyController as AdminBiographyController;
use App\Http\Controllers\admin\ContactInfoController as AdminContactInfoController;

// ----------------------------
// صفحات عمومی سایت
// ----------------------------
Route::get('/', function () {
    return view('home'); // صفحه اصلی
})->name('home');

Route::get('/biography', [BiographyController::class, 'index'])->name('biography.index');
Route::get('/video-list', [VideoController::class, 'index'])->name('videos.index');
Route::get('/music-list', [MusicController::class, 'index'])->name('musics.index');
Route::get('/educations', [EducationController::class, 'index'])->name('educations.index');
Route::get('/contact', [ContactInfoController::class, 'index'])->name('contact.index');

Route::post('/contact', [ContactInfoController::class, 'storeContact'])->name('contact.store');

// ----------------------------
// تغییر زبان سایت (دو زبانه)
// ----------------------------
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fa'])) {
        Session::put('locale', $locale); // تنظیم زبان در سشن
        App::setLocale($locale); // تنظیم زبان پیش‌فرض لاراول
    }
    return redirect()->back(); // بازگشت به صفحه قبلی
})->name('lang.switch');

// ----------------------------
// بخش مدیریت (پنل ادمین)
// ----------------------------
Route::prefix('admin')->group(function () {
    // صفحات ورود و احراز هویت
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login')->middleware('guest:admin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('auth:admin');

    // صفحه داشبورد
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth:admin');

    // مدیریت آثار (Resource Controllers برای مدیریت محتوای سایت)
    Route::middleware(['auth:admin'])->group(function () {
        Route::resource('musics', AdminMusicController::class); // مدیریت موزیک‌ها
        Route::resource('videos', AdminVideoController::class); // مدیریت ویدیوها
        Route::resource('educations', AdminEducationController::class); // مدیریت آموزش‌ها
        Route::resource('biography', AdminBiographyController::class); // مدیریت بیوگرافی
        Route::resource('contacts', AdminContactInfoController::class); // مدیریت پیام‌های تماس
    });
});

