<section class="px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-2 h-[500px] shadow-sm dark:border-none bg-slate-50 dark:bg-slate-800 dark:bg-opacity-50 rounded-[10px]">
        <div class="relative col-span-2 pl-8 md:pl-16 sm:col-span-1 flex items-center md:justify-center">
            <div class="space-y-12">
                {{-- <p class="text-independence dark:text-slate-400 text-opacity-60 dark:text-opacity-60 text-lg tracking-wide">
                    I couldn’t think of something clever to say,<br> so I’ll just say this
                </p> --}}
                <h1 class="text-slate-300 text-opacity-80 text-6xl max-w-md md:text-7xl font-black leading-none dark:text-slate-700">
                    <span class="text-shadow-xs dark:text-shadow-xs-dark">I am a </span>
                    <span class="text-shadow text-deep-champagne">web</span>
                    <span class="text-shadow-xs dark:text-shadow-xs-dark">developer</span>
                </h1>
                <div class="inline-flex items-center space-x-4 text-base font-medium">
                    <a href="#reachMe" class="inline-block cursor-pointer bg-deep-champagne w-28 py-3 rounded-[10px] text-[#875805] text-center tracking-wide shadow-inner hover:shadow-sm dark:shadow-inner hover:bg-deep-champagne-darker transition duration-200 ease-linear" title="Go to reach me form">
                        Reach Me
                    </a>

                    <a href="#projects" class="inline-block cursor-pointer w-28 py-3 rounded-[10px] border-2 text-center tracking-wide text-slate-400/80 border-slate-300 hover:bg-slate-300 hover:text-white dark:text-slate-500 dark:border-slate-700 dark:hover:bg-slate-700 dark:hover:text-slate-300  transition duration-100 ease-linear" title="Go to projects section">
                        Projects
                    </a>
                </div>
            </div>

            <img class="w-7/12 max-w-xs absolute -bottom-24 right-2 sm:hidden" src="{{ asset('img/svg/coder.svg') }}" alt="">
        </div>

        <div class="hidden sm:flex flex-col items-center justify-center col-span-1 relative">
            <img class="w-11/12 max-w-sm" src="{{ asset('img/svg/coder.svg') }}" alt="Image">
            <img
                class="sm:w-[120%] sm:right-[15%] md:w-96 md:-left-1/2  lg:w-[100%] lg:-bottom-40 max-w-xl absolute -bottom-24"
                src="{{ asset('img/svg/code-thinking.svg') }}"
                alt="Image"
            >
        </div>
    </div>
</section>
