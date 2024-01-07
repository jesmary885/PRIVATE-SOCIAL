<?php

namespace App\Livewire\IniciarCreador;

use Livewire\Attributes\On;
use Livewire\Component;

class Informacion extends Component
{

    #[On('iniciar-creador.informacion')] 
    public function render()
    {
        return view('livewire.iniciar-creador.informacion');
    }

    public function volver(){
        $this->dispatch('volver');
    }
}
