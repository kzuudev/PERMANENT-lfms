<x-app-layout>
<div>
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

            

            <div class="w-full flex border-8 gap-10 p-4">
              <div class="w-2/12 h-[100px] bg-gray-400 border-8"></div>
                <div class="mt-3">
                  <p class="w-full flex-nowrap text-xl">Further Verification Required</p>
                  <p>Additional verification is needed for your case.</p>
                </div>   
            </div>
            
          </div>
        
</div>








</x-app-layout>