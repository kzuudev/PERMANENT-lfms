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

                    <a href="{{ route('assign') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                    <img class="w-6 h-6" src="../images/user-management.png" alt="">
                    User Management</li></a>
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

      
      <div class="w-full h-[698px] flex flex-col mx-4 mt-8 relative">
          <div class="w-full">
            <h2 class="text-center text-[32px]">Lost Item Lists</h2>

            <div class="ml-8 mt-8 mb-2">
              <form method="GET" action="">
                <div class="w-60 flex items-center gap-2 border-2">
                  <input class="outline-none border-none" type="text" name="query" placeholder="Search" >
                  <button id="filter-button" class="relative">
                    <img class="w-5 h-5 " src="../images/filter.png" alt="">
                  </button>
                </div>

                <div id="filter" class="w-6/12 flex items-center p-4 mt-2 bg-gray-100 absolute border rounded-md hidden">
                  <h3 class="w-full font-medium">Search in</h3>
                    <div class="w-full flex flex-nowrap gap-9">
                      <button id="status-button" class="w-full flex items-center justify-between py-2 px-2 bg-white flex-nowrap text-sm border rounded">
                        <p class="font-medium">All Submissions</p>
                        <a id="status-lists" class="w-3 h-3 relative" href=""><img src="../images/down-arrow.png" alt=""></a>
                      </button>

                      <div id="item-lists" class="w-full mt-2  absolute top-14 hidden">
                        <ul class="w-[22.4%] flex flex-col p-2 bg-gray-300 gap-1 rounded">
                          <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                            <li>
                              Pending
                            </li>
                          </a>

                          <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                            <li>
                              Matched
                            </li>
                          </a>

                          <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                            <li>
                              Reopened
                            </li>
                          </a>

                          <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                            <li>
                              Unresolved
                            </li>
                          </a>
                        </ul>
                      </div>
                     
                      <div class="w-full">
                        <button id="dateFilter" class="w-full flex items-center justify-between py-2 px-2 bg-white flex-nowrap text-sm border rounded">
                          <p class="font-medium">All Time</p>
                          <a id="dateList" class="w-3 h-3 relative" href=""><img src="../images/down-arrow.png" alt=""></a>
                        </button>

                        <div id="dateFilterForm" class="w-2/5 h-2/5 mt-2 absolute top-14 hidden">
                          <form class="flex">
                            <input class="mr-4 text-xs rounded" type="date" id="from_date" name="from_date">
                            <input class="text-xs rounded" type="date" id="to_date" name="to_date">
                            {{-- <button type="submit">Apply Filter</button> --}}
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                  
                 
              </form>
         </div>
          </div>
         
      <div class="w-full px-4 px-4 mt-4 overflow-auto">
            <div class="w-full grid grid-cols-3 px-4 px-4 mt-4 gap-6">
                <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
                    <div class="mb-3">
                        <h3 class="category p-6 bg-[#eef5fd]">Accessories</h3>
                    </div>

                  <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                        <div class="border-b-2 border-gray-200">
                          <img class="item-img w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 id="studID" class="text-lg text-gray-400">Student ID</h4>
                          <p class="student-id text-sm">23-260829</p>
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Email</h4>
                          <p  class="student-email text-sm">johnkevin.delacruz@my.jru.edu</p>
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                          <p 
                          class="find-item text-sm">Watch</p>
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">What date did you find it</h4>
                          <p class="date text-sm">April 7, 2025</p>
                        </div>
                        
                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                          <p class="place-found text-sm">Library at 3:00 pm</p>
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Turned it by</h4>
                          <p  class="postName text-sm">John Kevin</p>
                        </div>
                    </div>
              </div>

              <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
                <div class="mb-3">
                    <h3 class="category p-6 bg-[#eef5fd]">Electronics</h3>
                </div>

              <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                    <div class="border-b-2 border-gray-200">
                      <img class="item-img w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 id="studID" class="text-lg text-gray-400">Student ID</h4>
                      <p class="student-id text-sm">23-250216</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Email</h4>
                      <p  class="student-email text-sm">mico.villanueva@my.jru.edu</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                      <p 
                       class="find-item text-sm">Laptop</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What date did you find it</h4>
                      <p class="date text-sm">April 7, 2025</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                      <p class="place-found text-sm">Centennial at 1:00 pm</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Turned it by</h4>
                      <p  class="postName text-sm">Mico Villanueva</p>
                    </div>
                </div>
            </div>

            <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
              <div class="mb-3">
                  <h3 class="category p-6 bg-[#eef5fd]">Books</h3>
              </div>

                <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                    <div class="border-b-2 border-gray-200">
                      <img class="item-img w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 id="studID" class="text-lg text-gray-400">Student ID</h4>
                      <p class="student-id text-sm">23-203229</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Email</h4>
                      <p  class="student-email text-sm">shanhiro.rosario@my.jru.edu</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                      <p 
                      class="find-item text-sm">Integrative Programming 1</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What date did you find it</h4>
                      <p class="date text-sm">April 7, 2025</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                      <p class="place-found text-sm">Ground Floor at 4:00 pm</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Turned it by</h4>
                      <p  class="postName text-sm">Shan Hiro Rosario</p>
                    </div>
                </div>
            </div> 
            
            <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
              <div class="mb-3">
                  <h3 class="category p-6 bg-[#eef5fd]">Clothing</h3>
              </div>

                <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                    <div class="border-b-2 border-gray-200">
                      <img class="item-img w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 id="studID" class="text-lg text-gray-400">Student ID</h4>
                      <p class="student-id text-sm">23-258981</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Email</h4>
                      <p  class="student-email text-sm">shanhiro.rosario@my.jru.edu</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                      <p 
                      class="find-item text-sm">Black Hoodie</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What date did you find it</h4>
                      <p class="date text-sm">April 7, 2025</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                      <p class="place-found text-sm">Canteen at 3:00 pm</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Turned it by</h4>
                      <p  class="postName text-sm">Alvin Remitilla</p>
                    </div>
                </div>
            </div>

            <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
              <div class="mb-3">
                  <h3 class="category p-6 bg-[#eef5fd]">Accessories</h3>
              </div>

                <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                    <div class="border-b-2 border-gray-200">
                      <img class="item-img w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 id="studID" class="text-lg text-gray-400">Student ID</h4>
                      <p class="student-id text-sm">23-232229</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Email</h4>
                      <p  class="student-email text-sm">joshua.anoos@my.jru.edu</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                      <p 
                      class="find-item text-sm">Lipstick</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What date did you find it</h4>
                      <p class="date text-sm">April 7, 2025</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                      <p class="place-found text-sm">Parking at 2:00 pm</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Turned it by</h4>
                      <p  class="postName text-sm">Joshua Anoors</p>
                    </div>
                </div>
            </div>

            <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
              <div class="mb-3">
                  <h3 class="category p-6 bg-[#eef5fd]">Electronics</h3>
              </div>

                <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                    <div class="border-b-2 border-gray-200">
                      <img class="item-img w-24 h-24 mb-4 rounded" src="./images/sample-watch.jpg.webp" alt="">
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 id="studID" class="text-lg text-gray-400">Student ID</h4>
                      <p class="student-id text-sm">23-202129</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Email</h4>
                      <p  class="student-email text-sm">joshuaythiel.arriesgado@my.jru.edu</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What did you lose/find</h4>
                      <p 
                      class="find-item text-sm">Phone (Iphone 16 promax)</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">What date did you find it</h4>
                      <p class="date text-sm">April 7, 2025</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Where did you find it, and at what time did you find it?</h4>
                      <p class="place-found text-sm">Room 403 at 8:00 am</p>
                    </div>

                    <div class="flex flex-col gap-2">
                      <h4 class="text-lg text-gray-400">Turned it by</h4>
                      <p  class="postName text-sm">Joshua Ythiel Arriesgado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>   
      <div id="modal" class="w-1/4 h-full absolute right-0 bottom-[2px]  hidden">
        <div id="selected-card" class="card w-full h-5/6 flex flex-col bg-white rounded-lg gap-3 drop-shadow-xl overflow-auto hidden">

        </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
</x-app-layout>