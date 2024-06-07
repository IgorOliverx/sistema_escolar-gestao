@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>

    <div class="main-content" id="main-content">
        <div class="sidebar" id="sidebar">
            <h3>Ativos - Bloco C</h3>
            <a href="#" class="room-link active" data-room="15C"><i class="fa-solid fa-users"></i> Sala 15-C</a>
            <a href="#" class="room-link" data-room="19C"><i class="fa-solid fa-users"></i> Sala 19-C</a>
        </div>
        <div class="content" id="content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Sala<h2 id="room-title"></h2></h2>
                <div>
                    <button class="btn btn-primary">Novo Ativo</button>
                    <button class="btn btn-secondary">Alguma Opção</button>
                    <button class="btn btn-secondary">Alguma Opção</button>
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
                    <tbody id="room-content"></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection