@extends('layouts.master')

<style>
    .nav-item .nav-link2 {
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 17px;
        text-decoration: none;
        transition: 0.35s;
    }   

    .nav-item .nav-link2:last-child:not(right) {
        padding-right: 50px
    }

    .icons-container .nav-item {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .icons-container .nav-link {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<nav class="navbar navbar-expand-lg overflow-hidden" style="background-color: #e30707">
    <div class="container-fluid overflow-hidden">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">
            <img src="/images/logo_senai_branco.png" alt="Logo-Senai" width="180px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                </li>
                <li class="nav-item">
                    <a class="nav-link2 text-light" href="">Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link2 text-light" href="{{ route('estoque') }}">Estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link2 text-light" href="#">Gráficos</a>
                </li>
            </ul>


            {{-- Implementar lógica para que "icons-container" nao seja exibido na login --}}
            <div class="icons-container">
                <ul class="navbar-nav">

                    @if (!\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-user fa-2x"
                                    style="color: #ffffff;"></i></a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit()">
                                    <i class="bi bi-box-arrow-left fa-2x" style="color: #ffffff"></i>
                                </a>
                            </form>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-inbox fa-2x"
                                style="color: #ffffff;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
