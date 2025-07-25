<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
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
            overflow-x: hidden;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* Header e Navegação */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
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
            position: relative;
        }

        .nav-menu a:hover {
            color: var(--verde-floresta);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--verde-floresta);
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--cinza-carvao);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(45, 90, 39, 0.4), rgba(44, 44, 44, 0.4));
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 800;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            margin-bottom: 2rem;
            font-weight: 400;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--verde-floresta);
            color: white;
        }

        .btn-primary:hover {
            background: var(--verde-claro);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 90, 39, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--verde-floresta);
        }

        /* Barra de Credibilidade */
        .credentials {
            background: var(--off-white);
            padding: 1.5rem 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .credentials-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .credential-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--dourado);
            font-weight: 600;
        }

        .credential-item i {
            font-size: 1.2rem;
        }

        /* Seções Gerais */
        .section {
            padding: 5rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--cinza-carvao);
            font-family: 'Playfair Display', serif;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Produtos em Destaque */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(45, 90, 39, 0.9), rgba(124, 179, 66, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .product-overlay i {
            font-size: 3rem;
            color: white;
        }

        .product-content {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--cinza-carvao);
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
        }

        /* Estatísticas */
        .statistics {
            background: linear-gradient(rgba(139, 69, 19, 0.1), rgba(139, 69, 19, 0.1)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="wood" patternUnits="userSpaceOnUse" width="100" height="100"><rect width="100" height="100" fill="%23f4f1eb"/><path d="M0 20h100M0 40h100M0 60h100M0 80h100" stroke="%23e8e0d0" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23wood)"/></svg>');
            background-size: 200px 200px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--verde-floresta);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--cinza-carvao);
        }

        /* Projetos */
        .projects-carousel {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .projects-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .project-slide {
            min-width: 100%;
            position: relative;
        }

        .project-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .project-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 2rem;
        }

        .project-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .project-location {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 0.5rem;
        }

        .project-description {
            font-size: 0.95rem;
            opacity: 0.8;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--cinza-carvao);
            transition: all 0.3s ease;
        }

        .carousel-controls:hover {
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .carousel-prev {
            left: 1rem;
        }

        .carousel-next {
            right: 1rem;
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ccc;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .carousel-dot.active {
            background: var(--verde-floresta);
        }

        /* Sustentabilidade */
        .sustainability {
            background: linear-gradient(135deg, var(--verde-floresta), var(--verde-claro));
            color: white;
        }

        .sustainability .section-title {
            color: white;
        }

        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .pillar-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .pillar-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--off-white);
        }

        .pillar-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .pillar-description {
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Depoimentos */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .testimonial-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
            color: #555;
            line-height: 1.6;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--cinza-carvao);
            margin-bottom: 0.5rem;
        }

        .testimonial-company {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .testimonial-rating {
            color: var(--dourado);
        }

        /* CTA Final */
        .final-cta {
            background: linear-gradient(135deg, var(--cinza-carvao), var(--verde-floresta));
            color: white;
        }

        .final-cta .section-title {
            color: white;
        }

        .cta-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .contact-info {
            padding: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--verde-claro);
            width: 30px;
        }

        .contact-item div {
            flex: 1;
        }

        .contact-label {
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .contact-value {
            opacity: 0.9;
        }

        /* Footer */
        .footer {
            background: var(--cinza-carvao);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--verde-claro);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--verde-claro);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--verde-floresta);
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--verde-claro);
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 1rem;
            text-align: center;
            color: #999;
        }

        /* Animações */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .credentials-container {
                flex-direction: column;
                gap: 1rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .cta-content {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .carousel-controls {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 3rem 0;
            }

            .container {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav-container">
            <a href="<?= $base_path ?: '/' ?>" class="logo">TRONCO FORTE</a>
            <ul class="nav-menu">
                <li><a href="<?= $base_path ?>/produtos">Produtos</a></li>
                <li><a href="<?= $base_path ?>/projetos">Projetos</a></li>
                <li><a href="<?= $base_path ?>/sustentabilidade">Sustentabilidade</a></li>
                <li><a href="<?= $base_path ?>/sobre">Sobre</a></li>
                <li><a href="<?= $base_path ?>/contato">Contato</a></li>
            </ul>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <img src="<?= $hero['video_url'] ?>" alt="Floresta sustentável" class="hero-video">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title font-display"><?= $hero['title'] ?></h1>
            <p class="hero-subtitle"><?= $hero['subtitle'] ?></p>
            <div class="hero-buttons">
                <a href="<?= $base_path ?>/produtos" class="btn btn-secondary">Nossos Produtos</a>
                <a href="<?= $base_path ?>/contato" class="btn btn-primary">Solicitar Orçamento</a>
            </div>
        </div>
    </section>

    <!-- Barra de Credibilidade -->
    <section class="credentials">
        <div class="credentials-container">
            <div class="credential-item">
                <i class="fas fa-award"></i>
                <span><?= $credentials['years_experience'] ?> anos de experiência</span>
            </div>
            <div class="credential-item">
                <i class="fas fa-check-circle"></i>
                <span><?= $credentials['projects_delivered'] ?> projetos entregues</span>
            </div>
            <div class="credential-item">
                <i class="fas fa-leaf"></i>
                <span>Certificação <?= implode(' | ', $credentials['certifications']) ?></span>
            </div>
        </div>
    </section>

    <!-- Produtos em Destaque -->
    <section class="section">
        <div class="container">
            <h2 class="section-title font-display fade-in">Nossas Especialidades</h2>
            <p class="section-subtitle fade-in">Oferecemos soluções completas em madeira com qualidade superior e sustentabilidade garantida</p>
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <div class="product-card fade-in">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="product-image">
                    <div class="product-overlay">
                        <i class="fas fa-<?= $product['icon'] ?>"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><?= $product['name'] ?></h3>
                        <p class="product-description"><?= $product['description'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Números Impressionantes -->
    <section class="section statistics">
        <div class="container">
            <h2 class="section-title font-display fade-in">Números que Impressionam</h2>
            <div class="stats-grid">
                <?php foreach ($statistics as $stat): ?>
                <div class="stat-item fade-in">
                    <div class="stat-number font-display" data-target="<?= $stat['number'] ?>"><?= $stat['number'] ?></div>
                    <div class="stat-label"><?= $stat['label'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projetos em Destaque -->
    <section class="section">
        <div class="container">
            <h2 class="section-title font-display fade-in">Projetos que Transformam Espaços</h2>
            <p class="section-subtitle fade-in">Conheça alguns dos nossos projetos mais marcantes e inspiradores</p>
            <div class="projects-carousel fade-in">
                <div class="projects-track" id="projectsTrack">
                    <?php foreach ($featured_projects as $project): ?>
                    <div class="project-slide">
                        <img src="<?= $project['image'] ?>" alt="<?= $project['name'] ?>" class="project-image">
                        <div class="project-info">
                            <h3 class="project-name"><?= $project['name'] ?></h3>
                            <p class="project-location"><i class="fas fa-map-marker-alt"></i> <?= $project['location'] ?></p>
                            <p class="project-description"><?= $project['description'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-controls carousel-prev" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-controls carousel-next" id="nextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="carousel-dots" id="carouselDots"></div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="<?= $base_path ?>/projetos" class="btn btn-primary">Ver Todos os Projetos</a>
            </div>
        </div>
    </section>

    <!-- Sustentabilidade -->
    <section class="section sustainability">
        <div class="container">
            <h2 class="section-title font-display fade-in">Compromisso com o Futuro</h2>
            <p class="section-subtitle fade-in">Nossa responsabilidade ambiental vai além da madeira - é um compromisso com as próximas gerações</p>
            <div class="pillars-grid">
                <?php foreach ($sustainability_pillars as $pillar): ?>
                <div class="pillar-card fade-in">
                    <div class="pillar-icon">
                        <i class="fas fa-<?= $pillar['icon'] ?>"></i>
                    </div>
                    <h3 class="pillar-title"><?= $pillar['title'] ?></h3>
                    <p class="pillar-description"><?= $pillar['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="section">
        <div class="container">
            <h2 class="section-title font-display fade-in">O que Nossos Clientes Dizem</h2>
            <p class="section-subtitle fade-in">A satisfação dos nossos clientes é o nosso maior orgulho</p>
            <div class="testimonials-grid">
                <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial-card fade-in">
                    <img src="<?= $testimonial['photo'] ?>" alt="<?= $testimonial['name'] ?>" class="testimonial-photo">
                    <p class="testimonial-text">"<?= $testimonial['text'] ?>"</p>
                    <div class="testimonial-author"><?= $testimonial['name'] ?></div>
                    <div class="testimonial-company"><?= $testimonial['company'] ?></div>
                    <div class="testimonial-rating">
                        <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Final -->
    <section class="section final-cta">
        <div class="container">
            <h2 class="section-title font-display fade-in">Pronto para Seu Próximo Projeto?</h2>
            <p class="section-subtitle fade-in">Nossa equipe está pronta para transformar sua ideia em realidade</p>
            <div class="cta-content">
                <div class="contact-form fade-in">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" name="name" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea id="message" name="message" rows="4" placeholder="Conte-nos sobre seu projeto"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Solicitar Contato</button>
                    </form>
                </div>
                <div class="contact-info fade-in">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <div class="contact-label">Telefone</div>
                            <div class="contact-value"><?= $contact_info['phone'] ?></div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <div class="contact-label">WhatsApp</div>
                            <div class="contact-value"><?= $contact_info['whatsapp'] ?></div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <div class="contact-label">E-mail</div>
                            <div class="contact-value"><?= $contact_info['email'] ?></div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <div class="contact-label">Endereço</div>
                            <div class="contact-value"><?= $contact_info['address'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tronco Forte</h3>
                    <p>Madeira de qualidade superior com sustentabilidade garantida. Transformando projetos há mais de 25 anos.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Produtos</h3>
                    <ul>
                        <li><a href="<?= $base_path ?>/produtos">Madeira para Construção</a></li>
                        <li><a href="<?= $base_path ?>/produtos">Pisos e Decks</a></li>
                        <li><a href="<?= $base_path ?>/produtos">Madeira Tratada</a></li>
                        <li><a href="<?= $base_path ?>/produtos">Móveis Sob Medida</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Serviços</h3>
                    <ul>
                        <li><a href="<?= $base_path ?>/projetos">Projetos Personalizados</a></li>
                        <li><a href="<?= $base_path ?>/sustentabilidade">Consultoria Sustentável</a></li>
                        <li><a href="<?= $base_path ?>/contato">Orçamentos</a></li>
                        <li><a href="<?= $base_path ?>/contato">Suporte Técnico</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Empresa</h3>
                    <ul>
                        <li><a href="<?= $base_path ?>/sobre">Nossa História</a></li>
                        <li><a href="<?= $base_path ?>/sustentabilidade">Sustentabilidade</a></li>
                        <li><a href="<?= $base_path ?>/contato">Trabalhe Conosco</a></li>
                        <li><a href="<?= $base_path ?>/contato">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Tronco Forte Madeireira. Todos os direitos reservados. | <a href="#" style="color: #999;">Política de Privacidade</a> | <a href="#" style="color: #999;">Termos de Uso</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Projects carousel
        let currentSlide = 0;
        const slides = document.querySelectorAll('.project-slide');
        const totalSlides = slides.length;
        const track = document.getElementById('projectsTrack');
        const dotsContainer = document.getElementById('carouselDots');

        // Create dots
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('div');
            dot.classList.add('carousel-dot');
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }

        function updateCarousel() {
            track.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update dots
            document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateCarousel();
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        document.getElementById('nextBtn').addEventListener('click', nextSlide);
        document.getElementById('prevBtn').addEventListener('click', prevSlide);

        // Auto-play carousel
        setInterval(nextSlide, 5000);

        // Contact form
        document.getElementById('contactForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData);
            
            try {
                const response = await fetch('/contato', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
                    e.target.reset();
                } else {
                    alert('Erro ao enviar mensagem. Tente novamente.');
                }
            } catch (error) {
                alert('Erro ao enviar mensagem. Tente novamente.');
            }
        });

        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', () => {
            const navMenu = document.querySelector('.nav-menu');
            navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
        });

        // Smooth scrolling for anchor links
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
    </script>
</body>
</html>