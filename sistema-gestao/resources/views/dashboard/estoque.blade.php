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
        h2 {
            font-family: "Archivo Black", sans-serif;
            font-size: 25px;
            font-weight: 400;
        }

        th {
            font-family: "Archivo Black", sans-serif;
            font-size: 15px;
            font-weight: 200;
        }

        button {
            border: none;
        }

        .btn {
            font-family: "Archivo Black", sans-serif;
            font-size: 13px;
            font-weight: 200;
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

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #ffffff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: black;
        }

        .form-container {
            width: 100%;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            width: 100%;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-actions {
            text-align: right;
            width: 100%;
        }

        .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }

        .form-actions button:hover {
            background-color: #218838;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Estoque</h2>
            <div>
                <button class="btn btn-success" onclick="showForm('new-item-modal')">Novo Item</button>
                <button class="btn btn-danger" onclick="showForm('remove-item-modal')">Realizar Baixa</button>
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
                <!-- Conteúdo inicial do estoque -->
                <tr>
                    <td>Item Exemplo 1</td>
                    <td>50</td>
                    <td>Armazém A</td>
                    <td>2023-06-01</td>
                    <td><span class="badge bg-success">Disponível</span></td>
                    <td><button><i class="fa-solid fa-pen"></i></button> <button><i class="fa-solid fa-trash"></i></button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para Novo Item -->
    <div id="new-item-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForm('new-item-modal')">&times;</span>
            <div class="form-container">
                <h2>Novo Item</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome do Item</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" id="quantidade" name="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="localizacao">Localização</label>
                        <input type="text" id="localizacao" name="localizacao" required>
                    </div>
                    <div class="form-group">
                        <label for="data_adicao">Data de Adição</label>
                        <input type="date" id="data_adicao" name="data_adicao" required>
                    </div>
                    <div class="form-actions">
                        <button type="submit">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para Remover Item -->
    <div id="remove-item-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForm('remove-item-modal')">&times;</span>
            <div class="form-container">
                <h2>Remover Item</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome_remocao">Nome do Item</label>
                        <input type="text" id="nome_remocao" name="nome_remocao" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade_remocao">Quantidade</label>
                        <input type="number" id="quantidade_remocao" name="quantidade_remocao" required>
                    </div>
                    <div class="form-group">
                        <label for="motivo">Motivo da Remoção</label>
                        <textarea id="motivo" name="motivo" rows="4" required></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="submit">Remover</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showForm(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeForm(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        window.onclick = function(event) {
            const modals = ['new-item-modal', 'remove-item-modal'];
            modals.forEach(modalId => {
                if (event.target == document.getElementById(modalId)) {
                    closeForm(modalId);
                }
            });
        }
    </script>

@endsection
