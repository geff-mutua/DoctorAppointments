<?php

namespace App\Http\Livewire\Patient\Doctor;

use Livewire\Component;

class PhysicalExam extends Component
{
    public $exam=[];
    public function render()
    {
        return view('livewire.patient.doctor.physical-exam')->extends('layouts.master');
    }
}
