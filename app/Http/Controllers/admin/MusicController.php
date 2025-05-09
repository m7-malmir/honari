<?php
namespace App\Http\Controllers\admin;

use App\Models\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    // نمایش لیست موزیک‌ها
// مسیر: app/Http/Controllers/admin/MusicController.php
public function index()
{

    $musics = Music::all();
    return view('admin.musics.index', compact('musics'));
}


    // فرم ایجاد موزیک
    public function create()
    {
        return view('admin.musics.create'); 
    }

    // ذخیره موزیک جدید
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_fa' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'artist' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:mp3|max:10240', // محدودیت حجم ۱۰MB
        ]);

        $music = new Music($validated);

        if ($request->hasFile('file')) {
            $music->file = $request->file('file')->store('musics', 'public');
        }

        $music->save();

        return redirect()->route('musics.index')->with('success', 'موزیک جدید ذخیره شد!');
    }

    // حذف موزیک
    public function destroy(Music $music)
    {
    }
}
