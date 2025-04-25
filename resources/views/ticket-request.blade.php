<x-app-layout>
    <div>
    <div class="w-4 ml-10 mt-5">
        <a href="{{ route('dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
    </div>
        <div class="flex items-center justify-center mt-20 space-x-6 justify-evenly">
            <div
                class="flex justify-center font-semibold text-[42px] text-gray-800 dark:text-gray-200 leading-tight"
            >
                <h1>Ticket Requests</h1>
            </div>

            <div name="form">
                <div class="flex flex-col gap-2 mb-3">
                    <h2 class="font-semibold">Category</h2>
                    <ul class="flex gap-4 rounded-md">
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold ">Electronics</li>
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold">Clothing</li>
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold">Books</li>
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold">Accessories</li>
                    </ul>
                </div>

                <div class="mt-1">
                    <form action="" method="POST" class="w-full" >
                        @csrf

                        <x-input-label for="item-name" :value="__('Item Name')" />
                        <x-text-input id="item-name" class="block mt-2 mb-4  w-full"
                            type="text"
                            name="description"
                            placeholder="Item Name"
                        />

                        <x-input-label for="location" :value="__('Date of Incident')" />
                        <x-text-input id="description" class="block mt-2 mb-4  w-full"
                            type="text"
                            name="description"
                            placeholder="When did you lost it"
                        />

                        <x-input-label for="location" :value="__('Location Found')" />
                        <x-text-input id="description" class="block mt-2 mb-4  w-full"
                            type="text"
                            name="description"
                            placeholder="Where did you lost it"
                        />

                        <x-input-label for="description" :value="__('Item Description')" />
                        <x-text-input id="description" class="block mt-2 mb-4  w-full"
                            type="text"
                            name="description"
                            placeholder="Describe your lost item"
                        />

                        <x-input-label for="remarks" :value="__('Remarks')" />
                        <x-text-input id="remarks" class="block mt-2 mb-4  w-full"
                            type="text"
                            name="remarks"
                            placeholder="Describe your lost item"
                        />

                        <div class="w-7/12">
                            <button type="submit" class="mt-4 bg-black text-white p-2 rounded-lg w-full">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="w-full flex items-center justify-center pt-52 pb-8 text-[12px]">
    © 2025 Lost and Found Management System (JRU RECLAMERS)
    </footer>
</x-app-layout>
