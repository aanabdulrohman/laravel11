<x-layout>
  <div class="h-screen border flex flex-col justify-center items-center">
    <div class="w-96 h-96 border shadow-md rounded-md">
      <h1 class="text-center mt-5 font-semibold text-green-700">Welcome back!</h1>
      <h3 class="font-normal text-gray-400 text-sm text-center">Enter your details to get started</h3>
      <div class="border py-2 px-3 rounded-md mx-8 mt-8 hover:shadow-md shadow-sm">
        <input type="text" placeholder="Email or Username">
      </div>
      <div class="border py-2 px-3 rounded-md mx-8 mt-4 hover:shadow-md shadow-sm">
        <input type="text" placeholder="Password">
      </div>
      <div class="bg-green-500 text-white py-2 text-center rounded-md mx-8 mt-4 hover:bg-green-700 transition duration-500 ease-in-out font-medium">
        <a href=""><button>Login</button></a>
      </div>
    </div>
  </div>
</x-layout>