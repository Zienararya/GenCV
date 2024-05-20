<x-create-layout>
    <div class="py-[42px] px-[81px]">
        <div class="flex flex-col items-center">
            <div>
                <h1 class="font-mada font-bold text-[42px]">New CV</h1>
            </div>
            <div>
                <p class="font-mada font-medium text-[22px]">View and manage all your cv in one place</p>
            </div>
        </div>
        <div>
            <div class="bg-[#EFF8FF] rounded-lg mt-4">
                <div class="bg-[#AAC7DF] rounded-t-lg w-full h-[61px] py-2 px-[24px] flex items-center justify-between">
                    <div>
                        <a href="{{ route('dashboard.index') }}"
                            class="btn btn-sm rounded-full bg-[#ECEFF3] flex items-center px-[52px]">Back</a>
                    </div>
                    <form action="{{ route('dashboard.update', $cv->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <button type="submit"
                                class="btn btn-sm rounded-full bg-[#ECEFF3] flex items-center px-[52px]">Next</button>
                        </div>
                </div>
                <div class=" py-[46px] px-[91px] grid grid-cols-5 gap-20">
                    <div class="col-span-2">
                        <h1 class="font-mada font-bold text-[32px]">Personal Details</h1>
                        <div class="grid grid-cols-2 gap-5">
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Job Title</span>
                                </div>
                                <input type="text" placeholder="Ex: Network Engineer" name="job_title"
                                    value="{{ old('job_title', $cv->job_title) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('job_title')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Upload Photo</span>
                                </div>
                                <input type="file" name="photo"
                                    class="file-input file-input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('photo')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">First Name</span>
                                </div>
                                <input type="text" name="first_name" value="{{ old('first_name', $cv->first_name) }}"
                                    placeholder="Ex: Ihsanta"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('first_name')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Last Name</span>
                                </div>
                                <input type="text" name="last_name" placeholder="Ex: Zaki"
                                    value="{{ old('last_name', $cv->last_name) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('last_name')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Email</span>
                                </div>
                                <input type="text" name="email" placeholder="Ex: gencv@gmail.com"
                                    value="{{ old('email', $cv->email) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('email')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Phone</span>
                                </div>
                                <input type="text" name="phone" placeholder="Ex: 082312345678"
                                    value="{{ old('phone', $cv->phone) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('phone')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Country</span>
                                </div>
                                <input type="text" name="country" placeholder="Ex: Indonesia"
                                    value="{{ old('country', $cv->country) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('country')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Address</span>
                                </div>
                                <input type="text" name="address" placeholder="Ex: Jl. Mawar"
                                    value="{{ old('address', $cv->address) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('address')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Date of Birth</span>
                                </div>
                                <input type="text" name="date_birth" placeholder="DD/MM/YYYY"
                                    value="{{ old('date_birth', $cv->date_birth) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('date_birth')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Place of Birth</span>
                                </div>
                                <input type="text" name="place_birth" placeholder="Ex: Surabaya"
                                    value="{{ old('place_birth', $cv->place_birth) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('place_birth')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Skills</span>
                                </div>
                                <input type="text" name="skill" placeholder="Ex: Project management"
                                    value="{{ old('skill', $cv->skill) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('skill')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Language</span>
                                </div>
                                <input type="text" name="language" placeholder="Ex: Bahasa Indonesia"
                                    value="{{ old('language', $cv->language) }}"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                @error('language')
                                    <div class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-mada font-bold text-[32px]">Summary</h1>
                        <textarea name="summary" class="textarea textarea-bordered mt-5 bg-[#E8EFF4]"
                            placeholder="High school student majoring in Network Engineering...">{{ old('summary', $cv->summary) }}</textarea>
                        @error('summary')
                            <div class="label">
                                <span class="label-text-alt">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <h1 class="font-mada font-bold text-[32px]">Edit</h1>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <p>Loerm Ipsum</p>
                            </div>
                            <div>
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">School/University</span>
                                    </div>
                                    <input name="education" type="text" placeholder="Ex: EEPIS"
                                        class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                </label>
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Degree</span>
                                    </div>
                                    <input type="text" placeholder="Ex: Bachelor's"
                                        class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                </label>
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Field of study</span>
                                    </div>
                                    <input type="text" placeholder="Ex: Computer"
                                        class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                </label>
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Start date - End date</span>
                                    </div>
                                    <input type="text" placeholder="MM/YYYY - MM/YYYY"
                                        class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                                </label>
                                <label class="form-control">
                                    <div class="label">
                                        <span class="label-text">Description</span>
                                    </div>
                                    <textarea class="textarea textarea-bordered h-24 bg-[#E8EFF4]"
                                        placeholder="Earn a 3.5 GPA and have a good track record..."></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-create-layout>
