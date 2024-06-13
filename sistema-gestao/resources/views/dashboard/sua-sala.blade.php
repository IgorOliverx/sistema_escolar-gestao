@extends('layouts.master')

@section('content')
<style>
    /* Estilos existentes */
    .text {
        margin-top: 0;
        font-size: 1.1em;
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

    h2,
    h3 {
        font-family: "Archivo Black", sans-serif;
        font-size: 25px;
        font-weight: 400;
    }

    th {
        font-family: "Archivo Black", sans-serif;
        font-size: 15px;
        font-weight: 200;
    }

    .btn {
        font-family: "Archivo Black", sans-serif;
        font-size: 13px;
        font-weight: 200;
    }

    .sidebar h3 {
        font-family: "Archivo Black", sans-serif;
        font-size: 20px;
        font-weight: 200;
    }

    .content h2 {
        font-family: "Archivo Black", sans-serif;
        font-size: 27px;
        font-weight: 200;
    }

    .content .btn {
        font-family: "Archivo Black", sans-serif;
        font-size: 13px;
        font-weight: 200;
    }

    /* Estilos do formulário */
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

    .form-group input,
    .form-group select,
    .form-group textarea {
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

    /* Estilos do botão de fechar */
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

<x-navbar></x-navbar>

<div class="main-content" id="main-content">
    <div class="sidebar" id="sidebar">
        <h3>Ativos - Bloco A</h3>
        <a href="#" class="room-link" data-room="{{\Illuminate\Support\Facades\Request::segment(3)}}"><i class="fa-solid fa-users"></i> Sala {{\Illuminate\Support\Facades\Request::segment(3)}} </a>
    </div>
    <div class="content" id="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Sala<h2 id="room-title"></h2>
        </div>
        <div class="table-responsive" id="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Número Patrimonial</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="room-content">
                    @forelse($ativos as $ativo)
                    <tr>
                        <td>{{ $ativo->nome }}</td>
                        <td>{{ $ativo->patrimonio }}</td>
                        <td>{{ $ativo->categoria_patrimonio }}</td>
                        <td><span class="badge bg-success">Ativo</span></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Nenhum patrimônio encontrado</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-container">

            <div class="card" onclick="showForm('request-modal')">
                <div class="circle"></div>
                <button class="more-info">
                    <span>Solicitar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <h1 class="heading">Solicitar Recursos</h1>
            </div>

            <div class="card" onclick="showForm('removal-modal')">
                <div class="circle"></div>
                <button class="more-info">
                    <span>Solicitar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <h1 class="heading">Solicitar Remoção Ativo</h1>
            </div>
            <div class="card" onclick="showForm('maintenance-modal')">
                <div class="circle"></div>
                <button class="more-info">
                    <span class="modalBtn">Solicitar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <h1 class="heading">Solicitar Manutenção</h1>
            </div>
        </div>

        <!-- Modal para Solicitar Novo Ativo -->
        <div id="request-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeForm('request-modal')">&times;</span>
                <div class="form-container">
                    <h2>Solicitar Novo Ativo</h2>
                    <form action="{{ route('ativos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Ativo</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea id="descricao" name="descricao" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" id="quantidade" name="quantidade" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" name="categoria" required>
                                <option value="eletronico">Eletrônico</option>
                                <option value="movel">Móvel</option>
                                <option value="utensilio">Utensílio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" id="departamento" name="departamento" required>
                        </div>
                        <div class="form-actions">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal para Solicitar Remoção de Ativo -->
        <div id="removal-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeForm('removal-modal')">&times;</span>
                <div class="form-container">
                    <h2>Solicitar Remoção de Ativo</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Ativo</label>
                            <input type="text" id="nome-remocao" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número Patrimonial</label>
                            <input type="text" id="numero-remocao" name="numero" required>
                        </div>
                        <div class="form-group">
                            <label for="motivo">Motivo da Remoção</label>
                            <textarea id="motivo" name="motivo" rows="4" required></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal para Solicitar Manutenção de Ativo -->
        <div id="maintenance-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeForm('maintenance-modal')">&times;</span>
                <div class="form-container">
                    <h2>Solicitar Manutenção de Ativo</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Ativo</label>
                            <input type="text" id="nome-manutencao" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número Patrimonial</label>
                            <input type="text" id="numero-manutencao" name="numero" required>
                        </div>
                        <div class="form-group">
                            <label for="problema">Descrição do Problema</label>
                            <textarea id="problema" name="problema" rows="4" required></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
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
        const modals = ['request-modal', 'removal-modal', 'maintenance-modal'];
        modals.forEach(modalId => {
            if (event.target == document.getElementById(modalId)) {
                closeForm(modalId);
            }
        });
    }
</script>

@endsection