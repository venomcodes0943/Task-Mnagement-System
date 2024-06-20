<x-app-layout>
    <x-loader />
    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">

        {{-- Page Title Bar  --}}
        <x-mainPageTitle :title="__('Projects')">
            <div
                class="flex flex-col md:flex-row items-end space-y-2 md:space-y-0 mb-2 space-x-3 flex-wrap md:items-center">
                <div class="flex items-center py-1 bg-slate-200 px-3 rounded-md cursor-pointer">
                    <span>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                            class="text-gray-400 group-hover:text-gray-300 h-4 w-4 flex-shrink-0 ltr:mr-3 rtl:ml-3"
                            width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"
                                stroke="#1F2937" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </span>
                    <span class="pl-2">Active</span>
                </div>
                <div class="flex items-center py-1 bg-slate-200 px-3 rounded-md cursor-pointer">
                    <span>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon" class="h-4 w-4 group-hover:text-gray-800" width="24"
                            height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                                stroke="#4B5563" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </span>
                    <span class="pl-2">Archived</span>
                </div>
                <div
                    class="px-3 py-1 bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer openModal">
                    Create
                    Project</div>
            </div>
        </x-mainPageTitle>
        {{-- Page Content  --}}

        @if (count($projects) > 0)
            <div class="rounded-lg bg-white shadow-md border">
                @foreach ($projects as $project)
                    <div class="flex items-center justify-between px-6 py-3 border-b">
                        <a href="{{ route('project', $project->id) }}">
                            <div class="flex items-center">
                                <div class="w-2.5 h-2.5 rounded-full" style="background-color: {{ $project->color }};">
                                </div>
                                <div class="pl-3 text-gray-600 hover:underline">{{ $project->name }}</div>
                            </div>
                        </a>
                        <span class="cursor-pointer">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-4 w-4 group-hover:text-gray-800"
                                width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                                    stroke="#4B5563" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </span>
                    </div>
                @endforeach
            </div>
        @else
            <div class="px-6 py-3 mt-44">
                <div class="pl-3 text-gray-600 font-bold text-center text-3xl">No Projects</div>
            </div>
        @endif

        <div class="ldcv" id="my-modal">
            <div class="base">
                <div class="inner">
                    <div class="px-6 pt-6 w-[650px]">
                        <div class="flex items-center justify-between">
                            <div class="text-2xl font-semibold">Create Project</div>
                            <span data-ldcv-set="" class="cursor-pointer">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="h-7 w-7" viewBox="0 0 21 21" width="21" height="21">
                                    <g fill="none" fill-rule="evenodd" stroke="#4B5563" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(5 5)">
                                        <path d="m10.5 10.5-10-10z" stroke="#4B5563" fill="none"></path>
                                        <path d="m10.5.5-10 10" stroke="#4B5563" fill="none"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="py-3">
                            <label for="name" class="block text-gray-600 font-semibold">Name</label>
                            <input type="text" id="name"
                                class="w-full outline-none border shadow-sm py-1.5 mt-1 pl-3 rounded-md border-slate-300"
                                placeholder="Name">
                        </div>
                        <div class="pt-2 ml-2">
                            <span class="block">Color</span>
                            <div class="flex gap-1 mt-1 pb-6">
                                @foreach (['#64748B', '#71717A', '#EF4444', '#F97316', '#EAB308', '#22C55E', '#14B8A6', '#0EA5E9', '#6366F1', '#EC4899', '#F43F5E'] as $color)
                                    <label class="w-6 h-6 rounded-md cursor-pointer"
                                        style="background-color: {{ $color }};">
                                        <input type="radio" class="hidden" name="color"
                                            value="{{ $color }}">
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-300/20 py-5 px-6 flex items-center justify-end space-x-2">
                        <x-primary-button data-ldcv-set="">
                            Cancel
                        </x-primary-button>
                        <div
                            class="px-3 py-[6px] bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer openModal">
                            Create Project</div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
