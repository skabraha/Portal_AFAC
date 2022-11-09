<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;
use Carbon\Carbon;

class SelectComponent extends Component
{   // Periodo de pago, Importe neto, folio fiscal, fecha de emisión
    // Fecha, FechaInicialPago, FechaFinalPago, Total
    public $count = 0;
    public $Fecha, $FechaInicialPago, $FechaFinalPago;
    public $Fechas = [], $FechaInicialPagos = [], $FechaFinalPagos = [];

    protected $rules = [
        'Fecha' => 'required',
        'FechaInicialPago' => 'required',
        'FechaFinalPago' => 'required'
    ];
    public function mount()
    {
        $this->nomina = Data::where('Fecha', $this->Fecha)
            ->where('FechaInicialPago', $this->FechaInicialPago)
            ->where('FechaFinalPago', $this->FechaFinalPago)
            ->get();
        $this->Fechas = Data::all();
        $this->FechaInicialPagos = Data::all();
        $this->FechaFinalPagos = Data::all();
        // $this-> FechaFinalPagos = collect( );
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // public function updateAnio($value)
    // {
    //     dd($this->FechaFinalPagos = Data::where('Fecha', $value)->get());
    //     $this->FechaFinalPago = $this->Fechas->first()->id ?? null;
    // }

    public function clean()
    {
        $this->reset(['Fecha', 'FechaInicialPago', 'FechaFinalPago']);
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
