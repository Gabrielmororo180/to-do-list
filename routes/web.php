<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Tasks;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', Tasks::class);