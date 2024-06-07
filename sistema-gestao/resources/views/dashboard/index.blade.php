@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <body>

    <h1 style="font-size: 48px">Seja bem vindo {{\Illuminate\Support\Facades\Auth::user()->nome}}</h1>

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
            @endforeach
        </div>
    </div>


    <div class="title-section">Solitação de manutenção</div>
    <div class="row d-flex justify-content-center align-items-center w-50 h-25">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="card-custom">
                <div class="top-right-corner"></div>
                <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                <div class="title">Sala</div>
                <div class="description"></div>
                <a href="">
                    <button class="read-more">Ver Ativos</button>
                </a>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
    </body>
@endsection
