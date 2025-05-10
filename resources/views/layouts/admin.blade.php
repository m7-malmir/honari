<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل مدیریت | سایت هنری')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <!-- سایدبار -->
    @include('partials.admin_sidebar')
    
    <!-- محتوای اصلی -->
    <div class="mr-60 p-8">  <!-- تغییر از ml-60 به mr-60 برای راست‌چین -->
        @yield('content')
    </div>
</body>
</html>
