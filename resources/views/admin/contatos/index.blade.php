<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin - Contatos | Web Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .stats-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .card-contato {
            transition: transform 0.2s;
            border-left: 4px solid #007bff;
        }
        .card-contato:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .card-contato.nao-respondido {
            border-left-color: #dc3545;
        }
        .card-contato.respondido {
            border-left-color: #28a745;
            opacity: 0.8;
        }
        .badge-status {
            font-size: 0.8em;
        }
        .navbar-admin {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar Admin -->
    <nav class="navbar navbar-admin navbar-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
                <i class="fas fa-tachometer-alt me-2"></i>
                Painel Admin - Web Skill
            </span>
            <span class="navbar-text">
                <i class="fas fa-envelope me-1"></i>
                Gerenciamento de Contatos
            </span>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <!-- Estatísticas -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="mb-0">{{ $estatisticas['total'] }}</h3>
                    <small>Total de Contatos</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="mb-0 text-warning">{{ $estatisticas['nao_respondidos'] }}</h3>
                    <small>Não Respondidos</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="mb-0">{{ $estatisticas['hoje'] }}</h3>
                    <small>Hoje</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="mb-0">{{ $estatisticas['esta_semana'] }}</h3>
                    <small>Esta Semana</small>
                </div>
            </div>
        </div>

        <!-- Filtros e Busca -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h4>
                    <i class="fas fa-inbox me-2"></i>
                    Contatos Recebidos
                </h4>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar por nome ou email..." id="busca">
                </div>
            </div>
        </div>

        <!-- Lista de Contatos -->
        <div class="row">
            @forelse($contatos as $contato)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card card-contato {{ $contato->respondido ? 'respondido' : 'nao-respondido' }}">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="fw-bold">
                                <i class="fas fa-user me-1"></i>
                                {{ Str::limit($contato->nome, 20) }}
                            </span>
                            <div>
                                @if($contato->respondido)
                                    <span class="badge bg-success badge-status">
                                        <i class="fas fa-check"></i> Respondido
                                    </span>
                                @else
                                    <span class="badge bg-danger badge-status">
                                        <i class="fas fa-clock"></i> Pendente
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>
                                    {{ $contato->data_formatada }}
                                </small>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-envelope me-1"></i>
                                {{ $contato->email }}
                            </p>
                            <p class="card-text">
                                <i class="fas fa-tag me-1"></i>
                                <strong>{{ $contato->assunto_formatado }}</strong>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-comment me-1"></i>
                                {{ Str::limit($contato->mensagem, 80) }}
                            </p>
                            
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.contatos.show', $contato) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i> Ver Detalhes
                                </a>
                                
                                @if(!$contato->respondido)
                                    <form action="{{ route('admin.contatos.respondido', $contato) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i> Marcar Respondido
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <small>
                                <i class="fas fa-hashtag"></i> 
                                Protocolo: #{{ $contato->id }}
                                @if($contato->email_enviado)
                                    <span class="badge bg-info ms-2">
                                        <i class="fas fa-paper-plane"></i> Email Enviado
                                    </span>
                                @endif
                            </small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <i class="fas fa-inbox fa-3x mb-3"></i>
                        <h5>Nenhum contato encontrado</h5>
                        <p>Aguardando novos contatos através do formulário do site.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Paginação -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $contatos->links() }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Busca simples
        document.getElementById('busca').addEventListener('keyup', function() {
            const search = this.value.toLowerCase();
            const cards = document.querySelectorAll('.card-contato');
            
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.closest('.col-md-6').style.display = 
                    text.includes(search) ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>