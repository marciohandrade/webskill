<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Odontológica | Dr. [Nome do Dentista]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007BFF;
            --secondary-color: #20C997;
            --text-color: #343A40;
            --bg-color: #FFFFFF;
            --light-gray: #F8F9FA;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            background: var(--bg-color);
            box-shadow: var(--box-shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .navbar-links {
            display: flex;
            list-style: none;
        }

        .navbar-links a {
            color: var(--text-color);
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .navbar-links a:hover {
            color: var(--primary-color);
        }

        .cta-button {
            background-color: var(--secondary-color);
            color: var(--bg-color);
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #17A2B8;
        }
        
        /* Menu mobile (não visível em telas grandes) */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Seções */
        section {
            padding: 5rem 5%;
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            text-align: center;
            background-color: var(--light-gray);
        }

        .hero-content h1 {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem auto;
        }

        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 2rem;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
        }

        .about-image img {
            width: 100%;
            height: auto;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .about-content {
            flex: 2;
            min-width: 300px;
        }

        .about-content h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .services {
            background-color: var(--light-gray);
            text-align: center;
        }

        .services h2 {
            margin-bottom: 2rem;
            color: var(--primary-color);
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .service-item {
            background: var(--bg-color);
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-10px);
        }

        .service-item .icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .gallery {
            text-align: center;
        }

        .gallery h2 {
            margin-bottom: 2rem;
            color: var(--primary-color);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: var(--border-radius);
            transition: transform 0.3s ease;
            box-shadow: var(--box-shadow);
        }
        
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        
        .testimonials {
            background-color: var(--light-gray);
            text-align: center;
            position: relative;
            overflow: hidden; 
            padding-bottom: 7rem;
        }
        
        .testimonials h2 {
            margin-bottom: 2rem;
            color: var(--primary-color);
        }
        
        .testimonials-carousel-container {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .testimonials-carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .testimonial-item {
            min-width: 100%;
            flex-shrink: 0;
            background-color: var(--bg-color);
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            text-align: center;
            min-height: 200px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .testimonial-item p {
            font-style: italic;
            margin-bottom: 1rem;
        }

        .testimonial-item .author {
            font-weight: 600;
            color: var(--primary-color);
        }

        .carousel-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .carousel-controls button {
            background-color: rgba(0, 0, 0, 0.1);
            border: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .carousel-controls button.active {
            background-color: var(--primary-color);
        }
        
        .faq {
            background-color: var(--bg-color);
        }

        .faq h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }

        .faq-item {
            border-bottom: 1px solid #E9ECEF;
            padding: 1.5rem 0;
            cursor: pointer;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--text-color);
            font-size: 1.1rem;
        }

        .faq-question .icon {
            transition: transform 0.3s ease;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
            padding-top: 0;
        }

        .faq-answer p {
            margin-top: 1rem;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding-top: 1rem;
        }

        .faq-item.active .faq-question .icon {
            transform: rotate(45deg);
        }
        
        /* Contato */
        .contact {
            background-color: var(--light-gray);
            text-align: center;
        }
        
        .contact h2 {
            color: var(--primary-color);
            margin-bottom: 2rem;
        }
        
        .contact-form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: var(--bg-color);
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            text-align: left;
        }

        .contact-form-container label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .contact-form-container input,
        .contact-form-container select,
        .contact-form-container textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            border-radius: var(--border-radius);
            font-family: inherit;
        }
        
        .contact-form-container textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .contact-form-container button {
            width: 100%;
            padding: 1rem;
            background-color: var(--secondary-color);
            color: var(--bg-color);
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .contact-form-container button:hover {
            background-color: #17A2B8;
        }

        footer {
            background-color: var(--text-color);
            color: var(--light-gray);
            text-align: center;
            padding: 2rem 5%;
        }

        footer .social-icons a {
            color: var(--secondary-color);
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        footer .social-icons a:hover {
            color: var(--primary-color);
        }
        
        /* Botão Flutuante */
        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--secondary-color);
            color: var(--bg-color);
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 999;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: pulse 2s infinite;
        }
        
        .floating-button:hover {
            animation-play-state: paused;
            transform: scale(1.05);
            background-color: #17A2B8;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Traço Divisório Animado */
        .divider-line {
            width: 80%;
            height: 2px;
            background-color: var(--primary-color);
            margin: 0 auto;
            position: relative;
            animation: line-pulse 2s infinite ease-in-out;
            max-width: 600px;
        }
        
        @keyframes line-pulse {
            0% {
                transform: scaleX(0.7);
            }
            50% {
                transform: scaleX(1);
            }
            100% {
                transform: scaleX(0.7);
            }
        }
        
        /* Media Queries para responsividade */
        @media (max-width: 768px) {
            .navbar-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background: var(--bg-color);
                position: absolute;
                top: 100%;
                left: 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .navbar-links.active {
                display: flex;
            }

            .navbar-links a {
                text-align: center;
                padding: 1rem;
                border-top: 1px solid var(--light-gray);
            }

            .menu-toggle {
                display: block;
            }
            
            .navbar .cta-button {
                display: none;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="#" class="logo">Dr. [Nome do Dentista]</a>
        <ul class="navbar-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contato">Contato</a></li> </ul>
        <a href="#contato" class="cta-button">Agendar Consulta</a>
        <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </nav>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Seu sorriso, nossa prioridade.</h1>
                <p>Oferecemos tratamentos odontológicos de excelência com tecnologia de ponta e um atendimento humanizado para toda a família.</p>
                <a href="#contato" class="cta-button">Agende sua avaliação</a>
            </div>
        </section>
        
        <div class="divider-line"></div>

        <section id="sobre" class="about">
            <div class="about-image">
                <img src="https://via.placeholder.com/600x400.png?text=Foto+do+Dr.+[Nome+do+Dentista]" alt="Dr. [Nome do Dentista]">
            </div>
            <div class="about-content">
                <h2>Sobre o Dr. [Nome do Dentista]</h2>
                <p>Com mais de 10 anos de experiência, o Dr. [Nome do Dentista] é especialista em [sua especialidade]. Nosso compromisso é com a saúde bucal e o bem-estar de nossos pacientes, utilizando as técnicas mais avançadas para garantir resultados duradouros e um sorriso perfeito.</p>
                <p>Nosso consultório é um ambiente acolhedor, onde cada detalhe foi pensado para proporcionar uma experiência confortável e segura. Venha nos conhecer e transforme a sua relação com a saúde bucal.</p>
            </div>
        </section>

        <section id="servicos" class="services">
            <h2>Nossos Serviços</h2>
            <div class="service-grid">
                <div class="service-item">
                    <div class="icon"><i class="fas fa-tooth"></i></div>
                    <h3>Clareamento Dental</h3>
                    <p>Procedimento estético para deixar seus dentes mais brancos e o seu sorriso mais brilhante.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><i class="fas fa-medkit"></i></div>
                    <h3>Implantes Dentários</h3>
                    <p>Solução definitiva para a perda de dentes, restaurando a função e a estética do seu sorriso.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><i class="fas fa-microscope"></i></div>
                    <h3>Tratamento de Canal</h3>
                    <p>Salvamos dentes afetados por cáries profundas ou traumas, aliviando a dor e prevenindo infecções.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><i class="fas fa-user-md"></i></div>
                    <h3>Odontologia Preventiva</h3>
                    <p>Limpeza, flúor e orientações para manter a saúde bucal e evitar problemas futuros.</p>
                </div>
            </div>
        </section>

        <section id="galeria" class="gallery">
            <h2>Conheça nosso espaço</h2>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="https://via.placeholder.com/400x250.png?text=Consultório+1" alt="Consultório"></div>
                <div class="gallery-item"><img src="https://via.placeholder.com/400x250.png?text=Consultório+2" alt="Equipamentos"></div>
                <div class="gallery-item"><img src="https://via.placeholder.com/400x250.png?text=Sala+de+Espera" alt="Sala de Espera"></div>
                <div class="gallery-item"><img src="https://via.placeholder.com/400x250.png?text=Recepção" alt="Recepção"></div>
            </div>
        </section>
        
        <section id="depoimentos" class="testimonials">
            <h2>O que nossos pacientes dizem</h2>
            <div class="testimonials-carousel-container">
                <div class="testimonials-carousel">
                    <div class="testimonial-item">
                        <p>"Fui muito bem atendido e o resultado do meu tratamento superou todas as minhas expectativas. Recomendo a todos!"</p>
                        <div class="author">- Ana Silva</div>
                    </div>
                    <div class="testimonial-item">
                        <p>"A equipe do Dr. [Nome do Dentista] é super profissional e atenciosa. Me senti muito segura durante todo o procedimento. O consultório é impecável!"</p>
                        <div class="author">- João Paulo</div>
                    </div>
                    <div class="testimonial-item">
                        <p>"O clareamento dental ficou perfeito! O Dr. [Nome do Dentista] me explicou cada passo e o resultado foi exatamente o que eu esperava. A equipe é maravilhosa!"</p>
                        <div class="author">- Maria Fernanda</div>
                    </div>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="control-btn active"></button>
                <button class="control-btn"></button>
                <button class="control-btn"></button>
            </div>
        </section>

        <section id="faq" class="faq">
            <h2>Perguntas Frequentes</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Qual a frequência ideal para visitar o dentista?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Recomendamos visitas a cada seis meses para limpezas e check-ups. Essas consultas de rotina são essenciais para prevenir problemas e garantir a saúde bucal a longo prazo.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>O clareamento dental danifica os dentes?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Não, quando realizado por um profissional, o clareamento é um procedimento seguro. Utilizam-se produtos específicos que não agridem o esmalte dental.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Qual a melhor maneira de escovar os dentes?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Utilize uma escova de cerdas macias, com movimentos suaves e circulares, cobrindo todas as superfícies do dente. Não se esqueça de escovar a língua e usar o fio dental diariamente.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Qual o tempo de duração de um implante?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Com um bom planejamento e a manutenção adequada, um implante dentário pode durar a vida toda. A durabilidade depende da sua higiene bucal e das visitas regulares ao dentista.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="contact">
            <h2>Entre em Contato</h2>
            <div class="contact-form-container">
                <form action="#" method="post">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="assunto">Assunto</label>
                    <select id="assunto" name="assunto">
                        <option value="agendamento">Agendar Consulta</option>
                        <option value="duvidas">Dúvidas Gerais</option>
                        <option value="orcamento">Pedido de Orçamento</option>
                        <option value="outros">Outros</option>
                    </select>

                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                    
                    <button type="submit">Enviar Mensagem</button>
                </form>
            </div>
        </section>
    </main>
    
    <a href="https://wa.me/55DDNNNNNNNNN" class="floating-button" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i> Fale Conosco
    </a>

    <footer>
        <p>&copy; 2025 Dr. [Nome do Dentista]. Todos os direitos reservados.</p>
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Script para o menu mobile
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.navbar-links');
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            // Script para o FAQ (acordeão)
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });

            // Script para rolagem suave
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Script para o carrossel de depoimentos
            const carousel = document.querySelector('.testimonials-carousel');
            const controlsContainer = document.querySelector('.carousel-controls');
            const testimonials = document.querySelectorAll('.testimonial-item');
            let currentTestimonial = 0;
            const totalTestimonials = testimonials.length;

            const updateCarousel = () => {
                const offset = -currentTestimonial * 100;
                carousel.style.transform = `translateX(${offset}%)`;
                
                // Atualiza os botões de controle
                controlsContainer.querySelectorAll('button').forEach((btn, index) => {
                    if (index === currentTestimonial) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            };

            controlsContainer.addEventListener('click', (event) => {
                if (event.target.tagName === 'BUTTON') {
                    const index = Array.from(controlsContainer.children).indexOf(event.target);
                    currentTestimonial = index;
                    updateCarousel();
                }
            });

            const nextTestimonial = () => {
                currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
                updateCarousel();
            };

            // Troca de depoimento a cada 5 segundos
            setInterval(nextTestimonial, 5000);
        });
    </script>
</body>
</html>