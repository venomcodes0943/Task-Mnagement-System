<div class="ldcv" id="projectModal">
    <div class="base">
        <div class="inner">
            <div class="px-6 pt-6 w-auto md:w-[630px]">
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
                    <input type="text" id="name" name="name"
                        class="w-full outline-none border shadow-sm py-1.5 mt-1 pl-3 rounded-md border-slate-300"
                        placeholder="Name">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <style>
                    .selected-outline {
                        outline: 2px solid #000;
                        /* Change to desired color */
                        outline-offset: 2px;
                        /* Adjust as needed */
                    }
                </style>
                <div class="flex flex-wrap gap-1 mt-1 pb-6">
                    @foreach (['#64748B', '#71717A', '#EF4444', '#F97316', '#EAB308', '#22C55E', '#14B8A6', '#0EA5E9', '#6366F1', '#EC4899', '#F43F5E'] as $index => $color)
                        <label class="color-label w-6 h-6 rounded-md cursor-pointer"
                            style="background-color: {{ $color }};" data-color="{{ $color }}"
                            id="color-{{ $index }}">
                            <input type="radio" class="hidden" id="color" name="color">
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="bg-slate-300/20 py-5 px-6 flex items-center justify-end space-x-2">
                <x-primary-button data-ldcv-set="" type="button" id="cancelBtn">
                    Cancel
                </x-primary-button>

                <button id="addNewProject"
                    class="text-[14px] px-3 py-[6px] bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer">
                    Create Project
                </button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script>
    var colorLabels = document.querySelectorAll('.color-label');
    colorLabels.forEach(label => {
        label.addEventListener('click', () => {
            colorLabels.forEach(l => l.classList.remove('selected-outline'));
            label.classList.add('selected-outline');
        });
    });
</script>
