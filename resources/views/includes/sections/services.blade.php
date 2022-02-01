<section class="pt-28 bg-gradient-to-b dark:bg-gradient-to-b from-white dark:from-slate-900 via-white dark:via-slate-900 to-slate-50 dark:to-slate-900">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <div>
            <div class="flex items-center space-x-2 text-deep-champagne-darker">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>

                <h2 class="text-lg font-normal">
                    Services
                </h2>
            </div>
            <p class="my-3 font-black text-4xl md:text-5xl text-independence dark:text-slate-300 tracking-wide">
                At your service
            </p>
            <p class="text-slate-400 max-w-2xl text-lg tracking-wide">
                Here are only some of the services I am offering to you, <br>and there is so much more.
            </p>
        </div> <!-- End of Title -->

        <!-- Mobile Cards -->
        <div class="py-16 flex flex-col items-center justify-center space-y-8 sm:space-y-0 sm:grid grid-cols-2 sm:gap-6 md:hidden">
            <x-mobile-card :image="asset('img/svg/ui-ux.svg')" alt="UI/UX Design">UI/UX Design</x-mobile-card>
            <x-mobile-card :image="asset('img/svg/web-development.svg')" alt="Fullstack Web Development">Fullstack Web Development</x-mobile-card>
            <x-mobile-card :image="asset('img/svg/hosting-configuration.svg')" alt="Hosting Configuration">Hosting Configuration</x-mobile-card>
            <x-mobile-card :image="asset('img/svg/technical-support.svg')" alt="Technical And Maintenance Support">Technical & Maintenance Support</x-mobile-card>
            <x-mobile-card :image="asset('img/svg/content-writing.svg')" alt="ui/ux">Content Writing</x-mobile-card>
        </div>
    </div>

    <!-- Cards -->
    <div class="hidden md:block relative w-full py-16 overflow-x-hidden">
        <div class="slide-track flex items-center space-x-32">
            <x-card :image="asset('img/svg/ui-ux.svg')" alt="UI/UX Design">UI/UX Design</x-card>
            <x-card :image="asset('img/svg/web-development.svg')" alt="Fullstack Web Development">Fullstack Web Development</x-card>
            <x-card :image="asset('img/svg/hosting-configuration.svg')" alt="Hosting Configuration">Hosting Configuration</x-card>
            <x-card :image="asset('img/svg/technical-support.svg')" alt="Technical And Maintenance Support">Technical & Maintenance Support</x-card>
            <x-card :image="asset('img/svg/content-writing.svg')" alt="ui/ux">Content Writing</x-card>
            <x-card :image="asset('img/svg/ui-ux.svg')" alt="UI/UX Design">UI/UX Design</x-card>
            <x-card :image="asset('img/svg/web-development.svg')" alt="Fullstack Web Development">Fullstack Web Development</x-card>
            <x-card :image="asset('img/svg/hosting-configuration.svg')" alt="Hosting Configuration">Hosting Configuration</x-card>
            <x-card :image="asset('img/svg/technical-support.svg')" alt="Technical And Maintenance Support">Technical & Maintenance Support</x-card>
            <x-card :image="asset('img/svg/content-writing.svg')" alt="ui/ux">Content Writing</x-card>
        </div>
    </div> <!-- End of Cards -->
</section>
