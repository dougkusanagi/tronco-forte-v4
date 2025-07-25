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

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 0.8rem 1.5rem;
            background: white;
            border: 2px solid var(--verde-floresta);
            color: var(--verde-floresta);
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-tab.active,
        .filter-tab:hover {
            background: var(--verde-floresta);
            color: white;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .project-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .project-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(45, 90, 39, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-overlay i {
            font-size: 2rem;
            color: white;
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-category {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background: var(--verde-claro);
            color: white;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .project-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 0.5rem;
        }

        .project-description {
            color: #666;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .project-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .project-location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #666;
            font-size: 0.9rem;
        }

        .project-year {
            color: var(--verde-floresta);
            font-weight: 600;
        }

        .featured-project {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            margin-bottom: 2rem;
        }

        .featured-image {
            height: 400px;
            background: linear-gradient(135deg, var(--marrom-madeira), var(--dourado));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .featured-content {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .featured-category {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: var(--dourado);
            color: white;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 1rem;
            width: fit-content;
        }

        .featured-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--cinza-carvao);
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .featured-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .featured-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .featured-stat {
            text-align: center;
        }

        .featured-stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--verde-floresta);
            display: block;
        }

        .featured-stat-label {
            font-size: 0.9rem;
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: var(--verde-floresta);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: fit-content;
        }

        .btn:hover {
            background: var(--verde-claro);
            transform: translateY(-2px);
        }

        .stats-section {
            background: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
            text-align: center;
        }

        .stats-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--verde-floresta);
            margin-bottom: 2rem;
            font-family: 'Playfair Display', serif;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-card {
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

        .btn-light {
            background: white;
            color: var(--marrom-madeira);
        }

        .btn-light:hover {
            background: var(--off-white);
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .featured-project {
                grid-template-columns: 1fr;
            }
            
            .featured-content {
                padding: 2rem;
            }
            
            .featured-title {
                font-size: 1.5rem;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
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
        
        <h1 class="page-title">Nossos Projetos</h1>
        <p class="page-subtitle">Portfólio de realizações que demonstram nossa expertise e compromisso com a excelência</p>
        
        <div class="filter-tabs">
            <div class="filter-tab active" data-filter="todos">Todos</div>
            <div class="filter-tab" data-filter="residencial">Residencial</div>
            <div class="filter-tab" data-filter="comercial">Comercial</div>
            <div class="filter-tab" data-filter="moveis">Móveis</div>
            <div class="filter-tab" data-filter="estrutural">Estrutural</div>
            <div class="filter-tab" data-filter="sustentavel">Sustentável</div>
        </div>
        
        <div class="projects-grid">
            <!-- Projeto em Destaque -->
            <div class="project-card featured-project" data-category="comercial">
                <div class="featured-image">
                    <i class="fas fa-building"></i>
                </div>
                <div class="featured-content">
                    <span class="featured-category">Projeto em Destaque</span>
                    <h2 class="featured-title">Centro Empresarial EcoWood</h2>
                    <p class="featured-description">
                        Complexo empresarial sustentável com estrutura 100% em madeira certificada FSC. Um marco na arquitetura corporativa sustentável, combinando design moderno com responsabilidade ambiental.
                    </p>
                    <div class="featured-stats">
                        <div class="featured-stat">
                            <span class="featured-stat-number">5.000m²</span>
                            <span class="featured-stat-label">Área Construída</span>
                        </div>
                        <div class="featured-stat">
                            <span class="featured-stat-number">18 meses</span>
                            <span class="featured-stat-label">Duração</span>
                        </div>
                        <div class="featured-stat">
                            <span class="featured-stat-number">100%</span>
                            <span class="featured-stat-label">Sustentável</span>
                        </div>
                    </div>
                    <a href="#" class="btn">
                        <i class="fas fa-eye"></i> Ver Detalhes
                    </a>
                </div>
            </div>
            
            <!-- Projetos Regulares -->
            <div class="project-card" data-category="residencial">
                <div class="project-image">
                    <i class="fas fa-home"></i>
                    <div class="project-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Residencial</span>
                    <h3 class="project-title">Casa Moderna Alphaville</h3>
                    <p class="project-description">
                        Residência de alto padrão com deck em madeira ipê e estruturas internas em madeira de demolição restaurada.
                    </p>
                    <div class="project-details">
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Alphaville, SP
                        </div>
                        <div class="project-year">2024</div>
                    </div>
                </div>
            </div>
            
            <div class="project-card" data-category="moveis">
                <div class="project-image">
                    <i class="fas fa-couch"></i>
                    <div class="project-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Móveis</span>
                    <h3 class="project-title">Mobiliário Corporativo Banco XYZ</h3>
                    <p class="project-description">
                        Linha completa de móveis executivos em madeira freijó com acabamento premium para sede corporativa.
                    </p>
                    <div class="project-details">
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i>
                            São Paulo, SP
                        </div>
                        <div class="project-year">2024</div>
                    </div>
                </div>
            </div>
            
            <div class="project-card" data-category="estrutural">
                <div class="project-image">
                    <i class="fas fa-hammer"></i>
                    <div class="project-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Estrutural</span>
                    <h3 class="project-title">Galpão Industrial EcoLogística</h3>
                    <p class="project-description">
                        Estrutura de grande porte em madeira laminada colada para centro de distribuição sustentável.
                    </p>
                    <div class="project-details">
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Guarulhos, SP
                        </div>
                        <div class="project-year">2023</div>
                    </div>
                </div>
            </div>
            
            <div class="project-card" data-category="residencial">
                <div class="project-image">
                    <i class="fas fa-tree"></i>
                    <div class="project-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Residencial</span>
                    <h3 class="project-title">Chalé Sustentável Campos do Jordão</h3>
                    <p class="project-description">
                        Casa de campo com madeira de reflorestamento e técnicas de construção ecológica.
                    </p>
                    <div class="project-details">
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Campos do Jordão, SP
                        </div>
                        <div class="project-year">2023</div>
                    </div>
                </div>
            </div>
            
            <div class="project-card" data-category="comercial">
                <div class="project-image">
                    <i class="fas fa-store"></i>
                    <div class="project-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Comercial</span>
                    <h3 class="project-title">Restaurante Madeira & Sabor</h3>
                    <p class="project-description">
                        Ambiente aconchegante com revestimentos em madeira de demolição e móveis sob medida.
                    </p>
                    <div class="project-details">
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Vila Madalena, SP
                        </div>
                        <div class="project-year">2024</div>
                    </div>
                </div>
            </div>
            
            <div class="project-card" data-category="sustentavel">
                <div class="project-image">
                    <i class="fas fa-leaf"></i>
                    <div class="project-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-category">Sustentável</span>
                    <h3 class="project-title">Escola Verde Futuro</h3>
                    <p class="project-description">
                        Projeto educacional com madeira certificada e sistemas de captação de água da chuva.
                    </p>
                    <div class="project-details">
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Osasco, SP
                        </div>
                        <div class="project-year">2023</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="stats-section">
            <h2 class="stats-title">Nossos Números</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Projetos Concluídos</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Satisfação dos Clientes</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">23</div>
                    <div class="stat-label">Anos de Experiência</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">50k+</div>
                    <div class="stat-label">m² Construídos</div>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h2 class="cta-title">Tem um Projeto em Mente?</h2>
            <p class="cta-text">
                Nossa equipe está pronta para transformar suas ideias em realidade. Entre em contato e vamos criar algo extraordinário juntos.
            </p>
            <a href="/contato" class="btn btn-light">
                <i class="fas fa-rocket"></i> Iniciar Meu Projeto
            </a>
        </div>
    </div>

    <script>
        // Filtro de projetos
        const filterTabs = document.querySelectorAll('.filter-tab');
        const projectCards = document.querySelectorAll('.project-card');
        
        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                filterTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');
                
                const filter = tab.getAttribute('data-filter');
                
                projectCards.forEach(card => {
                    if (filter === 'todos' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
        
        // Animação de entrada dos cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Inicializar animações
        projectCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>