<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>GenCV</title>
</head>

<body>
    <div class="absolute -z-10 max-h-screen">
        <img src="img/Vector 3.svg" alt="pattern">
    </div>
    {{-- NAVBAR HEREE --}}
    <div class="navbar">
        <div class="flex-1">
            <a class="text-[40px] text-white font-titan">'GEN<span class="text-[#725A7A]">C</span><span
                    class="text-[#1F3F5A]">V</span></a>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <i class="fi fi-rr-menu-burger text-xl text-white"></i>
            </button>
        </div>
    </div>
    {{-- HERO HEREE --}}
    <div class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <div class=" flex">
                    <div class="flex">
                        <h1 class=" text-white font-cherry text-[120px]">GRAB</h1>
                    </div>
                    <div class=" flex flex-col justify-center items-center mt-5">
                        <div>
                            <p class="font-castoro text-[35px] text-secondary">YOUR</p>
                        </div>
                        <div>
                            <p class="font-castoro text-[35px] text-secondary">CV</p>
                        </div>
                    </div>
                </div>
                <p class=" text-[35px] text-secondary font-castoro">immediately!</p>
                <div class="flex items-center justify-center">
                    <button class="btn btn-lg bg-white rounded-full flex items-center justify-center">
                        <p class="text-secondary font-ultra text-[49px]">START!</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
