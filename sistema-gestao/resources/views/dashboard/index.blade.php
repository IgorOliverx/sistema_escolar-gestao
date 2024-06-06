@extends('layouts.master')


@section('content')
    <x-navbar></x-navbar>

    @if(session()->has('msg'))
        <span class="position-fixed top-50 z-3 w-100 alert alert-success">{{$msg}}</span>
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom" id="card-custom">
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
                <div class="card-custom" id="card-custom">
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
                <div class="card-custom" id="card-custom">
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
                <div class="card-custom" id="card-custom">
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
    </div>


    <h3 class="text-black font-weight-bold">Minhas salas</h3>

    @foreach($sala as $s)
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="card-custom" id="card-custom">
            <div class="top-right-corner"></div>
            <i class="fa-solid fa-bolt fa-3x mb-3 icon"></i>
            <div class="title">{{$s->sala['numero_sala']}}</div>
            <div class="description"></div>
            <a href="{{ route('painelBlocosC') }}">
                <button class="read-more">Ver Ativos</button>
            </a>

        </div>
    </div>
    @endforeach

    <x-footer></x-footer>
@endsection
