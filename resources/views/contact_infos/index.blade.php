@extends('layouts.app')

@section('title', 'تماس با ما')

@section('content')
    <div class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">تماس با ما</h1>

        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- نام کامل -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">نام کامل</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="نام خود را وارد کنید">
                </div>

                <!-- ایمیل -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">ایمیل</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="ایمیل خود را وارد کنید">
                </div>

                <!-- تلفن -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">تلفن</label>
                    <input type="text" name="phone" id="phone"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="تلفن خود را وارد کنید (اختیاری)">
                </div>

                <!-- پیام -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">پیام</label>
                    <textarea name="message" id="message" rows="4" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="پیام خود را بنویسید"></textarea>
                </div>

                <!-- دکمه ارسال -->
                <div class="text-center">
                    <button type="submit"
                        class="px-5 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 transition">
                        ارسال پیام
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
