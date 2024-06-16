<x-app-layout>
    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">
        <x-mainPageTitle :title="__('My Tasks')" />
        <x-taskContent>
            <span class="font-semibold">No due date</span>
            <span>(1)</span>
            <x-slot name="taskData">
                <x-checkbox />
                <div class="pl-4">
                    <span
                        class="block text-slate-900 -mt-[2px] cursor-pointer hover:underline font-semibold openModal w-max">TaskTitle</span>
                    <div class="flex items-center mt-2 gap-x-2">
                        <span>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-400" width="24"
                                height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"
                                    stroke="#9CA3AF" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </span>
                        <span class="text-sm text-gray-500">Jun 20, 2024</span>
                        <div class="flex md:pl-4 items-center space-x-2">
                            <span class="rounded-full w-2 h-2 bg-red-500"></span>
                            <span class="text-sm text-slate-500 hover:underline cursor-pointer">Task
                                Management</span>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="taskAssign">
                <x-userPicture class="w-6 h-6" :about="__('Manager')" :users="__(
                    'https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                )" />
            </x-slot>
        </x-taskContent>
        <div class="ldcv" id="my-modal">
            <div class="base">
                <div class="inner" style="overflow: auto;">
                    <div class="w-[750px] h-[420px] overflow-auto">
                        <div class="flex  items-center justify-between border-b border-gray-200 shadow-sm">
                            <div class="flex items-center space-x-2 px-6 text-gray-700">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <span>Project Name</span>
                                <span>/</span>
                                <span>Schedule Name</span>
                            </div>
                            <span data-ldcv-set="" class="p-2 m-2.5 cursor-pointer">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5" viewBox="0 0 21 21" width="21" height="21">
                                    <g fill="none" fill-rule="evenodd" stroke="#4B5563" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(5 5)">
                                        <path d="m10.5 10.5-10-10z" stroke="#4B5563" fill="none"></path>
                                        <path d="m10.5.5-10 10" stroke="#4B5563" fill="none"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="flex ">
                            <main class="flex-1 px-6 pb-8 pt-6">
                                <div class="flex items-center">
                                    <x-checkbox />
                                    <div class="font-bold">TaskTitle</div>
                                </div>
                                <div class="mt-4 flex-1 items-start">
                                    <span>
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                            class="h-4 w-4 text-gray-500 ltr:mr-4 rtl:ml-4" width="24"
                                            height="24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="#6B7280"
                                                fill="none" stroke-width="1.5px"></path>
                                        </svg>
                                    </span>
                                    <div class="ml-4">
                                        <span class="text-sm text-gray-300">Discription</span>
                                        <div class="rounded-md border pt-2 pb-3 px-3">
                                            {{-- <textarea class="outline-none px-2 block w-full" rows="3" placeholder="Discription"
                                                style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 40px;"></textarea> --}}
                                            <textarea
                                                class=" outline-none block h-10 w-full resize-none border-0 p-0 text-sm text-gray-600 placeholder:font-normal placeholder:text-gray-500 focus:ring-0"
                                                placeholder="Description" style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 60px;"></textarea>
                                            <div class="flex items-center mt-4">
                                                <x-primary-button>
                                                    Save
                                                </x-primary-button>
                                                <button class="outline-none px-2 font-bold text-sm">Cancel</button>
                                            </div>

                                            {{-- <textarea class="" cols="40" rows="2"></textarea> --}}
                                        </div>
                                    </div>
                                </div>
                                <section class="mt-8" x-data="{ show: false }">
                                    <div class="flex items-center">
                                        <div class="flex mr-4 cursor-pointer" @click="show = !show">
                                            <span x-show="!show">
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" data-slot="icon"
                                                    class="h-4 w-4 text-gray-500 rotate-[-90deg]" width="24"
                                                    height="24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" stroke="#6B7280" fill="none"
                                                        stroke-width="1.5px"></path>
                                                </svg>
                                            </span>
                                            <span x-show="show">
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-500"
                                                    width="24" height="24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" stroke="#6B7280" fill="none"
                                                        stroke-width="1.5px"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="flex-1 space-x-2 border-b pb-2">
                                            <span class="font-semibold text-gray-700">Checklist</span>
                                            <span class="font-medium text-gray-700">0/0</span>
                                        </div>
                                    </div>
                                    <div x-show="show" class="pl-8 pr-8">
                                        <div
                                            class="flex items-center mt-4 text-gray-700 hover:text-gray-800 cursor-pointer">
                                            <span class="pr-3">
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" data-slot="icon" class="h-4 w-4"
                                                    width="24" height="24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" stroke="#6B7280" fill="none"
                                                        stroke-width="1.5px"></path>
                                                </svg>
                                            </span>
                                            <span>Add Item</span>
                                        </div>
                                    </div>
                                </section>
                                <section class="mt-8" x-data="{ show: false }">
                                    <div class="flex items-center">
                                        <div class="flex mr-4 cursor-pointer" @click="show = !show">
                                            <span x-show="!show">
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" data-slot="icon"
                                                    class="h-4 w-4 text-gray-500 rotate-[-90deg]" width="24"
                                                    height="24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" stroke="#6B7280" fill="none"
                                                        stroke-width="1.5px"></path>
                                                </svg>
                                            </span>
                                            <span x-show="show">
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-500"
                                                    width="24" height="24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" stroke="#6B7280" fill="none"
                                                        stroke-width="1.5px"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="flex-1 space-x-2 border-b pb-2">
                                            <span class="font-semibold text-gray-700">Comments</span>
                                            <span class="font-medium text-gray-700">0</span>
                                        </div>
                                    </div>
                                    <div x-show="show" class="pl-8 pr-8">
                                        <div
                                            class="cursor-pointer mt-3 rounded-md border border-slate-300 px-4 py-2 text-sm text-gray-600 hover:shadow-sm">
                                            Write a comment
                                        </div>
                                    </div>
                                </section>
                            </main>
                            <aside class="w-60 p-6 bg-gray-50">
                                <section class="py-2 border-b pb-3" x-data="{ open: false }">
                                    <h2 class="px-2 text-sm font-bold text-gray-600 mb-2">Project List</h2>
                                    <div @click="open = !open"
                                        class="group flex items-center justify-between cursor-pointer hover:bg-gray-600/15 rounded-md hover:shadow-sm px-3 py-1">
                                        <span class="text-sm text-gray-500">all schedual</span>
                                        <span class="relative">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current hidden group-hover:block"
                                                viewBox="0 0 20 20" width="20" height="20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" fill="#6B7280"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="relative">
                                        <div class="w-full absolute top-2 py-1 bg-white rounded-md border shadow-lg max-h-24 overflow-y-auto"
                                            x-show='open'>
                                            <div class="block px-3 text-sm py-1 cursor-pointer hover:bg-gray-200">
                                                Todo
                                            </div>
                                            <div class="block px-3 text-sm py-1 cursor-pointer hover:bg-gray-200">
                                                Working
                                            </div>
                                            <div class="block px-3 text-sm py-1 cursor-pointer hover:bg-gray-200">
                                                outOfDate
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="py-2 border-b pb-3" x-data="{ open: false }">
                                    <h2 class="px-2 text-sm font-bold text-gray-600 mb-2">Due Date</h2>
                                    <div @click="open = !open"
                                        class="group flex items-center justify-between cursor-pointer hover:bg-gray-600/15 rounded-md hover:shadow-sm px-3 py-1">
                                        <span class="text-sm text-gray-500">Due Date</span>
                                        <span class="relative">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current hidden group-hover:block"
                                                viewBox="0 0 20 20" width="20" height="20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" fill="#6B7280"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="relative">
                                        <div class="w-full absolute top-2 py-1 bg-white rounded-md border shadow-lg max-h-24 overflow-y-auto px-3"
                                            x-show='open'>
                                            <input type="date" name="" class="outline-none">
                                        </div>
                                    </div>
                                </section>
                                <section class="py-2 border-b pb-3" x-data="{ open: false }">
                                    <div class="group flex items-center justify-between  rounded-md px-3 py-1">
                                        <span class="text-sm text-gray-500 font-bold">Assignee</span>
                                        <span @click="open = !open"
                                            class="relative cursor-pointer p-1 rounded-md hover:bg-slate-500/15">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                data-slot="icon" class="h-4 w-4" width="24" height="24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15" stroke="#6B7280" fill="none"
                                                    stroke-width="1.5px"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="relative">
                                        <div class="w-full absolute top-0 py-1 bg-white rounded-md border shadow-lg max-h-24 overflow-y-auto px-3"
                                            x-show='open'>
                                            <div class="flex items-center">
                                                <x-userPicture class="w-6 h-6" :users="__(
                                                    'https://i.pinimg.com/564x/c2/5a/e4/c25ae4d3f7858e110b39a321aa0ad6bb.jpg',
                                                )" />
                                                <span class="px-2 text-sm text-gray-500">Admin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center ml-3">
                                        <x-userPicture class="w-6 h-6" :users="__(
                                            'https://i.pinimg.com/564x/c2/5a/e4/c25ae4d3f7858e110b39a321aa0ad6bb.jpg',
                                        )" />
                                        <x-userPicture class="w-6 h-6" :about="__("Manager")" :users="__(
                                            'https://i.pinimg.com/564x/c2/5a/e4/c25ae4d3f7858e110b39a321aa0ad6bb.jpg',
                                        )" />
                                    </div>
                                </section>
                                <section class="py-2 pb-5">
                                    <h2 class="px-2 text-sm font-bold text-gray-600 mb-2">Delete</h2>
                                    <div
                                        class="relative flex items-center cursor-pointer bg-gray-600/15 rounded-md hover:shadow-sm px-3 py-[6px]">
                                        <span>
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                data-slot="icon" class="h-3.5 w-3.5 ltr:mr-2 rtl:ml-2" width="24"
                                                height="24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                                                    stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                            </svg>
                                        </span>
                                        <span class="text-sm text-gray-500 pl-2">Delete</span>
                                    </div>
                                    <div>
                                        <div
                                            class="flex items-center cursor-pointer bg-red-500 hover:bg-red-600 rounded-md hover:shadow-sm px-3 py-[6px]">
                                            <span>
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" data-slot="icon"
                                                    class="h-3.5 w-3.5 ltr:mr-2 rtl:ml-2" width="24"
                                                    height="24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                                                        stroke="#fff" fill="none" stroke-width="1.5px">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="text-sm text-white pl-2">Are you sure</span>
                                        </div>
                                        <div
                                            class="flex items-center cursor-pointer bg-gray-600/15 rounded-md hover:shadow-sm px-3 py-[6px] mt-1.5">
                                            <span>
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 21 21" width="21" height="21">
                                                    <g fill="none" fill-rule="evenodd" stroke="#4B5563"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        transform="translate(5 5)">
                                                        <path d="m10.5 10.5-10-10z" stroke="#4B5563" fill="none">
                                                        </path>
                                                        <path d="m10.5.5-10 10" stroke="#4B5563" fill="none">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span
                                                class="text-sm text-gray-500 pl-1.5 hover:text-gray-600">Cancel</span>
                                        </div>
                                    </div>
                                </section>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
