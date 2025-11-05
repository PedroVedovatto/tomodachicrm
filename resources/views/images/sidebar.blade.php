<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomodachi CRM - Gerenciar Imagens</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1f2937;
        }
        
        .dashboard {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .sidebar {
            width: 280px;
            background-color: #1f2937;
            color: white;
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 2rem;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background-color: #ef4444;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        .logo-icon::before {
            content: '';
            width: 16px;
            height: 2px;
            background-color: white;
            position: absolute;
        }
        
        .logo-icon::after {
            content: '';
            width: 8px;
            height: 8px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .logo-text h1 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .logo-text p {
            font-size: 0.875rem;
            color: #9ca3af;
        }
        
        .nav-menu {
            flex: 1;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .nav-item.active {
            background-color: #ef4444;
            color: white;
        }
        
        .nav-item:hover:not(.active) {
            background-color: #374151;
        }
        
        .nav-item i {
            width: 20px;
            text-align: center;
        }
        
        .nav-item-text h3 {
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.125rem;
        }
        
        .nav-item-text p {
            font-size: 0.75rem;
            color: #9ca3af;
        }
        
        .nav-item.active .nav-item-text p {
            color: #fecaca;
        }
        
        .copyright {
            margin-top: auto;
            text-align: center;
            font-size: 0.75rem;
            color: #9ca3af;
            padding-top: 1rem;
            border-top: 1px solid #374151;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            background-color: white;
            padding: 2rem;
            overflow-y: auto;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2rem;
        }
        
        .header-left h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.5rem;
        }
        
        .header-left p {
            font-size: 1rem;
            color: #6b7280;
            max-width: 500px;
        }
        
        .header-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .search-bar {
            position: relative;
            width: 300px;
        }
        
        .search-bar input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            outline: none;
            transition: border-color 0.2s;
        }
        
        .search-bar input:focus {
            border-color: #ef4444;
        }
        
        .search-bar i {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        
        .header-actions {
            display: flex;
            gap: 0.75rem;
        }
        
        .header-actions i {
            width: 20px;
            height: 20px;
            background-color: #f3f4f6;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .header-actions i:hover {
            background-color: #ef4444;
            color: white;
        }
        
        /* Upload Button */
        .upload-button {
            background-color: #dc2626;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background-color 0.2s;
        }
        
        .upload-button:hover {
            background-color: #b91c1c;
        }
        
        /* Content Section */
        .content-section {
            margin-bottom: 3rem;
        }
        
        .content-section h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.5rem;
        }
        
        .content-section p {
            font-size: 1rem;
            color: #6b7280;
            margin-bottom: 2rem;
        }
        
        /* Category Tabs */
        .category-tabs {
            display: flex;
            gap: 0;
            margin-bottom: 2rem;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .category-tab {
            padding: 0.75rem 1.5rem;
            border: none;
            background: none;
            color: #6b7280;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.2s;
            white-space: nowrap;
        }
        
        .category-tab.active {
            color: #dc2626;
            border-bottom-color: #dc2626;
        }
        
        .category-tab:hover:not(.active) {
            color: #374151;
        }
        
        /* Image Section */
        .image-section {
            margin-bottom: 3rem;
        }
        
        .image-section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .image-section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.25rem;
        }
        
        .image-section-description {
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .add-button {
            background-color: white;
            color: #374151;
            border: 1px solid #d1d5db;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s;
        }
        
        .add-button:hover {
            background-color: #f9fafb;
            border-color: #9ca3af;
        }
        
        /* Image Grid */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            max-width: 600px;
        }
        
        .image-card {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            transition: all 0.2s;
        }
        
        .image-card:hover {
            border-color: #ef4444;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .image-placeholder {
            width: 100%;
            height: 180px;
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        .image-placeholder i {
            font-size: 3rem;
            color: #9ca3af;
        }
        
        .image-actions {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            gap: 0.25rem;
        }
        
        .image-action {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.75rem;
        }
        
        .image-action.edit {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
        }
        
        .image-action.delete {
            background-color: rgba(220, 38, 38, 0.9);
            color: white;
        }
        
        .image-action:hover {
            transform: scale(1.1);
        }
        
        .image-info {
            padding: 1rem;
        }
        
        .image-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.25rem;
        }
        
        .image-date {
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .sidebar {
                width: 240px;
            }
            
            .main-content {
                padding: 1.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .dashboard {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                padding: 1rem;
            }
            
            .header {
                flex-direction: column;
                gap: 1rem;
            }
            
            .search-bar {
                width: 100%;
            }
            
            .image-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .category-tabs {
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <div class="logo-icon"></div>
                <div class="logo-text">
                    <h1>Tomodachi CRM</h1>
                    <p>Gerencie com Amizade</p>
                </div>
            </div>
            
            <nav class="nav-menu">
                <div class="nav-item" onclick="window.location.href='/'">
                    <i class="fas fa-users"></i>
                    <div class="nav-item-text">
                        <h3>Clientes</h3>
                        <p>Seus Convidados Valiosos</p>
                    </div>
                </div>
                
                <div class="nav-item" onclick="window.location.href='/colors'">
                    <i class="fas fa-palette"></i>
                    <div class="nav-item-text">
                        <h3>Cores</h3>
                        <p>Marca do seu Espaço</p>
                    </div>
                </div>
                
                <div class="nav-item active">
                    <i class="fas fa-image"></i>
                    <div class="nav-item-text">
                        <h3>Imagens</h3>
                        <p>Visualize seu Cardápio</p>
                    </div>
                </div>
                
                <div class="nav-item">
                    <i class="fas fa-comment-dots"></i>
                    <div class="nav-item-text">
                        <h3>Promoções</h3>
                        <p>Marketing via WhatsApp</p>
                    </div>
                </div>
                
                <div class="nav-item">
                    <i class="fas fa-cog"></i>
                    <div class="nav-item-text">
                        <h3>Usuários</h3>
                        <p>Gerenciamento da Equipe</p>
                    </div>
                </div>
            </nav>
            
            <div class="copyright">
                © 2024 Tomodachi CRM
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    <h1>Visualize seu Cardápio</h1>
                    <p>Simplifique as operações e melhore a experiência do cliente</p>
                </div>
                
                <div class="header-right">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    
                    <button class="upload-button" onclick="uploadImage()">
                        <i class="fas fa-upload"></i>
                        Upload de Imagens
                    </button>
                    
                    <div class="header-actions">
                        <i class="fas fa-bell"></i>
                        <i class="fas fa-cog"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="content-section">
                <h2>Gerenciador de Imagens</h2>
                <p>Gerencie as imagens do cardápio online e do site</p>
                
                <!-- Category Tabs -->
                <div class="category-tabs">
                    <button class="category-tab active" onclick="filterCategory('todas')">Todas as Categorias</button>
                    <button class="category-tab" onclick="filterCategory('entradas')">Entradas</button>
                    <button class="category-tab" onclick="filterCategory('principal')">Principal (Temakis e Peças)</button>
                    <button class="category-tab" onclick="filterCategory('bebidas')">Bebidas</button>
                    <button class="category-tab" onclick="filterCategory('site_banners')">Site e Banners</button>
                </div>
                
                <!-- Entradas Section -->
                <div class="image-section" data-category="entradas">
                    <div class="image-section-header">
                        <div>
                            <div class="image-section-title">Entradas</div>
                            <div class="image-section-description">Aperitivos e pratos iniciais</div>
                        </div>
                        <button class="add-button" onclick="addImage('entradas')">
                            <i class="fas fa-plus"></i>
                            + Adicionar
                        </button>
                    </div>
                    
                    <div class="image-grid">
                        <div class="image-card">
                            <div class="image-placeholder">
                                <i class="fas fa-image"></i>
                                <div class="image-actions">
                                    <button class="image-action edit" onclick="editImage(1)">
                                        <i class="fas fa-camera"></i>
                                    </button>
                                    <button class="image-action delete" onclick="deleteImage(1)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="image-info">
                                <div class="image-title">Gyoza Tradicional</div>
                                <div class="image-date">2024-01-10</div>
                            </div>
                        </div>
                        
                        <div class="image-card">
                            <div class="image-placeholder">
                                <i class="fas fa-image"></i>
                                <div class="image-actions">
                                    <button class="image-action edit" onclick="editImage(2)">
                                        <i class="fas fa-camera"></i>
                                    </button>
                                    <button class="image-action delete" onclick="deleteImage(2)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="image-info">
                                <div class="image-title">Sunomono</div>
                                <div class="image-date">2024-01-09</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Principal Section -->
                <div class="image-section" data-category="principal">
                    <div class="image-section-header">
                        <div>
                            <div class="image-section-title">Principal (Temakis e Peças)</div>
                            <div class="image-section-description">Pratos principais do cardápio</div>
                        </div>
                        <button class="add-button" onclick="addImage('principal')">
                            <i class="fas fa-plus"></i>
                            + Adicionar
                        </button>
                    </div>
                    
                    <div class="image-grid">
                        <!-- Esta seção está vazia conforme a imagem -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Função para filtrar por categoria
        function filterCategory(category) {
            // Remove active de todas as abas
            document.querySelectorAll('.category-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Adiciona active na aba clicada
            event.target.classList.add('active');
            
            // Mostra/oculta seções baseado na categoria
            document.querySelectorAll('.image-section').forEach(section => {
                if (category === 'todas' || section.dataset.category === category) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }
        
        // Função para upload de imagem
        function uploadImage() {
            alert('Funcionalidade de upload será implementada em breve!');
        }
        
        // Função para adicionar nova imagem
        function addImage(category) {
            alert(`Adicionar nova imagem na categoria: ${category}`);
        }
        
        // Função para editar imagem
        function editImage(id) {
            alert(`Editar imagem ID: ${id}`);
        }
        
        // Função para deletar imagem
        function deleteImage(id) {
            if (confirm('Tem certeza que deseja deletar esta imagem?')) {
                alert(`Imagem ID ${id} deletada com sucesso!`);
            }
        }
        
        // Funcionalidade de busca
        document.querySelector('.search-bar input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const imageCards = document.querySelectorAll('.image-card');
            
            imageCards.forEach(card => {
                const title = card.querySelector('.image-title').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
