<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;

Route::get('/', function () {
    return redirect()->route('admin.vagas.index');
});

Route::resource('admin/vagas', VagaController::class)->names('admin.vagas');