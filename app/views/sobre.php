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

        .hero-section {
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            color: white;
            padding: 4rem 2rem;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .hero-text {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
        }

        .content-section {
            background: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--verde-floresta);
            margin-bottom: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .section-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 2rem;
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--verde-floresta);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1.5rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: var(--verde-floresta);
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--verde-floresta);
        }

        .timeline-year {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--verde-floresta);
            margin-bottom: 0.5rem;
        }

        .timeline-text {
            color: #666;
            line-height: 1.6;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .value-card {
            background: var(--off-white);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .value-card:hover {
            border-color: var(--verde-floresta);
            transform: translateY(-5px);
        }

        .value-icon {
            font-size: 3rem;
            color: var(--verde-floresta);
            margin-bottom: 1rem;
        }

        .value-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 1rem;
        }

        .value-text {
            color: #666;
            line-height: 1.6;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            color: white;
            border-radius: 12px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .team-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .team-info {
            padding: 1.5rem;
        }

        .team-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 0.5rem;
        }

        .team-role {
            color: var(--verde-floresta);
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .team-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .cta-section {
            background: linear-gradient(135deg, var(--marrom-madeira), var(--dourado));
            color: white;
            padding: 3rem;
            border-radius: 12px;
            text-align: center;
        }

        .cta-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .cta-text {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: white;
            color: var(--marrom-madeira);
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .content-section {
                padding: 2rem;
            }
            
            .timeline {
                padding-left: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="/" class="logo">TRONCO FORTE</a>
            <ul class="nav-menu">
                <li><a href="/produtos">Produtos</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li><a href="/sustentabilidade">Sustentabilidade</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <a href="/" class="back-link">
            <i class="fas fa-arrow-left"></i>
            Voltar para Home
        </a>
        
        <h1 class="page-title">Sobre a Tronco Forte</h1>
        <p class="page-subtitle">Tradição, qualidade e sustentabilidade em cada projeto</p>
        
        <div class="hero-section">
            <h2 class="hero-title">Construindo o Futuro com Madeira de Qualidade</h2>
            <p class="hero-text">
                Há mais de duas décadas, a Tronco Forte Madeireira tem sido sinônimo de excelência no fornecimento de madeiras nobres e soluções sustentáveis para construção civil, marcenaria e projetos especiais.
            </p>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Nossa História</h2>
            <p class="section-text">
                Fundada em 2001 por uma família apaixonada pela madeira e comprometida com a sustentabilidade, a Tronco Forte nasceu do sonho de oferecer produtos de alta qualidade respeitando o meio ambiente.
            </p>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2001</div>
                    <div class="timeline-text">
                        Fundação da empresa com foco em madeiras para construção civil na região metropolitana de São Paulo.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2005</div>
                    <div class="timeline-text">
                        Expansão para o segmento de marcenaria e móveis sob medida, estabelecendo parcerias com designers renomados.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-text">
                        Implementação do programa de sustentabilidade e certificação FSC, pioneiros na região.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-text">
                        Inauguração do centro de distribuição e ampliação da linha de produtos ecológicos.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-text">
                        Lançamento da plataforma digital e expansão para atendimento nacional.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-text">
                        Consolidação como referência em madeiras sustentáveis e projetos inovadores.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Nossos Valores</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="value-title">Sustentabilidade</h3>
                    <p class="value-text">
                        Comprometidos com práticas ambientalmente responsáveis e manejo florestal sustentável.
                    </p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="value-title">Qualidade</h3>
                    <p class="value-text">
                        Seleção rigorosa de matérias-primas e processos que garantem a excelência de nossos produtos.
                    </p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Confiança</h3>
                    <p class="value-text">
                        Relacionamentos duradouros baseados na transparência e cumprimento de compromissos.
                    </p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Inovação</h3>
                    <p class="value-text">
                        Busca constante por novas tecnologias e soluções que agreguem valor aos nossos clientes.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Números que Falam por Si</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">23+</div>
                    <div class="stat-label">Anos de Experiência</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">5000+</div>
                    <div class="stat-label">Projetos Realizados</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Tipos de Madeira</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Clientes Satisfeitos</div>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Nossa Equipe</h2>
            <p class="section-text">
                Profissionais especializados e apaixonados pelo que fazem, prontos para transformar suas ideias em realidade.
            </p>
            
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Carlos Silva</h3>
                        <div class="team-role">Diretor Geral</div>
                        <p class="team-description">
                            Fundador da empresa com mais de 25 anos de experiência no setor madeireiro.
                        </p>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Ana Santos</h3>
                        <div class="team-role">Engenheira Florestal</div>
                        <p class="team-description">
                            Especialista em sustentabilidade e certificações ambientais.
                        </p>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">João Oliveira</h3>
                        <div class="team-role">Mestre Marceneiro</div>
                        <p class="team-description">
                            Artesão com expertise em projetos personalizados e móveis sob medida.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h2 class="cta-title">Pronto para Seu Próximo Projeto?</h2>
            <p class="cta-text">
                Entre em contato conosco e descubra como podemos transformar suas ideias em realidade com a qualidade e sustentabilidade que você merece.
            </p>
            <a href="/contato" class="btn">
                <i class="fas fa-phone"></i> Fale Conosco
            </a>
        </div>
    </div>
</body>
</html>