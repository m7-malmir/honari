<?php
namespace App\Http\Controllers;

use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::orderBy('created_at', 'desc')->get();
        return view('musics.index', compact('musics'));
    }

    public function show($id)
    {
        $music = Music::findOrFail($id);
        return view('musics.show', compact('music'));
    }
}

