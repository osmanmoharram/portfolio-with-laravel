<section class="pt-40 bg-gradient-to-b dark:bg-gradient-to-b from-white dark:from-slate-900 via-white dark:via-slate-900 to-slate-50 dark:to-slate-900">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <div>
            <div class="flex items-center space-x-2 text-deep-champagne-darker">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

                <h2 class="text-lg font-normal">
                    Services
                </h2>
            </div>
            <p class="my-3 font-bold text-4xl text-independence dark:text-slate-300 tracking-wide">
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
