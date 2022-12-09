<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class LugaresViajesShow extends Component
{
    public $idIntermedia;
    public function mount($id)
    {
        $this->idIntermedia = $id;
    }
    public function render()
    {
        $lv = Http::get('http://127.0.0.1:8000/api/lugaresviajes/' . $this->idIntermedia)->json();
        return view('livewire.lugares-viajes-show', compact('lv'));
    }
}
