@extends('layouts.app')

@section('title', 'مجموعه آثار | وب‌سایت هنری آقای طغیانی')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-10">مجموعه آثار</h1>

    {{-- لیست آثار --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        @forelse ($artworks as $artwork)
            <div class="bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/' . $artwork->cover_image) }}" alt="{{ $artwork->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-white">{{ $artwork->title }}</h2>
                    <p class="text-sm text-gray-400">{{ $artwork->description }}</p>
                    <a href="#" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        مشاهده جزئیات
                    </a>
                </div>
            </div>
        @empty
            <p class="text-gray-500">هیچ اثری برای نمایش وجود ندارد.</p>
        @endforelse
    </div>
</div>
@endsection