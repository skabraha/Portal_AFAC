<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;

class SelectComponent extends Component
{
    // public $anio;
    public $anio, $mes, $quincena;
    public $anios=[], $meses=[], $quincenas=[];

    public function mount()
    {
        $this->anios = Data::all();
        $this->meses = Data::all();
        $this->quincenas = Data::all();
        // $this-> quincenas = collect( );
    }

    // public function updateAnio($value)
    // {
    //     dd($this->quincenas = Data::where('anio', $value)->get());
    //     $this->quincena = $this->anios->first()->id ?? null;
    // }

    public function save()
    {
        dd($this->anio);
    }

    public function render()
    {
        return view('livewire.select-component');
    }
}
