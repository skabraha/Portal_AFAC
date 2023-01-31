<?php

namespace App\Http\Livewire\Catalogs\Deduccion;

use Livewire\Component;
use App\Models\type_deduction;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions;
    use WithPagination;
    public $search = "";
    public $page = 1;
    public $deduction;
    public function render()
    {
        $deduction = type_deduction::where('name', 'LIKE', '%' . $this->search . '%')
        ->where('estado', false)
        ->paginate(10, ['*'], 'deductionPage');
        $this->deduction = collect($deduction->items());
        return view('livewire.catalogs.deduccion.create',['paginate' => $deduction]);
    }
}
