<div class="col-md-8">
                        <!-- <h4>Entrar em contato</h4> -->
                        
                        <!-- Mensagens de Sucesso/Erro -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        
                        <!-- 🔥 FORMULÁRIO HTML REORGANIZADO -->
                        <p class="text-muted mb-4">
                            Preencha o formulário abaixo e entraremos em contato o mais breve possível.
                        </p>
                        
                        <form action="{{ route('contato.enviar') }}" method="POST" novalidate>
                            @csrf
                            
                            <!-- Linha 1: Nome completo (largura total) -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nome completo<span>*</span></label>
                                        <input type="text" class="form-control form-control-lg @error('nome') is-invalid @enderror" 
                                               style="height: 50px; font-size: 16px;" 
                                               placeholder="Informe seu nome completo" 
                                               id="nome" name="nome" 
                                               value="{{ old('nome') }}" 
                                               required>
                                        @error('nome')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Linha 2: Email + Telefone (lado a lado) -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E-mail<span>*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                               placeholder="seu@email.com" 
                                               id="email" name="email" 
                                               value="{{ old('email') }}" 
                                               required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control @error('tel') is-invalid @enderror" 
                                               placeholder="(11) 99999-9999" 
                                               id="tel" name="tel" 
                                               value="{{ old('tel') }}">
                                        @error('tel')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Linha 3: Assunto (largura total) -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Assunto</label>
                                        <input type="text" class="form-control @error('assunto') is-invalid @enderror" 
                                               maxlength="80" 
                                               placeholder="Informe o assunto do contato" 
                                               id="assunto" name="assunto" 
                                               value="{{ old('assunto') }}">
                                        @error('assunto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Linha 4: Mensagem (largura total) -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mensagem<span>*</span></label>
                                        <textarea rows="5" class="form-control @error('mensagem') is-invalid @enderror" 
                                                  placeholder="Descreva sua solicitação com detalhes..." 
                                                  id="mensagem" name="mensagem" 
                                                  maxlength="1000" 
                                                  required>{{ old('mensagem') }}</textarea>
                                        @error('mensagem')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="text-muted">Máximo 1000 caracteres</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Botão de envio -->
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-theme-color btn-lg">
                                        <i class="fa fa-paper-plane me-2"></i>
                                        Enviar Mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--contact form-->
                        
                    </div>