@extends('layouts.master')


@section('content')
    <style>
        .content {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #e30707;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container .login {
            width: 220px;
            height: 60px;
            font-family: "Archivo Black", sans-serif;
            font-size: 21px;
            font-weight: 400;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
        }

        .btn-container .saberMais {
            width: 220px;
            height: 60px;
            font-family: "Archivo Black", sans-serif;
            font-size: 21px;
            font-weight: 400;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: white;
            color: black;
            cursor: pointer;
        }

        .section {
            padding: 40px;
        }

        .section h2,
        h4 {
            font-family: "Archivo Black", sans-serif;
            font-size: 30px;
            font-weight: 400;
            text-align: center;
            margin-bottom: 30px;
        }

        .columns {
            display: flex;
            justify-content: space-around;
        }

        .column {
            width: 45%;
        }

        .column h3 {
            font-family: "Archivo Black", sans-serif;
            font-size: 27px;
            font-weight: 400;
        }

        /* Styles for the header section to match the provided image */
        .custom-header {
            background-color: #FF303A;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
        }

        .custom-header h2 {
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

        .custom-header .btn-container button {
            margin: 0;
        }

        .custom-header img {
            width: 500px;
            height: 350px;
        }

        ul,
        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
        }

        body {
            overflow-x: hidden;
        }
    </style>

    <x-navv></x-navv>

    <div class="custom-header">
        <div>
            <h2>Bem-vindo ao sistema de <br> gerenciamento de estoque e <br> ativos patrimoniais do SENAI 505</h2>
            <div class="btn-container">
                <a href="{{ route('login') }}">
                    <button class="login">Login</button>
                </a>
                <a href="">
                    <button class="saberMais">Saber Mais</button>
                </a>
            </div>
        </div>
        <div>
            <img src="/images/welcome.jpg" alt="Imagem de boas-vindas">
        </div>
    </div>

    <div class="content">
        <div class="section">
            <h2>Gerenciamento de ativos</h2>
            <div class="columns">
                <div class="column">
                    <h3>O que é?</h3>
                    <p>
                        O serviço de gerenciamento de ativos da escola é uma plataforma digital projetada para auxiliar na administração eficiente dos recursos educacionais, especificamente de laboratórios e salas de aula. Este sistema permite que usuários autorizados acessem informações detalhadas sobre todos os ativos, incluindo equipamentos e materiais.
                    </p>
                </div>
                <div class="column">
                    <h3>Como funciona?</h3>
                    <p>
                        O serviço de gerenciamento de ativos da escola funciona de maneira simples e eficiente. Usuários autorizados acessam uma plataforma digital onde podem cadastrar novos ativos ou atualizar as informações de ativos já cadastrados.
                    </p>
                    <ul>
                        <li>Nome dos Responsáveis: Professores ou outros funcionários que utilizam o local.</li>
                        <li>Localização: Identificação precisa do local onde os ativos são armazenados ou utilizados.</li>
                        <li>Tipo de Ativo: Categorias como sala de aula, laboratório, equipamentos.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Gerenciamento do estoque escolar</h2>
            <h4>Em processo de desenvolvimento...</h4>
        </div>
    </div>

@endsection
