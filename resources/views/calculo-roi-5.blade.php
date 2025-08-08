<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora ROI - Soluções Digitais Completas</title>
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
            max-width: 1200px;
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
        }
        
        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }
        
        .calculator {
            padding: 40px;
        }
        
        .solution-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            border-bottom: 2px solid #f1f1f1;
        }
        
        .solution-tab {
            padding: 15px 25px;
            background: #f8f9fa;
            border: none;
            border-radius: 8px 8px 0 0;
            cursor: pointer;
            font-weight: 600;
            color: #666;
            transition: all 0.3s;
            flex: 1;
            text-align: center;
        }
        
        .solution-tab.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }
        
        .solution-content {
            display: none;
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
        }
        
        .solution-content.active {
            display: block;
        }
        
        .solution-description {
            margin-bottom: 20px;
        }
        
        .solution-description h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .solution-description p {
            color: #666;
            line-height: 1.6;
        }
        
        .includes-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 15px 0;
        }
        
        .includes-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background: white;
            border-radius: 8px;
            font-size: 14px;
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
        
        .disclaimer {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .disclaimer h4 {
            color: #856404;
            margin-bottom: 10px;
        }
        
        .disclaimer p {
            color: #856404;
            line-height: 1.6;
            font-size: 14px;
        }
        
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 Calculadora ROI</h1>
            <p>Descubra quanto seu negócio pode crescer com uma estratégia digital completa</p>
        </div>
        
        <div class="calculator">
            <h2 style="text-align: center; margin-bottom: 25px; color: #2c3e50;">
                Escolha a solução ideal para seu negócio:
            </h2>
            
            <div class="solution-tabs">
                <button class="solution-tab active" onclick="switchSolution('website')">
                    🌐 Apenas Website
                </button>
                <button class="solution-tab" onclick="switchSolution('basic')">
                    📈 Presença Digital
                </button>
                <button class="solution-tab" onclick="switchSolution('complete')">
                    🚀 Marketing Completo
                </button>
                <button class="solution-tab" onclick="switchSolution('custom')">
                    ⚙️ Personalizado
                </button>
            </div>
            
            <!-- APENAS WEBSITE -->
            <div id="website" class="solution-content active">
                <div class="solution-description">
                    <h3>🌐 Website Profissional</h3>
                    <p>Site responsivo com design profissional. <strong>⚠️ IMPORTANTE:</strong> Apenas o site não garante novos clientes automaticamente. É essencial para credibilidade, mas precisa de estratégia de tráfego para gerar leads.</p>
                </div>
                
                <div class="includes-list">
                    <div class="includes-item">✅ Site responsivo profissional</div>
                    <div class="includes-item">✅ Otimização básica para Google</div>
                    <div class="includes-item">✅ Formulário de contato</div>
                    <div class="includes-item">❌ Gestão de tráfego</div>
                    <div class="includes-item">❌ Campanhas pagas</div>
                    <div class="includes-item">❌ Redes sociais</div>
                </div>
                
                <div class="disclaimer">
                    <h4>⚠️ Expectativa Realista:</h4>
                    <p><strong>Apenas um site não traz clientes automaticamente.</strong> O crescimento mostrado assume que você implementará estratégias de marketing (SEO, redes sociais, indicações) ou contratará gestão de tráfego separadamente.</p>
                </div>
            </div>
            
            <!-- PRESENÇA DIGITAL -->
            <div id="basic" class="solution-content">
                <div class="solution-description">
                    <h3>📈 Presença Digital Básica</h3>
                    <p>Website + otimizações básicas + configuração inicial. Estratégia entry-level que coloca seu negócio no mapa digital com bases sólidas para crescimento.</p>
                </div>
                
                <div class="includes-list">
                    <div class="includes-item">✅ Site profissional responsivo</div>
                    <div class="includes-item">✅ Google Meu Negócio otimizado</div>
                    <div class="includes-item">✅ SEO local básico</div>
                    <div class="includes-item">✅ Integração WhatsApp Business</div>
                    <div class="includes-item">✅ Configuração redes sociais</div>
                    <div class="includes-item">❌ Gestão ativa de tráfego</div>
                </div>
            </div>
            
            <!-- MARKETING COMPLETO -->
            <div id="complete" class="solution-content">
                <div class="solution-description">
                    <h3>🚀 Marketing Digital Completo</h3>
                    <p>Solução 360° com website + gestão ativa de tráfego + campanhas. <strong>Esta é a única opção que GARANTE</strong> os resultados calculados, pois inclui estratégia completa de atração de clientes.</p>
                </div>
                
                <div class="includes-list">
                    <div class="includes-item">✅ Website profissional completo</div>
                    <div class="includes-item">✅ Gestão Google Ads + Facebook Ads</div>
                    <div class="includes-item">✅ SEO local avançado</div>
                    <div class="includes-item">✅ Gestão de redes sociais</div>
                    <div class="includes-item">✅ Google Meu Negócio otimizado</div>
                    <div class="includes-item">✅ Relatórios mensais de resultados</div>
                </div>
            </div>
            
            <!-- PERSONALIZADO -->
            <div id="custom" class="solution-content">
                <div class="solution-description">
                    <h3>⚙️ Cálculo Personalizado</h3>
                    <p>Configure seu cálculo baseado na sua situação atual específica. Marque todas as suas presenças digitais atuais e defina seu investimento personalizado.</p>
                </div>
                
                <div class="input-field" style="margin-bottom: 20px;">
                    <label>💰 Investimento personalizado (R$)</label>
                    <input type="number" id="customInvestment" value="4000" min="0" step="100" style="padding: 12px 15px; border: 2px solid #e1e8ed; border-radius: 10px; font-size: 16px;">
                </div>
                
                <div class="input-field" style="grid-column: 1 / -1;">
                    <label>📱 Marque todas as suas presenças digitais atuais:</label>
                    <div class="presence-options" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 10px;">
                        
                        <div class="presence-group" style="background: white; padding: 15px; border-radius: 8px; border: 1px solid #e1e8ed;">
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
                        
                        <div class="presence-group" style="background: white; padding: 15px; border-radius: 8px; border: 1px solid #e1e8ed;">
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
                        
                        <div class="presence-group" style="background: white; padding: 15px; border-radius: 8px; border: 1px solid #e1e8ed;">
                            <h4 style="margin-bottom: 10px; color: #2c3e50; font-size: 14px;">🔍 Outros</h4>
                            <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                <input type="checkbox" name="presence" value="google_business" style="transform: scale(1.2);">
                                📍 Google Meu Negócio
                            </label>
                            <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                <input type="checkbox" name="presence" value="whatsapp_business" style="transform: scale(1.2);">
                                💬 WhatsApp Business
                            </label>
                            <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                <input type="checkbox" name="presence" value="google_ads" style="transform: scale(1.2);">
                                🎯 Anúncios Google
                            </label>
                            <label style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-weight: normal; cursor: pointer;">
                                <input type="checkbox" name="presence" value="facebook_ads" style="transform: scale(1.2);">
                                📢 Anúncios Facebook
                            </label>
                            <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; cursor: pointer;">
                                <input type="checkbox" name="presence" value="none" style="transform: scale(1.2);">
                                ❌ Nenhuma presença digital
                            </label>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="input-group">
                <div class="input-field">
                    <label>📊 Clientes novos por mês atual</label>
                    <input type="number" id="currentClients" value="15" min="0">
                </div>
                
                <div class="input-field">
                    <label>💰 Valor médio por cliente (R$)</label>
                    <input type="number" id="avgTicket" value="280" min="0" step="10">
                </div>
                
                <div class="input-field">
                    <label>🏢 Tipo do seu negócio</label>
                    <select id="businessType">
                        <option value="service">Serviços Locais</option>
                        <option value="retail">Varejo/Loja</option>
                        <option value="restaurant">Restaurante/Food</option>
                        <option value="health">Saúde/Bem-estar</option>
                        <option value="professional">Profissional Liberal</option>
                    </select>
                </div>
                
                <div class="input-field">
                    <label>🎯 Região do seu negócio</label>
                    <select id="region">
                        <option value="premium">🏆 Premium - Região nobre</option>
                        <option value="middle">🏠 Classe Média</option>
                        <option value="popular">🏘️ Popular/Interior</option>
                    </select>
                </div>
            </div>
            
            <button class="btn-calculate" onclick="calculateROI()">
                🚀 Calcular Potencial de Crescimento
            </button>
            
            <div class="results" id="results" style="display: none;">
                <h2 style="text-align: center; margin-bottom: 30px; color: #2c3e50;">
                    📈 Seus Resultados Projetados
                </h2>
                
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-value" id="additionalClients">0</div>
                        <div class="result-label">Clientes adicionais/mês<br><small style="opacity: 0.7;">(só os novos)</small></div>
                    </div>
                    
                    <div class="result-card">
                        <div class="result-value" id="newClients">0</div>
                        <div class="result-label">Total clientes/mês<br><small style="opacity: 0.7;">(atual + novos)</small></div>
                    </div>
                    
                    <div class="result-card">
                        <div class="result-value" id="monthlyRevenue">R$ 0</div>
                        <div class="result-label">Receita total mensal</div>
                    </div>
                    
                    <div class="result-card highlight">
                        <div class="result-value" id="monthlyIncrease" style="color: white;">R$ 0</div>
                        <div class="result-label" style="color: white;">💰 Aumento na receita</div>
                    </div>
                    
                    <div class="result-card highlight">
                        <div class="result-value" id="investment" style="color: white;">R$ 0</div>
                        <div class="result-label" style="color: white;">Investimento necessário</div>
                    </div>
                </div>
                
                <div id="solutionDetails" class="disclaimer">
                    <h4>📋 Detalhes da Solução Selecionada:</h4>
                    <p id="solutionExplanation"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentSolution = 'website';
        
        const solutionMultipliers = {
            website: {
                growth: 0.3,  // +30% (apenas credibilidade)
                investment: 3500,
                description: "⚠️ ATENÇÃO: Estes resultados assumem que você fará marketing por conta própria (SEO, redes sociais, indicações). Apenas um site não traz clientes automaticamente."
            },
            basic: {
                growth: 0.8,  // +80% (presença + otimizações)
                investment: 5500,
                description: "✅ REALISTA: Resultados baseados em otimizações locais e presença digital estruturada. Crescimento gradual ao longo de 6-12 meses."
            },
            complete: {
                growth: 1.5,  // +150% (marketing ativo)
                investment: 8500,
                description: "🚀 GARANTIDO: Estes resultados são alcançáveis porque incluem gestão ativa de tráfego pago e orgânico. Começamos a ver resultados em 30-60 dias."
            },
            custom: {
                growth: 0.0,  // Será calculado dinamicamente
                investment: 4000,
                description: "⚙️ PERSONALIZADO: Resultados baseados na sua situação atual específica e investimento definido."
            }
        };
        
        // VALORES PARA PRESENÇA DIGITAL PERSONALIZADA (CORRIGIDO)
        const presenceValues = {
            // Redes sociais (CONTRIBUEM POSITIVAMENTE)
            instagram: 0.15,              // +15% no crescimento final
            facebook: 0.10,               // +10% no crescimento final
            tiktok: 0.25,                 // +25% no crescimento final
            linkedin: 0.20,               // +20% no crescimento final
            youtube: 0.30,                // +30% no crescimento final
            
            // Google/WhatsApp/Ads (MUITO IMPORTANTES)
            google_business: 0.25,        // +25% no crescimento final
            whatsapp_business: 0.10,      // +10% no crescimento final
            google_ads: 0.50,             // +50% no crescimento final
            facebook_ads: 0.40,           // +40% no crescimento final
            
            // Sites (BASELINE - não reduzem, mas site bom ajuda mais)
            amateur_site: 0.05,           // +5% (site fraco mas melhor que nada)
            outdated_site: 0.10,          // +10% (site velho mas funciona)
            broken_site: -0.10,           // -10% (único que prejudica)
            basic_site: 0.15,             // +15% (site básico funcionando)
            good_site: 0.30,              // +30% (site profissional)
        };
        
        const businessMultipliers = {
            service: { base: 1.2, ticket: 1.1 },
            retail: { base: 1.0, ticket: 1.05 },
            restaurant: { base: 1.1, ticket: 1.3 },
            health: { base: 1.3, ticket: 1.25 },
            professional: { base: 1.4, ticket: 1.4 }
        };
        
        const regionMultipliers = {
            premium: 1.2,
            middle: 1.0,
            popular: 0.85
        };
        
        function switchSolution(solution) {
            // Atualizar tabs
            document.querySelectorAll('.solution-tab').forEach(tab => tab.classList.remove('active'));
            document.querySelector(`[onclick="switchSolution('${solution}')"]`).classList.add('active');
            
            // Atualizar conteúdo
            document.querySelectorAll('.solution-content').forEach(content => content.classList.remove('active'));
            document.getElementById(solution).classList.add('active');
            
            currentSolution = solution;
            
            // Recalcular se já tiver dados
            if (document.getElementById('currentClients').value) {
                calculateROI();
            }
        }
        
        function calculateROI() {
            const currentClients = parseInt(document.getElementById('currentClients').value) || 0;
            const avgTicket = parseFloat(document.getElementById('avgTicket').value) || 0;
            const businessType = document.getElementById('businessType').value;
            const region = document.getElementById('region').value || 'middle';
            
            let finalGrowthMultiplier = 1.0;
            let investment = 0;
            let description = '';
            
            if (currentSolution === 'custom') {
                // CÁLCULO PERSONALIZADO CORRIGIDO
                const checkedPresences = Array.from(document.querySelectorAll('input[name="presence"]:checked'))
                    .map(cb => cb.value);
                
                const customInvestment = parseFloat(document.getElementById('customInvestment').value) || 4000;
                investment = customInvestment;
                
                if (checkedPresences.length === 0 || checkedPresences.includes('none')) {
                    // Nenhuma presença = MÁXIMA oportunidade
                    finalGrowthMultiplier = 2.0; // +100% oportunidade MÁXIMA
                    description = "⚙️ PERSONALIZADO: Nenhuma presença digital atual = máxima oportunidade de crescimento com site profissional + estratégias digitais.";
                } else {
                    // NOVA LÓGICA: SOMAR todos os valores de presença
                    let totalPresenceBonus = 0;
                    let presenceList = [];
                    
                    checkedPresences.forEach(presence => {
                        if (presenceValues[presence]) {
                            totalPresenceBonus += presenceValues[presence];
                            
                            // Mapear nomes amigáveis
                            const presenceNames = {
                                instagram: 'Instagram',
                                facebook: 'Facebook', 
                                tiktok: 'TikTok',
                                linkedin: 'LinkedIn',
                                youtube: 'YouTube',
                                google_business: 'Google Meu Negócio',
                                whatsapp_business: 'WhatsApp Business',
                                google_ads: 'Google Ads',
                                facebook_ads: 'Facebook Ads',
                                amateur_site: 'Site Amador',
                                outdated_site: 'Site Desatualizado',
                                broken_site: 'Site Quebrado',
                                basic_site: 'Site Básico',
                                good_site: 'Site Profissional'
                            };
                            
                            if (presenceNames[presence]) {
                                presenceList.push(presenceNames[presence]);
                            }
                        }
                    });
                    
                    // Crescimento base + bônus da presença atual
                    // Lógica: Site profissional ADICIONA ainda mais ao que já tem
                    const baseGrowth = 0.8; // Crescimento base com site profissional
                    const presenceMultiplier = 1 + totalPresenceBonus;
                    
                    finalGrowthMultiplier = 1 + (baseGrowth * presenceMultiplier);
                    
                    // Garantir mínimo e máximo razoáveis
                    finalGrowthMultiplier = Math.min(3.0, Math.max(1.1, finalGrowthMultiplier));
                    
                    const currentPresenceText = presenceList.join(', ');
                    const growthPercent = ((finalGrowthMultiplier - 1) * 100).toFixed(0);
                    
                    description = `⚙️ PERSONALIZADO: Você tem: ${currentPresenceText}. Com site profissional otimizado, projetamos ${growthPercent}% de crescimento adicional. Bônus atual: +${(totalPresenceBonus * 100).toFixed(0)}%.`;
                }
            } else {
                // CÁLCULO DOS PACOTES PRÉ-DEFINIDOS
                const solution = solutionMultipliers[currentSolution];
                const business = businessMultipliers[businessType];
                const regionMult = regionMultipliers[region];
                
                finalGrowthMultiplier = 1 + (solution.growth * business.base * regionMult);
                investment = solution.investment;
                description = solution.description;
            }
            
            // Aplicar multiplicadores de negócio e região (se não for custom)
            if (currentSolution !== 'custom') {
                const business = businessMultipliers[businessType];
                const regionMult = regionMultipliers[region];
                finalGrowthMultiplier *= business.base * regionMult;
            }
            
            const business = businessMultipliers[businessType];
            const newClients = Math.round(currentClients * finalGrowthMultiplier);
            const newTicket = avgTicket * (business?.ticket || 1.1);
            
            const currentRevenue = currentClients * avgTicket;
            const newRevenue = newClients * newTicket;
            const monthlyIncrease = newRevenue - currentRevenue;
            const additionalClients = newClients - currentClients; // Só os novos clientes
            
            // Atualizar resultados
            document.getElementById('newClients').textContent = newClients;
            document.getElementById('additionalClients').textContent = additionalClients;
            document.getElementById('monthlyRevenue').textContent = `R$ ${newRevenue.toLocaleString('pt-BR')}`;
            document.getElementById('monthlyIncrease').textContent = `R$ ${monthlyIncrease.toLocaleString('pt-BR')}`;
            document.getElementById('investment').textContent = `R$ ${investment.toLocaleString('pt-BR')}`;
            document.getElementById('solutionExplanation').textContent = description;
            
            document.getElementById('results').style.display = 'block';
            document.getElementById('results').scrollIntoView({ behavior: 'smooth' });
        }
        
        // Auto-calcular quando mudar inputs ou checkboxes
        document.addEventListener('input', function(e) {
            if (['currentClients', 'avgTicket', 'businessType', 'region', 'customInvestment'].includes(e.target.id)) {
                calculateROI();
            }
        });
        
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
                    const noneCheckbox = document.querySelector('input[name="presence"][value="none"]');
                    if (noneCheckbox) noneCheckbox.checked = false;
                }
                
                // Auto-calcular se estiver na aba personalizada
                if (currentSolution === 'custom') {
                    calculateROI();
                }
            }
        });
        
        // Calcular inicial
        calculateROI();
    </script>
</body>
</html>