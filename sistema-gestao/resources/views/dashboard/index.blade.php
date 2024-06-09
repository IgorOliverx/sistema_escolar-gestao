@extends('layouts.master')

@section('content')
<x-navbar></x-navbar>

<style>
    body {
        margin: 0;
    }

    .card-custom {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        width: 100%;
        max-width: 300px;
        height: 390px;
        border: 1px solid #ddd;
        border-radius: 10px;
        text-align: center;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: relative;
        margin: 15px auto;
        background-color: white;
    }

    .card-custom .icon {
        font-size: 50px;
        color: #333;
        margin-bottom: 15px;
    }

    .card-custom .title,
    .card-custom .read-more {
        font-family: "Archivo Black", sans-serif;
        font-size: 24px;
        font-weight: 400;
        color: #000;
        margin-bottom: 10px;
    }

    .card-custom .description {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }

    .card-custom .read-more {
        background-color: red;
        color: #fff;
        font-size: 17px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
    }

    .card-custom .top-right-corner {
        position: absolute;
        top: 10px;
        right: 0px;
        background-color: red;
        width: 45px;
        height: 8px;
    }

    .title-section {
        text-align: center;
        margin-bottom: 20px;
        font-family: "Archivo Black", sans-serif;
        font-size: 36px;
        color: #000;
        position: relative;
    }

    .title-section::after {
        content: '';
        display: block;
        width: 24px;
        height: 24px;
        border: 2px solid red;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
        margin: 10px auto 0;
    }

    .container-custom {
        padding-bottom: 30px;
    }

    body {
        overflow-x: hidden;
    }
</style>

<body>


    <div class="container mt-5 container-custom">
        <div class="title-section">Blocos</div>

        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                    <div class="title">Bloco A</div>
                    <div class="description">Dedicado às tecnologias da informação, com laboratórios modernos e cursos atualizados.</div>
                    <a href="{{ route('painelBlocosA') }}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-briefcase fa-3x mb-3 icon"></i>
                    <div class="title">Bloco B</div>
                    <div class="description">Focado na administração escolar, finanças, recursos humanos e contato com empresas parceiras.</div>
                    <a href="{{ route('painelBlocosB') }}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-bolt fa-3x mb-3 icon"></i>
                    <div class="title">Bloco C</div>
                    <div class="description">Voltado para ferramentaria e eletroeletrônica, com cursos técnicos e laboratórios avançados.</div>
                    <a href="{{ route('painelBlocosC') }}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-gear fa-3x mb-3 icon"></i>
                    <div class="title">Bloco D</div>
                    <div class="description">Especializado em ferramentaria, com oficinas equipadas para prática e aprendizado técnico.</div>
                    <a href="{{ route('painelBlocosD') }}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="title-section">Estoque</div>
        <div class="row">
            <div class="d-flex align-items-center">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-layer-group fa-3x mb-3 icon"></i>
                    <div class="title">Estoque</div>
                    <div class="description">Visão detalhada do estoque atual da escola. Registro detalhado apresenta todos os itens disponíveis em nosso estoque.</div>
                    <a href="{{ route('estoque') }}">
                        <button class="read-more">Ver Estoque</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="title-section">Sua Sala</div>
        <div class="row">
            <div class="d-flex align-items-center">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-chalkboard-user fa-3x mb-3 icon"></i>
                    <div class="title">Sua Sala Responsável</div>
                    <div class="description">Aqui há ferramentas e recursos para facilitar o seu papel como responsável dos ativos patrimoniais de sua sala.</div>
                    <!-- inserir rota da sala do usuário -->
                    <a href="">
                        <button class="read-more">Ver Sala</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
@endsection