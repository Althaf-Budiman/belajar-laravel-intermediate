<?php

use Illuminate\Support\Facades\Route;

app()->singleton('Tabungan', function () {
    return new App\Data\Tabungan();
});

Route::get('/', function () {
    return dd(app('Tabungan'), app('Tabungan'));
});
