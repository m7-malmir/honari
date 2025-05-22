<header id="mainHeader"
    dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}"
    class="w-full bg-[#191c24] sticky top-0 z-30 transition-all duration-300 py-4 border-b border-black/10 shadow-none">

    <div class="container mx-auto flex items-center justify-between px-4 relative">

        <!-- لوگوی دسکتاپ (فقط تو دسکتاپ) -->
        <a href="/"
           class="desktop-logo md:block absolute -top-6 {{ app()->getLocale()=='fa' ? 'right-2 md:right-8' : 'left-2 md:left-8'}} z-20"
           aria-label="خانه">
           <img src="{{ asset('images/ggg.png') }}"
           alt="Taghiyani Logo"
           class="w-16 h-16 object-contain select-none drop-shadow-xl transition-all duration-300">
      
        </a>

        <!-- منوی دسکتاپ -->
        <nav class="desktop-nav flex-1">
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

        <!-- سوییچ زبان دسکتاپ -->
        <div class="desktop-lang-switcher relative w-20 h-8 rounded-full shadow flex overflow-hidden border border-neutral-700 mr-3 ml-5">
            @if(app()->getLocale() === 'en')
                <a href="{{ route('lang.switch', ['locale' => 'fa']) }}"
                class="flex-1 bg-purple-600 text-white font-bold text-xs flex items-center justify-center hover:bg-purple-700 transition">FA</a>
            @else
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                class="flex-1 bg-orange-400 text-black font-bold text-xs flex items-center justify-center hover:bg-orange-500 transition">ENG</a>
            @endif
        </div>

        <!-- دکمه باز کردن منوی موبایل (برگر) فقط در موبایل  -->
        <button class="flex md:hidden items-center justify-center p-2 rounded menu-btn" id="open-menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- منوی موبایل با لوگو و دکمه بستن -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-[17rem] h-full bg-[#202026] z-50 shadow-2xl transition-transform duration-300 transform translate-x-full md:hidden">
        <div class="flex flex-col h-full">
            <!-- ردیف بالا: دکمه بستن و لوگو -->
            <div class="flex items-center justify-between px-4 pt-4 mb-3">
                <!-- دکمه بستن (بسته به زبان راست یا چپ) -->
                <button class="{{ app()->getLocale() === 'fa' ? 'order-1' : 'order-2' }} p-2" id="close-menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                <!-- لوگو منوی موبایل (وسط) -->
                <a href="/" aria-label="خانه" class="flex-1 flex justify-center">
                    <img src="{{ asset('images/ggg.png') }}"
                        alt="Taghiyani Logo"
                        class="h-16 w-16 object-contain select-none drop-shadow-xl">
                </a>
                <span class="w-8 h-8 invisible"></span>
            </div>
            <!-- لیست منو -->
            <ul class="flex flex-col gap-0 animate-fade-in">
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
            <!-- spacer برای پر کردن فضای خالی -->
            <div class="flex-1"></div>
        </div>
    </div>
</header>

{{-- ------------------------ JS + CSS ------------------------ --}}

<style>
/* مخفی شدن لوگو/منو/زبان هنگام باز بودن منوی موبایل */
#mainHeader.hide-desktop .desktop-logo,
#mainHeader.hide-desktop .desktop-nav,
#mainHeader.hide-desktop .desktop-lang-switcher {
    display: none !important;
}

/* اختیاری: اسکرول پس زمینه وقتی منو بازه غیر فعال بشه */
body.mobile-menu-open {
    overflow: hidden;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const openBtn = document.getElementById('open-menu-btn');
    const closeBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobileMenu');
    const header = document.getElementById('mainHeader');
    const body = document.body;

    openBtn.addEventListener('click', function () {
        mobileMenu.classList.remove('translate-x-full');
        header.classList.add('hide-desktop');
        body.classList.add('mobile-menu-open');
    });

    closeBtn.addEventListener('click', function () {
        mobileMenu.classList.add('translate-x-full');
        header.classList.remove('hide-desktop');
        body.classList.remove('mobile-menu-open');
    });

    // راه حل: رفع باگ نمای دسکتاپ بعد از باز بودن منوی موبایل
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768) {
            header.classList.remove('hide-desktop');
            mobileMenu.classList.add('translate-x-full');
            body.classList.remove('mobile-menu-open');
        }
    });
});

</script>