@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
<div class="w-screen max-w-none h-[500px] sm:h-[800px] relative bg-black">
    <div class="w-full h-full relative">
      <!-- Swiper -->
      <div class="swiper mySwiper w-full h-full rounded-none overflow-hidden top-1">
        <div class="swiper-wrapper h-full">

          <!-- Slide 1 -->
          <div class="swiper-slide relative h-full">
            <img src="{{ asset('images/IMG_1069.JPG') }}"
                 class="w-full h-full object-cover transition-all duration-300"
                 alt="اسلاید 1">
            <!-- متن و لوگو: همیشه مرکز تصویر (موبایل و دسکتاپ) -->
            <div class="absolute top-0 right-[10rem] sm:right-auto sm:left-1/2 sm:translate-x-[5rem] flex flex-col items-center justify-center z-10
            sm:items-center sm:justify-start sm:pt-0">
    <img src="{{ asset('images/elyas toghyani (1).png') }}"
         class="w-20 h-20 sm:w-40 sm:h-56 opacity-80 pointer-events-none object-contain mb-2 sm:mb-6 drop-shadow-lg"/>
         <h4 class="text-base sm:text-3xl text-white font-bold drop-shadow mb-1 sm:mb-2">الیاس طغیانی</h4>
    <h3 class="text-xs sm:text-3xl text-yellow-300 font-semibold drop-shadow">Elyas Toghyani</h3>
</div>

          </div>

          <!-- Slide 2 -->
<div class="swiper-slide relative h-full">
    <img src="{{ asset('images/sli1.jpg') }}"
         class="w-full h-full object-cover transition-all duration-300"
         alt="اسلاید 2">

         <div class="absolute top-5 left-12 bottom-0 flex flex-col items-center justify-center z-10
         sm:justify-center sm:top-0 sm:left-0
         lg:top-[0rem] lg:left-[15rem]">
  <img src="/images/elyas toghyani (1).png" class="w-20 h-20 sm:w-40 sm:h-56 opacity-80 pointer-events-none object-contain mb-2 sm:mb-4 drop-shadow-lg">
  <h4 class="text-base sm:text-3xl text-white font-bold drop-shadow mb-1 sm:mb-2">الیاس طغیانی</h4>
  <h3 class="text-xs sm:text-3xl text-yellow-300 font-semibold drop-shadow">Elyas Toghyani</h3>
</div>


</div>
</div>
          <!-- اسلایدهای بیشتر ... -->

        </div>
        <div class="swiper-button-next text-amber-400"></div>
        <div class="swiper-button-prev text-amber-400"></div>
        <div class="swiper-pagination"></div>
      </div>

      <!-- پلیر موسیقی -->
