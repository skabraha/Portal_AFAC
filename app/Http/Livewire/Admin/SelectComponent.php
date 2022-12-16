<?php

namespace App\Http\Livewire\Admin;

use App\Models\Data;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SelectComponent extends Component
{
    public $anio, $month;
    public function rules()
    {
        return [
            'anio' => 'required'
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
        $this->reset([]);
    }
    public function updatedanio($idFilter)
    {
        $nEmployee = Auth::user()->username;
        $this->resultQuerys = Data::where('FechaInicialPago', $idFilter)
            ->orWhere('id2', $nEmployee)->get();
    }
    public function render()
    {
        $nEmployee = Auth::user()->username;
        $queryEmployes = Data::where('id2', $nEmployee)
            ->get();
        return view('livewire.admin.select-component', compact('queryEmployes'));
    }
}
