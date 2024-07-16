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
    }

    .image-container {
        flex: 1;
        background-color: #eaf4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
    }

    .text-container {
        flex: 2;
    }

    .text-container h1 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .text-container p {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 20px;
    }

    .text-container button {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .text-container button:hover {
        background-color: #45a049;
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
    <div class="image-container">
        <img src="phone-illustration.png" alt="">
    </div>
    <div class="text-container">
        <h1>How to design your site footer like we did</h1>
        <p>Our site footer design blends usability and style. We showcase a signature brand element, provide quick access to key links, and ensure mobile responsiveness. Ensure your footer is both visually appealing and functional. Sign up for our newsletter to receive the latest updates on our projects and services. From custom footers to entire site revamps, our team has the expertise to make your vision a reality.</p>
        <button>Learn More</button>
    </div>
</div>

@endsection