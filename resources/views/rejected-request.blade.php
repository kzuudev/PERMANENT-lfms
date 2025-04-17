<x-app-layout>


    <div class="w-full h-full flex gap-12 ">
        <div class="bg-gray-800 border-r-2 border-white">
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

            <div class="w-4 mb-14 mt-5">
                <a href="{{ route('admin') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                </a>
            </div>

            <div class="w-full">
                <h2 class="text-[32px]">Rejected Requests</h2>

                <div class="mt-8 mb-2">
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
                                      Electronics
                                    </li>
                                  </a>
        
                                  <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                                    <li>
                                      Accessories
                                    </li>
                                  </a>

                                  <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                                    <li>
                                      Clothing
                                    </li>
                                  </a>

                                  <a href="" class="w-full px-3 py-2 text-sm hover:bg-blue-300 rounded">
                                    <li>
                                     Books
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

               <div class="mt-8">
                <table class="table-fixed w-full border-collapse border border-gray-300">
                  <thead>
                    <tr class="bg-gray-100">
                      <th class="w-1/4 p-2 border">Item Name</th>
                      <th class="w-1/4 p-2 border">Category</th>
                      <th class="w-1/4 p-2 border">Found Date</th>
                      <th class="w-1/4 p-2 border">Claimed Date</th>
                      <th class="w-1/4 p-2 border">Found By</th>
                      <th class="w-1/4 p-2 border">Claimed By</th>
                      <th class="w-1/4 p-2 border">Status</th>
                      <th class="w-1/4 p-2 border">Actions</th>
                    </tr>
                  </thead>
          
                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">Rolex Watch</td>
                      <td class="p-2 text-xs border">Accessories</td>
                      <td class="p-2 text-xs border">03-05-25</td>
                      <td class="p-2 text-xs border font-semibold">03-10-25</td>
                      <td class="p-2 text-xs border font-semibold">John Kevin T. Dela Cruz</td>
                      <td class="p-2 text-xs border font-semibold">John Kevin T. Dela Cruz</td>
                      <td class="p-2 text-xs border text-red-500 font-semibold">Rejected</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View Details</a></td>
                    </tr>
                  </tbody>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">MacBook M1</td>
                      <td class="p-2 text-xs border">Electronics</td>
                      <td class="p-2 text-xs border">02-15-25</td>
                      <td class="p-2 text-xs border font-semibold">02-11-25</td>
                      <td class="p-2 text-xs border font-semibold">Shan Hiro Rosario</td>
                      <td class="p-2 text-xs border font-semibold">Shan Hiro Rosario</td>
                      <td class="p-2 text-xs border text-red-500 font-semibold">Rejected</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View Details</a></td>
                    </tr>
                  </tbody>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">Rolex Watch</td>
                      <td class="p-2 text-xs border">Accessories</td>
                      <td class="p-2 text-xs border">03-05-25</td>
                      <td class="p-2 text-xs border font-semibold">03-10-25</td>
                      <td class="p-2 text-xs border font-semibold">John Kevin T. Dela Cruz</td>
                      <td class="p-2 text-xs border font-semibold">John Kevin T. Dela Cruz</td>
                      <td class="p-2 text-xs border text-red-500 font-semibold">Rejected</td>
                      <td class="p-2 border"><a class="text-[12px] px-4 py-1 bg-gray-200 rounded" href="#">View Details</a></td>
                    </tr>
                  </tbody>

                </table>
            </div>
            </div>          
        </div>
    </div>
</x-app-layout>
