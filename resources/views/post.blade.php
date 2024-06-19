<x-layout>
  <x-slot:title></x-slot:title>
  <div class="flex justify-center">
    <article class="py-8 max-w-screen-xl ">
      <div class="flex flex-col items-center ">
        <h2 class="mb-4 lg:text-5xl md:text-4xl text-3xl tracking-tight font-bold text-gray-900 text-wrap text-center lg:mx-32 mx-4">{{ $post['title'] }}</h2>
        <figcaption class="flex items-center gap-4">
          <a href="/authors/{{ $post->author->username }}"><img src="{{ asset('img/aan.jpg') }}" alt="Photo penulis" class="rounded-full w-10 h-10"></a>
          <div class="font-medium">
            <a href="/authors/{{ $post->author->username }}"><div class="text-blue-900">{{ $post->author->name }}</div></a>
            {{-- <div class="text-sm text-gray-500">{{$post->category->name}}</div> --}}
            <div class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</div>
            </div>
            </figcaption>
      </div>
      <div class="mx-8">
        <p class="my-4 text-gray-900 font-light   first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 firstx`-letter:me-3 first-letter:float-start">{{ $post['body']}}. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rem porro aliquid expedita velit autem accusantium dignissimos labore dolorem magni, cum assumenda officiis repellendus, quo, ducimus natus tempora illo quae. Officia ipsa suscipit in magni aperiam tempora eaque vero? Inventore ullam debitis repellat porro perspiciatis in dicta voluptatem neque, aut, hic dolor maiores dignissimos unde nesciunt. Enim facere nemo ex dolorum quod odit eos reiciendis, quas dolores? Aut tempora asperiores harum vel? Ratione ipsam debitis culpa dicta, vero corrupti provident, repellat quidem facilis maxime explicabo ad impedit. Tenetur debitis placeat saepe exercitationem. Sapiente aspernatur deserunt est possimus veniam vero voluptas mollitia quidem unde quam praesentium aperiam delectus velit sed voluptatibus labore, enim provident impedit, dolores sequi fugiat? Nam eligendi deleniti tenetur, natus incidunt deserunt recusandae fuga pariatur et ad odio! Est libero quas voluptates, repellendus nihil eligendi iste, ex dolorum eaque ullam voluptas quam commodi molestiae totam sapiente. Labore qui quam delectus neque nam doloremque iusto tempora dolore tenetur illum repellendus officia, perferendis velit quos error. Quae harum perspiciatis ipsa. Dolorem cum ab vel eos ipsa soluta error esse porro, quisquam quo deserunt sequi adipisci consequuntur aliquid rem nam eligendi excepturi eaque molestias ducimus quae doloribus. Laborum atque voluptatum excepturi.</p>
        <div class="">
          <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
        </div>
      </div>
    </article>
  </div>
</x-layout>