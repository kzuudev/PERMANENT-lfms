<x-app-layout class="">
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-6">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lost & Found Management System') }}
            </h1>
        </div>
    </x-slot>


    <div class="flex gap-6">
      <div class="">
        <div class="mx-4 mt-8 mb-2">
            <form method="GET" action="">
              <div class="flex items-center gap-2">
                <input type="text" name="query" placeholder="Search" class="rounded">
              </div>
                <ul id="filter" class="flex gap-2 hidden">
                    <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Electronics</li>
                    <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Clothing</li>
                    <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Books</li>
                    <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Accessories</li>
                </ul>
            </form>
        </div>

        <div>
            <ul class="flex flex-col gap-2 bg-white p-4 rounded-md">
                    <a href="{{ route('admin') }}"><li class="hover:bg-gray-300 px-2 py-1 rounded cursor-pointer">Dashboard</li></a>
                    <a href="{{ route('item') }}"><li class="hover:bg-gray-300 px-2 py-1 rounded cursor-pointer">Lost Item List</li></a>
                    <a href="{{ route('reports') }}"><li class="hover:bg-gray-300 px-2 py-1 rounded cursor-pointer">Latest Reports</li></a>
            </ul>
        </div>

        <div class="absolute bottom-4">
            <ul class="flex flex-col gap-2 bg-white p-4 rounded-md">
               <a href=""><li class="hover:bg-gray-300 px-2 py-1 rounded cursor-pointer">Logout</li></a>
            </ul>
        </div>
      </div>

      <div class="w-full flex flex-col mx-4 mt-8 mb-2 bg-gray-100">
        <div class="w-full">
          <h2 class="text-center text-[32px]">Admin Dashboard</h2>
        </div>
    
          <div>
            <div class="grid grid-cols-3 mt-8 gap-6">
              <div class="flex items-center justify-between px-4 py-10 border-b-2">
                <div class="px-4 py-10">
                  <h3>Listed Founds items</h3>
                  <p>2</p>
                </div>
                
                <img src="../images/icons8-file-48.png" alt="">
              </div>

              <div class="flex items-center justify-between px-4 py-10 border-b-2">
                  <div>
                    <h3>New Request</h3>
                    <p>1</p>
                  </div>

                  <img src="../images/request.png" alt="">
              </div>

              <div class="flex items-center justify-between px-4 py-10 border-b-2">
                  <div>
                    <h3>In Process Requests</h3>
                    <p>3</p>
                  </div>

                  <img src="../images/process.png" alt="">
              </div>

              <div class="flex items-center justify-between px-4 py-10 border-b-2">
                  <div>
                    <h3>Claimed Items</h3>
                    <p>5</p>
                  </div>
  
                  <img src="../images/claimed.png" alt="">
              </div>

              <div class="flex items-center justify-between px-4 py-10 border-b-2">
                  <div>
                      <h3>Rejected Requests</h3>
                      <p>2</p>
                  </div>
    
                    <img src="../images/rejected.png" alt="">
                </div>
            </div>
        </div>
      </div>

    </div>


    <script src="{{ asset('js/filter.js') }}"></script>
    <footer class="w-full flex items-center justify-center absolute bottom-4 text-[12px]">
        © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer>
</x-app-layout>


