@extends('layouts.app')

@section('title', app()->getLocale() == 'fa' ? 'ویدیوها' : 'Videos')

@section('content')
<div dir="rtl" class="bg-black py-8 px-4">
    <div class="container mx-auto">
        <!-- گالری -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- کارت تصویر 1 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/images/gallery1.jpg" alt="امکانات مجموعه" class="rounded-lg object-cover w-full h-48">
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">امکانات مجموعه</h3>
                    <p class="text-sm text-gray-500">1397/05/24 (22)</p>
                </div>
            </div>
            
            <!-- کارت تصویر 2 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/images/gallery2.jpg" alt="ارکستر کلاسیک" class="rounded-lg object-cover w-full h-48">
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">ارکستر کلاسیک</h3>
                    <p class="text-sm text-gray-500">1397/05/07 (11)</p>
                </div>
            </div>

            <!-- کارت تصویر 3 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/images/gallery3.jpg" alt="ارکستر طنز" class="rounded-lg object-cover w-full h-48">
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">ارکستر طنز</h3>
                    <p class="text-sm text-gray-500">1397/06/11 (4)</p>
                </div>
            </div>
            
            <!-- کارت تصویر 4 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/images/recommend1.jpg" alt="گروه تنبک نوازان" class="rounded-lg object-cover w-full h-48">
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">گروه تنبک نوازان</h3>
                    <p class="text-sm text-gray-500">1397/05/24 (5)</p>
                </div>
            </div>

            <!-- کارت تصویر 5 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/images/recommend2.jpg" alt="گروه دف نوازان" class="rounded-lg object-cover w-full h-48">
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">گروه دف نوازان</h3>
                    <p class="text-sm text-gray-500">1397/05/24 (7)</p>
                </div>
            </div>

            <!-- کارت تصویر 6 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/images/recommend3.jpg" alt="اجرای تکنوازی" class="rounded-lg object-cover w-full h-48">
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">اجرای تکنوازی</h3>
                    <p class="text-sm text-gray-500">1397/05/24 (8)</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection