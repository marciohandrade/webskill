<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Vida Saudável</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Menu fixo -->
    <header class="fixed top-0 w-full bg-white shadow z-50">
        <div class="container mx-auto flex items-center justify-between p-4">
            <h1 class="text-xl font-bold text-blue-700">Clínica Vida Saudável</h1>
            <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="#" class="text-xl font-bold text-blue-800">Clínica Vida</a>
                    </div>
                    <div class="-mr-2 flex items-center sm:hidden">
                        <!-- Botão do menu mobile -->
                        <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-white hover:bg-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        </button>
                    </div>
                    <div class="hidden sm:flex sm:items-center space-x-6">
                        <a href="#inicio" class="menu-link px-3 py-2 rounded transition" data-section="inicio">Início</a>
                        <a href="#sobre" class="menu-link px-3 py-2 rounded transition" data-section="sobre">Sobre</a>
                        <a href="#especialidades" class="menu-link px-3 py-2 rounded transition" data-section="especialidades">Especialidades</a>
                        <a href="#equipe" class="menu-link px-3 py-2 rounded transition" data-section="equipe">Equipe</a>
                        <a href="#contato" class="menu-link px-3 py-2 rounded transition" data-section="contato">Contato</a>
                    </div>
                    </div>
                </div>

                <!-- Menu Mobile -->
                <div id="mobile-menu" class="sm:hidden hidden px-4 pt-2 pb-4 space-y-1 bg-white shadow">
                <a href="#inicio" class="menu-link block px-3 py-2 rounded transition" data-section="inicio">Início</a>
                <a href="#sobre" class="menu-link block px-3 py-2 rounded transition" data-section="sobre">Sobre</a>
                <a href="#especialidades" class="menu-link block px-3 py-2 rounded transition" data-section="especialidades">Especialidades</a>
                <a href="#equipe" class="menu-link block px-3 py-2 rounded transition" data-section="equipe">Equipe</a>
                <a href="#contato" class="menu-link block px-3 py-2 rounded transition" data-section="contato">Contato</a>
                </div>
                </nav>
        </div>
    </header>
    <section id="inicio" class="pt-0 relative">
        <div class="relative w-full" style="height: 400px;">
            <img src="{{ asset('img/portifolio/clinica/banner-clinica.png') }}" class="w-full h-full object-top object-cover" alt="Banner da clínica">
            <div class="absolute inset-0 bg-black bg-opacity-40 z-10 flex flex-col items-center justify-center text-white text-center px-4">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">Cuidando da sua saúde com excelência</h2>
                <p class="text-base sm:text-lg mb-6">Atendimento humanizado, tecnologia de ponta e profissionais dedicados ao seu bem-estar.</p>
                <a href="#contato" class="bg-blue-600 px-6 py-2 rounded-full hover:bg-blue-700 transition text-sm sm:text-base">Agende sua consulta</a>
            </div>
        </div>
    </section>
    <!-- Sobre -->
    <section id="sobre" class="py-16 container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-10 items-start">
            <img src="{{ asset('img/portifolio/clinica/foto-sobre-clinica-medica.png') }}" class="rounded shadow w-full h-auto max-h-[400px] object-cover" alt="Imagem da clínica">
            <div>
                <h3 class="text-2xl font-semibold text-blue-800 mb-4">Sobre a Clínica</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Nossa missão é promover saúde com qualidade, acolhimento e profissionalismo. A Clínica Vida Saudável foi idealizada para oferecer um atendimento completo e humanizado, com foco no bem-estar físico, emocional e social de cada paciente.
                </p>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Contamos com uma equipe multidisciplinar altamente capacitada, estrutura moderna, ambiente acolhedor e equipamentos de última geração para garantir diagnósticos precisos e tratamentos eficazes.
                </p>                
            </div>
        </div>
    </section>

    <!-- Especialidades -->
     <section id="especialidades" class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold text-blue-800 mb-8">Nossas Especialidades</h3>
            <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Clínica Geral -->
            <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300 group">
                <i class="fas fa-stethoscope text-4xl text-blue-600 mb-4 group-hover:scale-110 transition-transform duration-300"></i>
                <h4 class="font-bold text-xl mb-2 text-blue-800">Clínica Geral</h4>
                <p class="text-gray-600 text-sm">
                Acompanhamento completo da sua saúde com foco na prevenção, diagnóstico e tratamento de diversas doenças.
                </p>
            </div>

            <!-- Pediatria -->
            <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300 group">
                <i class="fas fa-child text-4xl text-blue-600 mb-4 group-hover:scale-110 transition-transform duration-300"></i>
                <h4 class="font-bold text-xl mb-2 text-blue-800">Pediatria</h4>
                <p class="text-gray-600 text-sm">
                Cuidado integral com crianças e adolescentes, desde o nascimento até a adolescência, com carinho e dedicação.
                </p>
            </div>

            <!-- Ginecologia -->
            <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300 group">
                <i class="fas fa-female text-4xl text-blue-600 mb-4 group-hover:scale-110 transition-transform duration-300"></i>
                <h4 class="font-bold text-xl mb-2 text-blue-800">Ginecologia</h4>
                <p class="text-gray-600 text-sm">
                Atendimento especializado à saúde da mulher em todas as fases da vida, com respeito, empatia e tecnologia.
                </p>
            </div>

            </div>
        </div>
        </section>

    

    <!-- Equipe -->
    <section id="equipe" class="py-16 container mx-auto px-4">
        <h3 class="text-2xl font-semibold text-blue-800 text-center mb-10">Nossa Equipe</h3>
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div>
                <img src="{{ asset('img/portifolio/clinica/medica1.png')}}" class="rounded-lg mx-auto mb-4 w-[300px] h-[300px] object-cover border border-gray-300">
                <h4 class="font-bold">Dra. Juliana Souza</h4>
                <p>Clínica Geral</p>
            </div>
            <div>
                <img src="{{ asset('img/portifolio/clinica/medica2.png')}}" class="rounded-lg mx-auto mb-4 w-[300px] h-[300px] object-cover border border-gray-300">
                <h4 class="font-bold">Dra. Carla Mendes</h4>
                <p>Pediatra</p>
            </div>
            <div>
                <img src="{{ asset('img/portifolio/clinica/medico1.png') }}" class="rounded-lg mx-auto mb-4 w-[300px] h-[300px] object-cover border border-gray-300">
                <h4 class="font-bold">Dr. Marcos Lima</h4>
                <p>Ginecologista</p>
            </div>
        </div>
    </section>


    <!-- Contato -->
    <section id="contato" class="py-16 bg-blue-50">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold text-blue-800 mb-6">Entre em Contato</h3>
            <p class="text-gray-600 mb-8">Preencha o formulário abaixo ou fale conosco pelo WhatsApp.</p>
            <form class="max-w-xl mx-auto grid grid-cols-1 gap-4">
                <input type="text" placeholder="Nome" class="p-3 rounded border">
                <input type="email" placeholder="E-mail" class="p-3 rounded border">
                <textarea placeholder="Mensagem" rows="4" class="p-3 rounded border"></textarea>
                <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-blue-800 text-white py-6 text-center">
        <div class="mb-2">
            <a href="#" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-whatsapp fa-lg"></i></a>
            <a href="#" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-facebook fa-lg"></i></a>
        </div>
        <p class="text-sm">&copy; 2025 Clínica Vida Saudável. Todos os direitos reservados.</p>
    </footer>
    <!-- Botão flutuante do WhatsApp com texto -->
    <a href="https://wa.me/5511999999999?text=Olá!%20Gostaria%20de%20agendar%20uma%20consulta%20com%20a%20Clínica%20Vida%20Saudável." 
    class="fixed bottom-4 right-4 flex items-center bg-green-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-green-600 transition z-50"
    target="_blank"
    aria-label="WhatsApp">
        <i class="fab fa-whatsapp fa-lg mr-2"></i>
        <span class="font-medium">Fale conosco</span>
    </a>
