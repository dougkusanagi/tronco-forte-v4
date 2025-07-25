<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --verde-floresta: #2D5A27;
            --marrom-madeira: #8B4513;
            --verde-claro: #7CB342;
            --cinza-carvao: #2C2C2C;
            --off-white: #F8F6F0;
            --dourado: #DAA520;
            --branco: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--cinza-carvao);
            background: var(--off-white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            background: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--verde-floresta);
            text-decoration: none;
            font-family: 'Playfair Display', serif;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--cinza-carvao);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: var(--verde-floresta);
        }

        .page-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--verde-floresta);
            text-align: center;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .page-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--verde-floresta);
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 2rem;
        }

        .back-link:hover {
            color: var(--verde-claro);
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--verde-floresta);
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--cinza-carvao);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--verde-floresta);
        }

        .btn {
            padding: 1rem 2rem;
            background: var(--verde-floresta);
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn:hover {
            background: var(--verde-claro);
            transform: translateY(-2px);
        }

        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .info-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--verde-floresta);
            margin-bottom: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: var(--off-white);
            border-radius: 8px;
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--verde-floresta);
            width: 30px;
            margin-top: 0.2rem;
        }

        .contact-item div {
            flex: 1;
        }

        .contact-label {
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 0.2rem;
        }

        .contact-value {
            color: #666;
            line-height: 1.5;
        }

        .contact-value a {
            color: var(--verde-floresta);
            text-decoration: none;
        }

        .contact-value a:hover {
            color: var(--verde-claro);
        }

        .map-section {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .map-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1rem;
            display: none;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1rem;
            display: none;
        }

        @media (max-width: 768px) {
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .nav-menu {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="<?= $base_path ?: '/' ?>" class="logo">TRONCO FORTE</a>
            <ul class="nav-menu">
                <li><a href="<?= $base_path ?>/produtos">Produtos</a></li>
                <li><a href="<?= $base_path ?>/projetos">Projetos</a></li>
                <li><a href="<?= $base_path ?>/sustentabilidade">Sustentabilidade</a></li>
                <li><a href="<?= $base_path ?>/sobre">Sobre</a></li>
                <li><a href="<?= $base_path ?>/contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <a href="<?= $base_path ?: '/' ?>" class="back-link">
            <i class="fas fa-arrow-left"></i>
            Voltar para Home
        </a>
        
        <h1 class="page-title">Entre em Contato</h1>
        <p class="page-subtitle">Estamos prontos para atender suas necessidades e transformar seus projetos em realidade</p>
        
        <div class="contact-content">
            <div class="contact-form">
                <h2 class="form-title">Envie sua Mensagem</h2>
                
                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i> Mensagem enviada com sucesso! Entraremos em contato em breve.
                </div>
                
                <div class="error-message" id="errorMessage">
                    <i class="fas fa-exclamation-circle"></i> Erro ao enviar mensagem. Tente novamente.
                </div>
                
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nome Completo *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Telefone *</label>
                        <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Empresa</label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Assunto *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecione um assunto</option>
                            <option value="orcamento">Solicitação de Orçamento</option>
                            <option value="produtos">Informações sobre Produtos</option>
                            <option value="projetos">Projetos Personalizados</option>
                            <option value="sustentabilidade">Sustentabilidade</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensagem *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Conte-nos sobre seu projeto ou necessidade" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">
                        <i class="fas fa-paper-plane"></i> Enviar Mensagem
                    </button>
                </form>
            </div>
            
            <div class="contact-info">
                <h2 class="info-title">Informações de Contato</h2>
                
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <div class="contact-label">Telefone</div>
                        <div class="contact-value">
                            <a href="tel:+551134567890">(11) 3456-7890</a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fab fa-whatsapp"></i>
                    <div>
                        <div class="contact-label">WhatsApp</div>
                        <div class="contact-value">
                            <a href="https://wa.me/5511998765432" target="_blank">(11) 99876-5432</a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <div class="contact-label">E-mail</div>
                        <div class="contact-value">
                            <a href="mailto:contato@troncoforte.com.br">contato@troncoforte.com.br</a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <div class="contact-label">Endereço</div>
                        <div class="contact-value">
                            Rua das Madeiras, 123<br>
                            Vila Industrial<br>
                            São Paulo - SP<br>
                            CEP: 01234-567
                        </div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <div class="contact-label">Horário de Funcionamento</div>
                        <div class="contact-value">
                            Segunda a Sexta: 7h às 17h<br>
                            Sábado: 7h às 12h<br>
                            Domingo: Fechado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="map-section">
            <h2 class="info-title">Nossa Localização</h2>
            <div class="map-placeholder">
                <div>
                    <i class="fas fa-map-marked-alt" style="font-size: 3rem; margin-bottom: 1rem;"></i><br>
                    Mapa interativo em breve<br>
                    <small>Rua das Madeiras, 123 - Vila Industrial, São Paulo - SP</small>
                </div>
            </div>
            <p style="color: #666; margin-top: 1rem;">
                Estamos localizados em uma região de fácil acesso, com estacionamento próprio e estrutura completa para atendimento.
            </p>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData);
            
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');
            
            // Esconder mensagens anteriores
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            
            try {
                const response = await fetch('<?= $base_path ?>/contato', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    successMessage.style.display = 'block';
                    e.target.reset();
                    
                    // Scroll para a mensagem de sucesso
                    successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    errorMessage.style.display = 'block';
                    errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            } catch (error) {
                errorMessage.style.display = 'block';
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
        
        // Máscara para telefone
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 11) {
                value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
            } else if (value.length >= 7) {
                value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
            } else if (value.length >= 3) {
                value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
            }
            e.target.value = value;
        });
    </script>
</body>
</html>