<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;

class SelectComponent extends Component
{
    public $anio, $quincena;
    public $anios=[], $quincenas=[];

    public function mount()
    {
        $this->anios = Data::all();
        // $this-> quincenas = collect( );
        $this->quincenas = Data::all();
    }

    public function updateAnio($value)
    {
        dd($this->quincenas = Data::where('anio', $value)->get());
        // $this->quincena = $this->anios->first()->id ?? null;
    }

    public function save()
    {
        dd($this->quincena);
    }

    public function render()
    {
        return view('livewire.select-component');
    }
}
