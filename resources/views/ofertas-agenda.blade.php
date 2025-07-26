<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Skill - Sistema de Agendamento para Salões</title>
    @livewireStyles
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
            }

            body {
                font-family: 'Inter', sans-serif;
                line-height: 1.6;
                color: #333;
                overflow-x: hidden;
            }

            /* HEADER - CORRIGIDO */
            .header {
                background: #000;
                padding: 20px 0;
                box-shadow: 0 2px 20px rgba(0,0,0,0.3);
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 1000;
            }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .logo-main {
            font-size: 32px;
            font-weight: 800;
            color: #fff;
            line-height: 1;
        }

        .logo-main .highlight {
            color: #ff6b35;
        }

        .logo-tagline {
            font-size: 11px;
            color: #ff6b35;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 2px;
        }

        .header-cta {
            background: #ff6b35;
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .header-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255,107,53,0.3);
        }

        /* HERO SECTION */
       .hero {
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
            padding-top: 100px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ff6b35" fill-opacity="0.03"><circle cx="30" cy="30" r="2"/></g></svg>');
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(-60px) translateY(-60px); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .badge {
            display: inline-block;
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            color: white;
            padding: 16px 32px;
            border-radius: 35px;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 40px;
            border: 3px solid rgba(255,107,53,0.3);
            box-shadow: 0 8px 25px rgba(255,107,53,0.3);
            animation: pulse-badge 3s infinite;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }

        @keyframes pulse-badge {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 8px 25px rgba(255,107,53,0.3);
            }
            50% { 
                transform: scale(1.05);
                box-shadow: 0 12px 35px rgba(255,107,53,0.5);
            }
        }

        .hero-title {
            font-size: 56px;
            font-weight: 800;
            color: #000;
            margin-bottom: 24px;
            line-height: 1.1;
        }

        .hero-title .highlight {
            color: #ff6b35;
        }

        .hero-subtitle {
            font-size: 24px;
            color: #666;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .guarantee-badge {
            background: #000;
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            border: 2px solid #ff6b35;
        }

        .price-highlight {
            background: #000;
            color: white;
            padding: 20px 40px;
            border-radius: 16px;
            display: inline-block;
            margin-bottom: 40px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }

        .price-old {
            text-decoration: line-through;
            opacity: 0.7;
            font-size: 18px;
        }

        .price-new {
            font-size: 36px;
            font-weight: 800;
            color: #ff6b35;
            margin: 8px 0;
        }

        .price-period {
            font-size: 16px;
            opacity: 0.9;
        }

        .hero-cta {
            background: #ff6b35;
            color: white;
            padding: 22px 50px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 45px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(255,107,53,0.3);
        }

        .hero-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255,107,53,0.4);
        }

        .hero-cta-secondary {
            color: #000;
            text-decoration: none;
            font-weight: 600;
            font-size: 22px;
            border-bottom: 2px solid #ff6b35;
            padding-bottom: 2px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .arrow-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .arrow-down {
            font-size: 40px;
            color: #ff6b35;
            animation: bounce-arrow 2s infinite;
            font-weight: bold;
        }

        @keyframes bounce-arrow {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(8px);
            }
            60% {
                transform: translateY(4px);
            }
        }

        .hero-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
        }

        /* VALUE STACK */
        .value-stack {
            background: rgba(255,107,53,0.05);
            border: 2px solid #ff6b35;
            border-radius: 15px;
            padding: 25px;
            margin: 30px auto;
            text-align: left;
            max-width: 600px;
        }
        
        .value-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255,107,53,0.2);
        }
        
        .value-item:last-child {
            border-bottom: none;
            font-weight: 700;
            font-size: 18px;
            color: #ff6b35;
            background: #ff6b35;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        /* APP SHOWCASE SECTION */
        .app-showcase {
            padding: 100px 0;
            background: #fff;
        }

        .showcase-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .showcase-title {
            font-size: 42px;
            font-weight: 700;
            color: #000;
            margin-bottom: 20px;
        }

        .showcase-subtitle {
            font-size: 20px;
            color: #666;
            margin-bottom: 40px;
        }

        .devices-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }

        .device-mockup {
            position: relative;
            text-align: center;
        }

        .device-frame {
            background: #000;
            border-radius: 25px;
            padding: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            position: relative;
        }

        .mobile-frame {
            width: 280px;
            height: 500px;
            border-radius: 35px;
            padding: 30px 20px;
        }

        .desktop-frame {
            width: 500px;
            height: 320px;
            border-radius: 15px;
            padding: 25px;
        }

        .device-screen {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #333;
            position: relative;
            overflow: hidden;
        }

        .screenshot-container {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .screenshot-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            border-radius: 15px;
            background: #f8f9fa;
        }

        .admin-panel-container {
            width: 100%;
            height: 100%;
            background: white;
            border-radius: 5px;
            padding: 2px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .admin-panel-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            border-radius: 3px;
            transform: scale(0.98);
        }

        .screenshot-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
            border: 2px dashed #ff6b35;
            border-radius: 15px;
            color: #ff6b35;
            font-weight: 600;
            text-align: center;
            padding: 20px;
        }

        .device-label {
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        /* BENEFITS SECTION */
        .benefits {
            padding: 80px 0;
            background: #fff;
        }

        .section-title {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            color: #000;
            margin-bottom: 20px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 20px;
            color: #666;
            margin-bottom: 60px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .benefit-card {
            text-align: center;
            padding: 40px 30px;
            border-radius: 20px;
            background: #f8f9fa;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            border-color: #ff6b35;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .benefit-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
        }

        .benefit-title {
            font-size: 24px;
            font-weight: 700;
            color: #000;
            margin-bottom: 15px;
        }

        .benefit-description {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        /* SOCIAL PROOF */
        .social-proof {
            background: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }

        .stats-container {
            display: flex;
            justify-content: center;
            gap: 80px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 800;
            color: #ff6b35;
            line-height: 1;
        }

        .stat-label {
            font-size: 16px;
            color: #666;
            margin-top: 8px;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .testimonial {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            text-align: left;
        }

        .testimonial-text {
            font-size: 16px;
            color: #333;
            font-style: italic;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
        }

        .author-info {
            flex: 1;
        }

        .author-name {
            font-weight: 600;
            color: #000;
            margin-bottom: 2px;
        }

        .author-business {
            font-size: 14px;
            color: #666;
        }

        /* FORM SECTION */
        .form-section {
            background: #000;
            color: white;
            padding: 100px 0;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .form-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .form-subtitle {
            font-size: 20px;
            opacity: 0.9;
            margin-bottom: 40px;
        }

        .urgency-badge {
            background: #ff6b35;
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 40px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* FOOTER */
        .footer {
            background: #f8f9fa;
            padding: 40px 0;
            text-align: center;
            color: #666;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .test-mode {
                font-size: 12px;
                padding: 8px 0;
            }
            
            .test-links {
                margin-top: 3px;
            }
            
            .test-link {
                font-size: 10px;
                padding: 3px 6px;
                margin: 0 5px;
            }
            
            .header {
                top: 50px;
            }
            
            .hero {
                padding-top: 170px;
            }
            
            .hero-title { font-size: 36px; }
            .hero-subtitle { font-size: 18px; }
            .section-title { font-size: 32px; }
            .stats-container { gap: 40px; }
            .benefits-grid { grid-template-columns: 1fr; }
            .devices-container { flex-direction: column; gap: 40px; }
            .desktop-frame { width: 100%; max-width: 400px; height: 250px; }
            .mobile-frame { width: 250px; height: 450px; }
            .testimonials-grid { grid-template-columns: 1fr; }
            .logo-main { font-size: 28px; }
            .logo-tagline { font-size: 10px; }
            .badge { 
                padding: 14px 28px; 
                font-size: 15px;
                margin-bottom: 35px;
            }
            .hero-cta {
                padding: 20px 45px;
                font-size: 18px;
                margin-bottom: 35px;
            }
            .hero-cta-secondary {
                font-size: 20px;
            }
            .arrow-down {
                font-size: 35px;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-main">
                        <span class="highlight">W</span>eb <span class="highlight">S</span>kill
                    </div>
                    <div class="logo-tagline">Desenvolvimento de Soluções Digitais</div>
                </div>
                <a href="#form" class="header-cta">Começar Agora</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="badge">🚀 OFERTA DE LANÇAMENTO - Primeiros 10 Salões da Região</div>
                
                <h1 class="hero-title">Sistema que <span class="highlight">Aumenta 40% os Agendamentos</span><br>Site Profissional + Agenda Online 24h</h1>
                
                <p class="hero-subtitle">Elimine conflitos de horário, reduza 80% dos no-shows e tenha uma agenda sempre cheia</p>
                
                <br><br>
                
                <div class="price-highlight">
                    <div class="price-old">Preço oficial: R$297/mês</div>
                    <div class="price-new">R$97/mês</div>
                    <div class="price-period">Durante Um Ano</div>
                </div>
                
                <div class="guarantee-badge">
                    🛡️ GARANTIA 30 DIAS - Não aumentar agendamentos = 100% reembolso
                </div>
                
                <br><br>
                
                <div class="hero-actions">
                    <a href="#form" class="hero-cta">Garantir Minha Vaga Agora !</a>
                    <a href="#showcase" class="hero-cta-secondary">Ver Demonstração Funcionando</a>
                    <div class="arrow-container">
                        <span class="arrow-down">↓</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APP SHOWCASE -->
    <section class="app-showcase" id="showcase">
        <div class="container">
            <div class="showcase-header">
                <h2 class="showcase-title">Veja Como Fica Seu Sistema</h2>
                <p class="showcase-subtitle">Funciona perfeitamente em qualquer dispositivo - celular, tablet ou computador</p>
            </div>
            
            <div class="devices-container">
                <!-- MOBILE MOCKUP -->
                <div class="device-mockup">
                    <div class="device-frame mobile-frame">
                        <div class="device-screen">
                            <!-- AQUI VOCÊ COLOCA SUA IMAGEM MOBILE -->
                            <div class="screenshot-container" id="mobile-screenshot">
                                <!-- PARA ADICIONAR IMAGEM MOBILE, DESCOMENTE A LINHA ABAIXO: -->
                                <img src="{{url('outros/img/WS-Ag-Mobile.png')}}" alt="App Mobile" class="screenshot-image">                                
                                <!-- PLACEHOLDER (remover quando colocar imagem) -->
                                <div class="screenshot-placeholder">
                                    📱 Versão Mobile<br>
                                    <small>Adicione a imagem do app mobile aqui</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="device-label">Seus clientes agendam pelo celular</div>
                </div>

                <!-- DESKTOP MOCKUP -->
                <div class="device-mockup">
                    <div class="device-frame desktop-frame">
                        <div class="device-screen">
                            <!-- OPÇÃO 1: IMG TAG -->
                            <div class="admin-panel-container">
                                <img src="{{url('outros/img/PainelAdmWsAgenda.png')}}" alt="Painel Admin" class="admin-panel-image">
                            </div>
                            
                            <!-- OPÇÃO 2: BACKGROUND IMAGE (descomente se a opção 1 não funcionar)
                            <div class="admin-panel-bg"></div>
                            -->
                        </div>
                    </div>
                    <div class="device-label">Você gerencia tudo pelo computador</div>                    
                </div>
            </div>

            <!-- Imagens implementadas nos mockups acima -->
        </div>
    </section>

    <!-- VALUE STACK -->
    <section style="background: #f8f9fa; padding: 80px 0;">
        <div class="container">
            <h2 style="text-align: center; font-size: 42px; font-weight: 700; margin-bottom: 40px; color: #000;">
                Tudo Que Você Recebe Por R$ 97/mês
            </h2>
            <div class="value-stack">
                <div class="value-item">
                    <span>✅ Site profissional responsivo</span>
                    <span><strong>R$ 2.500</strong></span>
                </div>
                <div class="value-item">
                    <span>✅ Sistema de agendamento 24h</span>
                    <span><strong>R$ 1.200</strong></span>
                </div>
                <div class="value-item">
                    <span>✅ WhatsApp integrado automático</span>
                    <span><strong>R$ 800</strong></span>
                </div>
                <div class="value-item">
                    <span>✅ Implementação + configuração</span>
                    <span><strong>R$ 1.500</strong></span>
                </div>
                <div class="value-item">
                    <span>✅ Treinamento da equipe</span>
                    <span><strong>R$ 600</strong></span>
                </div>
                <div class="value-item">
                    <span>✅ Suporte técnico permanente</span>
                    <span><strong>R$ 200/mês</strong></span>
                </div>
                <div class="value-item">
                    <span><strong>VALOR TOTAL:</strong></span>
                    <span><strong>R$ 6.600 + R$ 200/mês</strong></span>
                </div>
                <div class="value-item">
                    <span><strong>SEU INVESTIMENTO TESTE BETA:</strong></span>
                    <span><strong>R$ 97/mês</strong></span>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION -->
    <section class="benefits" id="benefits">
        <div class="container">
            <h2 class="section-title">Tudo Que Você Precisa Em Uma Solução</h2>
            <p class="section-subtitle">Pare de usar 5 ferramentas diferentes. Tenha tudo integrado e profissional.</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <span class="benefit-icon">🌐</span>
                    <h3 class="benefit-title">Site Profissional</h3>
                    <p class="benefit-description">Design moderno e responsivo que funciona em qualquer dispositivo. Seus trabalhos em destaque para impressionar clientes.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">📅</span>
                    <h3 class="benefit-title">Agendamento 24h</h3>
                    <p class="benefit-description">Clientes agendam sozinhos a qualquer hora. Nunca mais perca vendas por estar fechado ou ocupado.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">💬</span>
                    <h3 class="benefit-title">WhatsApp Integrado</h3>
                    <p class="benefit-description">Confirmações automáticas por WhatsApp. Reduza 80% dos no-shows e mantenha sua agenda sempre cheia.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">📊</span>
                    <h3 class="benefit-title">Relatórios Inteligentes</h3>
                    <p class="benefit-description">Veja quais horários rendem mais, quais serviços são preferidos e tome decisões baseadas em dados.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">⚡</span>
                    <h3 class="benefit-title">Configuração Rápida</h3>
                    <p class="benefit-description">Tudo pronto em 7 dias. Nossa equipe configura tudo para você começar a vender imediatamente.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">🛡️</span>
                    <h3 class="benefit-title">Suporte Completo</h3>
                    <p class="benefit-description">Suporte técnico dedicado e treinamento para sua equipe. Você nunca fica sozinho.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container">
            <h2 class="section-title">Resultados Reais dos Últimos Clientes</h2>
            
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">+R$ 8.500</div>
                    <div class="stat-label">Receita extra primeiro mês</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Ocupação da agenda</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">7 dias</div>
                    <div class="stat-label">Para estar funcionando</div>
                </div>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial">
                    <p class="testimonial-text">"Em 45 dias minha agenda saiu de 60% para 95% de ocupação. Faturei R$ 8.500 a mais só no primeiro mês! O sistema eliminou 100% dos conflitos."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MS</div>
                        <div class="author-info">
                            <div class="author-name">Marina Santos</div>
                            <div class="author-business">Salão Elegance - São Paulo</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial">
                    <p class="testimonial-text">"Recebia 20 agendamentos/semana. Agora são 35! Meus clientes elogiam o profissionalismo. Em 3 meses, aumento de 42% na receita."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">CM</div>
                        <div class="author-info">
                            <div class="author-name">Carlos Mendes</div>
                            <div class="author-business">Barbearia Premium - RJ</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial">
                    <p class="testimonial-text">"Sistema funcionando em 5 dias! Zero conflitos de horário desde então. Economizo 2h/dia que gastava organizando agenda no papel."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AF</div>
                        <div class="author-info">
                            <div class="author-name">Ana Ferreira</div>
                            <div class="author-business">Studio Glamour - BH</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM SECTION -->
    <section class="form-section" id="form">
        <div class="container">
            <div class="form-container">
                <div class="urgency-badge">
                    ⏰ Restam apenas <span id="vagas-restantes">6</span> vagas da oferta de lançamento
                </div>
                
                <h2 class="form-title">Garantir Vaga da Oferta de Lançamento</h2>
                <p class="form-subtitle">Preencha abaixo e eu entro em contato em até 2 horas para confirmar sua participação</p>
                
                <!-- COMPONENTE LIVEWIRE FUNCIONANDO -->
                @livewire('landing-oferta-form')
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Web Skill. Todos os direitos reservados.</p>
        </div>
    </footer>

    @livewireScripts
    
    <script>
        // Smooth scroll para links âncora
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // INTEGRAÇÃO LIVEWIRE - FUNCIONALIDADE PRINCIPAL
        document.addEventListener('livewire:init', () => {
            Livewire.on('lead-captured', (event) => {
                console.log('🎉 Lead capturado com sucesso:', event);
                
                // Atualizar contador de vagas
                const vagasElement = document.getElementById('vagas-restantes');
                if (vagasElement) {
                    let vagas = parseInt(vagasElement.textContent);
                    vagasElement.textContent = Math.max(1, vagas - 1);
                }
                
                // Feedback visual pós-conversão
                setTimeout(() => {
                    const badges = document.querySelectorAll('.urgency-badge');
                    badges.forEach(badge => {
                        if (badge && !badge.textContent.includes('Parabéns')) {
                            badge.innerHTML = '🎉 Parabéns! Sua vaga foi garantida!';
                            badge.style.background = '#28a745';
                        }
                    });
                }, 2000);
            });
        });

        // Simulação de escassez (opcional)
        function updateVagas() {
            const vagas = Math.floor(Math.random() * 4) + 3; // Entre 3-6 vagas
            const vagasElement = document.getElementById('vagas-restantes');
            if (vagasElement && !vagasElement.closest('.urgency-badge').textContent.includes('Parabéns')) {
                vagasElement.innerHTML = vagas;
            }
        }

        // Inicializar funções
        updateVagas();

        function formatPhoneNumber(input) {
        // Remove todos os caracteres não numéricos
        let value = input.value.replace(/\D/g, '');
        
        // Limita a 11 dígitos (DDD + 9 dígitos)
        if (value.length > 11) {
            value = value.substring(0, 11);
        }
        
        // Aplica a formatação baseada no número de dígitos
        if (value.length >= 11) {
            // Formato: (11) 99999-9999
            value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (value.length >= 7) {
            // Formato: (11) 9999-9999 ou (11) 99999-999
            if (value.length === 10) {
                value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
            } else {
                value = value.replace(/(\d{2})(\d{5})(\d+)/, '($1) $2-$3');
            }
        } else if (value.length >= 3) {
            // Formato: (11) 9999
            value = value.replace(/(\d{2})(\d+)/, '($1) $2');
        } else if (value.length >= 1) {
            // Formato: (1
            value = value.replace(/(\d+)/, '($1');
        }
        
        // Atualiza o valor do input
        input.value = value;
        
        // Dispara evento para o Livewire capturar a mudança
        input.dispatchEvent(new Event('input', { bubbles: true }));
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        // Permite números (0-9), backspace (8), delete (46), tab (9), escape (27), enter (13)
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    // Função para permitir apenas colagem de números
    document.addEventListener('DOMContentLoaded', function() {
        const whatsappInput = document.getElementById('whatsapp-input');
        if (whatsappInput) {
            whatsappInput.addEventListener('paste', function(e) {
                setTimeout(() => {
                    formatPhoneNumber(this);
                }, 10);
            });
        }
    });
    </script>
</body>
</html>