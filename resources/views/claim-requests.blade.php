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
                    <ul  class="flex gap-2 hidden">
                        <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Electronics</li>
                        <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Clothing</li>
                        <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Books</li>
                        <li class="filter-item text-xs bg-gray-200 px-[0.625rem] py-[0.375rem] rounded-full cursor-pointer">Accessories</li>
                    </ul>
                </form>
            </div>

            <div class="fixed">
                <ul class="flex flex-col gap-2 p-4 rounded-md">
                    <a href="{{ route('admin') }}">
                        <li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                            <img src="../images/dashboard.png" alt="">
                            Dashboard
                        </li>
                    </a>
                    <a href="{{ route('item') }}">
                        <li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                            <img class="w-6 h-6" src="../images/item.png" alt="">
                            Lost Item List
                        </li>
                    </a>
                    <a href="{{ route('claim') }}">
                        <li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                            <img class="w-6 h-6" src="../images/reports.png" alt="">
                            Claim Requests
                        </li>
                    </a>

                    {{-- <a href="{{ route('handle-ticket') }}"><li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                      <img class="w-6 h-6" src="../images/ticket.png" alt="">
                        Ticket Management</li></a> --}}

                    <a href="{{ route('assign') }}">
                      <li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                          <img class="w-6 h-6" src="../images/user-management.png" alt="">
                          User Management
                      </li>
                    </a>

       
                </ul>
            </div>

            <div class="w-28 absolute bottom-4">
                <ul class="flex flex-col gap-2 p-4 rounded-md">
                    <a href="">
                        <li class="flex gap-2 hover:bg-gray-300 px-2 py-1 rounded cursor-pointer text-white">
                            <img class="w-6 h-6" src="../images/logout.png" alt="">
                            Logout
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="w-full h-[669px] flex flex-col mx-4 mt-8">
            <div class="w-full">
                <h2 class="text-[32px]">Claim Requests</h2>

                <div class=" mt-8 mb-2">
                    <form method="GET" action="">
                      <div class="w-60 flex items-center gap-2 border-2">
                        <input class="outline-none border-none" type="text" name="query" placeholder="Search" >
                        <button id="filter-button" class="relative">
                          <img class="w-5 h-5" src="../images/filter.png" alt="">
                        </button>
                      </div>
      
                      <div id="filter" class="w-6/12 flex items-center p-4 mt-2 bg-gray-100 absolute border rounded-md hidden">
                        <h3 class="w-full font-medium">Search in</h3>
                          <div class="w-full flex flex-nowrap gap-9">

                    
                            <div class="w-full">
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
                                </form>
                              </div>
                            </div>
                      
                          
                          </div>
                      </div>
                        
                       
                    </form>
               </div>
            </div>

            <div class="mt-8">
                <table class="table-fixed w-full border-collapse border border-gray-300">
                  <thead>
                    <tr class="bg-gray-100">
                      <th class="w-1/6 p-2 border">Student ID</th>
                      <th class="w-1/4 p-2 border">Name</th>
                      <th class="w-1/4 p-2 border">Item</th>
                      <th class="w-1/6 p-2 border">Category</th>
                      <th class="w-1/4 p-2 border">Status</th>
                      <th class="w-1/4 p-2 border">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 border">23-292132</td>
                      <td class="p-2 border">Mico Villanueva</td>
                      <td class="p-2 border">Watch</td>
                      <td class="p-2 border">Accessories</td>
                      <td class="p-2 border text-yellow-500 font-semibold">Pending</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View</a></td>
                    </tr>

                    <tr class="text-center">
                      <td class="p-2 border">23-292182</td>
                      <td class="p-2 border">Shan Hiro Rosario</td>
                      <td class="p-2 border">Cellphone</td>
                      <td class="p-2 border">Electronic</td>
                      <td class="p-2 border text-green-500 font-semibold">Matched</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View</a></td>
                    </tr>

                    <tr class="text-center">
                      <td class="p-2 border">23-292213</td>
                      <td class="p-2 border">John Kevin T. Dela Cruz</td>
                      <td class="p-2 border">Laptop</td>
                      <td class="p-2 border">Electronic</td>
                      <td class="p-2 border text-red-500 font-semibold">Reject</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View</a></td>
                    </tr>

                    <tr class="text-center">
                      <td class="p-2 border">23-282133</td>
                      <td class="p-2 border">Robelyn Andoy</td>
                      <td class="p-2 border">Shades</td>
                      <td class="p-2 border">Accessories</td>
                      <td class="p-2 border text-blue-500 font-semibold">Reopened</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View</a></td>
                    </tr>
                  </tbody>
                </table>
            </div>

           
        </div>
    </div>
</x-app-layout>
