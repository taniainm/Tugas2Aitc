<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tugas2Aitc', function(){
    return view('tugas2Aitc');
});
