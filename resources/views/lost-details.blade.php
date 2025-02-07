<x-app-layout>
    <div>
        <div class="flex items-center justify-center mt-48 space-x-6 justify-evenly">
            <div
                class="flex justify-center font-semibold text-[42px] text-gray-800 dark:text-gray-200 leading-tight"
            >
                <h1>Lost Item Details</h1>
            </div>

            <div name="form">
                <div class="flex flex-col gap-2">
                    <h2 class="font-semibold">Category</h2>
                    <ul class="flex gap-4 rounded-md">
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold ">Electronics</li>
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold">Clothing</li>
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold">Books</li>
                        <li class="p-2 bg-gray-300 rounded-md text-xs font-semibold">Accessories</li>
                    </ul>
                </div>

                <div class="mt-8">
                    <form action="" method="POST" class="w-full" >
                        @csrf
                        <x-input-label for="description" :value="__('Item Description')" />
                        <x-text-input id="description" class="block mt-2 mb-4  w-full"
                            type="text"
                            name="description"
                            placeholder="Describe your lost item"
                        />

                        <x-input-label for="upload" :value="__('Upload Images')" />
                        <x-text-input id="upload" class="block mt-2 mb-4 w-full"
                            type="text"
                            name="upload"
                            
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
<!-- 
    <footer>
        <p>&copy; 2025 Lost & Found Management SystemS (JRU Reclamers)</p>
    </footer> -->
</x-app-layout>
