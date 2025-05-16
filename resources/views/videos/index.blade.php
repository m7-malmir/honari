@extends('layouts.app')

@section('title', app()->getLocale() == 'fa' ? 'ویدیوها' : 'Videos')

@section('content')
<section id="videos" class="mt-16 px-6">
    <div class="container mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-center text-light mb-10">
            {{ __('videos.page_title') }}
        </h1>

        <!-- Videos Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Single Video -->
            <div class="video-card bg-bg3 p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <!-- Video Player -->
                <div class="aspect-w-16 aspect-h-9">
                    <video controls class="rounded-lg">
                        <source src="{{ asset('videos/3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Video Title -->
                <h2 class="text-lg font-medium text-primary mt-4">
                    {{ __('videos.video_title', ['number' => 1]) }}
                </h2>
                <!-- Video Description -->
                <p class="text-light mt-2">
                    {{ __('videos.video_description') }}
                </p>
            </div>

            <!-- Repeat similar blocks for more videos -->
            <div class="video-card bg-bg3 p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-w-16 aspect-h-9">
                    <video controls class="rounded-lg">
                        <source src="{{ asset('videos/3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2 class="text-lg font-medium text-primary mt-4">
                    {{ __('videos.video_title', ['number' => 2]) }}
                </h2>
                <p class="text-light mt-2">
                    {{ __('videos.video_description') }}
                </p>
            </div>
        </div>
    </div>
</section>

@endsection