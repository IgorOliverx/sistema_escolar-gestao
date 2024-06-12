@extends('layouts.master')

<style>

    .footer {
        width: 100%;
        height: 350px;
        position: relative; /* Change from fixed to relative */
        bottom: 0;
        background-color:#e30613 ;
    }

    .social {
        display: flex;
        justify-content: center;
        height: 70px;
        background-color: #e30613 ;
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
        background-color: #b91d32;
    }

    .principal .endereco,
    .contato,
    .titulo p {
    font-family: "Abel", sans-serif;

    }

    .principal .titulo p {
        font-size: 21px;
        text-transform: uppercase;
        font-weight: bolder;

    }
    #foooo{
        font-size: 16px;
        font-family: "Abel", sans-serif;
        margin-bottom: 0;
        margin-top: 4px;
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
        height: 40px;
        align-items: center;
        background-color: #e30707;
    }

    #foo-rdp p{
        margin: 0;
        font-family: "Arial", sans-serif;
        color: #2c2c2c;
        font-size: 14px;
        font-weight: 550;
    }

    .membros-icons a {
        text-decoration: none;
    }

    .membros-icons a:not(:last-child) {
        margin-right: 25px;
    }
</style>

<div class="footer">
    <div id="foo-rdp" class="container-fluid" style="width: 100%; height: 35px;display: flex;justify-content: center;align-items: center;gap: 40px; background-color:#e5e9ea;">
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
            <p id="foooo" class="text-white">Copyright 2024 © Todos os direitos reservados.</p>
    </div>
</div>
