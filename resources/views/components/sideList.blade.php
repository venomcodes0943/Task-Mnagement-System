@props(['title', 'active' => false, 'project' => false])

<li
    class="my-1 py-2 px-3 hover:bg-slate-100/15 cursor-pointer rounded-md flex items-center gap-x-3 {{ $active ? 'bg-slate-900' : '' }} {{ $project ? 'text-sm' : '' }}">
    <span>
        {{ $slot }}
    </span>
    <div class="text-white">{{ $title }}</div>
</li>
