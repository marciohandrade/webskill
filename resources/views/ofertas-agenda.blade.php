<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Skill - Sistema de Agendamento para Salões</title>
    <link rel="icon" type="image/png" href="{{url('outros/img/faviconWS.png')}}">
    @livewireStyles
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        /* RESET UNIVERSAL */
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

        /* HEADER */
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
            text-align: center;
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
            margin-top: 80px;
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

        /* PLANOS SECTION */
        .plans-preview {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .plans-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 60px auto 0;
            max-width: 800px;
            align-items: start;
        }

        .plan-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .plan-card:hover {
            transform: translateY(-10px);
            border-color: #ff6b35;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .plan-card.featured {
            border-color: #ff6b35;
            transform: scale(1.08);
            transform-origin: top center;
        }

        .plan-card.featured::before {
            content: "MAIS POPULAR";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #ff6b35;
            color: white;
            padding: 12px 8px;
            font-size: 14px;
            font-weight: 700;
            text-align: center;
        }

        .plan-trial {
            border: 3px solid #28a745;
            position: relative;
        }

        .plan-trial::before {
            content: "✨ TESTE GRÁTIS";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #28a745;
            color: white;
            padding: 12px 8px;
            font-size: 14px;
            font-weight: 700;
            text-align: center;
        }

        .plan-name {
            font-size: 24px;
            font-weight: 800;
            color: #000;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .plan-name.trial {
            color: #28a745;
        }

        .plan-price {
            font-size: 48px;
            font-weight: 800;
            color: #ff6b35;
            margin-bottom: 5px;
        }

        .plan-price.trial {
            color: #28a745;
        }

        .plan-period {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            padding: 8px 0;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
        }

        .plan-features li::before {
            content: "✓";
            color: #ff6b35;
            font-weight: 700;
            font-size: 16px;
        }

        .plan-cta {
            background: #ff6b35;
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
            width: 100%;
        }

        .plan-cta:hover {
            background: #e55a2b;
            transform: translateY(-2px);
        }

        .plan-cta.trial-btn {
            background: #28a745;
            border: none;
        }

        .trial-info {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #666;
        }

        .upgrade-info {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #fff;
            background: rgba(255,107,53,0.8);
            padding: 8px;
            border-radius: 8px;
        }

        /* VALOR TRIAL SECTION */
        .trial-value {
            text-align: center;
            margin-top: 200px;
            padding: 30px;
            background: linear-gradient(135deg, #28a745, #20c997);
            border-radius: 20px;
            color: white;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .trial-value h3 {
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .trial-value p {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .trial-stats {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-top: 25px;
        }

        .trial-stat {
            text-align: center;
        }

        .trial-stat-number {
            font-size: 32px;
            font-weight: 800;
        }

        .trial-stat-label {
            font-size: 14px;
            opacity: 0.9;
        }

        /* VALUE STACK SECTION */
        .value-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .value-section h2 {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #000;
        }

        .value-section p {
            text-align: center;
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }

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
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .professional-migration {
            text-align: center;
            margin-top: 40px;
            padding: 25px;
            background: white;
            border-radius: 15px;
            border: 2px solid #ff6b35;
        }

        .professional-migration h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #ff6b35;
            font-weight: 800;
        }

        .professional-migration p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .professional-benefits {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .professional-benefit {
            color: #28a745;
            font-weight: 600;
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

        /* FOUNDER SECTION */
        .founder {
            background: #f8f9fa;
            padding: 100px 0;
        }

        .founder-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 60px;
            align-items: center;
        }

        .founder-image-container {
            text-align: center;
        }

        .founder-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            margin: 0 auto 20px;
            box-shadow: 0 20px 60px rgba(255,107,53,0.2);
            position: relative;
            border: 4px solid #ff6b35;
            overflow: hidden;
        }

        .founder-image img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .founder-badge {
            background: #ff6b35;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
        }

        .founder-content h3 {
            font-size: 36px;
            font-weight: 800;
            color: #000;
            margin-bottom: 20px;
        }

        .founder-content .highlight {
            color: #ff6b35;
        }

        .founder-text {
            font-size: 18px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .founder-credentials {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            border-left: 4px solid #ff6b35;
        }

        .credentials-title {
            font-size: 16px;
            font-weight: 700;
            color: #000;
            margin-bottom: 15px;
        }

        .credentials-list {
            list-style: none;
        }

        .credentials-list li {
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .credentials-list li::before {
            content: "✓";
            color: #ff6b35;
            font-weight: 700;
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

        /* FORM DEMO */
        .form-demo {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            margin-top: 20px;
        }

        .form-demo input {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-demo button {
            width: 100%;
            padding: 18px;
            background: #ff6b35;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-demo button:hover {
            background: #e55a2b;
            transform: translateY(-2px);
        }

        /* FOOTER */
        .footer {
            background: #f8f9fa;
            padding: 40px 0;
            text-align: center;
            color: #666;
        }

        /* RESPONSIVE - CORRIGIDO E MELHORADO */
        @media (max-width: 768px) {
            /* Header */
            .header {
                padding: 15px 0;
            }
            
            .logo-main { 
                font-size: 24px; 
            }
            
            .logo-tagline { 
                font-size: 9px; 
            }
            
            .header-cta {
                padding: 8px 16px;
                font-size: 14px;
            }
            
            /* Hero */
            .hero {
                padding: 100px 0 80px;
                margin-top: 70px;
            }
            
            .hero-title { 
                font-size: 32px;
                line-height: 1.2;
            }
            
            .hero-subtitle { 
                font-size: 18px;
                margin-bottom: 30px;
            }
            
            .badge { 
                padding: 12px 24px; 
                font-size: 14px;
                margin-bottom: 30px;
            }
            
            .price-highlight {
                padding: 15px 25px;
                margin-bottom: 30px;
            }
            
            .price-new {
                font-size: 28px;
            }
            
            .hero-cta {
                padding: 18px 40px;
                font-size: 18px;
                margin-bottom: 30px;
            }
            
            .hero-cta-secondary {
                font-size: 18px;
            }
            
            .arrow-down {
                font-size: 30px;
            }
            
            /* App Showcase */
            .app-showcase {
                padding: 60px 0;
            }
            
            .showcase-title { 
                font-size: 28px; 
            }
            
            .showcase-subtitle {
                font-size: 16px;
            }
            
            .devices-container { 
                flex-direction: column; 
                gap: 40px; 
            }
            
            .desktop-frame { 
                width: 100%; 
                max-width: 350px; 
                height: 220px; 
            }
            
            .mobile-frame { 
                width: 220px; 
                height: 400px; 
            }
            
            /* Planos */
            .plans-preview {
                padding: 60px 0;
            }
            
            .plans-grid { 
                grid-template-columns: 1fr;
                max-width: 350px;
                gap: 20px;
            }
            
            .plan-card.featured {
                transform: scale(1);
            }
            
            .plan-card {
                padding: 30px 20px;
            }
            
            .plan-price {
                font-size: 40px;
            }
            
            /* Trial Value */
            .trial-value {
                margin-top: 40px;
                padding: 25px 20px;
                max-width: 95%;
            }
            
            .trial-value h3 {
                font-size: 20px;
            }
            
            .trial-value p {
                font-size: 16px;
            }
            
            .trial-stats { 
                gap: 20px;
                flex-direction: column;
            }
            
            .trial-stat-number {
                font-size: 28px;
            }
            
            /* Value Section */
            .value-section {
                padding: 60px 0;
            }
            
            .value-section h2 {
                font-size: 28px;
            }
            
            .value-section p {
                font-size: 16px;
            }
            
            .value-stack {
                padding: 20px;
                margin: 20px;
            }
            
            .professional-migration {
                margin: 30px 10px 0;
                padding: 20px;
            }
            
            .professional-benefits {
                flex-direction: column;
                gap: 15px;
            }
            
            /* Benefits */
            .benefits {
                padding: 60px 0;
            }
            
            .section-title { 
                font-size: 28px; 
            }
            
            .section-subtitle {
                font-size: 16px;
            }
            
            .benefits-grid { 
                grid-template-columns: 1fr;
                gap: 30px;
                margin-top: 40px;
            }
            
            .benefit-card {
                padding: 30px 20px;
            }
            
            .benefit-icon {
                font-size: 40px;
            }
            
            .benefit-title {
                font-size: 20px;
            }
            
            /* Social Proof */
            .social-proof {
                padding: 60px 0;
            }
            
            .stats-container { 
                gap: 40px;
                flex-direction: column;
            }
            
            .stat-number {
                font-size: 36px;
            }
            
            .testimonials-grid { 
                grid-template-columns: 1fr;
                margin-top: 40px;
            }
            
            .testimonial {
                padding: 25px;
            }
            
            /* Founder */
            .founder {
                padding: 60px 0;
            }
            
            .founder-container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            
            .founder-image {
                width: 200px;
                height: 200px;
                margin: 0 auto 15px;
            }
            
            .founder-content h3 {
                font-size: 28px;
            }
            
            .founder-text {
                font-size: 16px;
            }
            
            .founder-credentials {
                padding: 20px;
            }
            
            /* Form */
            .form-section {
                padding: 60px 0;
            }
            
            .form-title {
                font-size: 28px;
            }
            
            .form-subtitle {
                font-size: 16px;
            }
            
            .urgency-badge {
                padding: 10px 20px;
                font-size: 12px;
                text-align: center;
                line-height: 1.4;
            }
            
            .form-demo {
                padding: 20px;
            }
            
            .form-demo input {
                padding: 12px;
                font-size: 16px;
            }
            
            .form-demo button {
                padding: 15px;
                font-size: 16px;
            }
        }

        /* TABLET RESPONSIVO (768px - 1024px) */
        @media (min-width: 769px) and (max-width: 1024px) {
            .hero-title {
                font-size: 48px;
            }
            
            .hero-subtitle {
                font-size: 20px;
            }
            
            .showcase-title, .section-title {
                font-size: 36px;
            }
            
            .plans-grid {
                max-width: 700px;
            }
            
            .trial-value {
                max-width: 90%;
            }
            
            .founder-container {
                gap: 40px;
            }
            
            .founder-image {
                width: 250px;
                height: 250px;
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
                <div class="badge">🚀 OFERTA DE LANÇAMENTO - Primeiros 50 Estabelecimentos</div>
                
                <h1 class="hero-title">Teste <span class="highlight">Grátis 15 Dias</span><br><br>
                            Sistema que 
                        <span class="highlight">Aumenta 40% os Agendamentos</span><br>Site Profissional + Agenda Online 24h</h1>
                
                <p class="hero-subtitle">Elimine furos na agenda, reduza 80% das faltas e fature mais todo mês</p>
                
                <br><br>
                
                <p><br></p>
                <p><br></p>
                <div class="price-highlight">
                    <div class="price-old">Preço oficial: R$297/mês</div>
                    <div class="price-new">R$97/mês</div>
                    <div class="price-period">Comece Já !</div>
                </div>
                <p></p>
                <p></p>
                <!-- MUDANÇA 5: Garantia visível -->
                <div class="guarantee-badge">
                     🛡️ TRIAL GRÁTIS - Sem cartão de crédito • Cancele quando quiser
                </div>
                <p><br></p>
                <p><br></p>               
                
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

     <!-- NOVA SEÇÃO: PREVIEW DOS PLANOS -->
    <section class="plans-preview" id="plans">
        <div class="container">
            <div class="showcase-header">
                <h2 class="showcase-title">Teste Grátis e Comprove os Resultados</h2>
                <p class="showcase-subtitle">Comece sem compromisso e migre quando ver o aumento dos agendamentos</p>
            </div>
            
            <div class="plans-grid">
                <!-- PLANO TRIAL -->
                <div class="plan-card plan-trial">
                    <div class="plan-name trial">TESTE GRÁTIS</div>
                    <div class="plan-price trial">R$ 0</div>
                    <div class="plan-period">15 dias grátis</div>
                    
                    <ul class="plan-features">
                        <li>🌐 Site profissional responsivo</li>
                        <li>📅 Agendamento online 24h</li>
                        <li>💬 SMS automático</li>
                        <li>📊 Relatórios completos</li>
                        <li>⚡ Configuração em 7 dias</li>
                        <li>🛡️ Suporte técnico incluso</li>
                        <li style="color: #666; font-size: 13px;">Limite: 50 agendamentos/mês</li>
                    </ul>
                    
                    <a href="#form" class="plan-cta trial-btn">Começar Teste Grátis</a>
                    <div class="trial-info">
                        ✅ Sem cartão de crédito<br>
                        ✅ Cancele quando quiser
                    </div>
                </div>

                <!-- PLANO PROFISSIONAL -->
                <div class="plan-card featured">
                    <div class="plan-name">PROFESSIONAL</div>
                    <div class="plan-price">R$ 97</div>
                    <div class="plan-period">/mês</div>
                    
                    <ul class="plan-features">
                        <li>🚀 Tudo do Trial sem limites</li>
                        <li>💬 SMS + WhatsApp ilimitado</li>
                        <li>📈 Relatórios avançados</li>
                        <li>👥 Até 10 profissionais</li>
                        <li>📞 Suporte WhatsApp prioritário</li>
                        <li>🎯 Remarketing automático</li>
                        <li>📋 Lista de espera inteligente</li>
                        <li>🔄 Backup automático</li>
                    </ul>
                    
                    <a href="#form" class="plan-cta">Upgradar Agora</a>
                    <div class="upgrade-info">
                        💎 95% dos clientes upgrade após o trial
                    </div>
                </div>
            </div>

            <!-- VALOR TRIAL -->
            <div class="trial-value">
                <h3>🎯 Por Que Oferecemos Trial Gratuito?</h3>
                <p>
                    Porque sabemos que <strong>em 15 dias você vai ver</strong> sua agenda mais organizada, e 
                    <strong>clientes que seguem nossas práticas veem até 40% mais agendamentos</strong> confirmados!
                </p>
                <div class="trial-stats">
                    <div class="trial-stat">
                        <div class="trial-stat-number">até 7 dias</div>
                        <div class="trial-stat-label">Para configuração</div>
                    </div>
                    <div class="trial-stat">
                        <div class="trial-stat-number">+40%</div>
                        <div class="trial-stat-label"> Aumento registrado em 15 dias</div>
                    </div>
                    <div class="trial-stat">
                        <div class="trial-stat-number">95%</div>
                        <div class="trial-stat-label">Upgrade para Professional</div>
                    </div>
                </div>
                <br>
                <p>
                    <h2>Sem Cartão De Crédito</h2>
                </p>
                <p>
                    <h2>Cancele Quando Quiser</h2>                    
                </p>
                
            </div>
        </div>
    </section>

    <!-- VALUE STACK -->
    <!-- <section style="background: #f8f9fa; padding: 80px 0;"> -->
    <section class="value-section">
        <div class="container">
            <h2 style="text-align: center; font-size: 42px; font-weight: 700; margin-bottom: 40px; color: #000;">
                Tudo Que Você Recebe Grátis no Trial
            </h2>
            <p>Teste por 15 dias sem compromisso e comprove o aumento de agendamentos</p>
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
                    <span><strong>SEU INVESTIMENTO TRIAL:</strong></span>
                    <span><strong>R$ 0,00</strong></span>
                </div>
            </div>
        </div>
    </section>

    <!-- FOUNDER SECTION - MANTIDO IGUAL -->
    <section class="founder">
        <div class="container">
            <div class="founder-container">
                <div class="founder-image-container">
                    <div class="founder-image">
                        <img src="{{url('outros/img/Marcio-Foto-Perfil-WebSkill-1.png')}}" alt="Seu Nome" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                        
                    </div>
                    <div class="founder-badge">Founder & CEO</div>
                </div>
                
                <div class="founder-content">
                    <h3>Oi, eu sou <span class="highlight">Marcio Holanda</span></h3>
                   <p class="founder-text">
                        Há mais de 26 anos desenvolvendo soluções tecnológicas em Empresas Nacionais e Multinacionais, nos últimos anos dediquei toda essa experiência à <strong>Web Skill</strong> - ajudando pequenos negócios a eliminar tarefas chatas e focar no que realmente importa: seus clientes.
                        <p>O WS-agenda nasceu da necessidade real: liberar você das tarefas administrativas chatas (como controlar agendamentos) e permitir que foque 100% no que realmente importa - seus clientes!</p>
                        <br>
                        Porque sua energia deve estar no atendimento, na qualidade do serviço ou no crescimento do negócio... não na planilha! 🚀💼📅
                    </p><br><br>
                    
                    <div class="founder-credentials">
                        <div class="credentials-title">Por que confiar em mim:</div>
                        <ul class="credentials-list">
                            <li> 20+ Estabelecimentos transformados com sucesso</li>
                            <li>Desenvolvedor certificado em sistemas web</li>
                            <li>Especialista em automação para pequenos negócios</li>
                            <li>Suporte pessoal em todos os projetos</li>
                        </ul>
                    </div>
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
                            <div class="author-business">Consultório Odontologico - São Paulo</div>
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
                <p><br><br></p>
                  <h2 class="form-title">Começar Trial Gratuito de <br>15 Dias</h2>
                <p class="form-subtitle">Preencha abaixo e eu entro em contato em até 2 horas <br> para confirmar sua participação</p>
                
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
        /* console.log('🚀 PÁGINA PRINCIPAL - Script carregando...'); */

        // =================================================================
        // 📱 FORMATAÇÃO DE TELEFONE (função principal)
        // =================================================================
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

        // =================================================================
        // 🍞 POPUP SUCCESS SYSTEM (versão simplificada - só botão fechar)
        // =================================================================
        (function() {
            /* console.log('🔧 POPUP SYSTEM - Versão simplificada...'); */
            
            function closeSuccessPopup() {
                /* console.log('🔧 Fechando popup...'); */
                
                const popup = document.getElementById('success-popup');
                
                if (!popup) {
                    /* console.log('❌ ERRO: Popup não encontrado'); */
                    return;
                }
                
                // Animação de saída
                popup.classList.add('closing');
                /* console.log('✅ Classe closing adicionada'); */
                
                // Remover após animação
                setTimeout(() => {
                    if (popup && popup.parentNode) {
                        popup.remove();
                        /* console.log('✅ Popup removido do DOM'); */
                    }
                    
                    // Limpar mensagem do Livewire
                    if (typeof Livewire !== 'undefined' && Livewire.find) {
                        try {
                            const wireElement = document.querySelector('[wire\\:id]');
                            if (wireElement) {
                                const component = Livewire.find(wireElement.getAttribute('wire:id'));
                                if (component) {
                                    component.call('clearSuccess');
                                    /* console.log('✅ Livewire clearSuccess chamado'); */
                                }
                            }
                        } catch (e) {
                            /* console.log('❌ Erro ao chamar Livewire:', e.message); */
                        }
                    }
                }, 400);
            }

            // Expor função globalmente para os botões
            window.closeSuccessPopup = closeSuccessPopup;            

        })();

        // =================================================================
        // 📜 SMOOTH SCROLL (funcionalidade da página)
        // =================================================================
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

        // =================================================================
        // 🎯 INTEGRAÇÃO LIVEWIRE (eventos e funcionalidades)
        // =================================================================
        /* document.addEventListener('livewire:init', () => {
            console.log('🎯 LIVEWIRE - Inicializado');
            
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
        }); */

        // =================================================================
        // 🎲 FUNCIONALIDADES EXTRAS (escassez, etc)
        // =================================================================
        function updateVagas() {
            const vagas = Math.floor(Math.random() * 4) + 3; // Entre 3-6 vagas
            const vagasElement = document.getElementById('vagas-restantes');
            if (vagasElement && !vagasElement.closest('.urgency-badge').textContent.includes('Parabéns')) {
                vagasElement.innerHTML = vagas;
            }
        }

        // Funcionalidade para paste no campo WhatsApp
        document.addEventListener('DOMContentLoaded', function() {
            /* console.log('🚀 DOM - Carregado completamente'); */
            
            const whatsappInput = document.getElementById('whatsapp-input');
            if (whatsappInput) {
                whatsappInput.addEventListener('paste', function(e) {
                    setTimeout(() => {
                        formatPhoneNumber(this);
                    }, 10);
                });
                /* console.log('📱 WhatsApp input - Event listeners configurados'); */
            }
            
            // Inicializar funções
            updateVagas();
        });

        /* console.log('🚀 PÁGINA PRINCIPAL - Script finalizado'); */
        
    </script>
</body>
</html>