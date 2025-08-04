<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gentleman's Cut - A Arte de Ser Cavalheiro</title>
    <meta name="description" content="Barbearia premium onde tradição encontra excelência. Cortes clássicos, ambiente sofisticado e atendimento de elite.">
    
    <!-- Critical CSS Inline para performance máxima -->
    <style>
        /* Reset e base otimizada */
        *{margin:0;padding:0;box-sizing:border-box}
        html{scroll-behavior:smooth;font-size:16px}
        body{font-family:'Georgia',serif;line-height:1.6;color:#2c1810;overflow-x:hidden;background:#0f0b08}
        
        /* Variáveis CSS para consistência */
        :root{
            --primary:#d4af37;
            --secondary:#8b4513;
            --dark:#2c1810;
            --cream:#f4f1ec;
            --steel:#6c7b7f;
            --white:#ffffff;
            --light-cream:#faf8f3;
            --transition:all 0.4s cubic-bezier(0.23,1,0.32,1);
            --shadow:0 20px 60px rgba(44,24,16,0.3);
            --light-shadow:0 10px 30px rgba(44,24,16,0.1);
        }
        
        /* Typography hirarquia emocional */
        .hero-title{font-size:clamp(2.2rem,7vw,5.5rem);font-weight:400;letter-spacing:-0.02em;line-height:1.1;color:var(--cream);text-shadow:0 10px 30px rgba(0,0,0,0.5);max-width:800px;margin:0 auto}
        .section-title{font-size:clamp(1.8rem,4.5vw,3.2rem);color:var(--dark);margin-bottom:2rem;position:relative;font-weight:400;line-height:1.2}
        .subtitle{font-family:'Arial',sans-serif;font-size:1.1rem;color:var(--primary);letter-spacing:0.15em;text-transform:uppercase;font-weight:600;margin-bottom:1rem}
        .subtitle-light{color:var(--steel);background:var(--light-cream);padding:0.5rem 1rem;border-radius:25px;display:inline-block}
        
        /* Layout responsivo inteligente */
        .container{max-width:1400px;margin:0 auto;padding:0 2rem}
        .section{padding:5rem 0;position:relative}
        
        /* Header premium com menu mobile */
        header{position:fixed;top:0;width:100%;z-index:1000;transition:var(--transition);backdrop-filter:blur(20px);background:rgba(15,11,8,0.95)}
        .nav{display:flex;justify-content:space-between;align-items:center;padding:1rem 2rem;max-width:1400px;margin:0 auto}
        .logo{font-size:1.8rem;color:var(--primary);font-weight:bold;text-decoration:none;z-index:1001;position:relative}
        .nav-links{display:flex;list-style:none;gap:clamp(0.8rem,2vw,2rem);transition:var(--transition);flex-wrap:wrap;justify-content:flex-end}
        .nav-links a{color:var(--cream);text-decoration:none;transition:var(--transition);position:relative;padding:0.5rem clamp(0.3rem,1vw,1rem);font-size:clamp(0.8rem,1.2vw,1rem);white-space:nowrap}
        .nav-links a:hover{color:var(--primary);transform:translateY(-2px)}
        .nav-links a::after{content:'';position:absolute;bottom:0;left:50%;width:0;height:2px;background:var(--primary);transition:var(--transition);transform:translateX(-50%)}
        .nav-links a:hover::after{width:80%}
        
        /* Menu hamburger */
        .menu-toggle{display:none;flex-direction:column;cursor:pointer;z-index:1001;position:relative}
        .menu-toggle span{width:25px;height:3px;background:var(--cream);margin:3px 0;transition:var(--transition);border-radius:2px}
        .menu-toggle.active span:nth-child(1){transform:rotate(45deg) translate(5px,5px)}
        .menu-toggle.active span:nth-child(2){opacity:0}
        .menu-toggle.active span:nth-child(3){transform:rotate(-45deg) translate(7px,-6px)}
        
        /* Mobile menu */
        .nav-mobile{display:none;position:fixed;top:0;left:0;width:100%;height:100vh;background:rgba(15,11,8,0.98);flex-direction:column;justify-content:center;align-items:center;gap:1.2rem;opacity:0;transform:translateY(-100%);transition:var(--transition)}
        .nav-mobile.active{opacity:1;transform:translateY(0)}
        .nav-mobile a{color:var(--cream);font-size:1.2rem;text-decoration:none;padding:0.8rem 1.5rem;transition:var(--transition);border-radius:8px}
        .nav-mobile a:hover{color:var(--primary);background:rgba(212,175,55,0.1);transform:scale(1.05)}
        
        /* Hero section impactante */
        .hero{height:100vh;background:linear-gradient(135deg,rgba(15,11,8,0.85),rgba(44,24,16,0.9)),url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="grain" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="50" cy="50" r="0.5" fill="%23d4af37" opacity="0.1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');background-size:cover;background-attachment:fixed;display:flex;align-items:center;justify-content:center;text-align:center;position:relative}
        .hero-content{z-index:2;max-width:800px}
        .hero-subtitle{color:var(--primary);margin-bottom:1rem;font-size:1.1rem;letter-spacing:0.2em;background:rgba(212,175,55,0.1);padding:0.5rem 1.5rem;border-radius:25px;border:1px solid rgba(212,175,55,0.3)}
        .hero-description{color:var(--cream);font-size:1.3rem;margin:2rem 0;opacity:0.95;max-width:600px;margin-left:auto;margin-right:auto;line-height:1.7}
        
        /* Botões premium */
        .btn-premium{display:inline-block;background:linear-gradient(45deg,var(--primary),#f4d03f);color:var(--dark);padding:1rem 3rem;text-decoration:none;border-radius:50px;font-weight:bold;transition:var(--transition);position:relative;overflow:hidden;box-shadow:var(--shadow);text-transform:uppercase;letter-spacing:0.1em;margin:0.5rem}
        .btn-premium:hover{transform:translateY(-3px);box-shadow:0 25px 80px rgba(212,175,55,0.4)}
        .btn-premium::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.3),transparent);transition:var(--transition)}
        .btn-premium:hover::before{left:100%}
        
        .btn-secondary{background:transparent;border:2px solid var(--primary);color:var(--cream)}
        .btn-secondary:hover{background:var(--primary);color:var(--dark)}
        
        /* Seções com design sofisticado */
        .services{background:var(--light-cream);position:relative}
        .services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:2.5rem;margin-top:3rem}
        .service-card{background:var(--white);padding:3rem;border-radius:20px;box-shadow:var(--light-shadow);transition:var(--transition);position:relative;overflow:hidden;border-top:4px solid var(--primary)}
        .service-card:hover{transform:translateY(-10px);box-shadow:var(--shadow)}
        .service-icon{width:70px;height:70px;background:linear-gradient(45deg,var(--primary),#f4d03f);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:2rem;font-size:1.8rem;box-shadow:var(--light-shadow)}
        .service-title{font-size:1.6rem;margin-bottom:1rem;color:var(--dark);font-weight:500}
        .service-description{color:var(--steel);line-height:1.7;margin-bottom:1.5rem}
        .service-price{color:var(--primary);font-size:1.4rem;font-weight:bold;margin-top:1rem}
        .service-features{list-style:none;margin:1rem 0}
        .service-features li{color:var(--steel);margin:0.5rem 0;position:relative;padding-left:1.5rem}
        .service-features li::before{content:'✓';color:var(--primary);font-weight:bold;position:absolute;left:0}
        
        /* Depoimentos premium */
        .testimonials{background:var(--dark);color:var(--cream);text-align:center}
        .testimonials-container{max-width:900px;margin:0 auto}
        .testimonial-carousel{position:relative;overflow:hidden;border-radius:20px;background:rgba(212,175,55,0.1);padding:3rem;margin:3rem 0}
        .testimonial{display:none;opacity:0;transition:var(--transition)}
        .testimonial.active{display:block;opacity:1}
        .testimonial-text{font-size:1.3rem;font-style:italic;line-height:1.8;margin-bottom:2rem;color:var(--cream)}
        .testimonial-author{display:flex;align-items:center;justify-content:center;gap:1rem}
        .testimonial-avatar{width:60px;height:60px;border-radius:50%;background:linear-gradient(45deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:var(--white)}
        .testimonial-info h4{color:var(--primary);margin-bottom:0.5rem}
        .testimonial-info p{color:var(--steel);font-size:0.9rem}
        .testimonial-nav{display:flex;justify-content:center;gap:1rem;margin-top:2rem}
        .testimonial-nav button{width:12px;height:12px;border-radius:50%;border:none;background:rgba(212,175,55,0.3);cursor:pointer;transition:var(--transition)}
        .testimonial-nav button.active{background:var(--primary)}
        
        /* Galeria sofisticada */
        .gallery{background:var(--cream)}
        .gallery-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;margin-top:3rem}
        .gallery-item{background:var(--white);border-radius:20px;position:relative;overflow:hidden;cursor:pointer;transition:var(--transition);box-shadow:var(--light-shadow)}
        .gallery-item:hover{transform:scale(1.03);box-shadow:var(--shadow)}
        
        /* Área da imagem - AQUI FICAM AS FOTOS DOS TRABALHOS */
        .gallery-image{width:100%;height:280px;background-size:cover;background-position:center;background-repeat:no-repeat;position:relative}
        
        /* Para usar com tag IMG ao invés de background-image: */
        .gallery-image img{width:100%;height:280px;object-fit:cover;display:block}
        
        /* Overlay no hover */
        .gallery-overlay{position:absolute;top:0;left:0;right:0;bottom:70px;background:rgba(44,24,16,0.9);display:flex;align-items:center;justify-content:center;opacity:0;transition:var(--transition);backdrop-filter:blur(5px)}
        .gallery-item:hover .gallery-overlay{opacity:1}
        .gallery-overlay-content{text-align:center;color:var(--cream);padding:1.5rem}
        .gallery-overlay-content h4{font-size:1.2rem;margin-bottom:0.5rem;color:var(--primary)}
        .gallery-overlay-content p{font-size:0.9rem;opacity:0.9;margin-bottom:1rem;line-height:1.4}
        .gallery-cta{display:inline-block;background:var(--primary);color:var(--dark);padding:0.5rem 1rem;border-radius:25px;font-size:0.8rem;font-weight:bold;text-transform:uppercase;letter-spacing:0.05em;transition:var(--transition)}
        .gallery-cta:hover{background:#f4d03f;transform:scale(1.05)}
        
        /* Legenda sempre visível */
        .gallery-caption{position:absolute;bottom:0;left:0;right:0;background:var(--white);padding:1rem;text-align:center;border-radius:0 0 20px 20px;border-top:1px solid rgba(108,123,127,0.1)}
        .gallery-caption h4{font-size:1rem;color:var(--dark);margin-bottom:0.3rem;font-weight:600}
        .gallery-caption p{font-size:0.85rem;color:var(--steel);margin:0}
        
        /* Sobre nós melhorado */
        .about{background:var(--white);padding:8rem 0}
        .about-content{display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center}
        .about-text{font-size:1.2rem;line-height:1.8}
        .about-text p{margin-bottom:1.5rem;color:var(--steel)}
        .about-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin:3rem 0}
        .stat-item{text-align:center;padding:1.5rem;background:var(--light-cream);border-radius:15px}
        .stat-number{font-size:2.5rem;color:var(--primary);font-weight:bold;display:block}
        .stat-label{color:var(--steel);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.1em}
        .about-image{aspect-ratio:4/3;background:linear-gradient(45deg,var(--secondary),var(--primary));border-radius:20px;position:relative;overflow:hidden;box-shadow:var(--shadow)}
        .about-image::after{content:'👨‍💼';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:4rem}
        
        /* FAQ Section */
        .faq{background:var(--light-cream)}
        .faq-container{max-width:800px;margin:0 auto}
        .faq-item{background:var(--white);margin-bottom:1rem;border-radius:15px;overflow:hidden;box-shadow:var(--light-shadow)}
        .faq-question{padding:1.5rem;cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:var(--transition);border:none;width:100%;text-align:left;background:none;font-size:1.1rem;color:var(--dark);font-weight:500}
        .faq-question:hover{background:var(--light-cream)}
        .faq-icon{color:var(--primary);font-size:1.2rem;transition:var(--transition)}
        .faq-item.active .faq-icon{transform:rotate(45deg)}
        .faq-answer{padding:0 1.5rem;max-height:0;overflow:hidden;transition:var(--transition)}
        .faq-answer.active{padding:0 1.5rem 1.5rem;max-height:200px}
        .faq-answer p{color:var(--steel);line-height:1.7}
        
        /* Equipe */
        .team{background:var(--white)}
        .team-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:2rem;margin-top:3rem}
        .team-member{text-align:center;padding:2rem;background:var(--light-cream);border-radius:20px;transition:var(--transition)}
        .team-member:hover{transform:translateY(-5px);box-shadow:var(--light-shadow)}
        .team-avatar{width:120px;height:120px;border-radius:50%;margin:0 auto 1.5rem;background:linear-gradient(45deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;font-size:2rem;color:var(--white)}
        .team-name{font-size:1.3rem;color:var(--dark);margin-bottom:0.5rem}
        .team-role{color:var(--primary);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.1em;margin-bottom:1rem}
        .team-bio{color:var(--steel);font-size:0.9rem;line-height:1.6}
        
        /* Contato sofisticado */
        .contact{background:var(--dark);color:var(--cream);text-align:center}
        .contact-content{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;text-align:left}
        .contact-info{display:grid;gap:2rem}
        .contact-item{padding:2rem;background:rgba(212,175,55,0.1);border-radius:15px;border:1px solid rgba(212,175,55,0.2);transition:var(--transition)}
        .contact-item:hover{background:rgba(212,175,55,0.15);transform:translateY(-3px)}
        .contact-icon{font-size:2rem;margin-bottom:1rem;color:var(--primary)}
        .contact-form{background:rgba(244,241,236,0.95);padding:3rem;border-radius:20px;color:var(--dark)}
        .form-group{margin-bottom:1.5rem}
        .form-group label{display:block;margin-bottom:0.5rem;color:var(--dark);font-weight:500}
        .form-group input,.form-group textarea{width:100%;padding:1rem;border:2px solid var(--light-cream);border-radius:10px;font-size:1rem;transition:var(--transition);background:var(--white)}
        .form-group input:focus,.form-group textarea:focus{outline:none;border-color:var(--primary);box-shadow:0 0 0 3px rgba(212,175,55,0.1)}
        .form-group textarea{height:120px;resize:vertical}
        
        /* Responsividade simplificada e definitiva */
        @media (max-width:1200px){
            .nav-links{display:none}
            .menu-toggle{display:flex}
            .nav-mobile{display:flex}
        }
        
        @media (max-width:768px){
            .hero-title{font-size:clamp(2rem,9vw,3.2rem);line-height:1.15}
            .about-content{grid-template-columns:1fr;text-align:center}
            .contact-content{grid-template-columns:1fr}
            .services-grid{grid-template-columns:1fr}
            .gallery-grid{grid-template-columns:repeat(2,1fr)}
            .about-stats{grid-template-columns:1fr}
            .team-grid{grid-template-columns:repeat(2,1fr)}
            .section{padding:3rem 0}
            .container{padding:0 1rem}
        }
        
        @media (max-width:480px){
            .hero-title{font-size:2.2rem;line-height:1.2}
            .gallery-grid{grid-template-columns:1fr}
            .team-grid{grid-template-columns:1fr}
        }
        
        /* Animações sutis */
        @keyframes fadeInUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
        .animate{animation:fadeInUp 0.8s ease-out forwards}
        .animate:nth-child(2){animation-delay:0.2s}
        .animate:nth-child(3){animation-delay:0.4s}
        .animate:nth-child(4){animation-delay:0.6s}
        
        /* Scroll indicator removido - botões CTAs são suficientes */
        .scroll-indicator{display:none !important}
        @keyframes bounce{0%,20%,50%,80%,100%{transform:translateX(-50%) translateY(0)}40%{transform:translateX(-50%) translateY(-10px)}60%{transform:translateX(-50%) translateY(-5px)}}
        
        /* WhatsApp Button */
        .whatsapp-float{position:fixed;bottom:2rem;right:2rem;width:60px;height:60px;background:#25d366;border-radius:50%;display:flex;align-items:center;justify-content:center;color:white;font-size:1.5rem;text-decoration:none;box-shadow:var(--shadow);z-index:1000;transition:var(--transition)}
        .whatsapp-float:hover{transform:scale(1.1)}
        
        /* Performance optimizations */
        img{loading:lazy;decoding:async}
        .service-card,.gallery-item,.team-member{will-change:transform}
    </style>
    
    <!-- Preload para performance -->
    <link rel="preload" href="data:font/woff2," as="font" type="font/woff2" crossorigin>
    
</head>
<body>
    <!-- Header premium com menu mobile -->
    <header id="header">
        <nav class="nav">
            <a href="#" class="logo">Gentleman's Cut</a>
            <ul class="nav-links">
                <li><a href="#home">Início</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#team">Equipe</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <div class="nav-mobile" id="navMobile">
            <a href="#home">Início</a>
            <a href="#services">Serviços</a>
            <a href="#gallery">Galeria</a>
            <a href="#testimonials">Depoimentos</a>
            <a href="#about">Sobre</a>
            <a href="#team">Equipe</a>
            <a href="#faq">FAQ</a>
            <a href="#contact">Contato</a>
        </div>
    </header>

    <!-- Hero section impactante -->
    <section class="hero" id="home">
        <div class="hero-content">
            <p class="hero-subtitle">TRADIÇÃO • EXCELÊNCIA • ESTILO</p>
            <h1 class="hero-title">A Arte de Ser<br><span style="color:var(--primary)">Cavalheiro</span></h1>
            <p class="hero-description">
                Onde cada corte é uma obra de arte e cada cliente é tratado como realeza. 
                Experiência premium que honra a tradição barbeira clássica com o melhor da modernidade.
            </p>
            <div style="margin-top:2rem">
                <a href="#services" class="btn-premium">Descobrir Serviços</a>
                <a href="#contact" class="btn-premium btn-secondary">Agendar Agora</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <div style="font-size:1.5rem">↓</div>
            <div style="font-size:0.8rem;margin-top:0.5rem">Role para descobrir</div>
        </div>
    </section>

    <!-- Serviços premium -->
    <section class="services section" id="services">
        <div class="container">
            <div style="text-align:center;margin-bottom:4rem">
                <p class="subtitle">MAESTRIA EM CADA DETALHE</p>
                <h2 class="section-title">Nossos Serviços Premium</h2>
            </div>
            
            <div class="services-grid">
                <div class="service-card animate">
                    <div class="service-icon">✂️</div>
                    <h3 class="service-title">Corte Clássico Premium</h3>
                    <p class="service-description">Técnicas tradicionais com navalha, tesoura e máquina. Acabamento impecável que valoriza suas características únicas com produtos de alta qualidade.</p>
                    <ul class="service-features">
                        <li>Consulta personalizada</li>
                        <li>Toalhas quentes</li>
                        <li>Produtos premium</li>
                        <li>Finalização com gel ou pomada</li>
                    </ul>
                    <div class="service-price">R$ 85</div>
                </div>
                
                <div class="service-card animate">
                    <div class="service-icon">🧔</div>
                    <h3 class="service-title">Barba & Bigode Artístico</h3>
                    <p class="service-description">Modelagem artística com produtos premium. Design personalizado que complementa perfeitamente seu estilo e formato do rosto.</p>
                    <ul class="service-features">
                        <li>Análise facial</li>
                        <li>Aparação com navalha</li>
                        <li>Hidratação profunda</li>
                        <li>Óleo para barba incluso</li>
                    </ul>
                    <div class="service-price">R$ 65</div>
                </div>
                
                <div class="service-card animate">
                    <div class="service-icon">👑</div>
                    <h3 class="service-title">Experiência Gentleman</h3>
                    <p class="service-description">Pacote completo: corte + barba + tratamentos especiais. Relaxamento total com toalhas quentes, massagem e produtos de luxo.</p>
                    <ul class="service-features">
                        <li>Serviço completo</li>
                        <li>Massagem relaxante</li>
                        <li>Tratamento capilar</li>
                        <li>Bebida cortesia</li>
                    </ul>
                    <div class="service-price">R$ 135</div>
                </div>
                
                <div class="service-card animate">
                    <div class="service-icon">💆</div>
                    <h3 class="service-title">Tratamentos Especiais</h3>
                    <p class="service-description">Hidratação profunda, esfoliação e massagem relaxante. Cuidados especiais para cabelo e couro cabeludo com técnicas avançadas.</p>
                    <ul class="service-features">
                        <li>Hidratação capilar</li>
                        <li>Esfoliação do couro</li>
                        <li>Massagem terapêutica</li>
                        <li>Produtos naturais</li>
                    </ul>
                    <div class="service-price">R$ 95</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="testimonials section" id="testimonials">
        <div class="container">
            <div style="text-align:center;margin-bottom:4rem">
                <p class="subtitle">O QUE NOSSOS CLIENTES DIZEM</p>
                <h2 class="section-title" style="color:var(--cream)">Depoimentos Reais</h2>
            </div>
            
            <div class="testimonials-container">
                <div class="testimonial-carousel">
                    <div class="testimonial active">
                        <p class="testimonial-text">"Melhor barbearia de São Paulo! O atendimento é excepcional e o resultado sempre supera minhas expectativas. Já sou cliente há 3 anos e não troco por nada."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">RC</div>
                            <div class="testimonial-info">
                                <h4>Ricardo Campos</h4>
                                <p>Executivo</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial">
                        <p class="testimonial-text">"Ambiente sofisticado, profissionais qualificados e atenção aos detalhes impressionante. Cada visita é uma experiência única de relaxamento e cuidado pessoal."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">MS</div>
                            <div class="testimonial-info">
                                <h4>Marcelo Silva</h4>
                                <p>Empresário</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial">
                        <p class="testimonial-text">"Descobri a Gentleman's Cut por indicação e me tornei cliente fiel imediatamente. A qualidade do serviço e o carinho no atendimento fazem toda diferença."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">JO</div>
                            <div class="testimonial-info">
                                <h4>João Oliveira</h4>
                                <p>Advogado</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-nav">
                    <button class="active" onclick="showTestimonial(0)"></button>
                    <button onclick="showTestimonial(1)"></button>
                    <button onclick="showTestimonial(2)"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria sofisticada -->
    <section class="gallery section" id="gallery">
        <div class="container">
            <div style="text-align:center;margin-bottom:4rem">
                <p class="subtitle subtitle-light">NOSSOS TRABALHOS</p>
                <h2 class="section-title">Galeria de Transformações</h2>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <!-- COLOQUE AQUI A FOTO: exemplo: <img src="foto-corte-executivo.jpg" alt="Corte Executivo"> -->
                    <div class="gallery-image" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22><rect width=%22100%%22 height=%22100%%22 fill=%22%238b4513%22/><text x=%2250%%22 y=%2250%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2224%22 fill=%22%23d4af37%22>FOTO DO CORTE</text></svg>')"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h4>✂️ Transformação Completa</h4>
                            <p>De simples a sofisticado em 60 minutos</p>
                            <span class="gallery-cta">Ver Transformação →</span>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h4>Corte Executivo Premium</h4>
                        <p>Estilo profissional impecável</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <!-- COLOQUE AQUI A FOTO: exemplo: <img src="foto-barba-modelada.jpg" alt="Barba Modelada"> -->
                    <div class="gallery-image" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22><rect width=%22100%%22 height=%22100%%22 fill=%22%23d4af37%22/><text x=%2250%%22 y=%2250%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2224%22 fill=%22%238b4513%22>FOTO DA BARBA</text></svg>')"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h4>🧔 Barba de Gentleman</h4>
                            <p>Modelagem que realça masculinidade</p>
                            <span class="gallery-cta">Quero Esta Barba →</span>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h4>Barba Modelada Premium</h4>
                        <p>Definição e elegância</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <!-- COLOQUE AQUI A FOTO: exemplo: <img src="foto-antes-depois.jpg" alt="Antes e Depois"> -->
                    <div class="gallery-image" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22><rect width=%22100%%22 height=%22100%%22 fill=%22%236c7b7f%22/><text x=%2250%%22 y=%2245%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2218%22 fill=%22%23d4af37%22>ANTES &amp; DEPOIS</text><text x=%2250%%22 y=%2265%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2218%22 fill=%22%23d4af37%22>TRANSFORMAÇÃO</text></svg>')"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h4>👑 Antes & Depois</h4>
                            <p>Veja a diferença que faz nosso trabalho</p>
                            <span class="gallery-cta">Ver Resultado →</span>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h4>Experiência Gentleman</h4>
                        <p>Transformação total</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <!-- COLOQUE AQUI A FOTO: exemplo: <img src="foto-look-corporativo.jpg" alt="Look Corporativo"> -->
                    <div class="gallery-image" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22><rect width=%22100%%22 height=%22100%%22 fill=%22%232c1810%22/><text x=%2250%%22 y=%2245%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22 fill=%22%23d4af37%22>LOOK</text><text x=%2250%%22 y=%2265%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22 fill=%22%23d4af37%22>CORPORATIVO</text></svg>')"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h4>💼 Look Corporativo</h4>
                            <p>Para quem quer impressionar no trabalho</p>
                            <span class="gallery-cta">Agendar Agora →</span>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h4>Estilo Executivo</h4>
                        <p>Presença e autoridade</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <!-- COLOQUE AQUI A FOTO: exemplo: <img src="foto-corte-moderno.jpg" alt="Corte Moderno"> -->
                    <div class="gallery-image" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22><rect width=%22100%%22 height=%22100%%22 fill=%22%23f4f1ec%22/><text x=%2250%%22 y=%2245%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22 fill=%22%232c1810%22>CORTE</text><text x=%2250%%22 y=%2265%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22 fill=%22%232c1810%22>MODERNO</text></svg>')"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h4>✨ Corte Moderno</h4>
                            <p>Tendência atual com toque clássico</p>
                            <span class="gallery-cta">Quero Assim →</span>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h4>Corte Contemporâneo</h4>
                        <p>Moderno e atemporal</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <!-- COLOQUE AQUI A FOTO: exemplo: <img src="foto-degrade-premium.jpg" alt="Degradê Premium"> -->
                    <div class="gallery-image" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22><rect width=%22100%%22 height=%22100%%22 fill=%22%23d4af37%22/><text x=%2250%%22 y=%2245%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22 fill=%22%232c1810%22>DEGRADÊ</text><text x=%2250%%22 y=%2265%%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22 fill=%22%232c1810%22>PREMIUM</text></svg>')"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h4>🎯 Degradê Perfeito</h4>
                            <p>Técnica que só mestres dominam</p>
                            <span class="gallery-cta">Reservar Horário →</span>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h4>Degradê Premium</h4>
                        <p>Precisão e arte</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre nós melhorado -->
    <section class="about section" id="about">
        <div class="container">
            <div class="about-content">
                <div>
                    <p class="subtitle subtitle-light">NOSSA HISTÓRIA</p>
                    <h2 class="section-title">Tradição Familiar Desde 1987</h2>
                    <div class="about-text">
                        <p>Há mais de três décadas, a Gentleman's Cut representa a excelência em cuidados masculinos. Fundada por mestres barbeiros, mantemos viva a tradição dos grandes salões clássicos, onde cada detalhe importa e cada cliente é único.</p>
                        
                        <p>Nosso compromisso vai além do corte perfeito - criamos uma experiência única que combina técnicas centenárias com conforto contemporâneo, sempre respeitando a individualidade e preferências de cada pessoa que confia em nosso trabalho.</p>
                        
                        <p>Com uma equipe de profissionais altamente qualificados e produtos premium cuidadosamente selecionados, oferecemos não apenas serviços, mas momentos de relaxamento e cuidado pessoal em um ambiente sofisticado e acolhedor.</p>
                    </div>
                </div>
                <div class="about-image"></div>
            </div>
            
            <div class="about-stats">
                <div class="stat-item">
                    <span class="stat-number">37</span>
                    <span class="stat-label">Anos de Tradição</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">15k+</span>
                    <span class="stat-label">Clientes Satisfeitos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Recomendação</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipe -->
    <section class="team section" id="team">
        <div class="container">
            <div style="text-align:center;margin-bottom:4rem">
                <p class="subtitle subtitle-light">NOSSOS MESTRES</p>
                <h2 class="section-title">Equipe de Especialistas</h2>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-avatar">AS</div>
                    <h3 class="team-name">Antônio Silva</h3>
                    <p class="team-role">Mestre Barbeiro - Fundador</p>
                    <p class="team-bio">40 anos de experiência. Especialista em cortes clássicos e técnicas tradicionais. Mentor de toda equipe.</p>
                </div>
                
                <div class="team-member">
                    <div class="team-avatar">RL</div>
                    <h3 class="team-name">Rafael Lima</h3>
                    <p class="team-role">Barbeiro Sênior</p>
                    <p class="team-bio">15 anos de carreira. Expert em barbas e bigodes. Formação internacional em técnicas modernas.</p>
                </div>
                
                <div class="team-member">
                    <div class="team-avatar">MC</div>
                    <h3 class="team-name">Marcos Costa</h3>
                    <p class="team-role">Especialista em Cortes</p>
                    <p class="team-bio">10 anos de experiência. Focado em cortes modernos e degradês. Atenção especial aos detalhes.</p>
                </div>
                
                <div class="team-member">
                    <div class="team-avatar">DP</div>
                    <h3 class="team-name">Diego Pereira</h3>
                    <p class="team-role">Barbeiro Premium</p>
                    <p class="team-bio">8 anos na área. Especialista em tratamentos capilares e atendimento personalizado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq section" id="faq">
        <div class="container">
            <div style="text-align:center;margin-bottom:4rem">
                <p class="subtitle subtitle-light">TIRE SUAS DÚVIDAS</p>
                <h2 class="section-title">Perguntas Frequentes</h2>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">
                        Preciso agendar horário?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Sim, recomendamos agendamento prévio para garantir o melhor atendimento. Você pode agendar pelo telefone, WhatsApp ou através do nosso sistema online. Também atendemos por ordem de chegada quando há disponibilidade.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        Quais formas de pagamento vocês aceitam?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Aceitamos dinheiro, cartão de débito, cartão de crédito (Visa, Mastercard, Elo), PIX e Vale Refeição. Para sua comodidade, também oferecemos parcelamento em até 3x sem juros no cartão de crédito.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        Quanto tempo dura cada serviço?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Corte clássico: 45-60 min | Barba: 30-45 min | Experiência Completa: 90-120 min | Tratamentos: 60-75 min. Os tempos podem variar conforme a complexidade e necessidades específicas de cada cliente.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        Vocês trabalham com produtos de qualidade?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Sim! Utilizamos apenas produtos premium de marcas reconhecidas como American Crew, Reuzel, Suavecito e QOD Barber Shop. Todos os produtos são cuidadosamente selecionados para garantir os melhores resultados.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        Posso levar meu filho para cortar o cabelo?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Claro! Temos experiência com clientes de todas as idades. Para crianças, oferecemos um ambiente acolhedor e profissionais especializados em atendimento infantil, garantindo uma experiência positiva para toda família.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        Vocês fazem atendimento domiciliar?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Sim, oferecemos serviço VIP domiciliar para clientes especiais. Este serviço inclui deslocamento de um profissional com todos os equipamentos necessários. Consulte valores e disponibilidade pelo WhatsApp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato sofisticado -->
    <section class="contact section" id="contact">
        <div class="container">
            <div style="text-align:center;margin-bottom:4rem">
                <p class="subtitle">FALE CONOSCO</p>
                <h2 class="section-title" style="color:var(--cream)">Agendamento e Contato</h2>
            </div>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <h3>Localização</h3>
                        <p>Rua Augusta, 1847<br>Consolação, São Paulo - SP<br>CEP: 01305-100</p>
                        <p style="margin-top:1rem;color:var(--primary)">Estacionamento próprio disponível</p>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <h3>Telefones</h3>
                        <p>Fixo: (11) 3265-4789<br>WhatsApp: (11) 99876-5432<br>Comercial: (11) 3265-4790</p>
                        <p style="margin-top:1rem;color:var(--primary)">Atendimento rápido via WhatsApp</p>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <h3>Funcionamento</h3>
                        <p>Segunda a Sexta: 08h às 20h<br>Sábados: 08h às 18h<br>Domingos: 09h às 15h</p>
                        <p style="margin-top:1rem;color:var(--primary)">Feriados consultar disponibilidade</p>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3 style="margin-bottom:2rem;color:var(--dark)">Envie sua Mensagem</h3>
                    <form>
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="telefone">Telefone/WhatsApp</label>
                            <input type="tel" id="telefone" name="telefone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email">
                        </div>
                        
                        <div class="form-group">
                            <label for="servico">Serviço de Interesse</label>
                            <select id="servico" name="servico" style="width:100%;padding:1rem;border:2px solid var(--light-cream);border-radius:10px;font-size:1rem">
                                <option>Corte Clássico Premium</option>
                                <option>Barba & Bigode Artístico</option>
                                <option>Experiência Gentleman</option>
                                <option>Tratamentos Especiais</option>
                                <option>Consulta Personalizada</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" placeholder="Conte-nos sobre suas preferências ou dúvidas..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-premium" style="width:100%;margin:0">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/5511998765432" class="whatsapp-float" target="_blank" title="Fale conosco no WhatsApp">
        💬
    </a>

    <!-- JavaScript otimizado -->
    <script>
        // Menu mobile
        const menuToggle = document.getElementById('menuToggle');
        const navMobile = document.getElementById('navMobile');
        
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navMobile.classList.toggle('active');
            document.body.style.overflow = navMobile.classList.contains('active') ? 'hidden' : '';
        });
        
        // Fechar menu ao clicar nos links
        document.querySelectorAll('.nav-mobile a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navMobile.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
        
        // Testimonials carousel
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial');
        const testimonialButtons = document.querySelectorAll('.testimonial-nav button');
        
        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.classList.toggle('active', i === index);
            });
            testimonialButtons.forEach((button, i) => {
                button.classList.toggle('active', i === index);
            });
            currentTestimonial = index;
        }
        
        // Auto-rotate testimonials
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
        
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                    faqItem.querySelector('.faq-answer').classList.add('active');
                }
            });
        });
        
        // Lazy loading e performance
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);
        
        // Performance optimizations
        document.addEventListener('DOMContentLoaded', () => {
            // Observar elementos para animação
            const animateElements = document.querySelectorAll('.service-card, .team-member');
            animateElements.forEach(el => observer.observe(el));
            
            // Header background on scroll
            const header = document.getElementById('header');
            let scrolled = false;
            
            window.addEventListener('scroll', () => {
                const isScrolled = window.scrollY > 100;
                if (isScrolled !== scrolled) {
                    scrolled = isScrolled;
                    header.style.background = scrolled ? 
                        'rgba(15,11,8,0.98)' : 
                        'rgba(15,11,8,0.95)';
                }
            }, { passive: true });
            
            // Smooth scroll otimizado
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
            
            // Form submission
            document.querySelector('.contact-form form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
                this.reset();
            });
        });
        
        // Global function for testimonials
        window.showTestimonial = showTestimonial;
        
        // Performance monitoring
        if ('requestIdleCallback' in window) {
            requestIdleCallback(() => {
                console.log('Site carregado com performance otimizada - Gentleman\'s Cut');
            });
        }
    </script>
</body>
</html>