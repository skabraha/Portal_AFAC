<?php

namespace App\Http\Livewire\Admin;

use App\Models\Data;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SelectComponent extends Component
{
    public $anio, $month, $days, $quincena, $idSelection, $resultQuerys, $date, $meses = [];
    public function rules()
    {
        return [
            'anio' => 'required',
            'month' => 'required',
            'quincena' => 'required',
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
    public function searhComponent()
    {
        $idFilter = $this->anio . '/' . $this->month . '/' . $this->quincena;
        $this->validate();
        $this->updatedanio($this->idSelection);
        $this->resultQuerys = Data::where('FechaInicialPago', $idFilter)
            ->where('id2', Auth::user()->username)
            ->get();
    }

    public function render()
    {

        DB::statement("SET lc_time_names = 'es_MX'");
        $queryEmployes = Data::where('id2', Auth::user()->username)
            ->select(DB::raw("DATE_FORMAT(FechaInicialPago,'%Y') as years"))
            ->groupBy('years')
            ->get();
        $queryMonths = Data::where('id2', Auth::user()->username)
            ->select(DB::raw("DATE_FORMAT(FechaInicialPago,'%Y-%m-%M') as months"))
            ->groupBy('months')
            ->get();
        $queryDays = Data::where('id2', Auth::user()->username)
            ->select(DB::raw("DATE_FORMAT(FechaInicialPago,'%m-%d') as days"))
            ->groupBy('days')
            ->get();

        return view('livewire.admin.select-component', compact('queryEmployes', 'queryMonths', 'queryDays'));
    }
}
