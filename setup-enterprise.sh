#!/bin/bash

# Laravel Setup Script - Upgrade Conservador
# Preserva suas configurações + adiciona melhorias enterprise

echo "🚀 Configurando Laravel com melhorias enterprise (preservando suas configurações)..."

# Cores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

print_status() {
    echo -e "${GREEN}✓${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}⚠${NC} $1"
}

print_error() {
    echo -e "${RED}✗${NC} $1"
}

print_info() {
    echo -e "${BLUE}ℹ${NC} $1"
}

# Verificar se está no diretório correto
if [ ! -f "composer.json" ]; then
    print_error "Execute este script na raiz do projeto Laravel!"
    exit 1
fi

# 1. Backup automático
print_info "Fazendo backup das configurações atuais..."
if [ ! -d "backups" ]; then
    mkdir backups
fi
cp composer.json "backups/composer.json.$(date +%Y%m%d_%H%M%S)"
if [ -f ".env" ]; then
    cp .env "backups/.env.$(date +%Y%m%d_%H%M%S)"
fi
print_status "Backup criado na pasta 'backups/'"

# 2. Verificar se .env existe
if [ ! -f ".env" ]; then
    print_info "Arquivo .env não encontrado. Criando a partir do .env.example..."
    if [ -f ".env.example" ]; then
        cp .env.example .env
    else
        print_warning ".env.example não encontrado. Você precisará configurar o .env manualmente."
    fi
fi

# 3. Instalar/atualizar dependências
print_info "Instalando dependências do Composer..."
composer install --no-dev
if [ $? -eq 0 ]; then
    print_status "Dependências instaladas com sucesso"
else
    print_warning "Possíveis conflitos de dependências. Tentando resolver..."
    composer update
fi

# 4. Gerar chave se não existir
if ! grep -q "APP_KEY=base64:" .env; then
    print_info "Gerando chave da aplicação..."
    php artisan key:generate
    print_status "Chave gerada"
fi

# 5. Criar banco SQLite se não existir
if [ ! -f "database/database.sqlite" ]; then
    print_info "Criando banco de dados SQLite..."
    touch database/database.sqlite
    print_status "Banco SQLite criado"
fi

# 6. Executar migrações
print_info "Executando migrações..."
php artisan migrate --graceful
print_status "Migrações executadas"

# 7. Publicar assets apenas dos novos pacotes (se instalados)
print_info "Publicando assets dos novos pacotes..."

# Verificar se Telescope está instalado
if composer show | grep -q "laravel/telescope"; then
    php artisan vendor:publish --tag=telescope-assets --force > /dev/null 2>&1
    print_status "Telescope assets publicados"
fi

# Verificar se Spatie Permission está instalado
if composer show | grep -q "spatie/laravel-permission"; then
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" > /dev/null 2>&1
    print_status "Permission assets publicados"
fi

# 8. Limpar cache
print_info "Limpando cache..."
php artisan config:clear > /dev/null 2>&1
php artisan route:clear > /dev/null 2>&1
php artisan view:clear > /dev/null 2>&1
php artisan cache:clear > /dev/null 2>&1
print_status "Cache limpo"

# 9. Criar storage link se não existir
if [ ! -L "public/storage" ]; then
    print_info "Criando storage link..."
    php artisan storage:link
    print_status "Storage link criado"
fi

# 10. Instalar dependências NPM se package.json existir
if [ -f "package.json" ]; then
    print_info "Instalando dependências NPM..."
    npm install > /dev/null 2>&1
    print_status "NPM dependencies instaladas"
fi

# 11. Configurar permissões básicas (apenas se necessário)
if [[ "$OSTYPE" == "linux-gnu"* ]] && [ -w "storage" ]; then
    print_info "Ajustando permissões..."
    chmod -R 775 storage bootstrap/cache 2>/dev/null
    print_status "Permissões ajustadas"
fi

echo ""
print_status "🎉 Setup concluído com sucesso!"
echo ""
print_info "Novos recursos disponíveis:"
echo "   • composer run dev (seu script original)"
echo "   • composer run dev-enhanced (com monitoring)"
echo "   • composer run test-parallel (testes paralelos)"
echo "   • composer run analyze (análise de código)"
echo "   • composer run backup (backup automático)"
echo ""
print_info "Próximos passos opcionais:"
echo "   1. Configure Redis no .env para melhor performance"
echo "   2. Ative o Telescope: TELESCOPE_ENABLED=true"
echo "   3. Configure backup: BACKUP_DISK=local"
echo ""
print_warning "IMPORTANTE: Suas configurações originais foram preservadas!"
print_info "Backups salvos em: ./backups/"
echo ""
print_status "Ambiente pronto! Execute: composer run dev 🚀"