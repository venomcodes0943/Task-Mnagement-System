@props(['title'])

<div class="flex items-center justify-between flex-wrap sm:gap-2">
    <div class="text-3xl text-black font-bold font-sans mb-4">{{ $title }}</div>
    {{ $slot }}
</div>
