@extends('layouts.app')

@section('content')
<div dir="rtl" class="bg-black text-white min-h-screen flex flex-col">
    <!-- محتوای اصلی -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- بخش چپ: اطلاعات آلبوم -->
        <div class="lg:w-1/3">
            <!-- کاور آلبوم + اطلاعات -->
            <img src="/images/album-cover.jpg" alt="Album Cover" class="rounded-lg w-full">
            <div class="mt-6">
                <h1 class="text-3xl font-bold">Picture Book</h1>
                <p class="text-yellow-400">Matthias Krauss</p>
                <p class="text-gray-400">Relaxing • Piano</p>
                <p class="text-gray-400">5 tracks • 12m • 2-4-2021</p>
                <div class="flex items-center gap-4 mt-4">
                    <!-- دکمه پخش -->
                    <button class="bg-yellow-400 text-black px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z" />
                        </svg>
                        پخش
                    </button>
                    <!-- تعداد علاقه‌مندی -->
                    <p class="text-gray-400">61 پسندیده شده</p>
                </div>
            </div>
        </div>

        <!-- بخش وسط: لیست ترک‌ها -->
        <div class="lg:w-2/3 bg-gray-800 rounded-lg overflow-hidden">
            <table class="table-auto w-full">
                <thead class="bg-gray-700 text-xs text-gray-400">
                    <tr>
                        <th class="p-3 text-center">#</th>
                        <th class="p-3 text-right">عنوان</th>
                        <th class="p-3 text-center">مدت زمان</th>
                        <th class="p-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ترک 1 -->
                    <tr class="border-b border-gray-600 text-sm text-gray-300 hover:bg-gray-700">
                        <td class="p-3 text-center">1</td>
                        <td class="p-3 text-right font-medium text-yellow-400">Broken Heart</td>
                        <td class="p-3 text-center">02:24</td>
                        <td class="p-3 flex justify-center gap-4">
                            <!-- آیکون دانلود -->
                            <button class="hover:text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6l16 12M4 18V6l16 12" />
                                </svg>
                            </button>
                            <!-- آیکون افزودن -->
                            <button class="hover:text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <!-- ترک‌های بعدی را در صورت نیاز اضافه کنید -->
                                        <!-- ترک 1 -->
                                        <tr class="border-b border-gray-600 text-sm text-gray-300 hover:bg-gray-700">
                                            <td class="p-3 text-center">1</td>
                                            <td class="p-3 text-right font-medium text-yellow-400">Broken Heart</td>
                                            <td class="p-3 text-center">02:24</td>
                                            <td class="p-3 flex justify-center gap-4">
                                                <!-- آیکون دانلود -->
                                                <button class="hover:text-yellow-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6l16 12M4 18V6l16 12" />
                                                    </svg>
                                                </button>
                                                <!-- آیکون افزودن -->
                                                <button class="hover:text-yellow-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ترک‌های بعدی را در صورت نیاز اضافه کنید -->
                                                            <!-- ترک 1 -->
                    <tr class="border-b border-gray-600 text-sm text-gray-300 hover:bg-gray-700">
                        <td class="p-3 text-center">1</td>
                        <td class="p-3 text-right font-medium text-yellow-400">Broken Heart</td>
                        <td class="p-3 text-center">02:24</td>
                        <td class="p-3 flex justify-center gap-4">
                            <!-- آیکون دانلود -->
                            <button class="hover:text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6l16 12M4 18V6l16 12" />
                                </svg>
                            </button>
                            <!-- آیکون افزودن -->
                            <button class="hover:text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <!-- ترک‌های بعدی را در صورت نیاز اضافه کنید -->
                                        <!-- ترک 1 -->
                                        <tr class="border-b border-gray-600 text-sm text-gray-300 hover:bg-gray-700">
                                            <td class="p-3 text-center">1</td>
                                            <td class="p-3 text-right font-medium text-yellow-400">Broken Heart</td>
                                            <td class="p-3 text-center">02:24</td>
                                            <td class="p-3 flex justify-center gap-4">
                                                <!-- آیکون دانلود -->
                                                <button class="hover:text-yellow-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6l16 12M4 18V6l16 12" />
                                                    </svg>
                                                </button>
                                                <!-- آیکون افزودن -->
                                                <button class="hover:text-yellow-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ترک‌های بعدی را در صورت نیاز اضافه کنید -->
                                                            <!-- ترک 1 -->
                    <tr class="border-b border-gray-600 text-sm text-gray-300 hover:bg-gray-700">
                        <td class="p-3 text-center">1</td>
                        <td class="p-3 text-right font-medium text-yellow-400">Broken Heart</td>
                        <td class="p-3 text-center">02:24</td>
                        <td class="p-3 flex justify-center gap-4">
                            <!-- آیکون دانلود -->
                            <button class="hover:text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6l16 12M4 18V6l16 12" />
                                </svg>
                            </button>
                            <!-- آیکون افزودن -->
                            <button class="hover:text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <!-- ترک‌های بعدی را در صورت نیاز اضافه کنید -->
                    
                </tbody>
            </table>
        </div>

        <!-- بخش راست: موسیقی‌های پیشنهادی -->
        <div class="lg:w-1/4">
            <h2 class="text-xl font-bold mb-4">از همین حس و حال</h2>
            <div class="flex flex-col gap-6">
                <!-- کارت 1 -->
                <div class="flex gap-4 items-center">
                    <img src="/images/recommend2.jpg" alt="Blooming Coffee Jazz" class="w-16 h-16 rounded-lg object-cover">
                    <div>
                        <h3 class="text-white font-medium">Blooming Coffee Jazz</h3>
                        <p class="text-gray-400 text-sm">James Butler</p>
                        <p class="text-gray-400 text-sm">Smooth Jazz</p>
                    </div>
                </div>
                <!-- کارت‌های دیگر را اضافه کنید -->
                                <!-- کارت 1 -->
                                <div class="flex gap-4 items-center">
                                    <img src="/images/recommend3.jpg" alt="Blooming Coffee Jazz" class="w-16 h-16 rounded-lg object-cover">
                                    <div>
                                        <h3 class="text-white font-medium">Blooming Coffee Jazz</h3>
                                        <p class="text-gray-400 text-sm">James Butler</p>
                                        <p class="text-gray-400 text-sm">Smooth Jazz</p>
                                    </div>
                                </div>
                                <!-- کارت‌های دیگر را اضافه کنید -->
                                                <!-- کارت 1 -->
                <div class="flex gap-4 items-center">
                    <img src="/images/recommend1.jpg" alt="Blooming Coffee Jazz" class="w-16 h-16 rounded-lg object-cover">
                    <div>
                        <h3 class="text-white font-medium">Blooming Coffee Jazz</h3>
                        <p class="text-gray-400 text-sm">James Butler</p>
                        <p class="text-gray-400 text-sm">Smooth Jazz</p>
                    </div>
                </div>
                <!-- کارت‌های دیگر را اضافه کنید -->
            </div>
        </div>
    </div>

    <!-- کنترلر موسیقی -->
    <div class="bg-gray-700 py-4 flex items-center justify-between px-6">
        <!-- کنترل‌های سمت چپ -->
        <div class="flex items-center gap-4">
            <button class="text-yellow-400 hover:text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z" />
                </svg>
            </button>
            <!-- آیکون‌های بعدی -->
        </div>
        <!-- تایمر -->
        <div class="text-gray-400 text-sm">00:00 / 02:24</div>
        <!-- کنترل صدا -->
        <button class="text-gray-400 hover:text-yellow-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5l6 6-6 6M5 5l6 6-6 6" />
            </svg>
        </button>
    </div>
</div>

@endsection