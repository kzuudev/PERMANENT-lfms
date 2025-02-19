<x-app-layout>
<div>
    <div class="w-4 ml-10 mt-5">
        <a href="{{ route('dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
    </div>

        <div class="flex items-center justify-center mt-32 space-x-6">
            <div
                class="flex justify-center font-semibold text-[42px] text-gray-800 dark:text-gray-200 leading-tight"
            >
                <h1>Status Tracking</h1>
            </div>
        </div>

          <div class="w-full flex flex-col items-center justify-center px-80 mt-16 gap-5">
            <div class="w-full flex border-8 gap-10 p-4">
              <div class="w-2/12 h-[100px] bg-gray-400 border-8"></div>
                <div class="mt-3">
                  <p class="w-full flex-nowrap text-xl">Under Review</p>
                  <p>Your case is currently under review.</p>
                </div>   
            </div>

            <div class="w-full flex border-8  gap-10 p-4">
              <div class="w-2/12 h-[100px] bg-gray-400 border-8"></div>
                <div class="mt-3">
                  <p class="w-full flex-nowrap text-xl">Match</p>
                  <p>Your lost item has been matched.</p>
                </div>   
            </div>

        
            <div class="w-full flex border-8 gap-10 p-4">
              <div class="w-2/12 h-[100px] bg-gray-400 border-8"></div>
                <div class="mt-3">
                  <p class="w-full flex-nowrap text-xl">Further Verification Required</p>
                  <p>Additional verification is needed for your case.</p>
                </div>   
            </div>

            
            
            
            
          </div>
</div>
    <footer class="w-full flex items-center justify-center pt-24 pb-8 text-[12px]">
    © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer>
</x-app-layout>

