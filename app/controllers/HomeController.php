<?php

namespace app\controllers;

use flight\Engine;
use app\utils\UrlHelper;

class HomeController
{
    private Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }
    
    /**
     * Get common data for all views
     */
    private function getCommonData(): array
    {
        return [
            'base_path' => UrlHelper::getBasePath(),
            'url_helper' => UrlHelper::class
        ];
    }

    public function index(): void
    {
        // Dados para a homepage
        $data = [
            'page_title' => 'Tronco Forte - Madeira de Qualidade Superior',
            'meta_description' => 'Madeireira com 25+ anos de experiência. Madeira certificada FSC, projetos sustentáveis e qualidade superior para construção civil.',
            'hero' => [
                'title' => 'TRONCO FORTE',
                'subtitle' => 'Madeira de qualidade superior. Sustentabilidade em cada projeto.',
                'video_url' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=cinematic%20footage%20of%20sustainable%20forest%20at%20dawn%20with%20sunlight%20filtering%20through%20trees%20followed%20by%20skilled%20workers%20operating%20modern%20machinery&image_size=landscape_16_9'
            ],
            'credentials' => [
                'years_experience' => '25+',
                'projects_delivered' => '10.000+',
                'certifications' => ['FSC', 'ISO']
            ],
            'products' => [
                [
                    'name' => 'Madeira para Construção Civil',
                    'description' => 'Estruturas resistentes e duráveis',
                    'icon' => 'building',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=high%20quality%20construction%20wood%20beams%20and%20lumber%20for%20civil%20construction&image_size=square_hd'
                ],
                [
                    'name' => 'Pisos e Decks',
                    'description' => 'Beleza natural para seus ambientes',
                    'icon' => 'home',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=beautiful%20wooden%20deck%20flooring%20natural%20wood%20texture&image_size=square_hd'
                ],
                [
                    'name' => 'Madeira Tratada',
                    'description' => 'Proteção e longevidade garantidas',
                    'icon' => 'shield',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=treated%20wood%20lumber%20protected%20timber%20industrial%20quality&image_size=square_hd'
                ],
                [
                    'name' => 'Móveis Sob Medida',
                    'description' => 'Projetos únicos e personalizados',
                    'icon' => 'wrench',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=custom%20wooden%20furniture%20craftsmanship%20artisan%20made&image_size=square_hd'
                ],
                [
                    'name' => 'Estruturas Especiais',
                    'description' => 'Soluções técnicas avançadas',
                    'icon' => 'settings',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=special%20wooden%20structures%20engineering%20advanced%20timber%20construction&image_size=square_hd'
                ],
                [
                    'name' => 'Projetos Sustentáveis',
                    'description' => 'Compromisso com o meio ambiente',
                    'icon' => 'leaf',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20wood%20projects%20eco%20friendly%20green%20construction&image_size=square_hd'
                ]
            ],
            'statistics' => [
                ['number' => '25+', 'label' => 'Anos de Mercado'],
                ['number' => '50.000m³', 'label' => 'Madeira Processada/Ano'],
                ['number' => '98%', 'label' => 'Clientes Satisfeitos'],
                ['number' => '100%', 'label' => 'Madeira Certificada']
            ],
            'featured_projects' => [
                [
                    'name' => 'Residência Moderna Alphaville',
                    'location' => 'São Paulo, SP',
                    'description' => 'Estrutura completa em madeira certificada',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=modern%20wooden%20house%20architecture%20luxury%20residence%20timber%20structure&image_size=landscape_4_3'
                ],
                [
                    'name' => 'Deck Corporativo Faria Lima',
                    'location' => 'São Paulo, SP',
                    'description' => 'Área de convivência empresarial',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=corporate%20wooden%20deck%20business%20building%20modern%20office%20space&image_size=landscape_4_3'
                ],
                [
                    'name' => 'Pousada Ecológica Serra da Mantiqueira',
                    'location' => 'Campos do Jordão, SP',
                    'description' => 'Construção sustentável em área preservada',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=ecological%20wooden%20lodge%20mountain%20sustainable%20architecture%20nature&image_size=landscape_4_3'
                ],
                [
                    'name' => 'Centro Comercial Vila Madalena',
                    'location' => 'São Paulo, SP',
                    'description' => 'Fachada e estruturas internas',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=commercial%20center%20wooden%20facade%20modern%20retail%20architecture&image_size=landscape_4_3'
                ],
                [
                    'name' => 'Restaurante Gourmet Jardins',
                    'location' => 'São Paulo, SP',
                    'description' => 'Ambientação rústica sofisticada',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=gourmet%20restaurant%20wooden%20interior%20rustic%20sophisticated%20dining&image_size=landscape_4_3'
                ],
                [
                    'name' => 'Condomínio Residencial Granja Viana',
                    'location' => 'Cotia, SP',
                    'description' => 'Múltiplas residências em madeira',
                    'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=residential%20condominium%20wooden%20houses%20luxury%20neighborhood&image_size=landscape_4_3'
                ]
            ],
            'sustainability_pillars' => [
                [
                    'title' => 'Reflorestamento Responsável',
                    'description' => 'Plantio de 3 árvores para cada árvore utilizada',
                    'icon' => 'tree-pine'
                ],
                [
                    'title' => 'Certificações Ambientais',
                    'description' => 'FSC e ISO 14001 garantem origem sustentável',
                    'icon' => 'award'
                ],
                [
                    'title' => 'Tecnologia Limpa',
                    'description' => 'Processos que minimizam impacto ambiental',
                    'icon' => 'zap'
                ]
            ],
            'testimonials' => [
                [
                    'name' => 'Carlos Mendes',
                    'company' => 'Construtora Mendes & Associados',
                    'text' => 'Qualidade excepcional e prazo de entrega sempre cumprido. Parceria de confiança há mais de 10 anos.',
                    'rating' => 5,
                    'photo' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20businessman%20construction%20industry%20portrait%20confident&image_size=square'
                ],
                [
                    'name' => 'Ana Paula Silva',
                    'company' => 'Arquitetura Silva Design',
                    'text' => 'A madeira da Tronco Forte transforma nossos projetos. Sustentabilidade e beleza em perfeita harmonia.',
                    'rating' => 5,
                    'photo' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20female%20architect%20designer%20portrait%20confident&image_size=square'
                ],
                [
                    'name' => 'Roberto Oliveira',
                    'company' => 'Madeireira Oliveira',
                    'text' => 'Fornecedor confiável com produtos de primeira linha. Recomendo para qualquer projeto.',
                    'rating' => 5,
                    'photo' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20businessman%20lumber%20industry%20portrait%20experienced&image_size=square'
                ]
            ],
            'contact_info' => [
                'phone' => '(11) 3456-7890',
                'whatsapp' => '(11) 99876-5432',
                'email' => 'contato@troncoforte.com.br',
                'address' => 'Rua das Madeiras, 123 - Vila Industrial, São Paulo - SP'
            ]
        ];

        $this->app->render('homepage', array_merge($data, $this->getCommonData()));
    }

    public function produtos(): void
    {
        $data = ['page_title' => 'Nossos Produtos - Tronco Forte'];
        $this->app->render('produtos', array_merge($data, $this->getCommonData()));
    }

    public function projetos(): void
    {
        $data = ['page_title' => 'Nossos Projetos - Tronco Forte'];
        $this->app->render('projetos', array_merge($data, $this->getCommonData()));
    }

    public function sustentabilidade(): void
    {
        $data = ['page_title' => 'Sustentabilidade - Tronco Forte'];
        $this->app->render('sustentabilidade', array_merge($data, $this->getCommonData()));
    }

    public function sobre(): void
    {
        $data = ['page_title' => 'Sobre Nós - Tronco Forte'];
        $this->app->render('sobre', array_merge($data, $this->getCommonData()));
    }

    public function contato(): void
    {
        $data = ['page_title' => 'Contato - Tronco Forte'];
        $this->app->render('contato', array_merge($data, $this->getCommonData()));
    }

    public function submitContact(): void
    {
        // Processar formulário de contato
        $name = $this->app->request()->data->name ?? '';
        $email = $this->app->request()->data->email ?? '';
        $phone = $this->app->request()->data->phone ?? '';
        $message = $this->app->request()->data->message ?? '';

        // Aqui você pode implementar o envio de email, salvar no banco, etc.
        // Por enquanto, apenas retorna sucesso
        
        $this->app->json([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.'
        ]);
    }
}