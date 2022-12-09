<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ViajesEdit extends Component
{
    public $data = [];
    public $error = [];
    public $olddata = [];
    public $idViaje;

    public function mount($id)
    {
        $this->idViaje = $id;
        $olddata = $this->olddata = Http::get('http://127.0.0.1:8000/api/viajes/' . $this->idViaje)->json();
        return compact('olddata');
    }
    public function render()
    {
        return view('livewire.viajes-edit');
    }
    public function modificar()
    {
        Http::put('http://127.0.0.1:8000/api/viajes/' . $this->idViaje, $this->olddata);
        return redirect('/viajes');
    }
}
