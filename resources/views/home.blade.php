<x-layout>
  {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
{{-- hero --}}
  <section class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
  <div class=" grid lg:grid-cols-2 lg:py-24">
    <div class="grid-cols-1 grid place-content-center px-4 ">
      <div class="grid grid-cols-3 md:grid-cols-5 lg:pl-4">
        <div class="lg:mb-4 mb-2 px-6 rounded-full col-span-2 md:py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          <h1 class="lg:font-medium font-normal text-sm italic text-green-700">Operasi sistem integrasi</h1>
        </div>
      </div>
      <div class="px-4">
          <h1 class="font-bold text-3xl lg:text-7xl antialiased hover:subpixel-antialiased md:subpixel-antialiased mb-4">Ask anything</h1>   
          <p class=" text-xs md:text-base text-justify text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat consequatur accusantium soluta qui minus nesciunt itaque, labore, id nam, illum rem? Maiores nesciunt quaerat cum rem odit necessitatibus vero iure?</p>
         <div class="w-full  mt-3">
        <button class="text-base font-semibold bg-green-700 text-white rounded-3xl py-[7px] px-6 hover:opacity-80 transition duration-400">Baca lagi</button>
        </div>
      </div>
     </div>
    <div class="mt-4 grid grid-cols-1 place-content-center-center">
      <div class="hover:drop-shadow-md bg-white hover:rounded-md ">
        <img src="{{ asset('img/osi.png') }}" class="max-w-full mx-auto grayscale hover:grayscale-0 transition duration-500 opacity-60 hover:opacity-100 " alt="Gambar kura-kura ninja">
      </div>
    </div>
  </div>
</section>
{{-- why --}}
<section class="bg-gray-100">
  <div class="grid lg:grid-cols-2 mb-4 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 h-96">
    <div class="grid grid-cols-1 place-content-center">
      <h1 class="font-bold text-4xl mb-2">Kenapa website ini dibuat?</h1>
      <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit repellat, ratione eaque quo rerum qui ipsum excepturi maxime exercitationem, itaque distinctio quas. Nostrum tenetur sed voluptas quas, ad sunt eum tempora ipsum aliquid eaque. Rerum eum optio sint ad id.</p>
    </div>
    <div class="mt-4 grid grid-cols-1 place-content-center">
      <img src="{{ asset('img/osi3.png') }}" alt="Kura kura ninja 2" class="max-w-full mx-auto w-[30rem]  grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition duration-500 ">
    </div>
  </div>
</section>
{{-- Team --}}
<section class="">
  <div class="min-h-screen ">
    <div class="mb-10 ">
      <h1 class="text-center font-bold text-4xl mt-10">Team Oprasi Integrasi</h1>
      <p class="text-center text-gray-500 font-medium text-base mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consectetur facere culpa odit illo neque dolorem eius excepturi magni ipsam.</p>
    </div>
    <div class="flex  items-center justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-black/30 transition-shadow">
        <div class="h-96 w-72">
          <img src="{{ asset('img/yuyus.jpg') }}" class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/60 group-hover:to-black/70"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[60%] group-hover:translate-y-0 transition-all duration-500">
          <h1 class="text-3xl font-bold text-white">Bpk Yuyus</h1>
          <p class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga corporis ducimus!</p>
          <button class="rounded-full bg-neutral-900 py-2 px-3.5 text-sm capitalize text-white shadow-black/60">
            See more
          </button>
        </div>
      </div>
      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-black/30 transition-shadow">
        <div class="h-96 w-72">
          <img src="{{ asset('img/ruben.jpg') }}" class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/60 group-hover:to-black/70"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[60%] group-hover:translate-y-0 transition-all duration-500">
          <h1 class="text-3xl font-bold text-white">Ruben</h1>
          <p class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga corporis ducimus!</p>
          <button class="rounded-full bg-neutral-900 py-2 px-3.5 text-sm capitalize text-white shadow-black/60">
            See more
          </button>
        </div>
      </div>
      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-black/30 transition-shadow">
        <div class="h-96 w-72">
          <img src="{{ asset('img/adit.jpg') }}" class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/60 group-hover:to-black/70"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[60%] group-hover:translate-y-0 transition-all duration-500">
          <h1 class="text-3xl font-bold text-white">Pradit</h1>
          <p class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga corporis ducimus!</p>
          <button class="rounded-full bg-neutral-900 py-2 px-3.5 text-sm capitalize text-white shadow-black/60">
            See more
          </button>
        </div>
      </div>
      <div class="group relative items-center justify-center overflow-hidden cursor-pointer hover:shadow-black/30 transition-shadow">
        <div class="h-96 w-72">
          <img src="{{ asset('img/aan.jpg') }}" class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/60 group-hover:to-black/70"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[60%] group-hover:translate-y-0 transition-all duration-500">
          <h1 class="text-3xl font-bold text-white">Aan</h1>
          <p class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga corporis ducimus!</p>
          <button class="rounded-full bg-neutral-900 py-2 px-3.5 text-sm capitalize text-white shadow-black/60">
            See more
          </button>
        </div>
      </div>
    </div>
    
    </div>
  </div>
</section>
</x-layout>