<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('test');
});

Route::get('/users', function() {
    return "Hello world";
}); 

