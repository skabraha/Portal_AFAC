<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'username' => 'required',
        'password' => 'required|min:8|same:passwordConfirmation',
    ];
    public $modal = false;
    public $modaldelete = false;
    public $search = '';
    public $id_user, $users, $firstname, $lastname, $username, $password, $passwordConfirmation;
    public $updateMode = false;
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function openModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }
    public function openModaldelt()
    {
        $this->modaldelete = true;
    }
    public function closeModaldelt()
    {
        $this->modaldelete = false;
    }
    public function render()
    {
        $usuarios = $usuarios = User::where('firstname', 'LIKE', '%' . $this->search . '%')
        ->where('lastname', 'LIKE', '%' . $this->search . '%')->paginate(20);
        $this->usuarios = collect($usuarios->items());
        return view('livewire.users', ['user' => $usuarios]);
    }

    private function resetInputFields()
    {
        $this->reset(['firstname', 'lastname', 'username','password','passwordConfirmation']);
    }
    

    public function new()
    {
        $this->openModal();
        $this->resetInputFields();
        
    }
    public function edit($id)
    {
        $User = User::findOrFail($id);
        $this->id_user = $id;
        $this->firstname = $User->firstname;
        $this->lastname = $User->lastname;
        $this->username = $User->username;
        $this->password = '';
        $this->passwordConfirmation = '';
        $this->openModal();
    }
    public function save()
    {
        $validation = $this->validate();
        $SaveUsers = User::updateOrCreate(
            ['id' => $this->id_user],
            [
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'username' => $this->username,
                'password' => Hash::make($this->password)
            ],
            $validation
        );
        $this->closeModal();
        $this->resetInputFields();
        session()->flash(
            'success',
            $this->id_user ? 'Actualización' : 'Se añadió de forma correcta'
        );
    }
    //función para eliminar
    /*public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }*/
    public function delete($id)
    {
        $User = User::findOrFail($id);
        $this->id_user = $id;
        $this->firstname = $User->firstname;
        $this->lastname = $User->lastname;
        $this->openModaldelt();
    }

    public function savedelete()
    {
        $Delete = User::find($this->id_user);
        $Delete ->delete();
        //session()->flash('message', 'User Deleted Successfully.');
        $this->closeModaldelt();
    }
    
}
