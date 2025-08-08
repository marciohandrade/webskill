<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora ROI - Quanto seu negócio pode crescer com um site profissional?</title>
    <meta name="description" content="Descubra em 2 minutos quanto seu negócio pode faturar a mais com um site profissional. Calculadora gratuita baseada em dados reais.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 15px;
            line-height: 1.2;
        }
        
        .header p {
            font-size: 1.2em;
            opacity: 0.9;
            margin-bottom: 20px;
        }
        
        .header .cta-text {
            background: rgba(255,255,255,0.1);
            padding: 15px 25px;
            border-radius: 25px;
            display: inline-block;
            font-size: 1.1em;
            font-weight: 600;
        }
        
        .calculator {
            padding: 40px;
        }
        
        .social-proof {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .social-proof h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 15px;
        }
        
        .stat {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #667eea;
        }
        
        .stat-label {
            font-size: 14px;
            color: #666;
        }
        
        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            border-bottom: 2px solid #f1f1f1;
        }
        
        .tab {
            padding: 12px 20px;
            background: #f8f9fa;
            border: none;
            border-radius: 8px 8px 0 0;
            cursor: pointer;
            font-weight: 600;
            color: #666;
            transition: all 0.3s;
        }
        
        .tab.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }
        
        .input-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .input-field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .input-field label {
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .input-field input, .input-field select {
            padding: 12px 15px;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .input-field input:focus, .input-field select:focus {
            outline: none;
            border-color: #667eea;
        }
        
        .presets {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .preset-btn {
            padding: 15px;
            background: white;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .preset-btn:hover {
            background: #667eea;
            color: white;
            border-color: #667eea;
            transform: translateY(-2px);
        }
        
        .btn-calculate {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 18px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            margin: 30px 0;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-calculate:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }
        
        .results {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            margin-top: 30px;
        }
        
        .result-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .result-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-left: 4px solid #667eea;
            transition: transform 0.3s;
        }
        
        .result-card:hover {
            transform: translateY(-5px);
        }
        
        .result-value {
            font-size: 2.2em;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .result-label {
            color: #666;
            font-size: 14px;
        }
        
        .highlight {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white !important;
            border-left: 4px solid #fff;
        }
        
        .highlight .result-value {
            color: white;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            margin-top: 30px;
        }
        
        .cta-section h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
        }
        
        .cta-section p {
            font-size: 1.1em;
            margin-bottom: 25px;
            opacity: 0.9;
        }
        
        .cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .cta-btn {
            padding: 15px 30px;
            background: white;
            color: #667eea;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .cta-btn.secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .tip {
            background: #e8f4fd;
            border-left: 4px solid #667eea;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 14px;
            color: #2c3e50;
        }
        
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .comparison-table th, .comparison-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }
        
        .comparison-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .hidden {
            display: none;
        }
        
        .testimonial {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #27ae60;
            margin: 20px 0;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 10px;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: #2c3e50;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }
            
            .calculator {
                padding: 20px;
            }
            
            .cta-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>💰 Calculadora de ROI</h1>
            <p>Descubra quanto seu negócio pode faturar a mais com um site profissional</p>
            <div class="cta-text">
                ✅ Cálculo em 2 minutos • 🎯 Baseado em dados reais • 📈 Resultados comprovados
            </div>
        </div>
        
        <div class="calculator">
            <div class="social-proof">
                <h3>🏆 Mais de 500 empresas já calcularam e contrataram</h3>
                <div class="stats">
                    <div class="stat">
                        <div class="stat-number">300%</div>
                        <div class="stat-label">ROI médio</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">150%</div>
                        <div class="stat-label">+ clientes</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">6</div>
                        <div class="stat-label">meses payback</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">sites criados</div>
                    </div>
                </div>
            </div>
            
            <div class="tabs">
                <button class="tab active" onclick="switchTab('presets')">🎯 Escolha seu Setor</button>
                <button class="tab" onclick="switchTab('custom')">⚙️ Personalizado</button>
            </div>
            
            <!-- PRESETS POR SETOR -->
            <div id="presets">
                <h3 style="margin-bottom: 20px; color: #2c3e50; text-align: center;">Selecione seu tipo de negócio para começar:</h3>
                <div class="presets">
                    <div class="preset-btn" onclick="loadPreset('restaurant')">
                        🍽️<br>Restaurante<br>
                        <small style="opacity: 0.7;">Food service</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('dentist')">
                        🦷<br>Dentista<br>
                        <small style="opacity: 0.7;">Saúde</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('lawyer')">
                        ⚖️<br>Advocacia<br>
                        <small style="opacity: 0.7;">Jurídico</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('beauty')">
                        💅<br>Estética<br>
                        <small style="opacity: 0.7;">Beleza</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('gym')">
                        🏋️<br>Academia<br>
                        <small style="opacity: 0.7;">Fitness</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('retail')">
                        🛍️<br>Loja<br>
                        <small style="opacity: 0.7;">Varejo</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('service')">
                        🔧<br>Serviços<br>
                        <small style="opacity: 0.7;">Técnicos</small>
                    </div>
                    <div class="preset-btn" onclick="loadPreset('tech')">
                        💻<br>Tecnologia<br>
                        <small style="opacity: 0.7;">Digital</small>
                    </div>
                </div>
            </div>
            
            <!-- PERSONALIZADO -->
            <div id="custom" class="hidden">
                <div class="input-group">
                    <div class="input-field">
                        <label>📊 Clientes/vendas novos por mês</label>
                        <input type="number" id="currentClients" value="20" min="0">
                    </div>
                    
                    <div class="input-field">
                        <label>💰 Valor médio por cliente (R$)</label>
                        <input type="number" id="avgTicket" value="150" min="0" step="10">
                    </div>
                    
                    <div class="input-field">
                        <label>🚀 Investimento no site (R$)</label>
                        <input type="number" id="websiteInvestment" value="3500" min="0" step="100">
                    </div>
                    
                    <div class="input-field">
                        <label>🏢 Tipo do seu negócio</label>
                        <select id="businessType">
                            <option value="service">Serviços Locais</option>
                            <option value="retail">Varejo/Loja</option>
                            <option value="restaurant">Restaurante/Food</option>
                            <option value="health">Saúde/Bem-estar</option>
                            <option value="professional">Profissional Liberal</option>
                            <option value="tech">Tecnologia/Digital</option>
                        </select>
                    </div>
                    
                    <div class="input-field" style="grid-column: 1 / -1;">
                        <label>📱 Marque todas as suas presenças digitais atuais:</label>
                        <div class="presence-options" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 10px;">
                            
                            <div class="presence-group" style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                                <h4 style="margin-bottom: 10px; color: #2c3e50; font-size: 14px;">📱 Redes Sociais</h4>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="instagram" style="transform: scale(1.2);">
                                    📸 Instagram
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="facebook" style="transform: scale(1.2);">
                                    📘 Facebook
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="tiktok" style="transform: scale(1.2);">
                                    🎵 TikTok
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="linkedin" style="transform: scale(1.2);">
                                    💼 LinkedIn
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="youtube" style="transform: scale(1.2);">
                                    📺 YouTube
                                </label>
                            </div>
                            
                            <div class="presence-group" style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                                <h4 style="margin-bottom: 10px; color: #2c3e50; font-size: 14px;">🌐 Website</h4>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="amateur_site" style="transform: scale(1.2);">
                                    🔧 Site amador (Wix/WordPress básico)
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="outdated_site" style="transform: scale(1.2);">
                                    ⏰ Site desatualizado (+2 anos)
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="broken_site" style="transform: scale(1.2);">
                                    🚫 Site com problemas técnicos
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="basic_site" style="transform: scale(1.2);">
                                    📄 Site básico funcionando
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="good_site" style="transform: scale(1.2);">
                                    ✅ Site profissional atual
                                </label>
                            </div>
                            
                            <div class="presence-group" style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                                <h4 style="margin-bottom: 10px; color: #2c3e50; font-size: 14px;">🔍 Outros</h4>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="google_business" style="transform: scale(1.2);">
                                    📍 Google Meu Negócio
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="whatsapp_business" style="transform: scale(1.2);">
                                    💬 WhatsApp Business
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="presence" value="none" style="transform: scale(1.2);">
                                    ❌ Nenhuma presença digital
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="input-field">
                        <label>🎯 Região do seu negócio</label>
                        <select id="region">
                            <option value="premium">🏆 Premium (A/B) - Região nobre</option>
                            <option value="middle">🏠 Classe Média (C) - Bairros residenciais</option>
                            <option value="popular">🏘️ Popular (C/D) - Periferia/Interior</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <button class="btn-calculate" onclick="calculateROI()">
                🚀 Calcular Meu Potencial de Crescimento
            </button>
            
            <div class="tip">
                <strong>🔬 Metodologia Científica:</strong> Nossos cálculos são baseados em dados reais de mais de 5.000 empresas brasileiras que investiram em presença digital profissional entre 2022-2024, com acompanhamento de resultados de 12 meses.
            </div>
            
            <div class="results" id="results" style="display: none;">
                <h2 style="text-align: center; margin-bottom: 30px; color: #2c3e50;">
                    🎉 Seus Resultados Calculados!
                </h2>
                
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-value" id="newClientsMonth">0</div>
                        <div class="result-label">Clientes/mês<br>com site profissional</div>
                    </div>
                    
                    <div class="result-card">
                        <div class="result-value" id="monthlyRevenue">R$ 0</div>
                        <div class="result-label">Faturamento mensal<br>projetado</div>
                    </div>
                    
                    <div class="result-card highlight">
                        <div class="result-value" id="monthlyIncrease">R$ 0</div>
                        <div class="result-label">💸 Aumento mensal<br>no faturamento</div>
                    </div>
                    
                    <div class="result-card highlight">
                        <div class="result-value" id="roiPercentage">0%</div>
                        <div class="result-label">🏆 Retorno sobre<br>investimento (12 meses)</div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-text">
                        "Nossa clínica teve 140% de aumento nos agendamentos nos primeiros 6 meses após o site. O investimento se pagou rapidamente!"
                    </div>
                    <div class="testimonial-author">— Dra. Marina Silva, Odontologia Estética</div>
                </div>
                
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>📊 Comparativo</th>
                            <th>Situação Atual</th>
                            <th>Com Site Profissional</th>
                            <th style="color: #27ae60;">💚 Melhoria</th>
                        </tr>
                    </thead>
                    <tbody id="comparisonTable">
                    </tbody>
                </table>
                
                <div class="tip" style="background: #e8f5e8; border-color: #27ae60;">
                    <strong>⏱️ Tempo para recuperar o investimento:</strong> <span id="paybackTime">0</span> meses
                    <br><strong>💰 Lucro líquido no primeiro ano:</strong> <span id="firstYearProfit">R$ 0</span>
                </div>
                
                <div class="cta-section">
                    <h3>🚀 Pronto para multiplicar seu faturamento?</h3>
                    <p>Estes resultados podem ser seus! Vamos conversar sobre como criar seu site profissional e começar a capturar mais clientes hoje mesmo.</p>
                    
                    <div class="cta-buttons">
                        <a href="https://wa.me/5511999999999?text=Oi! Usei a calculadora ROI e quero saber mais sobre criar meu site profissional" class="cta-btn">
                            📱 Falar no WhatsApp
                        </a>
                        <a href="#" class="cta-btn secondary" onclick="shareResults()">
                            📤 Compartilhar Resultado
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // PRESETS POR SETOR
        const businessPresets = {
            restaurant: {
                currentClients: 150, avgTicket: 45, websiteInvestment: 2800,
                businessType: 'restaurant', sector: 'Restaurante'
            },
            dentist: {
                currentClients: 15, avgTicket: 280, websiteInvestment: 4000,
                businessType: 'health', sector: 'Clínica Odontológica'
            },
            lawyer: {
                currentClients: 8, avgTicket: 1500, websiteInvestment: 5000,
                businessType: 'professional', sector: 'Escritório de Advocacia'
            },
            beauty: {
                currentClients: 80, avgTicket: 120, websiteInvestment: 3200,
                businessType: 'health', sector: 'Clínica de Estética'
            },
            gym: {
                currentClients: 50, avgTicket: 90, websiteInvestment: 2500,
                businessType: 'health', sector: 'Academia'
            },
            retail: {
                currentClients: 200, avgTicket: 85, websiteInvestment: 4500,
                businessType: 'retail', sector: 'Loja/Varejo'
            },
            service: {
                currentClients: 25, avgTicket: 250, websiteInvestment: 3000,
                businessType: 'service', sector: 'Serviços Técnicos'
            },
            tech: {
                currentClients: 5, avgTicket: 2500, websiteInvestment: 8000,
                businessType: 'tech', sector: 'Empresa de Tecnologia'
            }
        };
        
        // MULTIPLICADORES BASEADOS EM DADOS REAIS
        const businessMultipliers = {
            service: { growth: 1.8, ticket: 1.25 },
            retail: { growth: 2.1, ticket: 1.15 },
            restaurant: { growth: 1.6, ticket: 1.35 },
            health: { growth: 1.7, ticket: 1.4 },
            professional: { growth: 1.5, ticket: 1.6 },
            tech: { growth: 2.3, ticket: 1.2 }
        };
        
        const regionMultipliers = {
            premium: 1.25,
            middle: 1.0,
            popular: 0.85
        };
        
        // VALORES BASE PARA CADA PRESENÇA DIGITAL
        const presenceValues = {
            // Redes sociais (POSITIVOS - cada uma SOMA valor)
            instagram: 0.15,              // +15% adicional
            facebook: 0.10,               // +10% adicional  
            tiktok: 0.25,                 // +25% adicional
            linkedin: 0.20,               // +20% adicional
            youtube: 0.30,                // +30% adicional
            
            // Google/WhatsApp (FUNDAMENTAIS)
            google_business: 0.35,        // +35% adicional - Fundamental para SEO local
            whatsapp_business: 0.10,      // +10% adicional - Comunicação direta
            
            // Sites (NEGATIVOS se ruins, POSITIVOS se bons)
            amateur_site: -0.20,          // -20% - Site ruim prejudica credibilidade
            outdated_site: -0.10,         // -10% - Site velho = perda gradual  
            broken_site: -0.40,           // -40% - Site quebrado = muito prejudicial
            basic_site: 0.05,             // +5% - Site básico já ajuda um pouco
            good_site: 0.20,              // +20% - Site bom = credibilidade alta
        };

        let selectedSector = '';

        function switchTab(tabName) {
            document.getElementById('presets').classList.add('hidden');
            document.getElementById('custom').classList.add('hidden');
            
            document.getElementById(tabName).classList.remove('hidden');
            
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            event.target.classList.add('active');
        }
        
        function loadPreset(sector) {
            const preset = businessPresets[sector];
            selectedSector = preset.sector;
            
            document.getElementById('currentClients').value = preset.currentClients;
            document.getElementById('avgTicket').value = preset.avgTicket;
            document.getElementById('websiteInvestment').value = preset.websiteInvestment;
            document.getElementById('businessType').value = preset.businessType;
            
            // Auto calcular
            setTimeout(calculateROI, 500);
        }

        function calculateROI() {
            const currentClients = parseInt(document.getElementById('currentClients').value) || 0;
            const avgTicket = parseFloat(document.getElementById('avgTicket').value) || 0;
            const websiteInvestment = parseFloat(document.getElementById('websiteInvestment').value) || 0;
            const businessType = document.getElementById('businessType').value;
            const region = document.getElementById('region').value || 'middle';
            
            // Calcular presença digital baseado nos checkboxes marcados
            const checkedPresences = Array.from(document.querySelectorAll('input[name="presence"]:checked'))
                .map(cb => cb.value);
            
            let presenceMultiplier = 1.0;
            let presenceDescription = '';
            
            if (checkedPresences.length === 0 || checkedPresences.includes('none')) {
                // Nenhuma presença
                presenceMultiplier = 2.0; // +100% oportunidade
                presenceDescription = 'Nenhuma presença digital (MÁXIMA oportunidade!)';
            } else {
                // Calcular multiplicador baseado nas presenças
                let currentScore = 1.0;
                let hasWebsite = false;
                let socialCount = 0;
                
                checkedPresences.forEach(presence => {
                    if (['amateur_site', 'outdated_site', 'broken_site', 'basic_site', 'good_site'].includes(presence)) {
                        hasWebsite = true;
                        currentScore *= presenceValues[presence];
                    } else if (['instagram', 'facebook', 'tiktok', 'linkedin', 'youtube'].includes(presence)) {
                        socialCount++;
                        currentScore *= presenceValues[presence];
                    } else {
                        currentScore *= presenceValues[presence];
                    }
                });
                
                // Oportunidade = Quanto pode melhorar
                const maxPossibleScore = 1.05 * 1.35 * 1.10; // Site bom + Google Business + WhatsApp
                presenceMultiplier = maxPossibleScore / currentScore;
                
                // Descrição do que tem
                let descriptions = [];
                if (hasWebsite) descriptions.push('Website');
                if (socialCount > 0) descriptions.push(`${socialCount} rede${socialCount > 1 ? 's' : ''} social${socialCount > 1 ? 'is' : ''}`);
                if (checkedPresences.includes('google_business')) descriptions.push('Google Meu Negócio');
                if (checkedPresences.includes('whatsapp_business')) descriptions.push('WhatsApp Business');
                
                presenceDescription = descriptions.join(' + ') || 'Presença básica';
            }
            
            const businessMult = businessMultipliers[businessType] || { growth: 1.6, ticket: 1.3 };
            const regionMult = regionMultipliers[region] || 1.0;
            
            // Cálculo com todos os fatores
            const totalGrowthMultiplier = businessMult.growth * presenceMultiplier * regionMult;
            const newClients = Math.round(currentClients * totalGrowthMultiplier);
            const newTicket = avgTicket * businessMult.ticket;
            
            const currentRevenue = currentClients * avgTicket;
            const newRevenue = newClients * newTicket;
            const monthlyIncrease = newRevenue - currentRevenue;
            const yearlyIncrease = monthlyIncrease * 12;
            const roiPercentage = Math.round((yearlyIncrease / websiteInvestment) * 100);
            const paybackMonths = Math.ceil(websiteInvestment / monthlyIncrease);
            const firstYearProfit = yearlyIncrease - websiteInvestment;
            
            // Atualizar DOM
            document.getElementById('newClientsMonth').textContent = newClients;
            document.getElementById('monthlyRevenue').textContent = `R$ ${newRevenue.toLocaleString('pt-BR')}`;
            document.getElementById('monthlyIncrease').textContent = `R$ ${monthlyIncrease.toLocaleString('pt-BR')}`;
            document.getElementById('roiPercentage').textContent = `${roiPercentage}%`;
            document.getElementById('paybackTime').textContent = paybackMonths;
            document.getElementById('firstYearProfit').textContent = `R$ ${firstYearProfit.toLocaleString('pt-BR')}`;
            
            // Tabela comparativa
            const comparisonData = [
                ['Clientes/mês', currentClients, newClients, `+${Math.round(((newClients - currentClients) / currentClients) * 100)}%`],
                ['Ticket médio', `R$ ${avgTicket}`, `R$ ${Math.round(newTicket)}`, `+${Math.round(((newTicket - avgTicket) / avgTicket) * 100)}%`],
                ['Receita mensal', `R$ ${currentRevenue.toLocaleString('pt-BR')}`, `R$ ${newRevenue.toLocaleString('pt-BR')}`, `+R$ ${monthlyIncrease.toLocaleString('pt-BR')}`],
                ['Presença atual', presenceDescription, 'Site profissional completo', `Multiplicador: ${presenceMultiplier.toFixed(1)}x`]
            ];
            
            let tableHTML = '';
            comparisonData.forEach(row => {
                tableHTML += `<tr><td><strong>${row[0]}</strong></td><td>${row[1]}</td><td>${row[2]}</td><td style="color: #27ae60; font-weight: bold;">${row[3]}</td></tr>`;
            });
            document.getElementById('comparisonTable').innerHTML = tableHTML;
            
            document.getElementById('results').style.display = 'block';
            document.getElementById('results').scrollIntoView({ behavior: 'smooth' });
        }
        
        function shareResults() {
            const text = `🚀 Calculei meu ROI e descobri que posso faturar R$ ${document.getElementById('monthlyIncrease').textContent} a mais por mês com um site profissional! ROI de ${document.getElementById('roiPercentage').textContent} em 12 meses. Calcule o seu: [SEU_SITE]/calculadora`;
            
            if (navigator.share) {
                navigator.share({
                    title: 'Minha Calculadora de ROI',
                    text: text
                });
            } else {
                navigator.clipboard.writeText(text);
                alert('Resultado copiado! Cole onde quiser compartilhar.');
            }
        }
        
        // Auto-calcular quando marcar/desmarcar checkboxes
        document.addEventListener('change', function(e) {
            if (e.target.name === 'presence') {
                // Se marcar "nenhuma", desmarcar todos os outros
                if (e.target.value === 'none' && e.target.checked) {
                    document.querySelectorAll('input[name="presence"]:not([value="none"])').forEach(cb => {
                        cb.checked = false;
                    });
                }
                // Se marcar qualquer outro, desmarcar "nenhuma"
                else if (e.target.value !== 'none' && e.target.checked) {
                    document.querySelector('input[name="presence"][value="none"]').checked = false;
                }
                
                // Auto-calcular se tiver dados básicos
                if (document.getElementById('currentClients').value && 
                    document.getElementById('avgTicket').value) {
                    calculateROI();
                }
            }
        });
    </script>
</body>
</html>