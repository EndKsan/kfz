<?php

use App\Http\Controllers\Maincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});