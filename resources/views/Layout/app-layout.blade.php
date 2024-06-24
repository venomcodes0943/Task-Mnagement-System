<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/notes-svgrepo-com.svg') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-slate-950 overflow-hidden">
    <div class="min-h-screen flex bg-gray-200 relative overflow-hidden">
        <div id="sidebar"
            class="w-64 absolute inset-y-0 left-0 transform translate-x-0 bg-slate-800 transition-transform duration-300 ease-in-out z-20">

            <div class="w-full py-[9.5px] border-b border-slate-50/15 h-max">
                <div class="flex items-center gap-x-2 px-3">
                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.8293 10.7154L20.3116 12.6473C19.7074 14.9024 19.4052 16.0299 18.7203 16.7612C18.1795 17.3386 17.4796 17.7427 16.7092 17.9223C16.6129 17.9448 16.5152 17.9621 16.415 17.9744C15.4999 18.0873 14.3834 17.7881 12.3508 17.2435C10.0957 16.6392 8.96815 16.3371 8.23687 15.6522C7.65945 15.1114 7.25537 14.4115 7.07573 13.641C6.84821 12.6652 7.15033 11.5377 7.75458 9.28263L8.27222 7.35077C8.3591 7.02654 8.43979 6.7254 8.51621 6.44561C8.97128 4.77957 9.27709 3.86298 9.86351 3.23687C10.4043 2.65945 11.1042 2.25537 11.8747 2.07573C12.8504 1.84821 13.978 2.15033 16.2331 2.75458C18.4881 3.35883 19.6157 3.66095 20.347 4.34587C20.9244 4.88668 21.3285 5.58657 21.5081 6.35703C21.7356 7.3328 21.4335 8.46034 20.8293 10.7154ZM11.0524 9.80589C11.1596 9.40579 11.5709 9.16835 11.971 9.27556L16.8006 10.5697C17.2007 10.6769 17.4381 11.0881 17.3309 11.4882C17.2237 11.8883 16.8125 12.1257 16.4124 12.0185L11.5827 10.7244C11.1826 10.6172 10.9452 10.206 11.0524 9.80589ZM10.2756 12.7033C10.3828 12.3032 10.794 12.0658 11.1941 12.173L14.0919 12.9495C14.492 13.0567 14.7294 13.4679 14.6222 13.868C14.515 14.2681 14.1038 14.5056 13.7037 14.3984L10.8059 13.6219C10.4058 13.5147 10.1683 13.1034 10.2756 12.7033Z"
                            fill="#FFF9D0" />
                        <path opacity="0.5"
                            d="M16.4149 17.9745C16.2064 18.6128 15.8398 19.1903 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1496 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7152C2.15033 12.4601 1.84821 11.3325 2.07573 10.3568C2.25537 9.5863 2.65945 8.88641 3.23687 8.3456C3.96815 7.66068 5.09569 7.35856 7.35077 6.75431C7.7774 6.64 8.16369 6.53649 8.51621 6.44534C8.51618 6.44545 8.51624 6.44524 8.51621 6.44534C8.43979 6.72513 8.3591 7.02657 8.27222 7.35081L7.75458 9.28266C7.15033 11.5377 6.84821 12.6653 7.07573 13.6411C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6393 12.3508 17.2435C14.3833 17.7881 15.4999 18.0873 16.4149 17.9745Z"
                            fill="#FFF9D0" />
                    </svg>
                    <a href="{{ route('index') }}" class="text-white text-2xl font-bold">MindMap</a>
                </div>
            </div>
            <div class="overflow-x-hidden overflow-y-auto px-2">
                <ul class="mt-4">
                    <a href="{{ route('index') }}">
                        <x-sideList :title="__('My Tasks')" :active="request()->routeIs('index')">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon"
                                class="text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3" width="24"
                                height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z"
                                    stroke="#D1D5DB" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </x-sideList>
                    </a>
                    <a href="{{ route('projects') }}">
                        <x-sideList :title="__('Projects')" :active="request()->routeIs('projects')">
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
                    </a>

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
                            <div class="cursor-pointer hover:bg-slate-100/15 p-1 rounded">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-3.5 w-3.5" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </div>
                            <div class="cursor-pointer hover:bg-slate-100/15 p-1 rounded openProjectModal">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 h-96" x-show='show' x-transition>
                        @if (count(app('Projects')) > 0)
                            @foreach (app('Projects') as $project)
                                @php
                                    $isActive = request()->routeIs('project') && request()->route('id') == $project->id;
                                @endphp

                                <a href="{{ route('project', $project->id) }}">
                                    <x-sideList :title="__($project->name)" :active="$isActive" :project="__('true')">
                                        <div class="w-3 h-3 py-1 rounded-full"
                                            style="background-color: {{ $project->color }};"></div>
                                    </x-sideList>
                                </a>
                            @endforeach
                        @else
                            <div class="text-white ml-4 font-bold">
                                No Projects
                            </div>
                        @endif
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
                            <x-userPicture class="w-6 h-6" :about="__(auth()->user()->userRole ? auth()->user()->userRole : 'User')" :user="__('https://i.pinimg.com/564x/41/95/7a/41957adcf44b1059bc46a0afda76418a.jpg')" />
                        </x-slot>

                        <x-slot name="userRole">
                            <span class="font-medium">{{ auth()->user()->name ? auth()->user()->name : 'User' }}</span>
                        </x-slot>

                        <div class="px-3 pb-1">
                            <span class="text-sm text-gray-600">Signed in as</span>
                            <span class="text-sm text-gray-700">{{ auth()->user()->email }}</span>
                        </div>
                    </x-navProfile>
                </div>
            </div>
            <!--Page Content-->
            {{ $slot }}
        </div>
    </div>
    <x-projectModal />
</body>

</html>
