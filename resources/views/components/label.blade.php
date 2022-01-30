@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-1 text-independence dark:text-slate-400 text-opacity-80 dark:text-opacity-40 tracking-wide text-sm']) }}>
    {{ $value ?? $slot }}
</label>
