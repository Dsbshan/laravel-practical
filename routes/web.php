<?php

use App\Http\Controllers\post\postcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [postcontroller::class,'index']);

route::post('/create_post',function(Request $request){
    return $request->all();
})->name('create');
