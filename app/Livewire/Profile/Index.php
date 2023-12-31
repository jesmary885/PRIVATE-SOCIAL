<?php

namespace App\Livewire\Profile;

use App\Models\Creador;
use App\Models\CreadorPlan;
use App\Models\Publicacion;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    public $user,$creador;

    public function mount(){
        $this->user = User::where('id',auth()->user()->id)->first();
        $this->creador= Creador::where('user_id',auth()->user()->id)->first();
    

    }

    protected function reproduct(){

        return "nodownload";

    }


    #[On('profile.index')] 
    public function render()
    {

        $planes = CreadorPlan::where('creador_id',$this->creador->id)->get();

        $publicaciones= Publicacion::where('user_id',auth()->user()->id)
            ->get();
  
        return view('livewire.profile.index', compact('publicaciones','planes'));
    }

    public function refreshUser(){
        $this->user = $this->user->fresh();
    }

}
