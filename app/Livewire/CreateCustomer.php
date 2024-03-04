<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required', 
            'email' => 'required', 
            'phone' => 'required' 
        ]);
         $this->save();
    }
   

    public function save()
    {
        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ]);
        $this->reset();
    }
}
