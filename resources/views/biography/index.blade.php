@extends('layouts.app')

@section('title', 'مجموعه آثار | وب‌سایت هنری آقای طغیانی')

@section('content')


<div style="max-width: 600px; margin: 30px auto; background: #fffbea; border-radius: 18px; box-shadow:0 4px 24px #f6e8d1; padding: 2.5rem 2rem 2rem 2rem; font-family: vazirmatn, Tahoma, Arial, sans-serif; direction: rtl;">
    <div style="text-align: center; margin-bottom: 18px;">
        @if($bio->profile_image)
            <img src="{{ asset('storage/' . $bio->profile_image) }}" alt="پروفایل" style="width: 140px; height: 140px; object-fit: cover; object-position: center top; border-radius: 50%; border: 5px solid #edb464; background: #fff5e5; display: block; margin: 0 auto 10px auto;">
        @else
            <div style="width:140px;height:140px;border-radius:50%;background:#eee;display:flex;align-items:center;justify-content:center;font-size:36px;color:#ccc;margin:0 auto 10px auto;">
                <span>?</span>
            </div>
        @endif
        <h2 style="margin: 0; color: #cb912f; font-size: 1.6rem;">{{ $bio->full_name_fa }}</h2>
        <div style="color:#888;font-size:1.05rem;padding-bottom:4px;">{{ $bio->full_name_en }}</div>
        @if($bio->birth_date)
            <span style="color:#b39c6a;font-size:1rem">تاریخ تولد: {{ \Morilog\Jalali\Jalalian::fromDateTime($bio->birth_date)->format('Y/m/d') }}</span>
        @endif
    </div>
    <div style="line-height: 2; font-size: 1.12rem; color:#444; margin-bottom:22px;">
        <p style="margin-bottom: 6px;">{{ $bio->bio_fa }}</p>
        <p style="color:#666;font-size:0.99rem; direction:ltr; margin-top:12px">{{ $bio->bio_en }}</p>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content:center; align-items: center; gap: 12px; margin-bottom: 14px;">
        @if($bio->website)
            <a href="{{ $bio->website }}" style="color:#765e36;background: #ffe1a6; padding: 5px 12px; border-radius: 8px; text-decoration: none; font-size:1rem;" target="_blank">
                وبسایت
            </a>
        @endif
        @if($bio->instagram)
            <a href="https://instagram.com/{{ ltrim($bio->instagram, '@') }}" style="color:white; background:#e1306c; padding:6px 12px; border-radius:8px; text-decoration:none;display:flex;align-items:center;font-size:1rem;" target="_blank">
                <svg width="18" height="18" style="margin-left:3px;" viewBox="0 0 448 512"><path fill="white" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9 0 63.6 51.3 114.9 114.9 114.9 63.6 0 114.9-51.3 114.9-114.9 0-63.6-51.3-114.9-114.9-114.9zm0 186.6c-39.6 0-71.7-32.1-71.7-71.7s32.1-71.7 71.7-71.7 71.7 32.1 71.7 71.7-32.1 71.7-71.7 71.7zm146.4-194.3c0 14.9-12 27-27 27s-27-12-27-27 12-27 27-27 27 12 27 27zm76.1 27.2c-1.7-35.3-9.9-66.8-36.2-92.1C397.8 9.9 366.3 1.7 331 0 295.7-1.7 256.3 0 221 0s-74.7-1.7-110 .1c-35.3 1.7-66.8 9.9-92.1 36.2C9.9 49.8 1.7 81.2 0 116.5c-1.7 35.3.1 74.7.1 110s-1.7 74.7.1 110c1.7 35.3 9.9 66.8 36.2 92.1C49.8 502.1 81.2 510.3 116.5 512c35.3 1.7 74.7-.1 110-.1s74.7 1.7 110-.1c35.3-1.7 66.8-9.9 92.1-36.2 26.3-25.3 34.5-56.8 36.2-92.1 1.7-35.3-.1-74.7-.1-110s1.7-74.7-.1-110zM398.8 388c-7.8 19.6-22.9 34.7-42.5 42.5-29.6 11.9-99.7 9.2-133-1.2-23-7.4-42.7-25.3-50.1-48.2-10.4-33.3-13.1-103.4-1.2-133 7.8-19.6 22.9-34.7 42.5-42.5 29.6-11.9 99.7-9.2 133 1.2 23 7.4 42.7 25.3 50.1 48.2 10.4 33.3 13.1 103.4 1.2 133z"/></svg>
                اینستاگرام
            </a>
        @endif
        @if($bio->twitter)
            <a href="https://twitter.com/{{ ltrim($bio->twitter, '@') }}" style="color:white;background:#1da1f2;padding:6px 12px;border-radius:8px;text-decoration:none;display:flex;align-items:center;font-size: 1rem;" target="_blank">
                <svg width="18" height="18" style="margin-left:3px;" viewBox="0 0 512 512"><path fill="white" d="M459.37 151.716h.01c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.461-.975-85.55-31.188-99.036-72.772 6.498.974 13.32 1.623 20.833 1.623 9.421 0 18.843-1.299 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c14.182 7.885 30.355 12.67 47.431 13.319-28.264-18.843-46.462-51.005-46.462-87.391 0-19.49 5.197-37.36 14.507-52.954 52.954 64.3 132.366 106.522 221.709 111.123-1.624-7.885-2.599-15.77-2.599-24.204 0-58.017 47.431-105.122 105.122-105.122 30.355 0 57.61 12.67 76.67 33.137 24.204-4.548 47.105-13.646 67.665-25.34-7.885 24.681-24.456 45.425-46.132 58.34 21.565-2.274 42.472-8.273 61.609-16.568-14.292 21.247-32.161 39.771-52.628 54.663z"/></svg>
                توئیتر
            </a>
        @endif
        @if($bio->telegram)
            <a href="https://t.me/{{ ltrim($bio->telegram, '@') }}" style="color:white;background:#229ed9;padding:6px 12px; border-radius:8px; text-decoration:none;display:flex;align-items:center;font-size: 1rem;" target="_blank">
                <svg width="18" height="18" style="margin-left:3px;" viewBox="0 0 496 512"><path fill="white" d="M248 8C111.033 8 0 119.033 0 256s111.033 248 248 248 248-111.033 248-248S384.967 8 248 8zm90.035 356.641c-3.92 16.722-19.205 34.905-33.838 37.337-37.069 6.234-72.014-6.545-143.698-56.01-43.91-30.784-76.534-56.748-108.109-81.666-11.518-9.078-16.27-24.823-8.236-37.167 8.394-12.877 24.09-14.113 41.314-7.573 18.204 6.857 158.667 65.732 198.608 82.036 45.009 17.857 51.236-13.15 36.566-28.174-13.977-14.077-70.361-54.129-108.849-79.462-3.346-2.124-7.554-2.808-11.261-1.676-16.147 4.701-46.972 18.088-57.83 22.148-13.91 5.06-27.858-4.704-29.847-19.219-2.851-23.065 13.782-49.473 44.709-63.532 26.486-11.658 58.557-7.363 80.964 10.593 34.65 27.454 84.609 77.925 142.826 170.343 6.938 10.872 6.363 24.43-2.174 34.553z"/></svg>
                تلگرام
            </a>
        @endif
    </div>

</div>

@endsection