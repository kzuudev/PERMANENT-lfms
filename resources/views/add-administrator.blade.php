<x-app-layout>
    <div class="flex flex-row my-32">
        
        <div class="w-4 mx-24 mt-5">
            <a href="{{ route('assign') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </a>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col items-center space-x-6">
              <div class="max-w-7xl">
                  <h2 class="font-semibold text-[38px] text-gray-800 dark:text-gray-200 leading-tight">
                      Add New Administrator
                  </h2>
              </div>
  
              <div class="w-full mt-12">
                <form action="" method="POST" class="w-full" >
                    @csrf

                    <x-input-label for="new-admin-name" :value="__('Name')" />
                    <x-text-input id="admin-name" class="block mt-2 mb-4  w-full"
                        type="text"
                        name="description"
                        placeholder="Name"
                    />

                    <x-input-label for="admin-email-address" :value="__('Email Address')" />
                    <x-text-input id="admin-email" class="block mt-2 mb-4  w-full"
                        type="text"
                        name="description"
                        placeholder="Email Address"
                    />

                    <x-input-label for="set-role" :value="__('Role')" />
                    <x-text-input id="role" class="block mt-2 mb-4  w-full"
                        type="text"
                        name="description"
                        placeholder="Role"
                    />

                   

                    <div class="w-full">
                        <button type="submit" class="mt-4 bg-black text-white p-2 rounded-lg w-full">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

          </div>
        </div>
      </div>
</x-app-layout>
