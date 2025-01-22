<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagamentos Integrado</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="images/logo-removebg-preview.png" alt="Logo Pagamentos" class="logo-img">
            </div>
            <nav>
                <a href="#features">Recursos</a>
                <a href="#process">Como Funciona</a>
                <a href="#contact" class="nav-cta">Começar Agora</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>A solução completa para seus pagamentos.</h1>
                    <p>Gerencie pagamentos de forma fácil e rápida: PIX, cartões e TED, com emissão automática de nota fiscal.</p>
                    <button class="cta-button">Comece Gratuitamente</button>
                </div>
                <div class="hero-image">
                    <div class="hero-illustration">
                        <div class="device-frame">
                            <div class="payment-screen">
                                <div class="payment-header">
                                    <div class="header-dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="payment-icons">
                                    <i class="fas fa-credit-card payment-icon"></i>
                                    <i class="fas fa-qrcode payment-icon"></i>
                                    <i class="fas fa-money-bill-wave payment-icon"></i>
                                </div>
                                <div class="payment-details">
                                    <div class="payment-line"></div>
                                    <div class="payment-line"></div>
                                    <div class="payment-line short"></div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="security-badge">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="speed-badge">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="check-badge">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Segurança</h3>
                <p>Transações protegidas e dados criptografados</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-bolt"></i>
                <h3>Agilidade</h3>
                <p>Pagamentos processados em segundos</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-piggy-bank"></i>
                <h3>Economia</h3>
                <p>Menores taxas do mercado</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-magic"></i>
                <h3>Simplicidade</h3>
                <p>Interface intuitiva e fácil de usar</p>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="process">
        <div class="container">
            <h2>Como Funciona</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Cadastre-se</h3>
                    <p>Crie sua conta gratuitamente em menos de 5 minutos</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Configure</h3>
                    <p>Personalize suas preferências de recebimento</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Comece a Receber</h3>
                    <p>Aceite pagamentos instantaneamente</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-text">
                    <h2>Vamos Começar?</h2>
                    <p>Entre em contato e descubra como podemos ajudar seu negócio a crescer.</p>
                </div>
                <form id="contact-form">
                    <div class="form-group">
                        <input type="text" name="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
                    </div>
                    <div class="form-group">
                        <textarea name="mensagem" placeholder="Mensagem" required></textarea>
                    </div>
                    <button type="submit" class="cta-button">Entre em contato</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y') ?> Sistema de Pagamentos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>