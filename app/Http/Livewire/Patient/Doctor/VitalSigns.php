<?php

namespace App\Http\Livewire\Patient\Doctor;

use Livewire\Component;

class VitalSigns extends Component
{
    public $vitals=[];
    public function render()
    {
        return view('livewire.patient.doctor.vital-signs')->extends('layouts.master');
    }
}
