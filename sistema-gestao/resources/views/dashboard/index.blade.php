@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <body>

    <h2>EStou no {{\Illuminate\Support\Facades\Auth::user()->nome}}</h2>
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
                    <div class="description"></div>
                    <a href="{{ route('estoque') }}">
                        <button class="read-more">Ver Estoque</button>
                    </a>
                </div>
            </div>
        </div>


        <div class="title-section">Sua(s) Sala(s)</div>
        <div class="row">
            @foreach($salas as $sala)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="card-custom">
                        <div class="top-right-corner"></div>
                        <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                        <div class="title">Sala</div>
                        <div class="description">{{$sala->numero_sala}}</div>
                        <a href="{{route("minhaSala", ['sala' => $sala->numero_sala])}}">
                            <button class="read-more">Ver Ativos</button>
                        </a>
                    </div>
                </div>
            <div class="d-flex align-items-center">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                    <div class="title">Sala</div>
                    <div class="description">{{$sala->numero_sala}}</div>
                    <a href="{{route("minhaSala", ['sala' => $sala->numero_sala])}}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @if(Gate::denies('manage-tasks'))

    @else
        <div class="title-section">Solictações de Manutenção</div>
        <div class="row d-flex justify-content-center align-items-center w-50 h-25">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <div class="title">Ativos em manutenção</div>
                    <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                    <div class="description"></div>
                    <a href="{{route('ativosManutencao', [$sala->numero_sala])}}">
                        <button class="read-more">Ver Ativos</button>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <br><br>
    <x-noticias></x-noticias>

    <x-footer></x-footer>
    </body>
@endsection
