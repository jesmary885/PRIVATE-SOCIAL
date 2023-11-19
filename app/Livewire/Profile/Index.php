<?php

namespace App\Livewire\Profile;

use App\Models\Creador;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    public $user,$creador;

    protected $listeners = ['refreshUser','render'];

    public function mount(){

     

        $this->user = User::where('id',auth()->user()->id)->first();

        $this->creador= Creador::where('user_id',auth()->user()->id)->first();



    }

    public function render()
    {

        $this->user = $this->user->fresh();
  
        return view('livewire.profile.index');
    }

    public function refreshUser(){
        $this->user = $this->user->fresh();
    }

}
