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
                <div class="px-[52px] py-[91px]">
                    <div class="grid grid-cols-3 gap-8">
                        @forelse ($cvs as $cv)
                            <div class="card max-w-[366px] bg-white shadow-xl">
                                <figure">
                                    <img src="https://images.unsplash.com/photo-1698047681432-006d2449c631?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Shoes" class="rounded-xl" />
                                    </figure>
                                    <div class="flex justify-between items-center p-3">
                                        <div>
                                            <h2 class="card-title">{{ $cv->first_name }}_{{ $cv->job_title }}</h2>
                                            <p>{{ $cv->updated_at->format('d/m/Y') }}</p>
                                        </div>
                                        <div class="card-actions flex space-x-2">
                                            <a href="{{ route('dashboard.show', $cv->id) }}" class=""><i
                                                    class="fi fi-rr-eye"></i></a>
                                            <form onsubmit="return confirm('Apakah anda yakin?')"
                                                action="{{ route('dashboard.destroy', $cv->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button><i class="fi fi-rr-trash"></i></button>
                                            </form>
                                            <a href="{{ route('dashboard.edit', $cv->id) }}"><i
                                                    class="fi fi-rr-pencil"></i></a>
                                            <i class="fi fi-rr-download"></i>
                                        </div>
                                    </div>
                            </div>
                        @empty
                    </div>
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
            </div>
        </div>
    </div>
    <div class=" mt-5">
        {{ $cvs->links() }}
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
