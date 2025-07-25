<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'enviar'])
    ->name('contato.enviar');

Route::get('/ofertas-agenda', function () {
    return view('ofertas-agenda');
});

Route::prefix('portfolio')->group(function () {
    Route::get('/clinica', fn() => view('portfolio.clinica.home'))->name('portfolio.clinica');
    Route::get('/estetica', fn() => view('portfolio.estetica.home'))->name('portfolio.estetica');
    Route::get('/advocacia', fn() => view('portfolio.advocacia.home'))->name('portfolio.advocacia');
    Route::get('/loja', fn() => view('portfolio.loja.home'))->name('portfolio.loja');
    Route::get('/autonomo', fn() => view('portfolio.autonomo.home'))->name('portfolio.autonomo');
});

// ========================================
// PAINEL ADMIN - CONTATOS
// ========================================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/contatos', [App\Http\Controllers\ContatoController::class, 'admin'])->name('contatos.index');
    Route::get('/contatos/{contato}', [App\Http\Controllers\ContatoController::class, 'show'])->name('contatos.show');
    Route::patch('/contatos/{contato}/respondido', [App\Http\Controllers\ContatoController::class, 'marcarRespondido'])->name('contatos.respondido');
    Route::patch('/contatos/{contato}/observacao', [App\Http\Controllers\ContatoController::class, 'adicionarObservacao'])->name('contatos.observacao');
});

// ========================================
// TESTE FORMULÁRIO LIVEWIRE
// ========================================
Route::get('/ofertas-agenda', function () {
    return view('ofertas-agenda'); // ✅ CORRETO
});

/* Route::get('/ofertas-agenda', function () {
    return view('ofertas-agenda');
}); */