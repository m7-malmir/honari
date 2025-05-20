@extends('layouts.app')
@section('title', __('home.profile_name') . ' | ' . __('messages.home_art_site'))
@section('body-class', 'bg-black')

@section('content')

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

{{-- اسلایدر فول‌اسکرین --}}
<div class="w-full h-[92vh] bg-black relative overflow-hidden">
    <div class="swiper w-full h-full">
        <div class="swiper-wrapper h-full">
            @for ($i = 0; $i < 3; $i++)
                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('images/img-26_aw9alb.jpg') }}" alt="" class="w-full h-full object-cover" />
                </div>
            @endfor
        </div>

        <div class="swiper-button-next !text-white !w-10 !h-10 !flex !items-center !justify-center !bg-black/30 !rounded-full !right-6"></div>
        <div class="swiper-button-prev !text-white !w-10 !h-10 !flex !items-center !justify-center !bg-black/30 !rounded-full !left-6"></div>
    </div>












    {{-- پلیر موزیک --}}
    <div class="absolute bottom-0 left-0 w-full text-white py-3 px-4 flex items-center justify-between z-50 backdrop-blur-sm"
     style="background-color: rgba(10, 38, 71, 0.5);">


        {{-- اطلاعات آهنگ --}}
        <div class="flex items-center">
            <img src="{{ asset('musics/1.mp3') }}" alt="کاور آهنگ" class="w-10 h-10 rounded object-cover mr-3">
            <div>
                <div class="text-sm font-semibold">Gol-e Sorkh</div>
                <div class="text-xs">Single Tracks</div>
            </div>
        </div>

        {{-- کنترل‌ها --}}
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
            <button id="prevBtn" class="text-white mx-2"><i class="fas fa-backward"></i></button>
            <button id="playPauseBtn" class="text-white mx-2"><i class="fas fa-play"></i></button>
            <button id="nextBtn" class="text-white mx-2"><i class="fas fa-forward"></i></button>
            <span id="currentTime" class="text-xs mx-2">00:00</span> /
            <span id="duration" class="text-xs mx-2">00:00</span>
            <input type="range" id="progressBar" class="mx-2 w-40" value="0">
        </div>

        {{-- کنترل صدا --}}
        <div class="flex items-center">
            <i class="fas fa-volume-up"></i>
            <input type="range" id="volumeControl" class="w-20 mx-2" min="0" max="1" step="0.01" value="1">
        </div>

        <audio id="audioPlayer" src="{{ asset('musics/1.mp3') }}"></audio>
    </div>
</div>














{{-- سکشن دوم --}}
<section class="relative z-20 bg-white w-full py-12 px-4 -mt-10 rounded-2xl shadow-md max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-2">جدیدترین سینگل‌ها</h2>
    <p class="text-center text-gray-600 mb-10">برای شنیدن یا خرید جدیدترین تک‌آهنگ‌ها روی کاور کلیک کنید</p>
    <div class="flex flex-wrap justify-center gap-10">
        <a href="#" class="group block w-52">
            <div class="rounded-lg shadow-lg overflow-hidden transition-transform group-hover:scale-105">
                <img src="{{ asset('images/single1.jpg') }}" alt="سینگل 1" class="w-full h-52 object-cover" />
            </div>
            <div class="mt-3 text-center font-semibold group-hover:text-blue-700">نام آهنگ ۱</div>
        </a>
        <a href="#" class="group block w-52">
            <div class="rounded-lg shadow-lg overflow-hidden transition-transform group-hover:scale-105">
                <img src="{{ asset('images/single2.jpg') }}" alt="سینگل 2" class="w-full h-52 object-cover" />
            </div>
            <div class="mt-3 text-center font-semibold group-hover:text-blue-700">نام آهنگ ۲</div>
        </a>
        <a href="#" class="group block w-52">
            <div class="rounded-lg shadow-lg overflow-hidden transition-transform group-hover:scale-105">
                <img src="{{ asset('images/comingsoon.jpg') }}" alt="به زودی" class="w-full h-52 object-cover" />
            </div>
            <div class="mt-3 text-center font-semibold group-hover:text-blue-700">بزودی...</div>
        </a>
    </div>
</section>

@endsection

@section('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.swiper', {
        loop: true,
        slidesPerView: 1,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        speed: 800,
    });

    // پلیر موزیک
    const audio = document.getElementById('audioPlayer');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const progressBar = document.getElementById('progressBar');
    const currentTimeSpan = document.getElementById('currentTime');
    const durationSpan = document.getElementById('duration');
    const volumeControl = document.getElementById('volumeControl');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    audio.addEventListener('loadedmetadata', () => {
        durationSpan.textContent = formatTime(audio.duration);
        progressBar.value = 0;
    });

    audio.addEventListener('timeupdate', () => {
        progressBar.value = (audio.currentTime / audio.duration) * 100;
        currentTimeSpan.textContent = formatTime(audio.currentTime);
    });

    playPauseBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            audio.pause();
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        }
    });

    progressBar.addEventListener('input', () => {
        audio.currentTime = (progressBar.value / 100) * audio.duration;
    });

    volumeControl.addEventListener('input', () => {
        audio.volume = volumeControl.value;
    });

    prevBtn.addEventListener('click', () => {
        audio.currentTime = 0;
    });

    nextBtn.addEventListener('click', () => {
        audio.currentTime = audio.duration;
    });

    function formatTime(seconds) {
        const min = Math.floor(seconds / 60);
        const sec = Math.floor(seconds % 60);
        return `${min}:${sec < 10 ? '0' + sec : sec}`;
    }
});
</script>
@endsection
