@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <body>

    <div class="container mt-5 container-custom" style="z-index: -1">
        <div class="title-section">Blocos</div>

        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                    <div class="title">Bloco A</div>
                    <div class="description">Dedicado às tecnologias da informação, com laboratórios modernos e cursos
                        atualizados.
                    </div>
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
                    <div class="description">Focado na administração escolar, finanças, recursos humanos e contato com
                        empresas parceiras.
                    </div>
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
                    <div class="description">Voltado para ferramentaria e eletroeletrônica, com cursos técnicos e
                        laboratórios avançados.
                    </div>
                    <a href="{{ route('painelBlocosC') }}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch z-0" style="z-index: -10">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-gear fa-3x mb-3 icon"></i>
                    <div class="title">Bloco D</div>
                    <div class="description">Especializado em ferramentaria, com oficinas equipadas para prática e
                        aprendizado técnico.
                    </div>
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


        <div class="title-section">Sua(s) Sala(s)</div>
        <div class="row justify-content-center">
            @foreach($salas as $sala)
                <div class="d-flex align-items-center col-md-4 mb-4">
                    <div class="card-custom">
                        <div class="top-right-corner"></div>
                        <i class="fa-solid fa-chalkboard-user fa-3x mb-3 icon"></i>
                        <div class="title">Sala {{$sala->numero_sala}}</div>
                        <div class="description">Aqui há ferramentas e recursos para facilitar o seu papel como responsável dos ativos patrimoniais de sua sala.</div>
                        <!-- inserir rota da sala do usuário -->
                        <a href="{{route("minhaSala", ['sala' => $sala->numero_sala])}}">
                            <button class="read-more">Ver Sala</button>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


    @if(Gate::allows('manage-tasks'))
        <div class="title-section">Solicitações de Manutenção</div>
        <div class="d-flex align-items-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <div class="title">Ativos em manutenção</div>
                    <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                    <div class="description"></div>
                    <a href="{{route('ativosManutencao')}}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
        </div>
    @else

    @endif



    <div class="circula2" >
        <div class="acerta2">
            <span></span>
            <span></span>
        </div>
        <div class="circulos2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
    <div class="circula">
        <div class="acerta">
            <span></span>
            <span></span>
        </div>
        <div class="circulos">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

    <style>

        .circula {
            position: relative;
            width: 140px;
            height: 160px;
            overflow: hidden;
            top: 150px;
            left:75%;
        }


        .circulos{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            width: 120px;
            height: 100px;
        }
        .circulos span{
            width:3px;
            height: 3px;
            background-color: red;

        }
        .acerta{
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            width: 120px;
            height: 100px;
            position: relative;
            top: 80px;
            left: 46px;
        }
        .acerta span{
            width:3px;
            height: 3px;
            background-color: red;
        }


        .circula2 {
            position: relative;
            width: 140px;
            height: 160px;
            overflow: hidden;
            top: 950px;
            left:15%;
        }


        .circulos2{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            width: 120px;
            height: 100px;
        }
        .circulos2 span{
            width:3px;
            height: 3px;
            background-color: red;

        }
        .acerta2{
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            width: 120px;
            height: 100px;
            position: relative;
            top: 80px;
            left: -46px;
        }
        .acerta2 span{
            width:3px;
            height: 3px;
            background-color: red;
        }


    </style>



    <br>
    <x-noticias></x-noticias>
    <x-footer></x-footer>
    </body>
@endsection
