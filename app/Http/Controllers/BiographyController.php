<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiographyController extends Controller
{
    public function index()
    {
        // فرض: فقط یک بیوگرافی داریم (id = 1)
        $bio = \App\Models\Biography::first(); 
        return view('biography.index', compact('bio'));
    }
    
    public function edit($id)
    {
        $bio = \App\Models\Biography::findOrFail($id);
        return view('biography.edit', compact('bio'));
    }
    
    public function update(Request $request, $id)
    {
        $bio = \App\Models\Biography::findOrFail($id);
    
        $data = $request->validate([
            'full_name_fa' => 'required|string|max:255',
            'full_name_en' => 'required|string|max:255',
            'slug_fa' => 'required|string|max:255|unique:biographies,slug_fa,' . $id,
            'slug_en' => 'required|string|max:255|unique:biographies,slug_en,' . $id,
            'birth_date' => 'nullable|date',
            'bio_fa' => 'nullable|string',
            'bio_en' => 'nullable|string',
            'website' => 'nullable|url',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'telegram' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048'
        ]);
    
        // آپلود عکس پروفایل
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image')->store('biographies', 'public');
            $data['profile_image'] = $file;
        }
    
        $bio->update($data);
    
        return redirect()->route('biography.index')->with('success', 'بیوگرافی بروزرسانی شد.');
    }
    
}
