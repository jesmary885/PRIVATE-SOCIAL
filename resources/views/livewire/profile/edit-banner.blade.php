<div>
    <style>
        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

   
    </style>



      <label class="custom-file-upload">
        <input wire:click="$set('open',true)" type="file"/>
        Editar foto de portada
      </label>
  

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Edit
        </x-slot>

        <x-slot name="content">

            <div>
                <p>aqui</p>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button class="mr-2" wire:click="close">
                Cerrar
            </x-secondary-button>

            <x-danger-button wire:click="update" wire:loading.attr="disabled">
                Actualizar
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>
    {{-- Be like water. --}}
</div>
