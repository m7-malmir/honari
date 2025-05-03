@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">لیست موزیک‌ها</h1>

    <a href="{{ route('musics.create') }}" class="text-white bg-blue-500 px-4 py-2 rounded">موزیک جدید</a>

    <table class="table-auto w-full mt-6">
        <thead>
            <tr>
                <th>عنوان فارسی</th>
                <th>عنوان انگلیسی</th>
                <th>خواننده</th>
                <th>فایل</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @forelse($musics as $music)
                <tr>
                    <td>{{ $music->title_fa }}</td>
                    <td>{{ $music->title_en }}</td>
                    <td>{{ $music->artist ?? '—' }}</td>
                    <td>
                        @if($music->file)
                            <a href="{{ asset('storage/' . $music->file) }}" target="_blank" class="text-blue-500">دانلود موزیک</a>
                        @else
                            بدون فایل
                        @endif
                    </td>
                    <td>
                        <form method="POST" action="{{ route('musics.destroy', $music->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-white bg-red-500 px-2 py-1 rounded">حذف</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">هیچ موزیکی موجود نیست.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection