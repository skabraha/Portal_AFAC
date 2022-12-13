<?php

namespace App\Http\Livewire;

use App\Models\personalafac;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $modal = false;
    public $modaldelete = false;
    public $search = '';
    public $id_user, $users, $firstname, $lastname, $username, $password, $passwordConfirmation,$stateUser;
    public $updateMode = false;

    protected $rules = [        
        'firstname' => '',
        'username' => '',      
        'password' => '',
        'passwordConfirmation' => '',
    ];

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
        $peoplegestor = personalafac::on('mysql2')->get(); 
        $usuarios = $usuarios = User::where('firstname', 'LIKE', '%' . $this->search . '%')
        ->where('lastname', 'LIKE', '%' . $this->search . '%')
        ->where('stateUser',false)
        ->paginate(20);
        //$this->usuarios = collect($usuarios->items());
        //return view('livewire.users', ['user' => $usuarios]);
        return view('livewire.users', compact('usuarios','peoplegestor'));
    }

    private function resetInputFields()
    {
        $this->reset(['firstname', 'lastname', 'username','password','passwordConfirmation']);
    }
    
    function updatedFirstname($firstname){
        $dataPeoples = personalafac::on('mysql2')->where('gstNmpld',$firstname)->get();    
        $this->username = $dataPeoples[0]->gstNmpld;
    }
    public function new()
    {
        $this->openModal();
        $this->resetInputFields();
        
    }
    public function clean()
    {
        $this->reset([
            'id_user',
        ]);
    }
    public function edit($id)
    {

        $User = User::findOrFail($id);
        $this->id_user = $id;
        // dd($User->firstname);
        $this->firstname = $User->username;
        $this->lastname = $User->lastname;
        $this->username = $User->username;
        $this->password = '';
        $this->passwordConfirmation = '';
        $this->openModal();
    }


    public function save()
    {
        $dataPeoples = personalafac::on('mysql2')->where('gstNmpld',$this->firstname)->get();  

        if($this->id_user==null){
            $validation = $this->validate([
                'firstname' => 'required',
                'username' => 'required|unique:users',      
                'password' => 'required|min:8',
                'passwordConfirmation' => 'required|same:password',                
            ]);
        }else{
            $validation = $this->validate([      
                'password' => 'required|min:8',
                'passwordConfirmation' => 'required|same:password',                
            ]);            
        }
    
        $SaveUsers = User::updateOrCreate(
            ['id' => $this->id_user],
            [
                'firstname' => $dataPeoples[0]->gstNombr,
                'lastname' => $dataPeoples[0]->gstApell,
                'username' => $this->username,
                'password' => Hash::make($this->password),
                'stateUser' => $this->stateUser = false
            ],
            $validation
        )->assignRole('User');
        $this->clean();
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
        $Delete->update(
            [
                'id' => $this->id_user,
                'username'=> $this->id_user,
                'stateUser' => $this->stateUser = true
            ]
        );
        //session()->flash('message', 'User Deleted Successfully.');
        $this->closeModaldelt();
        $this->clean();
        session()->flash(
            'delete', 'Se elimino registro de forma correcta'
        );

    }
    public function messages()
    {
        return [
             'firstname.required' => 'Selecione persona',
              'username.unique' => 'El número de empleado ya existe',
              'password.required' => 'El campo de contraseña es obligatorio.',
              'passwordConfirmation.same' => 'Compruebe contraseña',
              'password.min' => 'La contraseña debe tener al menos 8 caracteres',
              'passwordConfirmation' => 'El campo de confirmación de contraseña es obligatorio.',
 
        ];
    }

        

}
