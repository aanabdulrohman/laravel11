<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
  {{-- css --}}
  @vite('resources/css/app.css')
  {{-- font inter --}}
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  {{-- alipne js --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
  
  <x-navbar></x-navbar>
  {{-- <x-header>{{ $title }}</x-header> --}}
  <main class="border-solid ">
    <div class="">
      {{ $slot }}
    </div>
    <div class="border border-solid bg-slate-300">
      {{-- {{ $lot }} --}}
    </div>
  </main>
</div>

</html>