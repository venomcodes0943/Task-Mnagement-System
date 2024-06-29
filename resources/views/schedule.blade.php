<x-app-layout>
    {{-- ------------------Loader----------------------- --}}

    <x-loader />

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
                            <div class="max-w-[750px] md:w-[550px] lg:w-[750px] max-h-[590px] overflow-auto">
                                <div class="px-4 pb-7 pt-6">
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
                                            <div
                                                class="flex items-start md:items-center justify-between border-b pb-2 px-1 md:px-4 py-2">
                                                <div
                                                    class="pl-2 md:pl-0 flex flex-col md:flex-row items-start md:items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="md:pl-2 mt-2 md:mt-0">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div
                                                class="flex items-start md:items-center justify-between border-b pb-2 px-1 md:px-4 py-2">
                                                <div
                                                    class="pl-2 md:pl-0 flex flex-col md:flex-row items-start md:items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="md:pl-2 mt-2 md:mt-0">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div
                                                class="flex items-start md:items-center justify-between border-b pb-2 px-1 md:px-4 py-2">
                                                <div
                                                    class="pl-2 md:pl-0 flex flex-col md:flex-row items-start md:items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="md:pl-2 mt-2 md:mt-0">
                                                        <div class="text-sm font-bold">Haseeb</div>
                                                        <div class="text-sm text-gray-600">dhcodes0943@gmail.com</div>
                                                    </div>
                                                </div>
                                                <x-checkbox />
                                            </div>
                                            <div
                                                class="flex items-start md:items-center justify-between border-b pb-2 px-1 md:px-4 py-2">
                                                <div
                                                    class="pl-2 md:pl-0 flex flex-col md:flex-row items-start md:items-center">
                                                    <x-userPicture class="w-6 h-6" :about="'Admin'"
                                                        :users="__(
                                                            'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                                                        )" />
                                                    <div class="md:pl-2 mt-2 md:mt-0">
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
                <div class="absolute inset-0 select-none overflow-x-auto overflow-y-hidden whitespace-nowrap transition-opacity flex"
                    id="schduelDivMain">

                    {{-- ------------------ List ----------------------- --}}
                    {{-- @dd($project->schedule) --}}
                    @if (count($project->schedule) > 0)
                        @foreach ($project->schedule as $schedule)
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
                        class="cursor-pointer min-w-60 md:min-w-72 flex items-center h-max py-2.5 mt-1 border-2 border-dashed px-3 rounded-lg border-slate-400 hover:bg-slate-200/20 mr-3">
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
                    <div id="writeList" class="hidden bg-slate-400/20 h-fit p-2 rounded-lg min-w-60 md:min-w-72 mr-3">
                        <input type="text" id="taskTitle" required
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
    <div class="ldcv" id="scheduleDelete">
        <div class="base">
            <div class="inner">
                <div class="max-w-[750px] md:w-[550px] max-h-[590px] overflow-auto">
                    <div class="flex flex-col md:flex-row items-center md:items-start pt-5 pb-4 px-4">
                        <div class="p-2 bg-red-200 rounded-full w-10 h-10 flex items-center justify-center">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="h-6 w-6 text-red-600"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2px"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                                    stroke="#DC2626" fill="none"></path>
                            </svg>
                        </div>
                        <div class="pl-0 md:pl-5 pt-2 md:pt-0">
                            <div class="md:text-xl text-black">Delete Resource</div>
                            <div class="text-gray-500 text-sm">Are you sure you want to delete this resource?
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-center py-3 gap-x-2 bg-slate-400/15 px-4">
                        <x-primary-button data-ldcv-set="No">
                            Cancel
                        </x-primary-button>
                        <div
                            class="cursor-pointer bg-red-600 rounded-md font-semibold outline-none px-4 py-1.5 active:shadow-md text-white yesDeleteSchdule">
                            Delete</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Task Modal --}}
    <x-taskModal :taskDetails="true" />
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script>
        ! function() {
            var s, o;

            function n(t, e) {
                var n, r = {}.hasOwnProperty;
                for (n in e) r.call(e, n) && (t[n] = e[n]);
                return t
            }
            s = function(t, e, n) {
                var r;
                for (null == n && (n = document), r = t; r && r !== n;) r = r.parentNode;
                if (r !== n) return null;
                for (r = t; r && r !== n && r.matches && !r.matches(e);) r = r.parentNode;
                return r !== n || n.matches && n.matches(e) ? r : null
            }, (o = function(t) {
                var e;
                return null == t && (t = {}), this.evtHandler = {}, this.opt = n({
                        delay: 300,
                        autoZ: !0,
                        baseZ: 3e3,
                        escape: !0,
                        byDisplay: !0
                    }, t), t.zmgr && this.zmgr(t.zmgr), this.promises = [], this._r = t.root ? "string" == typeof t
                    .root ? document.querySelector(t.root) : t.root : ((e = document.createElement("div"))
                        .innerHTML = '<div class="base"></div>', e), this.cls = "string" == typeof t.type ? t.type
                    .split(" ") : t.type, this.resident = null != t.resident && t.resident, this.inPlace = null == t
                    .inPlace || t.inPlace, this.container = "string" == typeof t.container ? document.querySelector(
                        t.container) : t.container, this._r.content && this._r.content.nodeType === Element
                    .DOCUMENT_FRAGMENT_NODE || this.init(), this
            }).prototype = n(Object.create(Object.prototype), {
                root: function() {
                    return this.inited || this.init(), this._r
                },
                init: function() {
                    var t, r, i = this;
                    if (!this.inited) return this.inited = !0, this.inPlace || (this._r.parentNode.removeChild(
                            this._r), document.body.appendChild(this._r)), !this.resident && this._r
                        .parentNode && (this._c = document.createComment(" ldcover placeholder "), this._r
                            .parentNode.insertBefore(this._c, this._r), this._r.parentNode.removeChild(this
                                ._r)), this._r.content && this._r.content.nodeType === Element
                        .DOCUMENT_FRAGMENT_NODE && (this._r = this._r.content.cloneNode(!0).childNodes[0],
                            this._r.parentNode.removeChild(this._r)), (t = this._r.getAttribute(
                            "data-lock")) && "true" === t && (this.opt.lock = !0), this.inner = this._r
                        .querySelector(".inner"), this.base = this._r.querySelector(".base"), this._r
                        .classList.add.apply(this._r.classList, ["ldcv"].concat(this.cls || [])), this.opt
                        .byDisplay && (this._r.style.display = "none"), r = null, this._r.addEventListener(
                            "mousedown", this.el_md = function(t) {
                                return r = t.target
                            }), this._r.addEventListener("click", this.el_c = function(t) {
                            var e, n;
                            return r !== i._r || i.opt.lock ? s(t.target, "*[data-ldcv-cancel]", i._r) ?
                                (t.stopPropagation(), i.cancel()) : (e = s(t.target, "*[data-ldcv-set]",
                                    i._r)) && null != (n = e.getAttribute("data-ldcv-set")) && !s(e,
                                    ".disabled", i._r) ? (t.stopPropagation(), i.set(n)) : void 0 : (t
                                    .stopPropagation(), i.toggle(!1))
                        })
                },
                zmgr: function(t) {
                    return null != t ? this._zmgr = t : this._zmgr
                },
                append: function(t) {
                    var e = this._r.childNodes[0];
                    return (e && e.classList.contains("base") ? e : this._r).appendChild(t)
                },
                get: function(n) {
                    var r = this;
                    return new Promise(function(t, e) {
                        return r.promises.push({
                            res: t,
                            rej: e
                        }), r.toggle(!0, n)
                    })
                },
                cancel: function(e, t) {
                    if (null == t && (t = !0), this.promises.splice(0).map(function(t) {
                            return t.rej(e || ((t = new Error).name = "lderror", t.id = 999, t))
                        }), t) return this.toggle(!1)
                },
                set: function(e, t) {
                    if (null == t && (t = !0), this.promises.splice(0).map(function(t) {
                            return t.res(e)
                        }), t) return this.toggle(!1)
                },
                isOn: function() {
                    return this._r.classList.contains("active")
                },
                lock: function() {
                    return this.opt.lock = !0
                },
                toggle: function(r, i) {
                    var s = this;
                    return new Promise(function(e, t) {
                        var n;
                        return s.inited || s.init(), r && null != i && s.fire("data", i), null == r && s
                            ._r.classList.contains("running") || null != r && s._r.classList.contains(
                                "active") === !!r ? e() : ((n = null != r ? r : !s._r.classList
                                    .contains("active")) && !s._r.parentNode && (null == s.container &&
                                    s._c && s._c.parentNode ? s._c.parentNode.insertBefore(s._r, s._c) :
                                    (s.container || document.body).appendChild(s._r)), s._r.classList
                                .add("running"), s.opt.byDisplay && (s._r.style.display = "block"), s._r
                                .classList.contains("inline") && (n ? (s.el_h = function(t) {
                                    if (!s._r.contains(t.target)) return s.toggle(!1)
                                }, window.addEventListener("click", s.el_h)) : s.el_h && (window
                                    .removeEventListener("click", s.el_h), s.el_h = null)), !n && s
                                .el_esc && (document.removeEventListener("keyup", s.el_esc), s.el_esc =
                                    null), setTimeout(function() {
                                    var t;
                                    return s._r.classList.toggle("active", n), !s.opt.lock && s.opt
                                        .escape && n && !s.el_esc && (s.el_esc = function(t) {
                                            if (27 === t.keyCode && (t = o.popups)[t.length -
                                                    1] === s) return s.toggle(!1)
                                        }, document.addEventListener("keyup", s.el_esc)), s.opt
                                        .animation && s.inner && s.inner.classList[n ? "add" :
                                            "remove"].apply(s.inner.classList, s.opt.animation
                                            .split(" ")), n ? o.popups.push(s) : 0 <= (t = o.popups
                                            .indexOf(s)) && o.popups.splice(t, 1), s.opt.autoZ && (
                                            n ? s._r.style.zIndex = s.z = (s._zmgr || o._zmgr).add(s
                                                .opt.baseZ) : ((s._zmgr || o._zmgr).remove(s.z),
                                                delete s.z)), s.opt.transformFix && !n && s._r
                                        .classList.remove("shown"), setTimeout(function() {
                                            return s._r.classList.remove("running"), s.opt
                                                .transformFix && n && s._r.classList.add(
                                                    "shown"), !n && s.opt.byDisplay && (s._r
                                                    .style.display = "none"), n || !s._r
                                                .parentNode || s.resident || s._r.parentNode
                                                .removeChild(s._r), !n && s.opt.autoZ && (s._r
                                                    .style.zIndex = ""), s.fire("toggled." + (
                                                    n ? "on" : "off"))
                                        }, s.opt.delay), s.promises.length && !n && s.set(void 0, !
                                            1), s.fire("toggle." + (n ? "on" : "off")), e()
                                }, 50))
                    })
                },
                on: function(t, n) {
                    var r = this;
                    return (Array.isArray(t) ? t : [t]).map(function(t) {
                        var e;
                        return ((e = r.evtHandler)[t] || (e[t] = [])).push(n)
                    })
                },
                fire: function(t) {
                    for (var e, n, r, i, s = [], o = [], l = 1, c = arguments.length; l < c; ++l) o.push(
                        arguments[l]);
                    for (e = o, l = 0, r = (n = this.evtHandler[t] || []).length; l < r; ++l) i = n[l], s.push(i
                        .apply(this, e));
                    return s
                },
                destroy: function(t) {
                    var e = this;
                    return null == t && (t = {}), this.toggle(!1).then(function() {
                        return e._c && (t.removeNode || e._c.parentNode.insertBefore(e._r, e._c), e._c
                            .parentNode.removeChild(e._c)), e._r.removeEventListener("mousedown", e
                            .el_md), e._r.removeEventListener("click", e.el_c)
                    })
                }
            }), n(o, {
                popups: [],
                _zmgr: {
                    add: function(t) {
                        return (this.s || (this.s = [])).push(t = Math.max(t || 0, ((t = this.s)[t.length -
                            1] || 0) + 1)), t
                    },
                    remove: function(t) {
                        if (!((t = (this.s || (this.s = [])).indexOf(t)) < 0)) return this.s.splice(t, 1)
                    }
                },
                zmgr: function(t) {
                    return null != t ? this._zmgr = t : this._zmgr
                }
            }), "undefined" != typeof module && null !== module ? module.exports = o : window && (window.ldcover = o)
        }.call(this);
    </script>
    <script>
        let ldcvDeleteModal;

        function setupModal() {
            const scheduleDelete = document.querySelector('#scheduleDelete');
            if (scheduleDelete) {
                ldcvDeleteModal = new ldcover({
                    root: scheduleDelete
                });
                // Event delegation to handle click events on dynamically created elements
                $(document).on('click', '.deleteSchedule', function() {
                    const deleteId = $(this).data('delete_id');
                    scheduleDelete.dataset.deleteId = deleteId;
                    ldcvDeleteModal.toggle();
                });
            }
        }

        function fetchSchedule() {
            $.ajax({
                type: "GET",
                url: "{{ route('project', ['id' => $project->id]) }}",
                success: function(response) {
                    const schduelDivMain = $("#schduelDivMain");
                    schduelDivMain.empty();
                    response.project.schedule.forEach(function(schedule) {
                        // Main Div Of Schedule
                        const schduelToAdd = $('<div>').addClass(
                            'h-max min-w-60 md:min-w-72 inline-block pb-2 mr-4 bg-slate-400/20 rounded-lg relative inset-0'
                        );

                        // Schedule Title Div
                        const schduelTitleDiv = $('<div>').addClass(
                            'flex items-center justify-between p-2 px-3'
                        ).attr('x-data', '{ show: false }');

                        // Alpine div to delete the Schedule
                        const schduleDelete = $('<div>').addClass(
                            'absolute cursor-pointer bg-white block py-1 w-52 md:w-64 rounded-md top-10 left-4 z-50 shadow-lg'
                        ).attr('x-show', 'show').css('display', 'none');
                        // Button for delete the Schedule
                        const schduleDeleteText = $('<div>').addClass(
                            'hover:bg-slate-400/15 py-1 px-4 text-gray-500 deleteSchedule'
                        ).data('delete_id', schedule.id).text('Delete');

                        // Schedule Title
                        const scheduleTitle = schedule.title;
                        const truncatedTitle = scheduleTitle.length > 15 ? scheduleTitle
                            .slice(
                                0, 15) +
                            '...' : scheduleTitle;
                        const schduleTitleSpan = $('<span>').addClass(
                            'text-gray-600 font-semibold').text(truncatedTitle);

                        // Toggle button for showing/hiding delete option
                        const schduleToggleSpan = $('<span>').addClass(
                            'text-gray-600 font-semibold py-1 px-2 rounded-md hover:bg-slate-300 cursor-pointer'
                        ).attr('x-on:click', 'show = !show');
                        const toggleIcon =
                            `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-5" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" stroke="#000000" fill="none" stroke-width="1.5px"></path></svg>`;

                        schduleToggleSpan.append(toggleIcon);

                        // Task Div
                        const taskDiv = $("<div>").addClass(
                            'overflow-y-auto px-2 max-h-80 min-h-0');

                        // Button to add new task
                        const addTaskDiv = $("<div>").addClass(
                            'cursor-pointer hover:bg-slate-500/20 mt-3 mx-2 px-2 py-[6px] rounded-md flex items-center addTask'
                        ).append(
                            `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-4 w-4" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" stroke="#6B8291" fill="none" stroke-width="1.5px"></path></svg>`
                        ).append(
                            $('<div>').text('Add Task').addClass('ml-2 text-gray-500')
                        );

                        // Add Task textarea
                        const addTask = $("<div>").addClass('rounded-md border w-full writetask px-1')
                            .css('display', 'none');
                        const taskTextArea = $("<textarea>").addClass(
                            'rounded-lg px-3 pt-1 outline-none block w-full resize-none text-gray-600 placeholder:text-gray-500 border-2 border-sky-500 pb-3'
                        ).attr('placeholder', 'Enter Task...');
                        const taskAddCancelButtons = $("<div>").addClass("flex items-center mt-2");
                        const addTaskButton = $("<div>").addClass(
                            'bg-blue-600 rounded-md text-white hover:bg-sky-500 px-2 py-1 cursor-pointer font-semibold text-sm'
                        ).text("Add Task");
                        const cancelButton = $("<button>").addClass(
                            'outline-none px-2 font-bold text-sm cancelTask').text('Cancel').click(
                            function() {
                                const index = $('.cancelTask').index(this);
                                $('.addTask').eq(index).show();
                                $('.writetask').eq(index).hide();
                            });

                        addTask.append(taskTextArea);
                        addTask.append(taskAddCancelButtons);
                        taskAddCancelButtons.append(addTaskButton);
                        taskAddCancelButtons.append(cancelButton);


                        $(document).on('click', ".addTask", function() {
                            var index = $('.addTask').index(this);
                            $('.addTask').eq(index).hide();
                            $('.writetask').eq(index).show();
                        });

                        // The final structure
                        schduleDelete.append(schduleDeleteText);
                        schduelTitleDiv.append(schduleDelete);
                        schduelTitleDiv.append(schduleTitleSpan);
                        schduelTitleDiv.append(schduleToggleSpan);
                        schduelToAdd.append(schduelTitleDiv);
                        schduelToAdd.append(taskDiv);
                        schduelToAdd.append(addTaskDiv);
                        schduelToAdd.append(addTask);
                        $("#schduelDivMain").append(schduelToAdd);
                    });

                    const writeListDiv = $("<div>").attr('id', 'writeList').addClass(
                        'hidden bg-slate-400/20 h-fit p-2 rounded-lg min-w-60 md:min-w-72 mr-3'
                    ).append(
                        $('<span>').addClass('w-full px-1 text-red-500 font-bold hidden').text(
                            'Field Can\'t Be Empty').attr('id', 'errormsg'),
                        $('<input>').attr({
                            type: 'text',
                            id: 'schduleTitle',
                            required: true,
                            class: 'w-full px-3 outline-none mb-2 block border-2 border-sky-600 py-0.5 rounded-md',
                            placeholder: 'Enter list title...'
                        })
                    ).append(
                        $('<div>').addClass('flex items-center space-x-2').append(
                            $('<div>').attr('id', 'addNewList').addClass(
                                'px-3 py-1 bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer w-max'
                            ).text('Add list')
                        ).append(
                            $('<div>').attr('id', 'cancelList').addClass(
                                'font-semibold text-gray-500 hover:text-gray-800 cursor-pointer'
                            ).text('Cancel')
                        )
                    );

                    // Add list button
                    const addListDiv = $("<div>").attr('id', 'addList').addClass(
                        'cursor-pointer min-w-60 md:min-w-72 flex items-center h-max py-2.5 mt-1 border-2 border-dashed px-3 rounded-lg border-slate-400 hover:bg-slate-200/20 mr-3'
                    ).append(
                        $('<span>').append(
                            `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-4 w-4" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" stroke="#6B7280" fill="none" stroke-width="1.5px"></path></svg>`
                        )
                    ).append(
                        $('<span>').addClass('text-gray-500 text-[15px] ml-2').text('Add list')
                    );

                    schduelDivMain.append(addListDiv);

                    // Append writeListDiv before the "Add list" button
                    schduelDivMain.append(writeListDiv);

                    $('#addList').on('click', function() {
                        toggleVisibility('#addList', '#writeList');
                    });

                    $('#cancelList').on('click', function() {
                        toggleVisibility('#writeList', '#addList');
                        $("#errormsg").hide();
                    });

                    setupModal();
                },
                error: function(xhr, status, error) {
                    console.error("An error occurred:", error);
                }
            });
        }

        // Toggle visibility function
        function toggleVisibility(hideSelector, showSelector) {
            $(hideSelector).hide();
            $(showSelector).show();
        }
        fetchSchedule();

        $(document).on('click', '.yesDeleteSchdule', function() {
            $.ajax({
                type: "DELETE",
                url: `{{ route('schedule.delete', ['id' => ':id']) }}`.replace(':id', $("#scheduleDelete")
                    .data('deleteId')),
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                    fetchSchedule();
                    ldcvDeleteModal.toggle();
                    $("#scheduleDelete").removeData('deleteId')
                }
            });
        });

        // Add new Record
        $(document).on('click', '#addNewList', function() {
            const schduleTitle = $("#schduleTitle").val();
            const projectId = {{ $project->id }};
            if (schduleTitle === '') {
                $("#errormsg").show();
            } else {
                $.ajax({
                    type: "POST",
                    url: "{{ route('schedule.create') }}",
                    data: {
                        project_id: projectId,
                        title: schduleTitle,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        fetchSchedule();
                    },
                    error: function(xhr, status, error) {
                        console.error("An error occurred:", error);
                    }
                });
            }
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
                    fetchSideProjects();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
</x-app-layout>
