<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

Route::delete('/events/{id}', [EventController::class, 'destroy']); 

});
