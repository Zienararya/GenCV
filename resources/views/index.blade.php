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
{{-- NAVBAR HEREE --}}
<div class="navbar">
  <div class="flex-1">
    <a class="text-[40px] text-white font-titan">'GEN<span class="text-[#725A7A]">C</span><span class="text-[#1F3F5A]">V</span></a>
  </div>
  <div class="flex-none">
    <button class="btn btn-square btn-ghost">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
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
      <button class="btn bg-white rounded-full text-secondary font-ultra">START!</button>
    </div>
  </div>
</div>
</body>
</html>