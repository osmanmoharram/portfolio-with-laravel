<section id="projects" class="px-6 pt-24 pb-96 sm:pb-36 xl:pb-16 bg-gradient-to-b dark:bg-gradient-to-b from-slate-50 dark:from-slate-900 via-slate-50 dark:via-slate-900 to-white dark:to-slate-900">
    <div class="max-w-7xl mx-auto">
        <!-- Title -->
        <div>
            <div class="flex items-center space-x-2 text-deep-champagne-darker">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>

                <h2 class="text-lg font-normal">
                    Projects
                </h2>
            </div>
            <p class="my-3 font-black text-4xl text-independence dark:text-slate-300">
                Have a look at some of my work
            </p>
            <p class="text-slate-400 max-w-2xl text-lg tracking-wide">
                Here are some of the work I've done over the years.<br>Feel free to sea it live of examin the code.
            </p>
        </div> <!-- End of Title -->

        <!-- Projects -->
        <div
            x-data="{ forumOpen: false, doquotOpen: false, hallsbookingOpen: false, aovOpen: false, mrequestOpen: false }"
            class="flex flex-col sm:projects"
        >

            <!-- Forum -->
            <div>
                <div class="max-w-lg mx-auto transform translate-y-24 -rotate-12 text-center sm:max-w-full sm:scale-110 sm:translate-x-10">
                    <img
                        src="{{ asset('img/projects/forum/edited/register.png') }}"
                        alt="Forum"
                        @click="forumOpen = true; document.querySelector('body').style.overflow = 'hidden'"
                        class="rounded-[10px] lg:blur-sm hover:blur-0 transition duration-150 ease-linear cursor-pointer"
                    >

                    <span class="block mt-4 text-center text-slate-400 font-black uppercase tracking-wide">Forum</span>
                </div>

                <x-project
                    title="Forum"
                    :tools="['Laravel', 'Tailwindcss', 'Tailwindui', 'Alpinejs', 'Heroicons', 'highlightjs', 'Markdown-it']"
                    :links="[
                        'live' => [
                            'url' => '#',
                            'disable' => 'true'
                        ],
                        'code' => [
                            'url' => 'https://github.com/osmanmoharram/forum.git',
                            'disable' => 'false'
                        ]
                    ]"
                    :images="[
                        asset('img/projects/forum/edited/register.png'),
                        asset('img/projects/forum/edited/login.png'),
                        asset('img/projects/forum/edited/all-topics.png'),
                    ]"
                    x-show="forumOpen"
                    style="display: none"
                >
                    <div class="text-sm tracking-wide text-independence-light mt-4 space-y-4">
                        <p>
                            It doesn't have a name yet but it's a platform for web/mobile developers, software engineers and others
                            to discuss topics, find and share solutions to the problems they face.
                        </p>
                    </div>
                </x-project>
            </div> <!-- End of Forum -->

            <!-- Quotations Package -->
            <div class="col-start-2 row-start-2">
                <div class="max-w-lg mx-auto transform rotate-12 translate-y-40 rounded-[10px] sm:max-w-full sm:translate-x-44 sm:scale-110 lg:translate-x-64">
                    <img
                        src="{{ asset('img/projects/doquot/index.png') }}"
                        alt="Doquot"
                        @click="doquotOpen = true; document.querySelector('body').style.overflow = 'hidden';"
                        class="rounded-[10px]  lg:blur-sm hover:blur-0 cursor-pointer transition duration-100 ease-linear"
                    >

                    <span class="block mt-4 text-center text-slate-400 font-black uppercase tracking-wide">Quotations Package</span>
                </div>

                <x-project
                    title="Quotations Package"
                    :tools="['Laravel', 'Bagisto', 'Bootstrap', 'Javascript']"
                    :links="[
                        'live' => [
                            'url' => '#',
                            'disable' => 'true'
                        ],
                        'code' => [
                            'url' => 'https://github.com/osmanmoharram/quotationspackage.git',
                            'disable' => 'false'
                        ]
                    ]"
                    :images="[
                        asset('img/projects/doquot/create.png'),
                        asset('img/projects/doquot/edit.png'),
                        asset('img/projects/doquot/index.png'),
                        asset('img/projects/doquot/show.png'),
                    ]"
                    x-show="doquotOpen"
                    style="display: none"
                >
                    <div class="text-sm tracking-wide text-independence-light mt-4 space-y-4">
                        <p>
                            This package handles the creation and managing of your business quotations.
                            It's simple, easy to use and you can learn to use it very quickly.
                        </p>

                        <p class="mt-4">
                            It was built with <a href="https://laravel.com/" class="text-deep-champagne underline hover:text-deep-champagne-dark transition duration-100 ease-linear">Laravel</a> Framework and
                            with the purpose to be integrated with <a href="https://bagisto.com/en/" class="text-deep-champagne underline hover:text-deep-champagne-dark transition duration-100 ease-linear">Bagisto</a> framework but it can be tweaked to work independently.
                        </p>

                        <div class="mt-4">
                            <p>
                                It has the following features:
                            </p>
                            <ul class="list-disc pl-3" role="role">
                                <li class="feature">Create new quotation</li>
                                <li class="feature">Edit an existing quotations</li>
                                <li class="feature">Add/remove products to/from quotation</li>
                                <li class="feature">Calculate subtotal and total with and without taxes</li>
                                <li class="feature">Export to pdf</li>
                                <li class="feature">Export to excel</li>
                            </ul>
                        </div>
                    </div>
                </x-project>
            </div> <!-- End of Quotations Package -->

            <!-- Hallsbooking -->
            <div>
                <div class="max-w-lg mx-auto transform -rotate-12 translate-y-56 sm:translate-y-24 sm:rotate-0 sm:scale-125 sm:translate-x-12">
                    <img
                        src="{{ asset('img/projects/hallsbooking/all-halls.png') }}"
                        alt="Hallsbooking"
                        @click="hallsbookingOpen = true; document.querySelector('body').style.overflow = 'hidden';"
                        class="rounded-[10px] lg:blur-sm hover:blur-0 cursor-pointer transition duration-100 ease-linear"
                    >

                    <span class="block mt-4 text-center text-slate-400 font-black uppercase tracking-wide">Hallsbooking</span>
                </div>

                <x-project
                    title="Hallsbooking"
                    :tools="['Laravel', 'Tailwindcss', 'Javascript', 'Heroicons']"
                    :links="[
                        'live' => [
                            'url' => '#',
                            'disable' => 'true'
                        ],
                        'code' => [
                            'url' => 'https://github.com/osmanmoharram/hallsbooking.git',
                            'disable' => 'false'
                        ]
                    ]"
                    :images="[
                        asset('img/projects/hallsbooking/all-halls.png'),
                        asset('img/projects/hallsbooking/customers.png'),
                        asset('img/projects/hallsbooking/new-hall.png'),
                    ]"
                    x-show="hallsbookingOpen"
                    style="display: none"
                >
                    <div class="text-sm tracking-wide text-independence-light mt-4 space-y-4">
                        <p>
                            The primary role of Hallsbooking system as the name suggests is to manage the process of booking big halls for celebrations or special occasions.
                            But Hallsbooking is so much more than that, here are some of its feature:
                        </p>

                        <ul class="list-disc pl-3" role="role">
                            <li class="feature">
                                Make inspections appointments for clients to inspect halls
                            </li>
                            <li class="feature">
                                Create offers for special occasions or special clients
                            </li>
                            <li class="feature">
                                Create offers for annual or recurring ocassions to be applied automatically each time the occasion happends
                            </li>
                            <li class="feature">Calculate subtotal and total with and without taxes</li>
                            <li class="feature">
                                Not all halls are alike, so you may want to provide options to some halls and not all halls
                                like if some halls can provide security services or certain types of food. Hallsbooking allows
                                you to do just that, It allows you to create new options and deside which hall
                                should provide that option
                            </li>
                            <li class="feature">
                                Keep a history of every occasion happend on each hall
                            </li>
                            <li class="feature">
                                Manage clients contracts
                            </li>
                        </ul>
                    </div>
                </x-project>
            </div> <!-- End of Hallsbooking -->

            <!-- AOV -->
            <div class="row-start-1 col-start-2 col-span-2">
                <div class="max-w-lg mx-auto rotate-12 transform translate-y-72 sm:max-w-full sm:translate-y-24 sm:translate-x-7 sm:rotate-0 sm:scale-90">
                    <img
                        src="{{ asset('img/projects/aov/edited/landing-page.png') }}"
                        alt="AOV"
                        @click="aovOpen = true; document.querySelector('body').style.overflow = 'hidden';"
                        class="rounded-[10px] lg:blur-sm hover:blur-0 cursor-pointer transition duration-100 ease-linear"
                    >

                    <span class="block mt-4 text-center text-slate-400 font-black uppercase tracking-wide text-xl">AOV</span>
                </div>

                <x-project
                    title="AOV-Consultancy"
                    :tools="['Laravel', 'Tailwindcss', 'Tailwindui', 'javascript', 'Heroicons']"
                    :links="[
                        'live' => [
                            'url' => 'https://aov-consultancy.com/',
                            'disable' => 'false'
                        ],
                        'code' => [
                            'url' => '#',
                            'disable' => 'true'
                        ]
                    ]"
                    :images="[
                        asset('img/projects/aov/edited/landing-page.png'),
                        asset('img/projects/aov/edited/projects.png'),
                        asset('img/projects/aov/edited/new-project.png'),
                        asset('img/projects/aov/edited/project-details.png'),
                        asset('img/projects/aov/edited/user-profile-page.png'),
                    ]"
                    x-show="aovOpen"
                    style="display: none"
                >
                    <div class="text-sm tracking-wide text-independence-light mt-4 space-y-4">
                        <p>
                            AOV-Consultancy is a multi role application with the ambition to become so much greater.
                        </p>
                        <p>
                            It introduces AOV-consultancy engineering company to the world in a simple and clear way
                            as well as acting as a management system for the company leadership. It also acts as a
                            communication channel between the clients and the employees who supervise the clients projects and
                            helps the clients to keep track of their projects progress.
                        </p>
                    </div>
                </x-project>
            </div> <!-- End of AOV -->

            <!-- Material Request Package -->
            {{-- <div class="row-start-2 col-start-2 col-span-1">
                <div class="transform scale-75 rotate-6 translate-y-48 lg:translate-x-16">
                    <img
                        src="{{ asset('img/projects/materialrequest/mr-request.PNG') }}"
                        alt="MRequest"
                        @click="mrequestOpen = true; document.querySelector('body').style.overflow = 'hidden';"
                        class="rounded-[10px] border lg:blur-sm hover:blur-0 cursor-pointer transition duration-100 ease-linear"
                    >

                    <span class="block mt-4 text-center text-slate-400 font-black uppercase tracking-wide">Material Request Package</span>
                </div>

                <x-project
                    title="Material Request Package"
                    :tools="['Laravel', 'Bagisto', 'Bootstrap', 'javascript']"
                    :links="['live' => '/live', 'code' => '/code']"
                    :images="[
                        asset('img/projects/materialrequest/mr-request.PNG'),
                        asset('img/projects/materialrequest/mr-statuses.PNG'),
                        asset('img/projects/materialrequest/mr-types.PNG'),
                        asset('img/projects/materialrequest/mr-dashboard.PNG'),
                        asset('img/projects/materialrequest/mr-editing request.PNG'),
                        asset('img/projects/materialrequest/mr-creating new request.PNG'),
                    ]"
                    x-show="mrequestOpen"
                >
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error reprehenderit libero nulla dolor voluptatem reiciendis ab ea laudantium eligendi repellat!
                </x-project>
            </div> <!-- End of Material Request Package --> --}}
        </div> <!-- End of Projects -->
    </div>
</section>
