@props(['image'])

<div class="hover:shadow-lg flex-shrink-0 flex flex-col w-72 h-[380px] p-12 rounded-[10px] border bg-gray-50 tracking-wide hover:scale-110 transition-all duration-150 ease-out dark:bg-slate-800 dark:border-slate-700">
    <img class="h-64" src="{{ $image }}" {{ $attributes }}>

    <span class="text-base text-center mt-16">{{ $slot }}</span>
</div>
