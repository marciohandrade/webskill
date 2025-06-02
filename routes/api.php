<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;


Route::get('/hello', function () {
    return response()->json(['message' => 'Laravel está respondendo!']);
});

Route::post('/resposta', [ChatbotController::class, 'responder']);


Route::post('/resposta', function (Request $request) {
    $setor = strtolower($request->input('setor'));

    $respostas = [
        'saude' => 'Oferecemos soluções para clínicas, consultórios e psicólogos.',
        'beleza' => 'Temos planos para salões, barbearias e estúdios de estética.',
        'financas' => 'Auxiliamos contadores e consultores financeiros a captar clientes.',
    ];

    return response()->json([
        'resposta' => $respostas[$setor] ?? 'Ainda não temos uma solução pronta para esse setor, mas podemos criar uma sob demanda!'
    ]);
});



