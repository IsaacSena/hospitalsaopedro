<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrarAtividadeController;













Route::get('/cadastrarPaciente', function () {
    return view('paginas/telaCadastroPaciente');
});

