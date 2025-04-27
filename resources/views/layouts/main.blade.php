<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Art Project')</title>
    @vite('resources/css/app.css') <!-- فایل کامپایل شده Tailwind -->
    <style>
        body { padding-top: 70px; } /* حاشیه بالا تنظیم‌شده مشابه حالت قبلی */
    </style>
</head>
<body class="bg-gray-100 rtl text-right">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white fixed top-0 left-0 w-full z-10 shadow-lg">
        <div class="container mx-auto flex items-center justify-between p-4">
            <a class="text-xl font-bold hover:text-gray-300" href="/">{{ __('messages.home') }}</a>
            <button class="block lg:hidden text-gray-200 hover:text-gray-400 focus:outline-none" aria-label="Toggle Navigation">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden lg:flex items-center">
                <ul class="flex space-x-4 space-x-reverse">
                    <li><a href="/educations" class="hover:text-gray-300">{{ __('messages.education') }}</a></li>
                    <li><a href="/videos" class="hover:text-gray-300">{{ __('messages.videos') }}</a></li>
                    <li><a href="/biographies" class="hover:text-gray-300">{{ __('messages.biographies') }}</a></li>
                    <li><a href="/categories" class="hover:text-gray-300">{{ __('messages.categories') }}</a></li>
                    <li><a href="/musics" class="hover:text-gray-300">{{ __('messages.musics') }}</a></li>
                    <li><a href="/contact_infos" class="hover:text-gray-300">{{ __('messages.contact') }}</a></li>
                    <li><a href="/messages" class="hover:text-gray-300">{{ __('messages.messages') }}</a></li>
                </ul>
                <ul class="flex space-x-4 space-x-reverse ml-4">
                    <li><a href="{{ route('lang.switch', ['locale' => 'fa']) }}" class="hover:text-gray-300">FA</a></li>
                    <li><a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="hover:text-gray-300">EN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mx-auto mt-16">
        @yield('content')
    </div>

</body>
</html>
