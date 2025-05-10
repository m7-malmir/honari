@extends('layouts.admin')

@section('title', 'داشبورد مدیریت')

@section('content')
<div class="bg-white rounded shadow p-8">
    <h2 class="text-2xl font-bold mb-4">خوش آمدید به پنل مدیریت!</h2>
    <p>شما می‌توانید محتوای سایت هنری را از این پنل مدیریت کنید.</p>
    <div class="grid grid-cols-2 gap-4 mt-6">
        <a href="{{ route('musics.index') }}" class="p-4 bg-blue-500 text-white rounded shadow hover:bg-blue-600">
            مدیریت موسیقی‌ها
        </a>
        <a href="{{ route('videos.index') }}" class="p-4 bg-green-500 text-white rounded shadow hover:bg-green-600">
            مدیریت ویدیوها
        </a>
        <a href="{{ route('educations.index') }}" class="p-4 bg-yellow-500 text-white rounded shadow hover:bg-yellow-600">
            مدیریت آموزش‌ها
        </a>
        <a href="{{ route('biography.index') }}" class="p-4 bg-pink-500 text-white rounded shadow hover:bg-pink-600">
            ویرایش بیوگرافی
        </a>
        <a href="{{ route('contacts.index') }}" class="p-4 bg-purple-500 text-white rounded shadow hover:bg-purple-600">
            پیام‌های تماس
        </a>
    </div>
</div>
@endsection
