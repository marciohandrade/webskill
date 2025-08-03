#!/bin/bash

# Monitor de Desenvolvimento Laravel
# Salve como: monitor-dev.sh

# Cores
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

print_status() { echo -e "${GREEN}🟢${NC} $1"; }
print_warning() { echo -e "${YELLOW}🟡${NC} $1"; }
print_error() { echo -e "${RED}🔴${NC} $1"; }

while true; do
    clear
    echo "🚀 MONITOR LARAVEL - $(date '+%H:%M:%S')"
    echo "==============================="
    
    echo ""
    echo "🌐 SERVIDOR:"
    if curl -s http://localhost:8000 > /dev/null 2>&1; then
        print_status "http://localhost:8000 ONLINE"
    else
        print_error "Servidor OFFLINE"
    fi
    
    echo ""
    echo "🔄 PROCESSOS:"
    echo "   Queue: $(ps aux | grep "queue:listen" | grep -v grep | wc -l) workers"
    echo "   NPM: $(ps aux | grep -E "(npm|mix)" | grep -v grep | wc -l) processos"
    echo "   Artisan: $(ps aux | grep artisan | grep -v grep | wc -l) comandos"
    
    echo ""
    echo "⚙️ COMANDOS:"
    echo "   Ctrl+C: Sair"
    echo "   composer run dev-simple: Iniciar básico"
    echo "   composer run dev: Iniciar completo"
    
    sleep 3
done