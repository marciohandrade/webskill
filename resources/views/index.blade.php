<!DOCTYPE html>
<html lang="pt">

<!-- Mirrored from bootstraplovers.com/templates/codeon-v3.0/demo-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jul 2015 19:35:57 GMT -->

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QHRYBKYC68"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QHRYBKYC68');
    </script>
       

    <!-- <title></title> -->
    <title>Web Skill - Soluções Digitais</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
<link href="{{url('outros/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--custom css-->
    <link href="{{url('outros/css/style.css')}}" rel="stylesheet" type="text/css">

    <!--flex slider css-->
    <!-- <link href="{{url('outros/css/flexslider.css')}}" rel="stylesheet"> <!-- POSSIVELMENTE NÃO UTILIZADO --> -->

    <!--font awesome css-->
    <link href="{{url('outros/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!--animated css-->
    <link href="{{url('outros/css/animate.css')}}" rel="stylesheet">

    <!--owl carousel css-->
    <!-- <link href="{{url('outros/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="screen"> <!-- POSSIVELMENTE NÃO UTILIZADO --> -->
    <!-- <link href="{{url('outros/css/owl.theme.css')}}" rel="stylesheet" type="text/css" media="screen"> <!-- POSSIVELMENTE NÃO UTILIZADO --> -->

<!--Revolution slider css-->
<link href="{{url('outros/rs-plugin/css/settings.css')}}" rel="stylesheet" type="text/css" media="screen">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<!-- Google Tag Manager -->

