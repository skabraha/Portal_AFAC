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
    public $modal=false;
    public $deduction,$name,$key,$id_typededuc;

    public function rules()
    {
        return [
            'name' => 'required',
            'key' => 'required',
        ];
    }
    public function render()
    {
        $deduction = type_deduction::where('name', 'LIKE', '%' . $this->search . '%')
        ->where('estado', false)
        ->paginate(10, ['*'], 'deductionPage');
        $this->deduction = collect($deduction->items());
        return view('livewire.catalogs.deduccion.create',['paginate' => $deduction]);
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
        $editperception = type_deduction::findOrFail($id);
        $this->id_typededuc = $id;
        $this->key = $editperception->codigo;
        $this->name = $editperception->name;
        $this->openModal();
    }
   
    public function clean()
    {
        $this->reset([
            'name', 'key','id_typededuc'
        ]);
    }

    public function adddeduccion()
    {
        $this->openModal();
        $this->clean();
    }
    public function save()
    {
        $this->validate();
        $savepersepcion = type_deduction::updateOrCreate(
            ['id' => $this->id_typededuc],
            [
                'name' => $this->name,
                'codigo' => $this->key,
                'estado' => '0',    
            ]
        );
        $this->clean();
        $this->closeModal();
        $this->notification([
            'title'       => 'Deducción guardada',
            'description'       => 'Tus cambios se han guardado éxitosamente',
            'icon'        => 'success',
            'timeout' => 3300
        ]);
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo obligatorio',
            'key.required' => 'Campo obligatorio',
        ];
    }
}
