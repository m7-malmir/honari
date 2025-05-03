<?php
namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    // نمایش لیست موزیک‌ها
    public function index()
    {
        $musics = Music::all();
        return view('musics.index', compact('musics'));
    }

    // فرم ایجاد موزیک
    public function create()
    {
        return view('musics.create');
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
        if ($music->file) {
            \Storage::disk('public')->delete($music->file);
        }
        $music->delete();

        return redirect()->route('musics.index')->with('success', 'موزیک حذف شد!');
    }
}
