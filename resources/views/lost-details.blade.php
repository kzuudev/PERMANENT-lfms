<x-app-layout>
    <div>
    <div class="w-4 ml-10 mt-5">
        <a href="{{ route('dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
    </div>
        <div class="flex items-center justify-center mt-32 space-x-6 justify-evenly">
            <div
                class="flex justify-center font-semibold text-[42px] text-gray-800 dark:text-gray-200 leading-tight"
            >
                <h1>Lost Item Details</h1>
            </div>

            <div name="form">
                <div class="flex flex-col gap-2 mb-3">
                    <h2 class="font-semibold">Category</h2>
                    <ul class="flex gap-4 rounded-md">
                      <li>
                        <button 
                          type="button" 
                          class="p-2 bg-gray-300 hover:bg-gray-400 rounded-md text-xs font-semibold" 
                          aria-pressed="false">
                          Electronics
                        </button>
                      </li>
                      <li>
                        <button 
                          type="button" 
                          class="p-2 bg-gray-300 hover:bg-gray-400 rounded-md text-xs font-semibold" 
                          aria-pressed="false">
                          Clothing
                        </button>
                      </li>
                      <li>
                        <button 
                          type="button" 
                          class="p-2 bg-gray-300 hover:bg-gray-400 rounded-md text-xs font-semibold" 
                          aria-pressed="false">
                          Books
                        </button>
                      </li>
                      <li>
                        <button 
                          type="button" 
                          class="p-2 bg-gray-300 hover:bg-gray-400 rounded-md text-xs font-semibold" 
                          aria-pressed="false">
                          Accessories
                        </button>
                      </li>
                    </ul>
                  </div>
                  
                  <div class="">
                    <form id="lost__item-form" action="{{ route('lostItem.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <x-input-label for="item_name" :value="__('Item Name')" />
                      <x-text-input id="item_name" class="block mt-2 mb-4 w-full"
                        type="text"
                        name="item_name"
                        placeholder="Item Name"
                        required
                      />
                      
                      <x-input-label for="item_description" :value="__('Item Description')" />
                      <x-text-input id="item_description" class="block mt-2 mb-4 w-full"
                        type="text"
                        name="item_description"
                        placeholder="Describe your lost item"
                      />
                      
                      <x-input-label for="date_lost" :value="__('Date Lost')" />
                      <x-text-input id="date_lost" class="block mt-2 mb-4 w-full"
                        type="date"
                        name="date_lost"
                        placeholder="When did you lose the item"
                      />
                      
                      <x-input-label for="location_found" :value="__('Location Lost')" />
                      <x-text-input id="location_found" class="block mt-2 mb-4 w-full"
                        type="text"
                        name="location_found"
                        placeholder="Where did you lose it"
                      />
                      
                      <x-input-label for="image" :value="__('Upload Images')" />
                      <x-text-input id="image" class="block mt-2 mb-4 w-full"
                        type="file"
                        name="image"
                        accept="image/*"
                      />
                      
                      <div class="w-7/12">
                        <button type="submit" class="mt-4 bg-black text-white p-2 rounded-lg w-full">
                          Submit
                        </button>
                      </div>
                    </form>

                    @if(session()->has('message'))
                        <div class="alert-success-container mb-4">
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                                <a href="{{ route('dashboard') }}" class="text-blue-600 underline ml-2">Go Back</a>
                            </div>
                        </div>
                    @endif

                  </div>
            </div>
        </div>
    </div>

    <footer class="w-full flex items-center justify-center pt-52 pb-8 text-[12px]">
    © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer>
</x-app-layout>
