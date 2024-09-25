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

        .btn-container #btn2 {
            width: 145px;
            height: 55px;
            background-color: white;
            border-radius: 7px;
            transition: 0.35s
        }

        .btn-container #btn2:hover {
            color: black;
            background-color: rgb(239, 239, 239);
        }

        .btn-container #btn1 {
            width: 145px;
            height: 55px;
            background-color: rgb(0, 0, 0);
            border-radius: 7px;
            transition: 0.35s
        }

        .btn-container #btn1:hover {
            color: rgb(255, 255, 255);
            background-color: rgb(39, 39, 39);
        }

        .btn-container a {
            font-family: "Montserrat", sans-serif;
            color: black;
            text-decoration: none;
            font-weight: 700;
        }

        .custom-header img {
            width: 600px;
            height: 450px;
        }

        .infos {
            margin-top: 50px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .infos .infosTitulo h3 {
            display: flex;
            text-align: center;
            font-size: 35px;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            overflow-y: hidden;
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
            justify-content: space-evenly;
            margin-top: 70px;
        }

        .imgContainer {
            width: 350px;
        }

        .textContainer {
            width: 800px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            font-size: 17px;
            font-family: "Montserrat", sans-serif;
        }

        .title {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-size: 40px;
        }

        .containerInvertido {
            display: flex;
            justify-content: space-evenly;
            margin-top: 70px;
        }

        .textContainerInvertido {
            width: 800px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            font-size: 17px;
            font-family: "Montserrat", sans-serif;
        }

        .titleInvertido {
            display: flex;
            align-self: flex-start;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-size: 40px;
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
            <h2>Bem-vindo ao sistema de gerenciamento de estoque e <br> ativos patrimoniais do SENAI 505</h2>
            <div class="btn-container">
                <a href="{{ route('login') }}" style="color: white">
                    <button id="btn1">
                        Login
                    </button>
                </a>

                <a href="">
                    <button id="btn2">
                        Saber Mais
                    </button>
                </a>
            </div>
        </div>
        <div>
            <img src="/images/Welcome-cuate.svg" alt="Imagem de boas-vindas">
        </div>
    </div>
    <div class="infos">
        <div class="infosTitulo">
            <h3>Gerencie os ativos patrimoniais <br> e estoque em um único sistema</h3>
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
            <img src="/images/Checking boxes-rafiki.svg" alt="">
        </div>
        <div class="textContainer">
            <div class="title">Conheça o Sistema SENAI 505</div>
            Nosso sistema de gerenciamento de estoque e ativos patrimoniais foi desenvolvido para otimizar o controle e a
            organização dos recursos da unidade SENAI 505. Com uma interface simples e eficiente, você pode acompanhar o uso
            dos ativos em tempo real, controlar o estoque com precisão e garantir o funcionamento contínuo dos equipamentos
            essenciais para as operações. Além disso, o sistema permite a emissão de relatórios detalhados para análise e
            planejamento, ajudando a tomar decisões baseadas em dados concretos.

        </div>
    </div>
    <div class="containerInvertido">
        <div class="textContainerInvertido">
            <div class="titleInvertido">Controle Total de Ativos e Estoque</div>
            Reduza o desperdício e aumente a eficiência operacional com uma gestão integrada de ativos e estoque. O sistema
            permite que você registre a entrada e saída de itens, monitore o uso de equipamentos e rastreie ativos desde sua
            aquisição até o fim de sua vida útil. Essa rastreabilidade completa proporciona transparência e segurança,
            garantindo que os recursos estejam sempre disponíveis quando necessários e que os processos de manutenção e
            reposição sejam realizados no momento certo.
            Além disso, a gestão patrimonial do SENAI 505 oferece alertas automáticos para controle de prazos e manutenções
            preventivas, ajudando a evitar perdas e garantindo a longevidade dos equipamentos.

        </div>
        <div class="imgContainer">
            <img src="/images/Team spirit-pana.svg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="imgContainer">
            <img src="/images/Company-rafiki.svg" alt="">
        </div>
        <div class="textContainer">
            <div class="title">Colaboração Eficiente Entre Equipes</div>
            Nosso sistema é ideal para facilitar a comunicação e a colaboração entre equipes de diferentes setores. Com
            todos os dados centralizados e acessíveis em um único lugar, todos os membros da unidade podem acessar as
            informações necessárias em tempo real. Isso garante que a gestão dos recursos seja feita de maneira mais
            eficiente e organizada.
            Com a automação de tarefas repetitivas e a padronização de processos, você otimiza o fluxo de trabalho e libera
            sua equipe para focar em atividades mais estratégicas. A integração com outros sistemas internos também permite
            uma visão holística das operações, garantindo maior controle e planejamento.

        </div>
    </div>
    <x-footer></x-footer>
@endsection
