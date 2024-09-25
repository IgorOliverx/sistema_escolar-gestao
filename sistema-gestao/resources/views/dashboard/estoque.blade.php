@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>

    <style>

    </style>
    <div class="container mt-5 container-custom" style="">
        <div class="title-section">Ações</div>
        <div class="row" style="justify-content: center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" style="margin-bottom: 25px">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <img src="/images/add.svg" alt="">
                    <div class="title">Adicionar</div>
                    <div class="description">
                        Inclua novos itens no estoque. Mantenha o inventário atualizado com as últimas adições e reposições.
                    </div>
                    <a href="{{ route('painelBlocosA') }}">
                        <button class="read-more">Ver Estoque</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <img src="/images/remove.png" alt="">
                    <div class="title">Realizar Baixa</div>
                    <div class="description">
                        Registre a saída de itens do estoque. Controle e documente as baixas para manter um inventário
                        preciso.
                    </div>
                    <a href="{{ route('painelBlocosB') }}">
                        <button class="read-more">Ver Estoque</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <img src="/images/config.png" alt="">
                    <div class="title">Gerenciar Estoque</div>
                    <div class="description">
                        Gerencie a movimentação e o redirecionamento dos itens. Ajuste quantidades e otimize a distribuição
                        dos recursos.
                    </div>
                    <a href="{{ route('gerenciaEstoque') }}">
                        <button class="read-more">Ver Estoque</button>
                    </a>
                </div>
            </div>
        </div>
    @endsection
