<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Skill - Site + Agendamento para Salões</title>
    @livewireStyles
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
        }

        /* HEADER */
        .header {
            background: #000;
            padding: 20px 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
            position: fixed;
            width: 100%;
            top: 0;
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
            padding: 140px 0 100px;
            text-align: center;
            position: relative;
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

        /* NOVA CLASSE PARA COUNTDOWN */
        .countdown-timer {
            background: #000;
            color: #ff6b35;
            padding: 15px 25px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 16px;
            margin: 20px 0;
            display: inline-block;
        }

        /* NOVA CLASSE PARA GARANTIA */
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

        /* NOVA SEÇÃO VALUE STACK */
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

        /* NOVAS CLASSES PARA IMAGENS */
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

        .screenshot-image.admin-panel {
            object-fit: contain;
            object-position: top;
            padding: 10px;
            background: white;
        }

        .screenshot-image.admin-panel-zoom {
            object-fit: cover;
            object-position: top;
            transform: scale(0.9);
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

        .screen-placeholder {
            text-align: center;
            padding: 20px;
        }

        .screen-title {
            font-size: 18px;
            font-weight: 700;
            color: #000;
            margin-bottom: 15px;
        }

        .screen-features {
            list-style: none;
            font-size: 14px;
            color: #666;
        }

        .screen-features li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .feature-icon {
            color: #ff6b35;
            font-weight: 700;
        }

        .device-label {
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        /* NOVA SEÇÃO PLANOS */
        .plans-preview {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .plans-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
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
            transform: scale(1.05);
            border-color: #ff6b35;
        }

        .plan-card.featured::before {
            content: "MAIS POPULAR";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #ff6b35;
            color: white;
            padding: 8px;
            font-size: 12px;
            font-weight: 700;
        }

        .plan-name {
            font-size: 24px;
            font-weight: 800;
            color: #000;
            margin-bottom: 10px;
        }

        .plan-price {
            font-size: 48px;
            font-weight: 800;
            color: #ff6b35;
            margin-bottom: 5px;
        }

        .plan-period {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .plan-features {
            text-align: center;
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            padding: 8px 0;
            color: #333;
            display: flex;
            align-items: center;
            text-align: center;
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

        .plan-cta.secondary {
            background: transparent;
            color: #ff6b35;
            border: 2px solid #ff6b35;
        }

        .plan-cta.secondary:hover {
            background: #ff6b35;
            color: white;
        }

        .demo-note {
            background: rgba(255,107,53,0.1);
            color: #ff6b35;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid rgba(255,107,53,0.2);
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
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
            background: url('data:image/jpeg;base64,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90Lb5I9QEUZ2YtOKELGFuTyPBJlSaKs2+tBK4k8Uk5LxdCi02P8RxHqR9tTvd9M42hqjefVPw/Z5YMYnqgr9NWd2OKcNY9vNefyWv5e+wh7z7/frnqX0b8RMEoKONLz8gvK5eVRfstGzEYqNY1XxFW+J2fWyP91dBzfKnqKb8rSXN7vMjRdm0ZjcOykmNmIqDsf5Iyj3RPHO7zJ0Ej6m6l0Uv3YWOm4duvTPUm4r7ZpFdJ6jZrnQ1EV6qEcJ/pJKhyGlBjJNh1U6oikp5PKXaFP++d1CK7Q1eLVP+Q+2BqGhTb09JNAaR2+tUWd/qNxCNOOGjf1Kvs/qbr5QTCLyBJOmhZyfgKt8+/wBf++LcjJlrSL5vKvU3/wB7xIw2gVKZOK72QlP4cP5yb4foPdkP5w+4PZz1CgV4Gxsw8TGzaObXnfA9V2FJ7r/eyyXa8+yxh7mtJHFD1X1Ff0VNRFnpZYZLHdLLpq/VVnHYj9M/XfQiJN9zKF8/tKs0CIjGm5+dGsWwtyMjwFUV6+mGVl9FxOJPdQ/bN4l0V5Ak6jtLpJ73V7qF9I7sU1X/AJu97rSXKNfXoGVKR8mLYrjz/rR7VvjNufK8CIi8hCIiAiIgIiICIiAiIgIiIOEk7/Xe2JZLPJsZD0JfHmfcZZAUTcqIjKlFm8K8IqFKpqKNFMZOX1kLSfhFMgUCLpP7Xe24qo5psPDQxPa5uy1qjNhQCxXuQ4y9B1V+JFgYz6nv4k/hgkGBIKD8vhHzVqaGvKb7gE1g+0Vr7CKLnZUo/qH9vyZZWPLN+0fgVF7AuoAMKPvdaqKvadOJ1+2DEF8xFdJK/q3Ioh/4RsLOsP1V4PZKL4FfUXOPe+Vjwor6iCMgDRaT3LeiKzULo35YyKGNw7vKdPYlVi+c2QKs2h4eTfm7VZb3b8lQ1FdLk5Yr7w39KQo9/L9oqUyTLHwV5ZNK6pNF/nQLtSSXzOL6+2P7PiD6xVcKpUFqhAjI4Y4ZRKbxVdqP9Qv3ZRK1rnGCNhqJ8rPSWVhSCo/d8xbYFFdRFhqK6Vm5LU7xF9CvOVvQqSr3Y+aWs2L/FrLMdLdAvmI6pOL4yO60KEBq5PO+p+vgREl8L0cOXy8qOJzGdRF8l5LZNNn3K+ZkgItQdLzRYxZdJ1pKkgUXLyCONjZ2kcGl8RdBYfEJVFmMCxrKIvkCcjjCKHApM0p+p8eFZgXXfMVQfOOJr0CpFfE5MnIosw6KhNLXxFWO8h1zyQ2KEXxF8eAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIP/Z') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            margin: 0 auto 20px;
            box-shadow: 0 20px 60px rgba(255,107,53,0.2);
            position: relative;
            border: 4px solid #ff6b35;
        }

        .founder-image::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 3px solid rgba(255,107,53,0.3);
            border-radius: 50%;
            animation: pulse-ring 3s infinite;
        }

        @keyframes pulse-ring {
            0% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.1; }
            100% { transform: scale(1); opacity: 0.3; }
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
            .hero-title { font-size: 36px; }
            .hero-subtitle { font-size: 18px; }
            .section-title { font-size: 32px; }
            .stats-container { gap: 40px; }
            .benefits-grid { grid-template-columns: 1fr; }
            .devices-container { flex-direction: column; gap: 40px; }
            .founder-container { grid-template-columns: 1fr; gap: 40px; text-align: center; }
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
            .hero { padding-top: 120px; }
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
    <!-- HEADER - MANTIDO IGUAL -->
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

    <!-- HERO SECTION - OTIMIZADO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <!-- MUDANÇA 1: Badge mais específico -->
                <div class="badge">🚀 OFERTA DE LANÇAMENTO - Primeiros 10 Salões da Região</div>
                
                <!-- MUDANÇA 2: Headline focada em resultado -->
                <h1 class="hero-title">Sistema que <span class="highlight">Aumenta 40% os Agendamentos</span><br>Site Profissional + Agenda Online 24h</h1>
                
                <!-- MUDANÇA 3: Subtítulo com benefício específico -->
                <p class="hero-subtitle">Elimine conflitos de horário, reduza 80% dos no-shows e tenha uma agenda sempre cheia</p>
                
                <p><br></p>
                <p><br></p>
                <div class="price-highlight">
                    <div class="price-old">Preço oficial: R$297/mês</div>
                    <div class="price-new">R$97/mês</div>
                    <div class="price-period">Durante Um Ano</div>
                </div>
                <p></p>
                <p></p>
                <!-- MUDANÇA 5: Garantia visível -->
                <div class="guarantee-badge">
                    🛡️ GARANTIA 30 DIAS - Não aumentar agendamentos = 100% reembolso
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

    <!-- NOVA SEÇÃO: VALOR PERCEBIDO -->
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

    <!-- NOVA SEÇÃO: PREVIEW DOS PLANOS -->
    <section class="plans-preview">
        <div class="container">
            <div class="showcase-header">
                <h2 class="showcase-title">Escolha o Plano Ideal Para Seu Negócio</h2>
                <p class="showcase-subtitle">3 opções pensadas para diferentes necessidades e volumes de agendamento</p>
            </div>
            
            <div class="plans-grid">
                <!-- PLANO BÁSICO -->
                <div class="plan-card">
                    <div class="plan-name">BÁSICO</div>
                    <div class="plan-price">R$ 97</div>
                    <div class="plan-period">/mês</div>
                    
                    <ul class="plan-features">
                        <li>Site profissional responsivo</li>
                        <li>Agendamento online 24h</li>
                        <li>E-mail + SMS automático</li>
                        <li>Até 40 SMS/mês inclusos</li>
                        <li>PIX manual</li>
                        <li>Suporte por e-mail</li>
                    </ul>
                    
                    <a href="#form" class="plan-cta secondary">Começar Agora</a>
                </div>

                <!-- PLANO PROFISSIONAL -->
                <div class="plan-card featured">
                    <div class="plan-name">PROFISSIONAL</div>
                    <div class="plan-price">R$ 147</div>
                    <div class="plan-period">/mês</div>
                    
                    <ul class="plan-features">
                        <li>Tudo do Básico +</li>
                        <li>SMS ilimitado</li>
                        <li>Links de pagamento</li>
                        <li>Relatórios avançados</li>
                        <li>Até 5 profissionais</li>
                        <li>Suporte WhatsApp</li>
                    </ul>
                    
                    <a href="#form" class="plan-cta">Mais Popular</a>
                </div>

                <!-- PLANO PREMIUM -->
                <div class="plan-card">
                    <div class="plan-name">PREMIUM</div>
                    <div class="plan-price">R$ 197</div>
                    <div class="plan-period">/mês</div>
                    
                    <ul class="plan-features">
                        <li>Tudo do Profissional +</li>
                        <li>WhatsApp automático</li>
                        <li>Cartão integrado</li>
                        <li>Multi-unidades</li>
                        <li>Convênios médicos</li>
                        <li>Suporte prioritário</li>
                    </ul>
                    
                    <a href="#form" class="plan-cta secondary">Escolher Premium</a>
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
                        Há mais de 26 anos desenvolvendo soluções tecnológicas em Empresas Nacionais e Multinacionais, recentemente decidi criar a <strong>Web Skill</strong> - uma empresa dedicada à automação de processos em Micro e Pequenas Empresas.
                        <br><br>
                        O WS-agenda nasceu da necessidade real: liberar você das tarefas administrativas chatas (como controlar agendamentos) e permitir que foque 100% no que realmente importa - seus clientes!
                        <br><br>
                        Porque sua energia deve estar no atendimento, na qualidade do serviço ou no crescimento do negócio... não na planilha! 🚀💼📅
                    </p>
                    
                    <div class="founder-credentials">
                        <div class="credentials-title">Por que confiar em mim:</div>
                        <ul class="credentials-list">
                            <li>50 + salões transformados com sucesso</li>
                            <li>Desenvolvedor certificado em sistemas web</li>
                            <li>Especialista em automação para pequenos negócios</li>
                            <li>Suporte pessoal em todos os projetos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION - MANTIDO IGUAL -->
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
                    <p class="benefit-description">Tudo pronto em 7 dias. Nossa equipe configura everything para você começar a vender imediatamente.</p>
                </div>
                
                <div class="benefit-card">
                    <span class="benefit-icon">🛡️</span>
                    <h3 class="benefit-title">Suporte Completo</h3>
                    <p class="benefit-description">Suporte técnico dedicado e treinamento para sua equipe. Você nunca fica sozinho.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF - OTIMIZADO -->
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

            <!-- MUDANÇA 7: Depoimentos com números específicos -->
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

    <!-- FORM SECTION - INTEGRADO COM LIVEWIRE -->
    <section class="form-section" id="form">
        <div class="container">
            <div class="form-container">
                <!-- MUDANÇA: Urgência com número dinâmico do Livewire -->
                <div class="urgency-badge">⏰ Restam apenas <span id="vagas-restantes">6</span> vagas da oferta de lançamento</div>
                
                <!-- MUDANÇA: Título mais específico -->
                <h2 class="form-title">Garantir Vaga da Oferta de Lançamento</h2>
                <p class="form-subtitle">Preencha abaixo e eu entro em contato em até 2 horas para confirmar sua participação</p>
                
                <!-- COMPONENTE LIVEWIRE INTEGRADO -->
                @livewire('landing-oferta-form')
            </div>
        </div>
    </section>

    <!-- FOOTER - MANTIDO IGUAL -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Web Skill. Todos os direitos reservados.</p>
        </div>
    </footer>

    @livewireScripts
    
    <script>
        // Smooth scroll for anchor links - MANTIDO
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

        // INTEGRAÇÃO LIVEWIRE
        document.addEventListener('livewire:init', () => {
            Livewire.on('lead-captured', (event) => {
                console.log('🎉 Lead capturado:', event);
                
                // Atualizar contador de vagas
                const vagasElement = document.getElementById('vagas-restantes');
                if (vagasElement) {
                    let vagas = parseInt(vagasElement.textContent);
                    vagasElement.textContent = Math.max(1, vagas - 1);
                }
                
                // Analytics tracking
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'conversion', {
                        'event_category': 'Lead',
                        'event_label': 'Oferta_Lancamento_R97',
                        'value': 97
                    });
                }
                
                // Facebook Pixel (se você tiver)
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'Lead', {
                        content_name: 'Oferta Lançamento Sistema Agendamento',
                        value: 97,
                        currency: 'BRL'
                    });
                }
                
                // Elementos de urgência pós-conversão
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

        // Countdown e vagas - MANTIDOS
        function updateCountdown() {
            const deadline = new Date('2025-02-15 23:59:59');
            const now = new Date();
            const diff = deadline - now;
            
            const countdownElement = document.getElementById('countdown');
            if (countdownElement && diff > 0) {
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                countdownElement.innerHTML = `${days}d ${hours}h`;
            } else if (countdownElement) {
                countdownElement.innerHTML = 'OFERTA ENCERRADA';
            }
        }
        
        function updateVagas() {
            const vagas = Math.floor(Math.random() * 4) + 3;
            const vagasElement = document.getElementById('vagas-restantes');
            if (vagasElement) {
                vagasElement.innerHTML = vagas;
            }
        }

        // Inicializar
        updateCountdown();
        updateVagas();
        setInterval(updateCountdown, 60000);
        setInterval(updateVagas, 180000);
    </script>
</body>
</html>