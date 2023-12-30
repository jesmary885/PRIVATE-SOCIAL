<?php

namespace App\Livewire\IniciarCreador;

use App\Models\Gener;
use App\Models\Pais;
use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Formulario extends Component
{
    use WithFileUploads;

    public $user,$file,$fecha_nacimiento,$name,$lastname,$geners,$direccion,$gener_id,$paises,$pais_id,$zip_code,$instagram,$facebook,$doc_frente,$doc_reverso,$selfie,$video,$caduca,$fecha_caducidad;

    protected $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'fecha_nacimiento' => 'required',
        'file' => 'required|image',
    ];

    public function mount(){
        $this->user = User::where('id',auth()->user()->id)->first();
        $this->geners=Gener::all();
        $this->paises = Pais::all();
    }

    public function render()
    {
        return view('livewire.iniciar-creador.formulario');
    }


}
