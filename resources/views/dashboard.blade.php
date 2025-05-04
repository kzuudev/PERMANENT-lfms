<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-6">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lost & Found Management System') }}
            </h2>

            <ul class="flex bg-white p-4 rounded-md">
                <li class="hover:bg-gray-300 px-2 py-1 rounded">Home</li>
                <li class="hover:bg-gray-300 px-2 py-1 rounded">About</li>
                <li class="hover:bg-gray-300 px-2 py-1 rounded">Contact</li>
            </ul>
        </div>
    </x-slot>


    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

    <div class="flex my-32">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col items-center space-x-6">
            <div class="max-w-7xl">
                <h2 class="font-semibold text-[38px] text-gray-800 dark:text-gray-200 leading-tight">
                    Report Lost Item
                </h2>
            </div>

            <div>
                <h3 class="mt-4">Submit a request for your lost item</h3>
                <div class="flex flex-col gap-2 mt-4 ">
                    <a href="{{ route('lost') }}" class="inline-block px-6 py-2 text-center bg-black text-white font-semibold rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 ">
                         Report Lost Item
                    </a>

                    <a href="{{ route('tracking') }}" class="inline-block px-6 py-2 text-center bg-black text-white font-semibold rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        View Status Tracking
                    </a>

                    {{-- <a href="{{ route('ticket') }}" class="inline-block px-6 py-2 text-center bg-black text-white font-semibold rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Request Claim Ticket
                    </a> --}}
                </div>
            </div>
        </div>
      </div>
    </div>

    <footer class="w-full flex items-center justify-center pt-40 pb-2 my-80 text-[12px]">
        © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer>
  
</x-app-layout>


