<x-app-layout> <!-- 731 pixels -->
    <x-slot name="title">Osman Moharram - About</x-slot>
 {{-- //sm:h-[581px] --}}
    <div class="px-6 py-16 max-w-7xl mx-auto">
        <div class=" flex flex-col justify-between space-y-8  sm:flex-row sm:items-start sm:space-x-2 md:justify-center md:space-y-0 lg:space-x-48">
            <div class="max-w-md flex flex-col items-start space-y-12">
                <div class="tracking-wide text-independence dark:text-slate-300 text-opacity-60 space-y-4">
                    <p class="ml-1 text-base font-light">Hello, I am</p>
                    <h1 class="text-5xl lg:text-7xl text-deep-champagne font-black uppercase">
                        Osman Moharram
                    </h1>
                    <p class="text-base font-light">
                        Web Developer &bullet; Movies Enthusiast &bullet; Real Madrid FC Fan
                    </p>
                </div>
                <div class="flex items-center justify-center">
                    <a
                        href="/about/download"
                        class="inline-block cursor-pointer w-28 py-3 rounded-[10px] text-center tracking-wide bg-deep-champagne hover:bg-deep-champagne/80 text-white dark:text-slate-50 dark:hover:bg-deep-champagne-lighter transition duration-100 ease-linear"
                        title="Go to projects section"
                    >
                        Resume
                    </a>
                </div>
            </div>

            <div class="relative flex items-center justify-end drop-shadow-2xl">
                <div class="swiper my-swiper w-[312px] h-[320px]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('img/about/me1.jpg') }}" alt="Me1" class="rounded-[18px]">
                        </div>
                        <div class="swiper-slide flex justify-center items-center rounded-[18px]">
                            <img src="{{ asset('img/about/me2.jpg') }}" alt="Me2" class="rounded-[18px]">
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('img/about/me3.jpg') }}" alt="Me3" class="rounded-[18px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:px-28 pt-12 tracking-wide text-independence dark:text-slate-300 text-opacity-60">
            <span class="block ml-6 text-xl tracking-wide">Skills</span>
            <ul class="mt-4 grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-7 lg:grid-rows-2 lg:place-items-center gap-y-12">
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/laravel.svg') }}" alt="Laravel" class="w-16 h-16">
                    <span class="block mt-3">Laravel</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/symphony.svg') }}" alt="Symphony" class="w-16 h-w-16">
                    <span class="block mt-3">Symphony</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/php.svg') }}" alt="PHP" class="w-16 h-w-16">
                    <span class="block mt-3">PHP</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/alpine.js.svg') }}" alt="Alpine.js" class="w-16 h-w-16">
                    <span class="block mt-3">Apline.js</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/javascript.svg') }}" alt="Javascript" class="w-16 h-w-16">
                    <span class="block mt-3">Javascript</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/tailwindcss.svg') }}" alt="Tailwindcss" class="w-16 h-w-16">
                    <span class="block mt-3">Tailwindcss</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/bootstrap.svg') }}" alt="Bootstrap" class="w-16 h-w-16">
                    <span class="block mt-3">Bootstrap</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/sass.svg') }}" alt="Sass" class="w-16 h-w-16">
                    <span class="block mt-3">Sass</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/figma.svg') }}" alt="Figma" class="w-12 h-w-12">
                    <span class="block mt-3">Figma</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/git.svg') }}" alt="Git" class="w-16 h-w-16">
                    <span class="block mt-3">Git</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/mysql.svg') }}" alt="Mysql" class="w-16 h-w-16">
                    <span class="block mt-3">Mysql</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/wordpress.svg') }}" alt="Wordpress" class="w-16 h-w-16">
                    <span class="block mt-3">Wordpress</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/html.svg') }}" alt="HTML5" class="w-16 h-w-16">
                    <span class="block mt-3">HTML5</span>
                </li>
                <li class="flex flex-col items-center justify-center text-sm font-normal">
                    <img src="{{ asset('img/brands/css.svg') }}" alt="CSS" class="w-16 h-w-16">
                    <span class="block mt-3">CSS</span>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>















