<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-6">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lost & Found Management System') }}
            </h1>
        </div>
    </x-slot>


    <div class="w-full h-full flex gap-12 bg-gray-100">
      <div class="bg-gray-800 border-r-2 border-white">
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

        <div class="fixed">
            <ul class="flex flex-col gap-2 p-4 rounded-md">
                    <a href="{{ route('admin') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                      <img src="../images/dashboard.png" alt="">
                      Dashboard</li></a>

                    <a href="{{ route('item') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                    <img class="w-6 h-6" src="../images/item.png" alt="">
                      Lost Item List</li></a>

                    <a href="{{ route('claim') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                    <img class="w-6 h-6" src="../images/reports.png" alt="">
                      Claim Requests</li></a>
            </ul>
        </div>

        <div class="w-28 absolute bottom-4">
            <ul class="flex flex-col gap-2  p-4 rounded-md">
               <a href=""><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                <img class="w-6 h-6" src="../images/logout.png" alt="">
                Logout</li></a>
            </ul>
        </div>
      </div>

      
      <div class="w-full h-[669px] flex flex-col mx-4 mt-8">
          <div class="w-full">
            <h2 class="text-center text-[32px]">Claim Requests</h2>

            <div class="ml-8 mt-4 mb-2">
              <form method="GET" action="">
                <div class="w-64 flex items-center gap-2 border-2">
                  <input class="outline-none border-none" type="text" name="query" placeholder="Search" >
                  <button>
                    <img class="ml-1" src="../images/filter.png" alt="">
                  </button>
                </div>
                  <!-- <ul id="filter" class="flex gap-2 hidden">
                      <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Electronics</li>
                      <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Clothing</li>
                      <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Books</li>
                      <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Accessories</li>
                  </ul> -->
              </form>
         </div>
          </div>
        
          <div class="w-full px-4 px-4 mt-4 overflow-auto">
            <div class="w-full grid grid-cols-3 px-4 px-4 mt-4 gap-6">

              <div name="card" class="flex flex-col bg-white rounded-lg gap-3">
                  <div class="mb-3">
                      <h3 class="p-6 bg-[#eef5fd]">Accessories</h3>
                  </div>

                  <div class="flex flex-col gap-4 pl-2.5 px-2">
                      <div class="border-b-2 border-gray-200">
                        <img class="w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Student ID</h4>
                        <p class="text-sm">23-260829</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Email</h4>
                        <p class="text-sm">johnkevin.delacruz@my.jru.edu</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Item Description</h4>
                        <p class="text-sm">A typical Casio watch has a clean, practical design that varies depending on the model. Many Casio watches feature a rectangular or round case with a digital or analog display. The face of the watch often includes bold numbers or markers for easy readability, with a mix of basic functions like time, date, and day displayed. The watch’s case is usually made of durable plastic or resin for comfort and impact resistance, especially in models like the G-Shock series. </p>
                      </div>

                      <div class="flex justify-evenly mt-2 mb-3">
                        <button class="py-1 px-2  bg-green-600 text-sm text-center rounded-sm">Approve</button>
                        <button class="py-1 px-4  bg-red-600 text-sm text-center rounded-sm">Reject</button>
                      </div>

                  </div>
              </div>

              <div name="card" class="flex flex-col bg-white rounded-lg gap-3">
                  <div class="mb-3">
                      <h3 class="p-6 bg-[#eef5fd]">Accessories</h3>
                  </div>

                  <div class="flex flex-col gap-4 pl-2.5 px-2">
                      <div class="border-b-2 border-gray-200">
                        <img class="w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Student ID</h4>
                        <p class="text-sm">23-260829</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Email</h4>
                        <p class="text-sm">johnkevin.delacruz@my.jru.edu</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Item Description</h4>
                        <p class="text-sm">A typical Casio watch has a clean, practical design that varies depending on the model. Many Casio watches feature a rectangular or round case with a digital or analog display. The face of the watch often includes bold numbers or markers for easy readability, with a mix of basic functions like time, date, and day displayed. The watch’s case is usually made of durable plastic or resin for comfort and impact resistance, especially in models like the G-Shock series. </p>
                      </div>

                      <div class="flex justify-evenly mt-2 mb-3">
                        <button class="py-1 px-2  bg-green-600 text-sm text-center rounded-sm">Approve</button>
                        <button class="py-1 px-4  bg-red-600 text-sm text-center rounded-sm">Reject</button>
                      </div>

                  </div>
              </div>

              <div name="card" class="flex flex-col bg-white rounded-lg gap-3">
                  <div class="mb-3">
                      <h3 class="p-6 bg-[#eef5fd]">Accessories</h3>
                  </div>

                  <div class="flex flex-col gap-4 pl-2.5 px-2">
                      <div class="border-b-2 border-gray-200">
                        <img class="w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Student ID</h4>
                        <p class="text-sm">23-260829</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Email</h4>
                        <p class="text-sm">johnkevin.delacruz@my.jru.edu</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Item Description</h4>
                        <p class="text-sm">A typical Casio watch has a clean, practical design that varies depending on the model. Many Casio watches feature a rectangular or round case with a digital or analog display. The face of the watch often includes bold numbers or markers for easy readability, with a mix of basic functions like time, date, and day displayed. The watch’s case is usually made of durable plastic or resin for comfort and impact resistance, especially in models like the G-Shock series. </p>
                      </div>

                      <div class="flex justify-evenly mt-2 mb-3">
                        <button class="py-1 px-2  bg-green-600 text-sm text-center rounded-sm">Approve</button>
                        <button class="py-1 px-4  bg-red-600 text-sm text-center rounded-sm">Reject</button>
                      </div>

                  </div>
              </div>

              <div name="card" class="flex flex-col bg-white rounded-lg gap-3">
                  <div class="mb-3">
                      <h3 class="p-6 bg-[#eef5fd]">Accessories</h3>
                  </div>

                  <div class="flex flex-col gap-4 pl-2.5 px-2">
                      <div class="border-b-2 border-gray-200">
                        <img class="w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Student ID</h4>
                        <p class="text-sm">23-260829</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Email</h4>
                        <p class="text-sm">johnkevin.delacruz@my.jru.edu</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Item Description</h4>
                        <p class="text-sm">A typical Casio watch has a clean, practical design that varies depending on the model. Many Casio watches feature a rectangular or round case with a digital or analog display. The face of the watch often includes bold numbers or markers for easy readability, with a mix of basic functions like time, date, and day displayed. The watch’s case is usually made of durable plastic or resin for comfort and impact resistance, especially in models like the G-Shock series. </p>
                      </div>

                      <div class="flex justify-evenly mt-2 mb-3">
                        <button class="py-1 px-2  bg-green-600 text-sm text-center rounded-sm">Approve</button>
                        <button class="py-1 px-4  bg-red-600 text-sm text-center rounded-sm">Reject</button>
                      </div>

                  </div>
              </div>
            
    

              </div>
              

           </div>
        </div>


           </div>
        </div>
      </div>
    </div>


    <!-- <script src="{{ asset('js/filter.js') }}"></script> -->
    <!-- <footer class="w-full flex items-center justify-center absolute bottom-4 text-[12px]">
        © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer> -->
</x-app-layout>