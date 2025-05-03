@extends('layouts.app')

@section('title', 'خانه | وب‌سایت هنری آقای طغیانی')

@section('content')
    <div class="w-full bg-gradient-to-b from-gray-900 via-gray-800 to-black text-white">
        <div class="mx-auto px-4 flex flex-col items-center h-[900px]">
            <div class="relative w-full h-full flex flex-col justify-center items-center overflow-hidden">
                <!-- نت‌های موسیقی -->
                <div class="absolute note">&#9835;</div>
                <div class="absolute note">&#9833;</div>
                <div class="absolute note">&#9834;</div>
                <div class="absolute note">&#9839;</div>
                <!-- پروفایل آقای طغیانی -->
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
    </div>
@endsection