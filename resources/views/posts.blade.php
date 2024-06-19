<x-layout >
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="flex flex-wrap gap-4 mx-auto mt-8 px-8 justify-center">
  @foreach ($posts as $post)
  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
   <a href="#"><img src="{{ asset('img/osi.png') }}" alt="Random image from unsplash" class="w-full "></a>
   <div class="p-5">
     <figcaption class="flex items-center mb-3 ">
       <a href="/authors/{{ $post->author->username }}"><img src="{{ asset('img/aan.jpg') }}" alt="Photo penulis" class="rounded-full w-9 h-9"></a>
       <div class="space-y-0.5 font-medium text-left rtl:text-right ms-2">
         <a href="/authors/{{ $post->author->username }}"><div class="text-base text-slate-700">{{ $post->author->name }}</div></a>
         {{-- <div class="text-sm text-gray-500">{{$post->category->name}}</div> --}}
         </div>
         </figcaption>
         <a href="/posts/{{ $post['slug'] }}">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $post['title'] }}</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 ">{{ Str::limit($post['body'], 150) }}</p>
          <div class="mb-3 font-medium text-slate-500">{{ $post->created_at->diffForHumans() }}</div>
          <a href="/posts/{{ $post['slug'] }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg></a>
              </div>
  </div>
@endforeach
</div> 

</x-layout>