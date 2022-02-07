<section class="px-6">
    <div class="relative max-w-7xl mx-auto grid grid-cols-2 h-[500px] shadow-sm dark:border-none bg-slate-50 dark:bg-slate-800 dark:bg-opacity-50 rounded-[10px]">
        <div class="col-span-2 pl-8 md:pl-16 sm:col-span-1 flex items-center md:justify-center">
            <div class="space-y-12">
                <h1 class="text-slate-300 text-opacity-80 text-6xl max-w-md md:text-7xl font-black leading-none dark:text-slate-700">
                    <span class="text-shadow-xs dark:text-shadow-xs-dark">I am a </span>
                    <span class="text-shadow text-deep-champagne">web</span>
                    <span class="text-shadow-xs dark:text-shadow-xs-dark">developer</span>
                </h1>
                <div class="inline-flex items-center space-x-4 text-base font-medium">
                    <a
                        href="#projects"
                        class="inline-block cursor-pointer w-28 py-3 rounded-[10px] text-center tracking-wide bg-deep-champagne hover:bg-deep-champagne-lighter text-independence/70 transition duration-100 ease-linear"
                        title="Go to projects section"
                    >
                        Projects
                    </a>

                    <a
                        href="/about/download"
                        class="inline-block cursor-pointer w-28 py-3 rounded-[10px] text-center tracking-wide border-2 border-slate-300 hover:bg-slate-300 text-slate-400 hover:text-white dark:text-slate-600 dark:hover:text-white dark:border-slate-700 dark:hover:bg-slate-700 transition duration-100 ease-linear"
                        target="_blank"
                        title="Go to projects section"
                    >
                        Resume
                    </a>
                </div>
            </div>


            <img class="w-64 absolute -bottom-24 right-3.5 sm:w-80 md:w-96 lg:hidden" src="{{ asset('img/svg/coder2.svg') }}" alt="">
        </div>

        <div class="hidden lg:flex flex-col items-center justify-center col-span-1 relative">
            <img class="absolute -left-32 -bottom-32 w-full" src="{{ asset('img/svg/coder.svg') }}" alt="Image">
        </div>
    </div>
</section>
