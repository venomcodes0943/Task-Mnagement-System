<x-app-layout>
    <x-loader />
    <div class="px-2 md:px-8 py-6 pb-12 h-[92vh] overflow-y-auto">

        {{-- Page Title Bar  --}}
        <x-mainPageTitle :title="__('Profile')" class="" />

        {{-- Page Content  --}}
        <div class="bg-white rounded-lg w-full block shadow-sm">
            <div class="px-2 md:px-6 py-4">
                <div class="flex flex-col items-center justify-center border-b pb-2">
                    <div class="w-24 h-24 rounded-full">
                        <img src="" alt="" class="w-24 h-24 rounded-full userPageImg">
                    </div>
                    <label for="userAvatar" class="text-gray-500 cursor-pointer mt-2">Change</label>
                    <input type="file" name="" id="userAvatar" class="hidden">
                </div>

                <div class="grid grid-cols-3 border-b border-gray-200 py-5 last:border-b-0">
                    <label for="userName" class="block font-bold cursor-pointer text-gray-700 pt-2">Name</label>
                    <div class="col-span-2 md:col-span-1">
                        <input type="text" id="userName"
                            class="border border-gray-300 px-3 py-1.5 rounded-md focus:ring-2 ring-sky-600 focus:border-0 outline-none shadow-sm block w-full"
                            placeholder="Name" value="{{ $user->name }}">
                    </div>
                </div>

                <div class="grid grid-cols-3 border-b border-gray-200 py-5 last:border-b-0">
                    <label class="block font-bold text-gray-700 pt-2">Email</label>
                    <div class="col-span-2 md:col-span-1">
                        <input type="email"
                            class="border border-gray-300 px-3 py-1.5 rounded-md focus:ring-2 ring-sky-600 focus:border-0 outline-none shadow-sm block w-full"
                            disabled value="dhcodes0943@gmail.com">
                    </div>
                </div>

                <div class="grid grid-cols-3 border-b border-gray-200 py-5 last:border-b-0">
                    <label for="password" class="block font-bold cursor-pointer text-gray-700 pt-2">New Password</label>
                    <div class="col-span-2 md:col-span-1">
                        <input type="text" id="password"
                            class="border border-gray-300 px-3 py-1.5 rounded-md focus:ring-2 ring-sky-600 focus:border-0 outline-none shadow-sm block w-full"
                            placeholder="New Password">
                    </div>
                </div>
            </div>
            <div class="flex justify-end rounded-b-lg bg-gray-50 py-5 px-6">
                <button
                    class="inline-flex items-center border shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 text-white border-transparent bg-blue-600 enabled:hover:bg-blue-700 focus:ring-blue-500 px-4 py-1 font-semibold rounded-md"
                    id="updateMe">Save</button>
            </div>
        </div>
    </div>
</x-app-layout>
