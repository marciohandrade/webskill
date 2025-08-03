#!/bin/bash

# Launcher de Desenvolvimento Laravel  
# Salve como: dev-launcher.sh

clear
echo "🚀 LAUNCHER DE DESENVOLVIMENTO LARAVEL"
echo "======================================"
echo ""
echo "Escolha uma opção:"
echo ""
echo "1) 🎯 Básico (server + mix)"
echo "2) 🚀 Completo (server + queue + logs + mix)"  
echo "3) 📱 Apenas servidor"
echo "4) 🎨 Apenas build"
echo "5) 📊 Monitor"
echo ""
read -p "Opção (1-5): " choice

case $choice in
    1)
        echo "🎯 Iniciando modo BÁSICO..."
        npx concurrently -c "#93c5fd,#fdba74" --names "server,mix" \
            "php artisan serve" "npm run watch"
        ;;
    2)
        echo "🚀 Iniciando modo COMPLETO..."
        npx concurrently -c "#93c5fd,#c4b5fd,#fb7185,#fdba74" \
            --names "server,queue,logs,mix" \
            "php artisan serve" \
            "php artisan queue:listen --tries=1" \
            "php artisan pail --timeout=0" \
            "npm run watch"
        ;;
    3)
        echo "📱 Iniciando apenas SERVIDOR..."
        php artisan serve
        ;;
    4)
        echo "🎨 Iniciando BUILD..."
        npm run watch
        ;;
    5)
        echo "📊 Iniciando MONITOR..."
        ./monitor-dev.sh
        ;;
    *)
        echo "❌ Opção inválida!"
        ;;
esac