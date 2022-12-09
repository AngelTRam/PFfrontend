<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ViajesShow extends Component
{
    public $idViaje;
    public function mount($id)
    {
        $this->idViaje = $id;
    }
    public function render()
    {
        $viaje = Http::get('http://127.0.0.1:8000/api/viajes/' . $this->idViaje)->json();
        return view('livewire.viajes-show',compact('viaje'));
    }
}
