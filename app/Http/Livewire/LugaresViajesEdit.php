<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class LugaresViajesEdit extends Component
{
    public $data = [];
    public $error = [];
    public $olddata = [];
    public $idlv;

    public function mount($id)
    {
        $this->idlv = $id;
        $olddata = $this->olddata = Http::get('http://127.0.0.1:8000/api/lugaresviajes/' . $this->idlv)->json()[0];
        return compact('olddata');
    }
    public function render()
    {  
        $lugares = Http::get('http://127.0.0.1:8000/api/lugares')->json();
        $viajes = Http::get('http://127.0.0.1:8000/api/viajes')->json();
        return view('livewire.lugares-viajes-edit',compact('lugares','viajes'));
    }
    public function modificar()
    {
        dd($this->data,$this->olddata,$this->idlv);
        Http::put('http://127.0.0.1:8000/api/lugaresviajes/' . $this->idlv, $this->olddata);
        return redirect('/lugaresviajes');
    }
}
