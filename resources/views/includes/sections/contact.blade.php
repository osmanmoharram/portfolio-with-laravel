<section id="reachMe" x-data class="px-6 max-w-7xl mx-auto pb-6 md:pb-28">
    <div class="md:grid md:grid-cols-2 md:divide-x divide-independence divide-opacity-10 dark:divide-opacity-20 bg-deep-champagne dark:bg-slate-800 bg-opacity-80 dark:bg-opacity-80 rounded-[10px] p-6 sm:p-12">

        <!-- First Column -->
        <div class="row-span-1 md:pr-8 relative">
            <h2 class="text-independence dark:text-slate-50 text-4xl font-black">
                Reach Me
            </h2>
            <p class="max-w-xl text-lg pt-4 text-independence dark:text-slate-400 text-opacity-50 tracking-wide">
                I am so excited to hear from you. please contact me whenever you like, thanks :)
            </p>
            <ul class="pt-4 space-y-4 text-independence dark:text-slate-400 text-opacity-50">
                <li class="flex items-start space-x-2">
                    <span class="mt-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="#a49d9d"/>
                        </svg>
                    </span>
                    <span class="">
                        o.moharram91@gmail.com<br>
                        o.moharram91@hotmail.com
                    </span>
                </li>
                <li class="flex items-start space-x-2">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z" fill="#a49d9d"/>
                        </svg>
                    </span>
                    <span>+966 53 820 8194</span>
                </li>
            </ul>
            <img class="absolute h-80 -bottom-32 right-1/4 hidden md:block" src="{{ asset('img/svg/reach-me.svg') }}" alt="">
        </div> <!-- End Of First Colum -->

        <!-- Second Column -->
        <div class="mt-14 md:mt-0 md:pl-8">
            <form action="/" method="POST">
                @csrf

                <div class="space-y-4">
                    <div>
                        <x-label for="sender" value="Name" />
                        <x-input type="text" name="sender" id="sender" />

                        <p id="senderError" class="text-sm text-red-500 mt-1 ml-1"></p>
                    </div>
                    <div>
                        <x-label for="email" value="Email" />
                        <x-input type="email" name="email" id="email" />

                        <p id="emailError" class="text-sm text-red-500 mt-1 ml-1"></p>
                    </div>
                    <div>
                        <x-label for="body" value="Message" />
                        <textarea class="w-full h-52 rounded-[10px] bg-white bg-opacity-70 dark:bg-opacity-5 pt-4 pl-4 text-sm text-independence dark:text-slate-300 tracking-wide outline-none resize-none" name="body" id="body"></textarea>
                        <p id="bodyError" class="text-sm text-red-500 mt-1 ml-1"></p>
                    </div>
                </div>
                <div class="grid grid-cols-4 items-center justify-between mt-4">
                    <div class="col-span-3">
                        <div id="feedback" class="flex items-center justify-between bg-green-50 border border-green-500 px-4 py-2 rounded-[10px] text-green-500 font-normal text-sm tracking-wide" style="display: none;">
                            <span class="block">
                                Your message has been delivered!
                            </span>
                            <span class="block cursor-pointer" @click="$el.parentElement.remove()">
                                &times;
                            </span>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-end">
                        <button type="submit" @click.prevent="$store.formSubmit.submit()"class="px-8 py-2 rounded-[10px] text-right bg-independence hover:bg-independence-lighter dark:hover:bg-independence-lighter  text-white transition duration-100 ease-linear" title="Send your message">
                            <span>Send</span>
                        </button>
                    </div>
                </div>
            </form>
        </div> <!-- End Of Second Column -->
    </div>
</section>
