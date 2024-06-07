@extends('layouts.master')

@section('content')
    <style>
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
            background-color: rgba(0,0,0,0.4);
        }

        .modal .content {
            background-color: #ffffff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            height: 500px;
            overflow: scroll;

            display: flex;
            flex-direction: column;
            align-items: center;

            color: black;
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
                </h2>
                <div>
                    <button class="btn btn-success">Solicitar Novo Ativo</button>
                    <button class="btn btn-danger">Solicitar Remoção de Ativo</button>
                    <button class="btn btn-warning">Manutenção...</button>
                </div>
            </div>
            <div class="table-responsive" id="table-responsive">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Número Patrimonial</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                        </tr>
                        </thead>

                        @forelse($ativos as $ativo)
                            <tbody id="room-content">
                            <tr>
                                <td>{{ $ativo->nome }}</td>
                                <td>{{ $ativo->patrimonio }}</td>
                                <td>{{ $ativo->categoria_patrimonio }}</td>
                                <td><span class="badge bg-success">Ativo</span></td>
                            </tr>
                            </tbody>
                        @empty
                            <h2 class="text">Nenhum patrimônio encontrado</h2>
                        @endforelse
                    </table>


            </div>
        </div>
            <div class="card-container">

                <div class="card">
                    <div class="circle"></div>
                    <button class="more-info">
                        <span>Solicitar</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <h1 class="heading">Solicitar Novo Ativo</h1>
                </div>

                <div class="card">
                    <div class="circle"></div>
                    <button class="more-info">
                        <span>Solicitar</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <h1 class="heading">Solicitar Remoção Ativo</h1>
                </div>
                <div class="card">
                    <div class="circle"></div>
                    <button class="more-info">
                        <span class="modalBtn">Solicitar</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <h1 class="heading">Solicitar Manutenção</h1>
                </div>
            </div>

            <div class="modal">
                <div class="content">
                    <input type="text" placeholder="Digite o número do patrimonio" id="search-ativo">
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
                            <tbody id="room-content">
                            @forelse($ativos as $ativo)
                                <tr class="class-ativo">
                                    <td>{{ $ativo->nome }}</td>
                                    <td>{{ $ativo->patrimonio }}</td>
                                    <td>{{ $ativo->categoria_patrimonio }}</td>
                                    <td><span class="badge bg-success">Ativo</span></td>
                                    <td><button class="btn btn-warning"><a href="{{route('')}}">Manutenção</a></button></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Nenhum patrimônio encontrado</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




    <script src="/js/modal.js"></script>
@endsection
