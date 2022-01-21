<?php

namespace App\Http\Livewire\Patient\Doctor;

use Livewire\Component;

class Recomendation extends Component
{
    public $recommendations=[];
    public function render()
    {
        return view('livewire.patient.doctor.recomendation')->extends('layouts.master');
    }
}
