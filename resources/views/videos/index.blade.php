@extends('layouts.app')

@section('title', app()->getLocale() == 'fa' ? 'ویدیوها' : 'Videos')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
{{-- کارت 1 --}}
<div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
    {{-- تصویر کاور استاتیک و لایه تاری --}}
    <div class="relative">
        <img
            src="{{ asset('images/4k-video-player.jpg') }}"
            alt="ویدیو اول"
            class="w-full h-52 object-cover"
        />
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- دکمه پلی دقیقا وسط تصویر -->
        <button
            onclick="openAdvancedPlayer('https://www.w3schools.com/html/mov_bbb.mp4')"
            class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
        </button>
    </div>
    {{-- اطلاعات ویدیو --}}
    <div class="p-4">
        <h2 class="text-white text-lg font-bold">{{ __('videos.title') }}</h2>
        <p class="text-yellow-400 text-sm mt-1">{{ __('videos.page_title') }}</p>
        <p class="text-gray-400 text-xs mt-1">{{ __('videos.video_description') }}</p>
    </div>
</div>

{{-- کارت 1 --}}
<div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
    {{-- تصویر کاور استاتیک و لایه تاری --}}
    <div class="relative">
        <img
            src="{{ asset('images/4k-video-player.jpg') }}"
            alt="ویدیو اول"
            class="w-full h-52 object-cover"
        />
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- دکمه پلی دقیقا وسط تصویر -->
        <button
            onclick="openAdvancedPlayer('https://www.w3schools.com/html/mov_bbb.mp4')"
            class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
        </button>
    </div>
    {{-- اطلاعات ویدیو --}}
    <div class="p-4">
        <h2 class="text-white text-lg font-bold">{{ __('videos.title') }}</h2>
        <p class="text-yellow-400 text-sm mt-1">{{ __('videos.page_title') }}</p>
        <p class="text-gray-400 text-xs mt-1">{{ __('videos.video_description') }}</p>
    </div>
</div>

{{-- کارت 1 --}}
<div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
    {{-- تصویر کاور استاتیک و لایه تاری --}}
    <div class="relative">
        <img
            src="{{ asset('images/All-kinds-of-musical-instruments.jpg') }}"
            alt="ویدیو اول"
            class="w-full h-52 object-cover"
        />
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- دکمه پلی دقیقا وسط تصویر -->
        <button
            onclick="openAdvancedPlayer('https://www.w3schools.com/html/mov_bbb.mp4')"
            class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
        </button>
    </div>
    {{-- اطلاعات ویدیو --}}
    <div class="p-4">
        <h2 class="text-white text-lg font-bold">{{ __('videos.title') }}</h2>
        <p class="text-yellow-400 text-sm mt-1">{{ __('videos.page_title') }}</p>
        <p class="text-gray-400 text-xs mt-1">{{ __('videos.video_description') }}</p>
    </div>
</div>


{{-- کارت 1 --}}
<div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
    {{-- تصویر کاور استاتیک و لایه تاری --}}
    <div class="relative">
        <img
            src="{{ asset('images/All-kinds-of-musical-instruments.jpg') }}"
            alt="ویدیو اول"
            class="w-full h-52 object-cover"
        />
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- دکمه پلی دقیقا وسط تصویر -->
        <button
            onclick="openAdvancedPlayer('https://www.w3schools.com/html/mov_bbb.mp4')"
            class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
        </button>
    </div>
    {{-- اطلاعات ویدیو --}}
    <div class="p-4">
        <h2 class="text-white text-lg font-bold">{{ __('videos.title') }}</h2>
        <p class="text-yellow-400 text-sm mt-1">{{ __('videos.page_title') }}</p>
        <p class="text-gray-400 text-xs mt-1">{{ __('videos.video_description') }}</p>
    </div>
</div>
        {{-- کارت 2 --}}
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img
            src="{{ asset('images/4k-video-player.jpg') }}"
            alt="ویدیو اول"
            class="w-full h-52 object-cover"
        />
                <div class="absolute inset-0 bg-black/60"></div>
                <button
                    onclick="openAdvancedPlayer('https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4')"
                    class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">{{ __('videos.title') }}</h2>
                <p class="text-yellow-400 text-sm mt-1">{{ __('videos.page_title') }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ __('videos.video_description') }}</p>
            </div>
        </div>

        {{-- کارت 3 --}}
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img
            src="{{ asset('images/4k-video-player.jpg') }}"
            alt="ویدیو اول"
            class="w-full h-52 object-cover"
        />
                <div class="absolute inset-0 bg-black/60"></div>
                <button
                    onclick="openAdvancedPlayer('https://filesamples.com/samples/video/mp4/sample_640x360.mp4')"
                    class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">{{ __('videos.title') }}</h2>
                <p class="text-yellow-400 text-sm mt-1">{{ __('videos.page_title') }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ __('videos.video_description') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Fullscreen Advanced Player -->
<div id="advanced-video-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4">
    <div class="w-full max-w-5xl bg-black rounded-lg overflow-hidden relative aspect-video flex items-center justify-center">
        <!-- Close Button -->
        <button onclick="closeAdvancedPlayer()" class="absolute top-3 left-3 z-50 bg-white text-black px-3 py-1 rounded-lg text-sm hover:bg-red-500 hover:text-white">
            {{ app()->getLocale() == 'fa' ? 'بستن' : 'Close' }}
        </button>
        <!-- Custom Video Player -->
        <video id="advanced-video" class="w-full h-full" controls playsinline></video>
    </div>
</div>

<script>
function openAdvancedPlayer(source) {
  const modal = document.getElementById('advanced-video-modal');
  const video = document.getElementById('advanced-video');
  video.src = source;
  video.load();
  video.play();
  modal.classList.remove('hidden');
  modal.classList.add('flex');
}
function closeAdvancedPlayer() {
  const modal = document.getElementById('advanced-video-modal');
  const video = document.getElementById('advanced-video');
  video.pause();
  video.currentTime = 0;
  modal.classList.add('hidden');
  modal.classList.remove('flex');
}
window.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') closeAdvancedPlayer();
});
</script>
@endsection