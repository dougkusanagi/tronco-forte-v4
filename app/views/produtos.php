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
            margin-bottom: 2rem;
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

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
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
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            background: var(--verde-floresta);
            color: white;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: var(--verde-claro);
            transform: translateY(-2px);
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
        
        <h1 class="page-title">Nossos Produtos</h1>
        <p class="page-subtitle">Oferecemos uma linha completa de produtos em madeira com qualidade superior e certificação sustentável</p>
        
        <div class="products-grid">
            <div class="product-card">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=high%20quality%20construction%20wood%20beams%20and%20lumber%20for%20civil%20construction&image_size=landscape_4_3" alt="Madeira para Construção Civil" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">Madeira para Construção Civil</h3>
                    <p class="product-description">Vigas, caibros, ripas e tábuas de alta resistência para estruturas. Madeira seca em estufa com tratamento preservativo.</p>
                    <a href="/contato" class="btn">Solicitar Orçamento</a>
                </div>
            </div>
            
            <div class="product-card">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=beautiful%20wooden%20deck%20flooring%20natural%20wood%20texture&image_size=landscape_4_3" alt="Pisos e Decks" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">Pisos e Decks</h3>
                    <p class="product-description">Pisos de madeira maciça e decks para áreas externas. Acabamento premium com verniz UV e tratamento anti-umidade.</p>
                    <a href="/contato" class="btn">Solicitar Orçamento</a>
                </div>
            </div>
            
            <div class="product-card">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=treated%20wood%20lumber%20protected%20timber%20industrial%20quality&image_size=landscape_4_3" alt="Madeira Tratada" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">Madeira Tratada</h3>
                    <p class="product-description">Madeira tratada em autoclave com CCA para uso externo. Resistente a fungos, cupins e intempéries.</p>
                    <a href="/contato" class="btn">Solicitar Orçamento</a>
                </div>
            </div>
            
            <div class="product-card">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=custom%20wooden%20furniture%20craftsmanship%20artisan%20made&image_size=landscape_4_3" alt="Móveis Sob Medida" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">Móveis Sob Medida</h3>
                    <p class="product-description">Móveis personalizados com design exclusivo. Marcenaria de alta qualidade com madeiras nobres selecionadas.</p>
                    <a href="/contato" class="btn">Solicitar Orçamento</a>
                </div>
            </div>
            
            <div class="product-card">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=special%20wooden%20structures%20engineering%20advanced%20timber%20construction&image_size=landscape_4_3" alt="Estruturas Especiais" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">Estruturas Especiais</h3>
                    <p class="product-description">Projetos estruturais complexos com madeira laminada colada (MLC). Soluções técnicas para grandes vãos.</p>
                    <a href="/contato" class="btn">Solicitar Orçamento</a>
                </div>
            </div>
            
            <div class="product-card">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20wood%20projects%20eco%20friendly%20green%20construction&image_size=landscape_4_3" alt="Projetos Sustentáveis" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">Projetos Sustentáveis</h3>
                    <p class="product-description">Soluções eco-friendly com madeira certificada FSC. Construções verdes com baixo impacto ambiental.</p>
                    <a href="/contato" class="btn">Solicitar Orçamento</a>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 3rem;">
            <a href="/contato" class="btn" style="font-size: 1.1rem; padding: 1rem 2rem;">Fale Conosco para Mais Informações</a>
        </div>
    </div>
</body>
</html>