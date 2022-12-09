<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LugaresViajes extends Component
{
    public $data=[];
    public $error=[];
    public function render()
    {
        $lugares = Http::get('http://127.0.0.1:8000/api/lugares')->json();
        $viajes = Http::get('http://127.0.0.1:8000/api/viajes')->json();
        $response = Http::get('http://127.0.0.1:8000/api/lugaresviajes');
        $lugaresviajes = $response->json();
        return view('livewire.lugares-viajes',compact('lugaresviajes','lugares','viajes'));
    }
    
    public function guardar(){
        //dd($this->data);
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/lugaresviajes',$this->data);
        if($response->successful()){
            return redirect('/lugaresviajes');
        }else{
            $this->error = $response->json();
            
        }
    }

    public function borrar($id_lv){
        $response = Http::delete('http://127.0.0.1:8000/api/lugaresviajes/'.$id_lv);
        if($response->successful()){
            return redirect('/lugaresviajes');
        }else{
            dd('error',$id_lv);
        }
    }
    public function mostrar($id){
        return redirect('/lugaresviajes/'.$id);
    }

    public function redirigirModificar($id){
        return redirect('/lugaresviajes/modificar/'.$id);
    }
}
