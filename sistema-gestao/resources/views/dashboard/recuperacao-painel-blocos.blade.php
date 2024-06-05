@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>

    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }
        .main-content {
            display: flex;
            flex: 1;
            overflow: hidden;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #e82e2e;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            height: 100vh;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            cursor: pointer;
        }
        .sidebar a:hover {
            background: #cd1b1b;
        }
        .content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
        }
        .table-responsive {
            overflow-y: auto;
            max-height: calc(100vh - 140px);
        }
    </style>

    <div class="main-content">
        <div class="sidebar">
            <h3 class="mb-4">Ativos - Bloco A</h3>
            <a href="#" class="room-link" data-room="sala-10a"><i class="fa-solid fa-user"></i> Sala 10-A</a>
            <a href="#" class="room-link" data-room="sala-8a"><i class="fa-solid fa-users"></i> Sala 8-A</a>
            <a href="#" class="room-link" data-room="sala-outra"><i class="fa-solid fa-tachometer-alt"></i> ...</a>
        </div>
        <div class="content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 id="room-title">Sala 10-A</h2>
                <div>
                    <button class="btn btn-primary">Novo Ativo</button>
                    <button class="btn btn-secondary">Alguma Opção</button>
                    <button class="btn btn-secondary">Alguma Opção</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Número Patrimonial</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Operações</th>
                    </tr>
                    </thead>

                    @forelse($ativosBlocoA as $ativo)
                        <tbody id="room-content">
                        <tr>
                            <td>{{ $ativo->nome }}</td>
                            <td>{{ $ativo->patrimonio }}</td>
                            <td>{{ $ativo->categoria_patrimonio }}</td>
                            <td><span class="badge bg-success">Ativo</span></td>
                            <td><button class="btn btn-danger">Excluir</button></td>
                        </tr>
                        </tbody>
                    @empty
                        <h2 class="text">Nenhum patrimônio encontrado</h2>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

    <!-- Incluindo jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('.room-link').click(function(e) {
        //         e.preventDefault();
        //         var room = $(this).data('room');
        //         loadRoomData(room);
        //     });

        //     function loadRoomData(room) {
        //         // TESTE de titulo
        //         $('#room-title').text(room.replace('-', ' '));

        //         // Simulação de dados da sala (substitua isso pela chamada do bd)
        //         var data = {
        //             'sala-10a': [
        //                 { name: 'George Lundeot', patrimonial: '+4 215 25 62', email: 'carlem@random.no', status: 'Ativo' }
        //             ],
        //             'sala-8a': [
        //                 { name: 'Jane Doe', patrimonial: '+1 123 45 67', email: 'jane.doe@example.com', status: 'Ativo' }
        //             ],
        //             'sala-outra': [
        //                 { name: 'John Smith', patrimonial: '+3 987 65 43', email: 'john.smith@example.com', status: 'Inativo' }
        //             ]
        //       };

        //       var roomData = data[room] || [];

        //       // Limpar o conteúdo atual
        //       $('#room-content').empty();

        //       // Inserir novos dados
        //       roomData.forEach(function(member) {
        //           var statusBadge = member.status === 'Ativo' ? 'bg-success' : 'bg-danger';
        //           var row = `
        //           <tr>
        //               <td>${member.name}</td>
        //               <td>${member.patrimonial}</td>
        //               <td>${member.email}</td>
        //               <td><span class="badge ${statusBadge}">${member.status}</span></td>
        //               <td><button class="btn btn-danger">Excluir</button></td>
        //           </tr>
        //       `;
        //           $('#room-content').append(row);
        //       });
        //   }
        //});
    </script>

@endsection

<!-- CODIGO ESTOQUE, NÃO APAGAR POR FAVOR -->
<!-- @extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>

    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
        }
        .table-responsive {
            overflow-y: auto;
            max-height: calc(100vh - 140px);
        }
    </style>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Estoque</h2>
            <div>
                <button class="btn btn-primary">Novo Item</button>
                <button class="btn btn-secondary">Opção 1</button>
                <button class="btn btn-secondary">Opção 2</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome do Item</th>
                        <th>Quantidade</th>
                        <th>Localização</th>
                        <th>Data de Adição</th>
                        <th>Estado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody id="stock-content">

                Conteúdo inicial do estoque -->
    <!-- <tr>
                    <td>Item Exemplo 1</td>
                    <td>50</td>
                    <td>Armazém A</td>
                    <td>2023-06-01</td>
                    <td><span class="badge bg-success">Disponível</span></td>
                    <td><button class="btn btn-danger">Excluir</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection -->
