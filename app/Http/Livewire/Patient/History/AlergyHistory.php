<?php

namespace App\Http\Livewire\Patient\History;

use Livewire\Component;

class AlergyHistory extends Component
{
    public $allergy=[]; 
    public function render()
    {
        return view('livewire.patient.history.alergy-history')->extends('layouts.master');
    }
}
