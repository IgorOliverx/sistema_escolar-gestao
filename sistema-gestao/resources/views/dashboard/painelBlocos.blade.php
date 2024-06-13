@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <div class="main-content" id="main-content">
        <div class="sidebar" id="sidebar">
            <h3>Ativos - Bloco A</h3>
            <a href="#" class="room-link" data-room="05A"><i class="fa-solid fa-users"></i> Sala 05-A</a>
            <a href="#" class="room-link" data-room="07A"><i class="fa-solid fa-users"></i> Sala 07-A</a>
            <a href="#" class="room-link" data-room="08A"><i class="fa-solid fa-users"></i> Sala 08-A</a>
            <a href="#" class="room-link" data-room="10A"><i class="fa-solid fa-users"></i> Sala 10-A</a>
            <a href="#" class="room-link" data-room="15A"><i class="fa-solid fa-users"></i> Sala 15-A</a>
        </div>
        <div class="content" id="content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Sala<h2 id="room-title"></h2></h2>
                <div>

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
