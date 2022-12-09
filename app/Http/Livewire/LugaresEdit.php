<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class LugaresEdit extends Component
{
    public $data = [];
    public $error = [];
    public $olddata = [];
    public $idLugar;

    public function mount($id)
    {
        $this->idLugar = $id;
        $olddata = $this->olddata = Http::get('http://127.0.0.1:8000/api/lugares/' . $this->idLugar)->json();
        return compact('olddata');
    }
    public function render()
    {
       
        return view('livewire.lugares-edit');
    }

    public function modificar()
    {
        Http::put('http://127.0.0.1:8000/api/lugares/' . $this->idLugar, $this->olddata);
        return redirect('/lugares');
    }
}
