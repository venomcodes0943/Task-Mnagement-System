<x-app-layout>
    <x-loader />

    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">

        {{-- Page Title Bar  --}}
        <x-mainPageTitle :title="__('Projects')">
            <div class="flex  items-end space-y-2 md:space-y-0 mb-4 md:mb-2 space-x-2 flex-wrap md:items-center">
                <div id="active" class="flex items-center py-1 bg-slate-200 px-1 md:px-3 rounded-md cursor-pointer">
                    <span>
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            data-slot="icon"
                            class="text-gray-400 group-hover:text-gray-300 h-4 w-4 flex-shrink-0 ltr:mr-3 rtl:ml-3"
                            width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"
                                stroke="#1F2937" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </span>
                    <span class="pl-2 text-sm md:text-base">Active</span>
                </div>
                <div id="archived" class="flex items-center py-1 px-1 md:px-3 rounded-md cursor-pointer">
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
                    <span class="pl-2 text-sm md:text-base">Archived</span>
                </div>
                <div
                    class="px-1 md:px-3 py-1 text-sm md:text-base bg-blue-700 hover:bg-blue-600 text-white rounded-md font-bold cursor-pointer openProjectModal">
                    Create
                    Project</div>
            </div>
        </x-mainPageTitle>
        {{-- Page Content  --}}
        @if (count($projects) > 0)
            <div class="rounded-lg bg-white shadow-md border" id="projectListActive"></div>
            <div class="rounded-lg bg-white shadow-md border" id="projectListArchived"></div>
        @else
            <div class="px-6 py-3 mt-44">
                <div class="pl-3 text-gray-600 font-bold text-center text-3xl">No Projects</div>
            </div>
        @endif
</x-app-layout>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script>
    // Add to archived
    $(document).on('click', '.archivedIcon', function() {
        let projectId = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "{{ route('project.update', '') }}/" + projectId,
            data: {
                archived: 1,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                fetchProjects();
                fetchSideProjects();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseJSON);
            }
        });
    });
    $(document).on('click', '.UnarchivedIcon', function() {
        let projectId = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "{{ route('project.update', '') }}/" + projectId,
            data: {
                unarchived: 0,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                fetchProjects();
                fetchSideProjects();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseJSON);
            }
        });
    });

    // switching btw active/archived

    $('#projectListArchived').hide();

    $("#archived").click(function(e) {
        e.preventDefault();
        $('#projectListActive').hide();
        $('#projectListArchived').show();
        $("#archived").css('background-color', '#E2E8F0');
        $("#active").removeClass('bg-slate-200');
    });
    $("#active").click(function(e) {
        e.preventDefault();
        $("#loading").show();
        $('#projectListActive').show();
        $('#projectListArchived').hide();
        $("#archived").css('background-color', 'transparent');
        $("#active").addClass('bg-slate-200');
    })
</script>
