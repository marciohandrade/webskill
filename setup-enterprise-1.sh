#!/bin/bash

echo "🚀 TESTE RÁPIDO DO AMBIENTE LARAVEL"
echo "==================================="

# Cores
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
NC='\033[0m'

test_success() { echo -e "${GREEN}✅ $1${NC}"; }
test_warning() { echo -e "${YELLOW}⚠️  $1${NC}"; }
test_error() { echo -e "${RED}❌ $1${NC}"; }

echo ""
echo "1️⃣ Testando servidor Laravel..."
php artisan serve --port=8001 &
SERVER_PID=$!
sleep 3

if curl -s http://localhost:8001 > /dev/null 2>&1; then
    test_success "Servidor Laravel funcionando"
    kill $SERVER_PID 2>/dev/null
else
    test_error "Servidor Laravel com problemas"
    kill $SERVER_PID 2>/dev/null
fi

echo ""
echo "2️⃣ Testando queue..."
timeout 5 php artisan queue:listen --tries=1 &
QUEUE_PID=$!
sleep 2
if kill -0 $QUEUE_PID 2>/dev/null; then
    test_success "Queue worker iniciou corretamente"
    kill $QUEUE_PID 2>/dev/null
else
    test_warning "Queue pode ter problemas de configuração"
fi

echo ""
echo "3️⃣ Testando pail (logs)..."
if command -v php artisan pail >/dev/null 2>&1; then
    test_success "Comando pail disponível"
else
    test_warning "Pail pode não estar instalado corretamente"
fi

echo ""
echo "4️⃣ Testando npm..."
if command -v npm >/dev/null 2>&1; then
    test_success "NPM disponível"
    if [ -f "package.json" ]; then
        test_success "package.json encontrado"
    else
        test_warning "package.json não encontrado"
    fi
else
    test_error "NPM não encontrado"
fi

echo ""
echo "🎯 SOLUÇÕES RÁPIDAS:"
echo ""
echo "📱 Para testar apenas o servidor:"
echo "   php artisan serve"
echo ""
echo "🔄 Para desenvolvimento simples (sem queue/pail):"
echo "   Terminal 1: php artisan serve"
echo "   Terminal 2: npm run dev"
echo ""
echo "🛠️ Para desenvolvimento completo:"
echo "   composer run dev"
echo ""
echo "🌐 Acessar aplicação:"
echo "   http://localhost:8000"