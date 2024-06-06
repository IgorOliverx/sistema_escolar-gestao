@extends('layouts.master')

<style>

    .footer {
        width: 100%;
        height: 330px;
        margin: 0;
        bottom: 0;
        padding: 0;
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
        background-color: #C80101;
    }

    .principal .titulo p {
        font-family: "Archivo Black", sans-serif;
        font-weight: 400;
        font-style: normal;
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
    <div class="social">
        <div class="social-icons">
            <a href="https://www.instagram.com/">
                <i class="fa-brands fa-instagram fa-3x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://www.youtube.com/">
                <i class="fa-brands fa-youtube fa-3x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fa-brands fa-facebook fa-3x mb-3" style="color: #ffffff;"></i>
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
            (XX) XXXXX-XXXX (Telefone/Whatsapp)
            <br>
            XXXXXXXXXXXXXXX (Email)
        </div>
    </div>
    <div class="membros">
        <div class="membros-icons">
            <a href="https://github.com/IgorOliverx">
                <i class="fa-brands fa-github fa-3x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://github.com/LuigiSousaa">
                <i class="fa-brands fa-github fa-3x mb-3" style="color: #ffffff;"></i>
            </a>
            <a href="https://github.com/Ezequielzz">
                <i class="fa-brands fa-github fa-3x mb-3" style="color: #ffffff;"></i>
            </a>
        </div>
    </div>
</div>
