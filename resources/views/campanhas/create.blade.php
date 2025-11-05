<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomodachi CRM - Nova Campanha</title>
    
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
        
        /* Form */
        .form-container {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            max-width: 1000px;
        }
        
        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .form-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        
        .form-section h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            outline: none;
            transition: border-color 0.2s;
        }
        
        .form-group select:focus {
            border-color: #dc2626;
        }
        
        .form-help {
            font-size: 0.75rem;
            color: #6b7280;
            margin-top: 0.25rem;
        }
        
        /* Client Selection */
        .client-selection {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 1rem;
        }
        
        .client-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 0.375rem;
            transition: background-color 0.2s;
        }
        
        .client-item:hover {
            background-color: #f9fafb;
        }
        
        .client-item input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }
        
        .client-info {
            flex: 1;
        }
        
        .client-name {
            font-weight: 500;
            color: #111827;
            margin-bottom: 0.25rem;
        }
        
        .client-details {
            font-size: 0.75rem;
            color: #6b7280;
        }
        
        .select-all {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background-color: #f3f4f6;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }
        
        .select-all input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }
        
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 2rem;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background-color: #dc2626;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #b91c1c;
        }
        
        .btn-secondary {
            background-color: #f3f4f6;
            color: #374151;
        }
        
        .btn-secondary:hover {
            background-color: #e5e7eb;
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
            
            .form-actions {
                flex-direction: column;
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
                
                <a href="/images/sidebar" class="nav-item">
                    <i class="fas fa-image"></i>
                    <div class="nav-item-text">
                        <h3>Imagens</h3>
                        <p>Visualize seu Cardápio</p>
                    </div>
                </a>
                
                <div class="nav-item">
                    <i class="fas fa-file-alt"></i>
                    <div class="nav-item-text">
                        <h3>Páginas</h3>
                        <p>Organize seu Conteúdo</p>
                    </div>
                </div>
                
                <div class="nav-item">
                    <i class="fas fa-font"></i>
                    <div class="nav-item-text">
                        <h3>Textos</h3>
                        <p>Comunique Claramente</p>
                    </div>
                </div>
                
                <a href="/promocoes" class="nav-item">
                    <i class="fas fa-comment-dots"></i>
                    <div class="nav-item-text">
                        <h3>Promoções</h3>
                        <p>Marketing via WhatsApp</p>
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
                    <h1>Nova Campanha</h1>
                    <p>Crie uma nova campanha de marketing para seus clientes</p>
                </div>
                
                <div class="header-right">
                    <div class="header-actions">
                        <i class="fas fa-bell"></i>
                        <i class="fas fa-cog"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            
            <!-- Form -->
            <div class="form-container">
                <form action="{{ route('campanhas.store') }}" method="POST">
                    @csrf
                    
                    <!-- Seleção de Conteúdo -->
                    <div class="form-section">
                        <h3>
                            <i class="fas fa-gift"></i>
                            Selecionar Conteúdo
                        </h3>
                        
                        <div class="form-group">
                            <label for="promocao_id">Promoção</label>
                            <select id="promocao_id" name="promocao_id" required>
                                <option value="">Selecione uma promoção</option>
                                @foreach($promocoes as $promocao)
                                <option value="{{ $promocao->id }}" {{ old('promocao_id') == $promocao->id ? 'selected' : '' }}>
                                    {{ $promocao->titulo }} - {{ $promocao->desconto }}
                                </option>
                                @endforeach
                            </select>
                            <div class="form-help">Escolha a promoção que será enviada</div>
                            @error('promocao_id')
                                <span style="color: #dc2626; font-size: 0.75rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="mensagem_id">Mensagem</label>
                            <select id="mensagem_id" name="mensagem_id" required>
                                <option value="">Selecione uma mensagem</option>
                                @foreach($mensagens as $mensagem)
                                <option value="{{ $mensagem->id }}" {{ old('mensagem_id') == $mensagem->id ? 'selected' : '' }}>
                                    {{ $mensagem->assunto }}
                                </option>
                                @endforeach
                            </select>
                            <div class="form-help">Escolha o template de mensagem</div>
                            @error('mensagem_id')
                                <span style="color: #dc2626; font-size: 0.75rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Seleção de Clientes -->
                    <div class="form-section">
                        <h3>
                            <i class="fas fa-users"></i>
                            Selecionar Clientes
                        </h3>
                        
                        <div class="select-all">
                            <input type="checkbox" id="selectAll" onchange="toggleAllClients()">
                            <label for="selectAll">Selecionar todos os clientes</label>
                        </div>
                        
                        <div class="client-selection">
                            @forelse($clientes as $cliente)
                            <div class="client-item">
                                <input type="checkbox" 
                                       id="cliente_{{ $cliente->id }}" 
                                       name="clientes_selecionados[]" 
                                       value="{{ $cliente->id }}"
                                       {{ in_array($cliente->id, old('clientes_selecionados', [])) ? 'checked' : '' }}>
                                <div class="client-info">
                                    <div class="client-name">{{ $cliente->nome }}</div>
                                    <div class="client-details">{{ $cliente->email }} • {{ $cliente->telefone }}</div>
                                </div>
                            </div>
                            @empty
                            <div style="text-align: center; padding: 2rem; color: #9ca3af;">
                                <i class="fas fa-users" style="font-size: 2rem; margin-bottom: 1rem; display: block;"></i>
                                Nenhum cliente cadastrado
                            </div>
                            @endforelse
                        </div>
                        
                        @error('clientes_selecionados')
                            <span style="color: #dc2626; font-size: 0.75rem;">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-actions">
                        <a href="{{ route('campanhas.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Voltar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Criar Campanha
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Função para selecionar/deselecionar todos os clientes
        function toggleAllClients() {
            const selectAll = document.getElementById('selectAll');
            const clientCheckboxes = document.querySelectorAll('input[name="clientes_selecionados[]"]');
            
            clientCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAll.checked;
            });
        }
        
        // Atualizar checkbox "Selecionar todos" quando clientes individuais forem alterados
        document.querySelectorAll('input[name="clientes_selecionados[]"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const allCheckboxes = document.querySelectorAll('input[name="clientes_selecionados[]"]');
                const checkedCheckboxes = document.querySelectorAll('input[name="clientes_selecionados[]"]:checked');
                const selectAll = document.getElementById('selectAll');
                
                selectAll.checked = allCheckboxes.length === checkedCheckboxes.length;
            });
        });
    </script>
</body>
</html>
