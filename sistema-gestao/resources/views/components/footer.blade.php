@extends('layouts.master')

<style>
    body .footer {
        width: 100%;
    }

    .footer {
        height: 330px;
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

    .social-icons i:not(:last-child) {
        margin-right: 25px;
    }

    .principal {
        height: 190px;
        background-color: #C80101;
    }

    .membros {
        height: 70px;
        background-color: #e30707;
    }
</style>

<div class="footer">
    <div class="social">
        <div class="social-icons">
            <i class="fa-brands fa-instagram fa-3x mb-3" style="color: #ffffff;"></i>
            <i class="fa-brands fa-youtube fa-3x mb-3" style="color: #ffffff;"></i>
            <i class="fa-brands fa-facebook fa-3x mb-3" style="color: #ffffff;"></i>
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
            (XX) XXXXX-XXXX (Telefone/Whatsapp)
            XXXXXXXXXXXXXXX (Email)
        </div>
    </div>
    <div class="membros">

    </div>
</div>