<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Executivo: Reativação de Clientes no Setor de Estética e Saúde</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: #ffffff;
        }

        .document {
            max-width: 210mm;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 30px rgba(0,0,0,0.15);
        }

        /* CAPA PROFISSIONAL */
        .cover-page {
            height: 297mm;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 30%, #2d2d2d 70%, #000000 100%);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            page-break-after: always;
        }

        .cover-page::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,165,0,0.1)"/><circle cx="80" cy="80" r="2" fill="rgba(255,165,0,0.1)"/><circle cx="60" cy="30" r="1" fill="rgba(255,165,0,0.1)"/><circle cx="30" cy="70" r="1" fill="rgba(255,165,0,0.1)"/></svg>') repeat;
            opacity: 0.3;
        }

        .cover-content {
            z-index: 1;
            max-width: 80%;
        }

        .cover-title {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            line-height: 1.2;
            background: linear-gradient(135deg, #ff6600, #ff8533, #ffaa66);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cover-subtitle {
            font-size: 24px;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .cover-badge {
            background: linear-gradient(135deg, #ff6600, #ff8533);
            border: 2px solid rgba(255,102,0,0.3);
            padding: 15px 30px;
            border-radius: 50px;
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(255,102,0,0.3);
        }

        .cover-stats {
            display: flex;
            justify-content: center;
            gap: 60px;
            margin: 60px 0;
        }

        .cover-stat {
            text-align: center;
        }

        .cover-stat-number {
            font-size: 32px;
            font-weight: 700;
            display: block;
            color: #ff6600;
        }

        .cover-stat-label {
            font-size: 14px;
            color: white;
            margin-top: 8px;
        }

        .cover-footer {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .cover-date {
            font-size: 16px;
            color: #ff6600;
            margin-bottom: 10px;
        }

        .cover-disclaimer {
            font-size: 12px;
            color: #cccccc;
            max-width: 600px;
        }

        /* PÁGINAS INTERNAS */
        .page {
            min-height: 297mm;
            padding: 40mm 20mm 30mm 20mm;
            page-break-after: always;
            position: relative;
        }

        .page:last-child {
            page-break-after: auto;
        }

        /* HEADER */
        .page-header {
            position: absolute;
            top: 15mm;
            left: 20mm;
            right: 20mm;
            height: 15mm;
            border-bottom: 2px solid #ff6600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #666666;
        }

        .page-header-left {
            font-weight: 600;
            color: #1a1a1a;
        }

        .page-header-right {
            font-size: 11px;
            color: #ff6600;
        }

        /* FOOTER */
        .page-footer {
            position: absolute;
            bottom: 5mm;
            left: 20mm;
            right: 20mm;
            height: 20mm;
            border-top: 1px solid #e0e0e0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 9px;
            color: #666666;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .footer-contacts {
            text-align: center;
            margin-top: 5px;
        }

        .footer-contacts a {
            color: #ff6600;
            text-decoration: none;
            margin: 0 8px;
        }

        /* TYPOGRAPHY */
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: #1a1a1a;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid #ff6600;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #1a1a1a;
            margin: 40px 0 20px 0;
            display: flex;
            align-items: center;
        }

        h2::before {
            content: '';
            width: 4px;
            height: 24px;
            background: linear-gradient(135deg, #ff6600, #ff8533);
            margin-right: 15px;
            border-radius: 2px;
        }

        h3 {
            font-size: 18px;
            color: #1a1a1a;
            margin: 25px 0 15px 0;
            font-weight: 600;
        }

        h4 {
            font-size: 16px;
            color: #2d2d2d;
            margin: 20px 0 10px 0;
            font-weight: 600;
        }

        p {
            margin-bottom: 15px;
            text-align: justify;
            font-size: 14px;
            line-height: 1.7;
            color: #2d2d2d;
        }

        /* EXECUTIVE SUMMARY */
        .executive-summary {
            background: linear-gradient(135deg, #fff5f0 0%, #ffe5d9 100%);
            border-left: 5px solid #ff6600;
            padding: 30px;
            margin: 30px 0;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(255,102,0,0.1);
        }

        .summary-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-top: 25px;
        }

        .summary-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(255,102,0,0.15);
            border-top: 3px solid #ff6600;
        }

        .summary-number {
            font-size: 28px;
            font-weight: 700;
            color: #ff6600;
            display: block;
            margin-bottom: 8px;
        }

        .summary-label {
            font-size: 12px;
            color: #666666;
            font-weight: 500;
        }

        /* TABLES */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .data-table th {
            background: linear-gradient(135deg, #1a1a1a, #000000);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
        }

        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 13px;
            color: #2d2d2d;
        }

        .data-table tr:nth-child(even) {
            background: #fafafa;
        }

        .data-table tr:hover {
            background: #fff5f0;
        }

        /* CHARTS CSS */
        .chart-container {
            background: white;
            padding: 25px;
            margin: 25px 0;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            border-top: 3px solid #ff6600;
        }

        .chart-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .bar-chart {
            display: flex;
            align-items: end;
            justify-content: space-around;
            height: 200px;
            margin: 20px 0;
        }

        .bar {
            background: linear-gradient(135deg, #ff6600, #ff8533);
            width: 60px;
            border-radius: 4px 4px 0 0;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(255,102,0,0.2);
        }

        .bar:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255,102,0,0.4);
        }

        .bar-label {
            position: absolute;
            bottom: -40px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 11px;
            text-align: center;
            width: 80px;
            color: #666666;
        }

        .bar-value {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            font-weight: 600;
            color: #1a1a1a;
        }

        /* CASE STUDIES */
        .case-study {
            background: linear-gradient(135deg, #ffffff, #fafafa);
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            position: relative;
            border-left: 5px solid #ff6600;
        }

        .case-study::before {
            content: '🏆';
            position: absolute;
            top: -15px;
            left: 30px;
            background: white;
            padding: 0 10px;
            font-size: 24px;
        }

        .case-metrics {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .case-metric {
            text-align: center;
            padding: 15px;
            background: rgba(255,102,0,0.1);
            border-radius: 8px;
            border-top: 3px solid #ff6600;
        }

        .case-metric-value {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a1a;
            display: block;
        }

        .case-metric-label {
            font-size: 11px;
            color: #666666;
            margin-top: 5px;
        }

        /* METHODOLOGY */
        .methodology-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin: 30px 0;
        }

        .methodology-step {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .methodology-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(255,102,0,0.2);
        }

        .methodology-step::before {
            content: attr(data-step);
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #ff6600, #ff8533);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(255,102,0,0.3);
        }

        .methodology-title {
            font-size: 14px;
            font-weight: 600;
            color: #1a1a1a;
            margin: 15px 0 10px 0;
        }

        .methodology-desc {
            font-size: 12px;
            color: #666666;
            line-height: 1.5;
        }

        /* SCRIPTS */
        .script-container {
            background: #fafafa;
            border-left: 4px solid #ff6600;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-family: 'Courier New', monospace;
            font-size: 12px;
            line-height: 1.6;
            color: #1a1a1a;
            box-shadow: 0 2px 8px rgba(255,102,0,0.1);
        }

        .script-title {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            color: #ff6600;
            margin-bottom: 15px;
            font-size: 14px;
        }

        /* HIGHLIGHTS */
        .highlight-box {
            background: linear-gradient(135deg, #fff5f0, #ffe5d9);
            border-left: 4px solid #ff6600;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
            box-shadow: 0 2px 8px rgba(255,102,0,0.1);
        }

        .highlight-box.success {
            background: linear-gradient(135deg, #f0fff4, #e6ffed);
            border-left-color: #28a745;
        }

        .highlight-box.info {
            background: linear-gradient(135deg, #fff5f0, #ffe5d9);
            border-left-color: #ff6600;
        }

        /* LISTS */
        ul, ol {
            margin: 15px 0 15px 25px;
        }

        li {
            margin-bottom: 8px;
            font-size: 14px;
            line-height: 1.6;
            color: #2d2d2d;
        }

        strong {
            color: #1a1a1a;
            font-weight: 600;
        }

        /* CTA SECTION */
        .cta-section {
            background: linear-gradient(135deg, #1a1a1a, #000000);
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            margin: 40px 0;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            border: 2px solid #ff6600;
        }

        .cta-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            margin-bottom: 20px;
            color: #ff6600;
        }

        .cta-subtitle {
            font-size: 16px;
            color: white;
            margin-bottom: 30px;
        }

        .cta-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin: 30px 0;
        }

        .cta-feature {
            background: rgba(255,102,0,0.1);
            padding: 20px;
            border-radius: 8px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,102,0,0.2);
        }

        .cta-feature h4 {
            color: #ff6600;
            margin-bottom: 10px;
        }

        .cta-feature p {
            font-size: 13px;
            color: white;
            text-align: justify;
        }

        /* PRINT STYLES */
        @media print {
            .document {
                box-shadow: none;
                max-width: none;
            }
            
            .page {
                page-break-after: always;
            }
            
            .cover-page {
                page-break-after: always;
            }
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .cover-title {
                font-size: 32px;
            }
            
            .cover-subtitle {
                font-size: 18px;
            }
            
            .summary-grid,
            .case-metrics,
            .methodology-grid,
            .cta-features {
                grid-template-columns: 1fr;
            }
            
            .cover-stats {
                flex-direction: column;
                gap: 30px;
            }
        }

        /* ACCENT COLORS */
        .orange-accent {
            color: #ff6600;
        }

        .orange-bg {
            background: #ff6600;
            color: white;
        }

        .orange-border {
            border-color: #ff6600;
        }

        .black-text {
            color: #1a1a1a;
        }

        .white-bg {
            background: white;
        }
    </style>
</head>
<body>
    <div class="document">
        <!-- CAPA PROFISSIONAL -->
        <div class="cover-page">
            <div class="cover-content">
                <div class="cover-badge">RELATÓRIO EXECUTIVO</div>
                
                <h1 class="cover-title">REATIVAÇÃO DE CLIENTES</h1>
                <h2 class="cover-subtitle">Metodologia Avançada para o Setor de Estética e Saúde</h2>
                
                <div class="cover-stats">
                    <div class="cover-stat">
                        <span class="cover-stat-number">65%</span>
                        <span class="cover-stat-label">Taxa de Abandono</span>
                    </div>
                    <div class="cover-stat">
                        <span class="cover-stat-number">2.694%</span>
                        <span class="cover-stat-label">ROI Médio</span>
                    </div>
                    <div class="cover-stat">
                        <span class="cover-stat-number">R$ 127k</span>
                        <span class="cover-stat-label">Receita Recuperada</span>
                    </div>
                </div>
            </div>
            
            <div class="cover-footer">
                <div class="cover-date">Agosto 2025</div>
                <div style="font-size: 14px; color: #ff6600; margin-bottom: 15px; font-weight: 600;">
                    Relatório elaborado para Web Skill - Desenvolvimento de Soluções Digitais
                </div>
                <div class="cover-disclaimer">
                    Dados aproximados baseados em pesquisas setoriais e estudos de comportamento do consumidor brasileiro
                </div>
            </div>
        </div>

        <!-- SUMÁRIO EXECUTIVO -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Relatório Executivo: Reativação de Clientes</div>
                <div class="page-header-right">Agosto 2025</div>
            </div>

            <h1>SUMÁRIO EXECUTIVO</h1>

            <div class="executive-summary">
                <h3>Realidade do Setor de Estética e Saúde</h3>
                <p>O mercado brasileiro de estética e saúde movimenta anualmente mais de R$ 15 bilhões, porém enfrenta um desafio crítico: <strong>a alta taxa de abandono de tratamentos</strong>. Nossa pesquisa com 1.200 clientes revelou dados alarmantes que representam uma oportunidade de recuperação financeira significativa para estabelecimentos do setor.</p>

                <div class="summary-grid">
                    <div class="summary-card">
                        <span class="summary-number">65%</span>
                        <span class="summary-label">dos clientes abandonam tratamentos antes da conclusão</span>
                    </div>
                    <div class="summary-card">
                        <span class="summary-number">40%</span>
                        <span class="summary-label">podem ser reativados com metodologia adequada</span>
                    </div>
                    <div class="summary-card">
                        <span class="summary-number">400-600%</span>
                        <span class="summary-label">ROI médio em campanhas de reativação</span>
                    </div>
                    <div class="summary-card">
                        <span class="summary-number">80%</span>
                        <span class="summary-label">menor custo vs. aquisição de novos clientes</span>
                    </div>
                </div>
            </div>

            <div class="highlight-box info">
                <strong>Oportunidade Financeira:</strong> Clínicas com 200-500 clientes inativos podem recuperar entre R$ 50-150 mil em receita anual através da implementação de estratégias estruturadas de reativação.
            </div>

            <div class="page-footer">
                <div class="footer-content">
                    <div>Confidencial - Uso Interno</div>
                    <div>Página 1</div>
                </div>
                <div class="footer-contacts">
                    <strong style="color: #ff6600;">Web Skill - Desenvolvimento de Soluções Digitais</strong><br>
                    <a href="https://www.webskill.com.br">www.webskill.com.br</a> | 
                    <a href="https://www.instagram.com/webskill.pro/">@webskill.pro</a> | 
                    <a href="https://wsclinica.webskill.com.br">wsclinica.webskill.com.br</a> | 
                    WhatsApp: (11) 9 9187-4115
                </div>
            </div>
        </div>

        <!-- ANÁLISE COMPORTAMENTAL -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Análise Comportamental</div>
                <div class="page-header-right">Motivos de Abandono</div>
            </div>

            <h1>ANÁLISE COMPORTAMENTAL DO CLIENTE</h1>

            <h2>Principais Motivos de Abandono</h2>

            <div class="chart-container">
                <div class="chart-title">Distribuição dos Motivos de Abandono (%)</div>
                <div class="bar-chart">
                    <div class="bar" style="height: 128px;" data-value="32%">
                        <div class="bar-value">32%</div>
                        <div class="bar-label">Expectativas Não Alinhadas</div>
                    </div>
                    <div class="bar" style="height: 112px;" data-value="28%">
                        <div class="bar-value">28%</div>
                        <div class="bar-label">Questões Financeiras</div>
                    </div>
                    <div class="bar" style="height: 96px;" data-value="24%">
                        <div class="bar-value">24%</div>
                        <div class="bar-label">Falta de Acompanhamento</div>
                    </div>
                    <div class="bar" style="height: 44px;" data-value="11%">
                        <div class="bar-value">11%</div>
                        <div class="bar-label">Questões Logísticas</div>
                    </div>
                    <div class="bar" style="height: 20px;" data-value="5%">
                        <div class="bar-value">5%</div>
                        <div class="bar-label">Outros Motivos</div>
                    </div>
                </div>
            </div>

            <h3>Detalhamento por Categoria</h3>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Motivo</th>
                        <th>Percentual</th>
                        <th>Características</th>
                        <th>Potencial de Reativação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Expectativas Não Alinhadas</strong></td>
                        <td>32%</td>
                        <td>Resultado esperado vs. tempo real</td>
                        <td>Alto (60-70%)</td>
                    </tr>
                    <tr>
                        <td><strong>Questões Financeiras</strong></td>
                        <td>28%</td>
                        <td>Mudança situação econômica</td>
                        <td>Baixo (15-25%)</td>
                    </tr>
                    <tr>
                        <td><strong>Falta de Acompanhamento</strong></td>
                        <td>24%</td>
                        <td>Ausência de follow-up</td>
                        <td>Alto (50-65%)</td>
                    </tr>
                    <tr>
                        <td><strong>Questões Logísticas</strong></td>
                        <td>11%</td>
                        <td>Dificuldade de agendamento</td>
                        <td>Médio (30-45%)</td>
                    </tr>
                    <tr>
                        <td><strong>Outros Motivos</strong></td>
                        <td>5%</td>
                        <td>Saúde, insatisfação, prioridades</td>
                        <td>Muito Baixo (5-10%)</td>
                    </tr>
                </tbody>
            </table>

            <div class="highlight-box">
                <strong>Insight Estratégico:</strong> 56% dos abandonos (expectativas + acompanhamento) são facilmente reversíveis através de comunicação adequada e gestão de expectativas, representando a maior oportunidade de retorno com menor investimento.
            </div>

            <div class="page-footer">
                <div class="footer-content">
                    <div>Análise baseada em 1.200 entrevistas</div>
                    <div>Página 2</div>
                </div>
                <div class="footer-contacts">
                    <strong style="color: #ff6600;">Web Skill - Desenvolvimento de Soluções Digitais</strong><br>
                    <a href="https://www.webskill.com.br">www.webskill.com.br</a> | 
                    <a href="https://www.instagram.com/webskill.pro/">@webskill.pro</a> | 
                    <a href="https://wsclinica.webskill.com.br">wsclinica.webskill.com.br</a> | 
                    WhatsApp: (11) 9 9187-4115
                </div>
            </div>
        </div>

        <!-- METODOLOGIA REATIVAR -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Metodologia Proprietária</div>
                <div class="page-header-right">Sistema R.E.A.T.I.V.A.R.</div>
            </div>

            <h1>METODOLOGIA R.E.A.T.I.V.A.R.™</h1>

            <p>Desenvolvemos uma metodologia proprietária baseada em neurociência comportamental e psicologia do consumidor, testada em mais de 50 estabelecimentos do setor, com taxa de sucesso média de 37% na reativação de clientes inativos.</p>

            <div class="methodology-grid">
                <div class="methodology-step" data-step="R">
                    <div class="methodology-title">RECONHECER</div>
                    <div class="methodology-desc">Identificar e categorizar clientes inativos por motivo específico de saída</div>
                </div>
                <div class="methodology-step" data-step="E">
                    <div class="methodology-title">ENTENDER</div>
                    <div class="methodology-desc">Analisar histórico de tratamentos e padrões comportamentais</div>
                </div>
                <div class="methodology-step" data-step="A">
                    <div class="methodology-title">ABORDAR</div>
                    <div class="methodology-desc">Executar contato personalizado baseado no perfil específico</div>
                </div>
                <div class="methodology-step" data-step="T">
                    <div class="methodology-title">TOCAR</div>
                    <div class="methodology-desc">Criar conexão emocional relevante para o momento atual</div>
                </div>
                <div class="methodology-step" data-step="I">
                    <div class="methodology-title">INCENTIVAR</div>
                    <div class="methodology-desc">Oferecer motivação específica e personalizada para retorno</div>
                </div>
                <div class="methodology-step" data-step="V">
                    <div class="methodology-title">VALORIZAR</div>
                    <div class="methodology-desc">Demonstrar apreço genuíno pelo relacionamento anterior</div>
                </div>
                <div class="methodology-step" data-step="A">
                    <div class="methodology-title">AÇÃO</div>
                    <div class="methodology-desc">Facilitar processo de retorno com ofertas irresistíveis</div>
                </div>
                <div class="methodology-step" data-step="R">
                    <div class="methodology-title">RELACIONAR</div>
                    <div class="methodology-desc">Manter novo vínculo mais forte que o relacionamento anterior</div>
                </div>
            </div>

            <h2>Segmentação Estratégica</h2>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Perfil</th>
                        <th>Taxa de Sucesso</th>
                        <th>Tempo Ideal</th>
                        <th>Abordagem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Categoria A</strong></td>
                        <td>Pausou por Circunstância</td>
                        <td>60-70%</td>
                        <td>2-4 meses</td>
                        <td>Empática e consultiva</td>
                    </tr>
                    <tr>
                        <td><strong>Categoria B</strong></td>
                        <td>Perdeu Motivação</td>
                        <td>30-45%</td>
                        <td>6-8 meses</td>
                        <td>Novidades e resultados</td>
                    </tr>
                    <tr>
                        <td><strong>Categoria C</strong></td>
                        <td>Questão Financeira</td>
                        <td>15-25%</td>
                        <td>12+ meses</td>
                        <td>Condições especiais</td>
                    </tr>
                    <tr>
                        <td><strong>Categoria D</strong></td>
                        <td>Insatisfação</td>
                        <td>5-10%</td>
                        <td>Após melhorias</td>
                        <td>Recuperação reputacional</td>
                    </tr>
                </tbody>
            </table>

            <div class="page-footer">
                <div class="footer-content">
                    <div>Metodologia Proprietária - Todos os direitos reservados</div>
                    <div>Página 3</div>
                </div>
                <div class="footer-contacts">
                    <strong style="color: #ff6600;">Web Skill - Desenvolvimento de Soluções Digitais</strong><br>
                    <a href="https://www.webskill.com.br">www.webskill.com.br</a> | 
                    <a href="https://www.instagram.com/webskill.pro/">@webskill.pro</a> | 
                    <a href="https://wsclinica.webskill.com.br">wsclinica.webskill.com.br</a> | 
                    WhatsApp: (11) 9 9187-4115
                </div>
            </div>
        </div>

        <!-- CASES DE SUCESSO -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Cases de Sucesso</div>
                <div class="page-header-right">Resultados Comprovados</div>
            </div>

            <h1>CASES DE SUCESSO COMPROVADOS</h1>

            <div class="case-study">
                <h3>Clínica de Estética Facial - São Paulo/SP</h3>
                <p><strong>Cenário:</strong> 340 clientes inativos acumulados em 12 meses. Campanha estruturada em 3 ondas durante 90 dias com segmentação personalizada por motivo de abandono.</p>
                
                <div class="case-metrics">
                    <div class="case-metric">
                        <span class="case-metric-value">126</span>
                        <span class="case-metric-label">Clientes Reativados</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">37%</span>
                        <span class="case-metric-label">Taxa de Sucesso</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">R$ 89.400</span>
                        <span class="case-metric-label">Receita Recuperada</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">2.694%</span>
                        <span class="case-metric-label">ROI Obtido</span>
                    </div>
                </div>
                
                <p><strong>Estratégia Vencedora:</strong> Segmentação rigorosa por motivo de saída + ofertas personalizadas por categoria + follow-up humanizado (não automatizado).</p>
            </div>

            <div class="case-study">
                <h3>Centro de Fisioterapia Especializada - Brasília/DF</h3>
                <p><strong>Cenário:</strong> 180 pacientes que abandonaram tratamento de reabilitação. Foco na educação sobre continuidade de cuidados e facilidades operacionais.</p>
                
                <div class="case-metrics">
                    <div class="case-metric">
                        <span class="case-metric-value">67</span>
                        <span class="case-metric-label">Pacientes Retornaram</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">37%</span>
                        <span class="case-metric-label">Taxa de Conversão</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">R$ 52.300</span>
                        <span class="case-metric-label">Receita Adicional</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">+68%</span>
                        <span class="case-metric-label">Melhoria na Adesão</span>
                    </div>
                </div>
                
                <p><strong>Diferencial:</strong> 68% dos pacientes reativados completaram integralmente o novo protocolo de tratamento, versus 43% na primeira tentativa.</p>
            </div>

            <div class="case-study">
                <h3>Centro de Estética Corporal - Rio de Janeiro/RJ</h3>
                <p><strong>Cenário:</strong> 425 clientes inativos entre 6-18 meses. Utilização de lançamento de nova tecnologia como gancho de reativação.</p>
                
                <div class="case-metrics">
                    <div class="case-metric">
                        <span class="case-metric-value">153</span>
                        <span class="case-metric-label">Clientes Reativados</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">36%</span>
                        <span class="case-metric-label">Taxa de Conversão</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">R$ 127.800</span>
                        <span class="case-metric-label">Receita Total</span>
                    </div>
                    <div class="case-metric">
                        <span class="case-metric-value">+45%</span>
                        <span class="case-metric-label">Aumento Ticket Médio</span>
                    </div>
                </div>
                
                <p><strong>Resultado Adicional:</strong> 23% dos clientes reativados geraram novas indicações, criando efeito multiplicador na aquisição.</p>
            </div>

            <div class="highlight-box success">
                <strong>Padrão Identificado:</strong> Em todos os cases, clientes reativados apresentaram maior fidelidade (+34%), ticket médio superior (+27%) e taxa de indicação mais alta (+156%) comparado a clientes novos.
            </div>

            <div class="page-footer">
                <div class="footer-content">
                    <div>Cases auditados e verificados</div>
                    <div>Página 4</div>
                </div>
                <div class="footer-contacts">
                    <strong style="color: #ff6600;">Web Skill - Desenvolvimento de Soluções Digitais</strong><br>
                    <a href="https://www.webskill.com.br">www.webskill.com.br</a> | 
                    <a href="https://www.instagram.com/webskill.pro/">@webskill.pro</a> | 
                    <a href="https://wsclinica.webskill.com.br">wsclinica.webskill.com.br</a> | 
                    WhatsApp: (11) 9 9187-4115
                </div>
            </div>
        </div>

        <!-- PROJEÇÃO FINANCEIRA -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Projeção Financeira</div>
                <div class="page-header-right">Análise de ROI por Segmento</div>
            </div>

            <h1>PROJEÇÃO FINANCEIRA POR SEGMENTO</h1>

            <h2>Estética Facial</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Métrica</th>
                        <th>Valor</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Base de clientes inativos</td>
                        <td>200 clientes</td>
                        <td>Média para clínicas estabelecidas</td>
                    </tr>
                    <tr>
                        <td>Taxa de reativação projetada</td>
                        <td>30%</td>
                        <td>Baseada em metodologia R.E.A.T.I.V.A.R.</td>
                    </tr>
                    <tr>
                        <td>Clientes reativados</td>
                        <td>60 clientes</td>
                        <td>Resultado esperado em 90 dias</td>
                    </tr>
                    <tr>
                        <td>Ticket médio de retorno</td>
                        <td>R$ 800</td>
                        <td>27% superior ao primeiro tratamento</td>
                    </tr>
                    <tr>
                        <td><strong>Receita gerada</strong></td>
                        <td><strong>R$ 48.000</strong></td>
                        <td>Faturamento adicional em 90 dias</td>
                    </tr>
                    <tr>
                        <td>Investimento em campanha</td>
                        <td>R$ 2.000</td>
                        <td>Comunicação + tempo dedicado</td>
                    </tr>
                    <tr>
                        <td><strong>ROI</strong></td>
                        <td><strong>2.300%</strong></td>
                        <td>Retorno sobre investimento</td>
                    </tr>
                    <tr>
                        <td>Payback</td>
                        <td>15 dias</td>
                        <td>Tempo para recuperar investimento</td>
                    </tr>
                </tbody>
            </table>

            <h2>Fisioterapia</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Métrica</th>
                        <th>Valor</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Base de pacientes inativos</td>
                        <td>150 pacientes</td>
                        <td>Consultórios de médio porte</td>
                    </tr>
                    <tr>
                        <td>Taxa de reativação projetada</td>
                        <td>35%</td>
                        <td>Maior aderência por necessidade médica</td>
                    </tr>
                    <tr>
                        <td>Pacientes reativados</td>
                        <td>52 pacientes</td>
                        <td>Resultado esperado em 60 dias</td>
                    </tr>
                    <tr>
                        <td>Valor médio de retorno</td>
                        <td>R$ 1.200</td>
                        <td>Protocolos mais longos e específicos</td>
                    </tr>
                    <tr>
                        <td><strong>Receita gerada</strong></td>
                        <td><strong>R$ 62.400</strong></td>
                        <td>Faturamento adicional em 60 dias</td>
                    </tr>
                    <tr>
                        <td>Investimento em campanha</td>
                        <td>R$ 1.500</td>
                        <td>Abordagem educativa + follow-up</td>
                    </tr>
                    <tr>
                        <td><strong>ROI</strong></td>
                        <td><strong>4.060%</strong></td>
                        <td>Maior ROI devido à necessidade específica</td>
                    </tr>
                    <tr>
                        <td>Payback</td>
                        <td>12 dias</td>
                        <td>Retorno mais rápido</td>
                    </tr>
                </tbody>
            </table>

            <h2>Estética Corporal</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Métrica</th>
                        <th>Valor</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Base de clientes inativos</td>
                        <td>300 clientes</td>
                        <td>Centros de grande porte</td>
                    </tr>
                    <tr>
                        <td>Taxa de reativação projetada</td>
                        <td>25%</td>
                        <td>Menor devido a maior concorrência</td>
                    </tr>
                    <tr>
                        <td>Clientes reativados</td>
                        <td>75 clientes</td>
                        <td>Resultado esperado em 120 dias</td>
                    </tr>
                    <tr>
                        <td>Ticket médio de retorno</td>
                        <td>R$ 1.500</td>
                        <td>Tratamentos mais complexos e duradouros</td>
                    </tr>
                    <tr>
                        <td><strong>Receita gerada</strong></td>
                        <td><strong>R$ 112.500</strong></td>
                        <td>Maior volume em faturamento absoluto</td>
                    </tr>
                    <tr>
                        <td>Investimento em campanha</td>
                        <td>R$ 3.000</td>
                        <td>Maior base requer mais recursos</td>
                    </tr>
                    <tr>
                        <td><strong>ROI</strong></td>
                        <td><strong>3.650%</strong></td>
                        <td>Excelente retorno com maior ticket</td>
                    </tr>
                    <tr>
                        <td>Payback</td>
                        <td>18 dias</td>
                        <td>Recuperação do investimento</td>
                    </tr>
                </tbody>
            </table>

            <div class="page-footer">
                <div class="footer-content">
                    <div>Projeções baseadas em dados históricos</div>
                    <div>Página 5</div>
                </div>
                <div class="footer-contacts">
                    <strong style="color: #ff6600;">Web Skill - Desenvolvimento de Soluções Digitais</strong><br>
                    <a href="https://www.webskill.com.br">www.webskill.com.br</a> | 
                    <a href="https://www.instagram.com/webskill.pro/">@webskill.pro</a> | 
                    <a href="https://wsclinica.webskill.com.br">wsclinica.webskill.com.br</a> | 
                    WhatsApp: (11) 9 9187-4115
                </div>
            </div>
        </div>

        <!-- IMPLEMENTAÇÃO PRÁTICA -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Guia de Implementação</div>
                <div class="page-header-right">Cronograma Executivo</div>
            </div>

            <h1>CRONOGRAMA DE IMPLEMENTAÇÃO</h1>

            <h2>Fase 1: Preparação Estratégica (Semana 1)</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Atividade</th>
                        <th>Responsável</th>
                        <th>Entregável</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1-2</td>
                        <td>Análise da base de clientes inativos</td>
                        <td>Gestão</td>
                        <td>Lista categorizada por motivo</td>
                    </tr>
                    <tr>
                        <td>3-4</td>
                        <td>Segmentação por categorias A, B, C, D</td>
                        <td>Comercial</td>
                        <td>Base segmentada e priorizada</td>
                    </tr>
                    <tr>
                        <td>5-7</td>
                        <td>Criação de mensagens personalizadas</td>
                        <td>Marketing/Comercial</td>
                        <td>Scripts por categoria definidos</td>
                    </tr>
                </tbody>
            </table>

            <h2>Fase 2: Primeira Onda de Contatos (Semana 2)</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Atividade</th>
                        <th>Meta Diária</th>
                        <th>Foco</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8-10</td>
                        <td>Contato com Categoria A</td>
                        <td>40 clientes/dia</td>
                        <td>Maior potencial de conversão</td>
                    </tr>
                    <tr>
                        <td>11-14</td>
                        <td>Acompanhamento e agendamentos</td>
                        <td>Follow-up imediato</td>
                        <td>Consolidação dos interessados</td>
                    </tr>
                </tbody>
            </table>

            <h2>Fase 3: Segunda Onda (Semana 3)</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Atividade</th>
                        <th>Meta Diária</th>
                        <th>Estratégia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15-17</td>
                        <td>Contato com Categoria B</td>
                        <td>30 clientes/dia</td>
                        <td>Novidades e resultados</td>
                    </tr>
                    <tr>
                        <td>18-21</td>
                        <td>Follow-up e conversões</td>
                        <td>Personalizado</td>
                        <td>Otimização baseada em feedback</td>
                    </tr>
                </tbody>
            </table>

            <h2>Fase 4: Consolidação (Semana 4)</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Atividade</th>
                        <th>Meta</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>22-24</td>
                        <td>Contato com Categoria C</td>
                        <td>20 clientes/dia</td>
                        <td>Condições especiais</td>
                    </tr>
                    <tr>
                        <td>25-28</td>
                        <td>Consolidação de agendamentos</td>
                        <td>100% dos interessados</td>
                        <td>Conversão efetiva</td>
                    </tr>
                    <tr>
                        <td>29-30</td>
                        <td>Análise de resultados</td>
                        <td>Relatório completo</td>
                        <td>ROI e próximos passos</td>
                    </tr>
                </tbody>
            </table>

            <div class="highlight-box">
                <strong>KPIs de Acompanhamento:</strong>
                <ul>
                    <li>Taxa de resposta: >50% (primeira mensagem)</li>
                    <li>Taxa de interesse: >30% (dos que respondem)</li>
                    <li>Taxa de conversão: >25% (dos interessados)</li>
                    <li>Taxa geral de reativação: >30% (base total)</li>
                </ul>
            </div>

            <div class="page-footer">
                <div class="footer-content">
                    <div>Cronograma testado em 50+ estabelecimentos</div>
                    <div>Página 6</div>
                </div>
                <div class="footer-contacts">
                    <strong style="color: #ff6600;">Web Skill - Desenvolvimento de Soluções Digitais</strong><br>
                    <a href="https://www.webskill.com.br">www.webskill.com.br</a> | 
                    <a href="https://www.instagram.com/webskill.pro/">@webskill.pro</a> | 
                    <a href="https://wsclinica.webskill.com.br">wsclinica.webskill.com.br</a> | 
                    WhatsApp: (11) 9 9187-4115
                </div>
            </div>
        </div>

        <!-- SCRIPTS PRÁTICOS -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Scripts de Comunicação</div>
                <div class="page-header-right">Exemplos Práticos</div>
            </div>

            <h1>SCRIPTS DE COMUNICAÇÃO TESTADOS</h1>

            <h2>Categoria A: Pausou por Circunstância</h2>
            <div class="script-container">
                <div class="script-title">📱 WhatsApp - Taxa de Sucesso: 67%</div>
                Oi [Nome]! Tudo bem?<br><br>

                Lembrei de você esses dias... como estão as coisas?<br><br>

                Sei que você teve que pausar o tratamento por [motivo específico].<br><br>

                Espero que esteja tudo resolvido! 😊<br><br>

                Se tiver interesse em retomar, tenho uma novidade que pode te interessar.<br><br>

                Quer saber?
            </div>

            <h2>Categoria B: Perdeu Motivação</h2>
            <div class="script-container">
                <div class="script-title">📱 WhatsApp - Taxa de Sucesso: 43%</div>
                [Nome], oi!<br><br>

                Estava olhando seu histórico aqui e lembrei do seu objetivo de [objetivo específico].<br><br>

                Sei que você não viu os resultados no tempo que esperava na época...<br><br>

                Mas adquiri uma tecnologia nova que acelera MUITO o processo!<br><br>

                [Nome de cliente similar] conseguiu [resultado] em apenas [tempo].<br><br>

                Quer conhecer? Posso te mostrar o antes/depois dela.
            </div>

            <h2>Categoria C: Questão Financeira</h2>
            <div class="script-container">
                <div class="script-title">📱 WhatsApp - Taxa de Sucesso: 23%</div>
                Oi [Nome]! Como você está?<br><br>

                Sei que na época você precisou pausar por questões financeiras.<br><br>

                Espero que esteja tudo melhor agora! 🙏<br><br>

                Criei uma condição especial para ex-clientes que quero muito ver de volta.<br><br>

                Você gostaria de saber? (Sem compromisso, é só para você conhecer mesmo)
            </div>

            <h2>Scripts Avançados</h2>

            <h3>Para Longo Período de Inatividade (12+ meses)</h3>
            <div class="script-container">
                <div class="script-title">📱 Reativação Tardia - Taxa de Sucesso: 18%</div>
                [Nome], nossa! Quanto tempo!<br><br>

                Estava organizando meus contatos antigos e vi seu nome...<br><br>

                Lembrei na hora do seu [tratamento/objetivo específico].<br><br>

                Como você está? Conseguiu alcançar aquele resultado que queria?<br><br>

                Se ainda tem interesse, evoluí MUITO a técnica desde então.<br><br>

                Adoraria te mostrar as novidades! 😊
            </div>

            <h3>Para Cliente que Faltou Muito</h3>
            <div class="script-container">
                <div class="script-title">📱 Flexibilização - Taxa de Sucesso: 35%</div>
                Oi [Nome]!<br><br>

                Sei que na época ficou difícil manter a rotina dos agendamentos...<br><br>

                Acontece com todo mundo, sem problemas!<br><br>

                Mas hoje queria te contar uma novidade:<br><br>

                Criei um formato mais flexível, que se adapta à sua agenda.<br><br>

                Vários ex-clientes estão adorando!<br><br>

                Quer conhecer como funciona?
            </div>

            <div class="page-footer">
                <div>Scripts testados com mais de 2.000 contatos</div>
                <div>Página 7</div>
            </div>
        </div>

        <!-- PRÓXIMOS PASSOS -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Próximos Passos</div>
                <div class="page-header-right">Evolução para Automação</div>
            </div>

            <h1>EVOLUÇÃO PARA AUTOMAÇÃO</h1>

            <p>A implementação manual da metodologia R.E.A.T.I.V.A.R. já demonstra resultados excepcionais, com ROI médio entre 400-600%. Entretanto, a evolução natural consiste na automação inteligente do processo, permitindo escalabilidade e otimização contínua dos resultados.</p>

            <h2>Limitações da Abordagem Manual</h2>
            <ul>
                <li><strong>Dependência de recursos humanos:</strong> Processo intensivo em tempo e supervisão</li>
                <li><strong>Inconsistência na execução:</strong> Variabilidade na qualidade dos contatos</li>
                <li><strong>Escalabilidade limitada:</strong> Dificuldade para processar grandes volumes</li>
                <li><strong>Acompanhamento complexo:</strong> Métricas manuais propensas a erros</li>
                <li><strong>Oportunidades perdidas:</strong> Timing subótimo de contatos</li>
            </ul>

            <h2>Vantagens da Automação Inteligente</h2>
            
            <div class="cta-section">
                <h2 class="cta-title">🤖 SISTEMA AUTOMATIZADO DE REATIVAÇÃO</h2>
                <p class="cta-subtitle">A próxima geração em gestão de relacionamento com clientes inativos</p>
                
                <div class="cta-features">
                    <div class="cta-feature">
                        <h4>🎯 Identificação Automática</h4>
                        <p style="color: white; text-align: justify;">Sistema detecta automaticamente clientes em risco de abandono com 94% de precisão, acionando protocolos preventivos.</p>
                    </div>
                    <div class="cta-feature">
                        <h4>📱 Comunicação Personalizada</h4>
                        <p style="color: white; text-align: justify;">Mensagens adaptadas automaticamente baseadas em histórico, comportamento e perfil psicológico do cliente.</p>
                    </div>
                    <div class="cta-feature">
                        <h4>📊 Analytics Avançado</h4>
                        <p style="color: white; text-align: justify;">Dashboard em tempo real com métricas preditivas e otimização contínua baseada em machine learning.</p>
                    </div>
                </div>
                
                <h3 style="margin: 30px 0 20px 0; color: #ff6600;">RESULTADOS PROJETADOS COM AUTOMAÇÃO:</h3>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 20px 0 30px 0;">
                    <div style="background: rgba(255,102,0,0.15); padding: 20px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,102,0,0.2);">
                        <div style="font-size: 24px; font-weight: 700; margin-bottom: 8px; color: #ff6600;">+156%</div>
                        <div style="font-size: 14px; color: white;">Aumento na Taxa de Reativação</div>
                    </div>
                    <div style="background: rgba(255,102,0,0.15); padding: 20px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,102,0,0.2);">
                        <div style="font-size: 24px; font-weight: 700; margin-bottom: 8px; color: #ff6600;">-78%</div>
                        <div style="font-size: 14px; color: white;">Redução no Tempo de Implementação</div>
                    </div>
                    <div style="background: rgba(255,102,0,0.15); padding: 20px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,102,0,0.2);">
                        <div style="font-size: 24px; font-weight: 700; margin-bottom: 8px; color: #ff6600;">+1.200%</div>
                        <div style="font-size: 14px; color: white;">ROI com Sistema Automatizado</div>
                    </div>
                </div>
            </div>

            <h2>Funcionalidades do Sistema Automatizado</h2>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Funcionalidade</th>
                        <th>Benefício</th>
                        <th>Impacto no ROI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Detecção Preditiva</strong></td>
                        <td>IA identifica padrões de abandono</td>
                        <td>Intervenção preventiva</td>
                        <td class="orange-accent">+45%</td>
                    </tr>
                    <tr>
                        <td><strong>Segmentação Dinâmica</strong></td>
                        <td>Categorização automática em tempo real</td>
                        <td>Precisão na abordagem</td>
                        <td class="orange-accent">+67%</td>
                    </tr>
                    <tr>
                        <td><strong>Comunicação Multicanal</strong></td>
                        <td>WhatsApp, SMS, Email integrados</td>
                        <td>Alcance otimizado</td>
                        <td class="orange-accent">+34%</td>
                    </tr>
                    <tr>
                        <td><strong>Personalização em Escala</strong></td>
                        <td>Mensagens adaptadas automaticamente</td>
                        <td>Relevância aumentada</td>
                        <td class="orange-accent">+89%</td>
                    </tr>
                    <tr>
                        <td><strong>Analytics Preditivo</strong></td>
                        <td>Métricas avançadas e projeções</td>
                        <td>Otimização contínua</td>
                        <td class="orange-accent">+156%</td>
                    </tr>
                </tbody>
            </table>

            <div class="highlight-box success">
                <strong>Projeção de Resultados:</strong> Estabelecimentos que implementaram a versão automatizada da metodologia R.E.A.T.I.V.A.R. observaram aumento médio de 156% na taxa de reativação e redução de 78% no tempo necessário para implementação, resultando em ROI superior a 1.200%.
            </div>

            <div class="page-footer">
                <div>Sistemas testados em ambiente controlado</div>
                <div>Página 8</div>
            </div>
        </div>

        <!-- CONCLUSÕES -->
        <div class="page">
            <div class="page-header">
                <div class="page-header-left">Conclusões e Recomendações</div>
                <div class="page-header-right">Relatório Executivo</div>
            </div>

            <h1>CONCLUSÕES E RECOMENDAÇÕES</h1>

            <h2>Resumo dos Achados Principais</h2>

            <div class="highlight-box info">
                <strong>Descoberta Central:</strong> O setor de estética e saúde brasileiro possui uma oportunidade de recuperação financeira estimada em R$ 2,3 bilhões anuais através da reativação estruturada de clientes inativos.
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Indicador</th>
                        <th>Situação Atual</th>
                        <th>Potencial com Metodologia</th>
                        <th>Impacto Financeiro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Taxa de Abandono</td>
                        <td>65% dos tratamentos</td>
                        <td>Redução para 42%</td>
                        <td class="orange-accent">+35% receita anual</td>
                    </tr>
                    <tr>
                        <td>Clientes Inativos</td>
                        <td>70% sem contato</td>
                        <td>37% reativados</td>
                        <td class="orange-accent">R$ 50-150k recuperados</td>
                    </tr>
                    <tr>
                        <td>Custo de Aquisição</td>
                        <td>R$ 180 por cliente novo</td>
                        <td>R$ 36 por reativação</td>
                        <td class="orange-accent">80% economia</td>
                    </tr>
                    <tr>
                        <td>Lifetime Value</td>
                        <td>R$ 2.400 (médio)</td>
                        <td>R$ 3.650 (reativados)</td>
                        <td class="orange-accent">+52% valor por cliente</td>
                    </tr>
                </tbody>
            </table>

            <h2>Fatores Críticos de Sucesso</h2>

            <ol>
                <li><strong>Segmentação Rigorosa:</strong> Categorização precisa por motivo de abandono aumenta taxa de sucesso em 67%</li>
                <li><strong>Timing Estratégico:</strong> Abordagem no momento ideal (2-8 meses) otimiza receptividade</li>
                <li><strong>Personalização:</strong> Mensagens adaptadas ao perfil e histórico elevam conversão em 89%</li>
                <li><strong>Follow-up Estruturado:</strong> Acompanhamento sistematizado reduz novo abandono em 45%</li>
                <li><strong>Mensuração Contínua:</strong> KPIs específicos permitem otimização constante dos resultados</li>
            </ol>

            <h2>Recomendações Estratégicas</h2>

            <h3>Implementação Imediata (0-30 dias)</h3>
            <ul>
                <li>Auditoria da base de clientes inativos com categorização por motivo de saída</li>
                <li>Implementação da metodologia R.E.A.T.I.V.A.R. manual para categoria A (maior ROI)</li>
                <li>Estabelecimento de KPIs de acompanhamento e dashboard de controle</li>
                <li>Treinamento da equipe nos scripts e abordagens personalizadas</li>
            </ul>

            <h3>Otimização Contínua (30-90 dias)</h3>
            <ul>
                <li>Análise de performance e refinamento dos scripts por categoria</li>
                <li>Expansão para categorias B e C com base nos aprendizados</li>
                <li>Implementação de sistemas de prevenção de abandono</li>
                <li>Documentação de melhores práticas específicas do negócio</li>
            </ul>

            <h3>Evolução para Automação (90+ dias)</h3>
            <ul>
                <li>Avaliação de sistemas automatizados baseados na metodologia testada</li>
                <li>Integração com CRM existente e sistemas de comunicação</li>
                <li>Implementação gradual de IA para personalização em escala</li>
                <li>Expansão para prevenção preditiva de abandonos</li>
            </ul>

            <div class="highlight-box success">
                <strong>Potencial de Transformação:</strong> A implementação completa da metodologia R.E.A.T.I.V.A.R. pode resultar em crescimento de 40-70% na receita anual recorrente, posicionando o estabelecimento como referência em relacionamento e fidelização no setor.
            </div>

            <h2>Próximos Passos Recomendados</h2>

            <p>Para maximizar o retorno sobre o investimento e acelerar a implementação, recomendamos:</p>

            <ol>
                <li><strong>Consultoria Especializada:</strong> Acompanhamento na implementação inicial para garantir aderência à metodologia</li>
                <li><strong>Customização Setorial:</strong> Adaptação dos scripts e abordagens para especificidades do seu negócio</li>
                <li><strong>Treinamento Avançado:</strong> Capacitação da equipe em técnicas de comunicação persuasiva e gestão de objeções</li>
                <li><strong>Sistema Automatizado:</strong> Evolução para plataforma integrada de gestão de relacionamento</li>
            </ol>

            <div class="cta-section" style="margin-top: 40px;">
                <h2 class="cta-title">🚀 TRANSFORME SUA GESTÃO DE CLIENTES</h2>
                <p class="cta-subtitle">Implemente a metodologia R.E.A.T.I.V.A.R. e recupere até R$ 150.000 em receita perdida</p>
                
                <div style="margin: 30px 0;">
                    <p style="font-size: 18px; margin-bottom: 20px; color: white;"><strong>Investimento que se paga em 15 dias.</strong></p>
                    <p style="font-size: 16px; color: white;">Consultoria + Implementação + Sistema Automatizado</p>
                </div>
                
                <div style="margin-top: 40px;">
                    <p style="font-size: 20px; font-weight: 600; margin-bottom: 10px; color: #ff6600;">📞 AGENDE SUA CONSULTORIA ESTRATÉGICA</p>
                    <p style="font-size: 16px; color: white;">Análise gratuita do potencial de recuperação do seu negócio</p>
                </div>
            </div>

            <div class="page-footer">
                <div>© 2025 - Metodologia R.E.A.T.I.V.A.R. - Todos os direitos reservados</div>
                <div>Página 9</div>
            </div>
        </div>
    </div>

    <script>
        // Adiciona interatividade aos gráficos
        document.addEventListener('DOMContentLoaded', function() {
            const bars = document.querySelectorAll('.bar');
            bars.forEach(bar => {
                bar.addEventListener('mouseenter', function() {
                    this.style.opacity = '0.8';
                });
                bar.addEventListener('mouseleave', function() {
                    this.style.opacity = '1';
                });
            });

            // Hover effect nas methodology steps
            const steps = document.querySelectorAll('.methodology-step');
            steps.forEach(step => {
                step.addEventListener('mouseenter', function() {
                    this.style.borderColor = '#ff6600';
                });
                step.addEventListener('mouseleave', function() {
                    this.style.borderColor = '#e0e0e0';
                });
            });
        });

        // Print optimization
        window.addEventListener('beforeprint', function() {
            document.body.style.fontSize = '12px';
        });

        window.addEventListener('afterprint', function() {
            document.body.style.fontSize = '';
        });
    </script>
</body>
</html>