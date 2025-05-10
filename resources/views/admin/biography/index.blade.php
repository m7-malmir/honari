@extends('layouts.admin')

@section('title', 'مدیریت موسیقی‌ها')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-xl font-bold mb-4">لیست آموزشها</h1>

    <!-- جدول نمایش موسیقی‌ها -->
    <table class="table-auto border-collapse border border-gray-300 w-full text-sm">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="border border-gray-300 px-4 py-2">#</th>
                <th class="border border-gray-300 px-4 py-2">عنوان فارسی</th>
                <th class="border border-gray-300 px-4 py-2">عنوان انگلیسی</th>
                <th class="border border-gray-300 px-4 py-2">هنرمند</th>
                <th class="border border-gray-300 px-4 py-2">دسته‌بندی</th>
                <th class="border border-gray-300 px-4 py-2">کاور</th>
                <th class="border border-gray-300 px-4 py-2">عملیات</th>
            </tr>
        </thead>
        <tbody>
           
            <tr class="bg-gray-100 even:bg-gray-200">
                <td class="border border-gray-300 px-4 py-2"></td>
                <td class="border border-gray-300 px-4 py-2"></td>
                <td class="border border-gray-300 px-4 py-2"></td>
                <td class="border border-gray-300 px-4 py-2"></td>
                <td class="border border-gray-300 px-4 py-2"></td>
                <td class="border border-gray-300 px-4 py-2">
                    
                        <img src="" alt="کاور" class="w-16 h-16 object-cover">
                   
                        <span class="text-gray-500">بدون کاور</span>
                   
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <!-- دکمه ویرایش -->
                    <a href="" class="text-blue-500 hover:underline">ویرایش</a>
                    
                    <!-- فرم حذف -->
                    <form action="" method="POST" class="inline-block">
                        
                        <button type="submit" class="text-red-500 hover:underline ml-2"
                            onclick="return confirm('آیا مطمئن هستید؟')">حذف</button>
                    </form>
                </td>
            </tr>
            
            <tr>
                <td colspan="7" class="border border-gray-300 px-4 py-2 text-center">موسیقی‌ای یافت نشد.</td>
            </tr>
            
        </tbody>
    </table>

    <!-- دکمه افزودن موسیقی -->
    <div class="mt-4">
        <a href="{{ route('biography.create') }}" 
           class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">افزودن موسیقی</a>
    </div>
</div>
@endsection