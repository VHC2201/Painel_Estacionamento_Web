<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;

Route::get('/admin/vagas', [VagaController::class, 'index'])->name('admin.vagas.index');
