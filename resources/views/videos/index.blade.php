@extends('layouts.app')

@section('title', app()->getLocale() == 'fa' ? 'موزیک‌ها' : 'Musics')

@section('content')
<section id="musics" class="mt-16 px-6">
    <div class="container mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-center text-light mb-10">
            {{ __('musics.page_title') }}
        </h1>

        <!-- Musics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Single Music Card -->
            <div class="music-card bg-black/60 p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col items-center">
                <!-- Music Cover -->
                <div class="w-full flex justify-center">
                    <img src="{{ asset('musics/covers/1.jpg') }}" alt="Music Cover" class="rounded-lg w-44 h-44 object-cover shadow-md border-4 border-yellow-500">
                </div>
                <!-- Music Title -->
                <h2 class="text-lg font-medium text-primary mt-4">
                    {{ __('musics.music_title', ['number' => 1]) }}
                </h2>
                <!-- Music Artist -->
                <p class="text-yellow-400 font-semibold mt-1">
                    {{ __('musics.artist_name', ['name' => app()->getLocale() == 'fa' ? 'متین کراوس' : 'Matin Krauss']) }}
                </p>
                <!-- Music Description -->
                <p class="text-light mt-2 text-sm px-1 text-center">
                    {{ __('musics.music_description') }}
                </p>
                <!-- Music Player -->
                <audio controls class="w-full mt-4 bg-gray-700 rounded-lg" style="outline: none;" preload="none">
                    <source src="{{ asset('musics/1.mp3') }}" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio>
            </div>
            
            <!-- Other music cards, just change data and assets... -->
            <div class="music-card bg-black/60 p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col items-center">
                <div class="w-full flex justify-center">
                    <img src="{{ asset('musics/covers/2.jpg') }}" alt="Music Cover" class="rounded-lg w-44 h-44 object-cover shadow-md border-4 border-yellow-500">
                </div>
                <h2 class="text-lg font-medium text-primary mt-4">
                    {{ __('musics.music_title', ['number' => 2]) }}
                </h2>
                <p class="text-yellow-400 font-semibold mt-1">
                    {{ __('musics.artist_name', ['name' => app()->getLocale() == 'fa' ? 'متین کراوس' : 'Matin Krauss']) }}
                </p>
                <p class="text-light mt-2 text-sm px-1 text-center">
                    {{ __('musics.music_description_2') }}
                </p>
                <audio controls class="w-full mt-4 bg-gray-700 rounded-lg" style="outline: none;" preload="none">
                    <source src="{{ asset('musics/2.mp3') }}" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio>
            </div>
   
            <!-- همین ساختار ... کارت سوم و چهارم -->
        </div>
    </div>
</section>
@endsection