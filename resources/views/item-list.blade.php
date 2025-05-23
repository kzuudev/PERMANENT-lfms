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

                  <a href="{{ route('item-list') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                  <img class="w-6 h-6" src="../images/item.png" alt="">
                    Lost Item List</li></a>

                  <a href="{{ route('claim-requests') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
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
            @foreach($lostItems as $item)
            <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
                <div class="flex mb-3 p-6 bg-[#eef5fd] items-center justify-between">
                    <h3 class="category">{{ $item->category }}</h3>
                </div>
                <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                    <div class="border-b-2 border-gray-200">
                        <img class="item-img w-24 h-24 mb-4 rounded" src="{{ $item->image_url }}" alt="">
                    </div>

                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Name</h4>
                        <p class="student-email text-sm">{{ $item->student_name }}</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Item Name</h4>
                        <p class="item-name text-sm">{{ $item->item_name }}</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Date Reported</h4>
                        <p class="date text-sm">{{ $item->date_reported }}</p>
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg text-gray-400">Location Found</h4>
                        <p class="place-found text-sm">{{ $item->location_found }}</p>
                    </div>

                    <div class="flex flex-col gap-2 mb-4">
                        <h4 class="text-lg text-gray-400">Turned it by</h4>
                        <p class="postName text-sm">{{ $item->posted_by }}</p>
                    </div>
                </div>
            </div>
        @endforeach
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
