@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <body>

    <div class="container mt-5 container-custom" style="z-index: -1">
        <div class="title-section">Blocos</div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" style="margin-bottom: 25px">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <img src="/images/ti.png" alt="">
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
                    <img src="/images/adm.png" alt="">
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
                    <img src="/images/eletronicamecanica.png" alt="">
                    <div class="title">Bloco C</div>
                    <div class="description">Voltado para mecânica e eletroeletrônica, com cursos técnicos e
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
                    <img src="/images/ferramentaria.png" alt="">
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
                    <img src="/images/estoque.png" alt="">
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
                        <img src="/images/suasala.png" alt="">
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



    <br>
    <x-footer></x-footer>
    </body>
@endsection
