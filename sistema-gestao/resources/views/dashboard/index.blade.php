@extends('layouts.master')


@section('content')
    <x-navbar></x-navbar>
    pagina interna de administrador

    <style>
        body {
            background-image: url('/img/background-dot.png');
            background-repeat: repeat;
        }

        .card-custom {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 100%;
            /* Updated for better responsiveness */
            max-width: 300px;
            height: 390px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            margin: 15px auto;
            /* Center cards on smaller screens */
            background-color: white;
            /* Ensure cards have a white background */
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
    </style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-desktop fa-3x mb-3 icon"></i>
                    <div class="title">Bloco A</div>
                    <div class="description">Dedicado às tecnologias da informação, com laboratórios modernos e cursos atualizados.</div>
                    <a href="{{ route('bloco-a') }}">
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
                    <button class="read-more">Ver Ativos</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-bolt fa-3x mb-3 icon"></i>
                    <div class="title">Bloco C</div>
                    <div class="description">Voltado para ferramentaria e eletroeletrônica, com cursos técnicos e laboratórios avançados.</div>
                    <button class="read-more">Ver Ativos</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-custom">
                    <div class="top-right-corner"></div>
                    <i class="fa-solid fa-gear fa-3x mb-3 icon"></i>
                    <div class="title">Bloco D</div>
                    <div class="description">Especializado em ferramentaria, com oficinas equipadas para prática e aprendizado técnico.</div>
                    <button class="read-more">Ver Ativos</button>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

@endsection
