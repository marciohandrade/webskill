<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AntiSpamMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lista de user agents suspeitos
        $suspiciousUserAgents = [
            'bot', 'crawler', 'spider', 'scraper', 'curl', 'wget', 'python'
        ];
        
        $userAgent = strtolower($request->userAgent() ?? '');
        
        foreach ($suspiciousUserAgents as $suspicious) {
            if (str_contains($userAgent, $suspicious)) {
                Log::warning('Tentativa de spam bloqueada - User Agent suspeito', [
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'url' => $request->fullUrl()
                ]);
                
                abort(403, 'Acesso negado.');
            }
        }
        
        // Verificar referer suspeito
        $referer = $request->header('referer');
        if (!$referer || !str_contains($referer, 'webskill.com.br')) {
            // Se não tem referer ou não vem do próprio site, logar suspeita
            Log::info('Submissão sem referer válido', [
                'ip' => $request->ip(),
                'referer' => $referer,
                'user_agent' => $request->userAgent()
            ]);
        }
        
        // Verificar IPs suspeitos (opcional - você pode expandir esta lista)
        $bannedIPs = [
            // Adicione IPs problemáticos aqui
        ];
        
        if (in_array($request->ip(), $bannedIPs)) {
            Log::warning('Tentativa de spam bloqueada - IP banido', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);
            
            abort(403, 'Acesso negado.');
        }
        
        return $next($request);
    }
}