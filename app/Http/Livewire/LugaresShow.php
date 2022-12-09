<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LugaresShow extends Component
{

    public $idLugar;
    public function mount($id)
    {
        $this->idLugar = $id;
    }
    public function render()
    {
        $lugar = Http::get('http://127.0.0.1:8000/api/lugares/' . $this->idLugar)->json();
        return view('livewire.lugares-show', compact('lugar'));
    }
}
