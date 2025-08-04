<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRON FORGE - Barbearia Premium</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300;400;500;700;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: #0d0d0d;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* LAYOUT REVOLUCIONÁRIO - NAVEGAÇÃO LATERAL VERTICAL */
        .sidebar-nav {
            position: fixed;
            left: 0;
            top: 0;
            width: 300px;
            height: 100vh;
            background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%);
            z-index: 1000;
            border-right: 3px solid #d4af37;
            display: flex;
            flex-direction: column;
            padding: 2rem 0;
            transform: translateX(-250px);
            transition: transform 0.4s ease;
        }

        .sidebar-nav.open {
            transform: translateX(0);
        }

        .nav-toggle {
            position: fixed;
            left: 20px;
            top: 20px;
            z-index: 1001;
            background: linear-gradient(45deg, #d4af37, #b8860b);
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #0d0d0d;
            font-weight: 900;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
        }

        .nav-toggle:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.5);
        }

        .logo-section {
            text-align: center;
            padding: 0 2rem 3rem;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }

        .logo {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            font-weight: 400;
            color: #d4af37;
            letter-spacing: 3px;
            margin-bottom: 0.5rem;
        }

        .tagline {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-menu {
            flex: 1;
            padding: 3rem 0;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .nav-item {
            position: relative;
            padding: 0 2rem;
        }

        .nav-link {
            display: block;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 1rem 1.5rem;
            position: relative;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 0;
            background: linear-gradient(90deg, #d4af37, transparent);
            transition: width 0.3s ease;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #d4af37;
            border-left-color: #d4af37;
            transform: translateX(10px);
        }

        /* MAIN CONTENT - DESLOCADO PARA DIREITA */
        .main-content {
            margin-left: 50px;
            min-height: 100vh;
        }

        /* HERO SECTION - SPLIT DIAGONAL ASSIMÉTRICO */
        .hero-section {
            height: 100vh;
            position: relative;
            display: flex;
            overflow: hidden;
        }

        .hero-left {
            flex: 0.6;
            background: linear-gradient(135deg, #0d0d0d 0%, #1a1a1a 100%);
            position: relative;
            display: flex;
            align-items: center;
            padding: 0 4rem;
            clip-path: polygon(0 0, 85% 0, 75% 100%, 0 100%);
        }

        .hero-right {
            flex: 0.4;
            background: linear-gradient(45deg, #d4af37, #b8860b);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            font-weight: 900;
            color: rgba(0, 0, 0, 0.3);
        }

        .hero-content h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(4rem, 8vw, 8rem);
            color: #ffffff;
            line-height: 0.9;
            margin-bottom: 2rem;
            letter-spacing: 2px;
        }

        .hero-content .highlight {
            color: #d4af37;
            display: block;
            font-size: 1.2em;
        }

        .hero-content p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 3rem;
            max-width: 500px;
        }

        .cta-group {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .primary-cta {
            background: linear-gradient(45deg, #d4af37, #b8860b);
            color: #0d0d0d;
            padding: 1.2rem 3rem;
            text-decoration: none;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 100%, 15px 100%);
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .primary-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
        }

        .secondary-cta {
            color: #d4af37;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 2px solid #d4af37;
            padding-bottom: 5px;
            transition: all 0.3s ease;
        }

        .secondary-cta:hover {
            color: #ffffff;
            border-bottom-color: #ffffff;
        }

        /* SEÇÃO SERVIÇOS - LAYOUT HEXAGONAL */
        .services-section {
            padding: 8rem 4rem;
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            position: relative;
        }

        .section-header {
            text-align: center;
            margin-bottom: 6rem;
        }

        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 4rem;
            color: #ffffff;
            margin-bottom: 1rem;
            letter-spacing: 2px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            max-width: 600px;
            margin: 0 auto;
        }

        /* GRID HEXAGONAL ÚNICO */
        .services-hexgrid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            perspective: 1000px;
        }

        .hex-service {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(212, 175, 55, 0.3);
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
            transition: all 0.5s ease;
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            cursor: pointer;
        }

        .hex-service:hover {
            transform: rotateY(10deg) translateY(-20px);
            border-color: #d4af37;
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
        }

        .hex-service::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(212, 175, 55, 0.1), transparent);
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .hex-service:hover::before {
            opacity: 1;
        }

        .service-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .service-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem;
            color: #d4af37;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }

        .service-desc {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.5;
            font-size: 0.95rem;
        }

        /* SEÇÃO SOBRE - LAYOUT ANGULAR */
        .about-section {
            padding: 8rem 4rem;
            background: linear-gradient(45deg, #0d0d0d 0%, #1a1a1a 50%, #0d0d0d 100%);
            position: relative;
        }

        .about-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }

        .about-content h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3.5rem;
            color: #ffffff;
            margin-bottom: 2rem;
            line-height: 1.1;
        }

        .about-content p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-box {
            background: rgba(212, 175, 55, 0.1);
            border: 1px solid rgba(212, 175, 55, 0.3);
            padding: 2rem;
            text-align: center;
            clip-path: polygon(10% 0%, 90% 0%, 100% 25%, 100% 75%, 90% 100%, 10% 100%, 0% 75%, 0% 25%);
        }

        .stat-number {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: #d4af37;
            display: block;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .about-visual {
            position: relative;
            height: 500px;
            background: linear-gradient(135deg, #d4af37, #b8860b);
            clip-path: polygon(0 0, 85% 0, 100% 15%, 100% 100%, 15% 100%, 0 85%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
            color: rgba(0, 0, 0, 0.3);
            font-weight: 900;
        }

        /* GALERIA - LAYOUT MASONRY */
        .gallery-section {
            padding: 8rem 4rem;
            background: #0d0d0d;
        }

        .gallery-masonry {
            columns: 4;
            column-gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-item {
            background: linear-gradient(45deg, #d4af37, #b8860b);
            margin-bottom: 2rem;
            break-inside: avoid;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-item:nth-child(odd) {
            height: 200px;
        }

        .gallery-item:nth-child(even) {
            height: 300px;
        }

        .gallery-item:nth-child(3n) {
            height: 250px;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.3);
        }

        .gallery-content {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 700;
            color: rgba(0, 0, 0, 0.7);
        }

        /* CONTATO - LAYOUT DIAGONAL */
        .contact-section {
            padding: 8rem 4rem;
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            position: relative;
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.03);
            padding: 4rem;
            clip-path: polygon(0 0, 90% 0, 100% 100%, 10% 100%);
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        .contact-form {
            background: rgba(212, 175, 55, 0.05);
            padding: 4rem;
            clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(212, 175, 55, 0.3);
            color: #ffffff;
            padding: 1rem;
            font-size: 1rem;
            clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 100%, 10px 100%);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.2);
        }

        .submit-btn {
            background: linear-gradient(45deg, #d4af37, #b8860b);
            color: #0d0d0d;
            border: none;
            padding: 1.2rem 3rem;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
            clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 100%, 15px 100%);
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }

        /* RESPONSIVO */
        @media (max-width: 768px) {
            .sidebar-nav {
                width: 100%;
                transform: translateX(-100%);
            }

            .main-content {
                margin-left: 0;
            }

            .hero-left {
                clip-path: none;
            }

            .hero-section {
                flex-direction: column;
            }

            .services-hexgrid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hex-service {
                clip-path: none;
                border-radius: 15px;
            }

            .about-container,
            .contact-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .contact-info,
            .contact-form {
                clip-path: none;
                border-radius: 15px;
            }

            .gallery-masonry {
                columns: 2;
            }
        }

        /* ANIMAÇÕES ÚNICAS */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-in {
            animation: slideInLeft 0.8s ease forwards;
        }

        /* SCROLL EFFECTS */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- NAVEGAÇÃO LATERAL REVOLUCIONÁRIA -->
    <button class="nav-toggle" id="navToggle">☰</button>
    
    <nav class="sidebar-nav" id="sidebarNav">
        <div class="logo-section">
            <div class="logo">IRON FORGE</div>
            <div class="tagline">Premium Barbershop</div>
        </div>
        
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#inicio" class="nav-link active">Início</a>
            </li>
            <li class="nav-item">
                <a href="#servicos" class="nav-link">Serviços</a>
            </li>
            <li class="nav-item">
                <a href="#sobre" class="nav-link">Sobre</a>
            </li>
            <li class="nav-item">
                <a href="#galeria" class="nav-link">Galeria</a>
            </li>
            <li class="nav-item">
                <a href="#contato" class="nav-link">Contato</a>
            </li>
        </ul>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="main-content">
        <!-- HERO DIAGONAL ASSIMÉTRICO -->
        <section class="hero-section" id="inicio">
            <div class="hero-left">
                <div class="hero-content">
                    <h1>
                        IRON
                        <span class="highlight">FORGE</span>
                    </h1>
                    <p>Onde a tradição encontra a precisão moderna. Mais que uma barbearia - uma forja de estilo masculino autêntico.</p>
                    <div class="cta-group">
                        <a href="#contato" class="primary-cta">Reservar Horário</a>
                        <a href="#sobre" class="secondary-cta">Conheça Nossa Arte</a>
                    </div>
                </div>
            </div>
            <div class="hero-right">
                ⚔️
            </div>
        </section>

        <!-- SERVIÇOS HEXAGONAIS -->
        <section class="services-section" id="servicos">
            <div class="section-header">
                <h2 class="section-title">SERVIÇOS DE ELITE</h2>
                <p class="section-subtitle">Cada serviço é executado com precisão artesanal e paixão pela excelência masculina</p>
            </div>
            
            <div class="services-hexgrid">
                <div class="hex-service reveal">
                    <span class="service-icon">✂️</span>
                    <h3 class="service-title">CORTE PREMIUM</h3>
                    <p class="service-desc">Técnicas clássicas e modernas para criar o corte perfeito para seu estilo</p>
                </div>
                
                <div class="hex-service reveal">
                    <span class="service-icon">🪒</span>
                    <h3 class="service-title">BARBEAR CLÁSSICO</h3>
                    <p class="service-desc">A arte ancestral do barbear com navalha, toalhas quentes e produtos premium</p>
                </div>
                
                <div class="hex-service reveal">
                    <span class="service-icon">👨‍🦲</span>
                    <h3 class="service-title">DESIGN DE BARBA</h3>
                    <p class="service-desc">Modelagem profissional para realçar sua masculinidade única</p>
                </div>
            </div>
        </section>

        <!-- SOBRE - LAYOUT ANGULAR -->
        <section class="about-section" id="sobre">
            <div class="about-container">
                <div class="about-content">
                    <h2>A FORJA DA EXCELÊNCIA</h2>
                    <p>Desde 2018, a Iron Forge revoluciona o conceito de barbearia em São Paulo. Combinamos técnicas tradicionais com inovação moderna para criar experiências únicas.</p>
                    <p>Nossa filosofia é simples: cada homem merece um atendimento que reflita sua personalidade e estilo. Por isso, investimos em formação contínua e equipamentos de última geração.</p>
                    
                    <div class="about-stats">
                        <div class="stat-box">
                            <span class="stat-number">6+</span>
                            <span class="stat-label">Anos</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">3K+</span>
                            <span class="stat-label">Clientes</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Barbeiros</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">96%</span>
                            <span class="stat-label">Satisfação</span>
                        </div>
                    </div>
                </div>
                
                <div class="about-visual reveal">
                    TRADIÇÃO
                </div>
            </div>
        </section>

        <!-- GALERIA MASONRY -->
        <section class="gallery-section" id="galeria">
            <div class="section-header">
                <h2 class="section-title">GALERIA</h2>
                <p class="section-subtitle">Cada trabalho é uma obra de arte masculina</p>
            </div>
            
            <div class="gallery-masonry">
                <div class="gallery-item">
                    <div class="gallery-content">Cortes</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Barba</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Ambiente</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Tradição</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Precisão</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Estilo</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Arte</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-content">Masters</div>
                </div>
            </div>
        </section>

        <!-- CONTATO DIAGONAL -->
        <section class="contact-section" id="contato">
            <div class="section-header">
                <h2 class="section-title">CONTATO</h2>
                <p class="section-subtitle">Reserve seu horário na forja da excelência masculina</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <h3 style="color: #d4af37; font-family: 'Bebas Neue', sans-serif; font-size: 2rem; margin-bottom: 2rem;">NOSSA BASE</h3>
                    <p style="margin-bottom: 1.5rem; color: rgba(255,255,255,0.8);">📍 Rua Augusta, 456 - Consolação<br>São Paulo - SP</p>
                    <p style="margin-bottom: 1.5rem; color: rgba(255,255,255,0.8);">📞 (11) 9999-9999<br>Segunda a Sábado, 9h às 20h</p>
                    <p style="color: rgba(255,255,255,0.8);">✉️ contato@ironforge.com.br<br>@ironforge.barbershop</p>
                </div>
                
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Seu Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Seu E-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="WhatsApp" required>
                        </div>
                        <div class="form-group">
                            <textarea rows="4" placeholder="Conte-nos sobre o estilo que você busca..."></textarea>
                        </div>
                        <button type="submit" class="submit-btn">FORJAR AGENDAMENTO</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Toggle navegação lateral
        const navToggle = document.getElementById('navToggle');
        const sidebarNav = document.getElementById('sidebarNav');
        let isNavOpen = false;

        navToggle.addEventListener('click', () => {
            isNavOpen = !isNavOpen;
            sidebarNav.classList.toggle('open', isNavOpen);
            navToggle.textContent = isNavOpen ? '✕' : '☰';
        });

        // Fechar nav ao clicar em link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                isNavOpen = false;
                sidebarNav.classList.remove('open');
                navToggle.textContent = '☰';
            });
        });

        // Smooth scroll
        document.querySelectorAll('.nav-link, .primary-cta, .secondary-cta').forEach(link => {
            link.addEventListener('click', function(e) {
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

        // Reveal animação
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });

        // Navegação ativa
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>