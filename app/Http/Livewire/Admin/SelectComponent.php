<?php

namespace App\Http\Livewire\Admin;

use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SelectComponent extends Component
{
    public $anio, $month, $idSelection;
    public function rules()
    {
        return [
            'anio' => 'required',
            'month' => 'required',
        ];
    }
    public function mount()
    {
        $this->resultQuerys = collect();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function clean()
    {
        $this->reset(['anio']);
    }
    public function updatedAnio($idFilter)
    {
        // $idFilter = $this->idSelection;
        // $idFilter='01/05/2022';
        $this->resultQuerys = Data::where('FechaInicialPago','LIKE', '%'."{$idFilter}".'%')->get();

    }
    public function searhComponent()
    {
        $this->validate();
        $this->updatedanio($this->idSelection);
    }
    public function render()
    {
        $queryEmployes = Data::where('id2',Auth::user()->username)
            ->get();
        $date = Carbon::parse($queryEmployes[0]->FechaInicialPago, 'UTC')->settings([
            'locale' => 'es'
        ]);
        // $days = $date->day;
        // $months = $date->month;
        // $years = $date->year;
        return view('livewire.admin.select-component', compact('queryEmployes', 'date'));
    }
}
