<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::with('category')->orderBy('created_at', 'desc')->get();
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_fa' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'video_url' => 'required|url',
            'description_fa' => 'nullable|string',
            'description_en' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $video = new Video();
        $video->title_fa = $request->title_fa;
        $video->title_en = $request->title_en;
        $video->video_url = $request->video_url;
        $video->description_fa = $request->description_fa;
        $video->description_en = $request->description_en;
    
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('videos/thumbnails', 'public');
            $video->thumbnail = $path;
        }
    
        $video->save();
    
        return redirect()->route('admin.videos.index')->with('success', 'ویدیو با موفقیت ایجاد شد.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.videos.edit', compact('video'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
    
        $request->validate([
            'title_fa' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'video_url' => 'required|url',
            'description_fa' => 'nullable|string',
            'description_en' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $video->title_fa = $request->title_fa;
        $video->title_en = $request->title_en;
        $video->video_url = $request->video_url;
        $video->description_fa = $request->description_fa;
        $video->description_en = $request->description_en;
    
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('videos/thumbnails', 'public');
            $video->thumbnail = $path;
        }
    
        $video->save();
    
        return redirect()->route('admin.videos.index')->with('success', 'ویدیو با موفقیت به‌روزرسانی شد.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
