<header dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}"
  class="w-full bg-dark-surface sticky top-0 z-30 transition-all duration-300
         py-4 shadow-none border-b-0"
  id="mainHeader"
>
<div class="container mx-auto flex items-center justify-between px-4 {{ app()->getLocale() === 'fa' ? 'text-right' : 'text-left' }}">
    <h1 class="text-lg md:text-xl text-white font-bold">
        {{ app()->getLocale() === 'fa' ? 'وب‌سایت هنری آقای طغیانی' : 'Mr. Taghiyani’s Art Website' }}
    </h1>
    {{-- منوی اصلی --}}
    <nav>
        <ul class="hidden md:flex {{ app()->getLocale() === 'fa' ? 'md:space-x-reverse md:space-x-4' : 'md:space-x-4' }} text-center text-white">
            <li class="ml-4"><a href="/" class="hover:text-blue-300">{{ __('menu.home') }}</a></li>
            <li class="ml-4"><a href="/videos" class="hover:text-blue-300">{{ __('menu.videos') }}</a></li>
            <li class="ml-4"><a href="/musics" class="hover:text-blue-300">{{ __('menu.musics') }}</a></li>
            <li class="ml-4"><a href="/educations" class="hover:text-blue-300">{{ __('menu.education') }}</a></li>
            <li class="ml-4"><a href="/biography" class="hover:text-blue-300">{{ __('menu.biography') }}</a></li>
            <li><a href="/contact" class="hover:text-blue-300">{{ __('menu.contact') }}</a></li>
        </ul>
        <div class="flex md:hidden cursor-pointer menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </div>
        <div class="hidden mobile-menu bg-blue-800 text-white p-4 absolute z-50 right-4 top-16 rounded shadow-lg">
            <ul class="space-y-2">
                <li><a href="/" class="block hover:text-blue-300">{{ __('menu.home') }}</a></li>
                <li><a href="/videos" class="block hover:text-blue-300">{{ __('menu.videos') }}</a></li>
                <li><a href="/musics" class="block hover:text-blue-300">{{ __('menu.musics') }}</a></li>
                <li><a href="/education" class="block hover:text-blue-300">{{ __('menu.education') }}</a></li>
                <li><a href="/biography" class="block hover:text-blue-300">{{ __('menu.biography') }}</a></li>
                <li><a href="/contact" class="block hover:text-blue-300">{{ __('menu.contact') }}</a></li>
            </ul>
        </div>
    </nav>
    {{-- دکمه‌های تغییر زبان --}}
    <div class="relative w-20 h-8 rounded-full shadow-md flex overflow-hidden">
        <!-- دکمه FA (نمایش فقط زمانی که زبان انگلیسی است) -->
        @if(app()->getLocale() === 'en')
            <a href="{{ route('lang.switch', ['locale' => 'fa']) }}"  
               class="flex-1 bg-purple-600 text-white font-bold text-xs flex items-center justify-center">
               FA
            </a>
        @endif
      
        <!-- دکمه ENG (نمایش فقط زمانی که زبان فارسی است) -->
        @if(app()->getLocale() === 'fa')
            <a href="{{ route('lang.switch', ['locale' => 'en']) }}"  
               class="flex-1 bg-orange-400 text-black font-bold text-xs flex items-center justify-center">
               ENG
            </a>
        @endif
    </div>
    
</div>
</header>
