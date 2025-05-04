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
                <h2 class="text-[32px]">User Management</h2>

                <div class="mt-8 mb-2">
                    <form method="GET" action="">
                        <div class="rounded-md">
                            <input class="rounded-sm" type="text" placeholder="Search Admins">
                        </div>

                        <div class="flex justify-between mt-4">
                            <div name="filter-dropdown">
                                <select>
                                    <option>All Roles</option>
                                    <option>Lost & Found Staff</option>
                                    <option>Verification Admin</option>
                                    <option>Support Admin</option>
                                  </select>
                            </div>

                            <div class="">
                               <a href="{{ route('add-administrator') }}" class="inline-block px-6 py-2 text-center bg-black text-white font-semibold rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 ">Add Administrators</a>
                            </div>
                          </div>
                    </form>
               </div>

               <div class="mt-8">
                <table class="table-fixed w-full border-collapse border border-gray-300">
                  <thead>
                    <tr class="bg-gray-100">
                      <th class="w-1/4 p-2 border">Name</th>
                      <th class="w-1/4 p-2 border">Email</th>
                      <th class="w-1/6 p-2 border">Role</th>
                      <th class="w-1/4 p-2 border">Last Active</th>
                      <th class="w-1/4 p-2 border">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">John Kevin T. Dela Cruz</td>
                      <td class="p-2 text-xs border">johnkevin.delacruz@jru.edu</td>
                      <td class="p-2 text-xs border">Lost & Found Staff</td>
                      <td class="p-2 text-xs border">1 hour ago</td>
                      <td class="p-2 text-xs border text-yellow-500 font-semibold">Busy</td>
                    </tr>
                  </tbody>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">Shan Hiro Rosario</td>
                      <td class="p-2 text-xs border">shanhiro.rosario@jru.edu</td>
                      <td class="p-2 text-xs border">Support Admin</td>
                      <td class="p-2 text-xs border">3 hours ago</td>
                      <td class="p-2 text-xs border text-green-500 font-semibold">Active</td>
                    </tr>
                  </tbody>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">Robelyn Andoy</td>
                      <td class="p-2 text-xs border">robelyn.andoy@jru.edu</td>
                      <td class="p-2 text-xs border">Verification Admin</td>
                      <td class="p-2 text-xs border">5 hours ago</td>
                      <td class="p-2 text-xs border text-yellow-500 font-semibold">Busy</td>
                    </tr>
                  </tbody>

                  <tbody>
                    <tr class="text-center">
                      <td class="p-2 text-xs border">Mico Villanueva</td>
                      <td class="p-2 text-xs border">mico.villanueva@jru.edu</td>
                      <td class="p-2 text-xs border">Basketball Player</td>
                      <td class="p-2 text-xs border">24 hours ago</td>
                      <td class="p-2 text-xs border text-red-500 font-semibold">Dribbling</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>


           
        </div>
    </div>
</x-app-layout>
