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
            <div class="bg-[#EFF8FF] rounded-lg h-[814px] mt-4">
                <div class="bg-[#AAC7DF] rounded-t-lg w-full h-[61px] py-2 px-[24px] flex items-center justify-between">
                    <div>
                        <button onclick="location.href='dashboard'"
                            class="btn btn-sm rounded-full bg-[#ECEFF3] flex items-center px-[52px]">Back</button>
                    </div>
                    <div>
                        <button onclick="location.href='dashboard'"
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
                                <input type="text" placeholder="Ex: Network Engineer"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Upload Photo</span>
                                </div>
                                <input type="file"
                                    class="file-input file-input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">First Name</span>
                                </div>
                                <input type="text" placeholder="Ex: Ihsanta"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Last Name</span>
                                </div>
                                <input type="text" placeholder="Ex: Zaki"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Email</span>
                                </div>
                                <input type="text" placeholder="Ex: gencv@gmail.com"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Phone</span>
                                </div>
                                <input type="text" placeholder="Ex: 082312345678"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Country</span>
                                </div>
                                <input type="text" placeholder="Ex: Indonesia"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Address</span>
                                </div>
                                <input type="text" placeholder="Ex: Jl. Mawar"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Date of Birth</span>
                                </div>
                                <input type="text" placeholder="MM / DD / YYYY"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Place of Birth</span>
                                </div>
                                <input type="text" placeholder="Ex: Surabaya"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Skils</span>
                                </div>
                                <input type="text" placeholder="Ex: Project management"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Language</span>
                                </div>
                                <input type="text" placeholder="Ex: Bahasa Indonesia"
                                    class="input input-bordered w-full max-w-xs bg-[#E8EFF4]" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-mada font-bold text-[32px]">Summary</h1>
                        <textarea class="textarea textarea-bordered mt-5 bg-[#E8EFF4]"
                            placeholder="High school student majoring in Network Engineering..."></textarea>
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
                                    <input type="text" placeholder="Ex: EEPIS"
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
            </div>
        </div>
    </div>
</x-create-layout>
