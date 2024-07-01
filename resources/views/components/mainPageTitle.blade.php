@props(['title'])

<div class="flex items-center flex-col md:flex-row md:items-center justify-center md:justify-between flex-wrap sm:gap-2">
    <div class="text-2xl md:text-3xl text-black font-bold font-sans mb-4">{{ $title }}</div>
    {{ $slot }}
</div>
