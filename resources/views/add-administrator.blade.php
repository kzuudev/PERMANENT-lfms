<x-app-layout>
    <div class="flex my-32">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col items-center space-x-6">
              <div class="max-w-7xl">
                  <h2 class="font-semibold text-[38px] text-gray-800 dark:text-gray-200 leading-tight">
                      Add New Administrator
                  </h2>
              </div>
  
              <div class="mt-12">
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

                    <x-input-label for="upload-img" :value="__('Upload Images')" />
                    <x-text-input id="upload-img" class="block mt-2 mb-4 w-full"
                        type="file"
                        name="upload"
                         accept="image/*"
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
