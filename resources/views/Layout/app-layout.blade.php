<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-slate-950">
    <div class="min-h-screen flex bg-gray-200 relative overflow-hidden">
        <div id="sidebar"
            class="w-64 absolute inset-y-0 left-0 transform translate-x-0 bg-slate-800 transition-transform duration-300 ease-in-out z-20">

            <div class="w-full py-[9.5px] border-b border-slate-50/15 h-max">
                <div class="flex items-center gap-x-2 px-3">
                    <span>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon"
                            class="h-6 w-6 text-blue-500" width="24" height="24">
                            <path d="M16.5 6a3 3 0 0 0-3-3H6a3 3 0 0 0-3 3v7.5a3 3 0 0 0 3 3v-6A4.5 4.5 0 0 1 10.5 6h6Z"
                                fill="#3B82F6"></path>
                            <path d="M18 7.5a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-7.5a3 3 0 0 1-3-3v-7.5a3 3 0 0 1 3-3H18Z"
                                fill="#3B82F6"></path>
                        </svg>
                    </span>
                    <a href="{{ route('index') }}" class="text-white text-2xl font-bold">MindMap</a>
                </div>
            </div>
            <div class="overflow-x-hidden overflow-y-auto px-2">
                <ul class="mt-4">
                    <x-sideList :title="__('My Tasks')" :active="request()->routeIs('index')">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon"
                            class="text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3" width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z"
                                stroke="#D1D5DB" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </x-sideList>
                    <x-sideList :title="__('Projects')">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon"
                            class="text-gray-400 group-hover:text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3"
                            width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"
                                stroke="#9CA3AF" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </x-sideList>
                    <x-sideList :title="__('Members')">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon"
                            class="text-gray-400 group-hover:text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3"
                            width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                                stroke="#9CA3AF" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </x-sideList>
                </ul>
                <div class="mt-12" x-data="{ show: true }">
                    <div class="flex items-center justify-between px-3">
                        <div class="flex items-center gap-x-3 cursor-pointer" @click="show= !show">
                            <span x-show='show'>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-500" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </span>
                            <span x-show='!show' class="rotate-[-90deg]" style="display: none;">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-500" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" stroke="#6B7280" fill="none"
                                        stroke-width="1.5px"></path>
                                </svg>
                            </span>
                            <span class="text-slate-400 font-bold text-sm">Projects</span>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <a href="#" class="cursor-pointer hover:bg-slate-100/15 p-1 rounded">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-3.5 w-3.5" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </a>
                            <a href="#" class="cursor-pointer hover:bg-slate-100/15 p-1 rounded">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3 h-96" x-show='show' x-transition>
                        <x-sideList :title="__('First Project')" :project="__('true')">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        </x-sideList>
                        <x-sideList :title="__('Second Project')" :project="__('true')">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                        </x-sideList>
                        <x-sideList :title="__('Third Project')" :project="__('true')">
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </x-sideList>
                        <x-sideList :title="__('Task Management')" :project="__('true')">
                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                        </x-sideList>
                        <x-sideList :title="__('Portfolio')" :project="__('true')">
                            <div class="w-3 h-3 bg-gray-500 rounded-full"></div>
                        </x-sideList>
                        <x-sideList :title="__('CMS')" :project="__('true')">
                            <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                        </x-sideList>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-content"
            class="flex flex-col flex-1 bg-slate-100 transition-all duration-300 ease-in-out ml-64">

            <!--NavBar-->
            <div class="flex items-center justify-between bg-white px-3 py-3 shadow-md">
                <div class="flex" id="btn">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon"
                        class="ltr:block rtl:hidden h-5 w-5 cursor-pointer text-gray-500 hover:text-gray-700 ltr:mr-8 rtl:ml-8"
                        id="btn-right" width="34" height="34">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" stroke="#6B7280" fill="none"
                            stroke-width="1.5px"></path>
                    </svg>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon"
                        class="ltr:hidden rtl:block h-5 w-5 cursor-pointer text-gray-500 hover:text-gray-700 ltr:mr-8 rtl:ml-8 hidden"
                        id="btn-left" width="24" height="24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="#6B7280" fill="none"
                            stroke-width="1.5px"></path>
                    </svg>
                </div>
                <div class="flex items-center">
                    <x-navProfile>
                        <x-slot name="userPicture">
                            <x-userPicture class="w-8 h-8" :about="__('Admin')" :user="__('https://i.pinimg.com/564x/41/95/7a/41957adcf44b1059bc46a0afda76418a.jpg')" />
                        </x-slot>

                        <x-slot name="userRole">
                            <span class="font-medium">Admin</span>
                        </x-slot>

                        <div class="px-3 pb-1">
                            <span class="text-sm text-gray-600">Signed in as</span>
                            <span class="text-sm text-gray-700">admin1234@gmail.com</span>
                        </div>
                    </x-navProfile>
                </div>
            </div>
            <!--Page Content-->
            {{ $slot }}
        </div>
    </div>
</body>

</html>
