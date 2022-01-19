<?php

use App\Http\Livewire\Patient\Home;
use App\Http\Livewire\Patient\Notes;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Patient\Insurance;
use App\Http\Livewire\Patient\Appointment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/',Home::class)->name('patient.home');
    Route::get('/patient/insurance',Insurance::class)->name('patient.insurance');
    Route::get('/patient/notes',Notes::class)->name('patient.notes');
    Route::get('/patient/appointment',Appointment::class)->name('patient.appointment');
});

require __DIR__.'/auth.php';
