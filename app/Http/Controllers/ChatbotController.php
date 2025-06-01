<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    
    public function responder(Request $request)
    {
        try {
            // Validação da entrada
            $validated = $request->validate([
                'setor' => 'required|string|max:100',
            ]);

            $setor = strtolower($validated['setor']);

            $respostas = [
                'saúde' => 'Estamos prontos para oferecer soluções tecnológicas para clínicas, hospitais e laboratórios.',
                'beleza' => 'Temos automações incríveis para salões, estúdios e clínicas estéticas.',
                'educação' => 'Atuamos com plataformas para escolas, cursos online e treinamentos corporativos.',
            ];

            $mensagem = $respostas[$setor] ?? 'Ainda não temos uma solução pronta para esse setor, mas podemos criar uma sob demanda!';

            return response()->json(['resposta' => $mensagem]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'erro' => 'Dados inválidos.',
                'detalhes' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'erro' => 'Erro interno no servidor.',
                'mensagem' => $e->getMessage()
            ], 500);
        }
    }

}


