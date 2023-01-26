<?php

namespace App\Http\Livewire\Admin;

use App\Models\Data;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $idFilter = $this->anio . '-' . $this->month . '-' . $this->quincena;
        $this->validate();
        $this->updatedanio($this->idSelection);
        $this->resultQuerys = Data::where('FechaPago', $idFilter)->get();

        
    }
    public function imprime($id)
    {
        $idPerson = $id;
        return redirect()->route('imprimir',compact('idPerson'));
    }
    public function imprimePdf(){

        $resultQuerys = Data::where('id', $_GET['idPerson'])->get();

        $date = Carbon::parse($resultQuerys[0]->FechaPago);
        $date->format('d/m/Y');

        $pdf = PDF::loadView('nomina_receipt',compact('resultQuerys','date'));
        return $pdf->setPaper('A4','landscape')->download('Recibo de nomina.pdf');
    }
    public function render()
    {
           
        DB::statement("SET lc_time_names = 'es_MX'");
        $queryEmployes = Data::select(DB::raw("DATE_FORMAT(FechaPago,'%Y') as years"))
            ->groupBy('years')
            ->get();
        $queryMonths = Data::select(DB::raw("DATE_FORMAT(FechaPago,'%Y-%m-%M') as months"))
            ->groupBy('months')
            ->get();
        $queryDays = Data::select(DB::raw("DATE_FORMAT(FechaPago,'%m-%d') as days"))
            ->groupBy('days')
            ->get();

        return view('livewire.admin.select-component', compact('queryEmployes', 'queryMonths', 'queryDays'));
    }
}
