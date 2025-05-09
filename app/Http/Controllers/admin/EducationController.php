<?php

namespace App\Http\Controllers\admin;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = \App\Models\Education::orderBy('order')->get();
        return view('educations.index', compact('educations'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // نمایش یک آموزش خاص
    public function show($slug)
    {
        // سرچ بر اساس اسلاگ هر زبان
        $education = Education::where('slug_fa', $slug)->orWhere('slug_en', $slug)->firstOrFail();
        return view('educations.show', compact('education'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
