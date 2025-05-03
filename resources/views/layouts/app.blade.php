<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'وب‌سایت هنری آقای طغیانی')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col font-sans text-gray-700">
    {{-- هدر --}}
    @include('partials.header')

    {{-- محتوای صفحه --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- فوتر --}}
    @include('partials.footer')

    {{-- اسکریپت‌های اختصاصی هر صفحه --}}
    @yield('scripts')
</body>
</html>