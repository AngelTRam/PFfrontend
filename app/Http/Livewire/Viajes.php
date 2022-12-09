<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Viajes extends Component
{
    public $data=[];
    public $error=[];
    public function render()
    {  
        $response = Http::get('http://127.0.0.1:8000/api/viajes');
        $viajes = $response->json();
        return view('livewire.viajes',compact('viajes'));
    }

    public function guardar(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/viajes',$this->data);
        if($response->successful()){
            return redirect('/viajes');
        }else{
            $this->error = $response->json();
            
        }
    }
    public function borrar($id_viaje){
        $response = Http::delete('http://127.0.0.1:8000/api/viajes/'.$id_viaje);
        if($response->successful()){
            return redirect('/viajes');
        }else{
            dd('error',$id_viaje);
        }
    }
    public function mostrar($id){
        return redirect('/viajes/'.$id);
    }

    public function redirigirModificar($id){
        return redirect('/viajes/modificar/'.$id);
    }
}
