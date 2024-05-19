<x-app-layout>
    <div class="px-[116px] py-[48px]">
        <h1 class=" text-[42px] font-bold font-mada">Curriculum Vitae.</h1>
        <p class=" text-[22px] font-medium font-mada">View and manage all your cv in one place.</p>
        <div class="bg-[#EFF8FF] rounded-lg min-h-screen mt-4">
            <div class="bg-[#AAC7DF] rounded-t-lg w-full h-[61px] py-2 px-[24px] flex items-center justify-between">
                <div>
                    <a href="{{ route('dashboard.create') }}"
                        class="btn btn-sm rounded-full bg-[#ECEFF3] flex items-center">
                        <i class="fi fi-rr-plus-small"></i>Create New CV
                    </a>
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
            <div>
                @forelse ($cvs as $cv)
                    <div class=" px-[52px] py-[91px]">
                        <div class="grid grid-cols-3 gap-[21px]">
                            <div class="card max-w-[366px] bg-white shadow-xl">
                                <figure">
                                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" class="rounded-xl" />
                                    </figure>
                                    <div class="flex justify-between items-center p-3">
                                        <div>
                                            <h2 class="card-title">Name</h2>
                                            <p>Date</p>
                                        </div>
                                        <div class="card-actions">
                                            <i class="fi fi-rr-eye"></i>
                                            <i class="fi fi-rr-trash"></i>
                                            <i class="fi fi-rr-pencil"></i>
                                            <i class="fi fi-rr-download"></i>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex flex-col items-center justify-center py-[175px]">
                        <img src="img/isi db3.png" alt="kosong">
                        <div class="mt-[58px] flex flex-col text-center">
                            <h1 class=" font-mada text-[32px] font-semibold">No CV Starred</h1>
                            <p class=" font-mada text-[22px] font-medium">It seems you haven’t added any CV to your
                                starred
                                list yet. Add one now!</p>
                        </div>
                    </div>
                @endforelse
            </div>
            {{ $cvs->links() }}
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
