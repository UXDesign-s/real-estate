<?php

namespace App\Livewire;

use Livewire\Component;

class HomeForm extends Component
{


    public $houseNo;
    public $postCode;

    protected $rules = [
        'houseNo' => 'required|min:6',
        'postCode' => 'required|min:6',
    ];

    public function mount() {

        
        $this->postCode = "W14 9JH";
    }


    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.


        session()->put('houseNo', $this->houseNo);
        session()->put('postCode', $this->postCode);

        redirect(route('check-registration'));

        // dd(session()->all());
    }

    public function render()
    {
        return view('livewire.home-form');
    }
}
