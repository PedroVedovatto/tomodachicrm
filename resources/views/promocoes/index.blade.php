<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomodachi CRM - Promoções</title>
    
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
            text-decoration: none;
            color: inherit;
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
        
        /* Add Button */
        .add-button {
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
            text-decoration: none;
        }
        
        .add-button:hover {
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
        
        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
        }
        
        .stat-card h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #dc2626;
            margin-bottom: 0.5rem;
        }
        
        .stat-card p {
            font-size: 0.875rem;
            color: #6b7280;
            margin: 0;
        }
        
        /* Promotions Grid */
        .promotions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .promotion-card {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .promotion-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.15);
        }
        
        .promotion-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        
        .promotion-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.25rem;
        }
        
        .promotion-discount {
            background-color: #dc2626;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .promotion-description {
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            line-height: 1.5;
        }
        
        .promotion-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 0.75rem;
            color: #9ca3af;
        }
        
        .promotion-validity {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .promotion-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .action-btn {
            padding: 0.375rem 0.75rem;
            border: none;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .action-btn.edit {
            background-color: #f3f4f6;
            color: #374151;
        }
        
        .action-btn.edit:hover {
            background-color: #e5e7eb;
        }
        
        .action-btn.delete {
            background-color: #fef2f2;
            color: #dc2626;
        }
        
        .action-btn.delete:hover {
            background-color: #fee2e2;
        }
        
        .action-btn.view {
            background-color: #eff6ff;
            color: #2563eb;
        }
        
        .action-btn.view:hover {
            background-color: #dbeafe;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }
        
        .pagination a, .pagination span {
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            text-decoration: none;
            color: #374151;
            font-size: 0.875rem;
        }
        
        .pagination a:hover {
            background-color: #f3f4f6;
        }
        
        .pagination .active {
            background-color: #dc2626;
            color: white;
            border-color: #dc2626;
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
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .promotions-grid {
                grid-template-columns: 1fr;
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
                
                <a href="/colors" class="nav-item">
                    <i class="fas fa-palette"></i>
                    <div class="nav-item-text">
                        <h3>Cores</h3>
                        <p>Marca do seu Espaço</p>
                    </div>
                </a>
                
                <a href="/images" class="nav-item">
                    <i class="fas fa-image"></i>
                    <div class="nav-item-text">
                        <h3>Imagens</h3>
                        <p>Visualize seu Cardápio</p>
                    </div>
                </a>
                
                <div class="nav-item active">
                    <i class="fas fa-comment-dots"></i>
                    <div class="nav-item-text">
                        <h3>Promoções</h3>
                        <p>Marketing via WhatsApp</p>
                    </div>
                </div>
                
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
                    <h1>Marketing via WhatsApp</h1>
                    <p>Crie e gerencie promoções para seus clientes</p>
                </div>
                
                <div class="header-right">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar promoções..." id="searchInput">
                    </div>
                    
                    <a href="{{ route('promocoes.create') }}" class="add-button">
                        <i class="fas fa-plus"></i>
                        Nova Promoção
                    </a>
                    
                    <div class="header-actions">
                        <i class="fas fa-bell"></i>
                        <i class="fas fa-cog"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>{{ $promocoes->total() }}</h3>
                    <p>Total de Promoções</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $promocoes->where('ativa', true)->count() }}</h3>
                    <p>Promoções Ativas</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $promocoes->where('validade', '>=', now())->count() }}</h3>
                    <p>Válidas</p>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="content-section">
                <h2>Suas Promoções</h2>
                <p>Gerencie todas as promoções criadas para campanhas de marketing</p>
                
                <div class="promotions-grid">
                    @forelse($promocoes as $promocao)
                    <div class="promotion-card">
                        <div class="promotion-header">
                            <div>
                                <div class="promotion-title">{{ $promocao->titulo }}</div>
                            </div>
                            <div class="promotion-discount">{{ $promocao->desconto }}</div>
                        </div>
                        
                        <div class="promotion-description">
                            {{ Str::limit($promocao->descricao, 120) }}
                        </div>
                        
                        <div class="promotion-details">
                            <div class="promotion-validity">
                                <i class="fas fa-calendar"></i>
                                <span>Válida até {{ $promocao->validade->format('d/m/Y') }}</span>
                            </div>
                            <div>
                                <span style="color: {{ $promocao->ativa ? '#059669' : '#dc2626' }}; font-weight: 500;">
                                    {{ $promocao->ativa ? 'Ativa' : 'Inativa' }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="promotion-actions">
                            <button class="action-btn view" onclick="viewPromocao({{ $promocao->id }})">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn edit" onclick="editPromocao({{ $promocao->id }})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn delete" onclick="deletePromocao({{ $promocao->id }})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 3rem; color: #9ca3af;">
                        <i class="fas fa-gift" style="font-size: 3rem; margin-bottom: 1rem; display: block;"></i>
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Nenhuma promoção criada</h3>
                        <p>Crie sua primeira promoção para começar suas campanhas de marketing</p>
                    </div>
                    @endforelse
                </div>
                
                <!-- Pagination -->
                @if($promocoes->hasPages())
                <div class="pagination">
                    {{ $promocoes->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Função de busca
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.promotion-card');
            
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        
        // Função para visualizar promoção
        function viewPromocao(id) {
            window.location.href = `/promocoes/${id}`;
        }
        
        // Função para editar promoção
        function editPromocao(id) {
            window.location.href = `/promocoes/${id}/edit`;
        }
        
        // Função para deletar promoção
        function deletePromocao(id) {
            if (confirm('Tem certeza que deseja desativar esta promoção?')) {
                fetch(`/promocoes/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Erro ao desativar promoção');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Erro ao desativar promoção');
                });
            }
        }
    </script>
</body>
</html>
