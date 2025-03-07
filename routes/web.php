<?php

use App\Http\Controllers\post\postcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [postcontroller::class,'index']);
