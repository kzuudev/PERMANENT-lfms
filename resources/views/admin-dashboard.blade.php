<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-6">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lost & Found Management System') }}
            </h1>

            <ul class="flex gap-4 bg-white p-4 rounded-md items-center">
                <a href="{{ route('admin') }}"><li class="hover:underline duration-700 cursor-pointer">Dashboard</li></a>
                <a href="{{ route('item') }}"><li class="hover:underline duration-700 cursor-pointer">Lost Item List</li></a>
                <a href="{{ route('reports') }}"><li class="hover:underline duration-700 cursor-pointer">Latest Reports</li></a>
            </ul>
        </div>
    </x-slot>

    <div class="flex flex-col my-28">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-[38px] text-gray-800 dark:text-gray-200 leading-tight">Lost Items Overview</h2>
      </div>

      <div class="w-full grid grid-cols-2 grid-rows-2 my-28 px-12 gap-y-12 gap-x-8">
          <div class="col-span-1 p-7 border-4">
            <h2 class="text-gray-400 text-[20px]">Total Lost Item</h2>
            <p class="text-[32px]">120</p>
          </div>

          <div class="col-span-1 p-7 border-4">
            <h2 class="text-gray-400 text-[20px]">Electronics</h2>
            <p class="text-[32px]">15</p>
          </div>

          <div class="col-span-1 p-7 border-4">
            <h2 class="text-gray-400 text-[20px]">Clothing</h2>
            <p class="text-[32px]">10</p>
          </div>

          <div class="col-span-1 p-7 border-4">
            <h2 class="text-gray-400 text-[20px]">Accessories</h2>
            <p class="text-[32px]">30</p>
          </div>
      </div>
    </div>

    <footer class="w-full flex items-center justify-center pt-40 pb-2 text-[12px]">
        © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer>
</x-app-layout>


