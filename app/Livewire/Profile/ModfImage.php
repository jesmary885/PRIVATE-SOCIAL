<?php

namespace App\Livewire\Profile;

use App\Models\Publicacion;
use Livewire\Component;

class ModfImage extends Component
{
    public $image;

    public function mount(){

        $this->image = Publicacion::where('user_id',auth()->user()->id)
        ->where('status','no completada')
        ->first()->profile;

    }
    public function render()
    {


        return view('livewire.profile.modf-image');
    }
}
