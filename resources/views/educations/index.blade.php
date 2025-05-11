@extends('layouts.app')
@section('title', __('آموزش‌ها'))

@section('content')
<div dir="rtl" class="bg-black py-8 px-4">
    <div class="container mx-auto">
        <!-- متن توضیحات -->
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-white mb-4">همین الان یاد بگیر!</h1>
            <p class="text-white text-lg">
                چند دقیقه وقت بذار و یک نکته از گیتار کلاسیک رو یادبگیر
            </p>
            <p class="text-white text-md">
                این ویدیوی نمونه‌ای از آموزش مجموعه گیتار کلاسیک است. بخشش کن تا با شیوه و سبک آموزش بهتر آشنا شوی.
            </p>
        </div>

        <!-- کارت ویدیو -->
        <div class="relative mx-auto max-w-3xl bg-white shadow-md rounded-lg overflow-hidden">
            <div class="absolute inset-x-0 inset-y-0 flex justify-center items-center">
                <!-- دکمه Play -->
                <button class="bg-blue-700 flex items-center px-6 py-2 text-white rounded-lg shadow-md hover:bg-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z" />
                    </svg>
                    ویدیو
                </button>
            </div>
        </div>

        <!-- توضیحات پایین -->
        <div class="text-center mt-8">
            <p class="text-white text-lg">
                <span class="text-blue-700 font-bold hover:underline cursor-pointer">۴ دلیل</span> برای اینکه چرا عاشق یادگیری گیتار کلاسیک می‌شوید.
            </p>
        </div>
    </div>
</div>
<div dir="rtl" class="bg-black py-8 px-4">
    <div class="container mx-auto">
        <!-- لیست کارت‌ها -->
        <div class="grid grid-cols-1 gap-6">

            <!-- کارت اول -->
            <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row overflow-hidden">
                <!-- تصویر -->
                <div class="w-full md:w-1/4 bg-gray-300 flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="/images/All-kinds-of-musical-instruments.jpg" alt="آموزش ریتم 2/4">
                </div>
                <!-- اطلاعات متن -->
                <div class="flex-1 p-6">
                    <h2 class="text-xl font-bold text-blue-700">آموزش ریتم ۲/۴ با مسعود</h2>
                    <p class="text-grey-600 mt-2">در این دوره آموزش ریتم ۲/۴ به همراه چند نکته کاربردی یادخواهید گرفت.</p>
                    <p class="text-sm text-grey-600 mt-4">مدرس: مسعود بابایی</p>
                </div>
                <!-- لینک ادامه مطلب -->
                <div class="p-4 flex items-end">
                    <a href="/lessons/1" class="text-blue-700 text-sm hover:underline">ادامه مطلب ←</a>
                </div>
            </div>

            <!-- کارت دوم -->
            <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row overflow-hidden">
                <!-- تصویر -->
                <div class="w-full md:w-1/4 bg-gray-300 flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="/images/All-kinds-of-musical-instruments.jpg" alt="دوره گیتار">
                </div>
                <!-- اطلاعات متن -->
                <div class="flex-1 p-6">
                    <h2 class="text-xl font-bold text-blue-700">دوره گیتار با مهدی صفاتی - بخش ۶</h2>
                    <p class="text-grey-600 mt-2">در این بخش از دوره آموزش گیتار، جزئیات بیشتری را مشاهده می‌کنید.</p>
                    <p class="text-sm text-grey-600 mt-4">مدرس: مهدی صفاتی</p>
                </div>
                <!-- لینک ادامه مطلب -->
                <div class="p-4 flex items-end">
                    <a href="/lessons/2" class="text-blue-700 text-sm hover:underline">ادامه مطلب ←</a>
                </div>
            </div>

            <!-- کارت سوم -->
            <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row overflow-hidden">
                <!-- تصویر -->
                <div class="w-full md:w-1/4 bg-gray-300 flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="/images/All-kinds-of-musical-instruments.jpg" alt="نگاهی کوتاه به ریتم">
                </div>
                <!-- اطلاعات متن -->
                <div class="flex-1 p-6">
                    <h2 class="text-xl font-bold text-blue-700">نگاهی کوتاه به ریتم ۲/۴ با آرش یاسمینی</h2>
                    <p class="text-grey-600 mt-2">نگاهی دقیق به اجرای ریتم ۲/۴ با آرش یاسمینی خواهید داشت.</p>
                    <p class="text-sm text-grey-600 mt-4">مدرس: آرش یاسمینی</p>
                </div>
                <!-- لینک ادامه مطلب -->
                <div class="p-4 flex items-end">
                    <a href="/lessons/3" class="text-blue-700 text-sm hover:underline">ادامه مطلب ←</a>
                </div>
            </div>

        </div>

        <!-- دکمه مشاهده مطالب بیشتر -->
        <div class="text-center mt-8">
            <button class="bg-blue-700 text-white py-2 px-6 rounded-lg hover:bg-blue-800 transition">
                مشاهده بیشتر
            </button>
        </div>
    </div>
</div>

@endsection