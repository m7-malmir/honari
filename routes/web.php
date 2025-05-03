<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\BiographyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::resource('musics', MusicController::class);


// برای سایت (فرانت)
Route::get('/educations', [EducationController::class, 'index'])->name('educations.index');
Route::get('/educations/{slug}', [EducationController::class, 'show'])->name('educations.show');

// برای مدیریت (اگر بخش ادمین جدا داری)
Route::resource('admin/educations', EducationController::class)->middleware('auth');


Route::get('/biography', [BiographyController::class, 'index'])->name('biography.index');
Route::get('/biography/edit/{id}', [BiographyController::class, 'edit'])->name('biography.edit');
Route::put('/biography/update/{id}', [BiographyController::class, 'update'])->name('biography.update');


Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'fa'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
})->name('lang.switch');

Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/musics/{music}', [MusicController::class, 'show'])->name('musics.show');

Route::middleware(['is_admin'])->group(function () {
    Route::get('/musics/create', [MusicController::class, 'create'])->name('musics.create');
    Route::post('/musics', [MusicController::class, 'store'])->name('musics.store');
    Route::get('/musics/{music}/edit', [MusicController::class, 'edit'])->name('musics.edit');
    Route::put('/musics/{music}', [MusicController::class, 'update'])->name('musics.update');
    Route::delete('/musics/{music}', [MusicController::class, 'destroy'])->name('musics.destroy');

});

