<header id="mainHeader"
    dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}"
    class="w-full bg-[#191c24] sticky top-0 z-30 transition-all duration-300 py-4 border-b border-black/10 shadow-none">

    <div class="container mx-auto flex items-center justify-between px-4">
        <!-- لوگو یا نام سایت -->
        <h1 class="text-lg md:text-xl text-white font-bold">
            {{ app()->getLocale() === 'fa' ? 'وب‌سایت هنری آقای طغیانی' : "Mr. Toghyani Art Website" }}
        </h1>

        <!-- منو دسکتاپ (همیشه وسط) -->
        <nav class="flex-1">
            <ul class="hidden md:flex justify-center items-center gap-x-6 text-white">
                <li>
                    <a href="/" class="hover:text-blue-400 transition font-semibold">{{ __('menu.home') }}</a>
                </li>
                <li>
                    <a href="/biography" class="hover:text-blue-400 transition font-semibold">{{ __('menu.biography') }}</a>
                </li>
                <li>
                    <a href="/video-list" class="hover:text-blue-400 transition font-semibold">{{ __('menu.videos') }}</a>
                </li>
                <li>
                    <a href="/music-list" class="hover:text-blue-400 transition font-semibold">{{ __('menu.musics') }}</a>
                </li>
                <li>
                    <a href="/educations" class="hover:text-blue-400 transition font-semibold">{{ __('menu.education') }}</a>
                </li>
            </ul>
        </nav>

        <!-- سوییچ زبان -->
        <div class="relative w-20 h-8 rounded-full shadow flex overflow-hidden border border-neutral-700 mr-3 ml-5">
            @if(app()->getLocale() === 'en')
                <a href="{{ route('lang.switch', ['locale' => 'fa']) }}"
                   class="flex-1 bg-purple-600 text-white font-bold text-xs flex items-center justify-center hover:bg-purple-700 transition">FA</a>
            @else
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                   class="flex-1 bg-orange-400 text-black font-bold text-xs flex items-center justify-center hover:bg-orange-500 transition">ENG</a>
            @endif
        </div>

        <!-- دکمه موبایل -->
        <button class="flex md:hidden items-center justify-center p-2 rounded menu-btn" id="open-menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <button class="hidden md:hidden items-center justify-center p-2 rounded close-menu-btn" id="close-menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- منوی موبایل -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-[17rem] h-full bg-[#202026] z-50 shadow-2xl transition-transform duration-300 transform translate-x-full md:hidden">
        <ul class="flex flex-col gap-0 mt-16 animate-fade-in">
            <li class="border-b border-gray-800 animate-menuItem">
                <a href="/" class="block py-5 px-8 hover:bg-blue-700 hover:text-white font-semibold text-blue-200 text-center">{{ __('menu.home') }}</a>
            </li>
            <li class="border-b border-gray-800 animate-menuItem delay-[150ms]">
                <a href="/biography" class="block py-5 px-8 hover:bg-blue-700 hover:text-white font-semibold text-blue-200 text-center">{{ __('menu.biography') }}</a>
            </li>
            <li class="border-b border-gray-800 animate-menuItem delay-[300ms]">
                <a href="/video-list" class="block py-5 px-8 hover:bg-blue-700 hover:text-white font-semibold text-blue-200 text-center">{{ __('menu.videos') }}</a>
            </li>
            <li class="border-b border-gray-800 animate-menuItem delay-[450ms]">
                <a href="/music-list" class="block py-5 px-8 hover:bg-blue-700 hover:text-white font-semibold text-blue-200 text-center">{{ __('menu.musics') }}</a>
            </li>
            <li class="animate-menuItem delay-[600ms]">
                <a href="/educations" class="block py-5 px-8 hover:bg-blue-700 hover:text-white font-semibold text-blue-200 text-center">{{ __('menu.education') }}</a>
            </li>
            <!-- سوییچ زبان -->
            <li class="mt-4 mb-2 text-center">
                @if(app()->getLocale() === 'en')
                    <a href="{{ route('lang.switch', ['locale' => 'fa']) }}"
                       class="inline-block bg-purple-600 text-white font-bold text-xs rounded px-5 py-2 hover:bg-purple-700 transition">FA</a>
                @else
                    <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                       class="inline-block bg-orange-400 text-black font-bold text-xs rounded px-5 py-2 hover:bg-orange-500 transition">ENG</a>
                @endif
            </li>
        </ul>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
const header = document.getElementById('mainHeader');
const menuBtn = document.getElementById('open-menu-btn');
const closeBtn = document.getElementById('close-menu-btn');
const mobileMenu = document.getElementById('mobileMenu');

// **نکته: چک کن این‌ها درست شناسایی می‌شوند**
console.log('header:', header, 'menuBtn:', menuBtn, 'closeBtn:', closeBtn, 'mobileMenu:', mobileMenu);

// تغییر رنگ هدر هنگام اسکرول
window.addEventListener('scroll', function () {
  if (window.scrollY > 10) {
    header.classList.add('border-b', 'border-dark-border', 'shadow-lg', 'bg-opacity-95', 'bg-[#23263a]');
    header.classList.remove('bg-[#191c24]');
  } else {
    header.classList.remove('border-b', 'border-dark-border', 'shadow-lg', 'bg-opacity-95', 'bg-[#23263a]');
    header.classList.add('bg-[#191c24]');
  }
});

// باز کردن منو موبایل
menuBtn.addEventListener('click', () => {
  mobileMenu.classList.remove('translate-x-full');
  mobileMenu.classList.add('translate-x-0');
  closeBtn.classList.remove('hidden');
  menuBtn.classList.add('hidden');
  document.body.classList.add('overflow-hidden');
});

// بستن منو موبایل
closeBtn.addEventListener('click', () => {
  mobileMenu.classList.add('translate-x-full');
  mobileMenu.classList.remove('translate-x-0');
  closeBtn.classList.add('hidden');
  menuBtn.classList.remove('hidden');
  document.body.classList.remove('overflow-hidden');
});

// بستن منو هنگام کلیک روی لینک‌ها (اختیاری)
document.querySelectorAll('#mobileMenu a').forEach(link =>
  link.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    closeBtn.classList.add('hidden');
    menuBtn.classList.remove('hidden');
    document.body.classList.remove('overflow-hidden');
  })
);
});
</script>
