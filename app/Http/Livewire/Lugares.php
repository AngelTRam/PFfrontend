<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Lugares extends Component
{
    public $data=[];
    public $error=[];
    public $idLugar;
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/lugares');
        $lugares = $response->json();
        return view('livewire.lugares', compact('lugares'));
    }

    public function guardar()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/lugares',$this->data);
        if($response->successful()){
            return redirect('/lugares');
        }else{
            $this->error = $response->json();
            
        }
    }
    
    public function confirmarBorrar($id){
        $this->idLugar = $id;
    }

    public function borrar($id_lugar){
        $response = Http::delete('http://127.0.0.1:8000/api/lugares/'.$id_lugar);
        if($response->successful()){
            return redirect('/lugares');
        }else{
            dd('error',$id_lugar);
        }
    }

    public function mostrar($id){
        return redirect('/lugares/'.$id);
    }

    public function redirigirModificar($id){
        return redirect('/lugares/modificar/'.$id);
    }

}
