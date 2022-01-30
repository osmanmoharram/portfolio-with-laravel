@props([
    'title' => '',
    'tools' => [],
    'links' => [],
    'images' => [],
    'disable' => false
])

<div {{ $attributes->merge(['class' => 'fixed z-10 inset-0 overflow-y-auto']) }} aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-show="{{ $attributes->get('x-show') }}"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
        ></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-show="{{ $attributes->get('x-show') }}"
            class="inline-block align-bottom bg-white dark:bg-slate-800 rounded-[10px] text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle w-11/12 max-w-7xl"
        >
            <p class="{{ $links['live']['disable'] === 'true' ? 'block' : 'hidden' }} text-center py-2 rounded-t-[10px] bg-deep-champagne-lightest text-deep-champagne-darkest">
                {{ $title }} will be live soon!
            </p>
            <div class="bg-white dark:bg-slate-800 p-6 lg:p-8" @click.away="{{ $attributes->get('x-show') }}=false; doquotOpen=false; document.querySelector('body').style.overflow = 'auto';">
                <div class="flex flex-col space-y-8 lg:space-y-0 lg:grid lg:grid-cols-3 lg:space-x-8">
                    <!-- Carousel -->
                    <div class="lg:col-span-2">
                            @include('includes.carousel', ['images' => $images])
                        {{-- <div class="sm:hidden bg-slate-100 rounded-[10px] flex items-center justify-center">
                            <p>Sorry! The images will look distorted in screens less the 640 pixels wide, Instead you can visit the live website</p>
                        </div> --}}
                    </div>

                    <!-- Project Details -->
                    <div class="lg:col-span-1 flex flex-col space-y-8 mt-8 xl:mt-0">
                        <div>
                            <h3 class="text-2xl text-independence dark:text-slate-300 font-black tracking-wide">
                                {{ $title }}
                            </h3>

                            {{ $slot }}
                        </div>

                        <ul class="flex items-center flex-wrap">
                            @foreach ($tools as $tool)
                                <li class="px-4 py-1 ml-1 mt-1 rounded-[10px] bg-deep-champagne-lightest text-xs text-deep-champagne-darkest border border-deep-champagne-light dark:bg-slate-600/30 dark:text-slate-300 dark:border-slate-500/10">{{ $tool }}</li>
                            @endforeach
                        </ul>

                        <div class="flex space-x-2">
                            <a
                                href="{{ $links['live']['url'] }}"
                                class="{{ $links['live']['disable'] === 'true' ? 'hidden' : '' }} flex items-center space-x-2 px-4 py-2 rounded-[10px] bg-independence border dark:border-none hover:bg-independence-lighter tracking-wide transition duration-150 ease-linear cursor-pointer text-slate-100"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span>Live</span>
                            </a>
                            <a
                                href="{{ $links['code']['url'] }}"
                                class="{{ $links['code']['disable'] === 'true' ? 'hidden' : '' }} flex items-center space-x-2 px-4 py-2 rounded-[10px] bg-independence border dark:border-none hover:bg-independence-lighter tracking-wide transition duration-150 ease-linear cursor-pointer text-slate-100"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                                <span>Code</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
