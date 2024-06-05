<x-layout>
  {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
{{-- hero --}}
  <section class="h-screen mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
  <div class=" grid lg:grid-cols-2">
  <div class="lg:py-24">
    <div class="px-4  rounded">
      <div class="grid grid-cols-6">
        <div class="py-1 my-1 bg-slate-200 rounded-full col-start-1 col-end-4 md:col-end-3 flex align-items-center pl-2 lg:pl-0">
          <div class="pl-2 py-1 px-2">
            <h4 class="font-semibold text-[10px] lg:text-xs text-green-700 italic">Operasi Sistem Integrasi</h4>
          </div>
        </div>
      </div>
      <h1 class="font-bold text-3xl lg:text-5xl antialiased hover:subpixel-antialiased md:subpixel-antialiased mb-2">Kami merasa senang jika anda merasa terbantu</h1>   
      <p class=" text-xs md:text-base text-justify text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat consequatur accusantium soluta qui minus nesciunt itaque, labore, id nam, illum rem? Maiores nesciunt quaerat cum rem odit necessitatibus vero iure?</p>
      <div class="w-full  mt-3">
        <button class="text-base font-semibold bg-green-700 text-white rounded-3xl py-[7px] px-6 hover:opacity-80 transition duration-400">Baca lagi</button>
      </div>
    </div>
  </div>
    <div class="lg:py-20">
      <img src="{{ asset('img/osi.png') }}" class="max-w-full mx-auto grayscale hover:grayscale-0 transition duration-500 opacity-60 hover:opacity-100 transform hover:scale-105" alt="Gambar kura-kura ninja">
    </div>
  </div>
</section>
  <div class="border border-solid border-slate-300"></div>
{{-- main --}}
<section class="mb-4 mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 bg-gray-100">
  <div class="mt-4 grid grid-cols-2">
    <div class="">
      <img src="{{ asset('img/osi3.png') }}" alt="Kura kura ninja 2" class="max-w-full mx-auto w-[30rem]  grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition duration-500 hover:-scale-x-100">
    </div>
    <div class="items-center py-20">
      <h1 class="font-bold text-2xl mb-2">Kenapa website ini dibuat?</h1>
      <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit repellat, ratione eaque quo rerum qui ipsum excepturi maxime exercitationem, itaque distinctio quas. Nostrum tenetur sed voluptas quas, ad sunt eum tempora ipsum aliquid eaque. Rerum eum optio sint ad id.</p>
    </div>
  </div>
</section>
</x-layout>