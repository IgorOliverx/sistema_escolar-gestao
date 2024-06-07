@extends('layouts.master')

@section('content')
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

                <table class="table table-striped" id="room-table">
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

                    </tbody>


                </table>


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
                        <span>Solicitar</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <h1 class="heading">Solicitar Manutenção</h1>
                </div>
            </div>
        </div>


    </div>

    <script src="/js/script.js"></script>
@endsection
