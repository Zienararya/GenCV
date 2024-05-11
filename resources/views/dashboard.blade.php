<x-app-layout>
    <div class="px-[116px] py-[48px]">
        <h1 class=" text-[42px] font-bold font-mada">Curriculum Vitae.</h1>
        <p class=" text-[22px] font-medium font-mada">View and manage all your cv in one place.</p>
        <div class="bg-[#EFF8FF] rounded-lg min-h-screen mt-4">
            <div class="bg-[#AAC7DF] rounded-t-lg w-full h-[61px] py-2 px-[24px] flex items-center justify-between">
                <div>
                    <button onclick="location.href='create'"
                        class="btn btn-sm rounded-full bg-[#ECEFF3] flex items-center">
                        <i class="fi fi-rr-plus-small"></i>Create New CV
                    </button>
                </div>
                <div class="flex items-center gap-2">
                    <button class="btn btn-sm rounded-full bg-[#ECEFF3] flex items-center">
                        <i class="fi fi-rr-filter"></i>Filter
                    </button>
                    <label class="input input-sm rounded-full bg-[#ECEFF3] flex items-center gap-[5px]">
                        <i class="fi fi-rr-search"></i>
                        <input type="text" class="grow border-none" placeholder="Search" />
                    </label>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Curriculum vitae</p>
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
