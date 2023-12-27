<?php

namespace App\Livewire\Profile;

use App\Models\Creador;
use App\Models\CreadorPlan;
use App\Models\Publicacion;
use App\Models\suscripcion;
use App\Models\User;
use Livewire\Component;
use DateTime;
use Illuminate\Support\Facades\Storage;

class ViewProfileUser extends Component
{
    public $creator, $planes, $user;

    public function mount($creator){

        $this->creator = $creator;

        $this->planes = CreadorPlan::where('creador_id',$this->creator->id)
            ->get();

        $this->user = User::where('id',auth()->user()->id)->first();
    }





    public function view_publication($id){

        $publicacion = Publicacion::where('id',$id)->first();

        $suscripcion = suscripcion::where('user_id',auth()->user()->id)
            ->where('creador_id',$this->creator->id)
            ->where('plan_id',$publicacion->categoria_id)
            ->where('status','activo')
            ->count();

        if($suscripcion > 0) return Storage::url($publicacion->profile);
        else{
            if($publicacion->tipo == 'foto') return url('/imagen/imagen-no-disponible.jpg');
            else return url('/imagen/185096 (360p).mp4');
        } 

    }


    public function render()
    {
        $publicaciones = Publicacion::where('user_id',$this->creator->user->id)
            ->get();

        

        return view('livewire.profile.view-profile-user',compact('publicaciones'));
    }
}
