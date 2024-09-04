@extends('layouts.master')


@section('content')
    <style>
        .custom-header {
            background-color: #FF303A;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
        }

        .custom-header h2 {
            overflow-y: hidden;
            color: white;
            font-family: "Archivo Black", sans-serif;
            font-size: 40px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        .custom-header .btn-container {
            display: flex;
            gap: 15px;
        }

        .custom-header img {
            width: 500px;
            height: 350px;
        }

        .infos {
            margin-top: 50px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .infos .infosTitulo h3 {
            overflow-y: hidden;
            display: flex;
            text-align: center;
            font-size: 35px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .infosIcon {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            width: 1450px;
        }

        .teste {
            text-align: center;
        }

        .teste h4 {
            overflow-y: hidden;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 70px;
        }

        .imgContainer {
            width: 500px;
            margin-right: 30px;
        }

        .textContainer {
            width: 800px;
            display: flex;
            flex-direction: column;
        }

        .title {
            font-size: 40px;
            font-weight: 700;
        }

        .btn button {
            width: 120px;
            height: 40px;
            background-color: #ff0000;
            border: 2px solid rgb(196, 2, 2);
            color: white;
        }
    </style>

    <x-navv></x-navv>

    <div class="custom-header">
        <div>
            <h2>Bem-vindo ao sistema de <br> gerenciamento de estoque e <br> ativos patrimoniais do SENAI 505</h2>
            <div class="btn-container">
                <a href="{{ route('login') }}">
                    Login
                </a>
                <a href="">
                    Saber Mais
                </a>
            </div>
        </div>
        <div>
            <img src="/images/welcome.jpg" alt="Imagem de boas-vindas">
        </div>
    </div>
    <div class="infos">
        <div class="infosTitulo">
            <h3>Gerencie os ativos patrimoniais <br> e estoque em único sistema</h3>
        </div>
        <div class="infosIcon">
            <div class="teste">
                <div class="icon1"><i class="fa-solid fa-layer-group fa-3x mb-3 icon" style="color: #e30707;"></i></div>
                <h4>Gestão <br> Patrimonial</h4>
            </div>
            <div class="teste">
                <div class="icon2"><i class="fa-solid fa-users fa-3x mb-3 icon" style="color: #e30707;"></i></div>
                <h4>Membros <br> da Unidade</h4>
            </div>
            <div class="teste">
                <div class="icon3"><i class="fa-solid fa-city fa-3x mb-3 icon" style="color: #e30707;"></i></div>
                <h4>Sua <br> Unidade</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="imgContainer">
            <img src="/images/Company-amico.svg" alt="">
        </div>
        <div class="textContainer">
            <div class="title">Lorem ipsum dolor sit amet</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugiat modi itaque voluptatem non quidem possimus
            reprehenderit, eius repellendus eveniet sequi natus eaque minus ipsa velit, porro totam. Dignissimos, qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugiat modi itaque voluptatem non quidem possimus
            reprehenderit, eius repellendus eveniet sequi natus eaque minus ipsa velit, porro totam. Dignissimos, qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugiat modi itaque voluptatem non quidem possimus
            reprehenderit, eius repellendus eveniet sequi natus eaque minus ipsa velit, porro totam. Dignissimos, qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugiat modi itaque voluptatem non quidem possimus
            reprehenderit, eius repellendus eveniet sequi natus eaque minus ipsa velit, porro totam. Dignissimos, qui.
            <div class="btn">
                <button>Teste</button>
            </div>
        </div>
    </div>
@endsection
