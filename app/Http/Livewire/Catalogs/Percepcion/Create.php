<?php

namespace App\Http\Livewire\Catalogs\Percepcion;
use App\Models\type_perception;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions;
    use WithPagination;
    public $search = "";
    public $page = 1;
    public $modal = false ;
    public $perception;
    
    public function render()
    {
        $perception = type_perception::where('name', 'LIKE', '%' . $this->search . '%')
        ->where('estado', false)
        ->paginate(10, ['*'], 'coursesPage');
        $this->perception = collect($perception->items());
        return view('livewire.catalogs.percepcion.create', ['paginate' => $perception]);
    }

    
    public function openModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }
    public function edit($id)
    {
        
        $this->openModal();
    }
}
