<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomePage@home') -> name('home');

Route::get('worker/{id}', 'HomePage@worker') -> name('worker');
