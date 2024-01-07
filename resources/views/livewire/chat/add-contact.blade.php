<div >



    <button wire:click="$set('open',true)"  class="mt-8 mb-4 py-2 px-14 rounded-full bg-sky-600 text-white tracking-widest hover:bg-sky-500 transition duration-200">Agregar contácto</button>

  
  
  <x-dialog-modal wire:model="open">

      <x-slot name="title">
          <p class="text-gray-600 font-bold">
            

          </p>

          <hr>
         
      </x-slot>

      <x-slot name="content">

        <div class="  bg-white container">

            <div class="card">
                <div class="card-header">
                        <input wire:model.live="search" placeholder="Buscar usuario..." class="form-control">
                </div>

                @forelse ($users as $user)
                <div wire:click="selec('{{$user->id}}')" class=" cursor-pointer flex mt-2">
                    <div>
                        <img class="w-16 h-12 object-cover mr-2" src="{{ $user->profile_photo_url  }}" alt="">
                    </div>
                    
                    <div class=" text-gray-700 mt-2">
                        <p class="text-lg  font-semibold leading-5">{{$user->name}}</p>
                    </div>
                </div>

                <hr>
                    
                    
                @empty
                   
                @endforelse

            </div>

        </div>


        @if($select == 1)

        <div class="w-full  mb-4  px-3 mt-2">
            <div class="px-4 py-2  rounded-t-lg dark:bg-gray-800 border border-gray-200 rounded-lg bg-white  dark:border-gray-600">
                <textarea wire:model="mensaje" id="mensaje" rows="4" class=" w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Escribe un mensaje de saludo a {{$name_select}} ..." required></textarea>
            </div>
        </div>

       

        @endif



          


      </x-slot>

      <x-slot name="footer">
    

          <button wire:click="close" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Cerrar
          </button>

          @if($select == 1)

          <button wire:click="save" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
            Guardar
            </button>
          @endif
    


      </x-slot>

  </x-dialog-modal>
  {{-- Be like water. --}}
</div>

