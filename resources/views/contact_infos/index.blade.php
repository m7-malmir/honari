@extends('layouts.app')

@section('title', 'تماس با ما')

@section('content')
<div class="container mx-auto py-12 px-6">
    <!-- بخش معرفی و اطلاعات تماس -->
    <div class="text-center mb-12" dir="rtl">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">اطلاعات تماس</h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            اینجا می‌توانید اطلاعات تماس و دسترسی به آقای طغیانی را مشاهده کنید. 
            همچنین شما می‌توانید پیام‌های خود را به کمک فرم زیر ارسال کنید.
        </p>
    </div>

    <!-- نمایش اطلاعات تماس -->
    <div class="bg-white shadow-md p-6 rounded-lg mb-10" dir="rtl">
        <h2 class="text-2xl font-bold mb-4 text-blue-600">مشخصات تماس با آقای طغیانی</h2>
        <ul class="list-disc list-inside space-y-4 text-gray-700">
            <li><strong>آدرس:</strong> تهران، خیابان انقلاب</li>
            <li><strong>تلفن:</strong> 021-123456</li>
            <li><strong>ایمیل:</strong> 
                <a href="mailto:example@gmail.com" class="text-blue-500 hover:underline">
                    example@gmail.com
                </a>
            </li>
            <li><strong>اینستاگرام:</strong> 
                <a href="https://instagram.com/example" target="_blank" class="text-blue-500 hover:underline">
                    @example
                </a>
            </li>
            <li><strong>وضعیت:</strong> در حال پذیرش همکاری‌های هنری و برگزار‌کننده ورکشاپ‌ها</li>
        </ul>
    </div>

    <!-- فرم تماس -->
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6" dir="rtl">پیام خود را ارسال کنید</h2>

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" dir="rtl">
            @csrf

            <!-- نام کامل -->
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">نام کامل</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    required
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    placeholder="نام خود را وارد کنید">
            </div>

            <!-- ایمیل -->
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">ایمیل</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    required
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    placeholder="ایمیل خود را وارد کنید">
            </div>

            <!-- تلفن -->
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">تلفن</label>
                <input 
                    type="text" 
                    name="phone" 
                    id="phone"
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    placeholder="تلفن خود را وارد کنید (اختیاری)">
            </div>

            <!-- پیام -->
            <div>
                <label for="message" class="block mb-2 text-sm font-medium text-gray-700">پیام شما</label>
                <textarea 
                    name="message" 
                    id="message" 
                    rows="5" 
                    required
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    placeholder="پیام خود را اینجا بنویسید"></textarea>
            </div>

            <!-- دکمه ارسال -->
            <div class="text-center">
                <button 
                    type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 transition">
                    ارسال پیام
                </button>
            </div>
        </form>
    </div>
</div>
@endsection