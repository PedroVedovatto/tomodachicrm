<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomodachi CRM - Gerenciar Cores</title>
    
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
        
        a {
            color: inherit;
            text-decoration: none;
        }
        
        a:visited {
            color: inherit;
        }
        
        a:link {
            color: inherit;
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
            text-decoration: none;
            color: inherit;
        }
        
        .nav-item.active {
            background-color: #ef4444;
            color: white !important;
        }
        
        .nav-item.active .nav-item-text h3 {
            color: white !important;
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
            color: inherit;
        }
        
        .nav-item-text p {
            font-size: 0.75rem;
            color: #9ca3af;
        }
        
        .nav-item.active .nav-item-text p {
            color: #fecaca;
        }
        
        .nav-item:visited {
            color: inherit !important;
        }
        
        .nav-item:link {
            color: inherit !important;
        }
        
        .nav-item:focus {
            color: inherit !important;
        }
        
        .nav-item:active {
            color: inherit !important;
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
        
        /* Content Sections */
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
        
        /* Color Management Section */
        .color-management {
            position: relative;
        }
        
        .save-button {
            position: absolute;
            top: 0;
            right: 0;
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
        
        .save-button:hover {
            background-color: #b91c1c;
        }
        
        .color-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
        }
        
        .color-card {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
        }
        
        .color-card-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }
        
        .color-card-header i {
            color: #6b7280;
            font-size: 1.25rem;
        }
        
        .color-card-title h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.25rem;
        }
        
        .color-card-title p {
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .color-swatches {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .color-swatch {
            text-align: center;
        }
        
        .color-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 auto 0.5rem;
            border: 3px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s;
        }
        
        .color-circle:hover {
            transform: scale(1.1);
        }
        
        .color-hex {
            font-size: 0.75rem;
            font-weight: 500;
            color: #6b7280;
            font-family: monospace;
        }
        
        .edit-palette-btn {
            background-color: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            width: 100%;
        }
        
        .edit-palette-btn:hover {
            background-color: #e5e7eb;
            border-color: #9ca3af;
        }
        
        /* Preview Section */
        .preview-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .preview-card {
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .preview-card.dark {
            background-color: #000000;
            border: 2px solid #dc2626;
        }
        
        .preview-card.light {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
        }
        
        .preview-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .preview-card.dark .preview-title {
            color: #dc2626;
        }
        
        .preview-card.light .preview-title {
            color: #000000;
        }
        
        .preview-description {
            font-size: 1rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }
        
        .preview-card.dark .preview-description {
            color: #ffffff;
        }
        
        .preview-card.light .preview-description {
            color: #000000;
        }
        
        .preview-button {
            background-color: #dc2626;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .preview-button:hover {
            background-color: #b91c1c;
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
            
            .color-cards {
                grid-template-columns: 1fr;
            }
            
            .preview-cards {
                grid-template-columns: 1fr;
            }
            
            .save-button {
                position: static;
                margin-bottom: 1rem;
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
                <a href="/clientes" class="nav-item">
                    <i class="fas fa-users"></i>
                    <div class="nav-item-text">
                        <h3>Clientes</h3>
                        <p>Seus Convidados Valiosos</p>
                    </div>
                </a>
                
                <div class="nav-item active">
                    <i class="fas fa-palette"></i>
                    <div class="nav-item-text">
                        <h3>Cores</h3>
                        <p>Marca do seu Espaço</p>
                    </div>
                </div>
                
                <a href="/images" class="nav-item">
                    <i class="fas fa-image"></i>
                    <div class="nav-item-text">
                        <h3>Imagens</h3>
                        <p>Visualize seu Cardápio</p>
                    </div>
                </a>
                
                <a href="/promocoes" class="nav-item">
                    <i class="fas fa-comment-dots"></i>
                    <div class="nav-item-text">
                        <h3>Promoções</h3>
                        <p>Marketing via WhatsApp</p>
                    </div>
                </a>
                
                <a href="/campanhas" class="nav-item">
                    <i class="fas fa-bullhorn"></i>
                    <div class="nav-item-text">
                        <h3>Campanhas</h3>
                        <p>Envie suas Promoções</p>
                    </div>
                </a>
                
                <a href="/usuarios" class="nav-item">
                    <i class="fas fa-cog"></i>
                    <div class="nav-item-text">
                        <h3>Usuários</h3>
                        <p>Gerenciamento da Equipe</p>
                    </div>
                </a>
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
                    <h1>Marca do seu Espaço</h1>
                    <p>Simplifique as operações e melhore a experiência do cliente</p>
                </div>
                
                <div class="header-right">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    
                    <div class="header-actions">
                        <i class="fas fa-bell"></i>
                        <i class="fas fa-cog"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            
            <!-- Color Management Section -->
            <div class="content-section color-management">
                <div class="save-button" onclick="saveChanges()">
                    <i class="fas fa-save"></i>
                    Salvar Alterações
                </div>
                
                <h2>Gerenciar Cores do Site</h2>
                <p>Configure as cores do tema vermelho e preto do site</p>
                
                <div class="color-cards">
                    <!-- Main Palette Card -->
                    <div class="color-card">
                        <div class="color-card-header">
                            <i class="fas fa-palette"></i>
                            <div class="color-card-title">
                                <h3>Paleta Principal</h3>
                                <p>Cores principais do site - preto e vermelho</p>
                            </div>
                        </div>
                        
                        <div class="color-swatches">
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #000000;" data-color="#000000"></div>
                                <div class="color-hex">#000000</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #dc2626;" data-color="#dc2626"></div>
                                <div class="color-hex">#dc2626</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #ffffff;" data-color="#ffffff"></div>
                                <div class="color-hex">#ffffff</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #1f2937;" data-color="#1f2937"></div>
                                <div class="color-hex">#1f2937</div>
                            </div>
                        </div>
                        
                        <button class="edit-palette-btn">Editar Paleta</button>
                    </div>
                    
                    <!-- Red Shades Card -->
                    <div class="color-card">
                        <div class="color-card-header">
                            <i class="fas fa-palette"></i>
                            <div class="color-card-title">
                                <h3>Tons de Vermelho</h3>
                                <p>Variações de vermelho para diferentes elementos</p>
                            </div>
                        </div>
                        
                        <div class="color-swatches">
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #dc2626;" data-color="#dc2626"></div>
                                <div class="color-hex">#dc2626</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #ef4444;" data-color="#ef4444"></div>
                                <div class="color-hex">#ef4444</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #f87171;" data-color="#f87171"></div>
                                <div class="color-hex">#f87171</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #fca5a5;" data-color="#fca5a5"></div>
                                <div class="color-hex">#fca5a5</div>
                            </div>
                        </div>
                        
                        <button class="edit-palette-btn">Editar Paleta</button>
                    </div>
                    
                    <!-- Black and Gray Shades Card -->
                    <div class="color-card">
                        <div class="color-card-header">
                            <i class="fas fa-palette"></i>
                            <div class="color-card-title">
                                <h3>Tons de Preto e Cinza</h3>
                                <p>Escalas de preto e cinza para textos e fundos</p>
                            </div>
                        </div>
                        
                        <div class="color-swatches">
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #000000;" data-color="#000000"></div>
                                <div class="color-hex">#000000</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #1f2937;" data-color="#1f2937"></div>
                                <div class="color-hex">#1f2937</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #374151;" data-color="#374151"></div>
                                <div class="color-hex">#374151</div>
                            </div>
                            <div class="color-swatch">
                                <div class="color-circle" style="background-color: #6b7280;" data-color="#6b7280"></div>
                                <div class="color-hex">#6b7280</div>
                            </div>
                        </div>
                        
                        <button class="edit-palette-btn">Editar Paleta</button>
                    </div>
                </div>
            </div>
            
            <!-- Site Preview Section -->
            <div class="content-section">
                <h2>Visualização do Site</h2>
                <p>Preview de como as cores ficam aplicadas no site</p>
                
                <div class="preview-cards">
                    <!-- Dark Theme Preview -->
                    <div class="preview-card dark">
                        <div class="preview-title">Tomodachi Sushi</div>
                        <div class="preview-description">Sabores autênticos do Japão que conquistam corações</div>
                        <button class="preview-button">Fazer Pedido</button>
                    </div>
                    
                    <!-- Light Theme Preview -->
                    <div class="preview-card light">
                        <div class="preview-title">Menu Especial</div>
                        <div class="preview-description">Descubra nossos pratos exclusivos</div>
                        <button class="preview-button">Ver Menu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Função para salvar alterações
        function saveChanges() {
            // Aqui você pode implementar a lógica para salvar as cores
            // Por enquanto, apenas mostra uma mensagem de sucesso
            
            const saveButton = document.querySelector('.save-button');
            const originalText = saveButton.innerHTML;
            
            saveButton.innerHTML = '<i class="fas fa-check"></i> Salvo!';
            saveButton.style.backgroundColor = '#059669';
            
            setTimeout(() => {
                saveButton.innerHTML = originalText;
                saveButton.style.backgroundColor = '#dc2626';
            }, 2000);
            
            // Aqui você pode fazer uma requisição AJAX para salvar as cores
            // fetch('/colors/update', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            //     },
            //     body: JSON.stringify({
            //         colors: getCurrentColors()
            //     })
            // });
        }
        
        // Função para obter as cores atuais
        function getCurrentColors() {
            const colors = {};
            document.querySelectorAll('.color-circle').forEach(circle => {
                colors[circle.dataset.color] = circle.style.backgroundColor;
            });
            return colors;
        }
        
        // Adicionar funcionalidade de clique nas cores
        document.querySelectorAll('.color-circle').forEach(circle => {
            circle.addEventListener('click', function() {
                // Aqui você pode implementar um color picker
                // Por enquanto, apenas destaca a cor selecionada
                document.querySelectorAll('.color-circle').forEach(c => c.style.border = '3px solid white');
                this.style.border = '3px solid #dc2626';
            });
        });
        
        // Adicionar funcionalidade aos botões de editar paleta
        document.querySelectorAll('.edit-palette-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Aqui você pode implementar a funcionalidade de edição
                alert('Funcionalidade de edição será implementada em breve!');
            });
        });
    </script>
</body>
</html>
