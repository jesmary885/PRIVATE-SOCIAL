<div>

  

    <a wire:click="$set('open',true)" class="absolute right-5 bottom-8 text-white p-1 text-xs cursor-pointer bg-blue-400 hover:bg-blue-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
          </path>
        </svg>
      </a>
    
    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Editar tu biografia
        </x-slot>

        <x-slot name="content">

            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
             
                    <textarea wire:model="biografia" id="biografia" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" required></textarea>
                </div>
               
            </div>

        </x-slot>

        <x-slot name="footer">
      

            <button wire:click="close" type="button" class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 me-2 mb-2">
                
                Cerrar
            </button>


            <button wire:click="update" wire:loading.attr="disabled" type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
           
               Editar
            </button>

        </x-slot>

    </x-dialog-modal>
    {{-- Be like water. --}}
</div>
