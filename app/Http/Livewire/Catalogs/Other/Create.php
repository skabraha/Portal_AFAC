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
    public $modal = false;
    public $otherpay,$name,$key,$id_other;

    public function rules()
    {
        return [
            'name' => 'required',
            'key' => 'required',
        ];
    }
    public function render()
    {
        $otherpay = type_other::where('name', 'LIKE', '%' . $this->search . '%')
        ->where('estado', false)
        ->paginate(10, ['*'], 'otherpayPage');
        $this->otherpay = collect($otherpay->items());
        return view('livewire.catalogs.other.create',['paginate' => $otherpay]);
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
        $editperception = type_other::findOrFail($id);
        $this->id_other = $id;
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
        $savepersepcion = type_other::updateOrCreate(
            ['id' => $this->id_other],
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
