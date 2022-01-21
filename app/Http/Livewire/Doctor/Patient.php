<?php

namespace App\Http\Livewire\Doctor;

use App\Models\User;
use Livewire\Component;

class Patient extends Component
{
    public $patients=[];

    public function mount(){
        $this->patients=User::where('role','Patient')->get();
    }
    public function render()
    {
       
        return view('livewire.doctor.patient')->extends('layouts.master');
    }
}
