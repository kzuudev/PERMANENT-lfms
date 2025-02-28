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
            <h2 class="text-center text-[32px]">Lost Item Lists</h2>

            <div class="ml-8 mt-8 mb-2">
              <form method="GET" action="">
                <div class="w-64 flex items-center gap-2 border-2">
                  <input class="outline-none border-none" type="text" name="query" placeholder="Search" >
                  <button id="filter-button" class="relative">
                    <img class="ml-1 focus" src="../images/filter.png" alt="">
                  </button>
                </div>

                <div id="filter" class="w-8/12 flex items-center p-4 mt-2 bg-gray-100 absolute border rounded-md hidden">
                  <h3 class="w-full font-medium">Search in</h3>
                    <div class="w-full flex flex-nowrap gap-9">
                      <button class="w-full flex justify-between py-2 px-2 bg-white flex-nowrap text-sm border rounded">
                        <p class="font-medium">All Submissions</p>
                        <p>1</p>
                      </button>
                     
                      <button class="w-full flex justify-between py-2 px-2 bg-white flex-nowrap text-sm border rounded">
                        <p class="font-medium">All Time</p>
                        <p>1</p>
                      </button>
                    </div>
                </div>
                  
                 
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
                        <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                        <p class="text-sm">Watch</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                        <p class="text-sm">Library at 3:00 pm</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="text-sm">John Kevin</p>
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
                        <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                        <p class="text-sm">Watch</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                        <p class="text-sm">Library at 3:00 pm</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="text-sm">John Kevin</p>
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
                        <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                        <p class="text-sm">Watch</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                        <p class="text-sm">Library at 3:00 pm</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="text-sm">John Kevin</p>
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
                        <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                        <p class="text-sm">Watch</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                        <p class="text-sm">Library at 3:00 pm</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="text-sm">John Kevin</p>
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
                        <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                        <p class="text-sm">Watch</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                        <p class="text-sm">Library at 3:00 pm</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="text-sm">John Kevin</p>
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
                        <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                        <p class="text-sm">Watch</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                        <p class="text-sm">Library at 3:00 pm</p>
                      </div>

                      <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="text-sm">John Kevin</p>
                      </div>
                  </div>
              </div>
              

           </div>
        </div>


           </div>
        </div>
      </div>
    </div>


    {{-- <script src="{{ asset('js/filter.js') }}"></script>  --}}
</x-app-layout>