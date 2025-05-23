@extends('layouts.admin')

@section('title', 'مدیریت موسیقی‌ها')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-xl font-bold mb-4">لیست ویدیوها</h1>

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
            @forelse($videos as $video)
            <tr class="bg-gray-100 even:bg-gray-200">
                <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $video->title_fa }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $video->title_en }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $video->artist ?? 'نامشخص' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $video->category->name ?? 'بدون دسته‌بندی' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    @if($video->cover)
                        <img src="{{ asset('storage/' . $video->cover) }}" alt="کاور" class="w-16 h-16 object-cover">
                    @else
                        <span class="text-gray-500">بدون کاور</span>
                    @endif
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <!-- دکمه ویرایش -->
                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="text-blue-500 hover:underline">ویرایش</a>
                    
                    <!-- فرم حذف -->
                    <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2"
                            onclick="return confirm('آیا مطمئن هستید؟')">حذف</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="border border-gray-300 px-4 py-2 text-center">ویدیویی یافت نشد.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- دکمه افزودن موسیقی -->
    <div class="mt-4">
        <a href="{{ route('videos.create') }}" 
           class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">افزودن ویدیو</a>
    </div>
</div>
@endsection