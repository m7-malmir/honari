@extends('layouts.app')

@section('title', __('home.profile_name') . ' | ' . __('messages.home_art_site'))

@section('body-class', 'bg-black ')
@section('canvas')
    <!-- Canvas element for animation -->
    <canvas id="bgCanvas"></canvas>
@endsection

@section('content')
<div class="relative w-screen h-screen flex items-center justify-center bg-black bg-opacity-60">
    <div class="bg-white bg-opacity-10 border border-white border-opacity-20 rounded-2xl p-10 max-w-4xl text-white flex gap-8 z-20 backdrop-filter backdrop-blur-lg">

        <!-- تصویر پروفایل -->
        <div class="profile-image">
            <img 
                src="{{ asset('images/elyas_toghyani.jpg') }}" 
                alt="{{ __('home.profile_name') }}" 
                class="object-cover"
                style="width: 300px; height: 370px; border-radius: 0; object-fit: cover;">
        </div>

        <!-- اطلاعات پروفایل -->
        <div class="profile-info">
            <h2 class="text-2xl font-bold mb-4">{{ __('messages.artist_name') }}</h2>
            <p class="text-base leading-9">{{ __('messages.artist_description') }}</p>
            <p class="text-base leading-9">{{ __('messages.experience') }}</p>
            <p class="text-base leading-9">{{ __('messages.fields.activities') }}</p>
            <p class="text-base leading-9">{{ __('messages.fields.main_goal') }}</p>
            <p class="text-base leading-9">{{ __('messages.fields.details') }}</p>
        </div>

    </div>
</div>
@endsection