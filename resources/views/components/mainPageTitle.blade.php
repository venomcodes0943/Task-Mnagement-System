@props(['title'])

<div class="flex items-center justify-between">
    <div class="text-3xl text-black font-bold font-sans mb-4">{{ $title }}</div>
    {{ $slot }}
</div>
