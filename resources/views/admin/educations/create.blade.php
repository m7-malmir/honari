@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">ایجاد موزیک جدید</h1>

    <form method="POST" action="{{ route('musics.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">عنوان فارسی</label>
            <input type="text" name="title_fa" class="border-gray-300 rounded w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">عنوان انگلیسی</label>
            <input type="text" name="title_en" class="border-gray-300 rounded w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">خواننده</label>
            <input type="text" name="artist" class="border-gray-300 rounded w-full">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">فایل موزیک</label>
            <input type="file" name="file" class="border-gray-300 rounded w-full">
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">ذخیره</button>
    </form>
</div>
@endsection