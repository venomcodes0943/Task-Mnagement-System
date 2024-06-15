<x-app-layout>
    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">
        <x-mainPageTitle :title="__('My Tasks')" />
        <x-taskContent>
            No due date (1)

            <x-slot name="taskData">
                <span class="cursor-pointer">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9" fill="none" stroke="#cbd5e1" stroke-width="2" />
                    </svg>
                </span>
                <div class="pl-4">
                    <span class="block text-slate-900 -mt-[2px] cursor-pointer hover:underline font-semibold">xx</span>
                    <div class="flex flex-wrap items-center mt-2 gap-x-2">
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
                <div class="tooltip w-8 h-8 bg-center bg-cover rounded-full cursor-pointer outline outline-white"
                    data-tippy="Admin"
                    style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                </div>
            </x-slot>
        </x-taskContent>
    </div>
</x-app-layout>
