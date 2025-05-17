@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- کارت ۱ -->
        <div class="relative rounded-2xl flex flex-col items-center p-6 shadow-lg bg-black/70 overflow-hidden"
             style="background-image: url('/images/pngimg.com - music_notes_PNG38.png'); background-size: contain; background-position: center right;">
            <div class="absolute inset-0 bg-[#111827] opacity-65 z-10"></div>
            <img src="/images/2-150x150.jpg" alt="{{ __('musics.card1_album_cover') }}" class="rounded-xl shadow-lg w-48 h-48 object-cover border-4 border-gray-700 z-20 relative">
            <div class="mt-6 text-center w-full z-20 relative">
                <h1 class="text-2xl font-bold tracking-tight text-white">{{ __('musics.card1_title') }}</h1>
                <p class="text-yellow-400 font-semibold mt-1">{{ __('musics.card1_artist') }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ __('musics.card1_info') }}</p>
                <button
                    onclick="playMusic('/musics/1.mp3', '{{ __('musics.card1_title') }}', '{{ __('musics.card1_artist') }}', '/images/2-150x150.jpg', '02:24')"
                    class="bg-yellow-400 text-black px-4 py-2 rounded-lg flex items-center gap-2 font-bold shadow hover:bg-yellow-500 mt-6 mx-auto transition"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z" />
                    </svg>
                    {{ __('musics.play_button') }}
                </button>
            </div>
        </div>

        <!-- کارت ۲ : فیلدها و تصویر متفاوت -->
        <div class="relative rounded-2xl flex flex-col items-center p-6 shadow-lg bg-black/70 overflow-hidden"
             style="background-image: url('/images/pngimg.com - music_notes_PNG38.png'); background-size: contain; background-position: center right;">
            <div class="absolute inset-0 bg-[#111827] opacity-65 z-10"></div>
            <img src="/images/3-150x150.jpg" alt="{{ __('musics.card2_album_cover') }}" class="rounded-xl shadow-lg w-48 h-48 object-cover border-4 border-gray-700 z-20 relative">
            <div class="mt-6 text-center w-full z-20 relative">
                <h1 class="text-2xl font-bold tracking-tight text-white">{{ __('musics.card2_title') }}</h1>
                <p class="text-yellow-400 font-semibold mt-1">{{ __('musics.card2_artist') }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ __('musics.card2_info') }}</p>
                <button
                  onclick="playMusic('/musics/2.mp3', '{{ __('musics.card2_title') }}', '{{ __('musics.card2_artist') }}', '/images/3-150x150.jpg', '03:20')"
                  class="bg-yellow-400 text-black px-4 py-2 rounded-lg flex items-center gap-2 font-bold shadow hover:bg-yellow-500 mt-6 mx-auto transition"
                >
                  <!-- SVG Play Icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z" />
                  </svg>
                  {{ __('musics.play_button') }}
                </button>
            </div>
        </div>

        <!-- کارت ۳ : فیلدها و تصویر متفاوت -->
        <div class="relative rounded-2xl flex flex-col items-center p-6 shadow-lg bg-black/70 overflow-hidden"
             style="background-image: url('/images/pngimg.com - music_notes_PNG38.png'); background-size: contain; background-position: center right;">
            <div class="absolute inset-0 bg-[#111827] opacity-65 z-10"></div>
            <img src="/images/5-150x150.jpg" alt="{{ __('musics.card3_album_cover') }}" class="rounded-xl shadow-lg w-48 h-48 object-cover border-4 border-gray-700 z-20 relative">
            <div class="mt-6 text-center w-full z-20 relative">
                <h1 class="text-2xl font-bold tracking-tight text-white">{{ __('musics.card3_title') }}</h1>
                <p class="text-yellow-400 font-semibold mt-1">{{ __('musics.card3_artist') }}</p>
                <p class="text-gray-400 text-xs mt-1">{{ __('musics.card3_info') }}</p>
                <button
                  onclick="playMusic('/musics/3.mp3', '{{ __('musics.card3_title') }}', '{{ __('musics.card3_artist') }}', '/images/4-150x150.jpg', '04:15')"
                  class="bg-yellow-400 text-black px-4 py-2 rounded-lg flex items-center gap-2 font-bold shadow hover:bg-yellow-500 mt-6 mx-auto transition"
                >
                  <!-- SVG Play Icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z" />
                  </svg>
                  {{ __('musics.play_button') }}
                </button>
            </div>
        </div>
    </div>
</div>
{{--  ****** توجه کن! از این خط به بعد دیگه بیرون از grid کارت‌ها ****** --}}

