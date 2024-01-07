<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a muhos inversa
    public function chat(){
        return $this->belongsTo(Chats::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
