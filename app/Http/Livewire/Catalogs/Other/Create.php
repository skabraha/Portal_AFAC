<?php

namespace App\Http\Livewire\Catalogs\Other;

use Livewire\Component;
use App\Models\type_other;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions;
    use WithPagination;
    public $search = "";
    public $page = 1;
    public $otherpay;
    public function render()
    {
        $otherpay = type_other::where('name', 'LIKE', '%' . $this->search . '%')
        ->where('estado', false)
        ->paginate(10, ['*'], 'otherpayPage');
        $this->otherpay = collect($otherpay->items());
        return view('livewire.catalogs.other.create',['paginate' => $otherpay]);
    }
}
