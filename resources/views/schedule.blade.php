<x-app-layout>
    {{-- ------------------Loader----------------------- --}}

    {{-- <x-loader /> --}}

    {{-- ------------------Page Main Content----------------------- --}}

    <div class="h-full py-6 px-4 md:px-8 pb-4 md:pb-12">
        <section class="grid h-full grid-rows-[auto_1fr] gap-4">

            {{-- ------------------Hearder----------------------- --}}
            <header class="flex items-center flex-wrap gap-2 md:gap-0">
                <div class="relative flex items-center" x-data="{ open: false }">
                    <div @click = "open = !open"
                        class="cursor-pointer w-7 h-7 rounded hover:bg-slate-200 flex items-center justify-center">
                        <div class="h-2.5 w-2.5 rounded-full" id="pointColor"></div>
                    </div>
                    <div>
                        <div class="md:text-xl p-1 rounded hover:bg-slate-200 cursor-pointer">
                            {{ $project->name }}
                        </div>
                    </div>
                    <div x-show = "open" style="display: none;"
                        class="flex items-center z-30 flex-wrap gap-2 bg-white border shadow p-2 absolute top-10 rounded-md left-2 w-60"">
                        @foreach (['#64748B', '#71717A', '#EF4444', '#F97316', '#EAB308', '#22C55E', '#14B8A6', '#0EA5E9', '#6366F1', '#EC4899', '#F43F5E'] as $color)
                            <div class="color-option w-6 h-6 rounded cursor-pointer"
                                style="background-color: {{ $color }};" data-myColor="{{ $color }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <nav class="md:ml-16 flex items-center">
                    <a href="#" class="flex items-center rounded bg-slate-200 px-2 py-1 gap-x-2">
                        <span>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-4 w-4 group-hover:text-gray-800"
                                width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125Z"
                                    stroke="#1F2937" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </span>
                        <span class="text-slate-800">Board</span>
                    </a>
                    <a href="#" class="flex items-center rounded px-2 py-1 gap-x-2 ml-2">
                        <span>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-4 w-4 group-hover:text-gray-800"
                                width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                                    stroke="#4B5563" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </span>
                        <span class="text-slate-800">List</span>
                    </a>
                </nav>
                <div class="md:ml-12 flex items-center">
                    <x-userPicture class="w-6 h-6" :about="'Manager'" :users="__(
                        'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    )" />
                    <x-userPicture class="w-6 h-6" :about="'User'" :users="__(
                        'https://images.unsplash.com/photo-1601412436009-d964bd02edbc?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    )" />
                    <x-userPicture class="w-6 h-6" :about="'Admin'" :users="__(
                        'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    )" />
                    <span
                        class="tooltip tracking-tighter border-2 border-dashed  ml-1 p-1 rounded-full cursor-pointer openmember"
                        data-tippy="Add/Remove Users">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-600" width="24"
                            height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                                stroke="#4B5563" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </span>
                </div>

                {{-- ------------------Member Modal----------------------- --}}

                <div class="ldcv" id="memberModal">
                    <div class="base">
                        <div class="inner">
                            <div class="max-w-[750px] md:w-[750px] max-h-[590px] overflow-auto">
                                <div class="px-6 pb-7 pt-6">
                                    <div class="mb-4 flex items-center justify-between">
                                        <div class="font-bold text-xl">Team Members (5)</div>
                                        <span class="cursor-pointer hover:bg-slate-300 p-1 rounded" data-ldcv-set="">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 21 21"
                                                width="21" height="21">
                                                <g fill="none" fill-rule="evenodd" stroke="#4B5563"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    transform="translate(5 5)">
                                                    <path d="m10.5 10.5-10-10z" stroke="#4B5563" fill="none">
                                                    </path>
                                                    <path d="m10.5.5-10 10" stroke="#4B5563" fill="none"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex items-center text-sm ">
                                        <span class="text-gray-700 hover:text-gray-900 cursor-pointer">Select
                                            All</span>
                                        <span class="text-gray-800 mx-1">/</span>
                                        <span class="text-gray-700 hover:text-gray-900 cursor-pointer">Deselect
                                            All</span>
                                    </div>
                                    <div class="rounded-md border border-slate-300 mt-4 py-2 ">
                                        <input type="text"
                                            class="w-full border-b border-slate-300 placeholder:font-semibold outline-none pl-4 text-gray-800 pb-2"
                                            placeholder="Search">
                                        <div class="max-h-52 md:max-h-64 overflow-y-auto w-full">
                                            <div class="flex items-center justify-between border-b pb-2 px-3 py-2">
                                                <div class="flex items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="pl-2">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div class="flex items-center justify-between border-b pb-2 px-3 py-2">
                                                <div class="flex items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="pl-2">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div class="flex items-center justify-between border-b pb-2 px-3 py-2">
                                                <div class="flex items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="pl-2">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div class="flex items-center justify-between border-b pb-2 px-3 py-2">
                                                <div class="flex items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="pl-2">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div class="flex items-center justify-between pb-2 px-3 py-2">
                                                <div class="flex items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="pl-2">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-slate-300/20 py-5 px-6 flex items-center justify-end space-x-2">
                                    <x-primary-button data-ldcv-set="">
                                        Cancel
                                    </x-primary-button>
                                    <div
                                        class="px-3 py-[6px] bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer">
                                        Save</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            {{-- --------------------Task's Lists----------------------- --}}
            <main class="relative">
                <div
                    class="absolute inset-0 select-none overflow-x-auto overflow-y-hidden whitespace-nowrap transition-opacity flex">

                    {{-- ------------------ List ----------------------- --}}
                    {{-- @dd($project->schedule) --}}
                    @if (count($project->schedule) > 0)
                        @foreach ($project->schedule as $schedule)
                            <div id="scheduleList"></div>
                            <div
                                class="h-max min-w-60  md:min-w-72 inline-block pb-2 mr-4 bg-slate-400/20 rounded-lg relative inset-0">
                                <div class="flex items-center justify-between p-2 px-3" x-data="{ show: false }">
                                    <div x-show="show" style="display: none;"
                                        class="absolute cursor-pointer bg-white block py-1 w-64 rounded-md top-10 left-4 z-50 shadow-lg">
                                        <div class="hover:bg-slate-400/15 py-1 px-4 text-gray-500">Delete</div>
                                    </div>
                                    <span
                                        class="text-gray-600 font-semibold">{{ str_word_count($schedule->title, 0) > 2 ? implode(' ', array_slice(explode(' ', $schedule->title), 0, 2)) . '...' : $schedule->title }}</span>
                                    <span @click="show = !show"
                                        class="text-gray-600 font-semibold py-1 px-2 rounded-md hover:bg-slate-300 cursor-pointer">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                            data-slot="icon" class="w-5" width="24" height="24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                                stroke="#000000" fill="none" stroke-width="1.5px"></path>
                                        </svg>
                                    </span>
                                </div>


                                {{-- ------------------Tasks Start----------------------- --}}
                                <div class="overflow-y-auto px-2 max-h-80 min-h-0">
                                    @if (count($schedule->task) > 0)
                                        @foreach ($schedule->task as $task)
                                            <div
                                                class="mb-2 openModal cursor-pointer bg-white rounded-lg px-3 py-1 text-gray-700 shadow hover:shadow-md">
                                                <div class="py-1.5 text-gray-500 text-sm">{{ $task->taskTitle }}</div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="flex items-center py-1 mr-3">
                                                            <span class="mr-2">
                                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    data-slot="icon" class="h-4 w-4 text-gray-400"
                                                                    width="24" height="24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"
                                                                        stroke="#9CA3AF" fill="none"
                                                                        stroke-width="1.5px">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span
                                                                class="text-[12px] text-gray-500">{{ \Carbon\Carbon::parse($task->dueDate)->format('F j, Y') }}
                                                            </span>
                                                        </div>
                                                        <div class="flex items-center py-1 mr-3">
                                                            <span class="mr-1">
                                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    data-slot="icon" class="h-4 w-4 text-gray-400"
                                                                    width="24" height="24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                                                        stroke="#9CA3AF" fill="none"
                                                                        stroke-width="1.5px">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="text-[12px] text-gray-500">1</span>
                                                            <span class="text-[12px] text-gray-500">/</span>
                                                            <span class="text-[12px] text-gray-500">1</span>
                                                        </div>
                                                    </div>
                                                    <x-userPicture class="w-5 h-5" :about="'Manager'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                </div>
                                            </div>

                                            <div
                                                class="mb-2 openModal cursor-pointer bg-white rounded-lg px-3 py-1 text-gray-700 shadow hover:shadow-md">
                                                <div class="py-1.5 text-gray-500 text-sm">User feedback gathering</div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="flex items-center py-1 mr-3">
                                                            <span class="mr-2">
                                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    data-slot="icon" class="h-4 w-4 text-gray-400"
                                                                    width="24" height="24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"
                                                                        stroke="#9CA3AF" fill="none"
                                                                        stroke-width="1.5px">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="text-[12px] text-gray-500">Jun 27, 2024</span>
                                                        </div>
                                                        <div class="flex items-center py-1 mr-3">
                                                            <span class="mr-1">
                                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    data-slot="icon" class="h-4 w-4 text-gray-400"
                                                                    width="24" height="24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                                                        stroke="#9CA3AF" fill="none"
                                                                        stroke-width="1.5px">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="text-[12px] text-gray-500">1</span>
                                                            <span class="text-[12px] text-gray-500">/</span>
                                                            <span class="text-[12px] text-gray-500">1</span>
                                                        </div>
                                                    </div>
                                                    <x-userPicture class="w-5 h-5" :about="'Manager'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                </div>
                                            </div>

                                            <div class="rounded-md border w-full hidden writetask">
                                                <textarea
                                                    class="rounded-md px-3  pt-1 outline-none block  w-full resize-none  text-gray-600 placeholder:text-gray-500 border-2 border-sky-500"
                                                    placeholder="Enter task title..."
                                                    style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 60px;"></textarea>
                                                <div class="flex items-center mt-2">
                                                    <div
                                                        class="bg-blue-600 rounded-md text-white hover:bg-sky-500 px-2 py-1 cursor-pointer font-semibold text-sm">
                                                        Add Task</div>
                                                    <button
                                                        class="outline-none px-2 font-bold text-sm cancelTask">Cancel</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                {{-- ------------------Tasks End----------------------- --}}

                                <div
                                    class="cursor-pointer hover:bg-slate-500/20 mt-3 mx-1 px-2 py-[6px] rounded-md flex items-center addTask">
                                    <span>
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                            data-slot="icon" class="h-4 w-4" width="24" height="24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4.5v15m7.5-7.5h-15" stroke="#6B8291" fill="none"
                                                stroke-width="1.5px"></path>
                                        </svg>
                                    </span>
                                    <div class="ml-2 text-gray-500">Add Task</div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                    {{-- ------------------ Add List ----------------------- --}}

                    <div id="addList"
                        class="cursor-pointer min-w-60 md:min-w-72 flex items-center h-max py-2.5 mt-1 border-2 border-dashed px-3 rounded-lg border-slate-400 hover:bg-slate-200/20">
                        <span>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-4 w-4" width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"
                                    stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </span>
                        <span class="text-gray-500 text-[15px] ml-2">
                            Add list
                        </span>
                    </div>
                    <div id="writeList" class="hidden bg-slate-400/20 h-fit p-2 rounded-lg min-w-60 md:min-w-72">
                        <input type="text" id="taskTitle"
                            class="w-full px-3 outline-none mb-2 block border-2 border-sky-600 py-0.5 rounded-md"
                            placeholder="Enter list title...">
                        <div class="flex items-center space-x-2">
                            <div id="addNewList"
                                class="px-3 py-1 bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer w-max">
                                Add list</div>
                            <div id="cancelList"
                                class="font-semibold text-gray-500 hover:text-gray-800 cursor-pointer">Cancel</div>
                        </div>
                    </div>
                </div>
            </main>
        </section>
    </div>

    {{-- Task Modal --}}
    <x-taskModal :taskDetails="true" />
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script>
        function loadSchedule(schedule) {
            
        }
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('project', ['id' => $project->id]) }}",
                success: function(response) {
                    response.project.schedule.forEach(function(schedule) {
                        console.log(schedule);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("An error occurred:", error);
                }
            });
        });




        $(document).on('click', '#addNewList', function() {
            const taskTitle = $("#taskTitle").val();
            const projectId = {{ $project->id }};
            // console.log(projectId, taskTitle);
            $.ajax({
                type: "POST",
                url: "{{ route('schedule.create') }}",
                data: {
                    project_id: projectId,
                    title: taskTitle,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error("An error occurred:", error);
                }
            });
        });







        function getProject() {
            let url = "/project/" + {{ $project->id }};
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    let project = response.project
                    $("#pointColor").css('background-color', project.color);
                }
            });
        }
        getProject();

        $('.color-option').click(function() {
            var myColor = $(this).data('mycolor');
            $.ajax({
                type: "POST",
                url: "{{ route('project.update', ['id' => $project->id]) }}",
                data: {
                    color: myColor,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    getProject();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
</x-app-layout>