<body data-spy="scroll" data-target="#navigation" data-offset="80">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP3HTF4L" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- <section id="navigation1" aria-label="Menu principal" style="z-index: 9999;"> -->
    <section id="navigation1" aria-label="Menu principal" 
         style="position: fixed; top: 0; width: 100%; z-index: 9999; background-color: white;">

        <h2 class="sr-only">Navegação Principal</h2>
        <div class="navbar navbar-default navbar-fixed-top sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- Botão para mobile -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Abrir navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    <a href="#home" class="navbar-brand">
                        <strong style="color: orange;">W</strong>eb <strong style="color: orange;">S</strong>kill
                    </a>
                </div>

                <!-- Menu -->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scrollto">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#cliente">Clientes</a></li>
                        <li><a href="#work">Portfólio</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="fullwidthbanner" id="home">
        <div class="ken-burns-banner">
            <ul> <!-- SLIDE -->
                <li 
                    data-transition="fade" 
                    data-thumb="{{ url('outros/img/bg_imagem1.jpeg') }}" 
                    data-title="Bem vindo">

                    <!-- MAIN IMAGE -->
                    <img src="{{ url('outros/img/bg_imagem1.jpeg') }}" alt="Banner com fundo digital da Web Skill">

                    <!-- LAYERS -->
                    <!-- Título -->
                    <div 
                        class="caption customin customout tp-resizeme Ken-burns-heading font-alt"
                        data-x="center" data-hoffset="0"
                        data-y="200" data-voffset="0"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;scaleX:1;scaleY:1;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                        data-customout="scaleX:0.75;scaleY:0.75;opacity:0;transformPerspective:300;transformOrigin:50% 50%;" 
                        data-speed="800" data-start="1300"
                        data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power4.easeIn">
                        <h1>Seja Bem-Vindo!</h1>
                    </div>

                    <!-- Subtítulo -->
                    <div 
                        class="caption customin customout tp-resizeme Ken-burns-subtitulo font-alt text-center"
                        data-x="center" data-hoffset="0"
                        data-y="280" data-voffset="0"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;scaleX:1;scaleY:1;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                        data-customout="scaleX:0.75;scaleY:0.75;opacity:0;transformPerspective:300;transformOrigin:50% 50%;" 
                        data-speed="800" data-start="1300"
                        data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power4.easeIn">
                        <h2>
                            Desenvolvemos Soluções Digitais Adaptadas às<br>
                            Necessidades da Sua Empresa!
                        </h2>
                    </div>

                    <!-- Botão -->
                    <div 
                        class="caption customin customout tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="120"
                        data-customin="x:50;y:150;scaleX:0.5;scaleY:0.5;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                        data-customout="scaleX:0.75;scaleY:0.75;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                        data-speed="800" data-start="1500"
                        data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power4.easeIn">

                        <div class="rev-buttons scrollto">
                            <a href="#about" class="btn btn-theme-color btn-lg" aria-label="Saiba mais sobre nós">
                                Sobre
                            </a>
                        </div>
                    </div>
                </li>                
            </ul>
        </div>
    </div>

    <section id="navigation2" aria-label="Menu principal">
        <div class="navbar navbar-default navbar-fixed-top sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- Botão Mobile -->
                    <button 
                        type="button" 
                        class="navbar-toggle" 
                        data-toggle="collapse" 
                        data-target="#main-navbar" 
                        aria-controls="main-navbar" 
                        aria-expanded="false">
                        <span class="sr-only">Abrir navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    <a href="#home" class="navbar-brand">
                        <strong style="color: orange;">W</strong>eb 
                        <strong style="color: orange;">S</strong>kill
                    </a>
                </div>

                <!-- Menu -->
                <div id="main-navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scrollto">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#cliente">Clientes</a></li>
                        <li><a href="#work">Portfólio</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="padding-80">
        <div class="about-section">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="large section-title">Sobre</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <!-- Descrição -->
                    <div class="col-md-6 col-sm-6">
                        <div class="about-more-info wow animated fadeInUp" data-wow-delay="0.3s">
                            <p>
                                A Web Skill é uma empresa comprometida em fornecer serviços digitais de qualidade, destacando-se pela inovação e criatividade. Nossa equipe experiente está empenhada em criar soluções que superem as expectativas dos clientes, adaptadas às necessidades individuais.
                            </p>
                            <p>
                                Acreditamos que a fusão de tecnologia avançada e criatividade é a chave para alcançar resultados excepcionais. Seja para o desenvolvimento de um site responsivo, uma estratégia de marketing digital eficaz ou soluções personalizadas, estamos aqui para entregar resultados que impulsionem o seu sucesso no mundo digital.
                            </p>
                        </div>
                    </div>

                    <!-- Imagem -->
                    <div class="col-md-6 col-sm-6">
                        <div class="skills-wrapper wow animated bounceIn" data-wow-delay="0.6s">
                            <img src="{{url('outros/img/foto-equipe-webskill.svg')}}" alt="Equipe Web Skill trabalhando">
                        </div>
                    </div>
                </div>

                <!-- Blocos Sobre -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-box wow animated fadeInDown" data-wow-delay="0.6s">
                            <div class="about-box-icon">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="about-box-text">
                                <h4>Design Único e Responsivo</h4>
                                <p>
                                    Oferecemos trabalhos personalizados, inovadores e de alta qualidade, para que nossos clientes se destaquem no mercado.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="about-box wow animated fadeInDown" data-wow-delay="0.8s">
                            <div class="about-box-icon">
                                <i class="fa fa-hand-o-up"></i>
                            </div>
                            <div class="about-box-text">
                                <h4>Compromisso com o Prazo e Resultado</h4>
                                <p>
                                    Trabalhamos para conquistar a confiança e credibilidade dos nossos clientes, criando assim histórias de sucesso.
                                </p>
                                <p>
                                    Executamos sempre o que foi acordado com nossos contratantes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-section-more">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-duration="0.3s">
                                <div class="about-box-icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Ideias Inovadoras</h4>
                                    <p>
                                        Buscamos constantemente oferecer o que há de mais moderno no mercado, sempre alinhado ao perfil de cada cliente para realizar um trabalho personalizado e de excelência.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.5s">
                                <div class="about-box-icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Código Limpo</h4>
                                    <p>
                                        Utilizamos metodologias ágeis e boas práticas de desenvolvimento para garantir que o código seja limpo, organizado e de fácil manutenção.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chamada Parallax -->
            <div class="purchase-now parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10">
                            <section class="cta-parallax">
                                <h1 class="wow animated fadeInLeft" data-wow-delay="0.3s">
                                    <strong>Seu Negócio</strong>
                                    <strong style="color:orange;">na maior</strong> 
                                    ferramenta de busca, 
                                    <strong style="color:orange;">GOOGLE</strong>
                                </h1>
                            </section>

                        </div>
                        <div class="col-sm-2">
                            <a href="#contact" class="btn btn-lg btn-theme-color wow animated bounceIn" data-wow-delay="0.6s">
                                Comece Agora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- inicia a secao de servicos -->
    <section id="services" class="padding-80">
        <div class="services-section-1">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="large section-title">Serviços</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <!-- Coluna Esquerda -->
                    <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.3s">

                        <!-- Serviço 1 -->
                        <div class="row margin-btm-20">
                            <div class="col-md-2">
                                <div class="services-icon">
                                    <i class="fa fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="services-info">
                                    <h3>Criação e Manutenção de Sites</h3>
                                    <p>
                                        Desenvolvemos sites focados em maximizar os resultados do seu produto ou serviço. Mais do que aparência, criamos soluções que combinam design atrativo com alta performance.
                                    </p>
                                    <p>
                                        Cada projeto é único, pensado para impulsionar a presença digital do seu negócio e alcançar melhores resultados.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Serviço 2 -->
                        <div class="row margin-btm-20">
                            <div class="col-md-2">
                                <div class="services-icon">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="services-info">
                                    <h3>SEO — Otimização para Motores de Busca</h3>
                                    <p>
                                        Aplicamos estratégias de SEO (Search Engine Optimization) para aumentar a visibilidade do seu site no Google e em outros buscadores.
                                    </p>
                                    <p>
                                        Nosso foco é tornar seu site mais relevante, atrair tráfego qualificado e melhorar seu posicionamento nos resultados de pesquisa.
                                    </p>
                                    <p>
                                        O SEO contribui diretamente para alcançar seu público-alvo, fortalecer sua autoridade online e aumentar suas conversões.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coluna Direita -->
                    <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">

                        <!-- Serviço 3 -->
                        <div class="row margin-btm-20">
                            <div class="col-md-2">
                                <div class="services-icon">
                                    <i class="fa fa-gears"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="services-info">
                                    <h3>Desenvolvimento de Soluções Digitais</h3>
                                    <p>
                                        Criamos soluções sob medida, pensadas para atender às necessidades específicas de cada negócio.
                                    </p>
                                    <p>
                                        Fazemos integrações via API, desenvolvimento de sistemas, automações e outras ferramentas digitais que otimizam processos e melhoram sua operação.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Serviço 4 -->
                        <div class="row margin-btm-20">
                            <div class="col-md-2">
                                <div class="services-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="services-info">
                                    <h3>Desenvolvimento de Loja Virtual (E-commerce)</h3>
                                    <p>
                                        Ter uma loja online é essencial no mundo atual. Desenvolvemos e-commerces completos, que permitem vender seus produtos ou serviços para qualquer pessoa, em qualquer lugar e a qualquer hora.
                                    </p>
                                    <p>
                                        Nossas lojas são seguras, responsivas e fáceis de usar, ajudando a aumentar a confiança dos clientes e a escalabilidade do seu negócio.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- Fim coluna direita -->
                </div>
            </div>
        </div>
    </section>

    <!-- end section services -->
    <!--section cliente inicia aqui -->
    <section id="cliente" class="padding-50">
        <div class="services-section-1">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="large section-title">Clientes</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row logo-container text-center">
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/agasus.svg')}}" alt="Logo Agasus">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/alleasy.svg')}}" alt="Logo AllEasy">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/alphaelegance.svg')}}" alt="Logo Alpha Elegance">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/asteria.svg')}}" alt="Logo Asteria">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/fusp.svg')}}" alt="Logo FUSP">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/lliege.svg')}}" alt="Logo Lliege">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/rb.svg')}}" alt="Logo RB">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/siemens.svg')}}" alt="Logo Siemens">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/tivit.svg')}}" alt="Logo Tivit">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-item">
                    <img src="{{url('img/clientes/triad.svg')}}" alt="Logo Triad">
                </div>
            </div>
        </div>
    </section>

    <!-- secao de portiforio inicia aqui -->
    <!--our work section start here-->
    <section id="work" class="padding-50">
        <div class="work-section-1">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="large section-title">Portfólio</h2>
                </div>
            </div>

            <div class="container">
                <!-- Filtros -->
                <ul class="filter list-inline">
                    <li><a class="active" href="#" data-filter="*">Todos Projetos</a></li>
                    <li><a href="#" data-filter=".desenvolvimento">Desenvolvimento</a></li>
                    <li><a href="#" data-filter=".manutencao">Manutenção / Melhorias</a></li>
                </ul>

                <div class="row">
                    <div class="portfolio-box iso-call work-col-4">

                        <!-- Projeto 1 -->
                        <div class="project-post desenvolvimento">
                            <div class="image-wrapper">
                                <img src="{{url('img/portifolio/sec-work1.jpg')}}" class="img-responsive" alt="Projeto desenvolvido em C#">
                            </div>
                            <div class="work-sesc">
                                <p>C#</p>
                            </div>
                        </div>

                        <!-- Projeto 2 -->
                        <div class="project-post manutencao">
                            <div class="image-wrapper">
                                <img src="{{url('img/portifolio/sec-work2.jpg')}}" class="img-responsive" alt="Projeto de manutenção em VB.NET">
                            </div>
                            <div class="work-sesc">
                                <p>VB.NET</p>
                            </div>
                        </div>

                        <!-- Projeto 3 -->
                        <div class="project-post manutencao">
                            <div class="image-wrapper">
                                <img src="{{url('img/portifolio/sec-work3.jpg')}}" class="img-responsive" alt="Projeto de manutenção usando C#">
                            </div>
                            <div class="work-sesc">
                                <p>C#</p>
                            </div>
                        </div>

                        <!-- Projeto 4 -->
                        <div class="project-post manutencao">
                            <div class="image-wrapper">
                                <img src="{{url('img/portifolio/sec-work5.png')}}" class="img-responsive" alt="Projeto em PHP / Laravel">
                            </div>
                            <div class="work-sesc">
                                <p>PHP / Laravel</p>
                            </div>
                        </div>

                        <!-- Projeto 5 -->
                        <div class="project-post manutencao">
                            <div class="image-wrapper">
                                <img src="{{url('img/portifolio/sec-work6.png')}}" class="img-responsive" alt="Manutenção em VB.NET">
                            </div>
                            <div class="work-sesc">
                                <p>VB.NET</p>
                            </div>
                        </div>

                        <!-- Projeto 6 -->
                        <div class="project-post desenvolvimento">
                            <div class="image-wrapper">
                                <img src="{{url('img/portifolio/sec-work8.png')}}" class="img-responsive" alt="Desenvolvimento em PHP / Laravel">
                            </div>
                            <div class="work-sesc">
                                <p>PHP / Laravel</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portiforio finaliza aqui -->    
    <div id="modalcontato" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Cabeçalho -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Envio de Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Corpo -->
                <div class="modal-body" id="modalDescription">
                    <h2 id="msgretorno">Mensagem enviada com sucesso!</h2>
                    <h2 id="msgfim">Agradecemos o seu contato!</h2>
                </div>

                <!-- Rodapé -->
                <div class="modal-footer">
                    <button 
                        type="button" 
                        id="btnok" 
                        class="btn btn-primary" 
                        data-dismiss="modal">
                        Ok
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- fim modal -->
    <!-- secao de contato inicia aqui -->
    <section id="contact" class="padding-80">
        <div class="contact-sec-1">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="small section-title"><span>Muito Obrigado por chegar até aqui</span></h4>
                    <h2 class="large section-title">Fale Conosco</h2>
                </div><!--section heading-->
            </div><!--.container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Entrar em contato</h4>
                        <form name="formcontato" id="formcontato" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Nome<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="informe um nome" id="nome" name="nome" required data-validation-required-message="Por favor, forneça o seu nome.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Empresa<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="informe a empresa" id="empresa" required data-validation-required-message="Por favor, forneça a Empresa.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>E-mail<span>*</span></label>
                                            <input type="text" class="form-control" maxlength="60" placeholder="informe um email válido" id="email" name="email" data-validation-required-message="Por favor, forneça um e-mail válido.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Telefone<span></span></label>
                                            <input type="text" class="form-control" placeholder="informe o telefone" id="tel" name="tel">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Celular/Whatsapp<span></span></label>
                                            <input type="text" class="form-control" placeholder="informe o whatsapp" id="cel" name="cel">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Assunto<span></span></label>
                                            <input type="text" class="form-control" maxlength="80" placeholder="informe um assunto" id="assunto" name="assunto">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Mensagem<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="informe uma mensagem" id="mensagem" name="mensagem" required data-validation-required-message="Por favor, forneça a mensagem."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button id="btnenviar" name="btnenviar" type="submit" class="btn btn-theme-color btn-lg">Enviar
                                        <!-- <span class="glyphicon glyphicon-circle-arrow-right"></span> -->
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--contact form-->
                    </div>
                    <div class="col-md-4">
                        <h4>Dados de Contato</h4>
                        <div class="contact-info wow animated fadeInRight" data-wow-delay=".6s">
                            <p><i class="fa fa-whatsapp"></i> <b>Whatsapp: </b> + 55 11 99187-4115</p>
                            <p><i class="fa fa-envelope"></i> <a href="#">contato@webskill.com.br</a></p>
                            <p><i class="fa fa-clock-o"></i> Segunda-Sexta 9:00 - 18:00pm</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Contact-sec-1 end-->

    </section><!--contact section end-->

    <!-- <div id="map-canvas" style="width:100%; height: 350px;"></div> -->

    <div class="contact-sec-2">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                        <a href="https://api.whatsapp.com/send?phone=5511991874115&text=Seja%20bem%20vindo!!,%20o%20que%20posso%20te%20ajudar%20%3F" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-whatsapp"></i>
                            <p>+55 11 99187-4115</p>
                        </a>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                        <i class="fa fa-envelope"></i>
                        <p>contato@webskill.com.br</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                        <i class="fa fa-instagram"></i>
                        <p>@webskill.pro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- secao de contato finaliza aqui -->

    <section id="footer" class="padding-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 copyright">
                    <h2 class="sr-only">Rodapé</h2>
                    <span>&copy; Web Skill - Soluções Digitais 2022. Todos os direitos reservados</span>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h2 class="sr-only">Política</h2>
                    <span>Política e Privacidade</span>
                </div>
            </div>
        </div>
    </section>

    <!--back to top-->
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--back to top end-->
    <!--footer end-->

    <!--script files-->
    <script src="{{url('outros/js/jquery.min.js')}}"></script>
    <script src="{{url('outros/js/moderniz.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery-migrate.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.easing.1.3.min.js')}}" ></script>
    <script src="{{url('outros/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.flexslider-min.js')}}" ></script>
    <script src="{{url('outros/js/wow.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.sticky.js')}}" ></script>
    <script src="{{url('outros/js/bootstrap-hover-dropdown.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.stellar.min.js')}}" ></script>
    <script src="{{url('outros/js/owl.carousel.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.mb.YTPlayer.min.js')}}" ></script>
    <script src="{{url('outros/js/waypoints.min.js')}}"></script>
    <script src="{{url('outros/js/easypiechart.js')}}"></script>
    <script src="{{url('outros/js/jquery.isotope.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.mask.js')}}" ></script>
    <script src="{{url('js/index/index.js')}}" ></script>

    <!--image loads plugin -->
    <script src="{{url('outros/js/jquery.imagesloaded.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.counterup.min.js')}}" ></script>
    <script src="{{url('outros/js/jquery.countdown.js')}}" ></script>
    <script src="{{url('outros/js/contact_me.js')}}" ></script>
    <script src="{{url('outros/js/jqBootstrapValidation.js')}}" ></script>
    <script src="{{url('outros/js/custom.js')}}" ></script>
    <!--revolution slider plugins-->
    <script src="{{url('outros/rs-plugin/js/jquery.themepunch.tools.min.js')}}" ></script>
    <script src="{{url('outros/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" ></script>
    <script src="{{url('outros/js/revolution-custom.js')}}" ></script>    
    <script src="{{url('outros/js/isotope-custom.js')}}" ></script>
    <!-- <script  src="https://maps.googleapis.com/maps/api/js?sensor=true"></script> -->


</body>

</html>