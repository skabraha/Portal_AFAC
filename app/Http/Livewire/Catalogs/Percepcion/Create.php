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
    public $modal=false;
    public $perception,$name,$key,$id_typersep;
    
    public function rules()
    {
        return [
            'name' => 'required',
            'key' => 'required',
        ];
    }
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
        $editperception = type_perception::findOrFail($id);
        $this->id_typersep = $id;
        $this->key = $editperception->codigo;
        $this->name = $editperception->name;
        $this->openModal();
    }
   
    public function clean()
    {
        $this->reset([
            'name', 'key'
        ]);
    }

    public function addpercepcion()
    {
        $this->openModal();
        $this->clean();
    }
    public function save()
    {
        $this->validate();
        $savepersepcion = type_perception::updateOrCreate(
            ['id' => $this->id_typersep],
            [
                'name' => $this->name,
                'codigo' => $this->key   
            ]
        );
        $this->clean();
        $this->closeModal();
        $this->notification([
            'title'       => 'Percepción guardada',
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
