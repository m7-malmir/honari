<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', app()->getLocale() === 'fa' ? 'وب‌سایت هنری آقای طغیانی' : "Mr. Taghiyani’s Art Website")</title>
    <link rel="stylesheet" href="https://cdn.fontcdn.ir/Font/Persian/Vazirmatn/WebFont/css/vazirmatn.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@yield('body-class') font-vazir bg-dark-bg min-h-screen flex flex-col text-gray-700">
    @if(View::hasSection('canvas'))
        <canvas id="bgCanvas"></canvas>
    @endif

    {{-- هدر --}}
    @include('partials.header')

    {{-- محتوای صفحه --}}
    <main class="flex-1 ">
        @yield('content')
    </main>

    {{-- فوتر --}}
    @include('partials.footer')

    {{-- اسکریپت‌های اختصاصی هر صفحه --}}
    @yield('scripts')
</body>
</html>
