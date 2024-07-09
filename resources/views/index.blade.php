<x-app-layout>
    <x-loader />
    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">

        {{-- Page Title Bar  --}}
        <x-mainPageTitle :title="__('My Tasks')" class="" />

        {{-- Page Content  --}}
        <div class="bg-white rounded-lg w-full block shadow-md">
            <div class="px-6 py-4 text-slate-900 border-b border-b-gray-200">
                <span class="font-semibold ">Due date</span>
                <span class="duedatecount"></span>
            </div>
            <div class="flex flex-wrap items-center px-6 pt-4 pb-4 justify-between" id="dueDateTasks">

            </div>
        </div>

        <div class="bg-white rounded-lg w-full shadow-md mt-3 py-16 px-6 hidden" id="noMyTasks">
            <div class="flex flex-col items-center justify-center">
                <span>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="65"
                        height="51" viewBox="0 0 65 51" class="fill-current text-gray-400">
                        <path
                            d="M56 40h2c.552285 0 1 .447715 1 1s-.447715 1-1 1h-2v2c0 .552285-.447715 1-1 1s-1-.447715-1-1v-2h-2c-.552285 0-1-.447715-1-1s.447715-1 1-1h2v-2c0-.552285.447715-1 1-1s1 .447715 1 1v2zm-5.364125-8H38v8h7.049375c.350333-3.528515 2.534789-6.517471 5.5865-8zm-5.5865 10H6c-3.313708 0-6-2.686292-6-6V6c0-3.313708 2.686292-6 6-6h44c3.313708 0 6 2.686292 6 6v25.049375C61.053323 31.5511 65 35.814652 65 41c0 5.522847-4.477153 10-10 10-5.185348 0-9.4489-3.946677-9.950625-9zM20 30h16v-8H20v8zm0 2v8h16v-8H20zm34-2v-8H38v8h16zM2 30h16v-8H2v8zm0 2v4c0 2.209139 1.790861 4 4 4h12v-8H2zm18-12h16v-8H20v8zm34 0v-8H38v8h16zM2 20h16v-8H2v8zm52-10V6c0-2.209139-1.790861-4-4-4H6C3.790861 2 2 3.790861 2 6v4h52zm1 39c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8z"
                            fill="#9CA3AF"></path>
                    </svg>
                </span>
                <div class="text-gray-600 text-lg mt-4">You have no assigned tasks.</div>
            </div>
        </div>




        {{-- Task Modal --}}
        <x-taskModal />
        <script src="{{ asset('assets/js/index.js') }}"></script>
</x-app-layout>


