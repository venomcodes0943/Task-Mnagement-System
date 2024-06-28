<div class="px-2">
    <svg class="cursor-pointer" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-6 w-6"
        width="24" height="24">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
            stroke="#9CA3AF" fill="none" stroke-width="1.5px"></path>
    </svg>
</div>
<div class="hidden md:flex items-center">
    <div class="px-2">
        {{ $userPicture }}
    </div>
    <div class="relative md:mr-5" x-data="{ open: false }">
        <div class="flex items-center gap-x-1 cursor-pointer" @click="open = !open">
            {{ $userRole }}
            <span>
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="h-4 w-4 fill-current"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill="#6B7280"></path>
                </svg>
            </span>
        </div>
        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-100"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-in duration-100" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="w-[185px] absolute top-8 right-11 z-30 bg-white shadow-lg border rounded-md" style="display: none;">
            <div class="py-1 border-b">
                {{ $slot }}
            </div>
            <ul class="py-1">
                <li class="block py-1 px-3 text-gray-700 hover:bg-slate-100">
                    <a href="#" class="block">Profile</a>
                </li>
                <li class="block py-1 px-3 text-gray-700 hover:bg-slate-100">
                    <a href="#" class="block">Settings</a>
                </li>
                <li class="block py-1 px-3 text-gray-700 hover:bg-slate-100">
                    <a href="{{ route('logout') }}" class="block">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
