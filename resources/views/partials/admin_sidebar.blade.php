<div class="fixed top-0 right-0 h-full bg-blue-900 text-white w-60 flex flex-col">
    <div class="py-4 px-6">
        <h1 class="text-lg font-bold text-right">پنل مدیریت</h1>
    </div>
    <nav class="flex flex-col mt-2">
        <a href="{{ route('admin.dashboard') }}" class="py-2 px-6 hover:bg-blue-700 text-right">داشبورد</a>
        <a href="{{ route('videos.index') }}" class="py-2 px-6 hover:bg-blue-700 text-right">مدیریت ویدیوها</a>
        <a href="{{ route('musics.index') }}" class="py-2 px-6 hover:bg-blue-700 text-right">مدیریت موسیقی‌ها</a>
        <a href="{{ route('educations.index') }}" class="py-2 px-6 hover:bg-blue-700 text-right">مدیریت آموزش‌ها</a>
        <a href="{{ route('biography.index') }}" class="py-2 px-6 hover:bg-blue-700 text-right">ویرایش بیوگرافی</a>
        <a href="{{ route('contacts.index') }}" class="py-2 px-6 hover:bg-blue-700 text-right">پیام‌های تماس با ما</a>
    </nav>
</div>
