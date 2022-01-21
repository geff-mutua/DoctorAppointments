<?php

namespace App\Http\Livewire\Patient\History;

use Livewire\Component;

class MedicalHistory extends Component
{
    public $medical=[];
    public function render()
    {
        return view('livewire.patient.history.medical-history')->extends('layouts.master');
    }
}
