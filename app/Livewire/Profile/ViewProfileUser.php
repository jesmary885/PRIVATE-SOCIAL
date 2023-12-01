<?php

namespace App\Livewire\Profile;

use App\Models\Creador;
use App\Models\Publicacion;
use Livewire\Component;

class ViewProfileUser extends Component
{
    public $creator;

    public function mount($creator){

        $this->creator = $creator;
    }
    public function render()
    {
        $publicaciones = Publicacion::where('user_id',$this->creator->user->id)
            ->get();

        return view('livewire.profile.view-profile-user',compact('publicaciones'));
    }
}
