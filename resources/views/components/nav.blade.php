<nav>
    <div>
        <ul class="flex items-center space-x-6 text-sm text-independence text-opacity-80 dark:text-slate-400 dark:text-opacity-60">
            <li>
                <a href="/" class="block rounded-[10px] cursor-pointer hover:text-deep-champagne-lighter transition duration-100 ease-linear" title="Home page">
                    Home
                </a>
            </li>
            <li>
                <a href="/about" class="block rounded-[10px] cursor-pointer hover:text-deep-champagne-lighter transition duration-100 ease-linear" title="About page">
                    About
                </a>
            </li>
            <li x-data="{ visible: false }" class="relative">
                <button type="button" id="selected" x-ref="selectedOption" @click="visible = ! visible" class="relative cursor-pointer text-deep-champagne dark:text-opacity-80"
                    aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" title="Theme mode"
                >
                    <span class="dark:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>

                    <span class="hidden dark:inline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </span>
                </button>

                <ul x-show="visible"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="visible = false"
                    class="absolute right-0 z-50 mt-1 w-36 bg-white dark:bg-slate-800 shadow-lg rounded-md p-1 text-sm ring-1 ring-black ring-opacity-5 focus:outline-none"
                    tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3"
                    style="display: none"
                >
                    <!-- Light Mode -->
                    <li class="flex items-center space-x-4 hover:bg-deep-champagne dark:hover:bg-slate-700 hover:bg-opacity-20 dark:hover:bg-opacity-40 rounded-[10px] dark:text-slate-400 dark:text-opacity-60 cursor-pointer p-2"
                        id="light" role="option" @click="visible = false; $store.theme.set('light')"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>

                        <span class="text-slate-400 ">Light</span>
                    </li>

                    <!-- Dark Mode -->
                    <li class="flex items-center space-x-4 hover:bg-deep-champagne dark:hover:bg-slate-700 hover:bg-opacity-20 dark:hover:bg-opacity-40 rounded-[10px] dark:text-slate-400 dark:text-opacity-60 cursor-pointer p-2"
                        id="dark" role="option" @click="visible = false; $store.theme.set('dark')"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>

                        <span class="text-slate-400">Dark</span>
                    </li>

                    <!-- System Mode -->
                    <li class="flex items-center space-x-4 hover:bg-deep-champagne dark:hover:bg-slate-700 hover:bg-opacity-20 dark:hover:bg-opacity-40 rounded-[10px] dark:text-slate-400 dark:text-opacity-60 cursor-pointer select-none p-2"
                        id="system" role="option" @click="visible = false; $store.theme.set('system')"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="text-slate-400">
                            System
                        </span>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
