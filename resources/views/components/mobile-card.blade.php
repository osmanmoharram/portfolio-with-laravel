@props(['image'])

<div class="hover:shadow-lg flex-shrink-0 flex flex-col items-center justify-center p-8 rounded-[10px] border bg-gray-50 tracking-wide cursor-pointer hover:scale-110 transition-all duration-150 ease-out dark:bg-slate-800 dark:border-slate-700">
    <img class="w-64 h-64" src="{{ $image }}" {{ $attributes }}>

    <span class="text-xs text-center">{{ $slot }}</span>
</div>
