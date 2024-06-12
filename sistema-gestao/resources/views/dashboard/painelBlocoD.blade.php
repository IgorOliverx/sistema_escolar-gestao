@extends('layouts.master')

@section('content')
<style>

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
        font-size: 30px;
        font-weight: 200;
    }
    
</style>
    <x-navbar></x-navbar>

    <div class="main-content" id="main-content">
        <div class="sidebar" id="sidebar">
            <h3>Ativos - Bloco D</h3>
            <a href="#" class="room-link " data-room="14D"><i class="fa-solid fa-users"></i> Sala 14-D</a>
            <a href="#" class="room-link" data-room="6D"><i class="fa-solid fa-users"></i> Sala 6-D</a>
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

                    <tbody id="room-content">

                    </tbody>


                </table>


            </div>
        </div>
    </div>
    <script src="/js/script.js"></script>
@endsection
