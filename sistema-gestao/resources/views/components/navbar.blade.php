@extends('layouts.master')

<style>
    .navbar-nav .nav-item:not(:last-child) {
        margin-right: 20px;
    }

    .nav-item a {
        font-family: "Archivo Black", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .icons-container {
        display: flex;
        align-items: center;
    }

    .icons-container .navbar-nav {
        width: auto;
        display: flex;
        gap: 20px;
    }

    /* Estilos para o menu hamburger */
    .menu {
        position: fixed;
        right: -300px;
        top: 0;
        width: 300px;
        height: 100%;
        background-color: #fff;
        box-shadow: -2px 0 5px rgba(0,0,0,0.5);
        transition: right 0.3s ease;
        z-index: 1050; /* Para garantir que fique sobre outros elementos */
    }

    .menu.open {
        right: 0;
    }

    .menu-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #e30707;
        color: white;
    }

    .close {
        cursor: pointer;
        font-size: 24px;
    }

    .menu-content {
        padding: 20px;
    }
</style>

<nav class="navbar navbar-expand-lg" style="background-color: #e30707">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">
            <img src="/images/logo_senai_branco.png" alt="Logo-Senai" width="180px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="">Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('estoque') }}">Estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Gráficos</a>
                </li>
            </ul>
            <div class="icons-container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user fa-2x mb-3" style="color: #ffffff;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleMenu()"><i class="fa-solid fa-inbox fa-2x mb-3" style="color: #ffffff;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Menu hamburger para emails -->
<div id="menu" class="menu">
    <div class="menu-header">
        <span class="close" onclick="toggleMenu()">×</span>
        <h2>Email</h2>
    </div>
    <div class="menu-content">
        <form>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('open');
    }
</script>
