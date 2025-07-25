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
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20forest%20management%20aerial%20view%20green%20trees%20nature%20conservation&image_size=landscape_16_9') center/cover;
            opacity: 0.2;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
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

        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .pillar-card {
            background: var(--off-white);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .pillar-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--verde-floresta), var(--verde-claro));
        }

        .pillar-card:hover {
            border-color: var(--verde-floresta);
            transform: translateY(-5px);
        }

        .pillar-icon {
            font-size: 3rem;
            color: var(--verde-floresta);
            margin-bottom: 1rem;
        }

        .pillar-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 1rem;
        }

        .pillar-text {
            color: #666;
            line-height: 1.6;
        }

        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .certification-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .certification-card:hover {
            transform: translateY(-5px);
        }

        .certification-logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
        }

        .certification-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 0.5rem;
        }

        .certification-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .impact-stats {
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

        .practices-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .practice-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1.5rem;
            background: var(--off-white);
            border-radius: 8px;
            border-left: 4px solid var(--verde-floresta);
        }

        .practice-icon {
            font-size: 1.5rem;
            color: var(--verde-floresta);
            margin-top: 0.2rem;
        }

        .practice-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 0.5rem;
        }

        .practice-content p {
            color: #666;
            line-height: 1.5;
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
            margin: 0 0.5rem;
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
        
        <h1 class="page-title">Sustentabilidade</h1>
        <p class="page-subtitle">Compromisso com o futuro do planeta e das próximas gerações</p>
        
        <div class="hero-section">
            <div class="hero-content">
                <h2 class="hero-title">Madeira Responsável, Futuro Sustentável</h2>
                <p class="hero-text">
                    Nossa missão vai além de fornecer madeira de qualidade. Trabalhamos para preservar as florestas, apoiar comunidades locais e construir um futuro mais verde para todos.
                </p>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Nossos Pilares de Sustentabilidade</h2>
            <p class="section-text">
                Baseamos nossas práticas em três pilares fundamentais que orientam todas as nossas decisões e ações.
            </p>
            
            <div class="pillars-grid">
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 class="pillar-title">Ambiental</h3>
                    <p class="pillar-text">
                        Manejo florestal responsável, reflorestamento ativo e preservação da biodiversidade em todas as nossas operações.
                    </p>
                </div>
                
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="pillar-title">Social</h3>
                    <p class="pillar-text">
                        Apoio às comunidades locais, geração de empregos dignos e programas de educação ambiental.
                    </p>
                </div>
                
                <div class="pillar-card">
                    <div class="pillar-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="pillar-title">Econômico</h3>
                    <p class="pillar-text">
                        Viabilidade econômica a longo prazo, investimento em tecnologias limpas e economia circular.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Certificações e Reconhecimentos</h2>
            <p class="section-text">
                Nossas práticas sustentáveis são reconhecidas por organizações internacionais e certificadoras renomadas.
            </p>
            
            <div class="certifications-grid">
                <div class="certification-card">
                    <div class="certification-logo">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="certification-name">FSC® Certified</h3>
                    <p class="certification-description">
                        Certificação do Forest Stewardship Council garantindo manejo florestal responsável.
                    </p>
                </div>
                
                <div class="certification-card">
                    <div class="certification-logo">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="certification-name">PEFC Endorsed</h3>
                    <p class="certification-description">
                        Reconhecimento do Programme for Endorsement of Forest Certification.
                    </p>
                </div>
                
                <div class="certification-card">
                    <div class="certification-logo">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="certification-name">ISO 14001</h3>
                    <p class="certification-description">
                        Sistema de gestão ambiental certificado internacionalmente.
                    </p>
                </div>
                
                <div class="certification-card">
                    <div class="certification-logo">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3 class="certification-name">Carbono Neutro</h3>
                    <p class="certification-description">
                        Compromisso com a neutralidade de carbono em nossas operações.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Nosso Impacto Positivo</h2>
            <p class="section-text">
                Números que demonstram nosso compromisso real com a sustentabilidade e preservação ambiental.
            </p>
            
            <div class="impact-stats">
                <div class="stat-card">
                    <div class="stat-number">50k+</div>
                    <div class="stat-label">Árvores Plantadas</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">1200</div>
                    <div class="stat-label">Hectares Preservados</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">85%</div>
                    <div class="stat-label">Redução de Resíduos</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">300+</div>
                    <div class="stat-label">Famílias Beneficiadas</div>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Práticas Sustentáveis</h2>
            <p class="section-text">
                Implementamos diversas práticas que garantem a sustentabilidade em toda nossa cadeia produtiva.
            </p>
            
            <div class="practices-list">
                <div class="practice-item">
                    <div class="practice-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="practice-content">
                        <h3>Reflorestamento Ativo</h3>
                        <p>Para cada árvore utilizada, plantamos três novas mudas nativas da região.</p>
                    </div>
                </div>
                
                <div class="practice-item">
                    <div class="practice-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <div class="practice-content">
                        <h3>Conservação da Água</h3>
                        <p>Sistemas de captação e reuso de água em todos os processos produtivos.</p>
                    </div>
                </div>
                
                <div class="practice-item">
                    <div class="practice-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <div class="practice-content">
                        <h3>Energia Renovável</h3>
                        <p>70% de nossa energia vem de fontes renováveis, incluindo solar e biomassa.</p>
                    </div>
                </div>
                
                <div class="practice-item">
                    <div class="practice-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div class="practice-content">
                        <h3>Economia Circular</h3>
                        <p>Reaproveitamento de 95% dos resíduos em novos produtos ou energia.</p>
                    </div>
                </div>
                
                <div class="practice-item">
                    <div class="practice-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="practice-content">
                        <h3>Logística Verde</h3>
                        <p>Otimização de rotas e uso de veículos menos poluentes nas entregas.</p>
                    </div>
                </div>
                
                <div class="practice-item">
                    <div class="practice-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="practice-content">
                        <h3>Educação Ambiental</h3>
                        <p>Programas de conscientização para funcionários e comunidades locais.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-section">
            <h2 class="section-title">Cronograma de Metas Sustentáveis</h2>
            <p class="section-text">
                Nosso compromisso com o futuro inclui metas ambiciosas e mensuráveis para os próximos anos.
            </p>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-text">
                        Alcançar 100% de energia renovável e implementar sistema de rastreabilidade blockchain.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2025</div>
                    <div class="timeline-text">
                        Certificação Carbono Neutro e expansão do programa de reflorestamento para 100.000 mudas/ano.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2026</div>
                    <div class="timeline-text">
                        Implementação de fábrica 100% sustentável e programa de economia circular completo.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2027</div>
                    <div class="timeline-text">
                        Expansão internacional com foco em mercados sustentáveis e parcerias globais.
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2030</div>
                    <div class="timeline-text">
                        Tornar-se referência mundial em madeira sustentável e impacto positivo regenerativo.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h2 class="cta-title">Junte-se à Nossa Missão</h2>
            <p class="cta-text">
                Escolha produtos sustentáveis e faça parte da construção de um futuro mais verde. Cada projeto é uma oportunidade de fazer a diferença.
            </p>
            <a href="/produtos" class="btn">
                <i class="fas fa-leaf"></i> Ver Produtos Sustentáveis
            </a>
            <a href="/contato" class="btn">
                <i class="fas fa-handshake"></i> Seja Nosso Parceiro
            </a>
        </div>
    </div>
</body>
</html>