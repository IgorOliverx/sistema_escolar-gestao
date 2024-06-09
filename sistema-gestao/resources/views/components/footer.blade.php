@extends('layouts.master')

<style>
    .footer {
        width: 100%;
        margin: 0;
        height: 330px;
        position: relative; /* Change from fixed to relative */
    }

    .social {
        display: flex;
        justify-content: center;
        height: 70px;
        background-color: #e30707;
    }

    .social .social-icons {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }

    .social .social-icons a {
        text-decoration: none;
    }

    .social-icons a:not(:last-child) {
        margin-right: 25px;
    }

    .principal {
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 190px;
        background-color: #af0909;
    }

    .principal .endereco,
    .contato,
    .titulo p {
        font-family: "Archivo Black", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .principal .titulo p {
        font-size: 21px;
    }

    .principal div:not(:last-child) {
        margin-right: 105px;
    }

    .principal div:not(:first-child) {
        margin-left: 200px;
    }

    .membros {
        display: flex;
        justify-content: center;
        height: 70px;
        background-color: #e30707;
    }

    .membros .membros-icons {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }

    .membros-icons a {
        text-decoration: none;
    }

    .membros-icons a:not(:last-child) {
        margin-right: 25px;
    }
</style>

<div class="footer">
    <div class="container-fluid gap-4 w-100 h-10 bg-body-secondary d-flex justify-content-center align-items-center pl-5 pr-5" >
        <p>FALE CONOSCO</p>
        <p>TRABALHE CONOSCO</p>
        <p>POLÍTICA DE PRIVACIDADE</p>
        <p>A LGPD NO SENAI</p>
    </div>
    <div class="social">
        <div class="social-icons">
            <a href="https://www.instagram.com/">
                <i class="fa-brands fa-instagram fa-2x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://www.youtube.com/">
                <i class="fa-brands fa-youtube fa-2x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fa-brands fa-facebook fa-2x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fa-brands fa-linkedin fa-2x mb-3" style="color: #ffffff"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fa-brands fa-whatsapp fa-2x mb-3" style="color: #ffffff"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fa-brands fa-twitter fa-2x mb-3" style="color: #ffffff"></i>
            </a>
        </div>
    </div>
    <div class="principal">
        <div class="endereco">
            <div class="titulo">
                <p>SENAI Luiz Varga</p>
            </div>
            Praça Professor Antonio de Queiroz,
            <br>
            72 - Jardim Mercedes, Limeira - SP, 13480-251
        </div>
        <div class="contato">
            <div class="titulo">
                <p>Central de Relacionamento</p>
            </div>
            (11) 3322-0050 (Telefone/WhatsApp)
            <br>
            0800-055-1000 (Interior de SP, somente telefone fixo)
        </div>
    </div>
    <div class="membros">
            <p class="text-white">Copyright 2024 © Todos os direitos reservados.</p>
    </div>
</div>
