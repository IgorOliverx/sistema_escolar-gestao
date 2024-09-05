@extends('layouts.master')

<style>
    .container-fluid {
        display: flex;
        justify-content: space-between;
    }

    .nav-link {
        font-family: "Montserrat", sans-serif;
    }

    .nav-link button {
        font-weight: 600;
    }

    .nav-link button {
        width: 100px;
        height: 40px;
        color: white;
        background-color: black;
        border: none;
        border-radius: 5px;
        transition: 0.35s;
        margin-right: 10px;
    }

    .nav-link button:hover {
        background-color: #1c1c1c;
    }
</style>

<nav class="navbar navbar-expand-lg" style="background-color: #e30707">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="/images/logo_senai_branco.png" alt="Logo-Senai" width="180px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('login') }}"><button>Entrar</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
