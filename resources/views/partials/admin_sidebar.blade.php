<div class="fixed top-0 left-0 h-full bg-blue-900 text-white w-60 flex flex-col">
    <div class="py-4 px-6">
        <h1 class="text-lg font-bold">پنل مدیریت</h1>
    </div>
    <nav class="flex flex-col mt-2">
        <a href="{{ route('admin.dashboard') }}" class="py-2 px-6 hover:bg-blue-700">داشبورد</a>
        <a href="{{ route('admin.videos.index') }}" class="py-2 px-6 hover:bg-blue-700">مدیریت ویدیوها</a>
        <a href="{{ route('admin.musics.index') }}" class="py-2 px-6 hover:bg-blue-700">مدیریت موسیقی‌ها</a>
        <a href="{{ route('admin.educations.index') }}" class="py-2 px-6 hover:bg-blue-700">مدیریت آموزش‌ها</a>
        <a href="{{ route('admin.biography.index') }}" class="py-2 px-6 hover:bg-blue-700">ویرایش بیوگرافی</a>
        <a href="{{ route('admin.contacts.index') }}" class="py-2 px-6 hover:bg-blue-700">پیام‌های تماس با ما</a>
    </nav>
    
</div>
