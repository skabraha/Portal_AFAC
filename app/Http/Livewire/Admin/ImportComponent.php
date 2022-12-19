<?php

namespace App\Http\Livewire\Admin;

use App\Imports\DatasImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ImportComponent extends Component
{
    use WithFileUploads;
    public $file;
    public function rules(){
        return [
            'file'=>''
        ];
    }
    public function render()
    {
        return view('livewire.admin.import-component');
    }
    public function saveXml()
    {
        $this->validate([
            'file' => 'required'
        ]);
        Excel::import(new DatasImport, $this->file);
        $this->reset(['file']);
        session()->flash('success', 'Datos importados exitosamente');
    }
}
