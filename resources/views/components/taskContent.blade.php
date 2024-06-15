<div>
    <div class="bg-white rounded-lg w-full block shadow-md">
        <div class="px-6 py-4 text-slate-900 border-b border-b-gray-200">
            {{ $slot }}
        </div>
        <div class="flex flex-wrap items-start px-6 pt-4 pb-4 justify-between">
            <div class="flex  items-start">
                {{ $taskData }}
            </div>
            <div class="flex items-center -space-x-2">
                {{ $taskAssign }}
            </div>
        </div>
    </div>
</div>
