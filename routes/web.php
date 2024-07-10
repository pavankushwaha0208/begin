<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;


//web routing 


Route::get('/' , [usercontroller::class, 'home']);
Route::get('/about' , [usercontroller::class, 'about']);

Route::get('/form' , [usercontroller::class, 'form']);
Route::post('/register' , [usercontroller::class, 'register']);

