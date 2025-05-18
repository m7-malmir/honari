@extends('layouts.app')
@section('title', app()->getLocale() == 'fa' ? 'آموزش‌ها' : 'Educations')

@section('content')
<div class="container mx-auto px-4 py-10 min-h-screen" dir="{{ app()->getLocale() == 'fa' ? 'rtl' : 'ltr' }}">
    <!-- توضیحات بالای صفحه -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-white mb-3">
            {{ app()->getLocale() == 'fa' ? 'همین الان یاد بگیر!' : "Start Learning Now!" }}
        </h1>
        <p class="text-gray-200 text-lg mb-1">
            {{ app()->getLocale() == 'fa' 
                ? 'چند دقیقه وقت بذار و یک نکته از گیتار کلاسیک رو یادبگیر'
                : "Spend a few minutes and learn a classical guitar tip!" }}
        </p>
        <p class="text-gray-400 text-md">
            {{ app()->getLocale() == 'fa'
                ? 'این ویدیوی نمونه‌ای از آموزش مجموعه گیتار کلاسیک است.'
                : "This is a sample video from the classical guitar series." }}
        </p>
    </div>

    <!-- لیست کارت آموزش‌ها -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- کارت آموزش اول -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <!-- تصویر و دکمه پلی -->
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'آموزش ریتم ۲/۴' : '2/4 Rhythm Lesson' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'آموزش ریتم ۲/۴ با مسعود' : '2/4 Rhythm Lesson with Masoud' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa' 
                        ? 'در این دوره آموزش ریتم ۲/۴ به همراه چند نکته کاربردی یادخواهید گرفت.'
                        : 'In this course, you will learn the 2/4 rhythm with practical tips.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: مسعود بابایی' : 'Instructor: Masoud Babaei' }}
                </p>
            </div>
        </div>
        <!-- کارت آموزش دوم -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'دوره گیتار' : 'Guitar Course' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'دوره گیتار با مهدی صفاتی - بخش ۶' : 'Guitar Course - Part 6 with Mehdi Saffati' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa' 
                        ? 'در این بخش از دوره آموزش گیتار، جزئیات بیشتری را مشاهده می‌کنید.'
                        : 'In this part of the guitar course, you will see more details.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: مهدی صفاتی' : 'Instructor: Mehdi Saffati' }}
                </p>
            </div>
        </div>
        <!-- کارت آموزش سوم -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'نگاهی کوتاه به ریتم' : 'A Short Look at Rhythm' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'نگاهی کوتاه به ریتم ۲/۴ با آرش یاسمینی' : 'A Short Look at 2/4 Rhythm with Arash Yasemini' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa'
                        ? 'نگاهی دقیق به اجرای ریتم ۲/۴ با آرش یاسمینی خواهید داشت.'
                        : 'You will have a closer look at performing 2/4 rhythm with Arash Yasemini.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: آرش یاسمینی' : 'Instructor: Arash Yasemini' }}
                </p>
            </div>
        </div>


        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <!-- تصویر و دکمه پلی -->
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'آموزش ریتم ۲/۴' : '2/4 Rhythm Lesson' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'آموزش ریتم ۲/۴ با مسعود' : '2/4 Rhythm Lesson with Masoud' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa' 
                        ? 'در این دوره آموزش ریتم ۲/۴ به همراه چند نکته کاربردی یادخواهید گرفت.'
                        : 'In this course, you will learn the 2/4 rhythm with practical tips.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: مسعود بابایی' : 'Instructor: Masoud Babaei' }}
                </p>
            </div>
        </div>
        <!-- کارت آموزش دوم -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'دوره گیتار' : 'Guitar Course' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'دوره گیتار با مهدی صفاتی - بخش ۶' : 'Guitar Course - Part 6 with Mehdi Saffati' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa' 
                        ? 'در این بخش از دوره آموزش گیتار، جزئیات بیشتری را مشاهده می‌کنید.'
                        : 'In this part of the guitar course, you will see more details.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: مهدی صفاتی' : 'Instructor: Mehdi Saffati' }}
                </p>
            </div>
        </div>
        <!-- کارت آموزش سوم -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'نگاهی کوتاه به ریتم' : 'A Short Look at Rhythm' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'نگاهی کوتاه به ریتم ۲/۴ با آرش یاسمینی' : 'A Short Look at 2/4 Rhythm with Arash Yasemini' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa'
                        ? 'نگاهی دقیق به اجرای ریتم ۲/۴ با آرش یاسمینی خواهید داشت.'
                        : 'You will have a closer look at performing 2/4 rhythm with Arash Yasemini.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: آرش یاسمینی' : 'Instructor: Arash Yasemini' }}
                </p>
            </div>
        </div>



        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <!-- تصویر و دکمه پلی -->
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'آموزش ریتم ۲/۴' : '2/4 Rhythm Lesson' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'آموزش ریتم ۲/۴ با مسعود' : '2/4 Rhythm Lesson with Masoud' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa' 
                        ? 'در این دوره آموزش ریتم ۲/۴ به همراه چند نکته کاربردی یادخواهید گرفت.'
                        : 'In this course, you will learn the 2/4 rhythm with practical tips.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: مسعود بابایی' : 'Instructor: Masoud Babaei' }}
                </p>
            </div>
        </div>
        <!-- کارت آموزش دوم -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'دوره گیتار' : 'Guitar Course' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'دوره گیتار با مهدی صفاتی - بخش ۶' : 'Guitar Course - Part 6 with Mehdi Saffati' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa' 
                        ? 'در این بخش از دوره آموزش گیتار، جزئیات بیشتری را مشاهده می‌کنید.'
                        : 'In this part of the guitar course, you will see more details.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: مهدی صفاتی' : 'Instructor: Mehdi Saffati' }}
                </p>
            </div>
        </div>
        <!-- کارت آموزش سوم -->
        <div class="relative bg-gray-900 rounded-xl shadow-lg overflow-hidden">
            <div class="relative">
                <img src="/images/All-kinds-of-musical-instruments.jpg"
                     alt="{{ app()->getLocale() == 'fa' ? 'نگاهی کوتاه به ریتم' : 'A Short Look at Rhythm' }}"
                     class="w-full h-52 object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
                <button class="absolute inset-0 flex items-center justify-center z-10">
                  <div class="bg-blue-700 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M8 5v14l11-7z"/>
                    </svg>
                  </div>
                </button>
            </div>
            <div class="p-4">
                <h2 class="text-white text-lg font-bold">
                    {{ app()->getLocale() == 'fa' ? 'نگاهی کوتاه به ریتم ۲/۴ با آرش یاسمینی' : 'A Short Look at 2/4 Rhythm with Arash Yasemini' }}
                </h2>
                <p class="text-gray-300 text-sm mt-1">
                    {{ app()->getLocale() == 'fa'
                        ? 'نگاهی دقیق به اجرای ریتم ۲/۴ با آرش یاسمینی خواهید داشت.'
                        : 'You will have a closer look at performing 2/4 rhythm with Arash Yasemini.' }}
                </p>
                <p class="text-gray-400 text-xs mt-2">
                    {{ app()->getLocale() == 'fa' ? 'مدرس: آرش یاسمینی' : 'Instructor: Arash Yasemini' }}
                </p>
            </div>
        </div>
    </div>
    <!-- دکمه مشاهده بیشتر -->
    <div class="text-center mt-10">
        <button class="bg-blue-700 text-white py-2 px-8 rounded-lg hover:bg-blue-800 transition">
            {{ app()->getLocale() == 'fa' ? 'مشاهده بیشتر آموزش‌ها' : 'See More Educations' }}
        </button>
    </div>
</div>
@endsection