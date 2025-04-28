<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وب‌سایت هنری آقای طغیانی</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* استایل سفارشی برای انیمیشن نت ها و پروفایل */
        .note {
            position: absolute;
            color: white;
            font-size: 30px;
            animation: moveAndFade 5s linear infinite;
        }
        @keyframes moveAndFade {
            0% { left: -100px; opacity: 1;}
            100% { left: 100vw; opacity: 0;}
        }
        /* === پروفایل بزرگتر و چشمگیرتر === */
        .profile-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: row-reverse;
            width: 75%;
            max-width: 850px;
            min-height: 280px;
            padding: 25px 15px;
            background-color: rgba(0, 0, 0, 0.62);
            border-radius: 22px;
            box-shadow: 0 4px 24px 6px rgba(0,0,0,.23);
            z-index: 10;
            text-align: right;
            direction: rtl;
        }
        .profile-image {
            width: 235px;
            height: 235px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 45px;
            flex-shrink: 0;
            box-shadow: 0 2px 20px 1px rgba(0,0,0,.13);
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }
        .profile-info {
            width: 100%;
            color: #fff;
            text-align: right;
            font-size: 1.15rem;
            line-height: 2.2rem;
        }
        .profile-info h2 {
            font-size: 2.55rem;
            margin-bottom: 22px;
            font-weight: 800;
        }
        /* ریسپانسیو */
        @media (max-width: 900px) {
            .profile-container {
                flex-direction: column;
                min-height: unset;
                padding: 34px 9px;
                width: 98%;
                max-width: 600px;
            }
            .profile-image {
                margin-right: 0;
                margin-bottom: 30px;
                width: 170px !important;
                height: 170px !important;
            }
            .profile-info {
                font-size: 1.08rem;
                text-align: center;
            }
            .profile-info h2 {
                font-size: 1.45rem;
            }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-start font-sans text-gray-700">

    <!-- هدر سایت -->
    <header dir="rtl" class="w-full bg-blue-800 py-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-4">
            <h1 class="text-lg md:text-xl text-white font-bold">
                وب‌سایت هنری آقای طغیانی
            </h1>
            <!-- منو اصلی -->
            <nav>
                <ul class="hidden md:flex md:space-x-4 text-center text-white">
                    <li><a href="/" class="hover:text-blue-300">{{ __('menu.home') }}</a></li>
                    <li><a href="/gallery" class="hover:text-blue-300">{{ __('menu.gallery') }}</a></li>
                    <li><a href="/videos" class="hover:text-blue-300">{{ __('menu.videos') }}</a></li>
                    <li><a href="/musics" class="hover:text-blue-300">{{ __('menu.musics') }}</a></li>
                    <li><a href="/education" class="hover:text-blue-300">{{ __('menu.education') }}</a></li>
                    <li><a href="/biography" class="hover:text-blue-300">{{ __('menu.biography') }}</a></li>
                    <li><a href="/contact" class="hover:text-blue-300">{{ __('menu.contact') }}</a></li>
                </ul>
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
                <a href="{{ route('lang.switch', ['locale' => 'fa']) }}" class="px-3 py-2 bg-black text-white rounded-md hover:bg-gray-700">فارسی</a>
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="px-3 py-2 bg-black text-white rounded-md hover:bg-gray-700">English</a>
            </div>
        </div>
    </header>

    <!-- بخش خوش‌آمدگویی -->
    <main class="w-full bg-gradient-to-b from-gray-900 via-gray-800 to-black text-white">
        <div class="mx-auto px-4 mt-10 flex flex-col items-center h-[900px]">

            <!-- بلوک اصلی شما -->
            <div class="relative w-full h-full flex flex-col justify-center items-center overflow-hidden">
                <!-- نت‌های موسیقی -->
                <div class="absolute note">&#9835;</div>
                <div class="absolute note">&#9833;</div>
                <div class="absolute note">&#9834;</div>
                <div class="absolute note">&#9839;</div>

                <!-- پروفایل آقای طغیانی (بزرگ‌تر و چشم‌گیرتر) -->
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="{{ asset('images/profile.png') }}" alt="آقای طغیانی">
                    </div>
                    <div class="profile-info">
                        <h2>آقای طغیانی</h2>
                        <p>هنرمند، موسیقی‌دان و خالق این اثر هنری</p>
                        <p>آقای طغیانی با سال‌ها تجربه در زمینه موسیقی و هنر، آثار بی‌نظیری را خلق کرده‌اند.</p>
                        <p>ایشان در زمینه‌های مختلف هنری فعالیت دارند و همواره در تلاش برای ارائه آثار با کیفیت و متفاوت هستند.</p>
                        <p>هدف اصلی ایشان ارائه هنر به شکلی است که بتواند بر دل مخاطب نشسته و احساسات او را برانگیزد.</p>
                        <p>برای کسب اطلاعات بیشتر و مشاهده آثار ایشان، می‌توانید از طریق لینک‌های زیر اقدام نمایید.</p>
                    </div>
                </div>

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
