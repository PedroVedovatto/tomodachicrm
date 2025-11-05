<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomodachi CRM - Campanhas</title>
    
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
        
        /* Campaigns Table */
        .campaigns-table {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
        }
        
        .table-header {
            background-color: #f9fafb;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .table-header h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: #111827;
        }
        
        .table-content {
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 1rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid #f3f4f6;
        }
        
        th {
            background-color: #f9fafb;
            font-weight: 600;
            color: #374151;
            font-size: 0.875rem;
        }
        
        td {
            color: #6b7280;
        }
        
        .campaign-name {
            font-weight: 600;
            color: #111827;
        }
        
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .status-pendente {
            background-color: #fef3c7;
            color: #92400e;
        }
        
        .status-enviando {
            background-color: #dbeafe;
            color: #1e40af;
        }
        
        .status-concluida {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .status-erro {
            background-color: #fee2e2;
            color: #991b1b;
        }
        
        .actions {
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
        
        .action-btn.view {
            background-color: #eff6ff;
            color: #2563eb;
        }
        
        .action-btn.view:hover {
            background-color: #dbeafe;
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
        
        .action-btn.send {
            background-color: #dc2626;
            color: white;
        }
        
        .action-btn.send:hover {
            background-color: #b91c1c;
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
                
                <a href="/paginas" class="nav-item">
                    <i class="fas fa-file-alt"></i>
                    <div class="nav-item-text">
                        <h3>Páginas</h3>
                        <p>Organize seu Conteúdo</p>
                    </div>
                </a>
                
                <a href="/textos" class="nav-item">
                    <i class="fas fa-font"></i>
                    <div class="nav-item-text">
                        <h3>Textos</h3>
                        <p>Comunique Claramente</p>
                    </div>
                </a>
                
                <a href="/promocoes" class="nav-item">
                    <i class="fas fa-comment-dots"></i>
                    <div class="nav-item-text">
                        <h3>Promoções</h3>
                        <p>Marketing via WhatsApp</p>
                    </div>
                </a>
                
                <div class="nav-item active">
                    <i class="fas fa-bullhorn"></i>
                    <div class="nav-item-text">
                        <h3>Campanhas</h3>
                        <p>Envie suas Promoções</p>
                    </div>
                </div>
                
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
                    <h1>Campanhas de Marketing</h1>
                    <p>Crie e gerencie campanhas para enviar promoções via WhatsApp</p>
                </div>
                
                <div class="header-right">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar campanhas..." id="searchInput">
                    </div>
                    
                    <a href="{{ route('campanhas.create') }}" class="add-button">
                        <i class="fas fa-plus"></i>
                        Nova Campanha
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
                    <h3>{{ $campanhas->total() }}</h3>
                    <p>Total de Campanhas</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $campanhas->where('status', 'pendente')->count() }}</h3>
                    <p>Pendentes</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $campanhas->where('status', 'concluida')->count() }}</h3>
                    <p>Concluídas</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $campanhas->sum('total_clientes') }}</h3>
                    <p>Clientes Alcançados</p>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="content-section">
                <h2>Histórico de Campanhas</h2>
                <p>Acompanhe o desempenho de suas campanhas de marketing</p>
                
                <div class="campaigns-table">
                    <div class="table-header">
                        <h3>Lista de Campanhas</h3>
                    </div>
                    
                    <div class="table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Campanha</th>
                                    <th>Promoção</th>
                                    <th>Clientes</th>
                                    <th>Status</th>
                                    <th>Progresso</th>
                                    <th>Criada em</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($campanhas as $campanha)
                                <tr>
                                    <td>
                                        <div class="campaign-name">{{ $campanha->promocao->titulo ?? 'N/A' }}</div>
                                    </td>
                                    <td>{{ $campanha->promocao->desconto ?? 'N/A' }}</td>
                                    <td>{{ $campanha->total_clientes }}</td>
                                    <td>
                                        <span class="status-badge status-{{ $campanha->status }}">
                                            {{ ucfirst($campanha->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                                            <div style="flex: 1; background-color: #f3f4f6; height: 8px; border-radius: 4px; overflow: hidden;">
                                                <div style="background-color: #dc2626; height: 100%; width: {{ $campanha->total_clientes > 0 ? ($campanha->enviados / $campanha->total_clientes) * 100 : 0 }}%; transition: width 0.3s;"></div>
                                            </div>
                                            <span style="font-size: 0.75rem; color: #6b7280;">
                                                {{ $campanha->enviados }}/{{ $campanha->total_clientes }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>{{ $campanha->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <div class="actions">
                                            <button class="action-btn view" onclick="viewCampanha({{ $campanha->id }})">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @if($campanha->status === 'pendente')
                                            <button class="action-btn send" onclick="iniciarEnvio({{ $campanha->id }})">
                                                <i class="fas fa-paper-plane"></i>
                                            </button>
                                            @endif
                                            <button class="action-btn edit" onclick="editCampanha({{ $campanha->id }})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn delete" onclick="deleteCampanha({{ $campanha->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" style="text-align: center; padding: 2rem; color: #9ca3af;">
                                        <i class="fas fa-bullhorn" style="font-size: 2rem; margin-bottom: 1rem; display: block;"></i>
                                        Nenhuma campanha criada ainda
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Pagination -->
                @if($campanhas->hasPages())
                <div class="pagination">
                    {{ $campanhas->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Função de busca
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
        
        // Função para visualizar campanha
        function viewCampanha(id) {
            window.location.href = `/campanhas/${id}`;
        }
        
        // Função para editar campanha
        function editCampanha(id) {
            window.location.href = `/campanhas/${id}/edit`;
        }
        
        // Função para iniciar envio
        function iniciarEnvio(id) {
            if (confirm('Tem certeza que deseja iniciar o envio desta campanha?')) {
                fetch(`/campanhas/${id}/iniciar-envio`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Envio iniciado com sucesso!');
                        location.reload();
                    } else {
                        alert('Erro ao iniciar envio');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Erro ao iniciar envio');
                });
            }
        }
        
        // Função para deletar campanha
        function deleteCampanha(id) {
            if (confirm('Tem certeza que deseja remover esta campanha?')) {
                fetch(`/campanhas/${id}`, {
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
                        alert('Erro ao remover campanha');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Erro ao remover campanha');
                });
            }
        }
    </script>
</body>
</html>
