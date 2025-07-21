<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato #{{ $contato->id }} | Painel Admin - Web Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar-admin {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .info-card {
            border-left: 4px solid #007bff;
        }
        .status-pendente {
            border-left-color: #dc3545 !important;
        }
        .status-respondido {
            border-left-color: #28a745 !important;
        }
        .message-box {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }
        .btn-action {
            margin: 5px;
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
            <div>
                <a href="{{ route('admin.contatos.index') }}" class="btn btn-outline-light">
                    <i class="fas fa-arrow-left me-1"></i>
                    Voltar à Lista
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Alertas -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Cabeçalho -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h2>
                    <i class="fas fa-envelope me-2"></i>
                    Contato #{{ $contato->id }}
                </h2>
                <p class="text-muted">
                    Recebido em {{ $contato->data_formatada }}
                </p>
            </div>
            <div class="col-md-4 text-end">
                @if($contato->respondido)
                    <span class="badge bg-success fs-6">
                        <i class="fas fa-check"></i> Respondido
                    </span>
                @else
                    <span class="badge bg-danger fs-6">
                        <i class="fas fa-clock"></i> Pendente
                    </span>
                @endif
                
                @if($contato->email_enviado)
                    <span class="badge bg-info fs-6 ms-2">
                        <i class="fas fa-paper-plane"></i> Email Enviado
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <!-- Informações do Contato -->
            <div class="col-md-8">
                <div class="card info-card {{ $contato->respondido ? 'status-respondido' : 'status-pendente' }} mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-user me-2"></i>
                            Informações do Contato
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nome:</strong><br>{{ $contato->nome }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>E-mail:</strong><br>
                                    <a href="mailto:{{ $contato->email }}">{{ $contato->email }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Telefone:</strong><br>
                                    @if($contato->telefone)
                                        <a href="tel:{{ $contato->telefone }}">{{ $contato->telefone_formatado }}</a>
                                    @else
                                        <span class="text-muted">Não informado</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Assunto:</strong><br>{{ $contato->assunto_formatado }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mensagem -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-comment me-2"></i>
                            Mensagem
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="message-box">
                            {{ $contato->mensagem }}
                        </div>
                    </div>
                </div>

                <!-- Observações -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-sticky-note me-2"></i>
                            Observações Internas
                        </h5>
                    </div>
                    <div class="card-body">
                        @if($contato->observacoes)
                            <div class="alert alert-info">
                                {{ $contato->observacoes }}
                            </div>
                        @endif

                        <form action="{{ route('admin.contatos.observacao', $contato) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <textarea class="form-control" name="observacoes" rows="3" 
                                          placeholder="Adicione observações internas sobre este contato...">{{ $contato->observacoes }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>
                                Salvar Observação
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Ações e Informações Técnicas -->
            <div class="col-md-4">
                <!-- Ações -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-cogs me-2"></i>
                            Ações
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        @if(!$contato->respondido)
                            <form action="{{ route('admin.contatos.respondido', $contato) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-action">
                                    <i class="fas fa-check"></i> Marcar como Respondido
                                </button>
                            </form>
                        @endif

                        <a href="mailto:{{ $contato->email }}?subject=Re: {{ $contato->assunto_formatado }}&body=Olá {{ $contato->nome }},%0D%0A%0D%0AObrigado pelo seu contato através do nosso site.%0D%0A%0D%0A" 
                           class="btn btn-primary btn-action">
                            <i class="fas fa-reply"></i> Responder por E-mail
                        </a>

                        @if($contato->telefone)
                            <a href="https://wa.me/55{{ $contato->telefone }}?text=Olá {{ $contato->nome }}, recebemos seu contato através do nosso site." 
                               target="_blank" class="btn btn-success btn-action">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Informações Técnicas -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Informações Técnicas
                        </h5>
                    </div>
                    <div class="card-body">
                        <p><strong>IP:</strong><br>
                            <code>{{ $contato->ip_address ?? 'N/A' }}</code>
                        </p>
                        <p><strong>Navegador:</strong><br>
                            <small>{{ Str::limit($contato->user_agent ?? 'N/A', 50) }}</small>
                        </p>
                        <p><strong>Data de Criação:</strong><br>
                            {{ $contato->created_at->format('d/m/Y H:i:s') }}
                        </p>
                        <p><strong>Última Atualização:</strong><br>
                            {{ $contato->updated_at->format('d/m/Y H:i:s') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>