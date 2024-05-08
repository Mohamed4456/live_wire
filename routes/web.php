<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('\empty');
});


Route::get('counter_test', function () {
    return view('livewire.counter.show_counter');
});

Route::get('parents', function () {
    return view('livewire.parents.show_Form');
});


