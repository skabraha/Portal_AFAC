<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;

class SelectComponent extends Component
{
    // public $anio;
    public $count = 0;
    public $anio, $mes, $quincena;
    public $anios = [], $meses = [], $quincenas = [];

    protected $rules = [
        'anio' => 'required',
        'mes' => 'required',
        'quincena' => 'required'
    ];
    public function mount()
    {

        $this->nomina = Data::where('anio', $this->anio)
            ->where('mes', $this->mes)
            ->where('quincena', $this->quincena)
            ->get();
        $this->anios = Data::all();
        $this->meses = Data::all();
        $this->quincenas = Data::all();
        // $this-> quincenas = collect( );
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // public function updateAnio($value)
    // {
    //     dd($this->quincenas = Data::where('anio', $value)->get());
    //     $this->quincena = $this->anios->first()->id ?? null;
    // }

    public function clean()
    {
        $this->reset(['anio', 'mes', 'quincena']);
    }
    public function search()
    {
        $this->validate();
        $this->mount();
    }
    public function render()
    {

        return view('livewire.select-component');
    }
}
