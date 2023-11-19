<div class="relative" x-data>
    

    <div class="flex justify-center">

        <label for="simple-search" class="sr-only">Search</label>

        <div class=" w-full">

            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>

            <x-input name="name" wire:model.live="search" type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" />

        </div>

    </div>


    
    <div class="flex justify-center ">

        <div class=" z-20 absolute w-3/5 mt-1 hidden" :class="{ 'hidden' : !$wire.open }" @click.away="$wire.open = false">
            
            <div class="bg-white rounded-lg shadow-lg">
                
                <div class="px-4 relative py-3 space-y-1">

                    <div class="flex justify-end">
                        <button class="btn btn-sm"
           
                        wire:click="close()">
                        <i class="	far fa-window-close"></i>
                    </button>
        
                    </div>
                    @forelse ($users as $user)
                        <a href="#" class="flex">
                            <img class="w-16 h-12 object-cover" src="{{ $user->profile_photo_url  }}" alt="">
                            <div class="ml-4 text-gray-700">
                                <p class="text-lg font-semibold leading-5">{{$user->name}}</p>
                             
                            </div>
                        </a>
                    @empty
                        <p class="text-lg leading-5">
                            {{__('messages.No existe ningún registro')}}
                        </p>
                    @endforelse
                </div>
            </div>
        </div>

    </div>


    
</div>