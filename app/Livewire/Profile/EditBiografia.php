<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class EditBiografia extends Component
{
    public $open = false, $user, $biografia;

    protected $rules = [
        'biografia' => 'required',
    ];


    public function mount(){

        $this->user = User::where('id',auth()->user()->id)->first();

        $this->biografia = $this->user->biografia;
    }

    public function render()
    {
        return view('livewire.profile.edit-biografia');
    }

    public function close(){

        $this->open = false;

    }

    public function update(){

        $rules = $this->rules;
        $this->validate($rules);

        $this->user->update([
            'biografia' => $this->biografia,
        ]);

        $this->open = false;

        $this->dispatch('profile.index');

    }
}
