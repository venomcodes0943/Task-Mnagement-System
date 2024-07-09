<div class="flex items-center">
    <div class="px-2">
        <img src="" id="userImg" alt="" class="w-8 h-8 rounded-full" id="">
    </div>
    <div class="relative md:mr-5" x-data="{ open: false }">
        <div class="flex items-center gap-x-1 cursor-pointer" @click="open = !open">
            {{ $userName }}
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
            class="w-[185px] absolute top-8 right-5 md:right-11 z-30 bg-white shadow-lg border rounded-md"
            style="display: none;">
            <div class="py-1 border-b">
                {{ $slot }}
            </div>
            <ul class="py-1">
                <li class="block py-1 px-3 text-gray-700 hover:bg-slate-100">
                    <a href="{{ route('profile') }}" class="block">Profile</a>
                </li>
                <li class="block py-1 px-3 text-gray-700 hover:bg-slate-100">
                    <a href="{{ route('logout') }}" class="block">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
