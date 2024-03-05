<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;
    public $ciudad;
    public $cp;

    protected $rules = [
        'name' => ['required', 'string', 'min:3', 'max:70'],
        'email' => ['required', 'email', 'min:5'],
        'phone' => ['required', 'digits:10'],
        'ciudad' => 'required|string|regex:/^[^\d]*$/|max:35',
        'cp' => ['required', 'string', 'min:5', 'max:5'],
    ];

    protected $validationAttributes = [
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'ciudad' => 'city',
        'cp' => 'postal code',
    ];

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $this->validate();

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'ciudad' => $this->ciudad,
            'cp' => $this->cp
        ]);

        session()->flash('message', '¡Cliente creado exitosamente!');
        $this->reset();
    }
}