<div id="music-player-bar" class="fixed right-0 left-0 bottom-0 z-50 bg-gray-900 bg-opacity-80 py-3 px-6 flex items-center justify-between shadow-inner border-t border-gray-700 backdrop-blur-md transition-all duration-300 translate-y-full invisible" style="direction: rtl;">
    <div id="player-progress-bar" class="absolute top-0 left-0 h-1 bg-[#FBD84C] transition-all duration-100 linear" style="width: 0%;"></div>
    <div class="flex items-center gap-4">
        <img id="player-cover" src="" class="w-14 h-14 rounded-lg object-cover shadow-md border-2 border-yellow-400" alt="کاور" />
        <div>
            <div id="player-title" class="text-lg text-white font-bold"></div>
            <div id="player-artist" class="text-gray-400 text-xs font-semibold"></div>
        </div>
    </div>
    <div class="flex-1 flex items-center gap-3 justify-center">
        <button id="player-play-btn" onclick="toggleMusic()" class="text-yellow-400 hover:text-yellow-500 rounded-lg p-2">
            <span id="play-icon">
                <!-- SVG Play Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z"/>
                </svg>
            </span>
        </button>
        <audio id="audio-player" src="" class="hidden" onended="hidePlayer()" onpause="changeIcon('play')" onplay="changeIcon('pause')"></audio>
    </div>
    <div class="flex items-center gap-2">
        <span id="player-duration" class="text-gray-300 text-xs font-mono">00:00 / 00:00</span>
        <input id="player-volume" type="range" min="0" max="1" step="0.01" value="0.7" class="accent-yellow-400 w-24" onchange="changeVolume(this)">
        <button onclick="hidePlayer()" class="text-gray-400 hover:text-red-400 mx-2" title="{{ __('musics.close') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
</div>

<script>
    let currentAudio = null;
    let durationString = '';
    function playMusic(file, title, artist, cover, duration) {
        const bar = document.getElementById('music-player-bar');
        const audio = document.getElementById('audio-player');
        const progressBar = document.getElementById('player-progress-bar');
        document.getElementById('player-cover').src = cover;
        document.getElementById('player-title').innerText = title;
        document.getElementById('player-artist').innerText = artist;
        durationString = duration;
        document.getElementById('player-duration').innerText = '00:00 / ' + durationString;
        if (currentAudio && !currentAudio.paused) currentAudio.pause();
        if(progressBar) progressBar.style.width = '0%';
        if(audio) audio.currentTime = 0;
        document.getElementById('player-duration').innerText = '00:00 / ' + durationString;
        audio.src = file;
        audio.volume = document.getElementById('player-volume').value;
        audio.load();
        audio.onloadedmetadata = function() {
            audio.play();
            bar.classList.remove('translate-y-full', 'invisible');
            bar.classList.add('translate-y-0', 'visible');
            currentAudio = audio;
            audio.ontimeupdate = updatePlayerProgress;
            document.getElementById('player-duration').innerText = '00:00 / ' + formatTime(audio.duration);
        }
        audio.onerror = function() {
            console.error("Error loading audio:", audio.error);
            hidePlayer();
            alert("{{ __('musics.audio_error') }}");
        }
    }
    function updatePlayerProgress() {
        const audio = document.getElementById('audio-player');
        const progressBar = document.getElementById('player-progress-bar');
        const durationSpan = document.getElementById('player-duration');
        const currentTime = audio.currentTime;
        const duration = audio.duration;
        const cur = formatTime(currentTime);
        const dur = isNaN(duration) ? durationString : formatTime(duration);
        durationSpan.innerText = `${cur} / ${dur}`;
        if (!isNaN(duration) && progressBar) {
            const percentage = (currentTime / duration) * 100;
            progressBar.style.width = percentage + '%';
        } else if (progressBar) {
            progressBar.style.width = '0%';
        }
    }
    function toggleMusic() {
        const audio = document.getElementById('audio-player');
        if (!audio) return;
        if (audio.paused) audio.play();
        else audio.pause();
    }
    function changeVolume(el) {
        const audio = document.getElementById('audio-player');
        if (!audio) return;
        audio.volume = el.value;
    }
    function hidePlayer() {
        const bar = document.getElementById('music-player-bar');
        const audio = document.getElementById('audio-player');
        const progressBar = document.getElementById('player-progress-bar');
        if(bar) bar.classList.add('translate-y-full', 'invisible');
        if(bar) bar.classList.remove('translate-y-0', 'visible');
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
        if(progressBar) progressBar.style.width = '0%';
        document.getElementById('player-duration').innerText = '00:00 / 00:00';
        currentAudio = null;
    }
    function changeIcon(state){
        const playIcon = document.getElementById('play-icon');
        if (!playIcon) return;
        playIcon.innerHTML = state === 'pause'
            ? `<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M6 4h4v16H6zm8 0h4v16h-4z"/></svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z"/></svg>`;
    }
    function formatTime(sec) {
        if (isNaN(sec)) return '00:00';
        sec = Math.floor(sec);
        const m = Math.floor(sec / 60);
        let s = sec % 60;
        if (s < 10) s = '0' + s;
        return `${m}:${s}`;
    }
    window.onload = hidePlayer;
</script>
@endsection