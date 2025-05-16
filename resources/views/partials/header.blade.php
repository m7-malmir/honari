<header dir="rtl" class="w-full bg-dark-surface py-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between px-4">
        <h1 class="text-lg md:text-xl text-white font-bold">
            وب‌سایت هنری آقای طغیانی
        </h1>
        {{-- منوی اصلی --}}
        <nav>
            <ul class="hidden md:flex md:space-x-reverse md:space-x-4 text-center text-white">
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
        <div class="relative w-28 h-8 rounded-full shadow-md flex overflow-hidden">
            <!-- بخش فارسی -->
            <a href="{{ route('lang.switch', ['locale' => 'fa']) }}"  
               class="flex-1 bg-purple-600 text-white font-bold text-xs flex items-center justify-center">
              FA
            </a>
          
            <!-- جداکننده مورب -->
            <div class="w-0 h-0 border-t-[32px] border-t-purple-600 border-l-[28px] border-l-orange-400"></div>
          
            <!-- بخش انگلیسی -->
            <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
               class="flex-1 bg-orange-400 text-black font-bold text-xs flex items-center justify-center">
              ENG
            </a>
          </div>
        
    </div>
    @section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuButton = document.querySelector('.menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
    @show
</header>