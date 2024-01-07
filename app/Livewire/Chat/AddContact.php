<?php

namespace App\Livewire\Chat;

use App\Models\Chats;
use App\Models\Contactos;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\Attributes\On;

class AddContact extends Component
{
    public $open = false, $search, $usuario_select, $select, $mensaje, $name_select;

    public function mount(){
        $this->select=0;
    }

    public function close(){
        $this->open = false;
    }

    #[On('add_contact.render')] 
    public function render()
    {
        if ($this->search) {

            $users = User::where('name', 'LIKE' ,'%' . $this->search . '%')
                ->take(20)
                ->get();
         
        }
         else {
            $users = [];
        }

        return view('livewire.chat.add-contact',compact('users'));
    }

    public function selec($usuario_id){

      //  dd('s');

        $this->usuario_select = $usuario_id;
        $this->name_select = User::where('id',$usuario_id)->first()->username;
        $this->select=1;
        $this->reset(['search']);

        $this->dispatch('add_contact.render');

    }

    public function save(){


        $contc = Contactos::where('user_id',auth()->id())
            ->where('contact_id',$this->usuario_select )
            ->first();
        
        if(!$contc){

            $name_contact = User::where('id',$this->usuario_select )->first()->username;

            $contact = new Contactos();
            $contact->name = $name_contact;
            $contact->user_id = auth()->id();
            $contact->contact_id = $this->usuario_select ;
            $contact->save();

            $chat = Chats::create();
          //  $chat_id = $this->chat->id;
            $chat->users()->attach([auth()->user()->id,$this->usuario_select]);

            $chat->messages()->create([
                'body' => $this->mensaje,
                'user_id' => auth()->user()->id
            ]);

        //  Notification::send($this->users_notifications, new \App\Notifications\NewMessage());

            $this->reset(['open']);

            return redirect()->to('/chat-conver/'.$contact);

        }

        else{

            
                $chat= auth()->user()->chats()
                ->whereHas('users',function($query) use ($contc){
                    $query->where('user_id', $contc->contact_id);
                })
                ->has('users',2)
                ->first();

                if($chat){
                    $chat->messages()->create([
                        'body' => $this->mensaje,
                        'user_id' => auth()->user()->id
                    ]);
                }
                else{
                    $chat = Chats::create();
                    //$chat_id = $this->chat->id;
                    $chat->users()->attach([auth()->user()->id,$this->usuario_select]);

                    $chat->messages()->create([
                        'body' => $this->mensaje,
                        'user_id' => auth()->user()->id
                    ]);
                }
            


           

            

        //  Notification::send($this->users_notifications, new \App\Notifications\NewMessage());

            $this->reset(['open']);

            return redirect()->to('/chat-conver/'.$contc);
        }

        




        
    }

}