</body>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // === Lógica do menu mobile ===
        const menuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");

        if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
        }

        // === Lógica do menu ativo ao rolar ou clicar ===
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".menu-link");

        function onScroll() {
        const scrollPos = window.scrollY + 100;

        sections.forEach(section => {
            const sectionId = section.getAttribute("id");
            const correspondingLink = Array.from(navLinks).find(link =>
            link.dataset.section === sectionId || link.getAttribute("href") === `#${sectionId}`
            );

            if (
            scrollPos >= section.offsetTop &&
            scrollPos < section.offsetTop + section.offsetHeight
            ) {
            navLinks.forEach(link => link.classList.remove("bg-blue-100", "text-blue-600", "font-bold"));
            if (correspondingLink) {
                correspondingLink.classList.add("bg-blue-100", "text-blue-600", "font-bold");
            }
            }
        });
        }

        window.addEventListener("scroll", onScroll);

        navLinks.forEach(link => {
        link.addEventListener("click", function () {
            const sectionId = this.getAttribute("href").replace('#', '');
            navLinks.forEach(l => l.classList.remove("bg-blue-100", "text-blue-600", "font-bold"));
            this.classList.add("bg-blue-100", "text-blue-600", "font-bold");

            setTimeout(() => {
            onScroll();
            }, 300);
        });
        });
    });
    </script>



</html>
