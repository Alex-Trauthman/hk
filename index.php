<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACESSATO - Tocantins</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="icon" href="assets/img/Design_sem_nome__5_-removebg-preview.png">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php">ACESSATO<span>.</span></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#sobre">Sobre</a></li>
                    <li><a class="nav-link scrollto active" href="#perguntas">Perguntas</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contate-nos</a></li>        
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Você está no <span>ACESSA</span><span id="span2">TO</span></h1>
            <h2>Como posso te ajudar hoje?</h2>
            <div class="d-flex">
                <form id="formPesquisa" action="material.php" method="GET">
                    <input type="text" id="pesquisa" name="termo" placeholder="Digite sua pesquisa aqui...">
                    <input type="submit" value="Pesquisar">
                    
                </form>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="sobre" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>SOBRE</h2>
                    <h3>Saiba mais sobre o <span>ACESSA</span><span id="span2">TO</span></h3>
                    <p>O <span id="span3">ACESSA</span>TO é uma página informativa do governo do Tocantins a respeito de serviços gerais e dúvidas do usuário.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/duvida.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h3>Como consigo usar o site para esclarecer minhas dúvidas?</h3>
                        <p class="fst-italic">O site tem opções de esclarecer dúvidas, como a barra de pesquisa no topo da página e nossa assistente virtual no canto inferior direito</p>
                        <ul>
                            <li>
                                <i class="fas fa-question-circle"></i>
                                <div>
                                    <h5>O site é mesmo confiável?</h5>
                                    <p>Não pedimos nenhuma informação pessoal do usuário, somos apenas um site informativo para tirar dúvidas do usuário a respeito de serviços gerais do governo.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Quais são as vantagens de usar este site?</h5>
                                    <ul class="circulo">
                                        <li>Facilitamos o acesso a informações do governo para o usuário.</li>
                                        <li>Direcionamos diretamente o órgão público responsável para resolver tal problema.</li>
                                        <li>Temos uma assistente virtual para instruir a como usar o site da melhor forma.</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <p>Basicamente, nosso site tem como objetivo oferecer facilidade ao usuário para encontrar informações e esclarecer dúvidas. Nunca foi tão fácil acessar páginas referentes a serviços públicos e órgãos do governo.</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="perguntas" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>Perguntas Comuns</h3>
                    <p>Aqui estão algumas perguntas frequentes que podem ajudar você a ter um melhor desempenho no nosso site:</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Como posso solicitar um novo passaporte? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>Você pode solicitar um novo passaporte indo ao site oficial do departamento de passaportes do seu país e seguindo as instruções fornecidas. Geralmente, você precisará preencher um formulário online, agendar uma visita ao escritório de passaportes e fornecer documentos de identificação e prova de cidadania.</p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Como posso pagar meus impostos? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>O método de pagamento de impostos varia de acordo com o país. Normalmente, você pode pagar seus impostos online, por cheque, por depósito bancário ou em uma agência local de impostos. Verifique o site oficial da autoridade tributária do seu país para obter informações específicas.</p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Quais recursos e conteúdos estão disponíveis no site? <i class="bi bi-chevron-down icon-show"></i><i bi bi-chevron-up icon-close></i></div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>Oferecemos uma variedade de recursos, incluindo assistência virtual, barra de pesquisa, informações e muito mais. Explore nosso site para encontrar informações relevantes.</p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Como faço para renovar minha carteira de motorista? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>Para renovar sua carteira de motorista, a maioria dos países exige que você preencha um formulário de renovação e agende uma visita ao departamento de trânsito ou autoridade de licenciamento de veículos. Certifique-se de levar documentos de identificação e pagar as taxas necessárias.</p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Existe algum custo associado ao acesso às informações em nosso site? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>De forma alguma. O site é completamente gratuito e você pode acessar as informações a qualquer momento sem restrições. Aproveite!</p>
                                </div>
                            </li>
                            <li>
                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Como posso compartilhar informações do site com outras pessoas? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                    <p>É fácil compartilhar informações. Use os botões de compartilhamento nas postagens ou copie o link da página e envie para amigos e colegas.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="image2">
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Contatos</h2>
                        <h3><span>Entre em Contato</span></h3>
                        <p>Contate-nos caso haja alguma dúvida, sugestão ou feedback. Abaixo está nosso contato:</p>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div>
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Informe seu Nome Completo:" required>
                                    </div>
                                    <div class="col form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu Email:" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Carregando</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Sua mensagem foi enviada! Obrigado.</div>
                                </div>
                                <div class="text-center"><button type="submit">Enviar</button></div>
                            </form>
                            <!-- ... (seu código HTML anterior) ... -->
                            <!-- Botão circular "Assistente Virtual" -->
                            <div id="assistant-button" class="assistant-button">
                                <img src="assets/img/assistentevirtual.png" alt="Assistente Virtual" class="assistant-logo">
                                <p><b>Assistente Virtual</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Nosso E-mail</h3>
                            <p><b>acessato@gmail.com</b></p>
                        </div>
                    </div>
                    <div class="vertical">
                        <style>
                            .vertical {
                                margin-top: 45px;
                                border-left: 4px solid rgb(86, 121, 153);
                                border-radius: 2px;
                                height: 106px;
                                position: absolute;
                                left: 25%;
                                opacity: 0.7;
                            }
                        </style>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Nosso Número</h3>
                            <p><b>+55 (63) *****-****</b></p>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Section -->
        </section>
    </main><!-- End #main -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>
