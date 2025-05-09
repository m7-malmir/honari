<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل مدیریت | سایت هنری')</title>
    <!-- استایل‌های مورد نیاز -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <!-- سایدبار -->
    @include('partials.admin_sidebar')
    <!-- محتوای اصلی -->
    <div class="ml-60 p-8">
        @yield('content')
    </div>
</body>
</html>
