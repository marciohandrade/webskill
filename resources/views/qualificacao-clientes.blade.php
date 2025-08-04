<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalize Sua Demonstração - Web Skill</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
        }

        /* =================================================================
           🎨 HEADER PREMIUM
        ================================================================= */
        .header {
            background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);
            padding: 25px 0;
            box-shadow: 0 8px 40px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ff6b35" fill-opacity="0.1"><circle cx="20" cy="20" r="1"/></g></svg>');
            animation: headerFloat 25s linear infinite;
        }

        @keyframes headerFloat {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(-40px) translateY(-40px); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
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
            font-size: 36px;
            font-weight: 800;
            color: #fff;
            line-height: 1;
        }

        .logo-main .highlight {
            color: #ff6b35;
        }

        .logo-tagline {
            font-size: 12px;
            color: #ff6b35;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 4px;
        }

        .progress-indicator {
            display: flex;
            align-items: center;
            gap: 15px;
            background: rgba(255,255,255,0.1);
            padding: 15px 25px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,107,53,0.3);
        }

        .progress-text {
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .progress-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: conic-gradient(#ff6b35 0%, #ff6b35 0%, rgba(255,255,255,0.2) 0%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 12px;
            transition: all 0.5s ease;
        }

        /* =================================================================
           🎯 HERO SECTION PREMIUM
        ================================================================= */
        .hero {
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
            padding: 80px 0 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ff6b35" fill-opacity="0.04"><circle cx="40" cy="40" r="3"/></g></svg>');
            animation: heroFloat 30s linear infinite;
        }

        @keyframes heroFloat {
            0% { transform: translateX(0) translateY(0) rotate(0deg); }
            100% { transform: translateX(-80px) translateY(-80px) rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .success-badge {
            display: inline-block;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 20px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 40px;
            box-shadow: 0 12px 40px rgba(40,167,69,0.3);
            animation: successPulse 3s infinite;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        @keyframes successPulse {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 12px 40px rgba(40,167,69,0.3);
            }
            50% { 
                transform: scale(1.05);
                box-shadow: 0 16px 50px rgba(40,167,69,0.5);
            }
        }

        .hero-title {
            font-size: 52px;
            font-weight: 800;
            color: #000;
            margin-bottom: 25px;
            line-height: 1.1;
        }

        .hero-title .highlight {
            color: #ff6b35;
            position: relative;
        }

        .hero-title .highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            border-radius: 2px;
        }

        .hero-subtitle {
            font-size: 22px;
            color: #666;
            margin-bottom: 50px;
            font-weight: 400;
            line-height: 1.5;
        }

        /* =================================================================
           📊 PROGRESS BAR AVANÇADA
        ================================================================= */
        .progress-section {
            background: white;
            padding: 40px;
            border-radius: 25px;
            margin: 60px auto;
            max-width: 800px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            border: 2px solid rgba(255,107,53,0.1);
            position: relative;
            overflow: hidden;
        }

        .progress-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            border-radius: 3px 3px 0 0;
        }

        .progress-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .progress-title {
            font-size: 24px;
            font-weight: 800;
            color: #000;
            margin-bottom: 10px;
        }

        .progress-subtitle {
            font-size: 16px;
            color: #666;
        }

        .progress-bar-container {
            background: #f8f9fa;
            height: 12px;
            border-radius: 25px;
            overflow: hidden;
            margin: 30px 0;
            box-shadow: inset 0 2px 8px rgba(0,0,0,0.1);
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(135deg, #ff6b35, #ff8f65, #28a745);
            border-radius: 25px;
            width: 0%;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, 
                rgba(255,255,255,0.3) 0%, 
                rgba(255,255,255,0.6) 50%, 
                rgba(255,255,255,0.3) 100%);
            animation: progressShine 2s infinite;
        }

        @keyframes progressShine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .progress-step {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e0e0e0;
            color: #999;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 12px;
            margin: 0 auto 8px;
            transition: all 0.3s ease;
        }

        .step-number.active {
            background: #ff6b35;
            color: white;
            transform: scale(1.2);
            box-shadow: 0 4px 15px rgba(255,107,53,0.4);
        }

        .step-number.completed {
            background: #28a745;
            color: white;
        }

        .step-label {
            font-size: 12px;
            color: #666;
            font-weight: 600;
        }

        /* =================================================================
           🎴 QUESTION CARDS PREMIUM
        ================================================================= */
        .question-section {
            padding: 60px 0;
            display: none;
        }

        .question-section.active {
            display: block;
            animation: slideInFromRight 0.6s ease-out;
        }

        @keyframes slideInFromRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .question-card {
            background: white;
            border-radius: 30px;
            padding: 60px 50px;
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 25px 80px rgba(0,0,0,0.15);
            border: 3px solid rgba(255,107,53,0.1);
            position: relative;
            overflow: hidden;
        }

        .question-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(135deg, #ff6b35, #ff8f65, #28a745);
        }

        .question-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .question-icon {
            font-size: 64px;
            margin-bottom: 25px;
            display: block;
            animation: iconBounce 2s infinite;
        }

        @keyframes iconBounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .question-title {
            font-size: 32px;
            font-weight: 800;
            color: #000;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .question-subtitle {
            font-size: 18px;
            color: #666;
            font-weight: 400;
        }

        /* =================================================================
           🎯 OPTIONS GRID INTERATIVO
        ================================================================= */
        .options-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }

        .option-card {
            background: #f8f9fa;
            border: 3px solid #e0e0e0;
            border-radius: 20px;
            padding: 30px 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .option-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255,107,53,0.1), 
                transparent);
            transition: left 0.5s ease;
        }

        .option-card:hover {
            transform: translateY(-8px);
            border-color: #ff6b35;
            box-shadow: 0 15px 40px rgba(255,107,53,0.2);
        }

        .option-card:hover::before {
            left: 100%;
        }

        .option-card.selected {
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            border-color: #ff6b35;
            color: white;
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(255,107,53,0.4);
        }

        .option-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
            transition: transform 0.3s ease;
        }

        .option-card:hover .option-icon {
            transform: scale(1.1);
        }

        .option-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .option-description {
            font-size: 14px;
            opacity: 0.8;
            line-height: 1.4;
        }

        /* =================================================================
           🎚️ SLIDER INPUTS PREMIUM
        ================================================================= */
        .slider-container {
            margin: 40px 0;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 20px;
            border: 2px solid rgba(255,107,53,0.1);
        }

        .slider-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .slider-title {
            font-size: 24px;
            font-weight: 700;
            color: #000;
            margin-bottom: 10px;
        }

        .slider-value {
            font-size: 48px;
            font-weight: 800;
            color: #ff6b35;
            margin: 20px 0;
        }

        .custom-slider {
            width: 100%;
            height: 8px;
            border-radius: 10px;
            background: #e0e0e0;
            outline: none;
            appearance: none;
            cursor: pointer;
            margin: 20px 0;
        }

        .custom-slider::-webkit-slider-thumb {
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(255,107,53,0.4);
            transition: all 0.3s ease;
        }

        .custom-slider::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            box-shadow: 0 6px 20px rgba(255,107,53,0.6);
        }

        .custom-slider::-moz-range-thumb {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 15px rgba(255,107,53,0.4);
        }

        .slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
            color: #666;
            font-weight: 600;
        }

        /* =================================================================
           🎮 NAVIGATION BUTTONS
        ================================================================= */
        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
            gap: 20px;
        }

        .nav-button {
            padding: 18px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 150px;
            justify-content: center;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            color: white;
            box-shadow: 0 8px 25px rgba(255,107,53,0.3);
        }

        .btn-primary:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255,107,53,0.4);
        }

        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .btn-secondary {
            background: transparent;
            color: #666;
            border: 2px solid #ddd;
        }

        .btn-secondary:hover {
            border-color: #ff6b35;
            color: #ff6b35;
            transform: translateY(-2px);
        }

        /* =================================================================
           🎉 FINAL RESULT SECTION
        ================================================================= */
        .result-section {
            display: none;
            padding: 80px 0;
            text-align: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
        }

        .result-section.active {
            display: block;
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .result-card {
            background: white;
            border-radius: 30px;
            padding: 60px 50px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 30px 100px rgba(0,0,0,0.15);
            border: 3px solid #28a745;
            position: relative;
            overflow: hidden;
        }

        .result-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(135deg, #28a745, #20c997, #ff6b35);
        }

        .result-icon {
            font-size: 80px;
            margin-bottom: 30px;
            animation: resultPulse 2s infinite;
        }

        @keyframes resultPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .result-title {
            font-size: 36px;
            font-weight: 800;
            color: #000;
            margin-bottom: 20px;
        }

        .result-subtitle {
            font-size: 20px;
            color: #666;
            margin-bottom: 40px;
        }

        .personalized-preview {
            background: linear-gradient(135deg, #f8f9fa, #fff);
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            border: 2px solid rgba(255,107,53,0.2);
        }

        .preview-title {
            font-size: 24px;
            font-weight: 700;
            color: #ff6b35;
            margin-bottom: 25px;
        }

        .preview-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            text-align: left;
        }

        .preview-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .preview-icon {
            font-size: 24px;
            width: 40px;
            text-align: center;
        }

        .preview-text {
            font-size: 14px;
            color: #333;
            font-weight: 600;
        }

        .final-cta {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 25px 50px;
            border-radius: 50px;
            font-size: 22px;
            font-weight: 800;
            border: none;
            cursor: pointer;
            margin: 40px 20px 20px;
            transition: all 0.3s ease;
            box-shadow: 0 12px 40px rgba(40,167,69,0.3);
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .final-cta:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 60px rgba(40,167,69,0.4);
        }

        .urgency-text {
            font-size: 14px;
            color: #dc3545;
            font-weight: 600;
            margin-top: 20px;
            animation: urgencyBlink 2s infinite;
        }

        @keyframes urgencyBlink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0.7; }
        }

        /* =================================================================
           📱 MOBILE RESPONSIVO
        ================================================================= */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .header {
                padding: 20px 0;
            }

            .logo-main {
                font-size: 28px;
            }

            .progress-indicator {
                padding: 12px 20px;
                gap: 10px;
            }

            .progress-text {
                font-size: 12px;
            }

            .progress-circle {
                width: 35px;
                height: 35px;
                font-size: 11px;
            }

            .hero {
                padding: 60px 0 40px;
            }

            .hero-title {
                font-size: 32px;
                margin-bottom: 20px;
            }

            .hero-subtitle {
                font-size: 18px;
                margin-bottom: 40px;
            }

            .success-badge {
                padding: 15px 30px;
                font-size: 16px;
            }

            .progress-section {
                margin: 40px 15px;
                padding: 30px 25px;
            }

            .progress-title {
                font-size: 20px;
            }

            .progress-subtitle {
                font-size: 14px;
            }

            .question-card {
                padding: 40px 25px;
                margin: 0 15px;
                border-radius: 20px;
            }

            .question-title {
                font-size: 24px;
            }

            .question-subtitle {
                font-size: 16px;
            }

            .question-icon {
                font-size: 48px;
            }

            .options-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .option-card {
                padding: 25px 20px;
            }

            .option-icon {
                font-size: 40px;
            }

            .option-title {
                font-size: 18px;
            }

            .navigation-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .nav-button {
                width: 100%;
                min-width: auto;
            }

            .result-card {
                padding: 40px 25px;
                margin: 0 15px;
            }

            .result-title {
                font-size: 28px;
            }

            .result-subtitle {
                font-size: 18px;
            }

            .preview-items {
                grid-template-columns: 1fr;
            }

            .final-cta {
                padding: 20px 40px;
                font-size: 18px;
                margin: 30px 0 15px;
            }

            .slider-container {
                padding: 30px 20px;
            }

            .slider-title {
                font-size: 20px;
            }

            .slider-value {
                font-size: 36px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 28px;
            }

            .question-title {
                font-size: 20px;
            }

            .result-title {
                font-size: 24px;
            }

            .final-cta {
                padding: 18px 30px;
                font-size: 16px;
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
                    <div class="logo-tagline">Personalização da Demonstração</div>
                </div>
                <div class="progress-indicator">
                    <span class="progress-text">Progresso</span>
                    <div class="progress-circle" id="header-progress">0%</div>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="success-badge">✅ SMS Confirmado com Sucesso!</div>
                
                <h1 class="hero-title">Vamos <span class="highlight">Personalizar</span><br>Sua Demonstração</h1>
                
                <p class="hero-subtitle">
                    Responda 6 perguntas rápidas para criarmos uma demonstração<br>
                    específica para seu tipo de estabelecimento
                </p>
            </div>
        </div>
    </section>

    <!-- PROGRESS BAR SECTION -->
    <section class="progress-section">
        <div class="progress-header">
            <h3 class="progress-title">Personalizando Sua Experiência</h3>
            <p class="progress-subtitle">Cada resposta nos ajuda a criar a solução perfeita para você</p>
        </div>
        
        <div class="progress-bar-container">
            <div class="progress-bar" id="main-progress-bar"></div>
        </div>
        
        <div class="progress-steps">
            <div class="progress-step">
                <div class="step-number" id="step-1">1</div>
                <div class="step-label">Tipo de Negócio</div>
            </div>
            <div class="progress-step">
                <div class="step-number" id="step-2">2</div>
                <div class="step-label">Equipe</div>
            </div>
            <div class="progress-step">
                <div class="step-number" id="step-3">3</div>
                <div class="step-label">Volume</div>
            </div>
            <div class="progress-step">
                <div class="step-number" id="step-4">4</div>
                <div class="step-label">Desafios</div>
            </div>
            <div class="progress-step">
                <div class="step-number" id="step-5">5</div>
                <div class="step-label">Ferramentas</div>
            </div>
            <div class="progress-step">
                <div class="step-number" id="step-6">6</div>
                <div class="step-label">Objetivos</div>
            </div>
        </div>
    </section>

    <!-- QUESTION 1: TIPO DE ESTABELECIMENTO -->
    <section class="question-section active" id="question-1">
        <div class="container">
            <div class="question-card">
                <div class="question-header">
                    <span class="question-icon">🏢</span>
                    <h2 class="question-title">Qual o tipo do seu estabelecimento?</h2>
                    <p class="question-subtitle">Isso nos ajuda a personalizar as funcionalidades mais importantes para você</p>
                </div>
                
                <div class="options-grid">
                    <div class="option-card" data-value="salao_beleza">
                        <span class="option-icon">💇‍♀️</span>
                        <h3 class="option-title">Salão de Beleza</h3>
                        <p class="option-description">Cortes, coloração, tratamentos capilares</p>
                    </div>
                    
                    <div class="option-card" data-value="barbearia">
                        <span class="option-icon">✂️</span>
                        <h3 class="option-title">Barbearia</h3>
                        <p class="option-description">Cortes masculinos, barba, bigode</p>
                    </div>
                    
                    <div class="option-card" data-value="estetica">
                        <span class="option-icon">✨</span>
                        <h3 class="option-title">Estética</h3>
                        <p class="option-description">Procedimentos estéticos, limpeza de pele</p>
                    </div>
                    
                    <div class="option-card" data-value="clinica">
                        <span class="option-icon">🏥</span>
                        <h3 class="option-title">Clínica</h3>
                        <p class="option-description">Consultórios médicos, odontológicos</p>
                    </div>
                    
                    <div class="option-card" data-value="studio">
                        <span class="option-icon">💅</span>
                        <h3 class="option-title">Studio de Unhas</h3>
                        <p class="option-description">Manicure, pedicure, nail art</p>
                    </div>
                    
                    <div class="option-card" data-value="outros">
                        <span class="option-icon">🎯</span>
                        <h3 class="option-title">Outros</h3>
                        <p class="option-description">Massagem, fisioterapia, outros serviços</p>
                    </div>
                </div>
                
                <div class="navigation-buttons">
                    <button class="nav-button btn-secondary" disabled>
                        ← Anterior
                    </button>
                    <button class="nav-button btn-primary" id="next-1" onclick="nextQuestion(2)" disabled>
                        Próximo →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- QUESTION 2: TAMANHO DA EQUIPE -->
    <section class="question-section" id="question-2">
        <div class="container">
            <div class="question-card">
                <div class="question-header">
                    <span class="question-icon">👥</span>
                    <h2 class="question-title">Quantos profissionais trabalham no seu estabelecimento?</h2>
                    <p class="question-subtitle">Vamos configurar o sistema para o tamanho da sua equipe</p>
                </div>
                
                <div class="options-grid">
                    <div class="option-card" data-value="solo">
                        <span class="option-icon">👤</span>
                        <h3 class="option-title">Só eu</h3>
                        <p class="option-description">Trabalho sozinho(a)</p>
                    </div>
                    
                    <div class="option-card" data-value="pequena">
                        <span class="option-icon">👥</span>
                        <h3 class="option-title">2-3 pessoas</h3>
                        <p class="option-description">Equipe pequena</p>
                    </div>
                    
                    <div class="option-card" data-value="media">
                        <span class="option-icon">👨‍👩‍👧‍👦</span>
                        <h3 class="option-title">4-8 pessoas</h3>
                        <p class="option-description">Equipe média</p>
                    </div>
                    
                    <div class="option-card" data-value="grande">
                        <span class="option-icon">🏢</span>
                        <h3 class="option-title">9+ pessoas</h3>
                        <p class="option-description">Equipe grande</p>
                    </div>
                </div>
                
                <div class="navigation-buttons">
                    <button class="nav-button btn-secondary" onclick="previousQuestion(1)">
                        ← Anterior
                    </button>
                    <button class="nav-button btn-primary" id="next-2" onclick="nextQuestion(3)" disabled>
                        Próximo →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- QUESTION 3: VOLUME DE ATENDIMENTOS -->
    <section class="question-section" id="question-3">
        <div class="container">
            <div class="question-card">
                <div class="question-header">
                    <span class="question-icon">📊</span>
                    <h2 class="question-title">Quantos clientes você atende por dia?</h2>
                    <p class="question-subtitle">Isso nos ajuda a dimensionar a capacidade do sistema</p>
                </div>
                
                <div class="slider-container">
                    <div class="slider-header">
                        <h3 class="slider-title">Atendimentos por dia</h3>
                        <div class="slider-value" id="attendance-value">15</div>
                    </div>
                    
                    <input type="range" class="custom-slider" id="attendance-slider" 
                           min="1" max="100" value="15" step="1">
                    
                    <div class="slider-labels">
                        <span>1 cliente</span>
                        <span>50 clientes</span>
                        <span>100+ clientes</span>
                    </div>
                </div>
                
                <div class="navigation-buttons">
                    <button class="nav-button btn-secondary" onclick="previousQuestion(2)">
                        ← Anterior
                    </button>
                    <button class="nav-button btn-primary" id="next-3" onclick="nextQuestion(4)">
                        Próximo →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- QUESTION 4: PRINCIPAIS DESAFIOS -->
    <section class="question-section" id="question-4">
        <div class="container">
            <div class="question-card">
                <div class="question-header">
                    <span class="question-icon">🎯</span>
                    <h2 class="question-title">Qual seu maior desafio hoje?</h2>
                    <p class="question-subtitle">Vamos focar em resolver exatamente isso para você</p>
                </div>
                
                <div class="options-grid">
                    <div class="option-card" data-value="no_shows">
                        <span class="option-icon">😤</span>
                        <h3 class="option-title">Clientes Faltosos</h3>
                        <p class="option-description">Muitos não aparecem no horário marcado</p>
                    </div>
                    
                    <div class="option-card" data-value="agenda_confusa">
                        <span class="option-icon">📅</span>
                        <h3 class="option-title">Agenda Confusa</h3>
                        <p class="option-description">Conflitos de horário, duplo agendamento</p>
                    </div>
                    
                    <div class="option-card" data-value="perda_clientes">
                        <span class="option-icon">📱</span>
                        <h3 class="option-title">Perder Agendamentos</h3>
                        <p class="option-description">Clientes ligam fora do horário e não conseguem agendar</p>
                    </div>
                    
                    <div class="option-card" data-value="tempo_admin">
                        <span class="option-icon">⏰</span>
                        <h3 class="option-title">Tempo Administrando</h3>
                        <p class="option-description">Muito tempo organizando agenda no papel/WhatsApp</p>
                    </div>
                    
                    <div class="option-card" data-value="crescimento">
                        <span class="option-icon">📈</span>
                        <h3 class="option-title">Crescer o Negócio</h3>
                        <p class="option-description">Quero mais clientes e melhor organização</p>
                    </div>
                    
                    <div class="option-card" data-value="profissional">
                        <span class="option-icon">⭐</span>
                        <h3 class="option-title">Imagem Profissional</h3>
                        <p class="option-description">Quero passar mais credibilidade</p>
                    </div>
                </div>
                
                <div class="navigation-buttons">
                    <button class="nav-button btn-secondary" onclick="previousQuestion(3)">
                        ← Anterior
                    </button>
                    <button class="nav-button btn-primary" id="next-4" onclick="nextQuestion(5)" disabled>
                        Próximo →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- QUESTION 5: FERRAMENTAS ATUAIS -->
    <section class="question-section" id="question-5">
        <div class="container">
            <div class="question-card">
                <div class="question-header">
                    <span class="question-icon">🛠️</span>
                    <h2 class="question-title">Como você gerencia agendamentos hoje?</h2>
                    <p class="question-subtitle">Vamos facilitar a migração dos seus dados atuais</p>
                </div>
                
                <div class="options-grid">
                    <div class="option-card" data-value="papel">
                        <span class="option-icon">📝</span>
                        <h3 class="option-title">Agenda de Papel</h3>
                        <p class="option-description">Anoto tudo à mão</p>
                    </div>
                    
                    <div class="option-card" data-value="whatsapp">
                        <span class="option-icon">💬</span>
                        <h3 class="option-title">WhatsApp</h3>
                        <p class="option-description">Organizo por conversas</p>
                    </div>
                    
                    <div class="option-card" data-value="planilha">
                        <span class="option-icon">📊</span>
                        <h3 class="option-title">Planilha Excel</h3>
                        <p class="option-description">Uso Excel ou Google Sheets</p>
                    </div>
                    
                    <div class="option-card" data-value="app_simples">
                        <span class="option-icon">📱</span>
                        <h3 class="option-title">App Simples</h3>
                        <p class="option-description">Algum app básico de agenda</p>
                    </div>
                    
                    <div class="option-card" data-value="sistema_pago">
                        <span class="option-icon">💳</span>
                        <h3 class="option-title">Sistema Pago</h3>
                        <p class="option-description">Uso um sistema profissional</p>
                    </div>
                    
                    <div class="option-card" data-value="memoria">
                        <span class="option-icon">🧠</span>
                        <h3 class="option-title">Na Memória</h3>
                        <p class="option-description">Lembro de tudo de cabeça</p>
                    </div>
                </div>
                
                <div class="navigation-buttons">
                    <button class="nav-button btn-secondary" onclick="previousQuestion(4)">
                        ← Anterior
                    </button>
                    <button class="nav-button btn-primary" id="next-5" onclick="nextQuestion(6)" disabled>
                        Próximo →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- QUESTION 6: OBJETIVOS/EXPECTATIVAS -->
    <section class="question-section" id="question-6">
        <div class="container">
            <div class="question-card">
                <div class="question-header">
                    <span class="question-icon">🚀</span>
                    <h2 class="question-title">Qual seu principal objetivo?</h2>
                    <p class="question-subtitle">Vamos personalizar a demonstração com foco no seu objetivo</p>
                </div>
                
                <div class="options-grid">
                    <div class="option-card" data-value="organizar">
                        <span class="option-icon">📋</span>
                        <h3 class="option-title">Organizar a Agenda</h3>
                        <p class="option-description">Eliminar conflitos e bagunça</p>
                    </div>
                    
                    <div class="option-card" data-value="aumentar_vendas">
                        <span class="option-icon">💰</span>
                        <h3 class="option-title">Aumentar Vendas</h3>
                        <p class="option-description">Mais agendamentos e faturamento</p>
                    </div>
                    
                    <div class="option-card" data-value="economizar_tempo">
                        <span class="option-icon">⏰</span>
                        <h3 class="option-title">Economizar Tempo</h3>
                        <p class="option-description">Menos tempo administrativo</p>
                    </div>
                    
                    <div class="option-card" data-value="profissionalizar">
                        <span class="option-icon">⭐</span>
                        <h3 class="option-title">Profissionalizar</h3>
                        <p class="option-description">Imagem mais profissional</p>
                    </div>
                    
                    <div class="option-card" data-value="reduzir_faltas">
                        <span class="option-icon">✅</span>
                        <h3 class="option-title">Reduzir Faltas</h3>
                        <p class="option-description">Menos no-shows e cancelamentos</p>
                    </div>
                    
                    <div class="option-card" data-value="crescer">
                        <span class="option-icon">📈</span>
                        <h3 class="option-title">Crescer o Negócio</h3>
                        <p class="option-description">Escalar e expandir</p>
                    </div>
                </div>
                
                <div class="navigation-buttons">
                    <button class="nav-button btn-secondary" onclick="previousQuestion(5)">
                        ← Anterior
                    </button>
                    <button class="nav-button btn-primary" id="next-6" onclick="showResults()" disabled>
                        Ver Minha Demonstração →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- RESULT SECTION -->
    <section class="result-section" id="result-section">
        <div class="container">
            <div class="result-card">
                <div class="result-icon">🎉</div>
                <h2 class="result-title">Sua Demonstração Está Pronta!</h2>
                <p class="result-subtitle">
                    Personalizamos o sistema especificamente para seu 
                    <span id="business-type-result">estabelecimento</span>
                </p>
                
                <div class="personalized-preview">
                    <h3 class="preview-title">🎯 Sistema Personalizado Para Você:</h3>
                    <div class="preview-items" id="preview-items">
                        <!-- Items serão inseridos dinamicamente -->
                    </div>
                </div>
                
                <button class="final-cta" onclick="bookDemo()">
                    📅 Agendar Minha Demonstração
                </button>
                
                <p class="urgency-text">
                    ⚡ Apenas 3 vagas disponíveis esta semana
                </p>
            </div>
        </div>
    </section>

    <script>
        // =================================================================
        // 🎯 QUALIFICATION SYSTEM - SISTEMA COMPLETO
        // =================================================================
        
        let currentQuestion = 1;
        let answers = {};
        
        const totalQuestions = 6;

        // =================================================================
        // 🚀 INICIALIZAÇÃO
        // =================================================================
        document.addEventListener('DOMContentLoaded', function() {
            console.log('🎯 Qualification System - Iniciando...');
            
            setupOptionCards();
            setupSlider();
            updateProgress();
            
            console.log('✅ Sistema de qualificação carregado');
        });

        // =================================================================
        // 🎴 SETUP OPTION CARDS
        // =================================================================
        function setupOptionCards() {
            const optionCards = document.querySelectorAll('.option-card');
            
            optionCards.forEach(card => {
                card.addEventListener('click', function() {
                    const questionSection = this.closest('.question-section');
                    const questionId = questionSection.id;
                    
                    // Remover seleção anterior na mesma pergunta
                    questionSection.querySelectorAll('.option-card').forEach(c => {
                        c.classList.remove('selected');
                    });
                    
                    // Selecionar esta opção
                    this.classList.add('selected');
                    
                    // Salvar resposta
                    const value = this.getAttribute('data-value');
                    answers[questionId] = {
                        value: value,
                        text: this.querySelector('.option-title').textContent
                    };
                    
                    console.log('✅ Resposta salva:', questionId, answers[questionId]);
                    
                    // Habilitar botão próximo
                    const nextButton = questionSection.querySelector('.btn-primary');
                    if (nextButton) {
                        nextButton.disabled = false;
                    }
                });
            });
        }

        // =================================================================
        // 🎚️ SETUP SLIDER
        // =================================================================
        function setupSlider() {
            const slider = document.getElementById('attendance-slider');
            const valueDisplay = document.getElementById('attendance-value');
            
            if (slider && valueDisplay) {
                slider.addEventListener('input', function() {
                    const value = parseInt(this.value);
                    valueDisplay.textContent = value;
                    
                    // Salvar resposta do slider
                    answers['question-3'] = {
                        value: value,
                        text: `${value} atendimentos por dia`
                    };
                    
                    console.log('✅ Slider atualizado:', value);
                });
                
                // Inicializar com valor padrão
                const initialValue = parseInt(slider.value);
                answers['question-3'] = {
                    value: initialValue,
                    text: `${initialValue} atendimentos por dia`
                };
            }
        }

        // =================================================================
        // 🔄 NAVEGAÇÃO ENTRE PERGUNTAS
        // =================================================================
        function nextQuestion(questionNumber) {
            console.log('➡️ Avançando para pergunta:', questionNumber);
            
            // Ocultar pergunta atual
            document.getElementById(`question-${currentQuestion}`).classList.remove('active');
            
            // Mostrar próxima pergunta
            document.getElementById(`question-${questionNumber}`).classList.add('active');
            
            // Atualizar pergunta atual
            currentQuestion = questionNumber;
            
            // Atualizar progresso
            updateProgress();
            
            // Scroll para o topo
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function previousQuestion(questionNumber) {
            console.log('⬅️ Voltando para pergunta:', questionNumber);
            
            // Ocultar pergunta atual
            document.getElementById(`question-${currentQuestion}`).classList.remove('active');
            
            // Mostrar pergunta anterior
            document.getElementById(`question-${questionNumber}`).classList.add('active');
            
            // Atualizar pergunta atual
            currentQuestion = questionNumber;
            
            // Atualizar progresso
            updateProgress();
            
            // Scroll para o topo
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // =================================================================
        // 📊 SISTEMA DE PROGRESSO
        // =================================================================
        function updateProgress() {
            const progressPercentage = (currentQuestion / totalQuestions) * 100;
            
            // Atualizar barra principal
            const progressBar = document.getElementById('main-progress-bar');
            if (progressBar) {
                progressBar.style.width = `${progressPercentage}%`;
            }
            
            // Atualizar círculo do header
            const headerProgress = document.getElementById('header-progress');
            if (headerProgress) {
                const roundedProgress = Math.round(progressPercentage);
                headerProgress.textContent = `${roundedProgress}%`;
                
                // Atualizar cor do círculo baseado no progresso
                const hue = (roundedProgress / 100) * 120; // 0 = vermelho, 120 = verde
                headerProgress.style.background = `conic-gradient(hsl(${hue}, 70%, 50%) ${progressPercentage}%, rgba(255,255,255,0.2) 0%)`;
            }
            
            // Atualizar steps
            for (let i = 1; i <= totalQuestions; i++) {
                const stepElement = document.getElementById(`step-${i}`);
                if (stepElement) {
                    if (i < currentQuestion) {
                        stepElement.classList.add('completed');
                        stepElement.classList.remove('active');
                        stepElement.innerHTML = '✓';
                    } else if (i === currentQuestion) {
                        stepElement.classList.add('active');
                        stepElement.classList.remove('completed');
                        stepElement.textContent = i;
                    } else {
                        stepElement.classList.remove('active', 'completed');
                        stepElement.textContent = i;
                    }
                }
            }
            
            console.log('📊 Progresso atualizado:', `${progressPercentage}%`);
        }

        // =================================================================
        // 🎉 EXIBIR RESULTADOS PERSONALIZADOS
        // =================================================================
        function showResults() {
            console.log('🎉 Exibindo resultados personalizados...', answers);
            
            // Ocultar pergunta atual
            document.getElementById(`question-${currentQuestion}`).classList.remove('active');
            
            // Mostrar seção de resultados
            document.getElementById('result-section').classList.add('active');
            
            // Personalizar conteúdo baseado nas respostas
            personalizeResults();
            
            // Progresso 100%
            currentQuestion = totalQuestions + 1;
            updateProgress();
            
            // Scroll para o topo
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function personalizeResults() {
            const businessType = answers['question-1']?.text || 'seu estabelecimento';
            const teamSize = answers['question-2']?.text || 'sua equipe';
            const volume = answers['question-3']?.value || 15;
            const challenge = answers['question-4']?.text || 'seus desafios';
            const currentTool = answers['question-5']?.text || 'sua ferramenta atual';
            const objective = answers['question-6']?.text || 'seus objetivos';
            
            // Atualizar tipo de negócio no resultado
            const businessTypeResult = document.getElementById('business-type-result');
            if (businessTypeResult) {
                businessTypeResult.textContent = businessType.toLowerCase();
            }
            
            // Gerar preview personalizado
            const previewItems = document.getElementById('preview-items');
            if (previewItems) {
                previewItems.innerHTML = generatePersonalizedPreview(businessType, teamSize, volume, challenge, currentTool, objective);
            }
        }

        function generatePersonalizedPreview(businessType, teamSize, volume, challenge, currentTool, objective) {
            let items = [];
            
            // Baseado no tipo de negócio
            switch(answers['question-1']?.value) {
                case 'salao_beleza':
                    items.push('<div class="preview-item"><span class="preview-icon">💇‍♀️</span><span class="preview-text">Agendamento por tipo de serviço (corte, coloração, tratamentos)</span></div>');
                    break;
                case 'barbearia':
                    items.push('<div class="preview-item"><span class="preview-icon">✂️</span><span class="preview-text">Sistema otimizado para cortes rápidos e agenda masculina</span></div>');
                    break;
                case 'estetica':
                    items.push('<div class="preview-item"><span class="preview-icon">✨</span><span class="preview-text">Controle de procedimentos e tempo entre sessões</span></div>');
                    break;
                case 'clinica':
                    items.push('<div class="preview-item"><span class="preview-icon">🏥</span><span class="preview-text">Gestão de consultas e histórico de pacientes</span></div>');
                    break;
                default:
                    items.push('<div class="preview-item"><span class="preview-icon">🎯</span><span class="preview-text">Sistema personalizado para seu tipo de serviço</span></div>');
            }
            
            // Baseado no tamanho da equipe
            if (answers['question-2']?.value === 'solo') {
                items.push('<div class="preview-item"><span class="preview-icon">👤</span><span class="preview-text">Interface simplificada para trabalho individual</span></div>');
            } else {
                items.push('<div class="preview-item"><span class="preview-icon">👥</span><span class="preview-text">Gestão de agenda para múltiplos profissionais</span></div>');
            }
            
            // Baseado no volume
            if (volume >= 30) {
                items.push('<div class="preview-item"><span class="preview-icon">🚀</span><span class="preview-text">Sistema de alta performance para grande volume</span></div>');
            } else {
                items.push('<div class="preview-item"><span class="preview-icon">📊</span><span class="preview-text">Controle eficiente adaptado ao seu volume</span></div>');
            }
            
            // Baseado no desafio principal
            switch(answers['question-4']?.value) {
                case 'no_shows':
                    items.push('<div class="preview-item"><span class="preview-icon">📱</span><span class="preview-text">Confirmações automáticas por WhatsApp e SMS</span></div>');
                    break;
                case 'agenda_confusa':
                    items.push('<div class="preview-item"><span class="preview-icon">📅</span><span class="preview-text">Sistema anti-conflitos com alertas inteligentes</span></div>');
                    break;
                case 'perda_clientes':
                    items.push('<div class="preview-item"><span class="preview-icon">🌐</span><span class="preview-text">Agendamento online 24h pelo seu site</span></div>');
                    break;
                case 'tempo_admin':
                    items.push('<div class="preview-item"><span class="preview-icon">⚡</span><span class="preview-text">Automação total para economizar seu tempo</span></div>');
                    break;
                default:
                    items.push('<div class="preview-item"><span class="preview-icon">🎯</span><span class="preview-text">Soluções focadas no seu principal desafio</span></div>');
            }
            
            // Baseado na ferramenta atual
            if (answers['question-5']?.value === 'papel' || answers['question-5']?.value === 'memoria') {
                items.push('<div class="preview-item"><span class="preview-icon">📱</span><span class="preview-text">Migração fácil do método atual para digital</span></div>');
            } else {
                items.push('<div class="preview-item"><span class="preview-icon">🔄</span><span class="preview-text">Importação de dados da ferramenta atual</span></div>');
            }
            
            // Baseado no objetivo
            switch(answers['question-6']?.value) {
                case 'aumentar_vendas':
                    items.push('<div class="preview-item"><span class="preview-icon">💰</span><span class="preview-text">Relatórios de vendas e remarketing automático</span></div>');
                    break;
                case 'economizar_tempo':
                    items.push('<div class="preview-item"><span class="preview-icon">⏰</span><span class="preview-text">Automação completa para economia de tempo</span></div>');
                    break;
                case 'profissionalizar':
                    items.push('<div class="preview-item"><span class="preview-icon">⭐</span><span class="preview-text">Site profissional e imagem premium</span></div>');
                    break;
                default:
                    items.push('<div class="preview-item"><span class="preview-icon">🚀</span><span class="preview-text">Funcionalidades alinhadas com seus objetivos</span></div>');
            }
            
            return items.join('');
        }

        // =================================================================
        // 📅 AGENDAR DEMONSTRAÇÃO
        // =================================================================
        function bookDemo() {
            console.log('📅 Agendando demonstração...', answers);
            
            // Aqui você pode enviar os dados para seu backend
            // e redirecionar para calendário de agendamento
            
            // Para demo, vamos simular:
            alert(`🎉 Perfeito! Seus dados foram salvos:\n\n` +
                  `• Tipo: ${answers['question-1']?.text}\n` +
                  `• Equipe: ${answers['question-2']?.text}\n` +
                  `• Volume: ${answers['question-3']?.text}\n` +
                  `• Desafio: ${answers['question-4']?.text}\n` +
                  `• Ferramenta atual: ${answers['question-5']?.text}\n` +
                  `• Objetivo: ${answers['question-6']?.text}\n\n` +
                  `Redirecionando para agendamento da demonstração...`);
            
            // AQUI VOCÊ FARIA O REDIRECIONAMENTO REAL:
            // window.location.href = '/calendar-booking';
            
            // Ou enviar dados via AJAX:
            // sendQualificationData(answers);
        }

        // Função para enviar dados (exemplo)
        function sendQualificationData(data) {
            fetch('/api/qualification', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                console.log('✅ Dados enviados:', result);
                // Redirecionar após sucesso
                window.location.href = '/calendar-booking';
            })
            .catch(error => {
                console.error('❌ Erro ao enviar dados:', error);
            });
        }

        console.log('🎯 Qualification System - Carregado e pronto!');
    </script>
</body>
</html>