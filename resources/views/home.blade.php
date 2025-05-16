@extends('layouts.app')

@section('title', 'خانه | وب‌سایت هنری آقای طغیانی')
@section('body-class', 'bg-black ')
@section('canvas')
<!-- Canvas element for animation -->
<canvas id="bgCanvas"></canvas>
@endsection

@section('content')
<div class="relative w-screen h-screen flex items-center justify-center bg-black bg-opacity-60">
    <div class="bg-white bg-opacity-10 border border-white border-opacity-20 rounded-2xl p-10 max-w-4xl text-white flex gap-8 z-20 backdrop-filter backdrop-blur-lg">
        
        <!-- تصویر پروفایل -->
        <div class="profile-image">
            <img 
                src="{{ asset('images/elyas_toghyani.jpg') }}" 
                alt="آقای طغیانی" 
                class="object-cover"
                style="width: 300px; height: 370px; border-radius: 0; object-fit: cover;">
        </div>

        <!-- اطلاعات پروفایل -->
        <div class="profile-info">
            <h2 class="text-2xl font-bold mb-4">آقای طغیانی</h2>
            <p class="text-base leading-6">هنرمند، موسیقی‌دان و خالق این اثر هنری</p>
            <p class="text-base leading-6">آقای طغیانی با سال‌ها تجربه در زمینه موسیقی و هنر، آثار بی‌نظیری را خلق کرده‌اند.</p>
            <p class="text-base leading-6">ایشان در زمینه‌های مختلف هنری فعالیت دارند و همواره در تلاش برای ارائه آثار با کیفیت و متفاوت هستند.</p>
            <p class="text-base leading-6">هدف اصلی ایشان ارائه هنر به شکلی است که بتواند بر دل مخاطب نشسته و احساسات او را برانگیزد.</p>
            <p class="text-base leading-6">برای کسب اطلاعات بیشتر و مشاهده آثار ایشان، می‌توانید از طریق لینک‌های زیر اقدام نمایید.</p>
        </div>

    </div>
</div>
@endsection