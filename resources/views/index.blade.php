<x-app-layout>
    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">

        {{-- Page Title Bar  --}}
        <x-mainPageTitle :title="__('My Tasks')" class="" />

        {{-- Page Content  --}}
        <div class="bg-white rounded-lg w-full block shadow-md">
            <div class="px-6 py-4 text-slate-900 border-b border-b-gray-200">
                <span class="font-semibold ">No due date</span>
                <span>(1)</span>
            </div>
            <div class="flex flex-wrap items-center px-6 pt-4 pb-4 justify-between">
                <div class="flex items-start">
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
                </div>
                <div class="flex items-center -space-x-2">
                    <x-userPicture class="w-6 h-6" :about="'Manager'" :users="__(
                        'https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    )" />
                </div>
            </div>
        </div>

        {{-- Task Modal --}}
        <x-taskModal :taskDetails="true" />
        <script src="{{ asset('assets/js/index.js') }}"></script>
</x-app-layout>
