<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وب‌سایت هنری آقای طغیانی</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-start font-sans text-gray-700">

    <!-- هدر سایت -->
    <header dir="rtl" class="w-full bg-blue-800 py-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-4">
            <!-- لوگوی سایت با عنوان -->
            <h1 class="text-lg md:text-xl text-white font-bold">
                وب‌سایت هنری آقای طغیانی
            </h1>

            <!-- منو اصلی -->
            <nav>
                <!-- منو دسکتاپ -->
                <ul class="hidden md:flex md:space-x-4 text-center text-white">
                    <li><a href="/" class="hover:text-blue-300">{{ __('menu.home') }}</a></li>
                    <li><a href="/gallery" class="hover:text-blue-300">{{ __('menu.gallery') }}</a></li>
                    <li><a href="/videos" class="hover:text-blue-300">{{ __('menu.videos') }}</a></li>
                    <li><a href="/musics" class="hover:text-blue-300">{{ __('menu.musics') }}</a></li>
                    <li><a href="/education" class="hover:text-blue-300">{{ __('menu.education') }}</a></li>
                    <li><a href="/biography" class="hover:text-blue-300">{{ __('menu.biography') }}</a></li>
                    <li><a href="/contact" class="hover:text-blue-300">{{ __('menu.contact') }}</a></li>
                </ul>

                <!-- منو موبایل -->
                <div class="flex md:hidden cursor-pointer menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </div>
                <div class="hidden mobile-menu bg-blue-800 text-white p-4">
                    <ul class="space-y-2">
                        <li><a href="/" class="block hover:text-blue-300">{{ __('menu.home') }}</a></li>
                        <li><a href="/gallery" class="block hover:text-blue-300">{{ __('menu.gallery') }}</a></li>
                        <li><a href="/videos" class="block hover:text-blue-300">{{ __('menu.videos') }}</a></li>
                        <li><a href="/musics" class="block hover:text-blue-300">{{ __('menu.musics') }}</a></li>
                        <li><a href="/education" class="block hover:text-blue-300">{{ __('menu.education') }}</a></li>
                        <li><a href="/biography" class="block hover:text-blue-300">{{ __('menu.biography') }}</a></li>
                        <li><a href="/contact" class="block hover:text-blue-300">{{ __('menu.contact') }}</a></li>
                    </ul>
                </div>
            </nav>

            <!-- دکمه‌های تغییر زبان -->
            <div class="flex space-x-2">
                <a href="{{ route('lang.switch', ['locale' => 'fa']) }}" class="px-3 py-2 bg-black text-white rounded-md hover:bg-gray-700">
                    فارسی
                </a>
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="px-3 py-2 bg-black text-white rounded-md hover:bg-gray-700">
                    English
                </a>
            </div>
        </div>
    </header>

    <!-- بخش خوش‌آمدگویی -->
    <main class="w-full bg-gradient-to-b from-gray-900 via-gray-800 to-black text-white">
        <div class=" mx-auto px-4 mt-10 flex flex-col items-center h-[900px]">
            <!-- بلوک اصلی شما -->
            <div class="relative w-full h-full flex flex-col justify-center items-center overflow-hidden">
                <!-- نت‌های موسیقی -->
                <div class="absolute note animate-note">&#9835;</div>
                <div class="absolute note animate-note">&#9833;</div>
                <div class="absolute note animate-note">&#9834;</div>
                <div class="absolute note animate-note">&#9839;</div>
            </div>
        </div>
    </main>

    <!-- فوتر سایت -->
    <footer class="mt-10 w-full text-center text-gray-500">
        <small>&copy; {{ date('Y') }} تمام حقوق محفوظ است - وب‌سایت هنری آقای طغیانی</small>
    </footer>
    
    <!-- اسکریپت برای باز و بسته شدن منو موبایل -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuButton = document.querySelector('.menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

</body>
</html>
