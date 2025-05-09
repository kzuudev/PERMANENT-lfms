<x-app-layout>
        <div class="w-full px-4 px-4 mt-4 overflow-auto">
            <div class="w-full grid grid-cols-3 px-4 px-4 mt-4 gap-6">
              @foreach($lostItems as $item)
                <div class="card flex flex-col bg-white rounded-lg gap-3 hover:outline">
                    <div class="flex mb-3 p-6 bg-[#eef5fd] items-center justify-between">
                        <h3 class="category">{{ $item->selected_category }}</h3>
                    </div>
                    
                  <div data-name="card" class="flex flex-col gap-4 pl-2.5 px-2">
                        <div class="border-b-2 border-gray-200">
                          <img class="item-img w-24 h-24 mb-4 rounded" src="{{ Storage::url($item->image) }}" alt="">
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Email</h4>
                          <p  class="student-email text-sm">{{ $item->reported_by_email }}</p>
                        </div>

                        <div class="flex flex-col gap-2">
                            <h4 class="text-lg text-gray-400">Item Name</h4>
                            <p  class="item-name text-sm">{{ $item->item_name }}</p>
                          </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Item Description</h4>
                          <p 
                          class="find-item text-sm">{{$item->item_description }}</p>
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Date Lost</h4>
                          <p class="date text-sm">{{$item->date_lost }}</p>
                        </div>
                        
                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Location Found</h4>
                          <p class="place-found text-sm">{{$item->location_found }}</p>
                        </div>

                        <div class="flex flex-col gap-2">
                          <h4 class="text-lg text-gray-400">Turned it by</h4>
                          <p  class="postName text-sm">{{$item->reporter_name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
        </div>   
    
      <div id="modal" class="w-1/4 h-full absolute right-0 bottom-[2px]  hidden">
        <div id="selected-card" class="card w-full h-5/6 flex flex-col bg-white rounded-lg gap-3 drop-shadow-xl overflow-auto hidden">

        </div>
      </div>

        </div>
      </div>
    </div>
  </div>
</div>

  
</x-app-layout>