<div id="music-player-bar"
      class="absolute bottom-0 left-0 right-0 z-50 transition-all duration-300 border-t border-gray-800"
      style="backdrop-filter: blur(12px); background: rgba(17, 19, 26, 0.82); direction: rtl;">
      <div class="flex items-center justify-center h-[58px] sm:h-[62px] px-4 sm:px-8 md:px-12 w-full max-w-full select-none">

        
            {{-- سمت راست: کاور و اطلاعات آهنگ --}}
            <div class="flex items-center gap-1 sm:gap-2 min-w-[100px] sm:min-w-[150px]">
            <img id="player-cover" src="{{ asset('images/4-150x150.jpg') }}"
                    class="w-10 h-10 sm:w-12 sm:h-12 rounded shadow-md border-2 border-yellow-400 object-cover bg-black/20" alt="">
            <div>
                <div id="player-title"
                    class="text-xs sm:text-base font-bold text-white leading-tight truncate max-w-[68px] sm:max-w-[112px]">نام آهنگ</div>
                <div id="player-artist"
                    class="text-[10px] sm:text-xs text-gray-300 truncate max-w-[68px] sm:max-w-[112px] mt-[2px]">نام هنرمند</div>
            </div>
            </div>
        
            {{-- وسط: کنترل‌ها --}}
            <div class="flex flex-col items-center flex-1 min-w-0 max-w-3xl">
            <div class="flex justify-center items-center gap-0.5 sm:gap-1 mb-1 sm:mb-[2px]">
                <button onclick="nextTrack()" title="بعدی"
                        class="flex items-center justify-center rounded-full hover:bg-white/10 p-1 sm:p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 text-white" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                    <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
                <button id="player-play-btn" onclick="toggleMusic()" title="پخش/توقف"
                        class="flex items-center justify-center bg-yellow-400 hover:bg-yellow-500 text-black rounded-full w-9 h-9 sm:w-12 sm:h-12 shadow transition-all duration-200 mx-2 relative z-10">
                <span id="play-icon">
                    <!-- آیکون پلی پیش فرض -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z"/>
                    </svg>
                </span>
                </button>
                <button onclick="prevTrack()" title="قبلی"
                        class="flex items-center justify-center rounded-full hover:bg-white/10 p-1 sm:p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 text-white" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                    <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            <!-- Progress Bar -->
            <div class="w-full relative flex items-center" style="height:15px;">
                <div class="absolute left-0 right-0 top-[6px] h-2 z-0 bg-white/15 rounded-full [direction:ltr]">
                <div id="player-progress-bar"
                        class="bg-yellow-400 h-2 rounded-full transition-all duration-200 w-0"></div>
                </div>
                <span id="player-current"
                    class="relative z-10 text-[9px] sm:text-[10px] font-mono text-gray-200 pr-1 sm:pr-3 select-none"
                    style="min-width:28px; sm:min-width:32px;">00:00</span>
                <span class="flex-1"></span>
                <span id="player-total"
                    class="relative z-10 text-[9px] sm:text-[10px] font-mono text-gray-400 pl-1 sm:pl-3 select-none"
                    style="min-width:28px; sm:min-width:32px;">00:00</span>
            </div>
            </div>
        
            {{-- سمت چپ: کنترل صدا --}}
            <div class="flex items-center gap-0.5 sm:gap-1 min-w-[70px] sm:min-w-[90px] justify-end">
            <input id="player-volume" type="range"
                    min="0" max="1" step="0.01" value="0.7"
                    class="accent-yellow-400 w-14 sm:w-24 h-2 rounded-full cursor-pointer [direction:ltr]"
                    onchange="changeVolume(this)">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-width="2" d="M11 5L6 9H2v6h4l5 4V5z"/>
            </svg>
            </div>
        
            <audio id="audio-player" src="{{ asset('musics/1.mp3') }}"
                    class="hidden"
                    onpause="changeIcon('play')"
                    onplay="changeIcon('pause')"
                    onended="nextTrack()"></audio>
        </div>
 </div>
 
    </div>
</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.mySwiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    spaceBetween: 0,
    slidesPerView: 1,
    direction: 'horizontal',
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });
</script>
<script>

    let durationString = '';
    let currentAudio = document.getElementById('audio-player');

    document.addEventListener('DOMContentLoaded', function () {
        // مقداردهی اولیه
        currentAudio.volume = document.getElementById('player-volume').value;
        setMeta('Elyas Toghyani', 'Pure Tranquility', '{{ asset('images/2-150x150.jpg') }}', '02:24');
        updateTimes(0, 0);
    });

    currentAudio.ontimeupdate = updatePlayerProgress;
    currentAudio.onloadedmetadata = function () {
        updateTimes(0, currentAudio.duration);
        durationString = formatTime(currentAudio.duration);
    };

    function updatePlayerProgress() {
        const audio = currentAudio;
        const progressBar = document.getElementById('player-progress-bar');
        if (!audio) return;
        const percent = (!isNaN(audio.duration) && audio.duration > 0) ? (audio.currentTime / audio.duration) * 100 : 0;
        if(progressBar) progressBar.style.width = percent + '%';
        updateTimes(audio.currentTime, audio.duration);
    }

    function updateTimes(current, duration) {
        document.getElementById('player-current').innerText = formatTime(current);
        document.getElementById('player-total').innerText = isNaN(duration) ? (durationString || "00:00") : formatTime(duration);
    }

    function toggleMusic() {
        if (!currentAudio) return;
        currentAudio.paused ? currentAudio.play() : currentAudio.pause();
    }

    function changeVolume(el) {
        if (!currentAudio) return;
        currentAudio.volume = el.value;
    }

    function changeIcon(state){
        const playIcon = document.getElementById('play-icon');
        if(state === 'pause') {
            playIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M6 4h4v16H6zm8 0h4v16h-4z"/></svg>`;
        } else {
            playIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z"/></svg>`;
        }
    }

    function prevTrack(){
        // اینجا می‌تونی کد قبلی آهنگ رو بذاری
    }

    function nextTrack(){
        // اینجا می‌تونی کد بعدی آهنگ رو بذاری
    }

    function setMeta(title, artist, cover, duration){
        document.getElementById('player-title').innerText = title;
        document.getElementById('player-artist').innerText = artist;
        document.getElementById('player-cover').src = cover;
        durationString = duration;
    }

    function formatTime(sec) {
        if (isNaN(sec)) return '00:00';
        sec = Math.floor(sec);
        const m = Math.floor(sec / 60);
        let s = sec % 60;
        if (s < 10) s = '0' + s;
        return `${m}:${s}`;
    }
</script>
@endsection