<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Eventcontroller;
Route::get('/', [Eventcontroller::class, 'index']);

